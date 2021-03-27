<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Plot;
use App\Models\Agent;
use App\Models\User;
use Toastr;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function map()
    {
       $plots = Plot::orderBy("id","asc")->with('customer')->with('agent')->get(); 
        return view('map',compact('plots'));
    }
     public function mapDetails($id)
    {
        $plot = Plot::where('p_number',$id)->with('customer')->with('agent')->first(); 
        return view('map_details',compact('plot'));
    }
    public function account()
    {
       return view('dashboard.admin.account');
    }
          public function update_account(Request $request,$user)
    {
         $this->validate(
            $request,
           [
                'name' => 'required',
                'email' => 'required',
                 ]
        );
         $image = null;
           if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('images/admin'), $filename);
        $image = $request->file('image')->getClientOriginalName();
        }
        if (!empty($image)) {
        $user = User::find($user);
        $user->name  = $request->get('name');
        $user->email  = $request->get('email');
        $user->image  = $image;
        $user ->save();
        }
        else{
        $user = User::find($user);
        $user->name  = $request->get('name');
        $user->email  = $request->get('email');
        $user ->save(); 
         }

        Toastr::success('message','Admin Profile Updated Successfully');  
       return Redirect::to('/admin/dashboard');
    }
     public function admin_lists()
    {
        $users = User::all();
       return view('dashboard.admin.admin_lists',compact('users'));
    }
      public function destroy($id)
    {
        $delete = User::where('id', $id)->delete();
        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "Admin Deleted Successfully";
        } else {
            $success = true;
            $message = "Admin Not Found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
    public function edit($user)
    {
        $user = User::find($user);
        return view('dashboard.admin.admin_edit',compact('user'));
    }
      public function update(Request $request,$user)
    {
         $this->validate(
            $request,
           [
                'name' => 'required',
                'email' => 'required',
                 ]
        );
         $image = null;
           if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('images/admin'), $filename);
        $image = $request->file('image')->getClientOriginalName();
        }
        if (!empty($image)) {
        $user = User::find($user);
        $user->name  = $request->get('name');
        $user->email  = $request->get('email');
        $user->image  = $image;
        $user ->save();
        }
        else{
        $user = User::find($user);
        $user->name  = $request->get('name');
        $user->email  = $request->get('email');
        $user ->save(); 
         }
        Toastr::success('message','Admin Profile Updated Successfully');  
       return Redirect::to('admin/lists');
    }
    public function create()
    {
         return view('dashboard.admin.create_admin');
    }
      public function store(Request $request)
    {
              $this->validate(
            $request,
            [
               'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
            ]
        );
          $image = null;
           if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('images/admin'), $filename);
        $image = $request->file('image')->getClientOriginalName();
        }
        if (!empty($image)) {
          $user = new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password =  Hash::make($request->password);
        $user->image  = $image;
        $user ->save();
        }
        else{
        $user = new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password =  Hash::make($request->password);
        $user ->save();
      }
        Toastr::success('message','Admin Created Successfully');  
             return Redirect::to('admin/lists');
    }
}
