<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller
{
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index-skill')->with('skill', $skill);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'skill' => 'required',
            'range' => 'required',
        ]);

        if ($validated) {
            $skill = Skill::create([
                'skill' => $request->skill,
                'range' => $request->range
            ]);

            if ($skill) {
                session()->flash('notification', 'Skill "' . $request->skill . '" added successfully');
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to create skill'], 500);
            }
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'skill' => 'required',
            'range' => 'required'
        ]);

        if ($validated) {
            $skill = Skill::findOrFail($id);
            $skill->update([
                'skill' => $request->skill,
                'range' => $request->range
            ]);

            if ($skill) {
                session()->flash('notification', 'Skill "' . $request->skill . '" updated successfully');
                return redirect()->route('skill.index');
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to update skill'], 500);
            }
        }
    }


    public function destroy($id)
    {
        $skill = Skill::destroy($id);

        if ($skill) {
            return response()->json(['message' => 'Rental deleted successfully']);
        } else {
            return response()->json(['message' => 'Failed to delete rental'], 500);
        }

    }
}
