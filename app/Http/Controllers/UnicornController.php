<?php

namespace App\Http\Controllers;

use App\Owners;
use App\Unicorn;
use Illuminate\Http\Request;

class UnicornController extends Controller
{
    public function index()
    {
        $unicorn = Unicorn::all();
        return view('unicorn.index',compact('unicorn'));
    }

    public function add(){
        $owners = Owners::all();
        return view('unicorn.add',compact('owners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'color'=>'required',
            'owner_id'=>'required'
        ]);
        $unicorn = new Unicorn([
            'name' => $request->input('name'),
            'color' => $request->input('color'),
            'owned_by' => $request->input('owner_id')
        ]);
        $unicorn->save();
        return redirect('/unicorn')->with('success', 'Unicorn Saved!');
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'color'=>'required',
            'owner_id'=>'required'
        ]);

        $unicorn = Unicorn::findorfail($id);
        $unicorn->name = $request->input('name');
        $unicorn->color = $request->input('color');
        $unicorn->owned_by = $request->input('owner_id');
        $unicorn->update();
        return redirect('/unicorn')->with('success', 'Unicorn Saved!');
    }
    public function edit($id)
    {
        $unicorn = Unicorn::find($id);
        $owners = Owners::all();
        return view('unicorn.edit',compact('unicorn','owners'));
    }
    public function delete($id)
    {
        Unicorn::destroy($id);
        return redirect('/unicorn')->with('success', 'Unicorn Saved!');
    }
}
