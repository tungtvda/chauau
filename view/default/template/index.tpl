<div data-vc-full-width="true" data-vc-full-width-init="false"
     class="vc_row wpb_row vc_row-fluid show-overflow package-search-wrapper package-search-wrapper-v2 section-with-border">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">

                <div class="thm-tk-search">
                    <div class="thm-tk-search-nav">
                        <ul>
                            <li><a href="#holidays" class="active"><i class="icon-location"></i>
                                    <span>Địa điểm</span></a></li>
                            <li><a href="#hotel" class=""><i class="icon-hotel"></i> <span>Khách sạn</span></a>
                            </li>
                            <li><a href="#tintuc" class=""><i class="fa fa-newspaper-o"></i> <span>Tin tức</span></a>
                            </li>
                            <!--<li><a href="#flights"><i class="icon-flight"></i>
                                    <span>Chuyến bay</span></a></li>
                            <li><a href="#vehicles" class=""><i class="icon-vehicles"></i>
                                    <span>Phương tiện đi lại</span></a></li>-->
                        </ul>
                    </div>
                    <div class="thm-tk-search-form">
                        <div class="thm-tk-tab active" id="holidays">
                            <div class="thm-tk-tab-inner clearfix">
                                <form id="thm-tk-advancedsearch-form" class="clearfix"
                                      action="{SITE-NAME}/tim-kiem-tour"
                                      method="GET">
                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Từ khóa</label>
                                        <input type="text" name="key_timkiem" class="thm-tk-input-first"
                                               placeholder="Từ khóa" value="">
                                    </div>

                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Location</label>
                                        <select name="quocgia_timkiem" class="select2">
                                            <option value="">Chọn quốc gia</option>
                                            {list_Quocgia}
                                        </select>
                                    </div>
                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Thời gian</label>
                                        <select name="thoigian_timkiem" class="select2">
                                            <option value="">Chọn thời gian</option>
                                            {list_Durations}
                                        </select>
                                    </div>
                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Giá tiền</label>
                                        <select name="gia_timkiem" class="select2">
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
                                    <button class="btn btn-primary thm-tk-search-btn"
                                            type="submit">Tìm kiếm
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="thm-tk-tab " id="hotel">
                            <div class="thm-tk-tab-inner">
                                <form id="thm-tk-advancedsearch-form2" class="clearfix"
                                      action="{SITE-NAME}/tim-kiem-khach-san"
                                      method="GET">
                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Từ khóa</label>
                                        <input type="text" name="key_timkiem" id="search-keyword"
                                               class="thm-tk-input-first"
                                               placeholder="Từ khóa" value="">
                                    </div>

                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Location</label>
                                        <select name="quocgia_timkiem" class="select2">
                                            <option value="">Chọn quốc gia</option>
                                            {list_Quocgia}
                                        </select>
                                    </div>
                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Loại khách sạn</label>
                                        <select name="sao_timkiem" class="select2">
                                            <option value="">Loại khách sạn</option>
                                            <option value="0">0 Sao</option>
                                            <option value="1">1 Sao</option>
                                            <option value="2">2 Sao</option>
                                            <option value="3">3 Sao</option>
                                            <option value="4">4 Sao</option>
                                            <option value="5">5 Sao</option>
                                        </select>
                                    </div>
                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Loại phòng</label>
                                        <select name="room_type_timkiem" class="select2">
                                            <option value="">Loại phòng</option>
                                           {list_romtype}
                                        </select>
                                    </div>
                                    <input type="hidden" name="post_type" value="hotel">
                                    <button class="btn btn-primary thm-tk-search-btn"
                                            type="submit">Tìm kiếm
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="thm-tk-tab" id="tintuc">
                            <div class="thm-tk-tab-inner">
                                <form  action="{SITE-NAME}/tim-kiem-tin-tuc" class="clearfix">
                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Từ khóa</label>
                                        <input type="text" name="key_timkiem" class="thm-tk-input-first"
                                               placeholder="Từ khóa" value="">
                                    </div>
                                    <div class="thm-tk-input-4-1">
                                        <label hidden>Chọn quốc gia</label>
                                        <select name="quocgia_timkiem" class="select2">
                                            <option value="">Chọn quốc gia</option>
                                            {list_Quocgia}
                                        </select>
                                    </div>
                                    <button class="btn btn-primary thm-tk-search-btn"
                                             type="submit">Tìm kiếm
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="thm-tk-tab" id="flights">
                            <div class="thm-tk-tab-inner">
                                <form id="thm-tk-flights-search-form" class="clearfix">
                                    <div class="thm-tk-input-5-1 thm-tk-first-select">
                                        <label>From</label>
                                        <select name="originplace" class="thm-fs-place"
                                                data-placeholder="Origin city or airport"></select>
                                    </div>
                                    <div class="thm-tk-input-5-1">
                                        <label>To</label>
                                        <select name="destinationplace" class="thm-fs-place"
                                                data-placeholder="Destination city or airport"></select>
                                    </div>
                                    <div class="thm-tk-input-15">
                                        <label>Departure</label>
                                        <input type="text" name="outbounddate"
                                               class="thm-date-picker"
                                               placeholder="Departure date">
                                    </div>
                                    <div class="thm-tk-input-15">
                                        <label>Return</label>
                                        <input type="text" name="inbounddate"
                                               class="thm-date-picker"
                                               placeholder="Return date">
                                    </div>
                                    <div class="thm-tk-input-15">
                                        <label>Class Type</label>
                                        <select name="cabinclass" class="select2">
                                            <option value="Economy">Economy</option>
                                            <option value="PremiumEconomy">Premium Economy
                                            </option>
                                            <option value="Business">Business</option>
                                            <option value="First">First</option>
                                        </select>
                                    </div>
                                    <div class="thm-tk-input-15">
                                        <div class="thm-tk-input-2-1">
                                            <label>Adults</label>
                                            <select name="adults" class="select2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                        <div class="thm-tk-input-2-1">
                                            <label>Kids</label>
                                            <select name="children" class="select2">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="country" value="US">
                                    <input type="hidden" name="currency" value="USD">
                                    <input type="hidden" name="locale" value="en-US">
                                    <button class="btn btn-primary thm-tk-search-btn"
                                            id="flight-search" type="submit">Search
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="thm-tk-tab " id="vehicles">
                            <div class="thm-tk-tab-inner">
                                <form id="thm-tk-advancedsearch-form3" class="clearfix"
                                      action="http://demo.themeum.com/wordpress/wptravelkit/demo2/"
                                      method="GET">

                                    <div class="thm-tk-input-4-1">
                                        <label for="search-keyword">Pickup Time</label>
                                        <input type="text" name="pickup" id="vehicles-pickup"
                                               class="thm-date-time-picker thm-tk-input-first"
                                               placeholder="Pickup Date &amp; Time" value=""
                                               required="required">
                                    </div>

                                    <div class="thm-tk-input-4-1">
                                        <label for="search-keyword">Hours</label>
                                        <input type="number" name="droptime" id="vehicles-drop"
                                               required="required" min="1"
                                               placeholder="How many hours do you need?"
                                               value="1">
                                    </div>

                                    <div class="thm-tk-input-4-1">
                                        <label>Pickup Location</label>
                                        <input type="text" name="pickup_location"
                                               placeholder="Pickup Location" value=""
                                               required="required">
                                    </div>
                                    <div class="thm-tk-input-4-1">
                                        <label>Drop Location</label>
                                        <input type="text" name="drop_location"
                                               placeholder="Drop Location" value=""
                                               required="required">
                                    </div>
                                    <input type="hidden" name="post_type" value="vehicle">
                                    <input type="hidden" name="s" value="">
                                    <button class="btn btn-primary thm-tk-search-btn"
                                            type="submit">Search
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false"
     class="vc_row wpb_row vc_row-fluid vc_custom_1478606314127 vc_row-has-fill">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="thm-flight-results">
                    <div class="alert thm-flight-alert alert-danger" role="alert">There is some
                        error to get flight data. Please try again.
                    </div>
                    <div class="alert thm-flight-alert-no-result alert-danger" role="alert">
                        Sorry, no result found.
                    </div>
                    <div class="flight-loader">
                        <div class="loader">Loading...</div>
                        Please wait. It may take up to 2 mins.
                    </div>
                    <h2 class="thm-titlestandardstyle"><span class="thm-flight-count"></span>
                        Flights Found</h2>
                    <ul id="all-flights">
                        <li data-pos="0"></li>
                        <li data-pos="1"></li>
                        <li data-pos="2"></li>
                        <li data-pos="3"></li>
                        <li data-pos="4"></li>
                        <li data-pos="5"></li>
                        <li data-pos="6"></li>
                        <li data-pos="7"></li>
                        <li data-pos="8"></li>
                        <li data-pos="9"></li>
                    </ul>
                    <ul id="flight-pagination"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false"
     class="vc_row wpb_row vc_row-fluid show-overflow thm-res-padding section-with-border-gray section-with-border-top-none vc_custom_1477470025557 vc_row-has-fill">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="addon-themeum-title " style="text-align:center;">
                    <div class="themeum-titlelayout1"><h2 class="thm-titlestandardstyle">Tour nổi bật</h2>
                        <p class="thm-sub-titlestandardstylesub">Bạn hãy lựa chọn cho mình những tour nổi bật nhất, ưu
                            đãi nhất</p></div>
                </div>
                <div class="vc_empty_space" style="height: 20px"><span
                            class="vc_empty_space_inner"></span></div>
                <div class="add-popular-tour-package">
                    <div class="row">
                        {tour_PROMOTIONS}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>

<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid show-overflow thm-res-padding section-with-border vc_custom_1477564649986">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="addon-themeum-title " style="text-align:center;">
                    <div class="themeum-titlelayout1"><h2 class="thm-titlestandardstyle">Địa điểm</h2>
                        <p class="thm-sub-titlestandardstylesub">Khám phá Châu Âu, với rất nhiều địa điểm khách nhau</p>
                    </div>
                </div>
                <div class="vc_empty_space" style="height: 0px"><span
                            class="vc_empty_space_inner"></span></div>
                <div class="package-location-shortcode package-location-v2">
                    <div class="row">
                        {tour_danhmuc}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-vc-full-width="true" data-vc-full-width-init="false"
     class="vc_row wpb_row vc_row-fluid thm-res-padding vc_custom_1476955255102 vc_row-has-fill">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="addon-themeum-title whitecolor" style="text-align:center;">
                    <div class="themeum-titlelayout1"><h2 class="thm-titlestandardstyle">
                            Tin tức &amp; Sự kiện</h2>
                        <p class="thm-sub-titlestandardstylesub">Thông tin hữu ích cho các bạn khi đi du lịch Châu
                            Âu</p></div>
                </div>
                <div class="vc_empty_space" style="height: 50px"><span
                            class="vc_empty_space_inner"></span></div>
                <div class="row">
                    {tintuc_index}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false"
     class="vc_row wpb_row vc_row-fluid show-overflow thm-res-padding section-with-border-gray vc_custom_1477470088839 vc_row-has-fill">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="addon-themeum-title " style="text-align:center;">
                    <div class="themeum-titlelayout1"><h2 class="thm-titlestandardstyle">
                            Thư viện ảnh</h2>
                        <p class="thm-sub-titlestandardstylesub">Những hình ảnh đẹp về thiên nhiên, cảnh quan, con người
                            Châu Âu</p></div>
                </div>
                <div class="vc_empty_space" style="height:"><span
                            class="vc_empty_space_inner"></span></div>
                <div class="themeum-photo-gallery-item ">
                    <div class="row photo-gallery-item layout1">
                        {hinhanh_index}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row-full-width vc_clearfix"></div>
</div>

</div>


</div> <!--/#content-->
</div> <!--/container-->