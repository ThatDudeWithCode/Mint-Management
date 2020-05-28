<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all()->toArray();
        if(session('success_message')) {
            Alert::success('Success!', session('success_message'));
        }
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param array $data
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Clients::create($request->all());
        return redirect('clients')->withSuccessMessage('Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Clients::find($id);
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Clients $clients
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Clients::find($id);
        return view('clients.edit', compact('client', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Clients $clients
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $client = Clients::find($id);
        $client->client_name = $request->get('client_name');
        $client->company_name = $request->get('company_name');
        $client->client_number = $request->get('client_number');
        $client->client_number_office = $request->get('client_number_office');
        $client->client_email = $request->get('client_email');
        $client->client_address = $request->get('client_address');
        $client->client_address_2 = $request->get('client_address_2');
        $client->client_city = $request->get('client_city');
        $client->client_provence = $request->get('client_provence');
        $client->client_zip = $request->get('client_zip');
        $client->client_country = $request->get('client_country');
        $client->save();
        return redirect()->route('clients.index')->withSuccessMessage('Client Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $client = Clients::find($id);
        $client->delete();
        return redirect()->route('clients.index')->withSuccessMessage('Successfully Deleted');
    }
}
