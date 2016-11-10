<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($user_id)
    {
        return view('user.list.create', ['user' => User::findOrFail($user_id)]);
    }

}