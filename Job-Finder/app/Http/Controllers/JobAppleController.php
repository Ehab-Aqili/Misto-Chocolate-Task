<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\JobApple;
use Illuminate\Http\Request;

class JobAppleController extends Controller
{
    public function create($id){
      $job = Job::where('id', $id)->first(); 

      if ($job) {
          return view('Jobs.apple', ['job' => $job]);
      } else {
          return abort(404, "Job Not Found");
      }
    }
    public function store(Request $request){
      // dd($request);
      $data = $request->validate([
        'full_name' => 'required|max:255',
        'address' => 'required',
        'gender' => 'required',
        'age' => 'required',
        'contact_info' => 'required|email',
        'years_exp' => 'required|numeric',
        'edu_info'  => 'required',
        'more_info' => 'required',
        'cv_file_path'=> 'required',
        'job_id'  => 'required' 
      ]);
      JobApple::create($data);
      return redirect(route('Jobs.index'));
    }
}
