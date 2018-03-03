<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{!! asset('css/journal.min.css') !!}">
<style>
.bd-navbar {
    position: sticky;
    top: 0;
    z-index: 1071;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:  #ff9999;
    color: black;
    text-align: center;
}
</style>
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary bd-navbar" data-spy="affix" data-offset-top="197">
  <a class="navbar-brand" href="{{url('/')}}">Home</a>
  <a class="navbar-brand" href="{{url('/register')}}">Register</a>
  <a class="navbar-brand" href="{{url('/list')}}">List</a>
</nav><br><br>
  @yield('content')
</div>
   <br>
   <div class="footer offset-1 col-md-10">
      <div class="container">
        <p>&copy;2018 | All rights reserved | Developed by <strong>Shahid Ansari<strong>.</p>
      </div>
    </div>
</body>
</html>