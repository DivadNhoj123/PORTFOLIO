<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    public function index()
    {
        $social = Social::all();
        return view('admin.social.index-social')->with('social', $social);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'link' => 'required',
        ]);

        if($validated){
            $social = Social::create([
                'type' => $request->type,
                'link' => $request->link
            ]);

            if ($social) {
                session()->flash('notification', 'Social media "' . $request->type . '" successfully added');
                return redirect()->route('social.index');
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to update skill'], 500);
            }
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'type' => 'required',
            'link' => 'required',
        ]);

        if($validated){
            $social = Social::findOrFail($id);
            $social->update([
                'type' => $request->type,
                'link' => $request->link
            ]);

            if ($social) {
                session()->flash('notification', '' . $request->type . ' link updated successfully');
                return redirect()->route('social.index');
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to update skill'], 500);
            }
        }
    }

    public function destroy($id)
    {

        $delete = Social::destroy($id);
        if ($delete) {
            return response()->json(['message' => 'Rental deleted successfully']);
        } else {
            return response()->json(['message' => 'Failed to delete rental'], 500);
        }
    }
}
