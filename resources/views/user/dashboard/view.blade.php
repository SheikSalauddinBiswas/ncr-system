@extends('user.dashboard.dashboard')

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
@foreach($all as $data)
<h4>{{ $data->name }}</h4>

<p class="text-secondary mb-1">Father Name : {{ $data['fname'] }}</p>
<p class="text-muted font-size-sm">Mobile : {{ $data['mobile'] }}</p>
<p class="text-muted font-size-sm">NID No : {{ $data['nid_num'] }}</p>
<p class="text-muted font-size-sm">{{ $data['city'] }},{{ $data['union'] }}</p>
<p class="text-muted font-size-sm">{{ $data['thana'] }},{{ $data['area'] }}</p>

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
<h6 class="mb-0">Email </h6>
</div>
<div class="col-sm-9 text-secondary">
{{ $data['email'] }}
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
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">GD No :</h6>
</div>
<div class="col-sm-9 text-secondary">
{{ $data['gd_no'] }}
</div>
</div>
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
    Date : {{ $data->crime_date }}
</small>

</div>
</div>
</div>
<div class="col-sm-6 mb-3">
<div class="card h-100">
<div class="card-body">
<h6 class="d-flex align-items-center mb-3">Identification Data :</h6>
<small>Color Of the Product : {{ $data['color_product'] }}</small>
<br>
<!-- <small>Product Document :<img src="{{ asset($data->product_document) }}" alt="" width="20%"></small> -->


<small>Product Document :
    
<button type="button"
            class="btn btn-secondary btn-sm"
            data-toggle="modal"
            data-target="#exampleModal">
        Show Document
    </button>
    <!-- Modal -->
    <div class="modal fade"
         id="exampleModal"
         tabindex="-1"
         role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
 
                <!-- Add image inside the body of modal -->
                <div class="modal-body">
                    <img id="image"
                         src=
"{{ asset($data->product_document) }}"
                         alt="Click on button" width="450px" />
                </div>
 
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

</small>







<br>
<small>Identifier Data : {{ $data['identifier_data'] }}</small>
<br>
<small>Additional Data Of Crime : {{ $data['addi_data_crime'] }}</small>
<br>
<small class="text-danger">
    Status : <u>{{ $data['status'] }}</u> 

  
    @endforeach





    
    <!-- <a href="" class="btn btn-success btn-sm">Edit </a> -->
</small>
<br>
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