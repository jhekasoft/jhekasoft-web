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
		$faker = Faker\Factory::create('uk_UA');
		
		$tempDirectory = public_path() . DIRECTORY_SEPARATOR . 'temp';
		$files = glob($tempDirectory . DIRECTORY_SEPARATOR . '*');
		foreach ($files as $file){
			if (is_file($file)) {
				unlink($file);
			}
		}
		
		return View::make('markup.index', [
			'city' => $faker->city,
			'fullname' => $faker->name('female'),
			'mobilePhone' => $faker->phoneNumber,
			'image' => $faker->image($tempDirectory, 300, 300, 'cats', false),
		]);
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
