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
                          <td>{{ $row->gd_no }}</td>
                          <td>{{ $row->crime_time }}</td>
                          <td>
                            <a href="{{ route('admin.general-diary.show',$row->id) }}"><label class="badge badge-success">View GD</label></a>
                            <form action="{{ route('admin.general-diary.destroy',$row->id) }}" method="POST" style="display:inline;">
                            {{ method_field('DELETE') }} {{ csrf_field() }}
                            <button type="submit" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete GD</button>
                            </form>
                          </td>
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