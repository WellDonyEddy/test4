<?php

namespace App\Http\Controllers;

use App\Models\Caretaker;
use Illuminate\Http\Request;

class CaretakerController extends Controller
{
    public function list()
    {
        $caretakers = Caretaker::all();
        return view('caretaker.list', compact('caretakers'));
    }

    public function destroy(Caretaker $caretaker)
    {
        $caretaker->delete();
        return redirect()->route('caretaker.list');
    }

    public function show(Caretaker $caretaker)
    {
        $caretaker=Caretaker::find($caretaker->id);
        return view('caretaker.show', compact('caretaker'));
    }
    public function edit(Caretaker $caretaker)
    {
        return view('caretaker.edit', compact('caretaker'));
    }
    public function create(Caretaker $caretaker){
        return view('caretaker.create',compact('caretaker'));
    }
    public function store()
    {
        $data = request()->validate([
            'full_name' => 'string',
            'address' => 'string',
            'phone_number' => 'string',
        ]);
        Caretaker::create($data);
        return redirect()->route('caretaker.list');
    }
    public function update(Caretaker $caretaker)
    { $data = request()->validate([
        'full_name' => 'string',
        'address' => 'string',
        'phone_number' => 'string',
    ]);
        $caretaker->update($data);
        return redirect()->route('caretaker.list');
    }
}
