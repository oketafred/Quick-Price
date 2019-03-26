<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;

class CompanyController extends Controller
{
    public function getAllCompanies(){

    	$companies = User::all()->where('id', '!=', Sentinel::getUser()->id);

    	return view('admin.company.index', compact('companies'));

    }
}
