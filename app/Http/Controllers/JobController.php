<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::all();
        return view('admin.job.index-job')->with('jobs', $job);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required',
            'job' => 'required',
            'year' => 'required',
            'company_img' => 'required'

        ]);

        if($validated)
        {
            $now = new \DateTime('NOW');
            $date = $now->format('m-d-Y_H.i.s.u');

            if($request->hasFile('company_img'))
            {
                $company_Img_WithExt = $request->file('company_img')->getClientOriginalName();
                $company_Img_filename = str_replace(' ','_',pathinfo($company_Img_WithExt, PATHINFO_FILENAME ));
                $company_Img_extension = $request->file('company_img')->getClientOriginalExtension();
                $company_img = $company_Img_filename.'-'.$date.'.'.$company_Img_extension;
                $path_company_img = $request->file('company_img')->storeAs('public/uploads/company', $company_img);
            }
            else
            {
                $company_img = 'No Data';
            }

            $job = Job::create([
                'company' => $request->company,
                'job' => $request->job,
                'year' => $request->year,
                'company_img' => $company_img
            ]);

            if($job)
            {
                session()->flash('notification', 'Job "' . $request->job . '" added successfully');
                return redirect()->route('jobs.index');
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to create Job'], 500);
            }
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'job' => 'required',
            'position' => 'required',
            'year' => 'required'
        ]);

        if ($validated) {
            $job = Job::findOrFail($id);
            $job->update([
                'job' => $request->job,
                'position' => $request->position,
                'year' => $request->year
            ]);

            if ($job) {
                session()->flash('notification', 'Job "' . $request->job . '" updated successfully');
                return redirect()->route('jobs.index');
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to update job'], 500);
            }
        }
    }

    public function destroy($id)
    {
        $job = Job::destroy($id);

        if ($job) {
            return response()->json(['message' => 'Rental deleted successfully']);
        } else {
            return response()->json(['message' => 'Failed to delete rental'], 500);
        }

    }
}
