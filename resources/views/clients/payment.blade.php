@extends('layout')

@section('body')
<div class="container">
    <div class="item">
        <h1>details</h1>
        <h6>client name : {{$client->name}}</h6>
    <h6>client age : {{$client->age}}</h6>
    <h6>client phone : {{$client->phone_No}}</h6>
    <h6>examination fees : {{$total}}</h6>


    </div>
<table class="table">
    <thead>
        <tr>

            <th>examination name</th>
            <th>examination price</th>
            <th>date</th>
            <th>hours</th>


        </tr>
    </thead>
    <tbody>
    @foreach ($client->Examination_pricess as $z )

        <tr>

            <td>{{ $z->examination_name }}</td>
            <td>{{ $z->examination_price }}</td>
            @foreach ( $client->Appointments as $var )

            <td>

               {{$var->AppDate}}
               {{$var->AppHour}}
            </td>
            @endforeach

        </tr>
        @endforeach


    </tbody>
</table>

@endsection





