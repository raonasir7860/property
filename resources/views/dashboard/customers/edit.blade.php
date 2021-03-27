@extends('dashboard.includes.master')
@section('body')
      <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
{{-- header start --}}
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
                  Customers
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <a href="/dashboard/customer" class="btn btn-primary lift">
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

                  <!-- Form -->
                  <form action="{{ url('dashboard/customer/update',$customer->id) }}"method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Full Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name"name="full_name" value="{{ $customer->full_name }}">
                      @if ($errors->has('full_name'))  
                          <p class="text-danger">{{$errors->first('full_name')}}</p>   
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Phone Number</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number"name="phone_number" value="{{ $customer->phone_number }}">
                      @if ($errors->has('phone_number'))  
                          <p class="text-danger">{{$errors->first('phone_number')}}</p>   
                      @endif
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Enter Card Number</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Card Number"name="card_number" value="{{ $customer->card_number }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email"name="email" value="{{ $customer->email }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter City</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter City" name="city" value="{{ $customer->city }}">
                      @if ($errors->has('city'))  
                          <p class="text-danger">{{$errors->first('city')}}</p>   
                      @endif
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Enter Area</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Area" name="area" value="{{ $customer->area }}">
                      @if ($errors->has('area'))  
                          <p class="text-danger">{{$errors->first('area')}}</p>   
                      @endif
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Enter Address</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Address" name="address" value="{{ $customer->address }}">
                      @if ($errors->has('address'))  
                          <p class="text-danger">{{$errors->first('address')}}</p>   
                      @endif
                    </div>
                     <div class="form-group">
                    <textarea name="editor1">{{$customer->details}}</textarea>
                   </div>
                    <label for="formFileLg" class="form-label">Upload Profile Image</label>
                    <input type="file" name="image" class="form-control form-control-lg" id="formFileLg"  />

                    <div class="avatar avatar-xxl aligncenter" >
                              <img src="{{asset('images/customers/').'/'.$customer->image}}"alt="{{ $customer->name }}" class="avatar-img rounded-circle">
                      </div>

                    <!-- Button -->
                    <div align="center" >
                    <button type="submit" class="btn btn-primary"style="margin-top: 10px;">Edit Customer</button></div>
                  </form>

                </div>
              </div>
            </div>
      </div>
      <br>
      <br>
      <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
       <script>
                        CKEDITOR.replace( 'editor1' );
        </script>
      <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
@endsection