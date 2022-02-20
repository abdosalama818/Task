@extends('layout')
@section('body')
<div class="container">
    @include('error')
    @if (request()->session()->has('msg'))
<div class="alert alert-danger">
    <p>{{request()->session()->get('msg')}} return back and search on him and book an appoinment</p>

</div>
    @endif
    <form method="POST" action="{{url('/store/client')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


        <div class="form-group">
            <label for="exampleInputPassword1">adderss</label>
            <input type="text" name="address" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">age</label>
            <input type="text" name="age" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">phone number</label>
            <input type="text" name="phone_No" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">status</label>
           <select name="status" id="">
               <option value="">select</option>
               <option value="new">new</option>
               <option value="old">old</option>
           </select>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection

