<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(){
        return view('pages.hero');
    }
    public function petsList(){
        return view('pages.pets', [
            'pets' => Pet::latest()->filter(request(['breed']))->paginate(4)
        ]);
    }
    public function create(){
        return view('pets.create');
    }
    public function show(Pet $pet){
        return view('pets.show', ['pet' => $pet]);
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'breeds' => 'required',
            'species' => 'required',
            'age' => 'required',
            'size' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'phone' => 'required',
            'description' => 'required',
        ]);
        $formFields['user_id'] = 3;
        if($request->hasFile('petImg')){
            $formFields['petImg'] = $request->file('petImg')->store('petImages', 'public');
        }
        Pet::create($formFields);
        return redirect('/pets')->with('message', 'Listing Created Successfully');
    }
}
