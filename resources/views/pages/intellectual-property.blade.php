
@extends('pages.layout.app')
@section('content')



<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin: 0px auto; background-color: rgb(233, 233, 233); padding: 0px; max-height: 360px; height: 360px; overflow: visible;">
    <!-- START REVOLUTION SLIDER 4.6.9 fullwidth mode -->
    <div id="rev_slider_3_1" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive hovered" style="max-height: 360px; height: 360px;">
        <ul class="tp-revslider-mainul" style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: 360px;">	<!-- SLIDE  -->
            <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300" data-thumb="https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1-320x200.jpg" data-saveperformance="off" data-title="Slide" class="tp-revslider-slidesli active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1;">
                <!-- MAIN IMAGE -->
                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" src="https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1.jpg" data-src="https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1.jpg&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit;"></div><div class="tp-dottedoverlay twoxtwowhite"></div></div>
                <!-- LAYERS -->
            </li>
            <!-- SLIDE  -->
            <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300" data-thumb="https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1-320x200.jpg" data-saveperformance="off" data-title="Slide" class="tp-revslider-slidesli" style="width: 100%; height: 100%; overflow: hidden; visibility: hidden; opacity: 0; z-index: 18;">
                <!-- MAIN IMAGE -->
                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" src="https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1.jpg" data-src="https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1.jpg&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; visibility: hidden; opacity: 0;"></div><div class="tp-dottedoverlay twoxtwowhite"></div></div>
                <!-- LAYERS -->
            </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden; width: 0%; transform: translate3d(0px, 0px, 0px);"></div>	<div class="tp-loader spinner2" style="display: none;"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>


    <style scoped=""></style>

    <script type="text/javascript">

        /******************************************
         -	PREPARE PLACEHOLDER FOR SLIDER	-
         ******************************************/


        var setREVStartSize = function() {
            var	tpopt = new Object();
            tpopt.startwidth = 1200;
            tpopt.startheight = 360;
            tpopt.container = jQuery('#rev_slider_3_1');
            tpopt.fullScreen = "off";
            tpopt.forceFullWidth="off";

            tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
        };

        /* CALL PLACEHOLDER */
        setREVStartSize();


        var tpj=jQuery;
        tpj.noConflict();
        var revapi3;

        tpj(document).ready(function() {

            if(tpj('#rev_slider_3_1').revolution == undefined){
                revslider_showDoubleJqueryError('#rev_slider_3_1');
            }else{
                revapi3 = tpj('#rev_slider_3_1').show().revolution(
                    {
                        dottedOverlay:"twoxtwowhite",
                        delay:9000000000000000000000000000000,
                        startwidth:1200,
                        startheight:360,
                        hideThumbs:200,

                        thumbWidth:100,
                        thumbHeight:50,
                        thumbAmount:1,


                        simplifyAll:"off",

                        navigationType:"none",
                        navigationArrows:"none",
                        navigationStyle:"custom",

                        touchenabled:"on",
                        onHoverStop:"on",
                        nextSlideOnWindowFocus:"off",

                        swipe_threshold: 0.7,
                        swipe_min_touches: 1,
                        drag_block_vertical: false,



                        keyboardNavigation:"on",

                        navigationHAlign:"center",
                        navigationVAlign:"bottom",
                        navigationHOffset:0,
                        navigationVOffset:20,

                        soloArrowLeftHalign:"left",
                        soloArrowLeftValign:"center",
                        soloArrowLeftHOffset:20,
                        soloArrowLeftVOffset:0,

                        soloArrowRightHalign:"right",
                        soloArrowRightValign:"center",
                        soloArrowRightHOffset:20,
                        soloArrowRightVOffset:0,

                        shadow:1,
                        fullWidth:"on",
                        fullScreen:"off",

                        spinner:"spinner2",

                        stopLoop:"on",
                        stopAfterLoops:0,
                        stopAtSlide:0,

                        shuffle:"off",

                        autoHeight:"off",
                        forceFullWidth:"off",


                        hideTimerBar:"on",
                        hideThumbsOnMobile:"off",
                        hideNavDelayOnMobile:1500,
                        hideBulletsOnMobile:"off",
                        hideArrowsOnMobile:"off",
                        hideThumbsUnderResolution:0,

                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        startWithSlide:0					});



            }
        });	/*ready*/

    </script>


    <style type="text/css">
        #rev_slider_3_1_wrapper .tp-loader.spinner2{ background-color: #5c0733 !important; }
    </style>
    <div class="tp-bannershadow tp-shadow1" style="width: 1841px; left: 0px;"></div><div style="visibility:hidden;display:none" class="tp-leftarrow tparrows custom"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1-320x200.jpg&quot;);"></div><div class="tp-arr-imgholder2"></div><div class="tp-arr-titleholder">Slide</div><div class="tp-arr-subtitleholder"></div></div></div></div><div style="visibility:hidden;display:none" class="tp-rightarrow tparrows custom"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;https://stillwaterslaw.com/wp-content/uploads/2016/02/BANNER-LOGO-WEB1-320x200.jpg&quot;);"></div><div class="tp-arr-imgholder2"></div><div class="tp-arr-titleholder">Slide</div><div class="tp-arr-subtitleholder"></div></div></div></div></div>

<br>
<div class="section def_section">
    <div class="wrapper section_wrapper">
        <div id="fw_c" class="clearfix tf_single_page">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1423038329279 full-width-section " style="margin-left: -336.5px; padding-left: 336.5px; padding-right: 336.5px; visibility: visible; width: 100%; margin-right: 0px;">
                <div class="vc_span3 wpb_column vc_column_container ">
                    <div class="wpb_wrapper">

                        <div class="wpb_single_image wpb_content_element vc_align_left rda_fadeInLeft  already-visible animated fadeInLeft">
                            <div class="wpb_wrapper">

                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="938" height="1813" src="https://stillwaterslaw.com/wp-content/uploads/2015/02/electric-bulb-1.1-e1447065006801.png" class="vc_single_image-img attachment-full" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vc_span8 wpb_column vc_column_container ">
                    <div class="wpb_wrapper">
                        <h2 style="font-size: 30px;color: #5c0733;text-align: left;font-family:Lato;font-weight:900;font-style:normal" class="vc_custom_heading">Intellectual Property (IP)</h2>
                        <div class="wpb_text_column wpb_content_element  rda_fadeInRight already-visible animated fadeInRight">
                            <div class="wpb_wrapper" id="ct_n0qr0dk702olxsod0dah">
                                <p style="text-align: justify;">Our IP department offers a broad spectrum of services.</p>
                                <p style="text-align: justify;">From searches to registration, renewals, annuities, assignments, agency, distributorship, franchising, licensing, transfer of technology, copyright depository, piracy, infringement, passing-off, boarder enforcement measures, customs related assistance, product registration, and dispute resolution, with 3 Partners, 9 Associates and over 12 support staff in the department, our practice is adequately equipped to handle matters arising from and relating to all aspects intellectual property laws in Nigeria, Angola and within the OAPI dispensation (OAPI is an intellectual property union comprising of 17 (seventeen) African countries made up of Benin, Burkina Faso, Cameroon, Central African Republic, Chad, Congo, Gabon, Guinea, Guinea-Bissau, Ivory Coast, Mali, Mauritania, Niger, Senegal and Togo; from our offices in Cameroon).</p>
                                <p style="text-align: justify;">In over 14 years, we have achieved tremendous success in IP administration before the various Registries and an enviable reputation in dispute resolution matters before the administrative tribunals, arbitration panels, trial and appellate courts. We represent blue chip companies, major brands and start-ups. With a portfolio base of over 8,000 files, we are always available to provide the individual attention and quality service that has helped many of our clients to grow with us over the years.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="vc_row wpb_row vc_row-fluid  ">
                <div class="vc_span12 wpb_column vc_column_container ">
                    <div class="wpb_wrapper">
                        <h2 style="text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Practice on Intellectual Property</h2><script>jQuery.noConflict(); var $ = jQuery; </script><div id="random2s5egxf1pqppidpwd3cx_port" class="portfolio"><style>#random2s5egxf1pqppidpwd3cx_port .filter_type_1 #options .selected a,#random2s5egxf1pqppidpwd3cx_port .filter_type_1 #options a:hover{background:#5c0733; border:1px solid #5c0733; color:#fff;}#random2s5egxf1pqppidpwd3cx_port .filter_type_1 #options a{border:1px solid #ecf0f1}#random2s5egxf1pqppidpwd3cx_port .filter_type_1 #options a{background:transparent}#random2s5egxf1pqppidpwd3cx_port .filter_type_1 #options a{color:#000000}</style><style>#random2s5egxf1pqppidpwd3cx_port .ico_link{background:#5c0733!important;}</style><div class="portfolio_block image-grid columns5 port_type_1 rd_hover_bubba thumbnail_type_2" id="list" style="position: relative; height: 0px;">

                            </div><!-- .portfolio_block -->

                            <div class="rd_clear"><!-- ClearFix --></div></div>  <script>



                            jQuery.noConflict();
                            var $ = jQuery;
                            "use strict";

                            /*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!CONFIG!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
                            var html_template = "port_type_1";
                            var thumbnail = "thumbnail_type_2";
                            var now_open_works = 0;
                            var first_load = true;

                            /*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!CONFIG!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/



                            function get_portfolio_works (this_obj) {

                                if(typeof(this_obj)=="undefined") {data_option_value="*";}

                                else {var data_option_value = this_obj.attr("data-option-value");}



                                if (first_load == true) {

                                    works_per_load = 8;

                                    first_load = false;

                                } else {

                                    works_per_load = 4;

                                }



                                $.ajax({

                                    type: "POST",

                                    url: mixajaxurl,

                                    data: "html_template="+html_template+"&now_open_works="+now_open_works+"&action=get_portfolio_works"+"&works_per_load="+works_per_load+"&thumbnail="+thumbnail+"&tags=Intellectual Property&category=Intellectual Property",

                                    success: function(result){

                                        if(result.length<1){

                                            $("#random2s5egxf1pqppidpwd3cx_port .load_more_cont").hide("fast");

                                        }




                                        now_open_works = now_open_works + works_per_load;

                                        var $newItems = $(result);
                                        $("#random2s5egxf1pqppidpwd3cx_port .portfolio_block").isotope( 'insert', $newItems, function() {



                                            $("#random2s5egxf1pqppidpwd3cx_port .portfolio_block").ready(function(){
                                                $("#random2s5egxf1pqppidpwd3cx_port .portfolio_block").isotope('layout');
                                                //Portfolio
                                                $('#random2s5egxf1pqppidpwd3cx_port .portfolio_content').each(function(){
                                                    $(this).css('margin-top', Math.floor(-1*($(this).height()/2))+'px');
                                                });
                                            });

                                            $("#random2s5egxf1pqppidpwd3cx_port .portfolio_block").isotope('layout');

                                            $(window).trigger('resize');





                                        });
                                        $("#random2s5egxf1pqppidpwd3cx_port .optionset li a").each(function() {

                                            var filter_class = $(this).attr('data-option-value');
                                            if ($('#random2s5egxf1pqppidpwd3cx_port').find(filter_class).length) { // implies *not* zero
                                                $(this).parent('li').show();
                                            }else{
                                                $(this).parent('li').hide();
                                            }



                                        });


                                        $('a.prettyPhoto').prettyPhoto();

                                        $(window).trigger('resize');



                                        $(".refresh_icn").removeClass("fa-spin");

                                        $(".refresh_icn").removeClass("fa-refresh");

                                        $("#random2s5egxf1pqppidpwd3cx_port .portfolio_block").isotope('layout');

                                        $(".refresh_icn").addClass("fa-plus");



                                    }



                                });

                            }



                            $("#random2s5egxf1pqppidpwd3cx_port .get_portfolio_works_btn").click(function(){

                                $(".refresh_icn").removeClass("fa-plus");

                                $(".refresh_icn").addClass("fa-refresh");

                                $(".refresh_icn").addClass("fa-spin");

                                get_portfolio_works();


                                $(window).trigger('resize');
                                $("#random2s5egxf1pqppidpwd3cx_port .portfolio_block").isotope('layout');

                                return false;



                            });

                            /* load at start */
                            $(window).load(function(){
                                get_portfolio_works();


                                $(window).trigger('resize');
                                $("#random2s5egxf1pqppidpwd3cx_port .portfolio_block").isotope('layout');

                                $("#random2s5egxf1pqppidpwd3cx_port .optionset li a").each(function() {

                                    var filter_class = $(this).attr('data-option-value');
                                    if ($('#random2s5egxf1pqppidpwd3cx_port').find(filter_class).length){ // implies *not* zero
                                        $(this).parent('li').show();
                                    }else{
                                        $(this).parent('li').hide();
                                    }


                                });

                                function watchport() {

                                    $("#random2s5egxf1pqppidpwd3cx_port .portfolio_block").isotope('layout');


                                }

                                setInterval(watchport, 100);



                            });
                        </script>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1441373183421"><div class="wpb_column vc_column_container vc_span2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearfix" style="padding-top:0px"></div><style>.randmr5hirf7l3x32dwasa8b_post .widget_post_title a,.randmr5hirf7l3x32dwasa8b_post .rp_date a,.randmr5hirf7l3x32dwasa8b_post .rp_date { color:#fff;}.randmr5hirf7l3x32dwasa8b_post .rp_date a,.randmr5hirf7l3x32dwasa8b_post .rp_date {padding-bottom:0; margin-bottom:0;}.randmr5hirf7l3x32dwasa8b_post .blog_box_content {position:absolute; bottom: 20px ;min-width: 100%; text-align: center;}.cbp_type01 .recent_port_ctn:hover .blog_box_content {bottom:85px;}.recent_port_ctn:hover .blog_img_link,.recent_port_ctn:hover .blog_post_link{bottom:35px}</style>
                                        <script type="text/javascript" charset="utf-8">
                                            var j$ = jQuery;
                                            j$.noConflict();
                                            "use strict";
                                            //setup up Carousel
                                            j$(window).load(function() {
                                                j$(".rd_nla8di1p0nec36xi1ltn.rp_sc ul").carouFredSel({
                                                    responsive: true,
                                                    width: "100%",
                                                    height: "variable",
                                                    scroll: 1,prev: ".rd_nla8di1p0nec36xi1ltn.rp_left",
                                                    next: ".rd_nla8di1p0nec36xi1ltn.rp_right",auto: false,
                                                    items: {
                                                        width: 330,
                                                        height: "variable",
                                                        visible: {
                                                            min: 1,
                                                            max: 2
                                                        }
                                                    }
                                                });
                                            });
                                        </script><div class="rd_nla8di1p0nec36xi1ltn rp_sc cbp_type01 clearfix"><div class="rp_nav">
                                                <p class="rd_nla8di1p0nec36xi1ltn rp_left hidden" style="display: none; margin-bottom: 0px;"></p>
                                                <p class="rd_nla8di1p0nec36xi1ltn rp_right hidden" style="display: none; margin-bottom: 0px;"></p>
                                            </div><div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 154px; height: 161px; margin: 0px; overflow: hidden;"><ul style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 462px; height: 161px;">
                                                    <li class="carousel_recent_post brsc" style="width: 154px;">
                                                        <div class="recent_port_ctn randmr5hirf7l3x32dwasa8b_post ">
                                                            <div class="blog_box">
                                                                <img width="768" height="1000" src="https://stillwaterslaw.com/wp-content/uploads/2015/09/copyright-768x1000.png" class="attachment-768x1000 size-768x1000 wp-post-image" alt="" title=""><a href="https://stillwaterslaw.com/wp-content/uploads/2015/09/copyright.png" class="prettyPhoto blog_img_link_ctn"><span class="blog_img_link"></span></a><a class="blog_post_link_ctn" href="https://stillwaterslaw.com/copyright/"><span class="blog_post_link"></span></a>
                                                                <div class="blog_box_content">
                                                                    <h5 class="widget_post_title"> <a href="https://stillwaterslaw.com/copyright/" rel="bookmark" title="Permanent Link to Copyright">
                                                                            Copyright</a> </h5>
                                                                    <div class="clearfix"></div>

                                                                    <p class="rp_date"><a href="https://stillwaterslaw.com/category/intellectual-property/" rel="category tag">Intellectual Property</a>,<a href="https://stillwaterslaw.com/category/qot-3/" rel="category tag">Qot 3</a> / September 3, 2015</p>




                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>




                                                </ul></div>

                                        </div>

                                        <div class="clearfix" style="padding-top:0px"></div></div></div></div><div class="wpb_column vc_column_container vc_span2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearfix" style="padding-top:0px"></div><style>.randryhu1obqz4mvqffgtc0x_post .widget_post_title a,.randryhu1obqz4mvqffgtc0x_post .rp_date a,.randryhu1obqz4mvqffgtc0x_post .rp_date { color:#fff;}.randryhu1obqz4mvqffgtc0x_post .rp_date a,.randryhu1obqz4mvqffgtc0x_post .rp_date {padding-bottom:0; margin-bottom:0;}.randryhu1obqz4mvqffgtc0x_post .blog_box_content {position:absolute; bottom: 20px ;min-width: 100%; text-align: center;}.cbp_type01 .recent_port_ctn:hover .blog_box_content {bottom:85px;}.recent_port_ctn:hover .blog_img_link,.recent_port_ctn:hover .blog_post_link{bottom:35px}</style>
                                        <script type="text/javascript" charset="utf-8">
                                            var j$ = jQuery;
                                            j$.noConflict();
                                            "use strict";
                                            //setup up Carousel
                                            j$(window).load(function() {
                                                j$(".rd_x37yahqgpk06ylo79lga.rp_sc ul").carouFredSel({
                                                    responsive: true,
                                                    width: "100%",
                                                    height: "variable",
                                                    scroll: 1,prev: ".rd_x37yahqgpk06ylo79lga.rp_left",
                                                    next: ".rd_x37yahqgpk06ylo79lga.rp_right",auto: false,
                                                    items: {
                                                        width: 330,
                                                        height: "variable",
                                                        visible: {
                                                            min: 1,
                                                            max: 1
                                                        }
                                                    }
                                                });
                                            });
                                        </script><div class="rd_x37yahqgpk06ylo79lga rp_sc cbp_type01 clearfix"><div class="rp_nav">
                                                <p class="rd_x37yahqgpk06ylo79lga rp_left hidden" style="display: none; margin-bottom: 0px;"></p>
                                                <p class="rd_x37yahqgpk06ylo79lga rp_right hidden" style="display: none; margin-bottom: 0px;"></p>
                                            </div><div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 154px; height: 161px; margin: 0px; overflow: hidden;"><ul style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 462px; height: 161px;">
                                                    <li class="carousel_recent_post brsc" style="width: 154px;">
                                                        <div class="recent_port_ctn randryhu1obqz4mvqffgtc0x_post ">
                                                            <div class="blog_box">
                                                                <img width="768" height="1000" src="https://stillwaterslaw.com/wp-content/uploads/2015/02/trademark-monogram-750x410-768x1000.jpg" class="attachment-768x1000 size-768x1000 wp-post-image" alt="" title=""><a href="https://stillwaterslaw.com/wp-content/uploads/2015/02/trademark-monogram-750x410.jpg" class="prettyPhoto blog_img_link_ctn"><span class="blog_img_link"></span></a><a class="blog_post_link_ctn" href="https://stillwaterslaw.com/trade-service-marks/"><span class="blog_post_link"></span></a>
                                                                <div class="blog_box_content">
                                                                    <h5 class="widget_post_title"> <a href="https://stillwaterslaw.com/trade-service-marks/" rel="bookmark" title="Permanent Link to Trade &amp; Service Marks">
                                                                            Trade &amp; Service Marks</a> </h5>
                                                                    <div class="clearfix"></div>

                                                                    <p class="rp_date"><a href="https://stillwaterslaw.com/category/intellectual-property/" rel="category tag">Intellectual Property</a>,<a href="https://stillwaterslaw.com/category/qot-4/" rel="category tag">Qot 4</a> / September 3, 2015</p>




                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>




                                                </ul></div>

                                        </div>

                                        <div class="clearfix" style="padding-top:0px"></div></div></div></div><div class="wpb_column vc_column_container vc_span2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearfix" style="padding-top:0px"></div><style>.randm97qzmqxi332h46y1yq7_post .widget_post_title a,.randm97qzmqxi332h46y1yq7_post .rp_date a,.randm97qzmqxi332h46y1yq7_post .rp_date { color:#fff;}.randm97qzmqxi332h46y1yq7_post .rp_date a,.randm97qzmqxi332h46y1yq7_post .rp_date {padding-bottom:0; margin-bottom:0;}.randm97qzmqxi332h46y1yq7_post .blog_box_content {position:absolute; bottom: 20px ;min-width: 100%; text-align: center;}.cbp_type01 .recent_port_ctn:hover .blog_box_content {bottom:85px;}.recent_port_ctn:hover .blog_img_link,.recent_port_ctn:hover .blog_post_link{bottom:35px}</style>
                                        <script type="text/javascript" charset="utf-8">
                                            var j$ = jQuery;
                                            j$.noConflict();
                                            "use strict";
                                            //setup up Carousel
                                            j$(window).load(function() {
                                                j$(".rd_r5me8hhiry9sclqaxqoz.rp_sc ul").carouFredSel({
                                                    responsive: true,
                                                    width: "100%",
                                                    height: "variable",
                                                    scroll: 1,prev: ".rd_r5me8hhiry9sclqaxqoz.rp_left",
                                                    next: ".rd_r5me8hhiry9sclqaxqoz.rp_right",auto: false,
                                                    items: {
                                                        width: 330,
                                                        height: "variable",
                                                        visible: {
                                                            min: 1,
                                                            max: 1
                                                        }
                                                    }
                                                });
                                            });
                                        </script><div class="rd_r5me8hhiry9sclqaxqoz rp_sc cbp_type01 clearfix"><div class="rp_nav">
                                                <p class="rd_r5me8hhiry9sclqaxqoz rp_left hidden" style="display: none; margin-bottom: 0px;"></p>
                                                <p class="rd_r5me8hhiry9sclqaxqoz rp_right hidden" style="display: none; margin-bottom: 0px;"></p>
                                            </div><div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 154px; height: 161px; margin: 0px; overflow: hidden;"><ul style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 462px; height: 161px;">
                                                    <li class="carousel_recent_post brsc" style="width: 154px;">
                                                        <div class="recent_port_ctn randm97qzmqxi332h46y1yq7_post ">
                                                            <div class="blog_box">
                                                                <img width="768" height="1000" src="https://stillwaterslaw.com/wp-content/uploads/2015/02/url-e1447065585542-768x1000.jpeg" class="attachment-768x1000 size-768x1000 wp-post-image" alt="" title=""><a href="https://stillwaterslaw.com/wp-content/uploads/2015/02/url-e1447065585542.jpeg" class="prettyPhoto blog_img_link_ctn"><span class="blog_img_link"></span></a><a class="blog_post_link_ctn" href="https://stillwaterslaw.com/patents-designs/"><span class="blog_post_link"></span></a>
                                                                <div class="blog_box_content">
                                                                    <h5 class="widget_post_title"> <a href="https://stillwaterslaw.com/patents-designs/" rel="bookmark" title="Permanent Link to Patents &amp; Designs">
                                                                            Patents &amp; Designs</a> </h5>
                                                                    <div class="clearfix"></div>

                                                                    <p class="rp_date"><a href="https://stillwaterslaw.com/category/intellectual-property/" rel="category tag">Intellectual Property</a>,<a href="https://stillwaterslaw.com/category/qot-5/" rel="category tag">Qot 5</a> / September 3, 2015</p>




                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>




                                                </ul></div>

                                        </div>

                                        <div class="clearfix" style="padding-top:0px"></div></div></div></div><div class="wpb_column vc_column_container vc_span2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearfix" style="padding-top:0px"></div><style>.randxfxc751cni6w9g2h5fia_post .widget_post_title a,.randxfxc751cni6w9g2h5fia_post .rp_date a,.randxfxc751cni6w9g2h5fia_post .rp_date { color:#fff;}.randxfxc751cni6w9g2h5fia_post .rp_date a,.randxfxc751cni6w9g2h5fia_post .rp_date {padding-bottom:0; margin-bottom:0;}.randxfxc751cni6w9g2h5fia_post .blog_box_content {position:absolute; bottom: 20px ;min-width: 100%; text-align: center;}.cbp_type01 .recent_port_ctn:hover .blog_box_content {bottom:85px;}.recent_port_ctn:hover .blog_img_link,.recent_port_ctn:hover .blog_post_link{bottom:35px}</style>
                                        <script type="text/javascript" charset="utf-8">
                                            var j$ = jQuery;
                                            j$.noConflict();
                                            "use strict";
                                            //setup up Carousel
                                            j$(window).load(function() {
                                                j$(".rd_zp3lfcbxo0udv8s27plr.rp_sc ul").carouFredSel({
                                                    responsive: true,
                                                    width: "100%",
                                                    height: "variable",
                                                    scroll: 1,prev: ".rd_zp3lfcbxo0udv8s27plr.rp_left",
                                                    next: ".rd_zp3lfcbxo0udv8s27plr.rp_right",auto: false,
                                                    items: {
                                                        width: 330,
                                                        height: "variable",
                                                        visible: {
                                                            min: 1,
                                                            max: 1
                                                        }
                                                    }
                                                });
                                            });
                                        </script><div class="rd_zp3lfcbxo0udv8s27plr rp_sc cbp_type01 clearfix"><div class="rp_nav">
                                                <p class="rd_zp3lfcbxo0udv8s27plr rp_left hidden" style="display: none; margin-bottom: 0px;"></p>
                                                <p class="rd_zp3lfcbxo0udv8s27plr rp_right hidden" style="display: none; margin-bottom: 0px;"></p>
                                            </div><div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 154px; height: 161px; margin: 0px; overflow: hidden;"><ul style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 462px; height: 161px;">
                                                    <li class="carousel_recent_post brsc" style="width: 154px;">
                                                        <div class="recent_port_ctn randxfxc751cni6w9g2h5fia_post ">
                                                            <div class="blog_box">
                                                                <img width="768" height="1000" src="https://stillwaterslaw.com/wp-content/uploads/2015/10/drugs-e1447064367247-768x1000.png" class="attachment-768x1000 size-768x1000 wp-post-image" alt="" title=""><a href="https://stillwaterslaw.com/wp-content/uploads/2015/10/drugs-e1447064367247.png" class="prettyPhoto blog_img_link_ctn"><span class="blog_img_link"></span></a><a class="blog_post_link_ctn" href="https://stillwaterslaw.com/product-registration/"><span class="blog_post_link"></span></a>
                                                                <div class="blog_box_content">
                                                                    <h5 class="widget_post_title"> <a href="https://stillwaterslaw.com/product-registration/" rel="bookmark" title="Permanent Link to Products Registration">
                                                                            Products Registration</a> </h5>
                                                                    <div class="clearfix"></div>

                                                                    <p class="rp_date"><a href="https://stillwaterslaw.com/category/intellectual-property/" rel="category tag">Intellectual Property</a>,<a href="https://stillwaterslaw.com/category/qot-2/" rel="category tag">Qot 2</a> / September 3, 2015</p>




                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>




                                                </ul></div>

                                        </div>

                                        <div class="clearfix" style="padding-top:0px"></div></div></div></div><div class="wpb_column vc_column_container vc_span2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearfix" style="padding-top:0px"></div><style>.randzhx5anj16wheqj6s5hea_post .widget_post_title a,.randzhx5anj16wheqj6s5hea_post .rp_date a,.randzhx5anj16wheqj6s5hea_post .rp_date { color:#fff;}.randzhx5anj16wheqj6s5hea_post .rp_date a,.randzhx5anj16wheqj6s5hea_post .rp_date {padding-bottom:0; margin-bottom:0;}.randzhx5anj16wheqj6s5hea_post .blog_box_content {position:absolute; bottom: 20px ;min-width: 100%; text-align: center;}.cbp_type01 .recent_port_ctn:hover .blog_box_content {bottom:85px;}.recent_port_ctn:hover .blog_img_link,.recent_port_ctn:hover .blog_post_link{bottom:35px}</style>
                                        <script type="text/javascript" charset="utf-8">
                                            var j$ = jQuery;
                                            j$.noConflict();
                                            "use strict";
                                            //setup up Carousel
                                            j$(window).load(function() {
                                                j$(".rd_mzgle7y0vq9944gt0vir.rp_sc ul").carouFredSel({
                                                    responsive: true,
                                                    width: "100%",
                                                    height: "variable",
                                                    scroll: 1,prev: ".rd_mzgle7y0vq9944gt0vir.rp_left",
                                                    next: ".rd_mzgle7y0vq9944gt0vir.rp_right",auto: false,
                                                    items: {
                                                        width: 330,
                                                        height: "variable",
                                                        visible: {
                                                            min: 1,
                                                            max: 1
                                                        }
                                                    }
                                                });
                                            });
                                        </script><div class="rd_mzgle7y0vq9944gt0vir rp_sc cbp_type01 clearfix"><div class="rp_nav">
                                                <p class="rd_mzgle7y0vq9944gt0vir rp_left hidden" style="display: none; margin-bottom: 0px;"></p>
                                                <p class="rd_mzgle7y0vq9944gt0vir rp_right hidden" style="display: none; margin-bottom: 0px;"></p>
                                            </div><div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 154px; height: 161px; margin: 0px; overflow: hidden;"><ul style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 462px; height: 161px;">
                                                    <li class="carousel_recent_post brsc" style="width: 154px;">
                                                        <div class="recent_port_ctn randzhx5anj16wheqj6s5hea_post ">
                                                            <div class="blog_box">
                                                                <img width="768" height="1000" src="https://stillwaterslaw.com/wp-content/uploads/2015/02/domain_name-768x1000.jpg" class="attachment-768x1000 size-768x1000 wp-post-image" alt="" title=""><a href="https://stillwaterslaw.com/wp-content/uploads/2015/02/domain_name.jpg" class="prettyPhoto blog_img_link_ctn"><span class="blog_img_link"></span></a><a class="blog_post_link_ctn" href="https://stillwaterslaw.com/domain-name/"><span class="blog_post_link"></span></a>
                                                                <div class="blog_box_content">
                                                                    <h5 class="widget_post_title"> <a href="https://stillwaterslaw.com/domain-name/" rel="bookmark" title="Permanent Link to Domain Name">
                                                                            Domain Name</a> </h5>
                                                                    <div class="clearfix"></div>

                                                                    <p class="rp_date"><a href="https://stillwaterslaw.com/category/intellectual-property/" rel="category tag">Intellectual Property</a>,<a href="https://stillwaterslaw.com/category/qot-1/" rel="category tag">Qot 1</a> / September 3, 2015</p>




                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>




                                                </ul></div>

                                        </div>

                                        <div class="clearfix" style="padding-top:0px"></div></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
