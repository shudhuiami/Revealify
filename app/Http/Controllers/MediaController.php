<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Media\MediaRepo;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{
    public function uploadMedia(Request $request)
    {
        try {
            $input = $request->all();

            $validator = Validator::make($input, [
                'file' => 'required|file',
            ]);

            if ($validator->fails()) {
                return ['status' => 500, 'error' => $validator->errors()];
            }

            $filePath = Storage::disk('public')->put('/media', $input['file']);

            $image_file = $request->file('file');

            $attrs = array(
                'filename' => $image_file->getClientOriginalName(),
                'extension' => $image_file->getClientOriginalExtension(),
                'size' => $image_file->getSize(),
                'mimeType' => $image_file->getMimeType()
            );

            $new_name = basename($filePath);

            $MediaModel = new Media();
            $MediaModel->file_path = $new_name;
            $MediaModel->attrs = serialize($attrs);
            $MediaModel->created_at = Carbon::now();
            $MediaModel->save();

            return ['status' => 200, 'data' => $MediaModel->toArray(), 'msg' => 'Media has been added successfully'];

        } catch (\Exception $e) {
            return ['status' => 500, 'error' => $e->getMessage()];
        }
    }
}
