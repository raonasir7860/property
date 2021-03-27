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
                  plots
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <a href="/dashboard/plot" class="btn btn-primary lift">
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
                  <form action="{{ url('dashboard/plot/update',$plot->id) }}"method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Plot Number</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Plot Number"name="p_number" value="{{ $plot->p_number }}">
                      @if ($errors->has('p_number'))  
                          <p class="text-danger">{{$errors->first('p_number')}}</p>   
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Block Number</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Block Number"name="block_number"  value="{{ $plot->block_number }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Area (sq feet)</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Area (sq feet)"name="p_area" value="{{ $plot->p_area }}">
                      @if ($errors->has('p_area'))  
                          <p class="text-danger">{{$errors->first('p_area')}}</p>   
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Rate per (sq feet)</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Rate per (sq feet)"name="p_rate" value="{{ $plot->p_rate }}">
                      @if ($errors->has('p_rate'))  
                          <p class="text-danger">{{$errors->first('p_rate')}}</p>   
                      @endif
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Enter Total Amount</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Total Amount" name="total_amont" value="{{ $plot->total_amont }}">
                      @if ($errors->has('total_amont'))  
                          <p class="text-danger">{{$errors->first('total_amont')}}</p>   
                      @endif
                    </div>
                     <div class="form-check">
                    <input class="form-check-input" type="radio" name="not_sold" value="not_sold" id="defaultCheck1"<?php echo ($plot->not_sold =='not_sold' ? 'checked' : '');?>>
                    <label class="form-check-label" for="defaultCheck1">
                      Not Sold
                    </label>
                  </div>
                  <p>If this Plot cannot sold than cannot fill its remaining inputs</p>
                  <br>
                     <div class="form-check">
                    <input class="form-check-input" type="radio" name="not_sold" value="sold" id="sold"<?php echo ($plot->sold =='sold' ? 'checked' : '');?>>
                    <label class="form-check-label" for="sold">
                       Sold
                    </label>
                  </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Customer Name</label>
                         <select name="customer_id" id="customer_id" class="form-control">
                              <option value="">Customer Name</option>                             
                                 @foreach ($customers as $key => $customer)
                                <option value="{{$customer->id}}" @if($customer->id == $plot->customer_id) selected="selected" @endif>{{$customer->full_name}} {{$customer->city}}</option>
                                @endforeach
                        </select>
                    </div>
                   
                     <div class="form-group">
                      <label for="exampleInputPassword1">Enter Advance Amount Pay</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Advance Amount Pay" name="advance_amount_pay" value="{{ $plot->advance_amount_customer }}">
                    </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Cheque and Cash  </label>
                        <select name="c_method_pay" id="c_method_pay" class="form-control" id="exampleFormControlSelect1">
                          <option value="cheque" @if($plot->c_method_pay == 'cheque') selected="selected" @endif>Cheque</option>
                          <option value="cash" @if($plot->c_method_pay == 'cash') selected="selected" @endif>Cash</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter Advance Amount Pay Date</label>
                      <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter Advance Amount Pay Date" name="advance_amount_date" value="{{ $plot->advance_amount_date }}">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Enter Remaining Amount</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Remaining Amount" name="remaining_amount" value="{{ $plot->remaining_amount_customer }}">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Enter Remaining Amount Date</label>
                      <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter Remaining Amount Date" name="remaining_amount_date" value="{{ $plot->remaining_amount_date }}">
                    </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Commission Agent Name</label>
                            <select name="agent_id" id="agent_id" class="form-control">
                              <option value="">Agent Name</option>                             
                                @foreach ($agents as $key => $agent)
                                  <option value="{{$agent->id}}" @if($agent->id == $plot->agent_id) selected="selected" @endif>{{$agent->full_name}} {{$agent->city}}</option>
                                @endforeach
                        </select>
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Enter Total Commission</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Total Commission" name="total_commission" value="{{ $plot->total_commission }}">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Enter Advance Commission</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Advance Commission" name="advance_commission" value="{{ $plot->advance_commission }}">
                    </div>
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Cheque and Cash  </label>
                        <select name="a_method_pay" id="a_method_pay" class="form-control" id="exampleFormControlSelect1">
                          <option value="cheque" @if($plot->a_method_pay == 'cheque') selected="selected" @endif>Cheque</option>
                          <option value="cash" @if($plot->a_method_pay == 'cash') selected="selected" @endif>Cash</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Enter Advance Amount Pay Date</label>
                      <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter Advance Amount Pay Date" name="a_advance_amount_date" value="{{ $plot->a_advance_amount_date }}">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Enter Remaining Commission</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Remaining Commission" name="remaining_commission" value="{{ $plot->remaining_commission }}">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Enter Remaining Commission Date</label>
                      <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter Remaining Commission Date" name="remaining_commission_date" value="{{ $plot->remaining_commission_date }}">
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="resold" id="defaultCheck2"  value="on"<?php echo ($plot->resold=='on' ? 'checked' : '');?>>
                    <label class="form-check-label" for="defaultCheck2">
                      Resold
                    </label>
                  </div>
                      <div class="form-group">
                    <textarea name="editor1">{{ $plot->details }}</textarea>
                   </div>
                    <label for="formFileLg" class="form-label">Upload Profile Image</label>
                    <input type="file" name="image" class="form-control form-control-lg" id="formFileLg"  />

                    <div class="avatar avatar-xxl aligncenter" >
                              <img src="{{asset('images/plots/').'/'.$plot->image}}"alt="{{ $plot->name }}" class="avatar-img rounded-circle">
                      </div>

                    <!-- Button -->
                    <div align="center" >
                    <button type="submit" class="btn btn-primary"style="margin-top: 10px;">Edit Plot</button></div>
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