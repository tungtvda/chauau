<?php include('header.php') ?>
<?php include('menu.php') ?>
<?php include('banner.php') ?>


    <div id="content" class="site-content col-sm-9" role="main">
        <div class="row">
            <div class="col-sm-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs package-nav-tab" role="tablist">
                    <li class="active"><a href="#tourinfo" role="tab" data-toggle="tab" aria-expanded="true">Thông tin tour</a></li>
                    <li class=""><a href="#itinerary" role="tab" data-toggle="tab" aria-expanded="false">Tin tức</a></li>
                    <li class=""><a href="#hotelinfo" role="tab" data-toggle="tab" aria-expanded="false">Khách sạn</a></li>
                    <li class=""><a href="#tourvideo" role="tab" data-toggle="tab" aria-expanded="false">Videos</a></li>
                </ul><!--/.package-nav-tab-->

                <div class="tab-content package-tab-content">

                    <!--tourinfo-->
                    <div class="tab-pane fade active in" id="tourinfo" style="bottom: 0px;">
                        <div class="product">
                            <div class="images">
                                <a itemprop="image" class="woocommerce-main-image zoom"
                                   title="Full day Hanoi Classic trip"
                                   data-rel="prettyPhoto[product-gallery]"><img
                                        src="http://mixtourist.com/view/admin/Themes/kcfinder/upload/images/banner/ho-guom-ha-noi-mixtourist.jpg"
                                        class="attachment-shop_single wp-post-image" alt="Full day Hanoi Classic trip"
                                        title="Full day Hanoi Classic trip"></a>
                            </div>
                            <div class="summary entry-summary">
                                <!--<h1 itemprop="name" class="product_title entry-title">Bora Bora</h1>-->
                                <div itemprop="offers" class="detail_font">
                                    <p class="price"><i class="icon-dollar"></i> Price:
                                        <ins><span class="amount"> $120</span></ins>
                                    </p>
                                    <p class="price"><i class="icon-dollar"></i> Code:
                                        <ins><span class="parameter"> MDT100</span></ins>
                                    </p>
                                    <p class="price"><i class="icon-calendar"></i> Duration:
                                        <ins><span class="parameter"> 1 day</span></ins>
                                    </p>
                                    <!--<p class="price"><i class="icon-logout"></i> Departure: <ins><span class="parameter">Hanoi</span></ins></p>-->
                                    <p class="price"><i class="icon-login"></i> Destination:
                                        <ins><span class="parameter"> Hanoi</span></ins>
                                    </p>
                                    <p class="price"><i class="icon-home"></i> Hotel:
                                        <ins><i class="icon-star" style="color: #dedada;"></i><i class="icon-star"
                                                                                                 style="color: #dedada;"></i><i
                                                class="icon-star" style="color: #dedada;"></i><i class="icon-star"
                                                                                                 style="color: #dedada;"></i><i
                                                class="icon-star" style="color: #dedada;"></i></ins>
                                    </p>
                                    <p class="price" style="margin-bottom: 10px"><i class="icon-plane"></i> Vehicle:
                                        <ins><span class="parameter"> Car</span></ins>
                                    </p>
                                </div>
                                <div itemprop="description"><p></p></div>
                                <div itemprop="description">
                                    <div class="booking_detail_div grid grid_2"><a href="#booking"
                                                                                   class="booking_detail">BOOK NOW</a>
                                    </div>
                                    <div class="social_div grid grid_10"></div>
                                </div>
                            </div>
                        </div>
                        <div class="package-details-content" style="float: left">
                            <h3 class="title">Tóm tắt</h3>
                            <p>Bacon ipsum dolor amet tongue hamburger shank jowl tenderloin, ham short loin swine pork
                                belly. Kielbasa turducken short ribs, landjaeger pancetta venison corned beef tail.
                                Chuck corned beef prosciutto pork loin jowl, frankfurter tongue shank bresaola. Beef
                                ribs corned beef ground round ball tip. Ground round porchetta strip steak chicken
                                bresaola. Flank pork loin boudin fatback rump ham hock. Hamburger ham pig pork chop
                            </p>

                            <h3 class="title">Nổi bật</h3>
                            <p>Bacon ipsum dolor amet tongue hamburger shank jowl tenderloin, ham short loin swine pork
                                belly. Kielbasa turducken short ribs, landjaeger pancetta venison corned beef tail.
                                Chuck corned beef prosciutto pork loin jowl, frankfurter tongue shank bresaola. Beef
                                ribs corned beef ground round ball tip. Ground round porchetta strip steak chicken
                                bresaola. Flank pork loin boudin fatback rump ham hock. Hamburger ham pig pork chop
                            </p>

                            <div class="package-details-choose">
                                <h3 class="title">Quốc gia</h3>
                                <ul class="clearfix">
                                    <li><span><i class="fa fa-check"></i>Sed legere graecis ex </span></li>
                                    <li><span><i class="fa fa-check"></i>Amet dolore maiestatis </span></li>
                                    <li><span><i class="fa fa-check"></i>Choro suavitate gloriatur </span></li>
                                    <li><span><i class="fa fa-check"></i>Theophrastus ei eos </span></li>
                                    <li><span><i class="fa fa-check"></i>Lobortis delicata quo </span></li>
                                    <li><span><i class="fa fa-check"></i>Quas putant quaeque </span></li>
                                </ul>
                            </div><!--/.package-details-choose-->



                        </div>
                        <div style="margin-top: 20px; float: left; width: 100%" class="package-details-content">
                            <div class="col-md-4 unset_padding_left">
                                <h3 class="title">Tour Details</h3>
                                <link rel="stylesheet" type="text/css" href="themes/calendar/src/css/pignose.calender.css" />
<!--                                <script src="themes/calendar/dist/jquery-1.12.4.min.js"></script>-->
                                <script src="themes/calendar/dist/moment.min.js"></script>
                                <script type="text/javascript" src="themes/calendar/src/js/pignose.calender.js"></script>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    jQuery(function() {
                                        jQuery('.calender').pignoseCalender({
                                            select: function(date, obj) {
                                                console.log(date);
                                                date_check=(date[0] === null? '':date[0].format('YYYY-MM-DD'));
                                                alert(date_check);
                                                date_now="2016-11-28";
                                                if(date_check==''){
                                                    alert('gdrth');
                                                }
                                                else{
                                                    if(date_check<date_now){
                                                        alert('Bạn vui lòng chọn ngày đặt phải lớn hơn hoặc bằng ngày hiện tại');
                                                    }
                                                    else{
                                                        jQuery('#date_input').val(date_check);
                                                        jQuery("#date_table").text(date_check);
                                                    }
                                                }


                                            }
                                        });
                                        jQuery("#next_booking").click(function(){
                                            date_now="{date_now}";
                                            price_children=jQuery('#date_input').val();
                                            if(price_children==''){
                                                alert('{check_date}');
                                            }
                                            else{
                                                if(price_children<date_now){
                                                    alert('{check_param_date}');
                                                }
                                                else{
                                                    jQuery('.back_detail').hide();
                                                    jQuery('.back_detail_cal').hide();
                                                    jQuery('.next_detail').slideDown();
                                                }
                                            }



                                        });
                                        jQuery("#back_booking").click(function(){

                                            jQuery('.next_detail').hide();
                                            jQuery('.back_detail_cal').slideDown();
                                            jQuery('.back_detail').slideDown();
                                        });
                                        jQuery("#booking_ajax").click(function(){
                                            $('#loading_booking').show();
                                            $('#back_booking').hide();
                                            id=$('#id_input').val();
                                            name_url=$('#name_url_input').val();
                                            date=$('#date_input').val();
                                            price=$('#price_adults').val();
                                            price_children=0;
                                            price_children_5=0;
//                                                        price_children=$('#price_children').val();
//                                                        price_children_5=$('#price_children_5').val();
                                            number_adults=$('#num_price_adults').val();
                                            number_children=$('#num_price_children_val').val();
                                            number_children_5=$('#num_price_children_5_val').val();
                                            total_input=$('#total_input').val();
                                            full_name=$('#name_booking').val();
                                            email=$('#email_booking').val();
                                            phone=$('#phone_booking').val();
                                            address=$('#address_booking').val();
                                            request=$('#request_booking').val();
                                            check=1;
                                            if(full_name==""){
                                                $("#full_name_er").show();
                                                check_name=0;
                                            }
                                            else{
                                                $("#full_name_er").hide();
                                                check_name=1;
                                            }
                                            if(email==""){
                                                $("#email_er").show();
                                                check_email=0;
                                            }else{
                                                if(validateEmail(email)){
                                                    $("#email_er").hide();
                                                    check_email=1;
                                                }else{
                                                    $("#email_er").show();
                                                    check_email=0;
                                                }

                                            }
                                            if(phone==""){
                                                $("#phone_er").show();
                                                check_phone=0;
                                            }
                                            else{
                                                $("#phone_er").hide();
                                                check_phone=1;
                                                //if(phonenumber(phone))
                                                //{
                                                // $("#phone_er").hide();
                                                // check_phone=1;
                                                //}
                                                // else{
                                                //$("#phone_er").show();
                                                //check_phone=0;
                                                //}

                                            }
                                            if(address==""){
                                                $("#address_er").show();
                                                check_address=0;
                                            }else{
                                                $("#address_er").hide();
                                                check_address=1;
                                            }
                                            if (check_name != 0&&check_email != 0&&check_phone!=0&&check_address!=0) {

                                                $.post("{SITE-NAME}/booking/",
                                                    {
                                                        id: id,
                                                        name_url: name_url,
                                                        date: date,
                                                        price: price,
                                                        price_children: price_children,
                                                        price_children_5:price_children_5,
                                                        number_adults:number_adults,
                                                        number_children:number_children,
                                                        number_children_5:number_children_5,
                                                        total_input:total_input,
                                                        full_name:full_name,
                                                        email:email,
                                                        phone:phone,
                                                        address:address,
                                                        request:request

                                                    }
                                                    )
                                                    .
                                                    done(function (data) {
                                                        if(data==1)
                                                        {
                                                            $('#loading_booking').hide();
                                                            $('#back_booking').show();
                                                            alert('Booking successfully');
                                                            location.reload(true);
                                                        }
                                                        else{
                                                            $('#loading_booking').hide();
                                                            $('#back_booking').show();
                                                            alert('Booking false')
                                                        }
                                                    });
                                            } else {
                                                alert('{infor_booking}');
                                            }
                                        });


                                    });

                                    //]]>
                                </script>
                                <div>
                                    <div class="calender"></div>
                                    <input  id="date_input" hidden value="{date_now}">
                                    <input  id="id_input" hidden value="{id}">
                                    <input  id="name_url_input" hidden value="{name_url}">
                                </div>
                            </div>
                            <div class="col-md-8 unset_padding_left unset_padding_right">
                                <h3 class="title">Tour Details</h3>
                                <ul class="nav nav-tabs package-nav-tab" role="tablist">
                                    <li class="active"><a href="#lichtrinh" role="tab" data-toggle="tab" aria-expanded="true">Lịch trình</a></li>
                                    <li class=""><a href="#baogom" role="tab" data-toggle="tab" aria-expanded="false">Bao gồm</a></li>
                                    <li class=""><a href="#khongbaogom" role="tab" data-toggle="tab" aria-expanded="false">Không bao gồm</a></li>
                                    <li class=""><a href="#binhluan" role="tab" data-toggle="tab" aria-expanded="false">Bình luận</a></li>
                                </ul><!--/.package-nav-tab-->
                                <div class="tab-content package-tab-content">
                                    <div class="tab-pane fade active in" id="lichtrinh" style="bottom: 0px;">
                                        lich tirnh
                                    </div>
                                    <div class="tab-pane fade " id="baogom" style="bottom: 0px;">
                                        baogom
                                    </div>
                                    <div class="tab-pane fade " id="khongbaogom" style="bottom: 0px;">
                                        khongbaogom
                                    </div>
                                    <div class="tab-pane fade " id="binhluan" style="bottom: 0px;">
                                        binhluan
                                    </div>
                                </div>
                            </div>




                        </div><!--/.package-details-content-->
                    </div><!--/.tab-pane-->
                    <!--/#tourinfo-->

                    <!--itinerary-->
                    <div class="tab-pane fade" id="itinerary" style="bottom: 0px;">
                        <div class="package-details-itinerary">
                            <div class="media common-media-list">
                                <div class="pull-left">
                                    <img class="img-responsive"
                                         src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_18-570x400.jpg"
                                         alt="photo">
                                </div><!--/.pull-left-->

                                <div class="media-body">
                                    <h3 class="title"><strong>Day 1,</strong>Arrival at Leh</h3>
                                    <div class="media-body-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit.
                                    </div><!--/.media-body-content-->
                                </div><!--/.media-body-->
                            </div><!--/.media-->
                            <div class="media common-media-list">
                                <div class="pull-left">
                                    <img class="img-responsive"
                                         src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_2-1-570x400.jpg"
                                         alt="photo">
                                </div><!--/.pull-left-->

                                <div class="media-body">
                                    <h3 class="title"><strong>Day 2,</strong>City of Milan</h3>
                                    <div class="media-body-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit.
                                    </div><!--/.media-body-content-->
                                </div><!--/.media-body-->
                            </div><!--/.media-->
                            <div class="media common-media-list">
                                <div class="pull-left">
                                    <img class="img-responsive"
                                         src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_4-1-570x400.jpg"
                                         alt="photo">
                                </div><!--/.pull-left-->

                                <div class="media-body">
                                    <h3 class="title"><strong>Day 3,</strong>Adventure in Turin</h3>
                                    <div class="media-body-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit.
                                    </div><!--/.media-body-content-->
                                </div><!--/.media-body-->
                            </div><!--/.media-->
                        </div><!--/.package-details-itinerary-->
                    </div><!--/.tab-pane-->
                    <!--/#itinerary-->

                    <!--guide-->
                    <div class="tab-pane fade" id="guide" style="bottom: 0px;">
                        <div class="package-details-guide">
                            <div class="media common-media-list">
                                <div class="pull-left">
                                    <img class="img-responsive"
                                         src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/08/3.png"
                                         alt="photo">
                                </div><!--/.pull-left-->

                                <div class="media-body">
                                    <h3 class="title">Tata Tong</h3>
                                    <div class="media-body-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div><!--/.media-body-content-->
                                    <ul class="package-share">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="https://plus.google.com/" target="_blank"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="fa fa-youtube"></i></a></li>
                                    </ul>

                                </div><!--/.media-body-->
                            </div><!--/.media-->
                            <div class="media common-media-list">
                                <div class="pull-left">
                                    <img class="img-responsive"
                                         src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/08/2.png"
                                         alt="photo">
                                </div><!--/.pull-left-->

                                <div class="media-body">
                                    <h3 class="title">Riffi Tailor</h3>
                                    <div class="media-body-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div><!--/.media-body-content-->
                                    <ul class="package-share">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="https://plus.google.com/" target="_blank"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="fa fa-youtube"></i></a></li>
                                    </ul>

                                </div><!--/.media-body-->
                            </div><!--/.media-->
                        </div><!--/.package-details-guide-->
                    </div><!--/.tab-pane-->
                    <!--/#guide-->

                    <!--Hotel Info-->
                    <div class="tab-pane fade" id="hotelinfo" style="bottom: 0px;">
                        <div class="package-details-hotel">


                            <div class="media common-media-list">
                                <div class="pull-left">
                                    <a href="http://demo.themeum.com/wordpress/wptravelkit/demo5/hotel/marquis-los-cabos/"><img
                                            class="img-responsive"
                                            src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_2-1-570x400.jpg"
                                            alt="photo"></a>
                                </div><!--/.pull-left-->


                                <div class="media-body">
                                    <h3 class="title"><a
                                            href="http://demo.themeum.com/wordpress/wptravelkit/demo5/hotel/marquis-los-cabos/">Marquis
                                            Los Cabos</a></h3>
                                    <div class="media-body-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit.
                                    </div><!--/.media-body-content-->

                                    <ul class="package-share">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-youtube"></i></a></li>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-globe"></i></a></li>
                                    </ul>
                                </div><!--/.media-body-->
                            </div><!--/.media-->

                            <div class="media common-media-list">
                                <div class="pull-left">
                                    <a href="http://demo.themeum.com/wordpress/wptravelkit/demo5/hotel/the-boulders-arizona/"><img
                                            class="img-responsive"
                                            src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_4-1-570x400.jpg"
                                            alt="photo"></a>
                                </div><!--/.pull-left-->


                                <div class="media-body">
                                    <h3 class="title"><a
                                            href="http://demo.themeum.com/wordpress/wptravelkit/demo5/hotel/the-boulders-arizona/">The
                                            Boulders, Arizona</a></h3>
                                    <div class="media-body-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit.
                                    </div><!--/.media-body-content-->

                                    <ul class="package-share">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com/" target="_blank"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div><!--/.media-body-->
                            </div><!--/.media-->

                            <div class="media common-media-list">
                                <div class="pull-left">
                                    <a href="http://demo.themeum.com/wordpress/wptravelkit/demo5/hotel/palms-las-vegas/"><img
                                            class="img-responsive"
                                            src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_7-1-570x400.jpg"
                                            alt="photo"></a>
                                </div><!--/.pull-left-->


                                <div class="media-body">
                                    <h3 class="title"><a
                                            href="http://demo.themeum.com/wordpress/wptravelkit/demo5/hotel/palms-las-vegas/">Palms,
                                            Las Vegas</a></h3>
                                    <div class="media-body-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit.
                                    </div><!--/.media-body-content-->

                                    <ul class="package-share">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com/" target="_blank"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://accounts.google.com/" target="_blank"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div><!--/.media-body-->
                            </div><!--/.media-->
                        </div><!--/.package-details-hotel-->
                    </div><!--/.tab-pane-->
                    <!--/#Hotel Info-->

                    <!--Tour Video-->
                    <div class="tab-pane fade" id="tourvideo" style="bottom: 0px;">
                        <div class="package-details-video">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="tour-video leading">
                                        <img class="img-responsive"
                                             src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_8-1-1170x750.jpg"
                                             alt="photo">
                                        <a class="btn-video" href="https://www.youtube.com/watch?v=vu-izXGawPs"><i
                                                class="fa fa-play-circle-o"></i></a>

                                        <h3 class="title">A Travel Guide to Geneva's Old World</h3>
                                    </div><!--/.tour-video-->
                                </div><!--/.tour-video-->
                                <div class="col-sm-4">
                                    <div class="tour-video">
                                        <img class="img-responsive"
                                             src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_7-1-570x400.jpg"
                                             alt="photo">
                                        <a class="btn-video" href="https://www.youtube.com/watch?v=hdBe2kWJP_U"><i
                                                class="fa fa-play-circle-o"></i></a>

                                        <h3 class="title">Tour of Virgin America Plane and landing</h3>
                                    </div><!--/.tour-video-->
                                </div><!--/.col-sm-3-->
                                <div class="col-sm-4">
                                    <div class="tour-video">
                                        <img class="img-responsive"
                                             src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_13-1-570x400.jpg"
                                             alt="photo">
                                        <a class="btn-video" href="https://www.youtube.com/watch?v=QTZQ9bta31w"><i
                                                class="fa fa-play-circle-o"></i></a>

                                        <h3 class="title">Washington DC Tour</h3>
                                    </div><!--/.tour-video-->
                                </div><!--/.col-sm-3-->
                                <div class="col-sm-4">
                                    <div class="tour-video">
                                        <img class="img-responsive"
                                             src="http://demo.themeum.com/wordpress/wptravelkit/demo5/wp-content/uploads/sites/5/2016/10/Image_14-1-570x400.jpg"
                                             alt="photo">
                                        <a class="btn-video" href="https://vimeo.com/45174923"><i
                                                class="fa fa-play-circle-o"></i></a>

                                        <h3 class="title">Jeff Hubbard South America </h3>
                                    </div><!--/.tour-video-->
                                </div><!--/.col-sm-3-->
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

                <div class="col-md-4">
                    <div class="package-list-wrap ">
                        <img width="570" height="400" src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/15231-570x400.jpg" class="img-responsive wp-post-image" alt="15231">								<div class="package-list-content">
                            <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                            <p class="package-list-duration">3Days, 4 NIghts Start From $850</p>
                            <h3 class="package-list-title"><a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/best-tours-in-mexico/">Best tours in Mexico</a></h3>
                            <a class="package-list-button" href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/best-tours-in-mexico/">Book Now</a>
                        </div>
                    </div><!--/.package-list-wrap-->
                </div> <!--/.col-md-3-->


                <div class="col-md-4">
                    <div class="package-list-wrap ">
                        <img width="570" height="400" src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/131781-570x400.jpg" class="img-responsive wp-post-image" alt="131781">								<div class="package-list-content">
                            <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                            <p class="package-list-duration">3Days, 4 NIghts Start From $770</p>
                            <h3 class="package-list-title"><a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/holiday-in-azerbaijan/">Holiday in Azerbaijan</a></h3>
                            <a class="package-list-button" href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/holiday-in-azerbaijan/">Book Now</a>
                        </div>
                    </div><!--/.package-list-wrap-->
                </div> <!--/.col-md-3-->


                <div class="col-md-4">
                    <div class="package-list-wrap ">
                        <img width="570" height="400" src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/10/Image_18-570x400.jpg" class="img-responsive wp-post-image" alt="image_18">								<div class="package-list-content">
                            <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                            <p class="package-list-duration">3Days, 4 NIghts Start From $550</p>
                            <h3 class="package-list-title"><a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/big-on-tours-sightseeing/">Big on Tours &amp; Sightseeing</a></h3>
                            <a class="package-list-button" href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/big-on-tours-sightseeing/">Book Now</a>
                        </div>
                    </div><!--/.package-list-wrap-->
                </div> <!--/.col-md-3-->


                <div class="col-md-4">
                    <div class="package-list-wrap ">
                        <img width="570" height="400" src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/10/Image_1-1-570x400.jpg" class="img-responsive wp-post-image" alt="image_1">								<div class="package-list-content">
                            <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                            <p class="package-list-duration">3Days, 4 NIghts Start From $450</p>
                            <h3 class="package-list-title"><a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/escorted-tours-of-america/">Escorted tours of America</a></h3>
                            <a class="package-list-button" href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/escorted-tours-of-america/">Book Now</a>
                        </div>
                    </div><!--/.package-list-wrap-->
                </div> <!--/.col-md-3-->


                <div class="col-md-4">
                    <div class="package-list-wrap ">
                        <img width="570" height="400" src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/10/Image_15-1-570x400.jpg" class="img-responsive wp-post-image" alt="image_15">								<div class="package-list-content">
                            <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                            <p class="package-list-duration">3Days, 4 NIghts Start From $550</p>
                            <h3 class="package-list-title"><a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/sightseeing-tours/">Sightseeing Tours</a></h3>
                            <a class="package-list-button" href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/sightseeing-tours/">Book Now</a>
                        </div>
                    </div><!--/.package-list-wrap-->
                </div> <!--/.col-md-3-->


                <div class="col-md-4">
                    <div class="package-list-wrap ">
                        <img width="570" height="400" src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/08/gorod-doma-volna-pena-570x400.jpg" class="img-responsive wp-post-image" alt="gorod-doma-volna-pena">								<div class="package-list-content">
                            <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                            <p class="package-list-duration">3Days, 4 NIghts Start From $850</p>
                            <h3 class="package-list-title"><a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/hamburger-ham-pig-pork/">Hamburger ham pork</a></h3>
                            <a class="package-list-button" href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/hamburger-ham-pig-pork/">Book Now</a>
                        </div>
                    </div><!--/.package-list-wrap-->
                </div> <!--/.col-md-3-->

            </div> <!-- //row -->
        </div>
    </div>
<?php include('right.php') ?>

<?php include('footer.php') ?>