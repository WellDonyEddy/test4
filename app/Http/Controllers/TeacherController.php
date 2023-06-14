<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('group.index');

    }
    public function create(Group $group)
    {
        return view('teacher.create',compact('group'));
    }

    public function store()
    {
        $data = request()->validate([
            'full_name' => 'string',
            'address' => 'string',
            'phone_number' => 'string',
            'group_id' => 'int',
        ]);
        Teacher::create($data);
        return redirect()->route('group.show',$data['group_id']);
    }
    public function show(Teacher $teacher)
    {
        $group=Group::find($teacher->group_id);
        return view('teacher.show', compact('teacher', 'group'));
    }

    public function edit(Teacher $teacher)
    {
        $groups=Group::all();
        return view('teacher.edit', compact('teacher','groups'));
    }

    public function update(Teacher $teacher)
    { $data = request()->validate([
        'full_name' => 'string',
        'address' => 'string',
        'phone_number' => 'string',
        'group_id' => 'int',
        ]);
        $teacher->update($data);
        return redirect()->route('group.index');
    }
}
