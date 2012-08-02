<?php

class Jenjang extends Base {

	public static $table = 'jenjang';

	protected $property = array(
		'name' => 'required|max:80',
	);

	public static $per_page = '20';

	public static function data()
	{
		$u = DB::table('jenjang');

		return static::page($u, static::$per_page);
	}

	public static function dropdown()
	{
		$u = DB::table('jenjang')->get();
		
		if ($u)
		{
			$arr = array();

			foreach ($u as $key) 
			{
				$arr[$key->id] = $key->name;
			}

			return $arr;
		}
	}
}