<?php

namespace App\Http\Controllers;

use App\tva;
use Illuminate\Http\Request;

class TvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tva_list = tva::all();
        return view('tva.index', compact('tva_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('tva.create');
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
            'TVA_Des' => 'required'
        ]);
        $tva = new tva([
            'TVA_Des' =>  $request->get('TVA_Des')
        ]);
        $tva->save();
        return redirect('tva.index')->with('success', 'TVA saved!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tva  $tva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tva = tva::find($id);
        return View('tva.edit', compact('tva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tva  $tva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'TVA_Des' => 'required'
        ]);
        $tva = tva::find($id);
        $tva->TVA_Des = $request->get('TVA_Des');
        $tva->save();
        return redirect('tva.index')->with('success', 'TVA updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tva  $tva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tva = tva::find($id);
        $tva->delete();

        return redirect('tva.index')->with('success', 'TVA deleted!');

    }
}
