<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    public function root()
    {
        return view('pages.root');
    }
}
