<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::all();

        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('article.create');
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
            'Art_Ref'=>'required',
            'Art_CodeBarre'=>'required',
            'Art_Designation'=>'required',
            'Art_DateAchat'=>'required',
            'Art_Bloquer'=>'required',
            'Art_PrixUht'=>'required',
            'Art_Remise'=>'required',
            'Promo'=>'required',
            'Pays'=>'required',
            'Art_ImageCodeABarre'=>'required',
            'Art_PrixUTtc'=>'required',
            'Art_Image'=>'required',
            'Etat'=>'required',
            'QteMax'=>'required',
            'QteMin'=>'required',
            'QteReel'=>'required',
            'QteTheorique'=>'required',
            'DateEntree'=>'required',
            'DateSortie'=>'required',
            'Art_Marge'=>'required',
            'Art_TauxMarge'=>'required',
            'Art_HT'=>'required',
            'Art_TTC'=>'required',
            'ArtRv_HT'=>'required',
            'ArtRv_TTC'=>'required',
            'NbrPoint'=>'required'
        ]);
        $article = new Articles([
            'Art_Ref' =>  $request->get('art_ref'),
            'Art_CodeBarre' =>  $request->get('art_codeBarre'),
            'Art_Designation' =>  $request->get('art_designation'),
            'Art_DateAchat' =>  $request->get('art_dateAchat'),
            'Art_Bloquer'=> $request->get('art_bloquer'),
            'Art_PrixUht'=> $request->get('art_prixUHT'),
            'Art_Remise'=> $request->get('art_remise'),
            'Promo'=> $request->get('art_promo'),
            'Pays'=> $request->get('art_pays'),
            'Art_ImageCodeABarre'=> $request->get('art_imageCodeBarre'),
            'Art_PrixUTtc'=> $request->get('art_prixUTC'),
            'Art_Image'=> $request->get('art_image'),
            'Etat'=> $request->get('art_etat'),
            'QteMax'=> $request->get('art_qteMax'),
            'QteMin'=> $request->get('art_qteMin'),
            'QteReel'=> $request->get('art_QteReel'),
            'QteTheorique'=> $request->get('art_qteTheorique'),
            'DateEntree'=> $request->get('art_dateEntree'),
            'DateSortie'=> $request->get('art_dateSortie'),
            'Art_Marge'=> $request->get('art_marge'),
            'Art_TauxMarge'=> $request->get('art_tauxMarge'),
            'Art_HT'=> $request->get('art_HT'),
            'Art_TTC'=> $request->get('art_TTC'),
            'ArtRv_HT'=> $request->get('art_RvHT'),
            'ArtRv_TTC'=> $request->get('art_RvTTC'),
            'NbrPoint'=> $request->get('art_nbrPoint')
        ]);
        $article->save();
        
        return redirect('article.index')->with('success', 'Article saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Articles::find($id);
        return View('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::find($id);

        return View('article.edit', compact('article'));
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
            'Art_Ref'=>'required',
            'Art_CodeBarre'=>'required',
            'Art_Designation'=>'required',
            'Art_DateAchat'=>'required',
            'Art_Bloquer'=>'required',
            'Art_PrixUht'=>'required',
            'Art_Remise'=>'required',
            'Promo'=>'required',
            'Pays'=>'required',
            'Art_ImageCodeABarre'=>'required',
            'Art_PrixUTtc'=>'required',
            'Art_Image'=>'required',
            'Etat'=>'required',
            'QteMax'=>'required',
            'QteMin'=>'required',
            'QteReel'=>'required',
            'QteTheorique'=>'required',
            'DateEntree'=>'required',
            'DateSortie'=>'required',
            'Art_Marge'=>'required',
            'Art_TauxMarge'=>'required',
            'Art_HT'=>'required',
            'Art_TTC'=>'required',
            'ArtRv_HT'=>'required',
            'ArtRv_TTC'=>'required',
            'NbrPoint'=>'required'
        ]);

        $article = Articles::find($id);

        $article->Art_Ref= $request->get('art_ref');
        $article->Art_CodeBarre =  $request->get('art_codeBarre');
        $article->Art_Designation =  $request->get('art_designation');
        $article->Art_DateAchat =  $request->get('art_dateAchat');
        $article->Art_Bloquer = $request->get('art_bloquer');
        $article->Art_PrixUht = $request->get('art_prixUHT');
        $article->Art_Remise = $request->get('art_remise');
        $article->Promo = $request->get('art_promo');
        $article->Pays= $request->get('art_pays');
        $article->Art_ImageCodeABarre = $request->get('art_imageCodeBarre');
        $article->Art_PrixUTtc = $request->get('art_prixUTC');
        $article->Art_Image = $request->get('art_image');
        $article->Etat = $request->get('art_etat');
        $article->QteMax = $request->get('art_qteMax');
        $article->QteMin = $request->get('art_qteMin');
        $article->QteReel = $request->get('art_QteReel');
        $article->QteTheorique = $request->get('art_qteTheorique');
        $article->DateEntree = $request->get('art_dateEntree');
        $article->DateSortie = $request->get('art_dateSortie');
        $article->Art_Marge = $request->get('art_marge');
        $article->Art_TauxMarge = $request->get('art_tauxMarge');
        $article->Art_HT = $request->get('art_HT');
        $article->Art_TTC = $request->get('art_TTC');
        $article->ArtRv_HT = $request->get('art_RvHT');
        $article->ArtRv_TTC = $request->get('art_RvTTC');
        $article->NbrPoint = $request->get('art_nbrPoint');

        $article->save();

        return redirect('article.index')->with('success', 'Article updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::find($id);
        $article->delete();

        return redirect('article.index')->with('success', 'Article deleted!');
    }
}
