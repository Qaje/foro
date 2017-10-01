<?php

namespace Foro\Http\Controllers;

use Illuminate\Http\Request;
use Foro\User;
use Illuminate\Database\Query\Builder as lists;

class QueryController extends Controller
{
    //
    public function eloquentAll(){
      $users = User::all();
      $title = "Todos los Usuarios (ALL)";
      return view('query.methods',compact('title','users'));
    }

    public function eloquentGet($gender){
      $users = User::where('gender',$gender)
               ->get();
      $title = "Listar de usuarios (GET)";
      return view('query.methods',compact('title','users'));
    }
    public function eloquentGetCustom(){
        $users = User::where('gender','f')
            ->get(['id','name','biography']);
        $title = "Listar de usuarios (GET custom -con Array)";
      return view('query.methods',compact('title','users'));
    }
    public function eloquentDelete($id){
        $user = User::find($id);
        $user ->delete();
        return view('pages.delete');
    }
    public function eloquentLists(){
        $users = User::orderBy('name','ASC')
        ->lists('name','id');
        return view('query.lists',compact('users'));
    }
}
