@extends('user.dashboard.dashboard')

@section('content')
  <h1>
    <u> Dashboard...!</u>
  </h1>
  <hr>
  <br/>
    <div class="card" style="width: 18rem;">
      <img src="{{asset('public/images/book.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">General Diary</h5>
        <p class="card-text">is an important process that allows individuals to record a complaint or report an incident to the police in Bangladesh.</p>
        <a href="{{route('user.gd.general_diary')}}" class="btn btn-primary">Make a GD</a>
      </div>
    </div>
    
  
  
  
  
  
  
  
  
@endsection
		

