<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Auth;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request){
        $query=Company::query();
        if($request->irt=='yes'){
            $query->has('company_tax');
        }
        if($request->irt=='no'){
            $query->doesnthave('company_tax');
        }
        $companies=$query->get();

        return view('admin.company.index',compact('companies'));

    }
    public function index1(){
    $companies=Company::all();
        return view('admin.company.index',compact('companies'));

    }


    public function logout(){
          Auth::logout();
      return redirect()->route('login');
    }

    public function add(){
          return view('admin.company.add');
    }
}
