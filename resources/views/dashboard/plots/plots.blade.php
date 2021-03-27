@extends('dashboard.includes.master')
@section('body')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
                  Plots
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <a href="/dashboard/create-plot" class="btn btn-primary lift">
                  Create plot
                </a>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->






{{-- body start --}}
<div class="container-fluid">
       <!-- Card -->
        @if ($plots->count() > 0)
             <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Image</th>
                <th>Sold / Not Sold</th>
                <th>Plot Number</th>
                <th>Block Number</th>
                <th>Area (sq feet)</th>
                <th>Rate per (sq feet)</th>
                <th>Total Amount</th>
                <th>Customer info</th>
                <th>Agent info</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plots as $key => $plot)
            <tr>
              <td>
                <div class="avatar avatar-sm">
                   @if(!empty($plot->image))
                              <img src="{{asset('images/plots/').'/'.$plot->image}}"alt="{{ $plot->image }}" class="avatar-img rounded-circle">
                        @else
                            <img src="../assets/img/avatars/profiles/avatar-1.jpg"alt="..." class="avatar-img rounded-circle"> 
                        @endif
                </div>
              </td>
                <td>
                {{$plot->not_sold}}
                </td>
                <td>{{$plot->p_number}}</td>
                <td>{{$plot->block_number}}</td>
                <td>{{$plot->p_area}}</td>
                <td>{{$plot->p_rate}}</td>
                <td>{{$plot->total_amont}}</td>
                <td>{{optional($plot->customer)->full_name}}</td>
                <td>{{optional($plot->agent)->full_name}}</td>
                <td>
                    <a type="button" href="{{ url('dashboard/plot/edit',$plot->id) }}"class="btn btn-info btn-sm">
                    Edit
                  </a>
                  {{-- <button type="button" class="btn btn-danger btn-sm">
                    Delete
                  </button> --}}
                                      <button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $plot->id }}" data-action="{{ url('dashboard/plot/delete',$plot->id) }}" onclick="deleteConfirmation({{$plot->id}})"> Delete</button>
                </td>
            </tr>
            @endforeach
           
        </tbody>
        <tfoot>
            <tr>
                   <th>Image</th>
                <th>Plot Number</th>
                <th>Block Number</th>
                <th>Area (sq feet)</th>
                <th>Rate per (sq feet)</th>
                <th>Total Amount</th>
                <th>Customer info</th>
                <th>Agent info</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
     @else
        <img src="{{{ asset('/images/no-record.png') }}}">
    @endif
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
      <script>
              $(document).ready(function() {
          $('#example').DataTable();
      } );
           
       </script>
       <script type="text/javascript">
    function deleteConfirmation(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/dashboard/plot/delete')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        console.log('results',results)
                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                            location.reload(true);//this will release the event
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
{{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
 --}}        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
<br>
<br>
@endsection