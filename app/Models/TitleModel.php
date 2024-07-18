<?php

namespace app\Models;

class TitleModel
{
	public static function GetHomeContent()
	{
		return ['title' => 'ci-weboldalam'];
	}
	public static function GetAnimalsContent()
	{
		return ['title' => 'Állatkáink'];
	}
	public static function GetServicesContent()
	{
		return ['title' => 'Szolgáltatások'];
	}
			public static function GetContactContent()
	{
		return ['title' => 'Kapcsolat'];
	}
}