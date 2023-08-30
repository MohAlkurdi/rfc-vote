<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final readonly class LoginController
{
    public function __invoke(): View
    {
        return view('login');
    }
}
