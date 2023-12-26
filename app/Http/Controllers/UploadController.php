<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    
    public function uploadFile(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'fisier' => 'required|file|max:2048', // 2MB Max
        ]);

        // Store the file
        if ($request->hasFile('fisier')) {
            $file = $request->file('fisier');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Save the file to a directory
            $path = $file->storeAs('uploads', $filename, 'public');

            // Return a response, or redirect
             
        }

        return back()->with('error', 'No file selected!');
    }
}
