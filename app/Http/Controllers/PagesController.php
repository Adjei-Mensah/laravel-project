<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view ("pages.welcome");
	}

	public function getAbout() {
		$first = 'Isaac';
		$last = 'Adjei-Mensah,';

		$fullname = $last . " " . $first;
		$email = 'iadjeimensah@gmail.com';
		return view ('pages.about') -> with("fullname", $fullname) -> with("email", $email);
	}

	public function getContact() {
		return view ("pages.contact");
	}




}