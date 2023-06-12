@extends('admin.dashboard.admin')

@section('content')




<div class="col-md-12 grid-margin">
    <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">General Diary</h3>
        </div>

        


        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title">Report Table</h4>
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id#</th>
                          <th>Name</th>
                          <th>GD.No.</th>
                          <th>Created</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $sl=1; @endphp
                        @foreach($data as $row)
                        <tr>
                          <td>{{$sl++}}</td>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->id }}</td>
                          <td>{{ $row->crime_time }}</td>
                          <td><a href="{{ route('admin.general-diary.edit',$row->id) }}"><label class="badge badge-danger">View GD</label></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>















    </div>
</div>













@endsection