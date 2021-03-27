<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Toastr;
use Session;
class CustomerController extends Controller
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
        $customers = Customer::orderBy("id","desc")->get();       
        return view('dashboard.customers.customers',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.customers.create');
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
                'full_name' => 'required',
                'phone_number' => 'required',
                'city' => 'required',
                'area' => 'required',
                'address' => 'required'
            ]
        );
         $image = null;
           if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('images/customers'), $filename);
        $image = $request->file('image')->getClientOriginalName();
        }
        if (!empty($image)) {
            $customer = new Customer();
        $customer ->full_name = $request->full_name;
        $customer ->phone_number = $request->phone_number;
        $customer ->card_number = $request->card_number;
        $customer ->email = $request->email;
        $customer ->city = $request->city;
        $customer ->area = $request->area;
        $customer ->address = $request->address;
        $customer ->details = $request->editor1;
        $customer->image  = $image;
        $customer ->save();
        }
        else{

        $customer = new Customer();
        $customer ->full_name = $request->full_name;
        $customer ->phone_number = $request->phone_number;
        $customer ->card_number = $request->card_number;
        $customer ->email = $request->email;
        $customer ->city = $request->city;
        $customer ->area = $request->area;
        $customer ->address = $request->address;
        $customer ->details = $request->editor1;
        $customer ->save();
    }
         Toastr::success('message','Customer Created Successfully');  
         //return Redirect::back();
             return Redirect::to('dashboard/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($customer)
    {
        $customer = Customer::find($customer);
        return view('dashboard.customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$customer)
    {
         $this->validate(
            $request,
           [
                'full_name' => 'required',
                'phone_number' => 'required',
                'city' => 'required',
                'area' => 'required',
                'address' => 'required'
            ]
        );
          $image = null;
           if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('images/customers'), $filename);
        $image = $request->file('image')->getClientOriginalName();
        }
        if (!empty($image)) {
            $customer = Customer::find($customer);
        $customer->full_name  = $request->get('full_name');
        $customer->phone_number  = $request->get('phone_number');
        $customer->card_number  = $request->get('card_number');
        $customer->email  = $request->get('email');
        $customer->city  = $request->get('city');
        $customer->area  = $request->get('area');
        $customer->address  = $request->get('address');
        $customer->details  = $request->get('editor1');
        $customer->image  = $image;
        $customer ->save();
        }
        else{

        $customer = Customer::find($customer);
        $customer->full_name  = $request->get('full_name');
        $customer->phone_number  = $request->get('phone_number');
        $customer->card_number  = $request->get('card_number');
        $customer->email  = $request->get('email');
        $customer->city  = $request->get('city');
        $customer->area  = $request->get('area');
        $customer->address  = $request->get('address');
        $customer->details  = $request->get('editor1');
        $customer ->save();
    }
        Toastr::success('message','Customer Edit Successfully');  
       return Redirect::to('dashboard/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        $delete = Customer::where('id', $id)->delete();
        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "Customer Deleted Successfully";
        } else {
            $success = true;
            $message = "Customer Not Found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
