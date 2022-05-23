<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Admin BEM Event</title>

  <!-- Google Font: Source Sans Pro -->
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    
    
    
@yield('plugin-css')

@include('admin.layout.header')

@include('admin.layout.sidebar')



    @yield('content')

  





  @include('admin.layout.footer')


</div>
<!-- ./wrapper -->
@yield('plugin-js')
</body>
</html>
