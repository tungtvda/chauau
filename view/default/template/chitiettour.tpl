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
                                    <ins><span class="amount"> {price_format}</span> vnđ</ins>
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
                                    <ins><span class="parameter"> Car</span></ins>
                                </p>
                            </div>
                            <div itemprop="description"><p></p></div>
                            <div itemprop="description">
                                <div style="float: left;width: 100%;" class="booking_detail_div grid grid_2">
                                    <a href="#booking" class="booking_detail">BOOK NOW </a>
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
                        <div class="col-md-4 unset_padding_left">
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
                                                    jQuery("#date_table").text(date_check.format('DD-MM-YYYY'));
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
                                        if(price_adults<price_children_val+price_children_5_val)
                                        {
                                            total="Liên hệ";

                                        }
                                        else{
                                            if(price_adults<1||price_adults==""){
                                                price_adults=1;
                                                jQuery('#num_price_adults').val('1');
                                            }
                                            if(price_children_val<1||price_children_val==""){
                                                price_children_val=0;
                                            }
                                            if(price_children_5_val<1||price_children_5_val==""){
                                                price_children_5_val=0;
                                            }
                                            price=parseFloat(price);
                                            price_2=parseFloat(price_2);
                                            price_3=parseFloat(price_3);
                                            price_4=parseFloat(price_4);
                                            price_5=parseFloat(price_5);
                                            price_6=parseFloat(price_6);
                                            price_adults=parseInt(price_adults);
                                            price_children_val=parseInt(price_children_val);
                                            price_children_5_val=parseInt(price_children_5_val);
                                            total_member=price_adults+price_children_val+price_children_5_val;

                                            if(total_member>=7||total_member<=0){
                                                total="Liên hệ";
                                            }
                                            else{
                                                if((price_children_val+price_children_5_val)>price_adults)
                                                {

                                                }else{
                                                    total_price=0;
                                                    switch(total_member){
                                                        case 1:
                                                            total_price=price;
                                                            break;
                                                        case 2:
                                                            total_price=price_2;
                                                            break;
                                                        case 3:
                                                            total_price=price_3;
                                                            break;
                                                        case 4:
                                                            total_price=price_4;
                                                            break;
                                                        case 5:
                                                            total_price=price_5;
                                                            break;
                                                        case 6:
                                                            total_price=price_6;
                                                            break;
                                                    }
                                                    total=(price_adults+(price_children_val*0.7))*total_price;
                                                    if(total==0){
                                                        total="Liên hệ";
                                                    }
                                                    else{
                                                        var n = parseFloat(total);
//                                                        total = Math.round(n * 1000)/1000;
                                                        total=n.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")+" vnđ";
                                                    }

                                                }


                                            }

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
                            <div class="booking_left">
                                <div class="back_detail">

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
                                    <a style="width: 40%; display: none" href="javascript:void(0);"  id="next_booking" class="nicdark_btn nicdark_btn_filter fullwidth nicdark_bg_green calculate_bt"><i class="fa fa-arrow-right"></i> Tiếp tục</a>
                                </div>
                                <div class="next_detail" style="display: none">
                                    <table class="nicdark_table extrabig nicdark_bg_yellow">

                                        <tbody class="nicdark_bg_grey nicdark_border_grey table_booking" style="background-color: #f9f9f9 !important; border: none">
                                        <tr>
                                            <td>
                                                Ngày khởi hành:
                                            </td>
                                            <td>
                                                <span id="date_table">{date_now}</span>
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
                                    <p style="color: red;margin-top: 10px; display: none; float: left;" id="full_name_er">{full_name_booking}</p>
                                    <input class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle"  type="text"   placeholder="{full_name}" id="name_booking">
                                    <p style="color: red ; display: none" id="email_er">{email_booking}</p>
                                    <input class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle"  type="text"   placeholder="{email}" id="email_booking">
                                    <p style="color: red; display: none" id="phone_er">{phone_booking}</p>
                                    <input class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle"  type="text"   placeholder="{phone}" id="phone_booking">
                                    <p style="color: red; display: none" id="address_er">{add_booking}</p>
                                    <input class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle"  type="text"   placeholder="{address}" id="address_booking">
                                                        <textarea style="height:90px"  placeholder="{request}..." class="nicdark_bg_greydark2 nicdark_border_none grey medium subtitle" id="request_booking">

                                                        </textarea>

                                    <a style="width: 45%;  background-color: #ed1c27" id="back_booking" href="javascript:void(0);" class="nicdark_btn nicdark_btn_filter fullwidth nicdark_bg_green calculate_bt"><i class="el el-arrow-left"></i> {back}</a>
                                    <img  id="loading_booking" style="width: 45px; display: none" src="{SITE-NAME}/view/default/themes/images/loading.gif">
                                    <a style="width: 45%; float: right;" id="booking_ajax"  href="javascript:void(0);" class="nicdark_btn nicdark_btn_filter fullwidth nicdark_bg_green calculate_bt"><i class="el el-shopping-cart-sign"></i> {booking_lang}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 unset_padding_left unset_padding_right">
                            <h3 class="title">Tour Details</h3>
                            <ul class="nav nav-tabs package-nav-tab" role="tablist">
                                <li class="active"><a href="#lichtrinh" role="tab" data-toggle="tab"
                                                      aria-expanded="true">Lịch trình</a></li>
                                <li class=""><a href="#baogom" role="tab" data-toggle="tab" aria-expanded="false">Bao
                                        gồm</a></li>
                                <li class=""><a href="#khongbaogom" role="tab" data-toggle="tab" aria-expanded="false">Không
                                        bao gồm</a></li>
                                <li class=""><a href="#binhluan" role="tab" data-toggle="tab" aria-expanded="false">Bình
                                        luận</a></li>
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
                <!--img Info-->
                <div class="tab-pane fade" id="thuvienanh" style="bottom: 0px;">
                    <div class="package-details-gallery">
                        <div class="row margin-bottom photo-gallery-item">

                            <div class="photo-gallery-items col-sm-6 col-md-4">
                                <div class="gallery-items-img">
                                    <a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/5665133.jpg"
                                       class="plus-icon"><img
                                                src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/5665133-570x400.jpg"
                                                class="img-responsive" alt="photo : "></a>
                                </div><!--/.gallery-items-img-->
                            </div> <!--/.col-md-3-->

                            <div class="photo-gallery-items col-sm-6 col-md-4">
                                <div class="gallery-items-img">
                                    <a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/5112865.jpg"
                                       class="plus-icon"><img
                                                src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/5112865-570x400.jpg"
                                                class="img-responsive" alt="photo : "></a>
                                </div><!--/.gallery-items-img-->
                            </div> <!--/.col-md-3-->

                            <div class="photo-gallery-items col-sm-6 col-md-4">
                                <div class="gallery-items-img">
                                    <a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/2945436.jpg"
                                       class="plus-icon"><img
                                                src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/2945436-570x400.jpg"
                                                class="img-responsive" alt="photo : "></a>
                                </div><!--/.gallery-items-img-->
                            </div> <!--/.col-md-3-->

                            <div class="photo-gallery-items col-sm-6 col-md-4">
                                <div class="gallery-items-img">
                                    <a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/2945356.jpg"
                                       class="plus-icon"><img
                                                src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/2945356-570x400.jpg"
                                                class="img-responsive" alt="photo : "></a>
                                </div><!--/.gallery-items-img-->
                            </div> <!--/.col-md-3-->

                            <div class="photo-gallery-items col-sm-6 col-md-4">
                                <div class="gallery-items-img">
                                    <a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/2120808.jpg"
                                       class="plus-icon"><img
                                                src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/2120808-570x400.jpg"
                                                class="img-responsive" alt="photo : "></a>
                                </div><!--/.gallery-items-img-->
                            </div> <!--/.col-md-3-->

                            <div class="photo-gallery-items col-sm-6 col-md-4">
                                <div class="gallery-items-img">
                                    <a href="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/2071528.jpg"
                                       class="plus-icon"><img
                                                src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/2071528-570x400.jpg"
                                                class="img-responsive" alt="photo : "></a>
                                </div><!--/.gallery-items-img-->
                            </div> <!--/.col-md-3-->
                        </div><!--/.row-->
                    </div>
                </div><!--/.tab-pane-->
                <!--/#img Info-->

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
                    <img width="570" height="400"
                         src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/15231-570x400.jpg"
                         class="img-responsive wp-post-image" alt="15231">
                    <div class="package-list-content">
                        <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                        <p class="package-list-duration">3Days, 4 NIghts Start From $850</p>
                        <h3 class="package-list-title"><a
                                    href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/best-tours-in-mexico/">Best
                                tours in Mexico</a></h3>
                        <a class="package-list-button"
                           href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/best-tours-in-mexico/">Book
                            Now</a>
                    </div>
                </div><!--/.package-list-wrap-->
            </div> <!--/.col-md-3-->


            <div class="col-md-4">
                <div class="package-list-wrap ">
                    <img width="570" height="400"
                         src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/07/131781-570x400.jpg"
                         class="img-responsive wp-post-image" alt="131781">
                    <div class="package-list-content">
                        <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                        <p class="package-list-duration">3Days, 4 NIghts Start From $770</p>
                        <h3 class="package-list-title"><a
                                    href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/holiday-in-azerbaijan/">Holiday
                                in Azerbaijan</a></h3>
                        <a class="package-list-button"
                           href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/holiday-in-azerbaijan/">Book
                            Now</a>
                    </div>
                </div><!--/.package-list-wrap-->
            </div> <!--/.col-md-3-->


            <div class="col-md-4">
                <div class="package-list-wrap ">
                    <img width="570" height="400"
                         src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/10/Image_18-570x400.jpg"
                         class="img-responsive wp-post-image" alt="image_18">
                    <div class="package-list-content">
                        <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                        <p class="package-list-duration">3Days, 4 NIghts Start From $550</p>
                        <h3 class="package-list-title"><a
                                    href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/big-on-tours-sightseeing/">Big
                                on Tours &amp; Sightseeing</a></h3>
                        <a class="package-list-button"
                           href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/big-on-tours-sightseeing/">Book
                            Now</a>
                    </div>
                </div><!--/.package-list-wrap-->
            </div> <!--/.col-md-3-->


            <div class="col-md-4">
                <div class="package-list-wrap ">
                    <img width="570" height="400"
                         src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/10/Image_1-1-570x400.jpg"
                         class="img-responsive wp-post-image" alt="image_1">
                    <div class="package-list-content">
                        <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                        <p class="package-list-duration">3Days, 4 NIghts Start From $450</p>
                        <h3 class="package-list-title"><a
                                    href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/escorted-tours-of-america/">Escorted
                                tours of America</a></h3>
                        <a class="package-list-button"
                           href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/escorted-tours-of-america/">Book
                            Now</a>
                    </div>
                </div><!--/.package-list-wrap-->
            </div> <!--/.col-md-3-->


            <div class="col-md-4">
                <div class="package-list-wrap ">
                    <img width="570" height="400"
                         src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/10/Image_15-1-570x400.jpg"
                         class="img-responsive wp-post-image" alt="image_15">
                    <div class="package-list-content">
                        <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                        <p class="package-list-duration">3Days, 4 NIghts Start From $550</p>
                        <h3 class="package-list-title"><a
                                    href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/sightseeing-tours/">Sightseeing
                                Tours</a></h3>
                        <a class="package-list-button"
                           href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/sightseeing-tours/">Book
                            Now</a>
                    </div>
                </div><!--/.package-list-wrap-->
            </div> <!--/.col-md-3-->


            <div class="col-md-4">
                <div class="package-list-wrap ">
                    <img width="570" height="400"
                         src="http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/uploads/sites/2/2016/08/gorod-doma-volna-pena-570x400.jpg"
                         class="img-responsive wp-post-image" alt="gorod-doma-volna-pena">
                    <div class="package-list-content">
                        <!-- <p class="package-list-duration"> 2 Days 3 Nights </p> -->
                        <p class="package-list-duration">3Days, 4 NIghts Start From $850</p>
                        <h3 class="package-list-title"><a
                                    href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/hamburger-ham-pig-pork/">Hamburger
                                ham pork</a></h3>
                        <a class="package-list-button"
                           href="http://demo.themeum.com/wordpress/wptravelkit/demo2/package/hamburger-ham-pig-pork/">Book
                            Now</a>
                    </div>
                </div><!--/.package-list-wrap-->
            </div> <!--/.col-md-3-->

        </div> <!-- //row -->
    </div>
</div>