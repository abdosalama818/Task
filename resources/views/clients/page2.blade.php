@extends('layout')

@section('body')
<div class="container">
    @include('error')

    <form method="POST" action='{{url("/book/client/appoyment/$id")}}'>
        @csrf
        <div class="form-group">
          <label for="date">data</label>
          <input type="date" name="AppDate" class="form-control" id="date" aria-describedby="emailHelp">

        </div>

        <div class="form-group">
            <label for="hours">hours</label>
            <input type="text" name="AppHour" class="form-control" id="hours">
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="visit_type" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
               examination
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="visit_type" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                consultation
            </label>
          </div>








        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection

