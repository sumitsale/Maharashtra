<?php

class KingsController extends Controller
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
		$kings = $commanModel->fetch_data('kings',$limit,$offset,'id','desc');

		$total_page = ceil($commanModel->fetch_count('kings')/$limit);
		// echo "<pre>";
		// print_r($fort_blogs);exit;
		
		$popular_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'view_count','desc');
		$resent_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'id','desc');
		$gallery = $commanModel->fetch_data('gallery',4,0,'id','desc');

		$this->render('index',array(
			'kings'=>$kings,
			'total_page'=>$total_page,
			'page'=>$page,
			'popular_fort_blogs' => $popular_fort_blogs,
			'resent_fort_blogs' => $resent_fort_blogs,
			'gallery' => $gallery
		));
	}


	public function actionDetail($name)
	{

		
		$commanModel = new Commanmodel();

		$blog_detail = 		$result=Yii::app()->db->createCommand()
								->select('*')
								->from("kings")
								->where("title=:title", array(':title'=>str_replace('-',' ',$name)))				
								->queryAll();

// echo "<pre>";
// 		print_r($blog_detail);exit;

        $next = $commanModel->findNext('kings', $blog_detail[0]['id']);
		$prev = $commanModel->findPrev('kings', $blog_detail[0]['id']);
		$min = $commanModel->findMin('kings');
		$max = $commanModel->findMax('kings');
		$related = $commanModel->findRelated('kings',$blog_detail);
		$fort_gallery = $commanModel->findFortGallery($blog_detail);

		$popular_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'view_count','desc');
		$resent_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'id','desc');
		$gallery = $commanModel->fetch_data('gallery',4,0,'id','desc');


// echo "<pre>";
// 		print_r($gallery);exit;

	
		$this->render('detail',array(
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