<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Shri Datta Property Pvt Ltd Company" />

    <!-- Libs CSS -->
     <link rel="stylesheet" href="{{asset('assets/fonts/feather/feather.css') }}" />
{{--     <link rel="stylesheet" href="{{asset('assets/libs/flatpickr/dist/flatpickr.min.css') }}" />
 --}}{{--     <link rel="stylesheet" href="{{asset('assets/libs/quill/dist/quill.core.css') }}" />
 --}}{{--     <link rel="stylesheet" href="{{asset('assets/libs/highlightjs/styles/vs2015.css') }}" />
 --}}
    <!-- Map -->
{{--     <link href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet" />
 --}}
    <!-- Theme CSS -->
    
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css') }}">
      
    <!-- Title -->
    <title>Shri Datta Property Pvt Ltd Company</title>

  </head>
  <body>

 


    <!-- sidebar
    ================================================== -->
    
    @include('dashboard.includes.sidebar')
    
    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
      @yield('body')

     

      <!-- CARDS -->
      
       

    </div><!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
 <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
{{--     <script src="{{asset('assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js') }}"></script>
 --}}   
{{--   <script src="{{asset('assets/libs/autosize/dist/autosize.min.js') }}"></script>
 --}} 
    <script src="{{asset('assets/libs/chart.js/dist/Chart.min.js') }}"></script>

{{--     <script src="{{asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
 --}}   
{{--   <script src="{{asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
 --}} 
{{--     <script src="{{asset('assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
 --}}   
{{--   <script src="{{asset('assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
 --}}   
{{--   <script src="{{asset('assets/libs/list.js/dist/list.min.js') }}"></script>
 --}}   
{{--   <script src="{{asset('assets/libs/quill/dist/quill.min.js') }}"></script>
 --}}   
{{--   <script src="{{asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
 --}}   
{{--   <script src="{{asset('assets/libs/chart.js/Chart.extension.js') }}"></script>
 --}}
    <!-- Map -->
{{--     <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
 --}}
    <!-- Theme JS -->
    <script src="{{asset('assets/js/theme.min.js') }}"></script>
    <script src="{{asset('assets/js/dashkit.min.js') }}"></script>


  </body>
</html>