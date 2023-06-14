<?php

namespace App\Http\Controllers;

use App\Models\Caretaker;
use App\Models\Child;
use App\Models\Group;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function show(Child $child){
        $caretakers=$child->caretakers;
        $group=$child->group;
        return view("child.show", compact("child", "caretakers", "group"));
    }

    public function destroy(Child $child){
        $child->delete();
        return redirect()->route('group.index');
    }

    public function create(Group $group){
        return view('child.create',compact('group'));
    }

    public function store(Child $child){
        $data = request()->validate([
            'full_name' => 'string',
            'group_id' => 'int',
        ]);
        Child::create($data);
        return redirect()->route('group.show',$data['group_id']);
    }

    public function edit(Child $child){
        $child_id=$child->id;
        $parents=Caretaker::whereDoesntHave('children', function($q) use ($child_id){
            $q->where('child_id', $child_id);
        })->get();
        $caretakers=$child->caretakers;
        $groups=Group::all();
        return view('child.edit', compact('child','groups', 'caretakers', 'parents'));
    }
    public function attach(){
        $data = request()->validate([
            'child_id' => 'int',
            'caretaker_id' => 'int',
        ]);
        $child=Child::find($data['child_id']);
        $caretaker=Caretaker::find($data['caretaker_id']);
        $child_id=$data['child_id'];
        //dd(Caretaker::whereDoesntHave($child));
        //$child->caretakers()->syncWithoutDetaching($caretaker);
        $child->caretakers()->attach($caretaker);
        return redirect() -> back();
    }
    public function detach(Child $child, Caretaker $caretaker){
        $child->caretakers()->detach($caretaker);
        return redirect() -> back();
    }
}


}
