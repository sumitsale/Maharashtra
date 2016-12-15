   <header>
      <nav class="navbar navbar-inverse" id="top-nav" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="top-nav-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Pintrest</a></li>
              <li><a href="#">Google+</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
              <label class="sr-only" for="top_search_form">Search for
              </label>
              <input id="top_search_form" type="search" placeholder="Search">
              <button type="submit" >
                <span class="fa fa-search"></span>
                <span class="sr-only">Search/submit</span>
              </button>
            </form>
          </div>
        </div>
      </nav>
      <!-- #top-nav -->
      <!-- MAIN NAVBAR
================ -->
      <nav class="navbar navbar-default" id="main-nav" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
           
            </button>
            <a class="navbar-brand" href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo1.png" alt="logo"></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="main-nav-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"> <a href="<?php echo Yii::app()->createUrl('site/index')?>"> <i class="fa fa-home"></i>Home</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Forts  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">


              <?php 
                    $result=Yii::app()->db->createCommand()
                              ->select('*')
                              ->from("fort_category")
                              ->queryAll();

                              for($i=0;$i<count($result);$i++) {
              ?>
              
                <li><a href="<?php echo Yii::app()->createUrl('blog/category',array('category'=>$result[$i]['category_name']))?>"><?php echo $result[$i]['category_name']; ?></a></li>
              
              <?php } ?>

                 <!-- <li><a href="<?php echo Yii::app()->createUrl('blog/index',array('category'=>'paschim-maharashtra'))?>">Paschim Maharashtra</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('blog/index',array('category'=>'kokan'))?>">Konkan</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('blog/index',array('category'=>'khandesh'))?>">Khandesh</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('blog/index',array('category'=>'vidharbha'))?>">Vidarbha</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('blog/index',array('category'=>'marathwada'))?>">Marathwada</a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('blog/index',array('category'=>'other'))?>">Others</a></li>-->
                </ul>
              </li>
              <li><a href="<?php echo Yii::app()->createUrl('kings/index')?>">Kings</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('wars/index')?>">War</a></li>   
              <li><a href="<?php echo Yii::app()->createUrl('gallery/index')?>">Gallery</a></li>      
              <li><a href="<?php echo Yii::app()->createUrl('contactus/index')?>">Contact Us</a></li>               
            </ul>
          </div>
        </div>
      </nav>
     
    </header>