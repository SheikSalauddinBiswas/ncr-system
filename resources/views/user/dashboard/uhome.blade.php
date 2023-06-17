@extends('user.dashboard.dashboard')

@section('content')
  <h1>
    <u> Dashboard...!</u>
  </h1>

  <br/>
    <div class="card position-absolute top-10 start-50 translate-middle-x" style="width: 18rem;">
      <img src="{{asset('public/images/book.png')}}" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title">General Diary</h5>
        <p class="card-text justify-content-center">is an important process that allows individuals to record a complaint or report an incident to the police in Bangladesh.</p>
        <br><br>
        <a href="{{route ('user.dashboard.create')}}" class="btn position-absolute bottom-0 start-50 translate-middle-x btn-primary">Make a GD</a>
      </div>
    </div>
    
  
  
  
  
  
  
  
  
@endsection
		

