<?php

class MarkupController extends BaseController {

	public function __construct()
	{
	}

	/**
	 * Frontend main.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('markup.index');
	}
	
	/**
	 * Backend main.
	 *
	 * @return Response
	 */
	public function admin()
	{
		return View::make('markup.admin');
	}
}
