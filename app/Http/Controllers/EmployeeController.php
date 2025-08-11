<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee(){
        return view('employee');
    }


    public function list()
    {
        // Fetch all employees from the database
        $employees = Employee::all();

        // Pass data to the view
        return view('employee_list', compact('employees'));
    }
}
