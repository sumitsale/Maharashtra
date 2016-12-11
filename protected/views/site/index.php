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
                    <a class="image" href="javascript::void(0);">
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
                    <a href="javascript::void0);"><?php echo $fort_blogs[0]['title']; ?>
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
                  <a href="#" class="image">
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
                    <a href="#"><?php echo $fort_blogs[$i]['title']; ?>
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
                <a href="#" class="control"> <i class="fa fa-plus"> </i> </a>
              </header>
			  
			  <?php for($i=0;$i<count($kings);$i++) { ?>
              <div class="article-medium">
                <div class="row">
                  <!--Image-->
                  <div class="col-sm-6">
                    <div class="frame">
                      <a class="image" href="#">
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
                      <a href="#"><?php echo $kings[$i]['title']; ?>
                      </a>
                    </h4>
                    <p class="post-meta">
                      <a href="#">
                        <span class="fa fa-clock-o">  </span> Dec 4, 2013 </a> 
                      <!--<a href="#"> <span class="fa fa-folder"> </span> Bussiness </a> 
                      <a href="#"> <span class="fa fa-comments"> </span> 1,324 </a> -->
                      <a href="#"> <span class="fa fa-eye"> </span> <?php echo $kings[$i]['view_count']; ?> </a>
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
                    <a class="image" href="#">
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
                    <a href="#"><?php echo $wars[0]['title']; ?>
                    </a>
                  </h4>
                  <p class="post-meta">
                    <a href="#">
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
                  <a href="#" class="image">
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
                    <a href="#"><?php echo $wars[$i]['title']; ?>
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
                    <div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
                          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/unsplash_528cba6de78e5_1-tiny.jpg" alt="Mauris mattis ullamcorper euismod Nulla convallis ">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-gallery">
                        </span>
                      </a>
                      <h5>
                        <a href="#">Mauris mattis ullamcorper euismod Nulla convallis
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                        <a href="#">
                          <span class="fa fa-folder">
                          </span> Travel
                        </a>
                      </p>
                    </div>
                    <hr>
                    <div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
                          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/unsplash_5261cd0183e57_1-tiny.jpg" alt="Nulla vitae velit ac velit luctus facilisis dictum Mauris malesuada ante ut gravida condimentum">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-audio">
                        </span>
                      </a>
                      <h5>
                        <a href="#">Nulla vitae velit ac velit luctus facilisis dictum Mauris malesuada ante ut gravida condimentum
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                        <a href="#">
                          <span class="fa fa-folder">
                          </span> Science
                        </a>
                      </p>
                    </div>
                    <hr>
                    <div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
                          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/11452469094_9d17db34ba_o-tiny.jpg" alt="Nulla id eros ut nibh hendrerit sollicitudin ">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-links">
                        </span>
                      </a>
                      <h5>
                        <a href="#">Nulla id eros ut nibh hendrerit sollicitudin
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                        <a href="#">
                          <span class="fa fa-folder">
                          </span> National
                        </a>
                      </p>
                    </div>
                    <hr>
                    <div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
                          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/berries-tiny.jpg" alt="ornare nibh Nunc semper dolor quis augue venenatis ">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-links">
                        </span>
                      </a>
                      <h5>
                        <a href="#">ornare nibh Nunc semper dolor quis augue venenatis
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                        <a href="#">
                          <span class="fa fa-folder">
                          </span> Health
                        </a>
                      </p>
                    </div>
                    <hr>
                  </div>
                  <!--Recent-->
                  <div class="tab-pane fade" id="recent-aside">
                    <div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
                          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/day-of-the-dead-204539-tiny.jpg" alt="Day of the dead Maecenas odio condimentum a libero ">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-gallery">
                        </span>
                      </a>
                      <h5>
                        <a href="#">Day of the dead Maecenas odio condimentum a libero
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                        <a href="#">
                          <span class="fa fa-folder">
                          </span> National
                        </a>
                      </p>
                    </div>
                    <hr>
                    <div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
                          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/morocco-123957-tiny.jpg" alt="Nulla vitae velit ac velit luctus facilisis dictum Mauris malesuada ante ut gravida condimentum">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-audio">
                        </span>
                      </a>
                      <h5>
                        <a href="#">Morocco molestie hendrerit magna Morbi tristique
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                        <a href="#">
                          <span class="fa fa-folder">
                          </span> Politics
                        </a>
                      </p>
                    </div>
                    <hr>
                    <div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
                          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/douglas-x-3-stiletto-11119-tiny.jpg" alt="Nulla id eros ut nibh hendrerit sollicitudin ">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-links">
                        </span>
                      </a>
                      <h5>
                        <a href="#">Douglas X3 Nulla id eros ut nibh hendrerit sollicitudin
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                        <a href="#">
                          <span class="fa fa-folder">
                          </span> Science
                        </a>
                      </p>
                    </div>
                    <hr>
                    <div class="article-tiny">
                      <a href="#" class="image">
                        <figure class="image-holder">
                          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/nepal-397-tiny.jpg" alt="ornare nibh Nunc semper dolor quis augue venenatis ">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-links">
                        </span>
                      </a>
                      <h5>
                        <a href="#">Nepal ornare nibh Nunc semper purus sit amet rhoncus imperdiet
                        </a>
                      </h5>
                      <p class="post-meta">
                        <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                        <a href="#">
                          <span class="fa fa-folder">
                          </span> World
                        </a>
                      </p>
                    </div>
                    <hr>
                  </div>
                  <!--Comments-->
                  <div class="tab-pane fade" id="comments-aside">
                    <ul class="recent-comments clearfix">
                      <li>
                        <div class="avatar">
                          <a href="#" class="light">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/DSC00441-avatar.jpg" alt="Siska">
                            <div class="layer">
                            </div>
                          </a>
                        </div>
                        <div class="content">
                          <div class="comment-content">
                            <a href="#">Aliquam sollicitudin massa eu augue hendrerit
                            </a>
                          </div>
                          <div class="comment-meta">
                             <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                            <a href="#">
                              <i class="fa fa-clock-o">
                              </i> Jan 13, 2014
                            </a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="avatar">
                          <a href="#" class="light">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/DSC02979-avatar.jpg" alt="Fahri">
                            <div class="layer">
                            </div>
                          </a>
                        </div>
                        <div class="content">
                          <div class="comment-content">
                            <a href="#">Fusce viverra ligula elit aliquam vel turpis ut
                            </a>
                          </div>
                          <div class="comment-meta">
                             <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                            <a href="#">
                              <i class="fa fa-clock-o">
                              </i> Jan 13, 2014
                            </a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="avatar">
                          <a href="#" class="light">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/snapshot_20120929_133548-E2-avatar.jpg" alt="Rahma">
                            <div class="layer">
                            </div>
                          </a>
                        </div>
                        <div class="content">
                          <div class="comment-content">
                            <a href="#">eget facilisis erat aliquet tempus mi ligula consequat
                            </a>
                          </div>
                          <div class="comment-meta">
                             <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                            <a href="#">
                              <i class="fa fa-clock-o">
                              </i> Jan 13, 2014
                            </a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="avatar">
                          <a href="#" class="light">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/DSC03847-avatar.jpg" alt="Rusli">
                            <div class="layer">
                            </div>
                          </a>
                        </div>
                        <div class="content">
                          <div class="comment-content">
                            <a href="#">lacus sit amet tincidunt odio massa quis felis
                            </a>
                          </div>
                          <div class="comment-meta">
                             <a href="#">
                          <span class="fa fa-clock-o">
                          </span> Jan 4, 2014
                        </a> 
                            <a href="#">
                              <i class="fa fa-clock-o">
                              </i> Jan 13, 2014
                            </a>
                          </div>
                        </div>
                      </li>
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
                    <a href="gallery.html" title="Raigad Fort">
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