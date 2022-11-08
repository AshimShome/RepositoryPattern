<?php
namespace App\Repository\Interfaces;

Interface EmployeeRepositoryInterfaces {
 public function EmployeeList();
 public function addEmployee($data);
 public function delete($id);

}