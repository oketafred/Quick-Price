<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use App\Department;

class AccountController extends Controller
{

	public function getLogin(){

		return view('login');

	}

	public function processLogin(Request $request){

		try{

			$this->validate($request, [
				'email' => 'required|email',
				'password' => 'required'
			]);

	        if (Sentinel::authenticate($request->all())) {
	            $slug = Sentinel::getUser()->roles()->first()->slug;

	            if ($slug == "admin") {
	                return redirect()->route('admin-dashboard');
	            }elseif ($slug == "company") {
	                return redirect()->route('user-dashboard');
	            }
	        }else{
                return redirect()->back()->with(['error' => 'Wrong Credentials']);
            }

        }catch(ThrottlingException $ex){
            $delay = $ex->getDelay()/60;

            return redirect()->back()->with(['error' => "You have been locked out."]);
        }

	}


	public function logout(){

    	Sentinel::logout();

    	return redirect('/');

    }


    public function getRegister(){

    	return view('admin.register');

    }

    public function postRegister(Request $request){

    	$this->validate($request, [
    		'email' => 'required',
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'company' => 'required',
    		'password' => 'required'
    	]);


    	$credentials = [
		    'email'    => $request->email,
		    'first_name' => $request->first_name,
		    'last_name' => $request->last_name,
		    'company' => $request->company,
		    'password' => $request->password
		];

    	$user = Sentinel::registerAndActivate($credentials);

        $role = Sentinel::findRoleBySlug("company");

        $role->users()->attach($user);

    	return redirect()->back()->with(['success' => "A New Created Successfully."]);

    }
}