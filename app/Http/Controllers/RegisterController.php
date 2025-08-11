<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'firstname' => 'required',
            'email' => 'required'
        ]);

        Employee::create($fields);

        return 'Registration successful!';

    }
}
