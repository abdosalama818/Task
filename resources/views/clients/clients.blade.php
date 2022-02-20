@extends('layout')

@section('body')
<div class="container">

    @include('error')



    <div class="row">
        <div class="col-12">
           <div class="add-client m-2">
            <a class="btn btn-success " href="{{url('/add/client')}}">Add</a>
           </div>
                <div class="card">
                    <div class="card-header">

                        <h3 class="card-title">show all clientegory</h3>


                        <div class="card-tools ">
                      <form action="{{url('/serch/client/')}}" method="get">
                        <div class="form-group ">
                            <input type="text" name="search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                            <button type="submit" class="btn btn-success m-2"><i class="fas fa-search">search</i></button>
                            </div>
                        </div>
                      </form>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>age</th>
                            <th>address</th>
                            <th>phone number</th>
                            <th>satus</th>

                            <th style="text-align: center">action</th>

                            </tr>
                        </thead>
                        <tbody>

                          @foreach ($clients as $client )
                          <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->age}}</td>
                            <td>{{$client->address}}</td>
                            <td>{{$client->phone_No}}</td>
                            <td>{{$client->status}}</td>





                            <td>
                                <a href="{{url('client/book/appoiment',$client->id)}}" target="_blank" class="btn btn-info" rel="noopener noreferrer">book an appointment</a>
                                <a href="{{url('/select/examination/type',$client->id)}}" target="_blank" class="btn btn-info" rel="noopener noreferrer"> Select examination type</a>
                                <a href="{{url('/review',$client->id)}}" target="" class="btn btn-success my-3 " rel="noopener noreferrer">review</a>
                                <a href="{{url('/assessments',$client->id)}}" target="" class="btn btn-success my-3 " rel="noopener noreferrer">Assesments</a>

                            </td>
                            </tr>
                          @endforeach


                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
     </div>
    </div>
</div>

@endsection
