
                <!-- CONTENT
                ============ -->
                <div id="content">           
                        <div class="container">
                                <div class="row">

                                        <!-- MESSAGE FORM -->
                                        <div class="widget message-form col-md-7">
                                        
                                        <div class="frame thick">                                
                <a href="" target="_blank">
                  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/728.png" alt="ads">
                </a>                                
              </div>
                                                <header class="clearfix"><h4>Get in touch</h4></header>

                                                <p>
                                                    <h1>Thank you for your feedback.</h1>
                                                  </p>

                                                
                                        </div>
                                        
                                        <aside class="col-md-4">
            <div class="row">
              
             
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
              
            </div>
            <!--.row-->
          </aside>
                                        
                                </div><!--.row-->
                        </div><!--.container-->
                </div><!--#content-->