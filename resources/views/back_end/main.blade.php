<!DOCTYPE html>
<html lang="en">
<head>
 @include('back_end/layout/_head')
 @include('back_end/layout/_header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

   
   @include('back_end/layout/_nav_bar')
   @include('back_end/layout/_aside_bar')

<div >
  @yield('content')
</div>
<div >
  @include('back_end/layout/_footer')
</div>
@yield('script')
 </body>
</html>