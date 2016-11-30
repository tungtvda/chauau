<div class="container">
    <div id="content" class="site-content" role="main">

        <div id="post-11" class="post-11 page type-page status-publish hentry">
            <div class="entry-content">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <link href="http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700"
                                      rel="stylesheet" property="stylesheet" type="text/css" media="all"/>
                                <div id="rev_slider_2_1_wrapper"
                                     class="rev_slider_wrapper fullwidthbanner-container"
                                     style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                    <!-- START REVOLUTION SLIDER 5.2.6 fullwidth mode -->
                                    <div id="rev_slider_2_1" class="rev_slider fullwidthabanner"
                                         style="display:none;" data-version="5.2.6">
                                        <ul>    <!-- SLIDE  -->
                                            {slide}
                                        </ul>
                                        <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                            var htmlDivCss = "";
                                            if (htmlDiv) {
                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                            } else {
                                                var htmlDiv = document.createElement("div");
                                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                            }
                                        </script>
                                        <div class="tp-bannertimer tp-bottom"
                                             style="visibility: hidden !important;"></div>
                                    </div>
                                    <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                        var htmlDivCss = "";
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement("div");
                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                    <script type="text/javascript">
                                        /******************************************
                                         -    PREPARE PLACEHOLDER FOR SLIDER    -
                                         ******************************************/

                                        var setREVStartSize = function () {
                                            try {
                                                var e = new Object, i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                                                e.c = jQuery('#rev_slider_2_1');
                                                e.responsiveLevels = [1240, 1024, 778, 480];
                                                e.gridwidth = [1140, 1024, 778, 480];
                                                e.gridheight = [780, 608, 400, 400];

                                                e.sliderLayout = "fullwidth";
                                                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                                                            f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                                        }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                                                    var u = (e.c.width(), jQuery(window).height());
                                                    if (void 0 != e.fullScreenOffsetContainer) {
                                                        var c = e.fullScreenOffsetContainer.split(",");
                                                        if (c) jQuery.each(c, function (e, i) {
                                                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                                                    }
                                                    f = u
                                                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                                                e.c.closest(".rev_slider_wrapper").css({height: f})

                                            } catch (d) {
                                                console.log("Failure at Presize of Slider:" + d)
                                            }
                                        };

                                        setREVStartSize();

                                        var tpj = jQuery;

                                        var revapi2;
                                        tpj(document).ready(function () {
                                            if (tpj("#rev_slider_2_1").revolution == undefined) {
                                                revslider_showDoubleJqueryError("#rev_slider_2_1");
                                            } else {
                                                revapi2 = tpj("#rev_slider_2_1").show().revolution({
                                                    sliderType: "standard",
                                                    jsFileLocation: "{SITE-NAME}/view/default/themes/wp-content/plugins/revslider/public/assets/js/",
                                                    sliderLayout: "fullwidth",
                                                    dottedOverlay: "none",
                                                    delay: 5500,
                                                    navigation: {
                                                        keyboardNavigation: "off",
                                                        keyboard_direction: "horizontal",
                                                        mouseScrollNavigation: "off",
                                                        mouseScrollReverse: "default",
                                                        onHoverStop: "on",
                                                        arrows: {
                                                            style: "zeus",
                                                            enable: true,
                                                            hide_onmobile: false,
                                                            hide_onleave: false,
                                                            tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                                                            left: {
                                                                h_align: "left",
                                                                v_align: "center",
                                                                h_offset: 30,
                                                                v_offset: 0
                                                            },
                                                            right: {
                                                                h_align: "right",
                                                                v_align: "center",
                                                                h_offset: 20,
                                                                v_offset: 0
                                                            }
                                                        }
                                                    },
                                                    responsiveLevels: [1240, 1024, 778, 480],
                                                    visibilityLevels: [1240, 1024, 778, 480],
                                                    gridwidth: [1140, 1024, 778, 480],
                                                    gridheight: [780, 608, 400, 400],
                                                    lazyType: "none",
                                                    shadow: 0,
                                                    spinner: "spinner0",
                                                    stopLoop: "off",
                                                    stopAfterLoops: -1,
                                                    stopAtSlide: -1,
                                                    shuffle: "off",
                                                    autoHeight: "off",
                                                    disableProgressBar: "on",
                                                    hideThumbsOnMobile: "off",
                                                    hideSliderAtLimit: 0,
                                                    hideCaptionAtLimit: 0,
                                                    hideAllCaptionAtLilmit: 0,
                                                    debugMode: false,
                                                    fallbacks: {
                                                        simplifyAll: "off",
                                                        nextSlideOnWindowFocus: "off",
                                                        disableFocusListener: false,
                                                    }
                                                });
                                            }
                                        });
                                        /*ready*/
                                    </script>
                                    <script>
                                        var htmlDivCss = unescape("%23rev_slider_2_1%20.zeus.tparrows%20%7B%0A%20%20cursor%3Apointer%3B%0A%20%20min-width%3A70px%3B%0A%20%20min-height%3A70px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20display%3Ablock%3B%0A%20%20z-index%3A100%3B%0A%20%20border-radius%3A50%25%3B%20%20%20%0A%20%20overflow%3Ahidden%3B%0A%20%20background%3Argba%280%2C0%2C0%2C0.1%29%3B%0A%7D%0A%0A%23rev_slider_2_1%20.zeus.tparrows%3Abefore%20%7B%0A%20%20font-family%3A%20%22revicons%22%3B%0A%20%20font-size%3A27px%3B%0A%20%20color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%20%20display%3Ablock%3B%0A%20%20line-height%3A%2070px%3B%0A%20%20text-align%3A%20center%3B%20%20%20%20%0A%20%20z-index%3A2%3B%0A%20%20position%3Arelative%3B%0A%7D%0A%23rev_slider_2_1%20.zeus.tparrows.tp-leftarrow%3Abefore%20%7B%0A%20%20content%3A%20%22%5Ce824%22%3B%0A%7D%0A%23rev_slider_2_1%20.zeus.tparrows.tp-rightarrow%3Abefore%20%7B%0A%20%20content%3A%20%22%5Ce825%22%3B%0A%7D%0A%0A%23rev_slider_2_1%20.zeus%20.tp-title-wrap%20%7B%0A%20%20background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20opacity%3A0%3B%0A%20%20transform%3Ascale%280%29%3B%0A%20%20-webkit-transform%3Ascale%280%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%20%20%20border-radius%3A50%25%3B%0A%20%7D%0A%23rev_slider_2_1%20.zeus%20.tp-arr-imgholder%20%7B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20position%3Aabsolute%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%20background-size%3Acover%3B%0A%20%20border-radius%3A50%25%3B%0A%20%20transform%3Atranslatex%28-100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28-100%25%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%0A%20%7D%0A%23rev_slider_2_1%20.zeus.tp-rightarrow%20.tp-arr-imgholder%20%7B%0A%20%20%20%20transform%3Atranslatex%28100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28100%25%29%3B%0A%20%20%20%20%20%20%7D%0A%23rev_slider_2_1%20.zeus.tparrows%3Ahover%20.tp-arr-imgholder%20%7B%0A%20%20transform%3Atranslatex%280%29%3B%0A%20%20-webkit-transform%3Atranslatex%280%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%20%20%20%20%20%0A%23rev_slider_2_1%20.zeus.tparrows%3Ahover%20.tp-title-wrap%20%7B%0A%20%20transform%3Ascale%281%29%3B%0A%20%20-webkit-transform%3Ascale%281%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%0A");
                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        }
                                        else {
                                            var htmlDiv = document.createElement('div');
                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                </div><!-- END REVOLUTION SLIDER --></div>
                        </div>
                    </div>
                </div>