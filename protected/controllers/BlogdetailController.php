<?php

class BlogdetailController extends Controller
{
	public function actionIndex($name)
	{

$this->activemenu = 'fort';		
		$commanModel = new Commanmodel();

		$blog_detail = 		$result=Yii::app()->db->createCommand()
								->select('*')
								->from("fort_blog")
								->where("title=:title", array(':title'=>str_replace('-',' ',$name)))				
								->queryAll();

// echo "<pre>";
// 		print_r($blog_detail);exit;

        $next = $commanModel->findNext('fort_blog', $blog_detail[0]['id']);
		$prev = $commanModel->findPrev('fort_blog', $blog_detail[0]['id']);
		$min = $commanModel->findMin('fort_blog');
		$max = $commanModel->findMax('fort_blog');
		$related = $commanModel->findRelated('fort_blog',$blog_detail);
		$fort_gallery = $commanModel->findFortGallery($blog_detail);

		$popular_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'view_count','desc');
		$resent_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'id','desc');
		$gallery = $commanModel->fetch_data('gallery',4,0,'id','desc');


// echo "<pre>";
// 		print_r($gallery);exit;

	
		$this->render('index',array(
			'blog_detail'=>$blog_detail,
			'next'=>$next,
			'prev'=>$prev,
			'min'=>$min,
			'max'=>$max,
			'related'=>$related,
			'fort_gallery'=>$fort_gallery,
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