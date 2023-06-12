@extends('user.dashboard.dashboard')

@section('content')
  <h1>
    <u> General-Diary...!</u>
  </h1>
  <hr>
  
    <h2><p class="text-center text-success">Please Fill Up The Form .</p></h2><br>
    
    
    <div class="card card-1">
                <div class="card-body">
                    <h3><p class="text-secondary">Victim Information :</p></h3>
                    <form action="{{ route('user.dashboard.store') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Father Name" name="fname" >
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="E-mail" name="email" required>
                        </div>
                        <div class="row row-space d-flex">
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="Mobile" name="mobile" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="Eergency Mobile" name="emobile" >
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="NID Number" name="nid_num" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space d-flex">
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="City" name="city" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Union" name="union" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Thana" name="thana" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Area" name="area" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Profession" name="profession" >
                                </div>
                            </div>
                        </div>
                        <h3><p class="text-secondary">Crime Data :</p></h3>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Crime Type" name="crime_type" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space d-flex">
                            <label for="exampleFormControlTextarea1">Crime Location</label>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="City" name="c_city" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Union" name="c_union" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Thana" name="c_thana" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Area" name="c_area" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="exampleFormControlTextarea1">Crime Statement  :</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="statement" rows="3" required></textarea>
                        </div>
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <label for="exampleFormControlTextarea1">Time Of Incident  :</label>
                                    <input class="input--style-1" type="time"  name="crime_time" required>
                                </div>
                            </div>
                        </div> 
                        <h3><p class="text-secondary">Identification Data :</p></h3>
                        <div class="row row-space d-flex">
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Color Of The Product" name="color_product" required>
                                </div>
                            </div>
                            <div class="col-6">
                                    <div class="input-group">
                                        <input class="input--style-1" type="file" placeholder="Other Document of Product" name="product_document" >
                                    </div>
                            </div>
                        </div> 
                         <div class="row row-space d-flex">
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Identifier Data" name="identifier_data" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                                <div class="input-group">
                                    <label for="exampleFormControlTextarea1">Additional Data Of Crime  :</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="addi_data_crime" rows="3"></textarea>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Status" name="status" required>
                                </div>
                        </div>
                        


                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
  
  
  
  
  
  
  
@endsection