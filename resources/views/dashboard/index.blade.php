@extends('dashboard.includes.master')
@section('body')
{{-- header start --}}
<marquee behavior="scroll" direction="left" style="margin-top: 10px;color: green">Welcome To Shri Datta Property Pvt Ltd Company</marquee>
 <!-- HEADER -->
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






{{-- body start --}}
<div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 col-xl">

            <!-- Value  -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Total Plots
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                     {{$plots}} <span style="font-size: 15px;color: blue">Sold ( {{$solds}} ) </span>
                    </span>
                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Total Customers
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      {{$customers}}
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-user-plus text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                     Total Agents
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      {{$agents}}
                     </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    <span class="h2 fe fe-user-check text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>


      </div>
    </div>
      <div class="container-fluid">
       
          <div class="col-md-12 col-xl-12">

            <!-- Traffic -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                 PLOTS
                </h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="0">
                    <a href="#" class="nav-link active" data-toggle="tab">
                      All
                    </a>
                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="1">
                    <a href="#" class="nav-link" data-toggle="tab">
                      Direct
                    </a>
                  </li>
                </ul>

              </div>
              <div class="card-body">

                <!-- Chart -->
                <div class="chart chart-appended"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="trafficChart" class="chart-canvas chartjs-render-monitor" data-toggle="legend" data-target="#trafficChartLegend" width="276" height="241" style="display: block; width: 276px; height: 241px;"></canvas>
                </div>

                <!-- Legend -->
                <div id="trafficChartLegend" class="chart-legend"><span class="chart-legend-item"><i class="chart-legend-indicator" style="background-color: #2C7BE5"></i>Total</span><span class="chart-legend-item"><i class="chart-legend-indicator" style="background-color: #A6C5F7"></i>Sold</span><span class="chart-legend-item"><i class="chart-legend-indicator" style="background-color: #D2DDEC"></i>Not Sold</span></div>

              </div>
            </div>

          </div>

          

        </div> <!-- / .row -->
     
      </div>
<br>
<br>
@endsection