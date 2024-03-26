<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mastery;

class TalentController extends Controller
{
    public function index()
    {
        $talent = Mastery::all();
        return view('admin.talent.talent-index')->with('talents', $talent);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'talent' => 'required',
            'type' => 'required',
            'img' => 'required'

        ]);

        if($validated)
        {
            $now = new \DateTime('NOW');
            $date = $now->format('m-d-Y_H.i.s.u');

            if($request->hasFile('img'))
            {
                $img_WithExt = $request->file('img')->getClientOriginalName();
                $img_filename = str_replace(' ','_',pathinfo($img_WithExt, PATHINFO_FILENAME ));
                $img_extension = $request->file('img')->getClientOriginalExtension();
                $img = $img_filename.'-'.$date.'.'.$img_extension;
                $path_img = $request->file('img')->storeAs('public/uploads/language', $img);
            }
            else
            {
                $img = 'No Data';
            }

            $Talent = Mastery::create([
                'talent' => $request->talent,
                'type' => $request->type,
                'img' => $img
            ]);

            if($Talent)
            {
                session()->flash('notification', 'Skills "' . $request->talent . '" added successfully');
                return redirect()->route('talent.index');
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to create Talent'], 500);
            }
        }
    }

    // public function update(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         'Talent' => 'required',
    //         'position' => 'required',
    //         'year' => 'required'
    //     ]);

    //     if ($validated) {
    //         $Talent = Talent::findOrFail($id);
    //         $Talent->update([
    //             'Talent' => $request->Talent,
    //             'position' => $request->position,
    //             'year' => $request->year
    //         ]);

    //         if ($Talent) {
    //             session()->flash('notification', 'Talent "' . $request->Talent . '" updated successfully');
    //             return redirect()->route('Talents.index');
    //         } else {
    //             return response()->json(['success' => false, 'message' => 'Failed to update Talent'], 500);
    //         }
    //     }
    // }

    // public function destroy($id)
    // {
    //     $Talent = Talent::destroy($id);

    //     if ($Talent) {
    //         return response()->json(['message' => 'Rental deleted successfully']);
    //     } else {
    //         return response()->json(['message' => 'Failed to delete rental'], 500);
    //     }

    // }
}
