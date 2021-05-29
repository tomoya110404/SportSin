<?php

namespace App\Http\Controllers;
use App\Http\Requests\GroupsValidation;
use App\Group;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    //
    public function index()
    {
        $groups = Group::all();
        return view("groups.index", compact("groups"));
    }

    public function create()
    {
        $prefs = config("pref");
        $levels = config("level");
        $ages = config("age");
        return view("groups.create", [
            "prefs" => $prefs,
            "levels" => $levels,
            "ages" => $ages
        ]);
    }

    public function store(GroupsValidation $request, Group $group)
    {
      $group->fill($request->all);
      $group->user_id = $request->user()->id;
      $group->save();
      dd($request->all());
      var_dump($group);
      return redirect()->route("groups.index");
    }
}
