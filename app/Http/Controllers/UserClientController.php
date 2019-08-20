<?php

namespace App\Http\Controllers;

use App\Model\UserClient;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserClientController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('pages.clients.index');
  }

  /**
   * Display DataTable
   * 
   * @return Yajra\DataTables\DataTables
   */
  public function dataTable()
  {
    $clients = UserClient::all();
    return DataTables::of($clients)->make();
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pages.clients.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    return $request;
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Model\UserClient  $userClient
   * @return \Illuminate\Http\Response
   */
  public function show(UserClient $userClient)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Model\UserClient  $userClient
   * @return \Illuminate\Http\Response
   */
  public function edit(UserClient $userClient)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Model\UserClient  $userClient
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, UserClient $userClient)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Model\UserClient  $userClient
   * @return \Illuminate\Http\Response
   */
  public function destroy(UserClient $userClient)
  {
    //
  }
}
