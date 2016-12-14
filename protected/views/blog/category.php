
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
                                                
                                                <?php for($i=0;$i<count($fort_blogs);$i++) { ?>
                                                <article class="article-medium">
                                                        <div class="row">
                                                                <!--Image-->
                                                                <div class="col-sm-6">
                                                                        <div class="frame">
                                                                                <a class="image" href="#">
                                                                                        <figure class="image-holder">
                                                                                                <img src="<?php echo Yii::app()->baseurl.'../images/fort/thumbnail/'.$fort_blogs[$i]['thumbnail']; ?>" alt="<?php echo $fort_blogs[$i]['thumbnail_alt']; ?>">
                                                                                        </figure>
                                                                                        <div class="image-light"></div>
                                                                                        <span class="dashicons dashicons-format-gallery"></span>
                                                                                </a>
                                                                        </div>
                                                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shadow.png" class="shadow" alt="shadow">                                    
                                                                </div>

                                                                <!--Content-->
                                                                <div class="col-sm-6">
                                                                        <h4><a href="#"><?php echo $fort_blogs[$i]['title']; ?></a></h4>
                                                                        <p class="post-meta">
                                                                                <a href="#"><span class="fa fa-clock-o"></span> <?php echo date('F m, Y', strtotime($fort_blogs[$i]['blog_date']));?></a> 
                                                                                <!--<a href="#"><span class="fa fa-user"></span> FriskaMax</a> -->
                                                                                <a href="#"><span class="fa fa-comments"></span> <?php echo $fort_blogs[$i]['view_count']; ?></a> 
                                                                                <!--<a href="#"><span class="fa fa-eye"></span> 4,448</a>-->
                                                                        </p>
                                                                        <p>
                                                                                <?php echo substr(strip_tags($fort_blogs[$i]['english_content']),0,220).'...'; ?>
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
																<li><a href="<?php echo Yii::app()->createUrl('blog/category', array('category'=>$category,'page'=>$i))?>"><?php echo $i; ?></a></li>			
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
                              <i class="fa fa-user">
                              </i> Siska
                            </a>
                            <a href="#"><i class="fa fa-clock-o"></i> Jan 13, 2014 </a>
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
                            <a href="#" class="author">
                              <i class="fa fa-user">
                              </i> Fahri
                            </a>
                            <a href="#"> <i class="fa fa-clock-o"> </i> Jan 13, 2014</a>
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
                            <a href="#" class="author">
                              <i class="fa fa-user">
                              </i> Rahma
                            </a>
                            <a href="#"><i class="fa fa-clock-o"> </i> Jan 13, 2014 </a>
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
                            <a href="#" class="author">
                              <i class="fa fa-user"></i> Rusli </a>
                            <a href="#"> <i class="fa fa-clock-o"> </i> Jan 13, 2014</a>
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
                        </div>
                </div><!--#content-->