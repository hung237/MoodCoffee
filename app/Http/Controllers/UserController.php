<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    private $user;
    public function __construct(Users $user)
    {
        $this->user = $user;
    }
}
