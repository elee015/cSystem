<?php

class FrontendController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    //return master view
    public function login_masterView(){
    	return View::make('layouts.login_master');
    	// $data = array(
    	// 	'page_title' => 'Login - cSystem'
    	// );
     //    return View::make('layouts.login_master', $data);
    }

    public function dashboard_masterView(){
        return View::make('layouts.dashboard');
    	// $data = array(
    	// 	'page_title' => 'Dashboard - cSystem',
    	// 	'logo_url'	 => '/admin'
    	// );
     //    return View::make('layouts.dashboard', $data);
    }


}
