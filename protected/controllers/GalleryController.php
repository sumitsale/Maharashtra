<?php

class GalleryController extends Controller
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
		$gallerys = $commanModel->fetch_data('gallery',$limit,$offset,'id','desc');

		$total_page = ceil($commanModel->fetch_count('gallery')/$limit);
		// echo "<pre>";
		// print_r($total_page);
		// print_r($gallery);exit;
		
		$popular_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'view_count','desc');
		$resent_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'id','desc');
		$gallery = $commanModel->fetch_data('gallery',4,0,'id','desc');

		$this->render('index',array(
			'gallerys'=>$gallerys,
			'total_page'=>$total_page,
			'page'=>$page,
			'popular_fort_blogs' => $popular_fort_blogs,
			'resent_fort_blogs' => $resent_fort_blogs,
			'gallery' => $gallery
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