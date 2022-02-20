<?php

namespace App\Http\Controllers\Clint;

use App\Models\Client;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Examination_list;
use App\Models\Examination_prices;
use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\Payment;

class ClientContrller extends Controller
{
    public function store_client(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:255|string|unique:clients',
            'age' => 'required|numeric',
            'address' => 'required|string',
            'phone_No' => 'required|numeric|min:11',

        ]);

        if ($request->status == 'new'){
            Client::create([
                'name'=>$request->name,
                'age'=>$request->age,
                'address'=>$request->address,
                'phone_No'=>$request->phone_No,
                'status'=>$request->status,
            ]);

        }elseif($request->status == 'old'){
            $request->session()->flash('msg','this user already exist');
            return back();
        }

        return redirect(url("clients"));
    }


    public function show_all_clients(){
        $clints = Client::all();
        return view('clients.clients',[
            'clients'=>$clints
        ]);
    }


    public function book_appoimen($id){

        return view('clients.page2',[
            'id'=>$id
        ]);
    }

    public function book_client_appoiment($id,Request $request)
    {

        $validated = $request->validate([
            'AppDate' => 'required|date',
            'AppHour' => 'required|string',
            'visit_type' => 'required|string',


        ]);

            Appointment::create([
                'AppDate'=>$request->AppDate,
                'AppHour'=>$request->AppHour,
                "visit_type"=>$request->visit_type,

                'client_id'=>$id,
            ]);


        return redirect(url("clients"));
    }


    public function select_examination_type($id)
    {
        $client = Client::findOrFail($id);
        $list = Examination_list::all();
        return view('clients.select_examination',[
                    'client'=> $client,
                    'list'=>$list
                ]);
            }

            public function store_select_examination_type($id , Request $request){


                $validated = $request->validate([
                    'examination_type' => 'required|string',
                    'examination_price' => 'required|numeric',



                ]);

                Examination_prices::create([
                    'examination_name'=>$request->examination_type,
                    'examination_price'=> $request->examination_price,
                    'client_id'=>$id,
                ]);
                return back();


            }


            public function payment($id){

                $client = Client::findOrFail($id);
                $total = 0 ;

                foreach ($client->Examination_pricess as $z ){
                    $total = $total + $z->examination_price;
                }
                $date = null ;
                foreach ( $client->Appointments as $var ){
                    $date = $var->AppDate;
                }



                Payment::create([
                    'total'=> $total,
                    'payment_date'=>  $date ,
                    "client_id" => $id
                ]);
                $client->update([
                    'status'=>'old'
                ]);

                return view('clients.payment',[
                    'client'=>$client,
                    'total' => $total

                ]);
            }


            public function serch_client(Request $request)
            {
                $name = $request->search;
                $clints = Client::where('name','like',"%$name%")->get();
                return view('clients.clients',[
                    'clients' => $clints,
                    'name'=>$name

                ]);
            }


            public function assesment_view($id){
                $client = Client::findOrFail($id);

                return view('clients.assessment',[
                    'client'=>$client
                ]);
            }

            public function assesment_store($id,Request $request)
            {

                Assessment::create([
                    'Drug_Prescription'=> $request->Drug_Prescription,
                    'Diagnosis'=> $request->Diagnosis,
                    'Lab'=>  $request->Lab ,
                    "client_id" => $id
                ]);
                return back();

            }
}
