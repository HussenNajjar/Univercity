<?php

namespace App\Http\Controllers;

use App\Models\USER_universities;
use Illuminate\Http\Request;

class UniversitiePDFController extends Controller
{
    public function index()
    {
        return view('pdf/show');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|numeric',
            'Chapter' => 'required|string|max:255',
            'file_pdf' => 'required|mimes:pdf|max:2048',
            'universitie_id' => 'required|numeric',
            'date_time' => 'required|date',
        ]);

        $pdf = $request->file('file_pdf')->getClientOriginalName();
        $path = $request->file('file_pdf')->storeAs('pdf', $pdf, 'PDF');

        $user = 1;
        $insert_pdf = new USER_universities();
        $insert_pdf->name = $validatedData['name'];
        $insert_pdf->year = $validatedData['year'];
        $insert_pdf->Chapter = $validatedData['Chapter'];
        $insert_pdf->file_pdf = $pdf;
        $insert_pdf->user_id = $user;
        $insert_pdf->universitie_id = $validatedData['universitie_id'];
        $insert_pdf->date_time = $validatedData['date_time'];
        $insert_pdf->save();

        return "تم رفع الملف";
    }

    public function create()
    {
        return view('pdf/add_pdf');
    }

    public function show($year, $Chapter)
    {
        $posts = USER_universities::where('universitie_id', 1)
            ->where('year', $year)
            ->where('Chapter', $Chapter)
            ->get();

        return view('pdf/pdf', compact('posts'));
    }

    public function show_m($year, $Chapter)
    {
        $posts = USER_universities::where('universitie_id', 2)
            ->where('year', $year)
            ->where('Chapter', $Chapter)
            ->get();

        return view('pdf/pdf', compact('posts'));
    }
}
