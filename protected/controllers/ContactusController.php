<?php

class ContactusController extends Controller
{
	public function actionIndex()
	{
		$this->activemenu = 'contactus';
		$commanModel = new Commanmodel();

		$popular_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'view_count','desc');
		$resent_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'id','desc');
		$gallery = $commanModel->fetch_data('gallery',4,0,'id','desc');

		$this->render('index',array(
			'popular_fort_blogs'=>$popular_fort_blogs,
			'resent_fort_blogs'=>$resent_fort_blogs,
			'gallery'=>$gallery
		));
	}


public function actionSubmit() {

	$model = new contactus;

	$model->name = $_POST['name'];
	$model->email = $_POST['email'];
	$model->website = $_POST['website'];
	$model->comment = $_POST['comment'];

$model->date_added = date('Y-m-d H:i:s');

$model->date_modified = date('Y-m-d H:i:s');
	$model->save(false);
	
	$this->activemenu = 'contactus';
		$commanModel = new Commanmodel();

		$popular_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'view_count','desc');
		$resent_fort_blogs = $commanModel->fetch_data('fort_blog',4,0,'id','desc');
		$gallery = $commanModel->fetch_data('gallery',4,0,'id','desc');

		$this->render('thankyou',array(
			'popular_fort_blogs'=>$popular_fort_blogs,
			'resent_fort_blogs'=>$resent_fort_blogs,
			'gallery'=>$gallery
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