<div id="content" class="site-content col-sm-9" role="main">
    <div class="row">
        <div class="col-sm-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs package-nav-tab" role="tablist">
                <li class="active"><a href="#tourinfo" role="tab" data-toggle="tab" aria-expanded="true">Thông tin
                        tour</a></li>
                <li class=""><a href="#itinerary" role="tab" data-toggle="tab" aria-expanded="false">Tin tức</a></li>
                <li class=""><a href="#hotelinfo" role="tab" data-toggle="tab" aria-expanded="false">Khách sạn</a></li>
                <li class=""><a href="#tourvideo" role="tab" data-toggle="tab" aria-expanded="false">Videos</a></li>
                <li class=""><a href="#thuvienanh" role="tab" data-toggle="tab" aria-expanded="false">Thư viện ảnh</a>
                </li>
            </ul><!--/.package-nav-tab-->

            <div class="tab-content package-tab-content">

                <!--tourinfo-->
                <div class="tab-pane fade active in" id="tourinfo" style="bottom: 0px;">
                    <div class="product">
                        <div style="padding: 0px" class="images col-md-6 col-sm-12">
                            <a itemprop="image" class="woocommerce-main-image zoom"
                               title="{name}"
                               data-rel="prettyPhoto[product-gallery]"><img style="width: 100%"
                                                                            src="{img}"
                                                                            class="attachment-shop_single wp-post-image "
                                                                            alt="{name}"
                                                                            title="{name}"></a>
                        </div>
                        <div class="summary entry-summary col-md-6 col-sm-12">
                            <!--<h1 itemprop="name" class="product_title entry-title">Bora Bora</h1>-->
                            <div itemprop="offers" class="detail_font">
                                <p class="price"><i class="icon-dollar"></i> Giá:
                                    <ins><span class="amount"> {price_format}</span> {vnd}</ins>
                                </p>
                                <p class="price"><i class="icon-dollar"></i> Mã tour:
                                    <ins><span class="parameter"> {code}</span></ins>
                                </p>
                                <p class="price"><i class="icon-calendar"></i> Thời gian:
                                    <ins><span class="parameter"> {durations}</span></ins>
                                </p>
                                <!--<p class="price"><i class="icon-logout"></i> Departure: <ins><span class="parameter">Hanoi</span></ins></p>-->
                                <p class="price"><i class="icon-login"></i> Điểm đến:
                                    <ins><span class="parameter"> {destination}</span></ins>
                                </p>
                                <p class="price"><i class="icon-home"></i> Khách sạn:
                                    <ins>{start}</ins>
                                </p>
                                <p class="price" style="margin-bottom: 10px"><i class="icon-plane"></i> Phương tiện:
                                    <ins><span class="parameter"> {vehicle}</span></ins>
                                </p>
                            </div>
                            <div itemprop="description"><p></p></div>
                            <div itemprop="description">
                                <div style="float: left;width: 100%;" class="booking_detail_div grid grid_2">
                                    <a href="#booking" class="booking_detail">Đặt tour </a>
                                    <div style="float: left;margin-top: 10px;margin-left: 10px;" class="social-share">
                                        <ul>
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={link}" target="_blank"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/intent/tweet?source=webclient&text={link}" target="_blank"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://plus.google.com/share?url={link}" onclick='javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;' target="_blank"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                            <li><a href="http://pinterest.com/pin/create/button/?url={link}" onclick="window.open(this.href); return false;" title="Pinterest" target="_blank"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                            <li><a  href="mailto:?Subject={name}?&amp;body={name}:{content_short}" target="_blank"><i
                                                            class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="social_div grid grid_10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="package-details-content" style="float: left; width: 100%">
                        <h3 class="title">Tóm tắt</h3>
                        <p>{summary}
                        </p>

                        <h3 class="title">Nổi bật</h3>
                        <p>{highlights}
                        </p>
                                {quocgia}

                    </div>
                    <div id="booking" style="margin-top: 20px; float: left; width: 100%"
                         class="package-details-content">
                        <div class="col-md-4 col-sm-12 col-xs-12 unset_padding_left">
                            <h3 class="title">Đặt tour</h3>
                            <link rel="stylesheet" type="text/css"
                                  href="{SITE-NAME}/view/default/themes/calendar/src/css/pignose.calender.css"/>
                            <!--                                <script src="themes/calendar/dist/jquery-1.12.4.min.js"></script>-->
                            <script src="{SITE-NAME}/view/default/themes/calendar/dist/moment.min.js"></script>
                            <script type="text/javascript"
                                    src="{SITE-NAME}/view/default/themes/calendar/src/js/pignose.calender.js"></script>
                            <script type="text/javascript">
                                //<![CDATA[
                                jQuery(function () {
                                    jQuery('.calender').pignoseCalender({
                                        select: function (date, obj) {
                                            console.log(date);
                                            date_check = (date[0] === null ? '' : date[0].format('YYYY-MM-DD'));
                                            date_now = "{date_now}";
                                            if (date_check == '') {
                                                alert('Bạn vui lòng chọn ngày đặt tour');
                                            }
                                            else {
                                                if (date_check < date_now) {
                                                    alert('Bạn vui lòng chọn ngày đặt phải lớn hơn hoặc bằng ngày hiện tại');
                                                }
                                                else {
                                                    jQuery('#date_input').val(date_check);
                                                    jQuery("#date_table").text(convertDate(date_check));
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
                                        jQuery('#loading_booking').show();
                                        jQuery('#back_booking').hide();
                                        id=jQuery('#id_input').val();
                                        name_url=jQuery('#name_url_input').val();
                                        date=jQuery('#date_input').val();
                                        price=jQuery('#price_adults').val();
                                        price_children=0;
                                        price_children_5=0;
//                                                        price_children=$('#price_children').val();
//                                                        price_children_5=$('#price_children_5').val();
                                        number_adults=jQuery('#num_price_adults').val();
                                        number_children=jQuery('#num_price_children_val').val();
                                        number_children_5=jQuery('#num_price_children_5_val').val();
                                        total_input=jQuery('#total_input').val();
                                        full_name=jQuery('#name_booking').val();
                                        email=jQuery('#email_booking').val();
                                        phone=jQuery('#phone_booking').val();
                                        address=jQuery('#address_booking').val();
                                        request=jQuery('#request_booking').val();
                                        check=1;
                                        if(full_name==""){
                                            jQuery("#full_name_er").show();
                                            check_name=0;
                                        }
                                        else{
                                            jQuery("#full_name_er").hide();
                                            check_name=1;
                                        }
                                        if(email==""){
                                            jQuery("#email_er").show();
                                            check_email=0;
                                        }else{
                                            if(validateEmail(email)){
                                                jQuery("#email_er").hide();
                                                check_email=1;
                                            }else{
                                                jQuery("#email_er").show();
                                                check_email=0;
                                            }

                                        }
                                        if(phone==""){
                                            jQuery("#phone_er").show();
                                            check_phone=0;
                                        }
                                        else{
                                            jQuery("#phone_er").hide();
                                            check_phone=1;
                                        }
                                        if(address==""){
                                            jQuery("#address_er").show();
                                            check_address=0;
                                        }else{
                                            jQuery("#address_er").hide();
                                            check_address=1;
                                        }
                                        if (check_name != 0&&check_email != 0&&check_phone!=0&&check_address!=0) {

                                            jQuery.post("{SITE-NAME}/dat-tour/ajax/",
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
                                                            jQuery('#loading_booking').hide();
                                                            jQuery('#back_booking').show();
                                                            alert('Đặt tour thành công, Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất. Xin cảm ơn!');
                                                            location.reload(true);
                                                        }
                                                        else{
                                                            jQuery('#loading_booking').hide();
                                                            jQuery('#back_booking').show();
                                                            alert('Đặt tour thất bại, vui lòng kiểm tra lại thông tin đặt tour')
                                                        }
                                                    });
                                        } else {
                                            alert('Bạn vui lòng kiểm tra lại thông tin đặt tour');
                                        }
                                    });

                                });
                                function convertDate(inputFormat) {
                                    function pad(s) { return (s < 10) ? '0' + s : s; }
                                    var d = new Date(inputFormat);
                                    return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('-');
                                }
                                function phonenumber(inputtxt)
                                {
                                    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                                    if(inputtxt.match(phoneno))
                                    {
                                        alert('yhsnh vonh');
                                        return true;
                                    }
                                    else
                                    {
                                        return false;
                                    }
                                }
                                function validateEmail(email) {
                                    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                    return re.test(email);
                                }
                                function myFunction() {
                                    price=jQuery('#price_adults').val();
                                    price_2=jQuery('#price_2').val();
                                    price_3=jQuery('#price_3').val();
                                    price_4=jQuery('#price_4').val();
                                    price_5=jQuery('#price_5').val();
                                    price_6=jQuery('#price_6').val();

                                    price_adults=jQuery('#num_price_adults').val();
                                    price_children_val=jQuery('#num_price_children_val').val();
                                    price_children_5_val=jQuery('#num_price_children_5_val').val();

                                    if(price=='')
                                    {
                                        price=0;
                                    }
                                    if(price_2=='')
                                    {
                                        price_2=0;
                                    }
                                    if(price_3=='')
                                    {
                                        price_3=0;
                                    }
                                    if(price_4=='')
                                    {
                                        price_4=0;
                                    }
                                    if(price_5=='')
                                    {
                                        price_5=0;
                                    }
                                    if(price_6=='')
                                    {
                                        price_6=0;
                                    }
                                    if(price_adults=='')
                                    {
                                        price_adults=0;
                                    }
                                    if(price_children_val=='')
                                    {
                                        price_children_val=0;
                                    }
                                    if(price_children_5_val=='')
                                    {
                                        price_children_5_val=0;
                                    }
                                    price_adults=parseInt(price_adults);
                                    price_children_val=parseInt(price_children_val);
                                    price_children_5_val=parseInt(price_children_5_val);

                                    if(price==''){
                                        total="Liên hệ";

                                    }
                                    else{
                                        total=(price_adults+price_children_val+price_children_5_val)*price;
                                        if(total==0){
                                            total="Liên hệ";
                                        }
                                        else{
                                            var n = parseFloat(total);
//                                                        total = Math.round(n * 1000)/1000;
                                            total=n.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")+" vnđ";
                                        }
                                    }
                                    jQuery("#amount_total").text(total);
                                    jQuery("#no_adults").text(price_adults);
                                    jQuery("#no_children").text(price_children_val);
                                    jQuery("#no_children_5").text(price_children_5_val);
                                    jQuery("#total_fee").text(total);
                                    jQuery('#total_input').val(total);
                                    jQuery("#hidden_total").show();
                                    jQuery("#next_booking").show();

                                }
                                function nformat(a) {
                                    var b = parseInt(parseFloat(a)*1000)/1000;
                                    return b.toFixed(0);
                                }

                                //]]>
                            </script>
                            <div>
                                <div class="calender"></div>
                                <input id="date_input" hidden value="{date_now}">
                                <input id="id_input" hidden value="{id}">
                                <input id="name_url_input" hidden value="{name_url}">
                            </div>
                            <div style="float: left;width: 100%" class="booking_left">
                                <div style="float: left;width: 100%" class="back_detail">

                                    <input id="price_adults" value="{price}" hidden>
                                    <input id="price_2" value="{price_2}" hidden>
                                    <input id="price_3" value="{price_3}" hidden>
                                    <input id="price_4" value="{price_4}" hidden>
                                    <input id="price_5" value="{price_5}" hidden>
                                    <input id="price_6" value="{price_6}" hidden>

                                    <p>Số người lớn</p>
                                    <input style="width: 100%;padding: 5px;" class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle" onkeyup="myFunction()" onchange="myFunction()" min="1" type="number" id="num_price_adults"  placeholder="Số người lớn" id="price_adults" value="">
                                    <p>Số trẻ em </p>
                                    <input style="width: 100%;padding: 5px;" class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle" onkeyup="myFunction()" onchange="myFunction()"  min="0" type="number" id="num_price_children_val"  placeholder="Số trẻ em"  value="0">
                                    <p> Trẻ em dưới 5 tuổi </p>
                                    <input style="width: 100%;padding: 5px;" class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle" onkeyup="myFunction()" onchange="myFunction()" min="0" type="number" id="num_price_children_5_val"  placeholder="Trẻ em dưới 5 tuổi"  value="0">
                                    <input hidden class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle" id="total_input"   >


                                    <p style="margin-bottom: 10px; display: none" id="hidden_total">Thành tiền: <span  class="amount" id="amount_total"></span></p>
                                    <a style="width: 40%; display: none; margin-top: 20px; float: left" href="javascript:void(0);"  id="next_booking" class="nicdark_btn nicdark_btn_filter fullwidth nicdark_bg_green calculate_bt"><i class="fa fa-arrow-right"></i> Tiếp tục</a>
                                </div>
                                <div class="next_detail" style="display: none; float: left;width: 100%">
                                    <table class="nicdark_table extrabig nicdark_bg_yellow">

                                        <tbody class="nicdark_bg_grey nicdark_border_grey table_booking" style="background-color: #f9f9f9 !important; border: none">
                                        <tr>
                                            <td>
                                                Ngày khởi hành:
                                            </td>
                                            <td>
                                                <span id="date_table">{date_now_vn}</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Người lớn:
                                            </td>
                                            <td>
                                                <span id="no_adults">0</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Trẻ em
                                            </td>
                                            <td>
                                                <span id="no_children">N/A</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Trẻ em dưới 5t
                                            </td>
                                            <td>
                                                <span id="no_children_5">N/A</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Tổng tiền:
                                            </td>
                                            <td>
                                                <span id="total_fee"></span>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                    <h3 class=" title left lienquan"></h3>
                                    <p style="color: red !important;margin-top: 10px; display: none; float: left;" id="full_name_er">Vui lòng nhập họ tên</p>
                                    <input  class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle"  type="text"   placeholder="Họ tên" id="name_booking" style="width:100%">
                                    <p style="color: red !important; display: none" id="email_er">Vui lòng nhập email</p>
                                    <input style="width:100%" class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle"  type="text"   placeholder="Email" id="email_booking">
                                    <p style="color: red !important; display: none" id="phone_er">Vui lòng nhập số điện thoại</p>
                                    <input style="width:100%" class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle"  type="text"   placeholder="Điện thoại" id="phone_booking">
                                    <p style="color: red !important; display: none" id="address_er">Vui lòng nhập địa chỉ</p>
                                    <input  class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle"  type="text"   placeholder="Địa chỉ" id="address_booking">
                                                        <textarea  style="height:90px; width:100%; margin-bottom: 20px"  placeholder="Yêu cầu..." class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle" id="request_booking">

                                                        </textarea>

                                    <a style="width: 45%;  background-color: #ed1c27; float: left" id="back_booking" href="javascript:void(0);" class="nicdark_btn nicdark_btn_filter fullwidth nicdark_bg_green calculate_bt"><i class="fa fa-arrow-left"></i> Trở lại</a>
                                    <img  id="loading_booking" style="width: 45px; display: none" src="{SITE-NAME}/view/default/themes/images/loading.gif">
                                    <a style="width: 45%; float: right;" id="booking_ajax"  href="javascript:void(0);" class="nicdark_btn nicdark_btn_filter fullwidth nicdark_bg_green calculate_bt"><i class="fa fa-cart-arrow-down"></i> Đặt tour</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12 unset_padding_left unset_padding_right">
                            <h3 class="title">Thông tin chi tiết</h3>
                            <ul class="nav nav-tabs package-nav-tab" role="tablist">
                                <li class="active"><a href="#lichtrinh" role="tab" data-toggle="tab"
                                                      aria-expanded="true">Lịch trình</a></li>
                                <li class=""><a href="#baogom" role="tab" data-toggle="tab" aria-expanded="false">Bao
                                        gồm</a></li>
                                <li class=""><a href="#khongbaogom" role="tab" data-toggle="tab" aria-expanded="false">Không
                                        bao gồm</a></li>
                                <li class=""><a href="#banggia" role="tab" data-toggle="tab" aria-expanded="false">Bảng giá</a></li>
                                <li class=""><a href="#binhluan" role="tab" data-toggle="tab" aria-expanded="false">Bình
                                        luận</a></li>
                            </ul><!--/.package-nav-tab-->
                            <div class="tab-content package-tab-content">
                                <div class="tab-pane fade active in" id="lichtrinh" style="bottom: 0px;">
                                    {schedule}
                                </div>
                                <div class="tab-pane fade " id="baogom" style="bottom: 0px;">
                                   {inclusion}
                                </div>
                                <div class="tab-pane fade " id="khongbaogom" style="bottom: 0px;">
                                    {exclusion}
                                </div>
                                <div class="tab-pane fade " id="banggia" style="bottom: 0px;">
                                    {price_list}
                                </div>
                                <div class="tab-pane fade " id="binhluan" style="bottom: 0px;">
                                    <div class="fb-comments" data-href="{link}"
                                         data-colorscheme="light" data-numposts="5"
                                         data-width="100%"></div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.package-details-content-->
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

        </div>

    </div>
    <div class="recommend-package">

        <h3 class="title">Có thể bạn quan tâm</h3>
        <div class="row">

            {tour_lienquan}
        </div> <!-- //row -->
    </div>
</div>