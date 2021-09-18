<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employees', compact('employees'));
    }
   
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $salary = $request->salary;
        $birthday = $request->birthday;
        $department = $request->department;
        $is_active = $request->is_active;
        $gender = $request->gridRadios;
        
        $obj = new Employee();
        $obj->name = $name;
        $obj->email = $email;
        $obj->salary = $salary;
        $obj->birthday = $birthday;
        $obj->department = $department;
        $obj->is_active = $is_active;
        $obj->gender = $gender;

        if($obj->save()){
            return redirect()->to('employees') ;
        }

    }
    public function edit($id){
        $employee = Employee::find($id);
        return view('edit', compact('employee'));
    }
    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->salary = $request->salary;
        $employee->birthday = $request->birthday;
        $employee->department = $request->department;
        $employee->is_active = $request->is_active;
        $employee->gender = $request->gridRadios;
        if($employee->save()){
            return redirect()->to('employees') ;
        }
    }
    public function delete($id){
        $employee = Employee::find($id);
        if($employee->delete()){
            return redirect()->to('employees');
        }
    }
}
