<?php

/**
 * This is the model class for table "gallery".
 *
 * The followings are the available columns in table 'gallery':
 * @property integer $id
 * @property string $thumbnail
 * @property string $thumbnail_alt
 * @property string $title
 * @property string $description
 * @property string $marathi_content
 * @property string $english_content
 * @property string $state
 * @property string $district
 * @property integer $view_count
 * @property string $date_added
 * @property string $date_modified
 */
class Gallery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gallery';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('thumbnail, thumbnail_alt, title, description, marathi_content, english_content, state, district, view_count, date_added, date_modified', 'required'),
			array('view_count', 'numerical', 'integerOnly'=>true),
			array('thumbnail, thumbnail_alt, title', 'length', 'max'=>500),
			array('state, district', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, thumbnail, thumbnail_alt, title, description, marathi_content, english_content, state, district, view_count, date_added, date_modified', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'thumbnail' => 'Thumbnail',
			'thumbnail_alt' => 'Thumbnail Alt',
			'title' => 'Title',
			'description' => 'Description',
			'marathi_content' => 'Marathi Content',
			'english_content' => 'English Content',
			'state' => 'State',
			'district' => 'District',
			'view_count' => 'View Count',
			'date_added' => 'Date Added',
			'date_modified' => 'Date Modified',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('thumbnail',$this->thumbnail,true);
		$criteria->compare('thumbnail_alt',$this->thumbnail_alt,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('marathi_content',$this->marathi_content,true);
		$criteria->compare('english_content',$this->english_content,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('district',$this->district,true);
		$criteria->compare('view_count',$this->view_count);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
                        'defaultOrder'=>'id DESC',
                    ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gallery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
