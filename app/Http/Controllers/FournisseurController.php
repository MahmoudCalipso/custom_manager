<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseur::all();

        return view('fournisseur.index', compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('fournisseur.create');
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
            'Four_name'=>'required',
            'Four_mail'=>'required',
            'Four_adr'=>'required',
            'Four_pays'=>'required',
            'Four_tel'=>'required',
            'TypeFrs_Intitule'=>'required'

        ]);

        $fournisseur = new Fournisseur([
            'Four_firstName' =>  $request->get('four_firstName'),
            'Four_lastName' =>  $request->get('four_lastName'),
            'Four_mail' => $request->get('four_mail'),
            'Four_pays' => $request->get('four_pays'),
            'Four_adr' => $request->get('four_adr'),
            'Four_tel' => $request->get('four_adr'),
            'TypeFrs_Intitule' => $request->get('four_type')

        ]);
        $fournisseur->save();
        return redirect('fournisseur.index')->with('success', 'Fournisseur saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseur = Fournisseur::find($id);
        return View('fournisseur.show', compact('fournisseur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseur = Fournisseur::find($id);

        return View('fournisseur.edit', compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Four_name'=>'required',
            'Four_mail'=>'required',
            'Four_adr'=>'required',
            'Four_pays'=>'required',
            'Four_tel'=>'required',
            'TypeFrs_Intitule'=>'required'
        ]);

        $four = Fournisseur::find($id);

        $four->Four_firstName =  $request->get('four_firstName');
        $four->Four_lastName = $request->get('four_lastName');
        $four->Four_mail = $request->get('four_mail');
        $four->Four_pays = $request->get('four_pays');
        $four->Four_adr = $request->get('four_adr');
        $four->Four_tel = $request->get('four_adr');
        $four->TypeFrs_Intitule = $request->get('four_type');
        $four->save();

        return redirect('fournisseur.index')->with('success', 'Fournisseur Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $four = Fournisseur::find($id);
        $four->delete();

        return redirect('fournisseur.index')->with('success', 'Fournisseur deleted!');
    }
}
