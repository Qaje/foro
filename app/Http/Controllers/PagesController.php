<?php

namespace Foro\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
    	return View('pages.home');
    }
}
