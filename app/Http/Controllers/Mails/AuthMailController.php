<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Jobs\SendAuthMail;

class AuthMailController extends Controller
{
    public function sendRegisterMail() {
        $user = User::find(1);
        
        SendAuthMail::dispatch($user);
    }
}
