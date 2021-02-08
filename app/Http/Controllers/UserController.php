<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {


    public function show($id)
    {
        return view('test', [
            'user' => User::findOrFail($id)
        ]);
    }


}