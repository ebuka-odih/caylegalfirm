
@extends('pages.layout.app')
@section('content')


<div>
    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin: 0px auto; background-color: rgb(233, 233, 233); padding: 0px; max-height: 360px; height: 360px; overflow: visible;">
        <!-- START REVOLUTION SLIDER 4.6.9 fullwidth mode -->
        <div id="rev_slider_2_1" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive" style="max-height: 360px; height: 360px;">
            <ul class="tp-revslider-mainul" style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: 360px;">	<!-- SLIDE  -->
                <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="900" data-thumb="https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law-320x200.png" data-fstransition="fadetobottomfadefromtop" data-fsmasterspeed="700" data-fsslotamount="7" data-saveperformance="off" data-title="Slide" class="tp-revslider-slidesli active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1;">
                    <!-- MAIN IMAGE -->
                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center bottom" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" data-lazydone="undefined" src="https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law.png" data-src="https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law.png" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law.png&quot;); background-size: cover; background-position: center bottom; width: 100%; height: 100%; opacity: 1; visibility: inherit;"></div><div class="tp-dottedoverlay twoxtwowhite"></div></div>
                    <!-- LAYERS -->
                </li>
                <!-- SLIDE  -->
                <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="900" data-thumb="https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law-320x200.png" data-saveperformance="off" data-title="Slide" class="tp-revslider-slidesli" style="width: 100%; height: 100%; overflow: hidden; visibility: hidden; opacity: 0; z-index: 18;">
                    <!-- MAIN IMAGE -->
                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center bottom" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" data-lazydone="undefined" src="https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law.png" data-src="https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law.png" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law.png&quot;); background-size: cover; background-position: center bottom; width: 100%; height: 100%; visibility: hidden; opacity: 0;"></div><div class="tp-dottedoverlay twoxtwowhite"></div></div>
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
                tpopt.container = jQuery('#rev_slider_2_1');
                tpopt.fullScreen = "off";
                tpopt.forceFullWidth="off";

                tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
            };

            /* CALL PLACEHOLDER */
            setREVStartSize();


            var tpj=jQuery;
            tpj.noConflict();
            var revapi2;

            tpj(document).ready(function() {

                if(tpj('#rev_slider_2_1').revolution == undefined){
                    revslider_showDoubleJqueryError('#rev_slider_2_1');
                }else{
                    revapi2 = tpj('#rev_slider_2_1').show().revolution(
                        {
                            dottedOverlay:"twoxtwowhite",
                            delay:9000000000000000,
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
                            drag_block_vertical: true,



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
            #rev_slider_2_1_wrapper .tp-loader.spinner2{ background-color: #5c0733 !important; }
        </style>
        <div class="tp-bannershadow tp-shadow1" style="width: 1841px; left: 0px;"></div><div style="visibility:hidden;display:none" class="tp-leftarrow tparrows custom hidearrows"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law-320x200.png&quot;);"></div><div class="tp-arr-imgholder2"></div><div class="tp-arr-titleholder">Slide</div><div class="tp-arr-subtitleholder"></div></div></div></div><div style="visibility:hidden;display:none" class="tp-rightarrow tparrows custom hidearrows"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;https://stillwaterslaw.com/wp-content/uploads/2015/08/global-law-320x200.png&quot;);"></div><div class="tp-arr-imgholder2"></div><div class="tp-arr-titleholder">Slide</div><div class="tp-arr-subtitleholder"></div></div></div></div></div><!-- END REVOLUTION SLIDER --></div>


<div class="section def_section">
    <div class="wrapper section_wrapper">
        <div id="fw_c" class="clearfix tf_single_page">
            <div class="vc_row wpb_row vc_row-fluid  " style="padding-top: 100px;">
                <div class="vc_span3 wpb_column vc_column_container ">
                    <div class="wpb_wrapper">

                        <div class="wpb_single_image wpb_content_element vc_align_left rda_fadeInLeft  already-visible animated fadeInLeft">
                            <div class="wpb_wrapper">

                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="988" height="1432" src="https://stillwaterslaw.com/wp-content/uploads/2015/02/puzzle-world.png" class="vc_single_image-img attachment-full" alt="" srcset="https://stillwaterslaw.com/wp-content/uploads/2015/02/puzzle-world.png 988w, https://stillwaterslaw.com/wp-content/uploads/2015/02/puzzle-world-207x300.png 207w, https://stillwaterslaw.com/wp-content/uploads/2015/02/puzzle-world-707x1024.png 707w" sizes="(max-width: 988px) 100vw, 988px"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vc_span8 wpb_column vc_column_container ">
                    <div class="wpb_wrapper">
                        <h2 style="font-size: 30px;color: #5c0733;text-align: left;font-family:Lato;font-weight:900;font-style:normal" class="vc_custom_heading">Corporate Commercial</h2>
                        <div class="wpb_text_column wpb_content_element  rda_fadeInRight already-visible animated fadeInRight">
                            <div class="wpb_wrapper" id="ct_dgngpfb39o1hlzbyebxj">
                                <p style="text-align: justify;">Ashburnlagal Law Firm corporate commercial team provides comprehensive business advisory services for clients in all aspects of corporate and commercial matters, including corporate governance, formation of companies, mergers and acquisitions, regulatory compliance, board advisory, risk management, joint ventures, banking and finance, project finance, infrastructures, taxation, labour, competition and the cultural and creative industries. We take great pride in aiming to fully protect the general interests of corporations, investors, and interested parties at all times.</p>
                                <p style="text-align: justify;">At Ashburnlagal, we understand the need for compliance and corporate governance. For this reason, our Corporate/Commercial law department is adequately equipped with the principles of best practice in the diverse areas of corporate practice, as well as the necessary experience and exposure in company secretarial matters.</p>
                                <p style="text-align: justify;">We have advised on the most cutting-edge transactions and have a broad range of clients from start-ups to listed companies.</p>
                                <p style="text-align: justify;">Some of our recent transactions include, amongst others, advise and structure of: a multi-million US Dollars commercial airline project in Nigeria, the construction of a US$170m distillery plant, the restructuring of a US$500 million steel plant, the acquisition of US$43 million trawlers, and the construction of a US$10million paint factory on a JV basis.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="vc_row wpb_row vc_row-fluid  ">
                <div class="vc_span12 wpb_column vc_column_container ">
                    <div class="wpb_wrapper">
                        <h2 style="text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Practice on Corporate Commercial</h2><div class="clearfix" style="padding-top:0px"></div><style>.randw709wreiuhjlc7a159qo_post .widget_post_title a,.randw709wreiuhjlc7a159qo_post .rp_date a,.randw709wreiuhjlc7a159qo_post .rp_date { color:#fff;}.randw709wreiuhjlc7a159qo_post .rp_date a,.randw709wreiuhjlc7a159qo_post .rp_date {padding-bottom:0; margin-bottom:0;}.randw709wreiuhjlc7a159qo_post .blog_box_content {position:absolute; bottom: 20px ;min-width: 100%; text-align: center;}.cbp_type01 .recent_port_ctn:hover .blog_box_content {bottom:85px;}.recent_port_ctn:hover .blog_img_link,.recent_port_ctn:hover .blog_post_link{bottom:35px}</style>
                        <script type="text/javascript" charset="utf-8">
                            var j$ = jQuery;
                            j$.noConflict();
                            "use strict";
                            //setup up Carousel
                            j$(window).load(function() {
                                j$(".rd_lgfh5caijiiqq5bh8vqk.rp_sc ul").carouFredSel({
                                    responsive: true,
                                    width: "100%",
                                    height: "variable",
                                    scroll: 1,prev: ".rd_lgfh5caijiiqq5bh8vqk.rp_left",
                                    next: ".rd_lgfh5caijiiqq5bh8vqk.rp_right",auto: false,
                                    items: {
                                        width: 330,
                                        height: "variable",
                                        visible: {
                                            min: 1,
                                            max: 4
                                        }
                                    }
                                });
                            });
                        </script><div class="rd_lgfh5caijiiqq5bh8vqk rp_sc cbp_type01 clearfix"><div class="rp_nav">
                                <p class="rd_lgfh5caijiiqq5bh8vqk rp_left hidden" style="display: none; margin-bottom: 0px;"></p>
                                <p class="rd_lgfh5caijiiqq5bh8vqk rp_right hidden" style="display: none; margin-bottom: 0px;"></p>
                            </div><div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 1168px; height: 341px; margin: 0px; overflow: hidden;"><ul style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 3504px; height: 341px;">
                                    <li class="carousel_recent_post brsc" style="width: 292px;">
                                        <div class="recent_port_ctn randw709wreiuhjlc7a159qo_post ">
                                            <div class="blog_box">
                                                <img width="768" height="1000" src="https://stillwaterslaw.com/wp-content/uploads/2015/02/shaking-hands-1237145-1920x1280-e1447065633703-768x1000.jpg" class="attachment-768x1000 size-768x1000 wp-post-image" alt="" title=""><a href="https://stillwaterslaw.com/wp-content/uploads/2015/02/shaking-hands-1237145-1920x1280-e1447065633703.jpg" class="prettyPhoto blog_img_link_ctn"><span class="blog_img_link"></span></a><a class="blog_post_link_ctn" href="https://stillwaterslaw.com/joint-venture/"><span class="blog_post_link"></span></a>
                                                <div class="blog_box_content">
                                                    <h5 class="widget_post_title"> <a href="https://stillwaterslaw.com/joint-venture/" rel="bookmark" title="Permanent Link to Joint Venture">
                                                            Joint Venture</a> </h5>
                                                    <div class="clearfix"></div>

                                                    <p class="rp_date"><a href="https://stillwaterslaw.com/category/corporate-commerical/" rel="category tag">Corporate Commerical</a> / September 3, 2015</p>




                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="carousel_recent_post brsc" style="width: 292px;">
                                        <div class="recent_port_ctn randw709wreiuhjlc7a159qo_post ">
                                            <div class="blog_box">
                                                <img width="768" height="1000" src="https://stillwaterslaw.com/wp-content/uploads/2015/07/business-law-1238207-e1447066445713-768x1000.jpg" class="attachment-768x1000 size-768x1000 wp-post-image" alt="" title=""><a href="https://stillwaterslaw.com/wp-content/uploads/2015/07/business-law-1238207-e1447066445713.jpg" class="prettyPhoto blog_img_link_ctn"><span class="blog_img_link"></span></a><a class="blog_post_link_ctn" href="https://stillwaterslaw.com/regulatory-compliance/"><span class="blog_post_link"></span></a>
                                                <div class="blog_box_content">
                                                    <h5 class="widget_post_title"> <a href="https://stillwaterslaw.com/regulatory-compliance/" rel="bookmark" title="Permanent Link to Regulatory Compliance">
                                                            Regulatory Compliance</a> </h5>
                                                    <div class="clearfix"></div>

                                                    <p class="rp_date"><a href="https://stillwaterslaw.com/category/corporate-commerical/" rel="category tag">Corporate Commerical</a> / September 3, 2015</p>




                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="carousel_recent_post brsc" style="width: 292px;">
                                        <div class="recent_port_ctn randw709wreiuhjlc7a159qo_post ">
                                            <div class="blog_box">
                                                <img width="768" height="1000" src="https://stillwaterslaw.com/wp-content/uploads/2015/02/security-lock-1512132-e1447065655707-768x1000.jpg" class="attachment-768x1000 size-768x1000 wp-post-image" alt="" title=""><a href="https://stillwaterslaw.com/wp-content/uploads/2015/02/security-lock-1512132-e1447065655707.jpg" class="prettyPhoto blog_img_link_ctn"><span class="blog_img_link"></span></a><a class="blog_post_link_ctn" href="https://stillwaterslaw.com/7932-2/"><span class="blog_post_link"></span></a>
                                                <div class="blog_box_content">
                                                    <h5 class="widget_post_title"> <a href="https://stillwaterslaw.com/7932-2/" rel="bookmark" title="Permanent Link to Securities">
                                                            Securities</a> </h5>
                                                    <div class="clearfix"></div>

                                                    <p class="rp_date"><a href="https://stillwaterslaw.com/category/corporate-commerical/" rel="category tag">Corporate Commerical</a> / September 3, 2015</p>




                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="carousel_recent_post brsc" style="width: 292px;">
                                        <div class="recent_port_ctn randw709wreiuhjlc7a159qo_post ">
                                            <div class="blog_box">
                                                <img width="768" height="1000" src="https://stillwaterslaw.com/wp-content/uploads/2015/02/signed-away-1-1549840-e1447065675123-768x1000.jpg" class="attachment-768x1000 size-768x1000 wp-post-image" alt="" title=""><a href="https://stillwaterslaw.com/wp-content/uploads/2015/02/signed-away-1-1549840-e1447065675123.jpg" class="prettyPhoto blog_img_link_ctn"><span class="blog_img_link"></span></a><a class="blog_post_link_ctn" href="https://stillwaterslaw.com/business-formation/"><span class="blog_post_link"></span></a>
                                                <div class="blog_box_content">
                                                    <h5 class="widget_post_title"> <a href="https://stillwaterslaw.com/business-formation/" rel="bookmark" title="Permanent Link to Business Formation">
                                                            Business Formation</a> </h5>
                                                    <div class="clearfix"></div>

                                                    <p class="rp_date"><a href="https://stillwaterslaw.com/category/corporate-commerical/" rel="category tag">Corporate Commerical</a> / September 3, 2015</p>




                                                </div>
                                            </div>
                                        </div>
                                    </li>




                                </ul></div>

                        </div>

                        <div class="clearfix" style="padding-top:0px"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
