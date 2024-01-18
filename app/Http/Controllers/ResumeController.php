<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ResumeController extends Controller
{
    public static function resumeGenerator(Request $request)
    {
        $inputData = $request->all();
        $validator = Validator::make($inputData, [
            'template' => 'required|int',
            'avatar' => 'required|string',
            'name' => 'required|string',
            'designation' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'primary_contact' => 'required|regex:/^\+?[0-9]+$/',
            'secondary_contact' => 'sometimes|regex:/^\+?[0-9]+$/',
            'website' => 'sometimes|url',
            'description' => 'required|required',

            'education' => 'required|array|min:1',
            'education.*.title' => 'required',
            'education.*.school' => 'required',
            'education.*.start_date' => 'required|date',
            'education.*.end_date' => 'required|date',

            'skills' => 'required|array|min:1',
            'skills.*.title' => 'required',
            'skills.*.experience' => 'required',
            'skills.*.fluent' => 'required',

            'experience' => 'required|array|min:1',
            'experience.*.designation' => 'required',
            'experience.*.company' => 'required',
            'experience.*.start_date' => 'required|date',
            'experience.*.end_date' => 'required|date',
            'experience.*.short_description' => 'required',

            'reference' => 'sometimes|array',
            'reference.*.name' => 'required',
            'reference.*.email' => 'required',
            'reference.*.phone' => 'required',
            'reference.*.company' => 'required',
            'reference.*.address' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $pdf = Pdf::loadView('templates.template_'.$inputData['template']);

        // Generate a unique filename for the PDF (you can customize this as needed)
        $filename = 'resume_' . time() . '.pdf';

        // Save the PDF to the storage disk
        Storage::disk('public')->put($filename, $pdf->output());

        // Return the downloadable link
        $downloadLink = Storage::disk('public')->url($filename);

        return response()->json(['download_link' => $downloadLink]);
    }
}
