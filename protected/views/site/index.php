 <!-- CONTENT
============ -->
    <div id="content">            
      <div class="container">
        <div class="row">
          <!-- MAIN CONTENT
================= -->
          <main id="main-content" class="col-md-8">
           
                        
            <!-- ADS -->
            <section class="widget">
              <!-- Widget Content -->
              <div class="frame thick">                                
                <a href="" target="_blank">
                  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/728.png" alt="ads">
                </a>                                
              </div>
                                                               
            </section>
            <!-- ARTICLES V2 WIDGET -->
            <section class="widget articles-v2">
              <!-- Widget Header -->
              <header class="clearfix">
                <h4>Latest Fort Blog</h4>
                <a href="<?php echo Yii::app()->createUrl('blog/index')?>" class="control">
                  <i class="fa fa-plus">
                  </i>
                </a>
              </header>
              <!-- Widget Contents -->
              <div class="content row">
                
				
				<div class="col-sm-6 article-medium">    
                  <!--frame-->
                  <div class="frame">
                    <!--image-->
                    <a class="image" href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$fort_blogs[0]['title'])))?>">
                      <figure class="image-holder">
                        <img src="<?php echo Yii::app()->baseurl.'../images/fort/thumbnail/'.$fort_blogs[0]['thumbnail']; ?>" alt="<?php echo $fort_blogs[0]['thumbnail_alt']; ?>">
                      </figure>
                      <div class="image-light">
                      </div>
                      <span class="dashicons dashicons-format-quote">
                      </span>
                    </a>
                  </div>
                  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shadow.png" class="shadow" alt="shadow">
                  <h4>
                    <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$fort_blogs[0]['title'])))?>">
                         <?php echo $fort_blogs[0]['title']; ?>
                    </a>
                  </h4>
                  <p class="post-meta">
                    <a href="#">
                      <span class="fa fa-clock-o">
                      </span> <?php echo date('F m, Y', strtotime($fort_blogs[0]['blog_date']));?>
                    </a> 
                     <!-- <a href="#"><span class="fa fa-folder"></span> Folder Name </a>-->
                    <a href="#">
                      <span class="fa fa-eye">
                      </span> <?php echo $fort_blogs[0]['view_count']; ?> views
                    </a>
                  </p>
                  <!--content-->
                  <p>
					<?php echo substr(strip_tags($fort_blogs[0]['english_content']),0,220).'...'; ?>
                  </p>
                  <hr>
                </div>
                
				
				<?php for($i= 1; $i < count($fort_blogs); $i++) { ?>
				<div class="col-sm-6 article-tiny">
                  <!-- image -->
                  <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$fort_blogs[$i]['title'])))?>" class="image">
                    <figure class="image-holder">
                      <img width="95px;" height="75px;" src="<?php echo Yii::app()->baseurl.'../images/fort/thumbnail/'.$fort_blogs[$i]['thumbnail']; ?>" alt="<?php echo $fort_blogs[$i]['thumbnail_alt']; ?>">
                    </figure>
                    <div class="image-light">
                    </div>
                    <span class="dashicons dashicons-format-link">
                    </span>
                  </a>
                  <!--content-->
                  <h5>
                    <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$fort_blogs[$i]['title'])))?>"><?php echo $fort_blogs[$i]['title']; ?>
                    </a>
                  </h5>
                  <p class="post-meta">
                    <a href="#">
                      <span class="fa fa-clock-o">
                      </span> <?php echo date('F m, Y', strtotime($fort_blogs[$i]['blog_date']));?>
                    </a> 
                   <!-- <a href="#"><span class="fa fa-folder"></span> Folder Name </a>-->
                    <a href="#">
                      <span class="fa fa-eye">
                      </span> <?php echo $fort_blogs[$i]['view_count'];?>
                    </a>
                  </p>
                  <hr>
                </div>
				<?php } ?>
              </div>
              <!--.content-->
            </section>
            <!--.widget-->
            
            <div class="frame thick">                                
                <a href="" target="_blank">
                  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/728.png" alt="ads">
                </a>                                
              </div>
              
              <section class="widget articles-v1">
              <!-- Widget Header -->
              <header class="clearfix">
               <a href="#"> <h4>Kings </h4> </a>
                <a href="<?php echo Yii::app()->createUrl('kings/index')?>" class="control"> <i class="fa fa-plus"> </i> </a>
              </header>
			  
			  <?php for($i=0;$i<count($kings);$i++) { ?>
              <div class="article-medium">
                <div class="row">
                  <!--Image-->
                  <div class="col-sm-6">
                    <div class="frame">
                      <a class="image" href="<?php echo Yii::app()->createUrl('kings/detail',array('name'=> str_replace(' ','-',$kings[$i]['title'])))?>">
                        <figure class="image-holder">
                          <img src="<?php echo Yii::app()->baseurl.'../images/kings/thumbnail/'.$kings[$i]['thumbnail']; ?>" alt="<?php echo $kings[$i]['thumbnail_alt']; ?>">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-chat">
                        </span>
                      </a>
                    </div>
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shadow.png" class="shadow" alt="shadow">                                    
                  </div>
                  <!--Content-->
                  <div class="col-sm-6">
                    <h4>
                      <a href="<?php echo Yii::app()->createUrl('kings/detail',array('name'=> str_replace(' ','-',$kings[$i]['title'])))?>">
                         <?php echo $kings[$i]['title']; ?>
                      </a>
                    </h4>
                    <p class="post-meta">
                      <a href="javascript::void(0);">
                        <span class="fa fa-clock-o">  </span> Dec 4, 2013 </a> 
                      <!--<a href="#"> <span class="fa fa-folder"> </span> Bussiness </a> 
                      <a href="#"> <span class="fa fa-comments"> </span> 1,324 </a> -->
                      <a href="javascript::void(0);"> <span class="fa fa-eye"> </span> <?php echo $kings[$i]['view_count']; ?> </a>
                    </p>
                    <p>
					<?php echo substr(strip_tags($kings[$i]['english_content']),0,245).'...'; ?> 
                    </p>                                    
                  </div>
                </div>
              </div>
              <hr>
			  <?php } ?>
			  
            </section>
              
            <section class="widget articles-v2">
              <!-- Widget Header -->
              <header class="clearfix">
                <h4>War
                </h4>
                <a href="#" class="control">
                  <i class="fa fa-plus">
                  </i>
                </a>
              </header>
              <!-- Widget Contents -->
              <div class="content row">
                <div class="col-sm-6 article-medium">    
                  <!--frame-->
                  <div class="frame">
                    <!--image-->
                    <a class="image" href="<?php echo Yii::app()->createUrl('wars/detail',array('name'=> str_replace(' ','-',$kings[0]['title'])))?>">
                      <figure class="image-holder">
                             <img src="<?php echo Yii::app()->baseurl.'../images/wars/thumbnail/'.$wars[0]['thumbnail']; ?>" alt="<?php echo $wars[0]['thumbnail_alt']; ?>">
                      </figure>
                      <div class="image-light">
                      </div>
                      <span class="dashicons dashicons-format-quote">
                      </span>
                    </a>
                  </div>
                  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shadow.png" class="shadow" alt="shadow">
                  <h4>
                    <a href="<?php echo Yii::app()->createUrl('wars/detail',array('name'=> str_replace(' ','-',$wars[0]['title'])))?>"><?php echo $wars[0]['title']; ?>
                    </a>
                  </h4>
                  <p class="post-meta">
                    <a href="javascript::void(0);">
                      <span class="fa fa-clock-o">
                      </span> <?php echo date('F m, Y', strtotime($wars[0]['blog_date']));?>
                    </a> 
              <!--        <a href="#">
                          <span class="fa fa-folder">
                          </span> Folder Name
                        </a>-->
                    <a href="#">
                      <span class="fa fa-eye">
                      </span> <?php echo $wars[0]['view_count'];?> views
                    </a>
                  </p>
                  <!--content-->
                  <p>

				  <?php echo substr(strip_tags($wars[0]['english_content']),0,220).'...'; ?>
                  </p>
                  <hr>
                </div>
				<?php for($i=1;$i<count($wars);$i++) { ?>
                <div class="col-sm-6 article-tiny">
                  <!-- image -->
                  <a href="<?php echo Yii::app()->createUrl('wars/detail',array('name'=> str_replace(' ','-',$wars[$i]['title'])))?>" class="image">
                    <figure class="image-holder">
							<img width="95px;" height="75px;" src="<?php echo Yii::app()->baseurl.'../images/wars/thumbnail/'.$wars[$i]['thumbnail']; ?>" alt="<?php echo $wars[$i]['thumbnail_alt']; ?>">
                    </figure>
                    <div class="image-light">
                    </div>
                    <span class="dashicons dashicons-format-link">
                    </span>
                  </a>
                  <!--content-->
                  <h5>
                    <a href="<?php echo Yii::app()->createUrl('wars/detail',array('name'=> str_replace(' ','-',$wars[$i]['title'])))?>">
                    <?php echo $wars[$i]['title']; ?>
                    </a>
                  </h5>
                  <p class="post-meta">
                    <a href="#">
                      <span class="fa fa-clock-o">
                      </span> <?php echo date('F m, Y', strtotime($wars[$i]['blog_date']));?>
                    </a> 
                    <!--<a href="#">
                          <span class="fa fa-folder">
                          </span> Travel
                        </a>-->
                    <a href="#">
                      <span class="fa fa-eye">
                      </span><?php echo $wars[$i]['view_count'];?>
                    </a>
                  </p>
                  <hr>
                </div>
				<?php } ?>
              </div>
              <!--.content-->
            </section>
            <!-- ADS -->
            <section class="widget">
              <!-- Widget Header -->
              <header class="clearfix">
                <h4>Advertisement
                </h4>
              </header>
              <!-- Widget Content -->
              <div class="frame thick">                                
                <a href="http://themeforest.net/user/friskamax/portfolio?ref=friskamax" target="_blank">
                  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/728.png" alt="ads">
                </a>                                
              </div>
              <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shadow.png" alt="shadow" class="shadow">                                                        
            </section>
          </main>
          <!--#main-content-->
          <!-- SIDEBAR 
============ -->
          <aside class="col-md-4">
            <div class="row">
              <section class="widget col-sm-6 col-md-12">
                <!-- Widget Header -->
                <header class="clearfix">
                  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/300.png" class="shadow" alt="shadow">
                </header>
               
              </section>
              <section class="widget col-sm-6 col-md-12">
                <!-- Widget Header -->
                <header class="clearfix">
                 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/300.png" class="shadow" alt="shadow">
                </header>
               
               
              </section>
              <!-- TABS WIDGET -->
              <section class="col-sm-6 col-md-12 widget">
                <!-- Tab menus -->
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#popular-aside" data-toggle="tab">Popular</a>
                  </li>
                  <li>
                    <a href="#recent-aside" data-toggle="tab">Recent </a>
                  </li>
                  <li>
                    <a href="#comments-aside" data-toggle="tab">Gallery</a>
                  </li>
                </ul>
                <!-- Tab contents -->
                <div class="tab-content">
                  <!--Popular-->
                  <div class="tab-pane active fade in" id="popular-aside">
                    <?php for($i=0;$i<count($popular_fort_blogs);$i++) { ?>
					<div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
                         <img width="95px;" height="75px;" src="<?php echo Yii::app()->baseurl.'../images/fort/thumbnail/'.$popular_fort_blogs[$i]['thumbnail']; ?>" alt="<?php echo $popular_fort_blogs[$i]['thumbnail_alt'];?>">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-gallery">
                        </span>
                      </a>
                      <h5>
                        <a href="#"><?php echo $popular_fort_blogs[$i]['title'];?>
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> <?php echo date('F m, Y', strtotime($popular_fort_blogs[$i]['blog_date']));?>
                        </a> 
                        <!--<a href="#">
                          <span class="fa fa-folder">
                          </span> Travel
                        </a>-->
                      </p>
                    </div>
                    <hr>
					<?php } ?>
                  </div>
                  <!--Recent-->

				  <div class="tab-pane fade" id="recent-aside">
				    <?php for($i=0;$i<count($resent_fort_blogs);$i++) { ?>
                    <div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
								<img width="95px;" height="75px;" src="<?php echo Yii::app()->baseurl.'../images/fort/thumbnail/'.$resent_fort_blogs[$i]['thumbnail']; ?>" alt="<?php echo $resent_fort_blogs[$i]['thumbnail_alt'];?>">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-gallery">
                        </span>
                      </a>
                      <h5>
                        <a href="#"><?php echo $resent_fort_blogs[$i]['title'];?>
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> <?php echo date('F m, Y', strtotime($resent_fort_blogs[$i]['blog_date']));?>
                        </a> 
                        <!--<a href="#">
                          <span class="fa fa-folder">
                          </span> National
                        </a>-->
                      </p>
                    </div>
                    <hr>
					<?php } ?>
                  </div>
				  
                  <!--Comments-->
                  <div class="tab-pane fade" id="comments-aside">
                    <ul class="recent-comments clearfix">
                      <?php for($i=0;$i<count($gallery);$i++ ) { ?>
					  <li>
                        <div class="avatar">
                          <a href="#" class="light">
                            <img width="95px;" height="75px;" src="<?php echo Yii::app()->baseurl.'../images/gallery/thumbnail/'.$gallery[$i]['thumbnail']; ?>" alt="<?php echo $gallery[$i]['thumbnail_alt'];?>">
                            <div class="layer">
                            </div>
                          </a>
                        </div>
                        <div class="content">
                          <div class="comment-content">
                            <a href="#"><?php echo $gallery[$i]['title'];?>
                            </a>
                          </div>
                          <div class="comment-meta">
                             <a href="#">
                          <span class="fa fa-clock-o">
                          </span> <?php echo date('F m, Y', strtotime($gallery[$i]['blog_date']));?>
                        </a> 
                            <!--<a href="#">
                              <i class="fa fa-clock-o">
                              </i> Jan 13, 2014
                            </a>-->
                          </div>
                        </div>
                      </li>
					  <?php } ?>
                    </ul>
                  </div>
                </div>
              </section>
              <!-- ADS WIDGET -->
              <!-- FEEDBURNER WIDGET -->
              <section class="col-sm-6 col-md-12 widget feedburner">
                <!-- Widget Header -->
                <header class="clearfix">
                  <h4>Feedburner
                  </h4>
                </header>
                <!-- Widget Content -->
                <form action="#" method    ="post">
                  <div class="input-group">
                    <i class="fa fa-envelope">
                    </i>
                    <input type="text" name="email" placeholder="Enter your email address" />                                        
                  </div>
                  <input type="hidden" value="YOUR_FEEDBURNER_URI" name="uri"/>
                  <!-- Change YOUR_FEEDBURNER_URI with your actual FeedBurner URI. -->
                  <input type="hidden" name="loc" value="en_US"/>
                  <input type="submit" value="Subscribe" />   
                </form>
              </section>
              <!-- FeedBurner -->
              <section class="widget col-sm-6 col-md-12">
                <!-- Widget Header -->
                <header class="clearfix">
                  <h4>Advertise</h4>
                </header>
                <!-- Widget Content -->
                <div class="frame thick">
                  <a href="#"> 
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/600.jpg" class="shadow" alt="shadow">
                  </a>
                </div>
              </section>
            </div>
            <!--.row-->
          </aside>                                
        </div>
        <!--.row-->
        <!-- SLIDER TABS WIDGET: GALLERY -->
         <section id="slider-tabs" class="widget no-mobile" style="display: block;">
          <!-- Widget header -->
          <ul class="nav nav-tabs">
            <!--Title-->
            <li class="active">
              <a href="#gallery">Latest Gallery </a> </li>
             </ul>
          <!-- Tab Contents -->
          <div class="tab-content">     
            <!-- Gallery Tab Content -->
            <div class="tab-pane active" id="gallery">
              <div class="slider-container">
                <ul class="da-thumbs">
 
			<?php for($i=0;$i<count($fort_gallerys);$i++) { ?>
				<li>
                    <a href="<?php echo Yii::app()->createUrl('gallery/index'); ?>" title="Raigad Fort">
                      <div data-src="<?php echo Yii::app()->baseurl.'../images/fortgallery/smallthumbnail/'.$fort_gallerys[$i]['thumbnail']; ?>" data-alt="<?php echo $fort_gallerys[$i]['alt_thumbnail']?>">
                      </div>
                      <div class="image-caption">
                        <h5><?php echo $fort_gallerys[$i]['title'];?></h5>
                      </div>
                      <span class="image-light">
                      </span>
                    </a>
                  </li>
                  
				  <?php } ?>
                  </ul>
              </div>                                                        
            </div>
          </div>
        </section>
      </div>
      <!--.container-->
    </div>
    <!--#content-->