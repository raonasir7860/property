<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">
      <br><br>
<div class="container ">
  <div align="center">
      <a href="/map" >Go To Map</a>
</div>
  <div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <!-- Avatar -->
                <div class="avatar avatar-lg">
                      @if(!empty($plot->image))
                                            <img src="{{asset('images/plots/').'/'.$plot->image}}"alt="{{ $plot->name }}" class="avatar-img rounded-rounded">
                      @else
                        <img src="../assets/img/avatars/profiles/avatar-1.jpg"  alt="..." class="avatar-img rounded">
                      @endif
                </div>
      </div>
      <div class="col-md-4">

        <!-- Title -->
        <p style="font-size: 20px;"> Plot Number ( <span style="font-size: 15px;color: blue">{{@$plot->p_number}}</span> )
        </p>
        <p style="font-size: 20px;"> Block Number ( <span style="font-size: 15px;color: blue">{{@$plot->block_number}}</span> )
        </p>
        <p style="font-size: 20px;"> Area (sq feet) ( <span style="font-size: 15px;color: blue">{{@$plot->p_area}}</span> )
        </p>
        <p style="font-size: 20px;"> Rate per (sq feet) ( <span style="font-size: 15px;color: blue">{{@$plot->p_rate}}</span> )
        </p>
        <hr>
        <p style="font-size: 20px;"> Total Amount ( <span style="font-size: 15px;color: blue">{{@$plot->total_amont}}</span> )
        </p>
         

      </div>
      <div class="col-md-4">
                                <div class="card-title">
                                    <h3 >Shri Datta Property Pvt Ltd</h3>
                                </div>
                                <div class="card-body ">
                                    <p class="text-justify">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                                </div>
      </div>


    </div>
    <div id="accordion">
                              <div class="card">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed btn-lg" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Customer info
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <p style="font-size: 20px;"> Name ( <span style="font-size: 15px;color: blue">{{@$plot->customer->full_name}}</span> )
                                              </p>
                                               <p style="font-size: 20px;"> Phone Number ( <span style="font-size: 15px;color: blue">{{@$plot->customer->phone_number}}</span> )
                                              </p>
                                               <p style="font-size: 20px;"> Card Number ( <span style="font-size: 15px;color: blue">{{@$plot->customer->card_number}}</span> )
                                              </p>
                                               <p style="font-size: 20px;"> Email ( <span style="font-size: 15px;color: blue">{{@$plot->customer->email}}</span> )
                                              </p>
                                               <p style="font-size: 20px;"> City ( <span style="font-size: 15px;color: blue">{{@$plot->customer->city}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Area ( <span style="font-size: 15px;color: blue">{{@$plot->customer->area}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Adress ( <span style="font-size: 15px;color: blue">{{@$plot->customer->address}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Advance Amount Pay ( <span style="font-size: 15px;color: blue">{{@$plot->advance_amount_customer}}</span> )
                                              </p>
                                              <p style="font-size: 20px;">Advance Amount Pay Date ( <span style="font-size: 15px;color: blue">{{@$plot->advance_amount_date}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Payment Method ( <span style="font-size: 15px;color: blue">{{@$plot->c_method_pay}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Remaining Amount ( <span style="font-size: 15px;color: blue">{{@$plot->p_number}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Remaining Amount Date ( <span style="font-size: 15px;color: blue">{{@$plot->remaining_amount_date}}</span> )
                                              </p>
                                            </div>
                                            <div class="col-md-6">
                                                 <div class="avatar avatar-lg">
                                                  @if(!empty($plot->customer->image))
                                                                        <img src="{{asset('images/customers/').'/'.$plot->customer->image}}"alt="{{ $plot->customer->image }}" class="avatar-img rounded-rounded">
                                                  @else
                                                    <img src="../assets/img/avatars/profiles/avatar-1.jpg"  alt="..." class="avatar-img rounded">
                                                  @endif
                                            </div>
                                            </div>
                                          </div>
                                        </div>
      
                                      </div>
                                    </div>
                                  </div>
                              <div class="card">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed btn-lg" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Agent info
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                      <div class="card-body">
                                         <div class="container">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <p style="font-size: 20px;"> Name ( <span style="font-size: 15px;color: blue">{{@$plot->agent->full_name}}</span> )
                                              </p>
                                               <p style="font-size: 20px;"> Phone Number ( <span style="font-size: 15px;color: blue">{{@$plot->agent->phone_number}}</span> )
                                              </p>
                                               <p style="font-size: 20px;"> Card Number ( <span style="font-size: 15px;color: blue">{{@$plot->agent->card_number}}</span> )
                                              </p>
                                               <p style="font-size: 20px;"> Email ( <span style="font-size: 15px;color: blue">{{@$plot->agent->email}}</span> )
                                              </p>
                                               <p style="font-size: 20px;"> City ( <span style="font-size: 15px;color: blue">{{@$plot->agent->city}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Area ( <span style="font-size: 15px;color: blue">{{@$plot->agent->area}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Adress ( <span style="font-size: 15px;color: blue">{{@$plot->agent->address}}</span> )
                                              </p>
                                                <p style="font-size: 20px;"> Total Commission Amount ( <span style="font-size: 15px;color: blue">{{@$plot->total_commission}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Advance Commission Amount ( <span style="font-size: 15px;color: blue">{{@$plot->advance_commission}}</span> )
                                              </p>
                                              <p style="font-size: 20px;">Advance Commission Amount Date ( <span style="font-size: 15px;color: blue">{{@$plot->a_advance_amount_date}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Payment Method ( <span style="font-size: 15px;color: blue">{{@$plot->a_method_pay}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Remaining Commission Amount ( <span style="font-size: 15px;color: blue">{{@$plot->remaining_commission}}</span> )
                                              </p>
                                              <p style="font-size: 20px;"> Remaining Commission Amount Date ( <span style="font-size: 15px;color: blue">{{@$plot->remaining_commission_date}}</span> )
                                              </p>
                                            </div>
                                            <div class="col-md-6">
                                                 <div class="avatar avatar-lg">
                                                  @if(!empty($plot->agent->image))
                                                                        <img src="{{asset('images/agents/').'/'.$plot->agent->image}}"alt="{{ $plot->agent->image }}" class="avatar-img rounded-rounded">
                                                  @else
                                                    <img src="../assets/img/avatars/profiles/avatar-1.jpg"  alt="..." class="avatar-img rounded">
                                                  @endif
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                              </div>
                              <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Plot Description</a>
  <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Customer Description</button>
  <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Agent Description</button>
  <button class="btn btn-danger" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3">Show / Close</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        <h4>Plot Description</h4>
        <p class="text-justify">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
         <h4>Customer Description</h4>
        <p class="text-justify">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample3">
      <div class="card card-body">
        <h4>Agent Description</h4>
        <p class="text-justify">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
      </div>
    </div>
  </div>
</div>
    </div> <!-- / .row -->
  </div>
</div>

</div>
    </div>
</body>
</html>
