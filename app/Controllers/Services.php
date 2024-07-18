<?php
namespace App\Controllers;

class Services extends BaseController
{
	public function index(): string
	{
			$data =  \App\Models\TitleModel::GetServicesContent();
			
		 return view('templates/begin', $data)
			.'<h1>Szolgáltatások</h1>' 
			.view('templates/services') 
			.view('templates/end');
	}
}
