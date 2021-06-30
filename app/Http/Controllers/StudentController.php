<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Auth;
class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profile(){
        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
            return redirect()->route('dashboards');
        }

        if (Student::where('user_id', Auth::id())->doesntExist()){
            return redirect()->route('apply');
        }
        $data['student'] = Student::where('user_id', Auth::id())->firstOrFail();
        return view('homepage.profile',$data);
    }
    
    public function apply(){
        if (Student::where('user_id', Auth::id())->exists()){
            return redirect()->route('profile');
        }
        return view("homepage.apply");
    }
    public function applyStore(Request $request){
        if (Student::where('user_id', Auth::id())->exists()){
            return redirect()->route('profile');
        }
        $request->validate([
            'education' => 'required'
        ]);

        $filname = time() ."." . $request->dp->extension();

        $request->dp->move(public_path('upload'),$filname);

        Student::create([
            'education' => $request->education,
            'skills' => $request->skills,
            'contact' => $request->contact,
            'user_id' => Auth::id(),
            'dob' => $request->dob,
            'gender' => $request->gender,
            'school_name' => $request->school_name,
            'nationality' => $request->nationality,
            'dp' => $filname,
        ]);

        return redirect()->back();
    }
}
