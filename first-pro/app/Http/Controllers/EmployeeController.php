<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index ()
    {
    // $students = Student::all(); 
    // return view('student.index')->with('students',$students);

    $employees = Employee::all(); 
    return response()->json($employees);

    }
}
