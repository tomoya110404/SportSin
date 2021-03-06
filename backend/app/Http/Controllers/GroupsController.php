<?php

namespace App\Http\Controllers;
use App\Group;
use App\User;
use App\Http\Requests\GroupRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    //
    public function __construct()
    {
        $this->authorizeResource(Group::class, 'group');
    }
    
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

    public function store(GroupRequest $request, Group $group)
    {
        $group->user_id = Auth::id();
        $group->fill($request->all());
        $group->save();
        return redirect()->route('groups');
    }

    public function show(Group $group)
    {
        return view('groups.show', compact("group"));
    }

    public function edit(Group $group) 
    {
        $prefs = config("pref");
        $levels = config("level");
        $ages = config("age");
        return view('groups.edit', compact("group", "prefs", "levels", "ages"));
    }

    public function update(GroupRequest $request, Group $group)
    {
        $group->fill($request->all());
        $group->save();
        return redirect()->route('groups');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups');
    }
}
