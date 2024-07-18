<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
		$data_title = \App\Models\TitleModel::GetHomeContent();
		
        return view('templates/begin', $data_title)
			  .view('home')
			  .view('templates/end');
    }
}
