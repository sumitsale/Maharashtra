                
                <!-- CONTENT
                ============ -->
                <div id="content">            
                        <div class="container">
                                <div class="row">
                                        <!-- MAIN CONTENT
                                        ================= -->
                                        <main id="main-content" class="col-md-8">
                                                                                              
                                                
                                                <!-- ADS WIDGET -->
                                                <section class="widget">
                                                        <!-- Widget Content -->
                                                        <div class="frame thick">                                
                <a href="" target="_blank">
                  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/728.png" alt="ads">
                </a>                                
              </div>
                                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shadow.png" alt="shadow" class="shadow">                                                        
                                                </section>
                                                
				<?php for($i= 0; $i < count($gallerys); $i++) { ?>

                                                <article class="article-medium">
                                                        <div class="row">
                                                                <!--Image-->
                                                                <div class="col-sm-6">
                                                                        <div class="frame">
                                                                                <a class="image" href="<?php echo Yii::app()->createUrl('fortgallery/index',array('name'=> str_replace(' ','-',$gallerys[$i]['title'])))?>">
                                                                                        <figure class="image-holder">
                                                                                                <img width="95px;" height="75px;" src="<?php echo Yii::app()->baseurl.'../images/gallery/thumbnail/'.$gallerys[$i]['thumbnail']; ?>" alt="<?php echo $gallerys[$i]['thumbnail_alt']; ?>">
                                                                                        </figure>
                                                                                        <div class="image-light"></div>
                                                                                        <span class="dashicons dashicons-format-gallery"></span>
                                                                                </a>
                                                                        </div>
                                                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shadow.png" class="shadow" alt="shadow">                                    
                                                                </div>

                                                                <!--Content-->
                                                                <div class="col-sm-6">
                                                                        <h4><a href="<?php echo Yii::app()->createUrl('fortgallery/index',array('name'=> str_replace(' ','-',$gallerys[$i]['title'])))?>">
                                                                          <?php echo $gallerys[$i]['title']; ?>
                                                                        <p class="post-meta">
                                                                                <a href="#"><span class="fa fa-clock-o"></span> <?php echo date('F m, Y', strtotime($gallerys[$i]['blog_date']));?></a> 
                                                                                <!--<a href="#"><span class="fa fa-user"></span> FriskaMax</a>--> 
                                                                                <a href="#"><span class="fa fa-comments"></span> <?php echo $gallerys[$i]['view_count']; ?></a> 
                                                                                <!--<a href="#"><span class="fa fa-eye"></span> 4,448</a>-->
                                                                        </p>
                                                                        <p>
                                                                                 <?php echo substr(strip_tags($gallerys[$i]['english_content']),0,220).'...'; ?>
                                                                        </p>                                    
                                                                </div>
                                                        </div>

                                                        <!--Footer-->
                                                        <div class="footer">
                                                                 
                                                                <div class="read-more">
                                                                        <button class="btn btn-primary btn-sm">Read More</button> 
                                                                </div>
                                                        </div>
                                                </article>      

                                                
                                                
                                                <?php } ?>

                                                <!-- PAGINATION -->
                                                <ul class="pagination">
                                                        <li><a href="#" title="prev"><i class="fa fa-angle-double-left"></i></a></li>
                                                        <li class="divider"></li>
                                                        <!--<li><a href="#">1</a></li>
                                                        <li class="active"><span>2</span></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">5</a></li>-->
														
														<?php for($i=1;$i<=$total_page;$i++) { ?>
															
															<?php if($page == $i) { ?>
																<li class="active"><span><?php echo $i; ?></span></li>
															<?php }  else { ?>
																<li><a href="<?php echo Yii::app()->createUrl('gallery/index', array('page'=>$i))?>"><?php echo $i; ?></a></li>			
															<?php } ?>
															
														<?php } ?>
														
                                                        <li class="divider"></li>
                                                        <li><a href="#" title="next"><i class="fa fa-angle-double-right"></i></a></li>
                                                </ul>
                                                

                                                
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
                      <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$popular_fort_blogs[$i]['title'])))?>" class="image">
                        <figure class="image-holder">
                         <img width="95px;" height="75px;" src="<?php echo Yii::app()->baseurl.'../images/fort/thumbnail/'.$popular_fort_blogs[$i]['thumbnail']; ?>" alt="<?php echo $popular_fort_blogs[$i]['thumbnail_alt'];?>">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-gallery">
                        </span>
                      </a>
                      <h5>
                        <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$popular_fort_blogs[$i]['title'])))?>"><?php echo $popular_fort_blogs[$i]['title'];?>
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
                      <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$resent_fort_blogs[$i]['title'])))?>" class="image">
                        <figure class="image-holder">
								<img width="95px;" height="75px;" src="<?php echo Yii::app()->baseurl.'../images/fort/thumbnail/'.$resent_fort_blogs[$i]['thumbnail']; ?>" alt="<?php echo $resent_fort_blogs[$i]['thumbnail_alt'];?>">
                        </figure>
                        <div class="image-light">
                        </div>
                        <span class="dashicons dashicons-format-gallery">
                        </span>
                      </a>
                      <h5>
                        <a href="<?php echo Yii::app()->createUrl('blogdetail/index',array('name'=> str_replace(' ','-',$resent_fort_blogs[$i]['title'])))?>"><?php echo $resent_fort_blogs[$i]['title'];?>
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
                          <a href="<?php echo Yii::app()->createUrl('fortgallery/index',array('name'=> str_replace(' ','-',$gallery[$i]['title'])))?>">
                            <img width="95px;" height="75px;" src="<?php echo Yii::app()->baseurl.'../images/gallery/thumbnail/'.$gallery[$i]['thumbnail']; ?>" alt="<?php echo $gallery[$i]['thumbnail_alt'];?>">
                            <div class="layer">
                            </div>
                          </a>
                        </div>
                        <div class="content">
                          <div class="comment-content">
                            <a href="<?php echo Yii::app()->createUrl('fortgallery/index',array('name'=> str_replace(' ','-',$gallery[$i]['title'])))?>">
                            <?php echo $gallery[$i]['title'];?>
                            </a>
                          </div>
                          <div class="comment-meta">
                             <a href="javascript::void(0)">
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
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/600.JPG" class="shadow" alt="shadow">
                  </a>
                </div>
              </section>
            </div>
            <!--.row-->
          </aside>
                                </div>
                        </div>
                </div><!--#content-->
