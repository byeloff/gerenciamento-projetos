<?php

namespace CodeProject\Http\Controllers;

use Illuminate\Http\Request;
use \CodeProject\Client;

class ClientCtrl extends Controller
{

  public function index(){
    return Client::all();
  }

  public function store(Request $request){

    return Client::create($request->all());

  }

  public function show($id){

    return Client::find($id);

  }

  public function update(Request $request, $id){

    $client = Client::find($id);
    $client->update($request->all());

  }

  public function destroy($id){

    $client = Client::find($id);
    $client->delete();

  }

}
