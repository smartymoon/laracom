<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Germey\Geetest\CaptchaGeetest;
class AuthController extends Controller {
    use CaptchaGeetest;
}

