<?php

namespace App\Http\Controllers;

use App\Famille_articles;
use Illuminate\Http\Request;

class FamilleArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $famArt = Famille_articles::all();

        return view('fm_art.index', compact('famArt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('fm_art.create');
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
            'FamArt_Type'=>'required'
            ]);
        $fmArt = new Famille_articles([
            'FamArt_Type' =>  $request->get('FamArt_Type')
           ]);
        $fmArt->save();
        return redirect('fm_art.index')->with('success', 'Famille_Article saved!');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fm_Article = Famille_articles::find($id);

        return View('fm_art.edit', compact('fm_Article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Famille_articles  $famille_articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request-> validate([
            'FamArt_Type'=>'required'
        ]);
         $famArt = Famille_articles::find($id);
         $famArt->FamArt_Type= $request->get('FamArt_Type');
         $famArt->save();
        return redirect('fm_art.index')->with('success', 'Famille_Article updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Famille_articles  $famille_articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $famArt = Famille_articles::find($id);
        $famArt->delete();
        return redirect('fm_art.index')->with('success', 'Famille_Article deleted!');
    }
}
