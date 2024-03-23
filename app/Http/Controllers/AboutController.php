<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about.index-about')->with('about', $about);
    }

    public function show($id)
    {
        $about = About::where('id', $id)
            ->select(
                'id',
                'firstname',
                'lastname',
                'status',
                'birthday',
                'age',
                'degree',
                'address',
                'country',
                'zipcode',
                'phone',
                'email',
                'description',
                'img',
                'freelance',
                'resume'
            )
            ->first();
        return view('admin.about.edit-about')->with('about', $about);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'status' => 'required',
            'birthday' => 'required',
            'degree' => 'required',
            'address' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,bmp',
            'description' => 'required',
            'freelance' => 'required',
            'resume' => 'nullable|mimes:pdf'
        ]);
        if($validated){

            $about = About::findOrFail($id);

            $oldImg = $request->input('old');
            $oldPDF = $request->input('oldPDF');
            $now = new \DateTime('NOW');
            $date = $now->format('m-d-Y_H.i.s.u');
            if($request->hasFile('img'))
            {
                $about_Img_WithExt = $request->file('img')->getClientOriginalName();
                $about_Img_filename = str_replace(' ','_',pathinfo($about_Img_WithExt, PATHINFO_FILENAME ));
                $about_Img_extension = $request->file('img')->getClientOriginalExtension();
                $about_img = $about_Img_filename.'-'.$date.'.'.$about_Img_extension;
                $path_about_img = $request->file('img')->storeAs('public/uploads/profile', $about_img);
            }
            else
            {
                $about_img = $oldImg ?? 'No Data';
            }
            if ($request->hasFile('resume')) {
                $resumeWithExt = $request->file('resume')->getClientOriginalName();
                $resumeFilename = str_replace(' ', '_', pathinfo($resumeWithExt, PATHINFO_FILENAME));
                $resumeExtension = $request->file('resume')->getClientOriginalExtension();
                $resume = $resumeFilename . '.' . $resumeExtension;
                $pathResume = $request->file('resume')->storeAs('public/uploads/resume', $resume);
            }
            else
            {
                $resume = $oldPDF ?? 'No Data';
            }
            $about->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'birthday' => $request->birthday,
                'age' => $request->age,
                'status' => $request->status,
                'country' => $request->country,
                'zipcode' => $request->zipcode,
                'phone' => $request->phone,
                'email' => $request->email,
                'degree' => $request->degree,
                'address' => $request->address,
                'description' => $request->description,
                'img' => $about_img,
                'freelance' => $request->freelance,
                'resume' => $resume
            ]);

            if ($about) {
                session()->flash('notification', 'Your about page successfully updated');
                return redirect()->route('about.index');
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to update skill'], 500);
            }
        }
    }
}
