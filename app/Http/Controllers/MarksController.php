<?php

namespace App\Http\Controllers;

use App\Models\Marks; // Assuming you have an Eloquent model named Marks
use Illuminate\Http\Request;

class MarksController extends Controller
{
    public function index()
    {
        $marks = Marks::all();
        return view('marks/search', compact('marks'));
    }

    public function create()
    {
        return view('marks/add_mark');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'IDstudent' => 'required',
            'name' => 'required|string|max:255',
            'MaterialName' => 'required|string|max:255',
            'universitie' => 'required|string|max:255',
            'theoretical' => 'required|numeric',
            'practical' => 'required|numeric',
            'Total' => 'required|numeric',
            'message' => 'nullable|string',
        ]);

        Marks::create($validatedData);

        return redirect()->back();
    }

    public function show(Request $request)
    {
        $id = $request->input('id');
        $marks = Marks::where('IDstudent', $id)->get();
        return view('marks/search', compact('marks'));
    }

    public function edit(Marks $mark)
    {
        return view('marks/edit_mark', compact('mark'));
    }

    public function update(Request $request, Marks $mark)
    {
        $validatedData = $request->validate([
            'IDstudent' => 'required',
            'name' => 'required|string|max:255',
            'MaterialName' => 'required|string|max:255',
            'universitie' => 'required|string|max:255',
            'theoretical' => 'required|numeric',
            'practical' => 'required|numeric',
            'Total' => 'required|numeric',
            'message' => 'nullable|string',
        ]);

        $mark->update($validatedData);

        return redirect()->route('search');
    }

    public function destroy(Marks $mark)
    {
        $mark->delete();
        return redirect()->back();
    }
}
