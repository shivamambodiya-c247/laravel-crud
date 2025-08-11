<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function add_comment(Request $request){
        $data = $request->validate([
            'contributor_id' => 'required|exists:contributors,id',
            'comment' => 'required|string|max:500'
        ]);

        Comments::create($data);

        return redirect()->back()->with('success', 'Comment submitted successfully!');
    }
}
