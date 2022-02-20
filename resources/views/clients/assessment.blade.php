@extends('layout')

@section('body')
<h1>Doctor Assesments</h1>
@include('error')

<div class="container">
    <form method="POST" action='{{url("/store/assessments/$client->id")}}'>
        @csrf

        <div class="form-group">
            <label for="date">Diagnosis</label>
            <input type="text" name="Drug_Prescription" class="form-control" id="" >

          </div>
        <div class="form-group">
          <label for="date">Diagnosis</label>
          <input type="text" name="Diagnosis" class="form-control" id="" >

        </div>



          <div class="form-group">
            <label for="hours">Lab</label>
            <input type="text" name="Lab" class="form-control" id="">
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
