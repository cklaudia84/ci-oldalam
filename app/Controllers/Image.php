<?php

namespace App\Controllers;

class Image extends BaseController
{
	public function view()
	{
		$image = $this->request->get_image('picture');
		$image->move->base_url(Media);
		return $image;
	}
}