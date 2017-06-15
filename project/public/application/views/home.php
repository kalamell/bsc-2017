
                <div class="container">
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content" role="main">
                            <div class="entry type-page status-publish hentry">
                                <div class="entry-content">
                                    <div data-section="empty rows/3 columns.html">
                                        <div data-full-width="true" data-stretch-content="false" data-column-padding="15" data-background-image-mode="none" style="" class="ce718a57">
                                            <div class="azen-row">
                                               <div class="title-view news">
                                                    <h2>ข่าวสารจากแบรนด์ซัมเมอร์แคมป์</h2>
                                                    <a href="<?php echo site_url('news');?>">All News</a>
                                               </div>
                                                <div class="azen-col-xs-12 azen-col-sm-12 azen-col-md-4 azen-col-lg-5 azen-col-xs-offset-0 azen-col-sm-offset-0 azen-col-md-offset-0 azen-col-lg-offset-0" data-cloneable="">
                                                    <div data-element="univer/list-univer.htm">
                                                        <div class="azen azen1 azen2 azen3">
                                                            <div class="azen-univer-list">
                                                                <div class="azen-list-thumbnail" data-group="<?php echo base_url();?>assets/images">
                                                                    <img class="azen-thumbnail-image" style="cursor: pointer;" onclick="javascript:top.location.href='<?php echo site_url('news/node/'.$news_first->id);?>'" src="<?php echo base_url();?>upload/news/<?php echo $news_first->image_path;?>" alt="" />
                                                                </div>
                                                                <div class="azen-list-data">
                                                                    <div class="azen-data-extra">
                                                                        <span><?php echo date('F d, Y', strtotime($news_first->ondate));?></span>
                                                                    </div>
                                                                    <div class="azen-data-title title">
                                                                      <a href="<?php echo site_url('news/node/'.$news_first->id);?>" >
                                                                        <h3 class="bold-title" class="az-inline">“<?php echo $news_first->title;?>”</h3>

                                                                        <p><?php echo $news_first->except;?></p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="azen-col-xs-12 azen-col-sm-12 azen-col-md-6 azen-col-lg-6 azen-col-xs-offset-0 azen-col-sm-offset-0 azen-col-md-offset-0 azen-col-lg-offset-0" data-cloneable="">
                                                    <?php foreach($news_other as $n_o):?>
                                                    <div data-element="univer/list-univer-mini.htm">
                                                        <div class="azen azen1 azen2 azen3">
                                                            <div class="azen-univer-list-mini az-row">
                                                                <div class="azen-list-thumbnail az-column" data-group="<?php echo base_url();?>assets/images" style="cursor: pointer;" onclick="javascript:top.location.href='<?php echo site_url('news/node/'.$n_o->id);?>'">
                                                                    <img class="azen-thumbnail-image" src="<?php echo base_url();?>upload/news/<?php echo $n_o->image_path;?>" alt="" />
                                                                </div>
                                                                <div class="azen-list-data az-column" data-group="content">
                                                                    <div class="azen-data-extra">
                                                                        <span><?php echo date('F d, Y', strtotime($n_o->ondate));?></span>
                                                                    </div>
                                                                    <div class="azen-data-title">
                                                                        <a href="<?php echo site_url('news/node/'.$n_o->id);?>"><h4 class="az-inline">“<?php echo $n_o->title;?>”</h4>
                                                                        <p><?php echo $n_o->except;?></p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach;?>
                                                    <!--
                                                    <div data-element="univer/list-univer-mini.htm">
                                                        <div class="azen azen1 azen2 azen3">
                                                            <div class="azen-univer-list-mini az-row">
                                                                <div class="azen-list-thumbnail az-column" data-group="<?php echo base_url();?>assets/images">
                                                                    <img class="azen-thumbnail-image" src="<?php echo base_url();?>assets/images/list-univer-mini.jpg" alt="" />
                                                                </div>
                                                                <div class="azen-list-data az-column" data-group="content">
                                                                    <div class="azen-data-extra">
                                                                        <span>Octeber 3, 2016</span>
                                                                    </div>
                                                                    <div class="azen-data-title">
                                                                         <a href=""><h4 href="/" class="az-inline">“พีเจ้น”ฉลองครบรอบ 4 ปี “Pigeon Little Moments Club”</h4></a>
                                                                        <p>Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-element="univer/list-univer-mini.htm">
                                                        <div class="azen azen1 azen2 azen3">
                                                            <div class="azen-univer-list-mini az-row">
                                                                <div class="azen-list-thumbnail az-column" data-group="<?php echo base_url();?>assets/images">
                                                                    <img class="azen-thumbnail-image" src="<?php echo base_url();?>assets/images/list-univer-mini.jpg" alt="" />
                                                                </div>
                                                                <div class="azen-list-data az-column" data-group="content">
                                                                    <div class="azen-data-extra">
                                                                        <span>Octeber 3, 2016</span>
                                                                    </div>
                                                                   <div class="azen-data-title">
                                                                        <a href=""><h4 href="/" class="az-inline">“พีเจ้น”ฉลองครบรอบ 4 ปี “Pigeon Little Moments Club”</h4></a>
                                                                        <p>Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-top: 100px;" data-section="empty rows/2 columns.html">
                                        <div data-full-width="true" data-stretch-content="false" data-column-padding="60" data-background-image-mode="none" style="" class="c6200cf1">
                                            <div class="azen-row">
                                                <div class="azen-col-xs-12 azen-col-sm-12 azen-col-md-6 azen-col-lg-6 azen-col-xs-offset-0 azen-col-sm-offset-0 azen-col-md-offset-0 azen-col-lg-offset-0" data-cloneable="">
                                                    <div data-element="univer/mission-text-univer.htm">
                                                        <div class="azen azen1 azen2 azen3">
                                                            <div class="azen-univer-mission-text">
                                                                <div class="azen-info-header" data-group="About header">
                                                                    <div class="title-view" id="title-view">
                                                                        <h2>สอบครั้งสำคัญ มุ่งมั่นทำให้เต็มที่</h2>
                                                                        <!-- <a href="">All News</a> -->
                                                                    </div>
                                                                </div>
                                                                <div class="azen-info-description" data-group="About description">
                                                                    <div>
                                                                       <p>แบรนด์ขอส่งกำลังใจให้กับน้องๆทุกคน ผ่านบทเพลง “ชัยชนะ” เพราะสอบครั้งสำคัญ ต้องมุ่งมั่นทำให้เต็มที่... เชื่อว่าทุกคนทำได้ สู้สู้นะครับ! #ทุ่มเทไม่หยุดสู่ทุกจุดหมาย</p>
                                                                    </div>
                                                                </div>
                                                                <div class="azen-info-button" data-group="About button">
                                                                    <a href="https://www.youtube.com/watch?v=hQMADgKo9mo">Read more <span></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="azen-col-xs-12 azen-col-sm-12 azen-col-md-6 azen-col-lg-6 azen-col-xs-offset-0 azen-col-sm-offset-0 azen-col-md-offset-0 azen-col-lg-offset-0" data-cloneable="">
                                                    <div data-element="univer/if-video.htm">
                                                        <div class="azen azen1 azen2 azen3">
                                                            <div class="azen-univer-if-video" style="background-image: url(https://img.youtube.com/vi/hQMADgKo9mo/0.jpg);" data-darken-background="false">
                                                                <a href="https://www.youtube.com/watch?v=hQMADgKo9mo" class="az-iframe-popup">
                                                                    <div class="azen-content c32777ce" style=""></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-section="univer/events-slider.html" style="display: none">
                                        <div class="azen azen1 azen2 azen3">
                                            <div data-full-width="true" data-stretch-content="false" data-without-padding="false" class="azen-univer-upcoming-event">
                                                <div class="azen-univer-upcoming-event-wrapper">
                                                    <div class="azen-upcoming-title" data-group="Title slider">
                                                        <div class="activity">
                                                           <h2>ติวเตอร์กับแบรนด์ซัมเมอร์แคมป์</h2>
                                                        </div>
                                                    </div>
                                                    <div class="azen-univer-upcoming-slider" data-group="Slider">
                                                        <div class="az-carousel az-owl-carousel" data-az-carousel="false" data-margin="0" data-autoplay="yes" data-loop="no" data-center="yes" data-responsive='{"0":{"items":1}}' data-cloneable-inline="">
                                                            <div data-element="univer/upcoming-univer.htm">
                                                                <div class="azen azen1 azen2 azen3">
                                                                    <div class="azen-univer-slider-event" data-cloneable="" data-group="group">
                                                                        <div class="azen-upcoming-event az-row">
                                                                            <div class="azen-event-thumbnail az-column az-row" data-group="thumbnail">
                                                                                <div class="azen-thumbnail-date az-column">
                                                                                    <div>
                                                                                        24
                                                                                    </div><span class="azen-hr-mini-from-cell"></span> <span>Octeber 2016</span>
                                                                                </div>
                                                                                <div class="az-column azen-img">
                                                                                    <img src="<?php echo base_url();?>assets/images/Upcoming-images1.jpg" alt="" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="azen-event-data az-column" data-group="content">
                                                                                <div class="azen-data-extra-header">
                                                                                    <div>
                                                                                       <a href=""><h3>โครงการแบรนด์ซัมเมอร์แคมป์</h3></a>
                                                                                    </div><span><p>Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p></span>
                                                                                </div>
                                                                                <div class="azen-data-fields" data-cloneable-inline="">
                                                                                    <span class="azen-field"><span class="az-icon fa fa-clock-o"></span> All Day</span> <span class="azen-field-location"><span class="az-icon fa fa-map-marker"></span> New York, US</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="azen-upcoming-event az-row">
                                                                            <div class="azen-event-thumbnail az-column az-row" data-group="thumbnail">
                                                                                <div class="azen-thumbnail-date az-column">
                                                                                    <div>
                                                                                        24
                                                                                    </div><span class="azen-hr-mini-from-cell"></span> <span>Octeber 2016</span>
                                                                                </div>
                                                                                <div class="az-column azen-img">
                                                                                    <img src="<?php echo base_url();?>assets/images/Upcoming-images2.jpg" alt="" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="azen-event-data az-column" data-group="content">
                                                                                <div class="azen-data-extra-header">
                                                                                    <div>
                                                                                         <a href=""><h3>โครงการแบรนด์ซัมเมอร์แคมป์</h3></a>
                                                                                    </div><span><p>Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p></span>
                                                                                </div>
                                                                                <div class="azen-data-fields" data-cloneable-inline="">
                                                                                    <span class="azen-field"><span class="az-icon fa fa-clock-o"></span> All Day</span> <span class="azen-field-location"><span class="az-icon fa fa-map-marker"></span> New York, US</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-element="univer/upcoming-univer.htm">
                                                                <div class="azen azen1 azen2 azen3">
                                                                    <div class="azen-univer-slider-event" data-cloneable="" data-group="group">
                                                                        <div class="azen-upcoming-event az-row">
                                                                            <div class="azen-event-thumbnail az-column az-row" data-group="thumbnail">
                                                                                <div class="azen-thumbnail-date az-column">
                                                                                    <div>
                                                                                        24
                                                                                    </div><span class="azen-hr-mini-from-cell"></span> <span>Octeber 2016</span>
                                                                                </div>
                                                                                <div class="az-column azen-img">
                                                                                    <img src="<?php echo base_url();?>assets/images/Upcoming-images1.jpg" alt="" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="azen-event-data az-column" data-group="content">
                                                                                <div class="azen-data-extra-header">
                                                                                    <div>
                                                                                         <a href=""><h3>โครงการแบรนด์ซัมเมอร์แคมป์</h3></a>
                                                                                    </div><span><p>Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p></span>
                                                                                </div>
                                                                                <div class="azen-data-fields" data-cloneable-inline="">
                                                                                    <span class="azen-field"><span class="az-icon fa fa-clock-o"></span> All Day</span> <span class="azen-field-location"><span class="az-icon fa fa-map-marker"></span> New York, US</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="azen-upcoming-event az-row">
                                                                            <div class="azen-event-thumbnail az-column az-row" data-group="thumbnail">
                                                                                <div class="azen-thumbnail-date az-column">
                                                                                    <div>
                                                                                        24
                                                                                    </div><span class="azen-hr-mini-from-cell"></span> <span>Octeber 2016</span>
                                                                                </div>
                                                                                <div class="az-column azen-img">
                                                                                    <img src="<?php echo base_url();?>assets/images/Upcoming-images2.jpg" alt="" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="azen-event-data az-column" data-group="content">
                                                                                <div class="azen-data-extra-header">
                                                                                    <div>
                                                                                        <a href=""><h3>โครงการแบรนด์ซัมเมอร์แคมป์</h3></a>
                                                                                    </div><span><p>Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16</p></span>
                                                                                </div>
                                                                                <div class="azen-data-fields" data-cloneable-inline="">
                                                                                    <span class="azen-field"><span class="az-icon fa fa-clock-o"></span> All Day</span> <span class="azen-field-location"><span class="az-icon fa fa-map-marker"></span> New York, US</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="azen-button-wrapper">
                                                        <div class="azen-wrapper-button">
                                                            <div class="azen-info-button">
                                                                <a id="view-all" href="tutor.html">
                                                                    View all
                                                                    <span></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .entry-content -->
                            </div><!-- #post -->
                        </div><!-- #content -->
                    </div><!-- #primary -->
                </div>
