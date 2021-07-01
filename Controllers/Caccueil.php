<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Caccueil extends Controller
{
	public function index()
	{
$data['title'] = "Concours Photos";
$data['heading'] = "My Real Heading";
$page['contenu'] = view('v_acceuil', $data);
		return view('Commun/v_template', $page);
		
	}
}
