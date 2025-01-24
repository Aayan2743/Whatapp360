<!DOCTYPE html>
<html lang="en">
  <head>
   
  @include('layouts.admin.header')
  </head>
  <body>


  <div class="container-scroller">
    
      @include('layouts.admin.topNav')
    
      <div class="container-fluid page-body-wrapper">
      
        @include('layouts.admin.sideNav')
        <!-- partial -->
        <div class="main-panel">

        

          @yield('content')
        

          @include('layouts.admin.footer')
         
        
        </div>
        <!-- main-panel ends -->
      </div>
   
  </div>

 @include('layouts.admin.endPage')
   
