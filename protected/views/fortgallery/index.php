                <!-- CONTENT
                ============ -->
                <div id="content">    
                        <div class="container">
                                <div class="row">       
                                        <!-- MAIN CONTENT
                                        ================= -->
                                        <main id="main-content" class="col-md-8">
                                    <div class="frame thick">                                
                <a href="" target="_blank">
                  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/728.png" alt="ads">
                </a>                                
              </div>                                              
                                                
                                                <!-- POST CONTENT -->
                                                <article class="article-large hentry">
                                                        
                                                        <header class="hidden">
                                                                <h1 class="entry-title">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem</h1>
                                                        </header>                                                        

                                                        <div class="entry-content">
                                                                <!-- IMAGES -->    
                                                                <div class="images">
                                                                        <ul class="da-thumbs clearfix">

                                                                        <?php for($i=0;$i<count($fort_gallery);$i++) { ?>
                                                                                <li>
                                                                                        <a href="<?php echo Yii::app()->baseurl.'../images/fortgallery/thumbnail/'.$fort_gallery[$i]['thumbnail']; ?>" title="<?php echo $fort_gallery[$i]['title']; ?>" data-lightbox-gallery="blog-gallery">
                                                                                                <img src="<?php echo Yii::app()->baseurl.'../images/fortgallery/smallthumbnail/'.$fort_gallery[$i]['thumbnail']; ?>" alt="<?php echo $fort_gallery[$i]['alt_thumbnail']; ?>">
                                                                                                <div class="image-caption">
                                                                                                        <h5><?php echo $fort_gallery[$i]['title']; ?></h5>
                                                                                                </div>
                                                                                                <span class="image-light"></span>
                                                                                        </a>
                                                                                </li>
                                                                                
                                                                               
                                                                               <?php }  ?>
                                                                                
                                                                                
                                                                        </ul>
                                                                </div><!-- .images -->
                                                                
                                                                <!--Page links-->
                                                                <div class="page-links">Pages: 


                                                <?php for($i=1;$i<=$total_page;$i++) { ?>
                                                        
                                                        <?php if($page == $i) { ?>
                                                                <span><?php echo $i; ?></span>
                                                        <?php }  else { ?>
                                                               <a href="<?php echo Yii::app()->createUrl('fortgallery/index', array('name'=>$name, 'page'=>$i))?>"><span><?php echo $i; ?></span></a>		
                                                        <?php } ?>
                                                        
                                                <?php } ?>
<!--														
                                                                        <a href="#"><span>1</span></a> 
                                                                        <span>2</span> 
                                                                        <a href="#"><span>3</span></a>-->
                                                                </div>
                                                        </div><!-- .entry-content -->
                                                </article><!-- .hentry -->
                                     
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
											<section class="widget">
                                                        <!--Widget header-->
                                                        <header class="clearfix"><h4>Related</h4></header>

                                                        <!--Widget Contents-->
                                                        <div class="row">
                                                        <?php for($i=0;$i<count($related);$i++) { ?>
                                                                <div class="article-small col-md-3 col-sm-6">                                        
                                                                        <a href="<?php echo Yii::app()->createUrl('fortgallery/index',array('name'=> str_replace(' ','-',$related[$i]['title'])))?>" class="image">
                                                                                <figure class="image-holder">
                                                                                        <img src="<?php echo Yii::app()->baseurl.'../images/gallery/thumbnail/'.$related[$i]['thumbnail']; ?>" alt="<?php echo $related[$i]['thumbnail_alt'];?>">
                                                                                </figure>
                                                                                <div class="image-light"></div>
                                                                                <span class="dashicons dashicons-format-audio"></span>
                                                                        </a>
                                                                        <h5>
                                                                        <a href="">
                                                                        <?php echo $related[$i]['title']; ?></a></h5>
                                                                        <p class="post-meta">
                                                                                <a href="javascript::void(0)"><span class="fa fa-clock-o"></span> Dec 4, 2013</a> 
                                                                                <a href="javascript::void(0)"><span class="fa fa-comments"></span> <?php echo $related[$i]['view_count']; ?></a>
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
                        </div>
                </div><!--#content-->
