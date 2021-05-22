<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Session;
use DB;

class EmployeeController extends Controller
{
    //add employee function
    function addEmployee(Request $req) {

    	//validate input data
    	$req->validate([

    		'name'=> 'required',
    		'phone'=> 'required',
    		'sallary'=> 'required'
    	]);

    	$add = new Employee();
    	$add->name = $req->name;
    	$add->phone = $req->phone;
    	$add->address = $req->address;
    	$add->sallary =$req->sallary;
    	$add->save();

    	return back()->with('add-message','The new rocord has been added!');
    }

    //Function fetch all employee record
    public function getEmployee() {

    	$data = Employee::paginate(12);

    	return view('employee',['listemployee'=>$data]);
    }

    //Function delete employee record
    public function delete($id) {

    	$data = Employee::find($id);
    	$data->delete();

    	return back()->with('deleted','One record has been deleted successfuly!');
    }

    //Function edit employee record
    function editEmployee($id) {
        
    	$data = Employee::find($id);

    	return view('editemployee',['edit'=>$data]);
    }

    //Function update employee record
    function update(Request $request) {

    	$data = Employee::find($request->id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->sallary = $request->sallary;
        $data->save();

    	return redirect('/');
    }
}
