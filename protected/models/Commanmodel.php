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

		function fetch_count($tablename)
	{
		$result=Yii::app()->db->createCommand()
								->select('count(*) as count')
								->from("$tablename")
								->queryAll();
										
		return $result[0]['count'];
	}

	function findPrev($tablename, $id) {

		$result=Yii::app()->db->createCommand()
								->select('*')
								->from("$tablename")
								->where('id=:id',array(':id'=>($id-1)))
								->queryAll();
										
		return $result;
	}

	function findNext($tablename, $id) {

		$result=Yii::app()->db->createCommand()
								->select('*')
								->from("$tablename")
								->where('id=:id',array(':id'=>($id+1)))
								->queryAll();
										
		return $result;
	}
	

	function findMin($tablename) {

		$result=Yii::app()->db->createCommand()
								->select('min(id) as min')
								->from("$tablename")
								->queryAll();
										
		return $result;
	}

	function findMax($tablename) {

		$result=Yii::app()->db->createCommand()
								->select('max(id) as max')
								->from("$tablename")
								->queryAll();
										
		return $result;
	}

	function findRelated($tablename, $content) {


		$result=Yii::app()->db->createCommand()
								->select('*')
								->from("$tablename")
								->where('(state LIKE :state or district like :district) and id !=:id',array(
									':state' =>'%'.$content[0]['state'].'%',
									':district' =>'%'.$content[0]['district'].'%',
									':id'=>$content[0]['id']
								))
								->order('id desc')
								->limit(4)
								->queryAll();
										
		return $result;
	}


	function findFortGallery($content) {

		$result=Yii::app()->db->createCommand()
								->select('fg.*')
								->from("fort_gallry fg")
								->join("gallery g", "fg.gallery_id = g.id")
								->where("g.title = :title",array(":title"=>$content[0]['title']))
								->order('id desc')
								->queryAll();
										
		return $result;
	}
}
