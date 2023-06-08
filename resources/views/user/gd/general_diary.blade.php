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
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Father Name" name="fname" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="E-mail" name="email" required>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Mobile" name="mobile" required>
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
                                    <input class="input--style-1" type="text" placeholder="City" name="nid_num" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Union" name="nid_num" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Thana" name="nid_num" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Area" name="nid_num" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="Password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
  
  
  
  
  
  
  
@endsection