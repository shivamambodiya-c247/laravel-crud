<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function submitContributorForm(Request $request)
    {
        $validated = $request->validate([
            'full_name'       => 'required|string|max:255',
            'email'           => 'required|email|max:255',
            'module_name'     => 'nullable|string|max:255',
            'user_type'       => 'nullable|string|max:50',
            'options'         => 'nullable|string|max:50',
            'lesson_name'     => 'nullable|string|max:255',
            'lesson_content'  => 'nullable|string',
            'upload_file'     => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
            'additional_url'  => 'nullable|string'
        ]);

        // handle image upload (if any)
        if ($request->hasFile('upload_file')) {
            $path = $request->file('upload_file')->store('contributors', 'public');
            $validated['upload_file'] = $path; // save storage path to DB
        }

        Contributor::create($validated);

        return redirect()->back()->with('success', 'Registration successful!');
    }
}
