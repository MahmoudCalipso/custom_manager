<?php

namespace App\Http\Controllers;

use App\Marques;
use Illuminate\Http\Request;

class MarquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marques = Marques::all();
        return view('marque.index',compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('marque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Marque_Intitule' => 'required'
        ]);
        $marque = new Marques([
            'Marque_Intitule'=> $request->get('Marque_Intitule')
        ]);
        $marque->save();
        return redirect('marque.index')->with('success', 'Marque saved!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marques  $marques
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marque = Marques::find($id);
        return View('marque.edit', compact('marque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marques  $marques
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'Marque_Intitule' => 'required'
        ]);
        $marque = Marques::find($id);
        $marque->Marque_Intitule= $request->get('Marque_Intitule');
        $marque->save();
        return view('marque.index')->with('success', 'Marque Updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marques  $marques
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marque = Articles::find($id);
        $marque->delete();

        return redirect('marque.index')->with('success', 'Marque deleted!');

    }
}
