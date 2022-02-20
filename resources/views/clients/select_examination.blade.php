
@extends('layout')

@section('body')


<h1>hello i ma return you in this page again to if you want to select another examination and it added on total price</h1>
@include('error')

    <div class="container">
        <form method="POST" action='{{url("store/examination/type/$client->id")}}'>
            @csrf

            <h5>client details</h5>

            <ul style="list-style: none">
                <li>{{$client->name}}</li>
                <li>{{$client->age}}</li>
            </ul>



             <div class="form-group">

               <select name="examination_type" id="" class="form-control form-control-lg" >
                   <option value="">select type of examination</option>
                        @foreach ( $list as $ls )
                        <option value="{{$ls->name}}">{{$ls->name}}</option>
                        @endforeach
               </select>
              </div>


             <div class="form-group">

                <select name="examination_price" id="" class="form-control form-control-lg" >
                    <option value="">price</option>
                         @foreach ( $list as $ls )
                         <option value="{{$ls->price}}">{{$ls->price}}</option>
                         @endforeach
                </select>
               </div>







            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
