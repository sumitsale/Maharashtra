
                <!-- CONTENT
                ============ -->
                <div id="content">    
                        <div class="container">
                                <div class="row">       
                                        <!-- MAIN CONTENT
                                        ================= -->
                                        <main id="main-content" class="col-md-8">
                                        
                                                        <header>
                                                                <h1><?php echo $blog_detail[0]['title']; ?></h1>
                                                               
                                                        </header>
                                                                              
                                                
                                                <!-- POST CONTENT -->
                                                <article class="article-large hentry">      
                                                        <!--Image-->
                                                        <div class="frame thick clearfix">
                                                                <a href="<?php echo Yii::app()->baseurl.'../images/fort/blog_detail_thumbnail/'.$blog_detail[0]['blog_detail_thumbnail']; ?>" class="image" data-lightbox title="<?php echo $blog_detail[0]['blog_detail_alt']; ?>">
                                                                        <figure class="image-holder">
                                                                                <img src="<?php echo Yii::app()->baseurl.'../images/fort/blog_detail_thumbnail/'.$blog_detail[0]['blog_detail_thumbnail']; ?>" alt="<?php echo $blog_detail[0]['blog_detail_alt']; ?>">
                                                                        </figure>
                                                                        <div class="image-light"></div>
                                                                </a>
                                                                <!--<div class="icons entry-footer">
                                                                        <span class="vcard">
                                                                                <a href="#" class="url fn" title="Siska"><span class="hidden">Siska</span><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/DSC00441-avatar.jpg" alt="Siska"></a>
                                                                        </span>
                                                                        <a href="#" title="Post format image"><i class="dashicons dashicons-format-image"></i></a>
                                                                        <a href="#" title="1,347 Comments"><i class="fa fa-comments"></i><span class="comment">1,347</span></a>
                                                                </div>-->
                                                                <p class="post-meta entry-footer pull-right">
                                                                        <a href="#" rel="bookmark"><time class="entry-date published updated" datetime="<?php echo date('F m, Y', strtotime($blog_detail[0]['blog_date']));?>"><?php echo date('F m, Y', strtotime($blog_detail[0]['blog_date']));?></time></a>
                                                                </p>
                                                        </div>
                                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shadow.png" class="shadow" alt="shadow">                                                        
                                                                        
                                                        <header class="hidden">
                                                                <h1 class="entry-title">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem</h1>
                                                        </header>                                                        
                                                        
                                                        <div class="entry-content">
                                                               <section class="col-sm-6 col-md-12 widget">
                <!-- Tab menus -->
                <ul class="nav nav-tabs">
                  <li class="active"> <a href="#marathi" data-toggle="tab">Marathi </a> </li>
                  <li> <a href="#english" data-toggle="tab">English </a> </li>
                 
                </ul>
                <!-- Tab contents -->
                <div class="tab-content">
                  <!--Popular-->
                  <div class="tab-pane active fade in" id="marathi">
                  <?php echo $blog_detail[0]['marathi_content'];?>
                  </div>
                  <!--Recent-->
                  <div class="tab-pane fade" id="english">
                    <?php echo $blog_detail[0]['english_content'];?>
                  </div>
                  <!--Comments-->
                  
                </div>
              </section>
                                                        </div><!-- .entry-content -->                                                        
                                                                                             
                                                </article><!-- .hentry -->
                                                
                                                <!-- SHARE POST -->                        
                                                <section class="share-post clearfix">
                                                        <h5>Share:</h5> 
                                                        <ul>
                                                                <li><a href="#"><i class="sc-sm sc-facebook"></i><span>426</span></a></li>
                                                                <li><a href="#"><i class="sc-sm sc-twitter"></i><span>526</span></a></li>
                                                                <li><a href="#"><i class="sc-sm sc-pinterest"></i><span>283</span></a></li>
                                                                <li><a href="#"><i class="sc-sm sc-linkedin"></i><span>329</span></a></li>
                                                                <li><a href="#"><i class="sc-sm sc-googleplus"></i><span>429</span></a></li>
                                                        </ul>
                                                </section>

                                                <!-- POST NAVIGATIONS -->
                                                <nav class="post-navigation" role="navigation">
                                                        <h5 class="sr-only">Post navigation</h5>
                                                        <div class="nav-links">


                                                                <?php  if(count($prev)>0) { ?>
                                                                <div class="nav-previous">
                                                                        <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$prev[0]['title'])))?>" rel="prev">
                                                                                <span class="meta-nav">Previous Post:</span> 
                                                                                <h5><?php echo $prev[0]['title']; ?></h5>
                                                                        </a>
                                                                </div>
                                                                <?php } ?>


                                                                <?php  if(count($next)>0) { ?>
                                                                <div class="nav-next">
                                                                        <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$next[0]['title'])))?>" rel="prev">
                                                                                <span class="meta-nav">Next Post:</span> 
                                                                                <h5><?php echo $next[0]['title']; ?></h5>
                                                                        </a>
                                                                </div>		
                                                                <?php } ?>
                                                        </div>
                                                </nav>


                                                <!-- ADS -->
                                                <section class="widget">
                                                        <!-- Widget Header -->
                                                        <header class="clearfix"><h4>Advertisement</h4></header>

                                                        <!-- Widget Content -->
                                                        <div class="frame thick">                                
                                                                <a href="http://themeforest.net/user/friskamax/portfolio?ref=friskamax" target="_blank">
                                                                        <img src="http://placehold.it/728x90/f0f0f9" alt="ads">
                                                                </a>                                
                                                        </div>
                                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shadow.png" alt="shadow" class="shadow">                                                        
                                                </section>

                                                <!-- RELATED POSTS -->
                                                <section class="widget">
                                                        <!--Widget header-->
                                                        <header class="clearfix"><h4>Related</h4></header>

                                                        <!--Widget Contents-->
                                                        <div class="row">
                                                        <?php for($i=0;$i<count($related);$i++) {  ?>
                                                                <div class="article-small col-md-3 col-sm-6">                                        
                                                                        <a href="#" class="image">
                                                                                <figure class="image-holder">
                                                                                        <img src="<?php echo Yii::app()->baseurl.'../images/fort/thumbnail/'.$related[$i]['thumbnail']; ?>" alt="<?php echo $related[$i]['thumbnail_alt']; ?>">
                                                                                </figure>
                                                                                <div class="image-light"></div>
                                                                                <span class="dashicons dashicons-format-audio"></span>
                                                                        </a>
                                                                        <h5>
                                                                          <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$related[$i]['title'])))?>">
                                                                            <?php echo $related[$i]['title']; ?>
                                                                          </a>
                                                                        </h5>
                                                                        <p class="post-meta">
                                                                                <a href="javascript::void(0);"><span class="fa fa-clock-o"></span> <?php echo date('F m, Y', strtotime($related[$i]['blog_date']));?></a> 
                                                                                <a href="javascript::void();"><span class="fa fa-comments"></span> <?php echo $related[$i]['view_count']; ?></a>
                                                                        </p>
                                                                        <hr class="visible-sm visible-xs">
                                                                </div>
                                                                <?php } ?>
                                                        </div>
                                                </section>
                                            
                                        </main><!--#main-content-->

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
                    <a href="#popular-aside" data-toggle="tab">Popular
                    </a>
                  </li>
                  <li>
                    <a href="#recent-aside" data-toggle="tab">Recent
                    </a>
                  </li>
                  <li>
                    <a href="#comments-aside" data-toggle="tab">Gallery
                    </a>
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
              <section class="widget col-sm-6 col-md-12 no-mobile">
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
                                <section id="slider-tabs" class="widget no-mobile">
          <!-- Widget header -->
          <ul class="nav nav-tabs">
            <!--Title-->
            <li class="active">
              <a href="gallery.html">Gallery
              </a>
            </li>
            <!--Slider Controls-->
            <li class="pull-right control current">
              <a href="#gallery" data-slide="next">
                <span class="fa fa-chevron-right">
                </span>
              </a>
            </li>
            <li class="pull-right control current">
              <a href="#gallery" data-slide="prev">
                <span class="fa fa-chevron-left">
                </span>
              </a>
            </li>
          </ul>
          <!-- Tab Contents -->
          <div class="tab-content">     
            <!-- Gallery Tab Content -->
            <div class="tab-pane active" id="gallery">
              <div class="slider-container">
                <ul class="da-thumbs">
                <?php for($i=0;$i<count($fort_gallery);$i++) { ?>
                  <li>
                    <a href="<?php echo Yii::app()->baseurl.'../images/fortgallery/thumbnail/'.$fort_gallery[$i]['thumbnail']; ?>" title="<?php echo $fort_gallery[$i]['alt_thumbnail']; ?>" data-lightbox-gallery="silder-tabs-gallery">
                      <div data-src="<?php echo Yii::app()->baseurl.'../images/fortgallery/smallthumbnail/'.$fort_gallery[$i]['thumbnail']; ?>" data-alt="<?php echo $fort_gallery[$i]['alt_thumbnail']; ?>">
                      </div>
                      <div class="image-caption">
                        <h5><?php echo $fort_gallery[$i]['title'];?></h5>
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
                        
                        
                        
                </div><!--#content-->
                