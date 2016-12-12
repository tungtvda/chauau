<div id="sidebar" class="col-sm-3" role="complementary">
    <aside class="widget-area">
        <div id="search-2" class="widget widget_search">
            <div class="thm-tk-tab active" id="holidays">
                <div class="thm-tk-tab-inner clearfix">
                    <form id="thm-tk-advancedsearch-form" class="clearfix"
                          action="{SITE-NAME}/tim-kiem-tour"
                          method="GET">
                        <div class="thm-tk-input-4-1">
                            <label hidden>Từ khóa</label>
                            <input style="width: 100%" type="text" name="key_timkiem" class="thm-tk-input-first"
                                   placeholder="Từ khóa" value="">
                        </div>

                        <div class="thm-tk-input-4-1">
                            <label hidden>Location</label>
                            <select style="width: 100%" name="quocgia_timkiem" class="select2">
                                <option value="">Chọn quốc gia</option>
                                {list_Quocgia}
                            </select>
                        </div>
                        <div class="thm-tk-input-4-1">
                            <label hidden>Thời gian</label>
                            <select style="width: 100%" name="thoigian_timkiem" class="select2">
                                <option value="">Chọn thời gian</option>
                                {list_Durations}
                            </select>
                        </div>
                        <div class="thm-tk-input-4-1">
                            <label hidden>Giá tiền</label>
                            <select style="width: 100%" name="gia_timkiem" class="select2">
                                <option value="">Chọn giá tiền</option>
                                <option value="0-1000000">Dưới 01 Triệu</option>
                                <option value="1000000-5000000">01 - 05 Triệu</option>
                                <option value="5000000-10000000">05 - 10 Triệu</option>
                                <option value="10000000-15000000">10 - 15 Triệu</option>
                                <option value="15000000-20000000">15 - 20 Triệu</option>
                                <option value="20000000-30000000">20 - 30 Triệu</option>
                                <option value="30000000-40000000">30 - 40 Triệu</option>
                                <option value="40000000-50000000">40 - 50 Triệu</option>
                            </select>
                        </div>
                        <button style="float: right;" class="btn btn-primary thm-tk-search-btn"
                                type="submit">Tìm kiếm
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="widget widget_meta package-details-content">
            <h3 class="title">Hỗ trợ trực tuyến</h3>
            <ul class="tintuc_left">
               {hotro_right}
            </ul>
        </div>
        <div class="widget widget_meta package-details-content">
            <h3 class="title">Tin tức</h3>
            <ul class="tintuc_left">
                {tintuc_right}

            </ul>
        </div>
        <div class="widget widget_meta package-details-content">
            <h3 class="title">Fanpage</h3>
            <div class="fb-page" data-href="https://www.facebook.com/mixtourist.vietnam" style="width: 100% !important;"
                 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                 data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/mixtourist.vietnam" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/mixtourist.vietnam">MixTourist Viet Nam</a></blockquote>
            </div>
        </div>
        <div class="widget widget_archive package-details-content">
            <h3 class="title">Văn phòng Hà Nội</h3>
            <div class="row margin-bottom photo-gallery-item package-details-content">

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14898.1817374241!2d105.80953!3d21.010851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4be5d76ac6ba18d3!2zQ2h1bmcgQ8awIDEzNyBOZ3V54buFbiBOZ-G7jWMgVsWp!5e0!3m2!1svi!2sus!4v1480583836972"
                        width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="widget widget_archive package-details-content">
            <h3 class="title">Văn phòng Hồ Chí Minh</h3>
            <div class="row margin-bottom photo-gallery-item package-details-content">

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15676.344842857752!2d106.699668!3d10.804709!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c759b1f9f5%3A0xa1fe866799a22c83!2zMiBOZ3V54buFbiBUaGnhu4duIFRodeG6rXQsIFBoxrDhu51uZyAyNCwgQsOsbmggVGjhuqFuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2sus!4v1480583873869"
                        width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="tag_right package-details-content">
            <h3 class="title">Tag</h3>
            <ul class="tintuc_left">
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
                <li><a href=""><i class="fa fa-tag"></i> test</a></li>
            </ul>
        </div>

    </aside>
</div> <!-- #sidebar -->
</div> <!-- .row -->
</div>