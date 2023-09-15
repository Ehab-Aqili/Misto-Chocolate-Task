<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
class JobController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $jobs = Job::when($search, function ($query) use ($search) {
            $query->where('job_title', 'LIKE', '%' . $search . '%');
        })->get();
    
        return view('Jobs.index', compact('jobs'));
    }
    public function getAllJobs()
    {
        $jobs = Job::all();
        return response()->json([
            'results' => $jobs
        ], 200);
    }
}
