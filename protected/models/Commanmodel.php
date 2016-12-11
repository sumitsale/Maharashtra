<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class Commanmodel 
{
	function fetch_data($tablename, $limit, $offset, $sortBy, $sortOrder)
	{
		$result=Yii::app()->db->createCommand()
								->select('*')
								->from("$tablename")
								->order("$sortBy $sortOrder")
								->limit("$limit")
								->offset("$offset")
								->queryAll();
										
		return $result;
	}
}
