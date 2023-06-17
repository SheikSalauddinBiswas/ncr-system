<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dashboard</title>
 <!-- Icons font CSS-->
 <link href="{{ asset('public/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
<link href="{{ asset('public/css/main.css') }}" rel="stylesheet" media="all">
  </head>
<body>
    
<nav class="navbar navbar-expand-md  bg-secondary">
  <div class="container-fluid justify-content-between">
    <a class="navbar-brand" href="{{url('user/dashboard')}}">NCR-System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      
        
      <form class="d-flex" action="{{ url('user/dashboard/show') }}" method="GET" >
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success btn-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>

<section >
<div class="container-lg">

@yield('content')

</div>


</section>












  <!-- plugins:js -->
  <script src="{{asset('public/vendor/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('public/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('public/vendor/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('public/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('public/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('public/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/js/template.js')}}"></script>
  <script src="{{asset('public/js/settings.js')}}"></script>
  <script src="{{asset('public/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('public/js/dashboard.js')}}"></script>
  <script src="{{asset('public/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
</body>
</html>