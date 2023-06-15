@extends('admin.dashboard.admin')

@section('content')




<div class="col-md-12 grid-margin">
    <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">View GD </h3>
        </div>

        <div class="container">
<div class="main-body">


<div class="row gutters-sm">
<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">

<div class="d-flex flex-column align-items-center text-center">

<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
<div class="mt-3">
<h4>{{ $data['name'] }}</h4>
<p class="text-secondary mb-1">Father Name : {{ $data['fname'] }}</p>
<p class="text-muted font-size-sm">Mobile : {{ $data['mobile'] }}</p>
<p class="text-muted font-size-sm">NID No : {{ $data['nid_num'] }}</p>
<p class="text-muted font-size-sm">{{ $data['city'] }},{{ $data['union'] }}</p>
<p class="text-muted font-size-sm">{{ $data['thana'] }},{{ $data['area'] }}</p>
<button class="btn btn-primary">Follow</button>
<button class="btn btn-outline-primary">Message</button>
</div>
</div>

</div>
</div>
</div>
<div class="col-md-8">
<div class="card mb-3">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Profession :</h6>
</div>
<div class="col-sm-9 text-secondary">
{{ $data['profession'] }}
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<a href="{{ $data['email'] }}" class="__cf_email__" data-cfemail="e1878891a18b948a8c9489cf808d">[email&#160;protected]</a>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Emergency-Phone :</h6>
</div>
<div class="col-sm-9 text-secondary">
{{ $data['emobile'] }}
</div>
</div>
<hr>
</div>
</div>

<div class="row gutters-sm">
<div class="col-sm-6 mb-3">
<div class="card h-100">
<div class="card-body">
<h6 class="d-flex align-items-center mb-3">Crime Data :</h6>
<small>Crime Type : {{ $data['crime_type'] }}</small>
<br>
<small><u>Crime Location</u></small>
<br>
<small>{{ $data['c_city'] }} , {{ $data['c_union'] }} , {{ $data['c_thana'] }} , {{ $data['c_area'] }}</small>
<br>
<small>Crime Statement : {{ $data['statement'] }}</small>
<br>
<small>Time : {{ $data['crime_time'] }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
    Date : 
</small>

</div>
</div>
</div>
<div class="col-sm-6 mb-3">
<div class="card h-100">
<div class="card-body">
<h6 class="d-flex align-items-center mb-3">Identification Data :</h6>
<small>Web Design</small>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small>Website Markup</small>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small>One Page</small>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small>Mobile Template</small>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small>Backend API</small>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>















        

    </div>
</div>
@endsection