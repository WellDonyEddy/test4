<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('group.index', compact('groups'));
    }

    public function create()
    {
        return view('group.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
        ]);
        Group::create($data);
        return redirect()->route('group.index');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('group.index');

    }

    public function show(Group $group)
    {
        $children=DB::table('children')->where('group_id',$group->id)->get();
        $teachers=DB::table('teachers')->where('group_id',$group->id)->get();
        return view('group.show', compact('group','children', 'teachers'));
    }

    public function edit(Group $group)
    {
        return view('group.edit', compact('group'));
    }

    public function update(Group $group)
    {
        $data = request()->validate([
            'name' => 'string',
        ]);
        $group->update($data);
        return redirect()->route('group.index');
    }
}
