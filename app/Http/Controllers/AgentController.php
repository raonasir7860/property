<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Toastr;
use Session;
class AgentController extends Controller
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
        $agents = Agent::orderBy("id","desc")->get();    
        return view('dashboard.agents.agents',compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('dashboard.agents.create');
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
        $image->move(public_path('images/agents'), $filename);
        $image = $request->file('image')->getClientOriginalName();
        }
        if (!empty($image)) {
            $agent = new Agent();
        $agent ->full_name = $request->full_name;
        $agent ->phone_number = $request->phone_number;
        $agent ->card_number = $request->card_number;
        $agent ->email = $request->email;
        $agent ->city = $request->city;
        $agent ->area = $request->area;
        $agent ->address = $request->address;
        $agent ->details = $request->editor1;
        $agent->image  = $image;
        $agent ->save();
        }
        else{
         $agent = new Agent();
        $agent ->full_name = $request->full_name;
        $agent ->phone_number = $request->phone_number;
        $agent ->card_number = $request->card_number;
        $agent ->email = $request->email;
        $agent ->city = $request->city;
        $agent ->area = $request->area;
        $agent ->address = $request->address;
        $agent ->details = $request->editor1;
        $agent ->save();
    }
        Toastr::success('message','Agent Created Successfully');  
         //return Redirect::back();
             return Redirect::to('dashboard/agent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit($agent)
    {
        $agent = Agent::find($agent);
        return view('dashboard.agents.edit',compact('agent'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$agent)
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
            $agent = Agent::find($agent);
        $agent->full_name  = $request->get('full_name');
        $agent->phone_number  = $request->get('phone_number');
        $agent->card_number  = $request->get('card_number');
        $agent->email  = $request->get('email');
        $agent->city  = $request->get('city');
        $agent->area  = $request->get('area');
        $agent->address  = $request->get('address');
        $agent->details  = $request->get('editor1');
        $agent->image  = $image;
        $agent ->save();
        }
        else{

        $agent = Agent::find($agent);
        $agent->full_name  = $request->get('full_name');
        $agent->phone_number  = $request->get('phone_number');
        $agent->card_number  = $request->get('card_number');
        $agent->email  = $request->get('email');
        $agent->city  = $request->get('city');
        $agent->area  = $request->get('area');
        $agent->address  = $request->get('address');
        $agent->details  = $request->get('editor1');
        $agent ->save();
    }
        Toastr::success('message','Agent Edit Successfully');  
       return Redirect::to('dashboard/agent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
    {
        $delete = Agent::where('id', $id)->delete();
        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "Agent Deleted Successfully";
        } else {
            $success = true;
            $message = "Agent Not Found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
