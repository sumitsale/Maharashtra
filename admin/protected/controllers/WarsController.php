<?php

class WarsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Wars;
		$state = Yii::app()->db->createCommand()
								->select('city_state')
								->from('cities')
								->group('city_state')
								->having('city_state = :state', array(':state'=>'Maharashtra'))
								->order('city_state')
								->queryAll();

		$district = Yii::app()->db->createCommand()
								->select('city_name')
								->from('cities')
								->where('city_state = :state',array('state'=>'Maharashtra'))
								->order('city_state')
								->queryAll();

		

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Wars']))
		{
			$model->attributes=$_POST['Wars'];
			$model->marathi_content = htmlentities($model->marathi_content);
			$model->english_content = htmlentities($model->english_content);

			$model->thumbnail = $_FILES['Wars']['name']['thumbnail'] != '' ? $_FILES['Wars']['name']['thumbnail'] : '';
			$model->detail_thumbnail = $_FILES['Wars']['name']['detail_thumbnail'] != '' ? $_FILES['Wars']['name']['detail_thumbnail'] : '';

			$model->date_added = date("Y-m-d H:i:s");
			$model->date_modified = date("Y-m-d H:i:s");
			$model->view_count = 0;
			
			if($model->save()){


				if($model->thumbnail !='')
				{
					$model->thumbnail=CUploadedFile::getInstance($model,'thumbnail');
					$model->thumbnail->saveAs(Yii::app()->basePath  . '/../../images/wars/thumbnail/'. $model->thumbnail );			
					
					$resize = new ResizeImage(Yii::app()->basePath . '/../../images/wars/thumbnail/'. $model->thumbnail );
					$resize->resizeTo(350, 185, 'exact');
					$resize->saveImage(Yii::app()->basePath . '/../../images/wars/thumbnail/'. $model->thumbnail );
				}


				if($model->detail_thumbnail !='')
				{
					$model->detail_thumbnail=CUploadedFile::getInstance($model,'detail_thumbnail');
					$model->detail_thumbnail->saveAs(Yii::app()->basePath  . '/../../images/wars/detail_thumbnail/'. $model->detail_thumbnail );			
					
					$resize = new ResizeImage(Yii::app()->basePath . '/../../images/wars/detail_thumbnail/'. $model->detail_thumbnail );
					$resize->resizeTo(730, 370, 'exact');
					$resize->saveImage(Yii::app()->basePath . '/../../images/wars/detail_thumbnail/'. $model->detail_thumbnail );
				}
				
			 $this->redirect(array('admin'));
			}
				
		}

		$this->render('create',array(
			'model'=>$model,
			'state' => $state,
			'district' =>$district
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

        $state = Yii::app()->db->createCommand()
								->select('city_state')
								->from('cities')
								->group('city_state')
								->having('city_state = :state', array(':state'=>'Maharashtra'))
								->order('city_state')
								->queryAll();

		$district = Yii::app()->db->createCommand()
								->select('city_name')
								->from('cities')
								->where('city_state = :state',array('state'=>'Maharashtra'))
								->order('city_state')
								->queryAll();

		$thumbnail = $model->thumbnail;
		$detail_thumbnail = $model->detail_thumbnail;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Wars']))
		{
			$model->attributes=$_POST['Wars'];

			$model->date_modified = date("Y-m-d H:i:s");
			$model->thumbnail = isset($_FILES['Wars']['name']['thumbnail']) && $_FILES['Wars']['name']['thumbnail']!=''  ? $_FILES['Wars']['name']['thumbnail'] : $thumbnail;
			$model->detail_thumbnail = isset($_FILES['Wars']['name']['detail_thumbnail']) && $_FILES['Wars']['name']['detail_thumbnail']!=''  ? $_FILES['Wars']['name']['detail_thumbnail'] : $detail_thumbnail;
			
			if($model->save()){

									
			if($model->thumbnail !='' && $model->thumbnail !=$thumbnail)
				{	$model->thumbnail=CUploadedFile::getInstance($model,'thumbnail');
					$model->thumbnail->saveAs(Yii::app()->basePath  . '/../../images/wars/thumbnail/'. $model->thumbnail );			
					
					$resize = new ResizeImage(Yii::app()->basePath . '/../../images/wars/thumbnail/'. $model->thumbnail );
					$resize->resizeTo(350, 185, 'exact');
					$resize->saveImage(Yii::app()->basePath . '/../../images/wars/thumbnail/'. $model->thumbnail );
				}

				
			if($model->detail_thumbnail !='' && $model->detail_thumbnail !=$detail_thumbnail)
				{
					$model->detail_thumbnail=CUploadedFile::getInstance($model,'detail_thumbnail');
					$model->detail_thumbnail->saveAs(Yii::app()->basePath  . '/../../images/wars/detail_thumbnail/'. $model->detail_thumbnail );			
					
					$resize = new ResizeImage(Yii::app()->basePath . '/../../images/wars/detail_thumbnail/'. $model->detail_thumbnail );
					$resize->resizeTo(730, 370, 'exact');
					$resize->saveImage(Yii::app()->basePath . '/../../images/wars/detail_thumbnail/'. $model->detail_thumbnail );
				}

				$this->redirect(array('admin'));
			}
				
		}

		$this->render('update',array(
			'model'=>$model,
			'state' => $state,
			'district' =>$district

		));
	}
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Wars');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Wars('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Wars']))
			$model->attributes=$_GET['Wars'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Wars the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Wars::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Wars $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='wars-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
