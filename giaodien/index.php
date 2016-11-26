<?php include('header.php')?>
<?php include('menu.php')?>
<?php include('slide.php')?>

                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                             class="vc_row wpb_row vc_row-fluid show-overflow package-search-wrapper package-search-wrapper-v2 section-with-border">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">

                                        <div class="thm-tk-search">
                                            <div class="thm-tk-search-nav">
                                                <ul>
                                                    <li><a href="#holidays" class="active"><i class="icon-location"></i>
                                                            <span>Holidays</span></a></li>
                                                    <li><a href="#hotel" class=""><i class="icon-hotel"></i> <span>Hotels &amp; Resorts</span></a>
                                                    </li>
                                                    <li><a href="#flights"><i class="icon-flight"></i>
                                                            <span>Flights</span></a></li>
                                                    <li><a href="#vehicles" class=""><i class="icon-vehicles"></i>
                                                            <span>Vehicles</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="thm-tk-search-form">
                                                <div class="thm-tk-tab active" id="holidays">
                                                    <div class="thm-tk-tab-inner clearfix">
                                                        <form id="thm-tk-advancedsearch-form" class="clearfix"
                                                              action="http://demo.themeum.com/wordpress/wptravelkit/demo2/"
                                                              method="GET">
                                                            <div class="thm-tk-input-4-1">
                                                                <label>Search</label>
                                                                <input type="text" name="s" class="thm-tk-input-first"
                                                                       placeholder="Type keyword" value="">
                                                            </div>

                                                            <div class="thm-tk-input-4-1">
                                                                <label>Location</label>
                                                                <select name="location" class="select2">
                                                                    <option value="">Select a Location</option>
                                                                    <option value="america">America</option>
                                                                    <option value="australia">Australia</option>
                                                                    <option value="france">France</option>
                                                                    <option value="india">India</option>
                                                                    <option value="london">London</option>
                                                                    <option value="russia">Russia</option>
                                                                </select>
                                                            </div>
                                                            <div class="thm-tk-input-4-1">
                                                                <label>Check-in date</label>
                                                                <input type="text" name="checkin"
                                                                       class="thm-date-picker" value=""
                                                                       placeholder="Check-in date">
                                                            </div>
                                                            <div class="thm-tk-input-4-1">
                                                                <label>Guest</label>
                                                                <input type="number" name="guest" class="" value=""
                                                                       placeholder="Number of guests">
                                                            </div>
                                                            <input type="hidden" name="post_type" value="package">
                                                            <button class="btn btn-primary thm-tk-search-btn"
                                                                    type="submit">Search
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="thm-tk-tab " id="hotel">
                                                    <div class="thm-tk-tab-inner">
                                                        <form id="thm-tk-advancedsearch-form2" class="clearfix"
                                                              action="http://demo.themeum.com/wordpress/wptravelkit/demo2/"
                                                              method="GET">
                                                            <div class="thm-tk-input-4-1">
                                                                <label>Search</label>
                                                                <input type="text" name="s" id="search-keyword"
                                                                       class="thm-tk-input-first"
                                                                       placeholder="Type keyword" value="">
                                                            </div>

                                                            <div class="thm-tk-input-4-1">
                                                                <label>Location</label>
                                                                <select name="hotel_location" class="select2">
                                                                    <option value="">Select a location</option>
                                                                    <option value="abu-dhabi">Abu Dhabi</option>
                                                                    <option value="anguilla">Anguilla</option>
                                                                    <option value="bahamas">Bahamas</option>
                                                                    <option value="dhaka">dhaka</option>
                                                                    <option value="dubai">Dubai</option>
                                                                    <option value="german">German</option>
                                                                    <option value="las-vegas">Las Vegas</option>
                                                                    <option value="london">London</option>
                                                                    <option value="los-cabos">Los Cabos</option>
                                                                    <option value="new-york-city">New York City</option>
                                                                    <option value="paris">Paris</option>
                                                                    <option value="rome">Rome</option>
                                                                    <option value="trivago">Trivago</option>
                                                                    <option value="turkey">Turkey</option>
                                                                </select>
                                                            </div>
                                                            <div class="thm-tk-input-4-1">
                                                                <label>Hotel Type</label>
                                                                <select name="hotel_category" class="select2">
                                                                    <option value="">Hotel Type</option>
                                                                    <option value="3-star">3 Star</option>
                                                                    <option value="5-star">5 Star</option>
                                                                    <option value="hotel">Hotel</option>
                                                                </select>
                                                            </div>
                                                            <div class="thm-tk-input-4-1">
                                                                <label>Room Type</label>
                                                                <select name="room_type" class="select2">
                                                                    <option value="">Room Type</option>
                                                                    <option value="doubleroom">Double Room</option>
                                                                    <option value="singleroom">Single Room</option>
                                                                    <option value="luxuryroom">Luxury Room</option>
                                                                    <option value="generalroom">General Room</option>
                                                                    <option value="familyroom">Family Room</option>
                                                                    <option value="deluxeroom">Deluxe Room</option>
                                                                </select>
                                                            </div>
                                                            <input type="hidden" name="post_type" value="hotel">
                                                            <button class="btn btn-primary thm-tk-search-btn"
                                                                    type="submit">Search
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
                                            <div class="themeum-titlelayout1"><h2 class="thm-titlestandardstyle">POPULAR
                                                    PACKAGES</h2>
                                                <p class="thm-sub-titlestandardstylesub">Proin gravida nibh vel velit
                                                    auctor aliquet. Aenean sollicitudin</p></div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 50px"><span
                                                class="vc_empty_space_inner"></span></div>
                                        <div class="add-popular-tour-package">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="package-list-wrap "><img width="570" height="400"
                                                                                         src="wp-content/uploads/sites/2/2016/07/1930771-570x400.jpg"
                                                                                         class="img-responsive wp-post-image"
                                                                                         alt="1930771"/>
                                                        <div class="package-list-content"><p
                                                                class="package-list-duration">3Days, 4 NIghts Start From
                                                                $450</p>
                                                            <h3 class="package-list-title"><a
                                                                    href="package/paris-city-tour/index.html">Paris city
                                                                    Tour</a></h3><a class="package-list-button"
                                                                                    href="package/paris-city-tour/index.html">Book
                                                                Now</a></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="package-list-wrap "><img width="570" height="400"
                                                                                         src="wp-content/uploads/sites/2/2016/08/gorod-doma-volna-pena-570x400.jpg"
                                                                                         class="img-responsive wp-post-image"
                                                                                         alt="gorod-doma-volna-pena"/>
                                                        <div class="package-list-content"><p
                                                                class="package-list-duration">3Days, 4 NIghts Start From
                                                                $850</p>
                                                            <h3 class="package-list-title"><a
                                                                    href="package/hamburger-ham-pig-pork/index.html">Hamburger
                                                                    ham pork</a></h3><a class="package-list-button"
                                                                                        href="package/hamburger-ham-pig-pork/index.html">Book
                                                                Now</a></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="package-list-wrap "><img width="570" height="400"
                                                                                         src="wp-content/uploads/sites/2/2016/07/15231-570x400.jpg"
                                                                                         class="img-responsive wp-post-image"
                                                                                         alt="15231"/>
                                                        <div class="package-list-content"><p
                                                                class="package-list-duration">3Days, 4 NIghts Start From
                                                                $850</p>
                                                            <h3 class="package-list-title"><a
                                                                    href="package/best-tours-in-mexico/index.html">Best
                                                                    tours in Mexico</a></h3><a class="package-list-button"
                                                                                               href="package/best-tours-in-mexico/index.html">Book
                                                                Now</a></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="package-list-wrap "><img width="570" height="400"
                                                                                         src="wp-content/uploads/sites/2/2016/07/21658-570x400.jpg"
                                                                                         class="img-responsive wp-post-image"
                                                                                         alt="21658"/>
                                                        <div class="package-list-content"><p
                                                                class="package-list-duration">3Days, 4 NIghts Start From
                                                                $850</p>
                                                            <h3 class="package-list-title"><a
                                                                    href="package/four-seasons-america/index.html">Four
                                                                    Seasons America</a></h3><a class="package-list-button"
                                                                                               href="package/four-seasons-america/index.html">Book
                                                                Now</a></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="package-list-wrap "><img width="570" height="400"
                                                                                         src="wp-content/uploads/sites/2/2016/07/47039-570x400.jpg"
                                                                                         class="img-responsive wp-post-image"
                                                                                         alt="47039"/>
                                                        <div class="package-list-content"><p
                                                                class="package-list-duration">3Days, 4 NIghts Start From
                                                                $750</p>
                                                            <h3 class="package-list-title"><a
                                                                    href="package/eternal-rome/index.html">Eternal City
                                                                    of Rome</a></h3><a class="package-list-button"
                                                                                       href="package/eternal-rome/index.html">Book
                                                                Now</a></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="package-list-wrap "><img width="570" height="400"
                                                                                         src="wp-content/uploads/sites/2/2016/07/15231-570x400.jpg"
                                                                                         class="img-responsive wp-post-image"
                                                                                         alt="15231"/>
                                                        <div class="package-list-content"><p
                                                                class="package-list-duration">3Days, 4 NIghts Start From
                                                                $850</p>
                                                            <h3 class="package-list-title"><a
                                                                    href="package/tour-time-uk/index.html">Tour Time
                                                                    UK</a></h3><a class="package-list-button"
                                                                                  href="package/tour-time-uk/index.html">Book
                                                                Now</a></div>
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
                             class="vc_row wpb_row vc_row-fluid thm-res-padding vc_custom_1476946410647 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="addon-themeum-action whitecolor cta-v2" style="text-align:center;">
                                            <div class="themeum-action"><h2 class="action-titlecustomstyle"
                                                                            style="font-size:60px;line-height: normal;color:#ffffff;font-weight:400;margin:0 0 10px;">
                                                    Get 10% Off On Your Next Travel</h2>
                                                <p class="action-sub-titlecustomstylesub"
                                                   style="font-size:18px;line-height: normal;color:#ffffff;margin:0 0 35px 0;">
                                                    Travel between 22nd August to 23 November and get exciting offers
                                                    along with a sure<br/>
                                                    10% cash discount.</p>
                                                <p><a class="action-btn btn btn-primary btn-sm" href="#"
                                                      target="_blank">Explore Tour</a></p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid show-overflow thm-res-padding section-with-border vc_custom_1477564649986">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="addon-themeum-title " style="text-align:center;">
                                            <div class="themeum-titlelayout1"><h2 class="thm-titlestandardstyle">Top
                                                    Destinations</h2>
                                                <p class="thm-sub-titlestandardstylesub">Proin gravida nibh vel velit
                                                    auctor aliquet. Aenean sollicitudin</p></div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 50px"><span
                                                class="vc_empty_space_inner"></span></div>
                                        <div class="package-location-shortcode package-location-v2">
                                            <div class="row">
                                                <div class="col-sm-3 package-location col-xs-4 col-md-2"><a
                                                        href="package-location/america/index.html"><img
                                                            class="img-responsive"
                                                            src="wp-content/uploads/sites/2/2016/10/statue-of-liberty.png"
                                                            alt="photo"></a>
                                                    <h3 class="feature-carosuel-title"><a
                                                            href="package-location/america/index.html">America</a></h3>
                                                    <div>Statue of Liberty</div>
                                                </div>
                                                <div class="col-sm-3 package-location col-xs-4 col-md-2"><a
                                                        href="package-location/australia/index.html"><img
                                                            class="img-responsive"
                                                            src="wp-content/uploads/sites/2/2016/10/opera-house.png"
                                                            alt="photo"></a>
                                                    <h3 class="feature-carosuel-title"><a
                                                            href="package-location/australia/index.html">Australia</a>
                                                    </h3>
                                                    <div>Opera House</div>
                                                </div>
                                                <div class="col-sm-3 package-location col-xs-4 col-md-2"><a
                                                        href="package-location/france/index.html"><img
                                                            class="img-responsive"
                                                            src="wp-content/uploads/sites/2/2016/10/icon-paris.png"
                                                            alt="photo"></a>
                                                    <h3 class="feature-carosuel-title"><a
                                                            href="package-location/france/index.html">France</a></h3>
                                                    <div>Eiffel Tower</div>
                                                </div>
                                                <div class="col-sm-3 package-location col-xs-4 col-md-2"><a
                                                        href="package-location/india/index.html"><img
                                                            class="img-responsive"
                                                            src="wp-content/uploads/sites/2/2016/10/taj.png"
                                                            alt="photo"></a>
                                                    <h3 class="feature-carosuel-title"><a
                                                            href="package-location/india/index.html">India</a></h3>
                                                    <div>Tajmahal</div>
                                                </div>
                                                <div class="col-sm-3 package-location col-xs-4 col-md-2"><a
                                                        href="package-location/london/index.html"><img
                                                            class="img-responsive"
                                                            src="wp-content/uploads/sites/2/2016/10/icon-london.png"
                                                            alt="photo"></a>
                                                    <h3 class="feature-carosuel-title"><a
                                                            href="package-location/london/index.html">London</a></h3>
                                                    <div>Big Ben Watch</div>
                                                </div>
                                                <div class="col-sm-3 package-location col-xs-4 col-md-2"><a
                                                        href="package-location/russia/index.html"><img
                                                            class="img-responsive"
                                                            src="wp-content/uploads/sites/2/2016/10/moscco.png" alt="photo"></a>
                                                    <h3 class="feature-carosuel-title"><a
                                                            href="package-location/russia/index.html">Russia</a></h3>
                                                    <div>Statue of Liberty</div>
                                                </div>
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
                                                    Inspiration &amp; expert advise</h2>
                                                <p class="thm-sub-titlestandardstylesub">Proin gravida nibh vel velit
                                                    auctor aliquet. Aenean sollicitudin</p></div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 50px"><span
                                                class="vc_empty_space_inner"></span></div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="themeum-latest-post"><a class="review-item-image"
                                                                                    href="2016/07/28/aspiring-travel-are-raring-to-start/index.html"><img
                                                            width="570" height="400"
                                                            src="wp-content/uploads/sites/2/2016/07/848234-570x400.jpg"
                                                            class="img-responsive wp-post-image" alt="848234"/></a>
                                                    <div class="themeum-latest-post-content clearfix"><h3
                                                            class="entry-title"><a
                                                                href="2016/07/28/aspiring-travel-are-raring-to-start/index.html">Aspiring
                                                                travel are raring to start</a></h3><span class="meta-date">July 28, 2016</span><span
                                                            class="latest-post-comments"><i
                                                                class="fa fa-commenting-o"></i> <a
                                                                href="2016/07/28/aspiring-travel-are-raring-to-start/index.html#comments">0</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="themeum-latest-post"><a class="review-item-image"
                                                                                    href="2016/07/28/small-country-in-south-east-asia/index.html"><img
                                                            width="570" height="400"
                                                            src="wp-content/uploads/sites/2/2016/07/1722-570x400.jpg"
                                                            class="img-responsive wp-post-image" alt="1722"/></a>
                                                    <div class="themeum-latest-post-content clearfix"><h3
                                                            class="entry-title"><a
                                                                href="2016/07/28/small-country-in-south-east-asia/index.html">City
                                                                is the cultural and religious centre</a></h3><span
                                                            class="meta-date">July 28, 2016</span><span
                                                            class="latest-post-comments"><i
                                                                class="fa fa-commenting-o"></i> <a
                                                                href="2016/07/28/small-country-in-south-east-asia/index.html#comments">2</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="themeum-latest-post"><a class="review-item-image"
                                                                                    href="2016/07/28/course-stems-from-the-fact/index.html"><img
                                                            width="570" height="400"
                                                            src="wp-content/uploads/sites/2/2016/07/638975-570x400.jpg"
                                                            class="img-responsive wp-post-image" alt="638975"/></a>
                                                    <div class="themeum-latest-post-content clearfix"><h3
                                                            class="entry-title"><a
                                                                href="2016/07/28/course-stems-from-the-fact/index.html">Course
                                                                stems from the fact that</a></h3><span class="meta-date">July 28, 2016</span><span
                                                            class="latest-post-comments"><i
                                                                class="fa fa-commenting-o"></i> <a
                                                                href="2016/07/28/course-stems-from-the-fact/index.html#comments">0</a></span>
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
                             class="vc_row wpb_row vc_row-fluid show-overflow thm-res-padding section-with-border-gray vc_custom_1477470088839 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="addon-themeum-title " style="text-align:center;">
                                            <div class="themeum-titlelayout1"><h2 class="thm-titlestandardstyle">
                                                    INCREDIBLE PLACE</h2>
                                                <p class="thm-sub-titlestandardstylesub">Let us help you find the
                                                    perfect place. Ideal destinations for a weekend</p></div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                class="vc_empty_space_inner"></span></div>
                                        <div class="themeum-photo-gallery-item ">
                                            <div class="row photo-gallery-item layout1">
                                                <div class="photo-gallery-items single-col col-sm-6">
                                                    <div class="gallery-items-img"><a
                                                            href="wp-content/uploads/sites/2/2016/10/Image_11-1.jpg"
                                                            class="plus-icon"><img
                                                                src="wp-content/uploads/sites/2/2016/10/Image_11-1-570x400.jpg"
                                                                class="img-responsive" alt=""/></a></div>
                                                </div>
                                                <div class="photo-gallery-items column col-sm-6">
                                                    <div class="gallery-items-img"><a
                                                            href="wp-content/uploads/sites/2/2016/10/Image_17.jpg"
                                                            class="plus-icon"><img
                                                                src="wp-content/uploads/sites/2/2016/10/Image_17-570x400.jpg"
                                                                class="img-responsive" alt=""/></a></div>
                                                </div>
                                                <div class="photo-gallery-items column col-sm-6">
                                                    <div class="gallery-items-img"><a
                                                            href="wp-content/uploads/sites/2/2016/10/Image_10-1.jpg"
                                                            class="plus-icon"><img
                                                                src="wp-content/uploads/sites/2/2016/10/Image_10-1-570x400.jpg"
                                                                class="img-responsive" alt=""/></a></div>
                                                </div>
                                                <div class="photo-gallery-items column col-sm-6">
                                                    <div class="gallery-items-img"><a
                                                            href="wp-content/uploads/sites/2/2016/10/Image_9-1.jpg"
                                                            class="plus-icon"><img
                                                                src="wp-content/uploads/sites/2/2016/10/Image_9-1-570x400.jpg"
                                                                class="img-responsive" alt=""/></a></div>
                                                </div>
                                                <div class="photo-gallery-items column col-sm-6">
                                                    <div class="gallery-items-img"><a
                                                            href="wp-content/uploads/sites/2/2016/07/2071681.jpg"
                                                            class="plus-icon"><img
                                                                src="wp-content/uploads/sites/2/2016/07/2071681-570x400.jpg"
                                                                class="img-responsive" alt=""/></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                             class="vc_row wpb_row vc_row-fluid thm-res-padding vc_custom_1476955334093 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="atmosphere-details newsletter-icon">
                                            <article class="atmosphere-content" style="">
                                                <ul>
                                                    <li><i style="font-size: 48px; color:#ffffff;"
                                                           class="fa fa-envelope-o"></i><span style="font-size: 16px; ">sad</span>
                                                    </li>
                                                </ul>
                                            </article>
                                        </div>
                                        <div class="addon-themeum-title whitecolor themeum-titlelayout-custom"
                                             style="text-align:center;">
                                            <div class="themeum-titlelayout1"><h2 class="thm-titlestandardstyle">
                                                    SUBSCRIBE TO OUR NEWSLETTER</h2></div>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element  themeum-newsletter">
                                            <div class="wpb_wrapper">
                                                <script type="text/javascript">(function () {
                                                        if (!window.mc4wp) {
                                                            window.mc4wp = {
                                                                listeners: [],
                                                                forms: {
                                                                    on: function (event, callback) {
                                                                        window.mc4wp.listeners.push({
                                                                            event: event,
                                                                            callback: callback
                                                                        });
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    })();
                                                </script>
                                                <!-- MailChimp for WordPress v4.0.7 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-139" method="post"
                                                      data-id="139" data-name="">
                                                    <div class="mc4wp-form-fields"><p>
                                                            <input type="email" name="EMAIL"
                                                                   placeholder="Your email address" required/>
                                                            <input type="submit" value="Submit">
                                                        </p>
                                                        <div style="display: none;"><input type="text"
                                                                                           name="_mc4wp_honeypot"
                                                                                           value="" tabindex="-1"
                                                                                           autocomplete="off"/></div>
                                                        <input type="hidden" name="_mc4wp_timestamp"
                                                               value="1480145901"/><input type="hidden"
                                                                                          name="_mc4wp_form_id"
                                                                                          value="139"/><input
                                                            type="hidden" name="_mc4wp_form_element_id"
                                                            value="mc4wp-form-1"/></div>
                                                    <div class="mc4wp-response"></div>
                                                </form><!-- / MailChimp for WordPress Plugin -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
</div>

</div>


</div> <!--/#content-->
</div> <!--/container-->
<?php include('footer.php')?>