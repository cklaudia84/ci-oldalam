<?php

namespace App\Controllers;

class Animals extends BaseController
{
	public function index(): string
	{
		$data_title = \App\Models\TitleModel::GetAnimalsContent();

		$model = model(\App\Models\AnimalsModel::class);
		
		$data['animals'] = $model->findAll();
		
		return view('templates/begin', $data_title)
			.'<h1>Jelenleg elérhető állatkáink</h1>'
				.view('templates/animals', $data)
				 .view('templates/end');
	}
}