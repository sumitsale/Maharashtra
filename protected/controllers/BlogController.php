<?php

class BlogController extends Controller
{

public function actionIndex($page=1)
	{
		$limit = 2;
		if($page == 1) {
				$offset = 0;
		} else {
				$offset = ($page * $limit) - $limit;
		}
		
		$commanModel = new Commanmodel();

		// echo $offset."<br>";
		// echo $limit;exit;
		$fort_blogs = $commanModel->fetch_data('fort_blog',$limit,$offset,'id','desc');

		$total_page = ceil($commanModel->fetch_count('fort_blog')/$limit);
		// echo "<pre>";
		// print_r($fort_blogs);exit;
		

		$this->render('index',array(
			'fort_blogs'=>$fort_blogs,
			'total_page'=>$total_page,
			'page'=>$page
		));
	}

public function actionCategory($category, $page=1)
	{
		echo $category;
		$limit = 2;
		if($page == 1) {
				$offset = 0;
		} else {
				$offset = ($page * $limit) - $limit;
		}
		
		$commanModel = new Commanmodel();

		// echo $offset."<br>";
		// echo $limit;exit;


		$fort_category = 		$result=Yii::app()->db->createCommand()
								->select('*')
								->from("fort_category")
								->where("category_name=:category_name", array(':category_name'=>$category))
								
								->queryAll();
// echo "<pre>";
// 		print_r($fort_category);exit;


		$fort_blogs = 		$result=Yii::app()->db->createCommand()
								->select('*')
								->from("fort_blog")
								->where("fort_category_id=:fort_category_id", array(':fort_category_id'=>$fort_category[0]['id']))
								->order("id desc")
								->limit("$limit")
								->offset("$offset")
								->queryAll();


		$count = $result=Yii::app()->db->createCommand()
								->select('count(id) as count')
								->from("fort_blog")
								->where("fort_category_id=:fort_category_id", array(':fort_category_id'=>$fort_category[0]['id']))
								->queryAll();

		$count = $count[0]['count'];
		// echo "<pre>";
		// print_r($fort_blogs);exit;

		$total_page = ceil($count/$limit);
		// echo "<pre>";
		// print_r($fort_blogs);exit;
		

		$this->render('category',array(
			'fort_blogs'=>$fort_blogs,
			'total_page'=>$total_page,
			'page'=>$page,
			'category'=>$category
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}