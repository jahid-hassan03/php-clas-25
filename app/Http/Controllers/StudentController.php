<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;

    public function index()
    {

        $this->student = new Student();
        $this->student->newStudent();
        return 'success';

//        $this->student =Student::getAllStudent();
//        return view('all', ['student' => $this->student ]);

    }
}
