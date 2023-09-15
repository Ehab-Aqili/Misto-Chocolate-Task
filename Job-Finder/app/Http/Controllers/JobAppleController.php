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
    public function store(Request $request)
  {
    // dd($fileName);
    $fileName = time().$request->file('cv_file_path')->getClientOriginalName();
     
    $request->file('cv_file_path')->storeAs(
    'cv-file', $fileName
  );

      $data = $request->validate([
        'full_name' => 'required|max:255',
        'address' => 'required',
        'gender' => 'required',  
        'age' => 'required',
        'contact_info' => 'required|email',
        'years_exp' => 'required|numeric',
        'edu_info'  => 'required',
        'more_info' => 'required',
        'job_id'  => 'required' 
      ]);
      $data['cv_file_path'] = $fileName;
      JobApple::create($data);
      return redirect(route('Jobs.index'));
  
  }
}
