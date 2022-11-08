<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Repository\Interfaces\EmployeeRepositoryInterfaces;

class EmployeeController extends Controller
{
    private $employeeRepository;
    public function __construct(EmployeeRepositoryInterfaces $employeeRepository )
    {
        $this->employeeRepository=$employeeRepository;
    }
    public function addForm(){
        return view('addform');
    }
    public function addEmployee(Request $request){
        $data=$request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        // $employees=new Employee;
        // $employees->name=$request->name;
        // $employees->email=$request->email;
        // $employees->phone=$request->phone;
        // $employees->save();

        $this->employeeRepository->addEmployee($data);
        return redirect('/');
    }

    public function EmployeeList(){
    
        // $employees=Employee::all();
       $employees= $this->employeeRepository->EmployeeList();
  
        return view('employeeView', compact('employees'));

       
       }
    public function delete($id){
        // $employees=Employee::all();
       $employees= $this->employeeRepository->delete($id);
  
        return redirect()->route('employee-list');

       
       }
   
}
