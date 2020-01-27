<?php


class input
{


	public function post($shit)
	{
		if ($shit == '')
		{
			return false;
		}
	

	//禁止使用的用户名关键字
		$n = array('张三', '美嘉尔');

		foreach ($n as $name) 
		{
			if ($shit == $name) 
			{
				return false;
			}
		}

	return true;
	}
	
}






?>