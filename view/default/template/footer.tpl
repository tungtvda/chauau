</section> <!--/#main-->

<!-- start footer -->

<div class="bottom borderimage">
    <div class="container">
        <div class="row clearfix">
            <div class="col-sm-6 col-md-4 bottom-widget">
                <div id="nav_menu-3" class="widget widget_nav_menu" style="text-align: center">
                    <a href="{SITE-NAME}"><img
                                src="{Logo}"
                                alt="{name}"></a>
                    <div class="menu-selling-container">
                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-139" method="post"
                              data-name="">
                            <div class="mc4wp-form-fields"><p><input type="email" name="email_footer"
                                                                     placeholder="Email của bạn" required><input
                                            type="submit" value="Đăng ký"></p>
                            </div>
                            <div class="mc4wp-response"></div>
                            <div class="social-share">
                                <ul>
                                    <li><a target="_blank" href="{facebook}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="{twitter}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="{google}"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a target="_blank" href="{youtube}"><i class="fa fa-youtube"></i></a></li>
                                    <li><a target="_blank" href="{rss}"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 bottom-widget">
                <div id="text-2" class="widget widget_text"><h3 class="widget-title">Văn phòng tại Hà Nội</h3>
                    <div class="textwidget">
                        <div class="contact-info">
                            <div class="contact-info-share">
                                <p><i class="fa fa-map-marker"></i> {Address}</p>
                                <p><i class="fa fa-phone"></i>Tel: {Phone}</p>
                                <p><i class="fa fa-mobile"></i>&nbsp;&nbsp;Mobile: {Hotline}</p>
                                <p><i class="fa fa-hdd-o"></i> Fax: {Fax}</p>
                                <p><i class="fa fa-envelope"></i>Email: {Email}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 bottom-widget">
                <div id="text-2" class="widget widget_text"><h3 class="widget-title">Văn phòng tại Hồ Chí Minh</h3>
                    <div class="textwidget">
                        <div class="contact-info">
                            <div class="contact-info-share">
                                <p><i class="fa fa-map-marker"></i> {Address_hcm}</p>
                                <p><i class="fa fa-phone"></i>Tel: {Phone_hcm}</p>
                                <p><i class="fa fa-mobile"></i>&nbsp;&nbsp;&nbsp;Mobile: {Hotline_hcm}</p>
                                <p><i class="fa fa-hdd-o"></i>Fax: {Fax_hcm}</p>
                                <p><i class="fa fa-envelope"></i>Email: {Email_hcm}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#footer-->

<footer id="footer" class="footer-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                © 2016 Your Company. &nbsp;Designed By <a href="http://mixtourist.com.vn/" target="_blank"
                                                          class="copyright" style="color: red"> Mixtourist</a></div> <!-- end row -->
        </div> <!-- end row -->
    </div>  <!-- end container -->
</footer>
</div> <!-- #page -->


<script type="text/javascript">(function () {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }

        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields && urlFields.length > 0) {
            for (var j = 0; j < urlFields.length; j++) {
                addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
            }
        }
        /* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if (testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for (var i = 0; i < dateFields.length; i++) {
                if (!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if (!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }

    })();</script>
<!--[if lte IE 8]>
<style>
    .attachment:focus {
        outline: #1e8cbe solid;
    }

    .selected.attachment {
        outline: #1e8cbe solid;
    }
</style>
<![endif]-->


<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-content/plugins/contact-form-7/includes/js/scripts8686.js?ver=4.5.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/shortcode.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/backbone.min9632.js?ver=1.2.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpUtilSettings = {"ajax": {"url": "\/wordpress\/wptravelkit\/demo2\/wp-admin\/admin-ajax.php"}};
    /* ]]> */
</script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/wp-util.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/wp-backbone.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpMediaModelsL10n = {
        "settings": {
            "ajaxurl": "\/wordpress\/wptravelkit\/demo2\/wp-admin\/admin-ajax.php",
            "post": {"id": 0}
        }
    };
    /* ]]> */
</script>


<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/plupload/wp-plupload.min1c9b.js?ver=4.6.1'></script>
<!--<script type='text/javascript' src='wp-includes/js/jquery/ui/sortable.mine899.js?ver=1.11.4'></script>-->
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/mediaelement/mediaelement-and-player.min51cd.js?ver=2.22.0'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/mediaelement/wp-mediaelement.min1c9b.js?ver=4.6.1'></script>
<!--<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/media-views.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/media-editor.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/media-audiovideo.min1c9b.js?ver=4.6.1'></script>-->
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-content/themes/travelkit/js/bootstrap.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-content/themes/travelkit/js/loopcounter1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-content/themes/travelkit/js/jquery.prettySocial.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-content/themes/travelkit/js/ajax-booking-btn1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/comment-reply.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-content/themes/travelkit/js/main1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-includes/js/wp-embed.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.mina752.js?ver=4.11.2.1'></script>
<script type='text/javascript'
        src='{SITE-NAME}/view/default/themes/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min1678.js?ver=4.0.7'></script>
<!--<script type='text/javascript'
        src='http://demo.themeum.com/wordpress/wptravelkit/demo2/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.0.7'></script>-->

</body>

</html>
