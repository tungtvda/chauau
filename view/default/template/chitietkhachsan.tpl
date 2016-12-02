<div id="content" class="site-content col-sm-9" role="main">
    <div class="row">
        <div class="col-sm-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs package-nav-tab" role="tablist">
                <li class="active"><a href="#tourinfo" role="tab" data-toggle="tab" aria-expanded="true">Khách sạn</a>
                </li>
                <li class=""><a href="#itinerary" role="tab" data-toggle="tab" aria-expanded="false">Tour</a></li>
                <li class=""><a href="#hotelinfo" role="tab" data-toggle="tab" aria-expanded="false">Tin tức</a></li>
                <li class=""><a href="#tourvideo" role="tab" data-toggle="tab" aria-expanded="false">Videos</a></li>
                <li class=""><a href="#thuvienanh" role="tab" data-toggle="tab" aria-expanded="false">Thư viện ảnh</a>
                </li>
            </ul><!--/.package-nav-tab-->

            <div class="tab-content package-tab-content">

                <!--tourinfo-->
                <div class="tab-pane fade active in" id="tourinfo" style="bottom: 0px;">
                    <article id="post-199"
                             class="post-199 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">

                        <div class="entry-header">
                            <div class="addthis_toolbox addthis_default_style "><a class="addthis_button_facebook_like"
                                                                                   fb:like:layout="button_count"></a> <a
                                        class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"
                                                                             pi:pinit:layout="horizontal"></a> <a
                                        class="addthis_counter addthis_pill_style"></a></div>
                            <script type="text/javascript"
                                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5254127c1833f872"></script>
                        </div>

                        <ul class="blog-post-meta">
                            <!-- Blog date -->
                            <li class="meta-date">
                               {start}
                            </li>

                            <!-- Blog date -->

                            <!-- Blog date -->
                            <!-- Comments section -->
                            <li class="meta-comment">
                                <!--<i class="fa fa-eye-slash"></i>
                                <a > {view} lượt xem</a>-->
                            </li>

                            <!-- comments section end -->
                        </ul>


                        <div class="blog-details-img">
                            <img title="{name}"
                                 src="{img}"
                                 class="img-responsive wp-post-image" alt="{name}"></div>
                        <div class="entry-blog">
                            <!-- Single Page content -->

                            <div class="entry-summary clearfix">
                                {content}


                            </div> <!-- //.entry-summary -->


                        </div> <!--/.entry-meta -->
                    </article>
                </div><!--/.tab-pane-->
                <!--/#tourinfo-->

                <!--itinerary-->
                <div class="tab-pane  {active_tintuc}" id="itinerary" style="bottom: 0px;">
                    <div class="package-details-itinerary">
                        {danhsach}
                    </div><!--/.package-details-itinerary-->
                    <div class="themeum-pagination">
                        <ul class="page-numbers">
                            {PAGING}
                        </ul>
                    </div>
                </div><!--/.tab-pane-->
                <!--/#itinerary-->

                <!--guide-->
                <div class="tab-pane  {active_khachsan}" id="hotelinfo" style="bottom: 0px;">
                    <div class="package-details-itinerary">
                        {danhsach_tintuc}
                    </div><!--/.package-details-guide-->
                    <div class="themeum-pagination">
                        <ul class="page-numbers">
                            {PAGING_TINTUC}
                        </ul>
                    </div>
                </div><!--/.tab-pane-->
                <!--/#guide-->
                <!--img Info-->
                <div class="tab-pane  {active_thuvien_anh}" id="thuvienanh" style="bottom: 0px;">
                    <div class="package-details-gallery">
                        <div class="row margin-bottom photo-gallery-item">

                            {danhsach_hinhanh}
                        </div><!--/.row-->
                    </div>
                </div><!--/.tab-pane-->
                <!--/#img Info-->

                <!--Tour Video-->
                <div class="tab-pane {active_video}" id="tourvideo" style="bottom: 0px;">
                    <div class="package-details-video">
                        <div class="row">
                            {danhsach_video}
                        </div><!--/.row-->
                    </div><!--/.package-details-video-->
                </div><!--/.tab-pane-->
                <!--/#Tour Video-->
            </div><!--/.package-tab-content-->

        </div>

    </div>
    <div class="recommend-package">

        <h3 class="title">Có thể bạn quan tâm</h3>
        <div class="row">

            {tour_lienquan}
        </div> <!-- //row -->
    </div>
</div>