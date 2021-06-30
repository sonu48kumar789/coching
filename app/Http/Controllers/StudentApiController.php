<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Student;
class StudentApiController extends Controller
{
    public function fetch(){

        return Student::all();
    }
    public function create(Request $request){
        Student::create([
            'education' => $request->education,
            'skills' => $request->skills,
            'user_id' => $request->user_id,
            'contact' => $request->contact,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'school_name' => $request->school_name,
            'dp' => $request->dp
        ]);
        return "Data Instred Successfully";
    }

    public function delete(){
        $student = Student::find($id)->delete();

        return "data delete successfully";
    }
}

