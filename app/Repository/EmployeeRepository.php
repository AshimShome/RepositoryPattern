<?php
namespace App\Repository;
use App\Repository\Interfaces\EmployeeRepositoryInterfaces;
use App\Models\Employee;

class EmployeeRepository implements  EmployeeRepositoryInterfaces{

    public function EmployeeList(){
        return Employee::all();
    }
    public function addEmployee($data){
        Employee::create($data);
    }
    public function delete($id){
        Employee::find($id)->delete();
    }
}
