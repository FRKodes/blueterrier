<?php namespace App\Http\Controllers;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display the homepage.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View('pages.home');
	}

	/*
	 Sends an email.
	 */
	public function sendmail()
	{
		
		Mail::send('emails.contacto', array('key' => 'value'), function($message)
		{
		    $message->to('frkalderon@gmail.com', 'Tony Montana')->subject('Email de contacto Blue Terrier.');
		});
	}

}
