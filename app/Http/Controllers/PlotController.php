<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Plot;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Toastr;
use Session;
class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $plots = Plot::orderBy("id","desc")->with('customer')->with('agent')->get(); 
        return view('dashboard.plots.plots',compact('plots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::select('id','full_name', 'city')->get();
        $agents = Agent::select('id','full_name', 'city')->get();
         return view('dashboard.plots.create',compact('customers','agents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate(
            $request,
            [
                'p_number' => 'required',
                'p_area' => 'required',
                'p_rate' => 'required',
                'not_sold' => 'required',
                'total_amont' => 'required'

            ]
        );
          $image = null;
        if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('images/plots'), $filename);
        $image = $request->file('image')->getClientOriginalName();
        }
        if (!empty($image)) {
                   $plot = new Plot();
        $plot ->p_number = $request->p_number;
        $plot ->block_number = $request->block_number;
        $plot ->p_area = $request->p_area;
        $plot ->p_rate = $request->p_rate;
        $plot ->total_amont = $request->total_amont;
        $plot ->not_sold = $request->not_sold;
        $plot ->customer_id = $request->customer_id;
        $plot ->advance_amount_customer = $request->advance_amount_pay;
        $plot ->c_method_pay = $request->c_method_pay;
        $plot ->advance_amount_date = $request->advance_amount_date;
        $plot ->remaining_amount_customer = $request->remaining_amount;
        $plot ->remaining_amount_date = $request->remaining_amount_date;
        $plot ->agent_id = $request->agent_id;
        $plot ->total_commission = $request->total_commission;
        $plot ->advance_commission = $request->advance_commission;
        $plot ->a_method_pay = $request->a_method_pay;
        $plot ->a_advance_amount_date = $request->a_advance_amount_date;
        $plot ->remaining_commission = $request->remaining_commission;
        $plot ->remaining_commission_date = $request->remaining_commission_date;
        $plot ->details = $request->editor1;
        $plot ->resold = $request->resold;
        $plot->image  = $image;
        $plot ->save();
        }
        else{     
             $plot = new Plot();
        $plot ->p_number = $request->p_number;
        $plot ->block_number = $request->block_number;
        $plot ->p_area = $request->p_area;
        $plot ->p_rate = $request->p_rate;
        $plot ->total_amont = $request->total_amont;
        $plot ->not_sold = $request->not_sold;
        $plot ->customer_id = $request->customer_id;
        $plot ->advance_amount_customer = $request->advance_amount_pay;
        $plot ->c_method_pay = $request->c_method_pay;
        $plot ->advance_amount_date = $request->advance_amount_date;
        $plot ->remaining_amount_customer = $request->remaining_amount;
        $plot ->remaining_amount_date = $request->remaining_amount_date;
        $plot ->agent_id = $request->agent_id;
        $plot ->total_commission = $request->total_commission;
        $plot ->advance_commission = $request->advance_commission;
        $plot ->a_method_pay = $request->a_method_pay;
        $plot ->a_advance_amount_date = $request->a_advance_amount_date;
        $plot ->remaining_commission = $request->remaining_commission;
        $plot ->remaining_commission_date = $request->remaining_commission_date;
        $plot ->details = $request->editor1;
        $plot ->resold = $request->resold;
        $plot ->save();
    }
        Toastr::success('message','Plot Created Successfully');  
             return Redirect::to('dashboard/plot');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function show(Plot $plot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function edit($plot)
    {
        $customers = Customer::select('id','full_name', 'city')->get();
        $agents = Agent::select('id','full_name', 'city')->get();
        $plot = Plot::find($plot);
        return view('dashboard.plots.edit',compact('plot','customers','agents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$plot)
    {
        $this->validate(
            $request,
            [
                'p_number' => 'required',
                'p_area' => 'required',
                'p_rate' => 'required',
                'not_sold' => 'required',
                'total_amont' => 'required'

            ]
        );
          $image = null;
           if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('images/plots'), $filename);
        $image = $request->file('image')->getClientOriginalName();
        }
        if (!empty($image)) {
                    $plot = Plot::find($plot);
        $plot->customer_id  = $request->get('customer_id');
        $plot->agent_id  = $request->get('agent_id');
        $plot->p_number  = $request->get('p_number');
        $plot->block_number  = $request->get('block_number');
        $plot->p_area  = $request->get('p_area');
        $plot->p_rate  = $request->get('p_rate');
        $plot->total_amont  = $request->get('total_amont');
        $plot->not_sold  = $request->get('not_sold');
        $plot->advance_amount_customer  = $request->get('advance_amount_pay');
        $plot->c_method_pay  = $request->get('c_method_pay');
        $plot->advance_amount_date  = $request->get('advance_amount_date');
        $plot->remaining_amount_customer  = $request->get('remaining_amount');
        $plot->remaining_amount_date  = $request->get('remaining_amount_date');
        $plot->total_commission  = $request->get('total_commission');
        $plot->advance_commission  = $request->get('advance_commission');
        $plot->a_method_pay  = $request->get('a_method_pay');
        $plot->a_advance_amount_date  = $request->get('a_advance_amount_date');
        $plot->remaining_commission  = $request->get('remaining_commission');
        $plot->remaining_commission_date  = $request->get('remaining_commission_date');
        $plot->details  = $request->get('editor1');
        $plot->resold  = $request->get('resold');
        $plot->image  = $image;
        $plot ->save();
        }
        else{
        $plot = Plot::find($plot);
        $plot->customer_id  = $request->get('customer_id');
        $plot->agent_id  = $request->get('agent_id');
        $plot->p_number  = $request->get('p_number');
        $plot->block_number  = $request->get('block_number');
        $plot->p_area  = $request->get('p_area');
        $plot->p_rate  = $request->get('p_rate');
        $plot->total_amont  = $request->get('total_amont');
        $plot->not_sold  = $request->get('not_sold');
        $plot->advance_amount_customer  = $request->get('advance_amount_pay');
        $plot->c_method_pay  = $request->get('c_method_pay');
        $plot->advance_amount_date  = $request->get('advance_amount_date');
        $plot->remaining_amount_customer  = $request->get('remaining_amount');
        $plot->remaining_amount_date  = $request->get('remaining_amount_date');
        $plot->total_commission  = $request->get('total_commission');
        $plot->advance_commission  = $request->get('advance_commission');
        $plot->a_method_pay  = $request->get('a_method_pay');
        $plot->a_advance_amount_date  = $request->get('a_advance_amount_date');
        $plot->remaining_commission  = $request->get('remaining_commission');
        $plot->remaining_commission_date  = $request->get('remaining_commission_date');
        $plot->details  = $request->get('editor1');
        $plot->resold  = $request->get('resold');
        $plot ->save();
    }
        Toastr::success('message','Plot Edit Successfully');  
       return Redirect::to('dashboard/plot');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Plot::where('id', $id)->delete();
        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "Plot Deleted Successfully";
        } else {
            $success = true;
            $message = "Plot Not Found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
    public function dashboard()
    {
        $customers = Customer::all()->count();
        $agents = Agent::all()->count();
        $plots = Plot::all()->count();
        $solds = Plot::where('not_sold','sold')->count();
        return view('dashboard.index',compact('customers','agents','plots','solds'));
    }
}
