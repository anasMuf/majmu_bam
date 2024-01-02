<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function main(Request $request)
    {
        return Auth::user() ? view('auth.loged.main') : view('auth.guest.main');
    }
}
