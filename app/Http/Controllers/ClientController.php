<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('client.create');
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
            'clt_firstName'=>'required',
            'clt_lastName'=>'required',
            'clt_mail'=>'required',
            'clt_pays'=>'required',
            'clt_adr'=>'required',
            'clt_tel'=>'required',
            'clt_type'=>'required',
            'clt_sold'=>'required',
        ]);

        $client = new Client([
        'Clt_first_name' =>  $request->get('clt_firstName'),
        'Clt_last_name' => $request->get('clt_lastName'),
        'Clt_email' => $request->get('clt_mail'),
        'Clt_pays' => $request->get('clt_pays'),
        'Clt_adresse' => $request->get('clt_adr'),
        'Clt_tel' => $request->get('clt_tel'),
        'Clt_type' => $request->get('clt_type'),
        'Clt_ExoTimbre' => $request->get('clt_exoTimbre'),
        'Clt_Solde' => $request->get('clt_sold'),
        'Clt_Encours' => $request->get('clt_encour')
        ]);
        $client->save();
        return redirect('client.index')->with('success', 'Client saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        $client = Client::find($id);
        return View('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return View('client.edit', compact('client'));
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
            'clt_firstName'=>'required',
            'clt_lastName'=>'required',
            'clt_mail'=>'required',
            'clt_pays'=>'required',
            'clt_adr'=>'required',
            'clt_tel'=>'required',
            'clt_type'=>'required',
            'clt_sold'=>'required',
        ]);


        $client = Client::find($id);
        $client->Clt_first_name =  $request->get('clt_firstName');
        $client->Clt_last_name =  $request->get('clt_lastName');
        $client->Clt_email = $request->get('clt_mail');
        $client->Clt_pays = $request->get('clt_pays');
        $client->Clt_adresse = $request->get('clt_adr');
        $client->Clt_tel = $request->get('clt_tel');
        $client->Clt_type = $request->get('clt_type');
        $client->Clt_ExoTimbre = $request->get('clt_exoTimbre');
        $client->Clt_Solde = $request->get('clt_sold');
        $client->Clt_Encours = $request->get('clt_encour');
        $client->save();

        return redirect('client.index')->with('success', 'Client updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect('client.index')->with('success', 'Client deleted!');
    }
}
