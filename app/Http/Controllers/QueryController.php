<?php

namespace Foro\Http\Controllers;

use Illuminate\Http\Request;
use Foro\User;
class QueryController extends Controller
{
    //
    public function getAll(){
      $users = User::all();
      return view('query.all',compact('users'));
    }
}
