<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Contributor;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function contributor_list()
    {
        // Fetch all employees from the database
        $contributors = Contributor::all();

        // Pass data to the view
        return view('contributor_list', compact('contributors'));
    }

    public function details($id)
    {
        // Fetch the contributor by ID
        $contributor = Contributor::find($id);
        $comments = Comments::where('contributor_id', $id)->get();


        // Pass data to the view
        return view('details', compact('contributor', 'comments'));
    }

    public function removeEntry($id)
    {
        // Find the contributor by ID
        $contributor = Contributor::find($id);
        if ($contributor) {
            $contributor->delete();
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Contributor removed successfully!');
    }
}
