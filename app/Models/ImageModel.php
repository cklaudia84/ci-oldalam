<?php
namespace App\Models;


class ImageModel extends \CodeIgniter\Model
{
	public function get_image($picture)
	{
	$query = $this->where('picture', $picture)->get();
	return $query->get_image();
	}
	
}