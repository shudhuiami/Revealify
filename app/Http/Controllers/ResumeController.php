<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResumeController extends Controller
{
    public static function resumeGenerator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'avatar' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'email' => 'required',
            'address' => 'required',
            'primary_contact' => 'required',
            'secondary_contact' => 'required',
            'Website' => 'required',
            'Description' => 'required',
            'education.Title' => 'required',
            'education.School' => 'required',
            'education.start_date' => 'required',
            'education.end_date' => 'required',
            'skills.title' => 'required',
            'skills.experience' => 'required',
            'skills.fluent' => 'required',
            'Experience.Designation' => 'required',
            'Experience.Company' => 'required',
            'Experience.start_date' => 'required',
            'Experience.end_date' => 'required',
            'Experience.Short_description' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    }

}
