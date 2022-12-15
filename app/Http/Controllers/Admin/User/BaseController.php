<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Services\UserService;

class BaseController extends Controller
{
    public $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
}
