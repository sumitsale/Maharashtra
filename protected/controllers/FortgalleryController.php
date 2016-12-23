<?php

class FortgalleryController extends Controller
{
	public function actionIndex($name,$page=1)
	{

	    $limit = 16;
		if($page == 1) {
				$offset = 0;
		} else {
				$offset = ($page * $limit) - $limit;
		}
		
		$commanModel = new Commanmodel();

		$gallerydetail = 		$result=Yii::app()->db->createCommand()
								->select('*')
								->from("gallery")
								->where("title=:title", array(':title'=>str_replace('-',' ',$name)))				
								->queryAll();


		$fort_gallery = Yii::app()->db->createCommand()
								->select('*')
								->from("fort_gallry")
								->where("gallery_id=:gallery_id", array(':gallery_id'=>str_replace('-',' ',$gallerydetail[0]['id'])))
								->order("id desc")
								->limit("$limit")
								->offset("$offset")
								->queryAll();

		$count =   Yii::app()->db->createCommand()
								->select('count(id) as count')
								->from("fort_gallry")
								->where("gallery_id=:gallery_id", array(':gallery_id'=>str_replace('-',' ',$gallerydetail[0]['id'])))
								->queryAll();

		$total_page = ceil($count[0]['count']/$limit);

		$related = $commanModel->findRelated('gallery',$gallerydetail);

		$popular_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'view_count','desc');
		$resent_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'id','desc');
		$gallery = $commanModel->fetch_data('gallery',4,0,'id','desc');




		$this->render('index',array(
			'fort_gallery'=>$fort_gallery,
			'total_page'=>$total_page,
			'page'=>$page,
			'related'=>$related,
			'popular_fort_blogs' => $popular_fort_blogs,
			'resent_fort_blogs' => $resent_fort_blogs,
			'gallery' => $gallery,
			'name'=>$name
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