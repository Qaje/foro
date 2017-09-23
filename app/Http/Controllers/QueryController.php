<?php

namespace Foro\Http\Controllers;

use Illuminate\Http\Request;
use Foro\User;
class QueryController extends Controller
{
    //
    public function eloquentAll(){
      $users = User::all();
      return view('query.all',compact('users'));
    }
    public function eloquentGet(){
      $users = User::where('gender','f')
      ->get();
      return view('query.all',compact('users'));
    }
}
