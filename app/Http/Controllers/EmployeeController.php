<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{

     public function index(Request $request){
         $companies=Company::get();
        $query=Employee::query();
        if(!empty($request->company)){
            $query->where('company_id',$request->company);
        }
        if($request->irt=='yes'){
            $query->has('emloyee_tax');
        }

        if($request->irt=='no'){
            $query->doesnthave('emloyee_tax');
        }
        $employees=$query->get();
        return view('admin.employee.index',compact('employees','companies'));
    }

}
