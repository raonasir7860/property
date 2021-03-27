@extends('dashboard.includes.master')
@section('body')
      <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
{{-- header start --}}
<style>
.aligncenter {
    margin: 10px auto 20px;
    display: block;
}
</style>
 <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col-md-6">
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Dashboard
                </h1>
              </div>
              <div class="col-md-6">
                <div class="avatar avatar-sm">
                       @if(!empty(Auth::user()->image))
                              <img src="{{asset('images/admin/').'/'.Auth::user()->image}}"alt="{{ Auth::user()->name }}" class="avatar-img rounded-circle">
                        @else
                            <img src="../assets/img/avatars/profiles/avatar-1.jpg"alt="..." class="avatar-img rounded-circle"> 
                        @endif
                </div>
                                    <h4>{{ Auth::user()->name }}</h4>

                <div class="text-right" >
                  <a href="/admin/account" style="padding-right: 20px">Account</a>
                 <a href="/logout">
                 {{ __('Logout') }}
                </a>
                
               </div>
              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->

 <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Account
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <a href="/admin/dashboard" class="btn btn-primary lift">
                  Back
                </a>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->






{{-- body start --}}
<div class="container-fluid">
       <!-- Card -->
       <div class="container">
              <div class="card">
                <div class="card-body">
                           <div class="avatar avatar-xxl aligncenter" >
                        @if(!empty(Auth::user()->image))
                              <img src="{{asset('images/admin/').'/'.Auth::user()->image}}"alt="{{ Auth::user()->name }}" class="avatar-img rounded-circle">
                        @else
                            <img src="../assets/img/avatars/profiles/avatar-1.jpg"alt="..." class="avatar-img rounded-circle"> 
                        @endif
                      </div>

                  <!-- Form -->
                  <form action="{{ url('admin/account/update',Auth::user()->id) }}"method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name"name="name" value="{{ Auth::user()->name }}">
                      @if ($errors->has('name'))  
                          <p class="text-danger">{{$errors->first('name')}}</p>   
                      @endif
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email"name="email" value="{{ Auth::user()->email }}">
                      @if ($errors->has('email'))  
                          <p class="text-danger">{{$errors->first('email')}}</p>   
                      @endif
                    </div>
                    <label for="formFileLg" class="form-label">Upload Profile Image</label>
                    <input type="file" name="image" class="form-control form-control-lg" id="formFileLg"  />
                 
                    <!-- Button -->
                    <div align="center" >
                    <button type="submit" class="btn btn-primary"style="margin-top: 10px;">Update Admin</button></div>
                  </form>

                </div>
              </div>
            </div>
      </div>
      <br>
      <br>
      <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
@endsection