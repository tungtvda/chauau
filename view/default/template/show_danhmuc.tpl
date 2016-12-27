<div id="content" class="site-content col-sm-9" role="main">
    <div class="row">
        <div class="col-sm-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs package-nav-tab" role="tablist">
                <li class="{active_tour}"><a href="#tourinfo" role="tab" data-toggle="tab" aria-expanded="true">Danh sách tour</a></li>
                <li class="{active_tintuc}"><a href="#itinerary" role="tab" data-toggle="tab" aria-expanded="false">Tin tức</a></li>
                <li class="{active_khachsan}"><a href="#hotelinfo" role="tab" data-toggle="tab" aria-expanded="false">Khách sạn</a></li>
                <li class="{active_video}"><a href="#tourvideo" role="tab" data-toggle="tab" aria-expanded="false">Videos</a></li>
                <li class="{active_thuvien_anh}"><a href="#thuvienanh" role="tab" data-toggle="tab" aria-expanded="false">Thư viện ảnh</a></li>
            </ul><!--/.package-nav-tab-->

            <div class="tab-content package-tab-content">

                <!--tourinfo-->
                <div class="tab-pane  {active_tour} in div_content_danhmuc" id="tourinfo" style="bottom: 0px;">
                    <div class="row">
                      {danhsach}
                    </div>

                    <div class="themeum-pagination">
                        <ul class="page-numbers">
                           {PAGING}
                        </ul>
                    </div>
                </div><!--/.tab-pane-->
                <!--/#tourinfo-->

                <!--itinerary-->
                <div class="tab-pane  {active_tintuc}" id="itinerary" style="bottom: 0px;">
                    <div class="package-details-itinerary">
                        {danhsach_tintuc}
                    </div><!--/.package-details-itinerary-->
                    <div class="themeum-pagination">
                        <ul class="page-numbers">
                            {PAGING_TINTUC}
                        </ul>
                    </div>
                </div><!--/.tab-pane-->
                <!--/#itinerary-->

                <!--guide-->
                <div class="tab-pane  {active_khachsan}" id="hotelinfo" style="bottom: 0px;">
                    <div class="package-details-itinerary">
                        {danhsach_khachsan}
                    </div><!--/.package-details-guide-->
                    <div class="themeum-pagination">
                        <ul class="page-numbers">
                            {PAGING_KHACHSAN}
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

            <div class="col-sm-12 row">
                <h3 class="title_danhmuc">Tin tức</h3>
                <div class="tab-pane div_content_danhmuc">
                    <div class="package-details-itinerary">
                        {danhsach_tintuc}
                    </div><!--/.package-details-itinerary-->
                    <div class="themeum-pagination">
                        <ul class="page-numbers">
                            {PAGING_TINTUC}
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 row">
                <h3 class="title_danhmuc">Khách sạn</h3>
                <div class="package-details-itinerary">
                    {danhsach_khachsan}
                </div><!--/.package-details-guide-->
                <div class="themeum-pagination">
                    <ul class="page-numbers">
                        {PAGING_KHACHSAN}
                    </ul>
                </div>

            </div>
            <div class="col-sm-12 row">
                <h3 class="title_danhmuc">Thư viện ảnh</h3>
                <div class="package-details-gallery">
                    <div class="row margin-bottom photo-gallery-item">

                        {danhsach_hinhanh}
                    </div><!--/.row-->
                </div>

            </div>
            <div class="col-sm-12 row">
                <h3 class="title_danhmuc">Video</h3>
                <div class="package-details-video">
                    <div class="row">
                        {danhsach_video}
                    </div><!--/.row-->
                </div><!--/.package-details-video-->

            </div>

        </div>

    </div>
</div>
