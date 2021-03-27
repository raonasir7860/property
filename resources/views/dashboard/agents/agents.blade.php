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
                  Agents
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <a href="/dashboard/create-agent" class="btn btn-primary lift">
                  Create Agent
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
        @if ($agents->count() > 0)
             <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>City</th>
                <th>Area</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agents as $key => $agent)
            <tr>
              <td>
                <div class="avatar avatar-sm">
                   @if(!empty($agent->image))
                              <img src="{{asset('images/agents/').'/'.$agent->image}}"alt="{{ $agent->image }}" class="avatar-img rounded-circle">
                        @else
                            <img src="../assets/img/avatars/profiles/avatar-1.jpg"alt="..." class="avatar-img rounded-circle"> 
                        @endif
                </div>
              </td>
                <td>{{$agent->full_name}}</td>
                <td>{{$agent->phone_number}}</td>
                <td>{{$agent->email}}</td>
                <td>{{$agent->city}}</td>
                <td>{{$agent->area}}</td>
                <td>{{$agent->address}}</td>
                <td>
                    <a type="button" href="{{ url('dashboard/agent/edit',$agent->id) }}"class="btn btn-info btn-sm">
                    Edit
                  </a>
                  {{-- <button type="button" class="btn btn-danger btn-sm">
                    Delete
                  </button> --}}
                                      <button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $agent->id }}" data-action="{{ url('dashboard/agent/delete/',$agent->id) }}" onclick="deleteConfirmation({{$agent->id}})"> Delete</button>
                </td>
            </tr>
            @endforeach
           
        </tbody>
        <tfoot>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>City</th>
                <th>Area</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
     @else
        <img src="{{{ asset('/images/no-record.png') }}}">
    @endif
            </div>
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
                    url: "{{url('/dashboard/agent/delete')}}/" + id,
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