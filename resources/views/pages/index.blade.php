@extends('pages.layout.app')
@section('content')


    <section id="main-content" class="hero-container">
        <div class="hero-container__inner">
            <section class="hero-image-block">

                <div id="dynamic-hero-image-container" class="hero-image-block__image">
                    <img id="dynamic-hero-image" src="#" alt="">
                    <div class="hero-image-block__desc primary-darkest-background">Charlie, our client</div>
                </div>

                <div class="hero-image-block__content hero-image-block__content--index">

                    <h1>Expert Hand.<br />
                        Human Touch.</h1>
                    <p><strong>At Caylegalfirm, we pride ourselves in understanding people. We understand that everybody's situation is different, be it business or personal.</strong></p>
                    <p>Whatever happens, if you need legal advice or support with your financial planning, we’re here.  We’ll listen, get to know you and your situation, and give you all the advice you need.</p>
                    <div class="hero-image-block__trustpilot-block">
                        <!-- TrustBox widget - Micro Combo -->
                        <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6ffb0d04a076446a9af" data-businessunit-id="5477214300006400057bcbbd" data-style-height="20px" data-style-width="100%" data-theme="dark" style="position: relative;">
                            <iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" src="https://widget.trustpilot.com/trustboxes/5419b6ffb0d04a076446a9af/index.html?templateId=5419b6ffb0d04a076446a9af&amp;businessunitId=5477214300006400057bcbbd#locale=en-GB&amp;styleHeight=20px&amp;styleWidth=100%25&amp;theme=dark" style="position: relative; height: 20px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                        </div>
                        <!-- End TrustBox widget -->
                    </div>
                </div>

                <script type="text/javascript">
                    //responsive Cloudinary imagery thats created on the fly
                    var heroWidth = document.getElementById('dynamic-hero-image-container').offsetWidth;
                    var heroHeight = document.getElementById('dynamic-hero-image-container').offsetHeight;


                    var imageURL = "https://res.cloudinary.com/irwin-mitchell-llp/image/fetch/f_auto,q_auto:best/https://www.irwinmitchell.com/medialibrary/IrwinMitchellcom - NEW/campaign images- NEW/human-touch/heroes/charlie-front.jpg";


                    imageURL = imageURL.replace('q_auto:best', 'q_auto:best,w_' + heroWidth + ',h_' + heroHeight + ',c_fill,g_face');

                    document.getElementById('dynamic-hero-image').src = imageURL;
                    document.getElementById('dynamic-hero-image').setAttribute("style", "max-height: none;");

                    function updateHeroDimensions() {
                        var heroWidth = document.getElementById('dynamic-hero-image-container').offsetWidth;
                        var heroHeight = document.getElementById('dynamic-hero-image-container').offsetHeight;


                        var imageURL = "https://res.cloudinary.com/irwin-mitchell-llp/image/fetch/f_auto,q_auto:best/https://www.irwinmitchell.com/medialibrary/IrwinMitchellcom - NEW/campaign images- NEW/human-touch/heroes/charlie-front.jpg";


                        imageURL = imageURL.replace('q_auto:best', 'q_auto:best,w_' + heroWidth + ',h_' + heroHeight + ',c_fill,g_face');
                        document.getElementById('dynamic-hero-image').src = imageURL;
                    }

                    window.onresize = updateHeroDimensions;
                </script>

            </section>
        </div>


        <div class="container hero-form form--primary">
            <h2>How can we help? Contact our advisers today</h2>
            <div class="grid-parent grid-parent--sm-3-3-3-3">
                <div class="grid-item">
                    <label for="imcommaincontainer_0_homepageheroform_0_fullNameTextBox">Your name*</label>
                    <input name="imcommaincontainer_0$homepageheroform_0$fullNameTextBox" type="text" maxlength="50" id="imcommaincontainer_0_homepageheroform_0_fullNameTextBox" class="full-width" placeholder="First and last" aria-required="true" />
                </div>
                <div class="grid-item">
                    <label for="imcommaincontainer_0_homepageheroform_0_emailTextBox">Your email*</label>
                    <input name="imcommaincontainer_0$homepageheroform_0$emailTextBox" maxlength="256" id="imcommaincontainer_0_homepageheroform_0_emailTextBox" class="full-width" placeholder="example@email.com" type="email" aria-required="true" />
                </div>
                <div class="grid-item">
                    <label for="imcommaincontainer_0_homepageheroform_0_phoneTextBox">Your phone number*</label>
                    <input name="imcommaincontainer_0$homepageheroform_0$phoneTextBox" maxlength="20" id="imcommaincontainer_0_homepageheroform_0_phoneTextBox" class="full-width" type="tel" placeholder="Mobile or landline" aria-required="true" />

                </div>
                <div class="grid-item">
                    <label for="enquiryTypeDropDown">How can we help?*</label>
                    <select name="imcommaincontainer_0$homepageheroform_0$enquiryTypeDropDown" id="imcommaincontainer_0_homepageheroform_0_enquiryTypeDropDown" class="full-width" aria-required="true">
                        <option value="">Enquiry type</option>
                        <option value="Personal Legal Services">Personal Legal Services</option>
                        <option value="Wealth Management">Wealth Management</option>
                        <option value="Business Legal Services">Business Legal Services</option>

                    </select>

                </div>
            </div>
            <div class="align-items--flex align-items--justify-between">
                <input type="submit" name="imcommaincontainer_0$homepageheroform_0$submitButton" value="Send" id="imcommaincontainer_0_homepageheroform_0_submitButton" class="cta cta--primary" />
                <button class="cta cta--primary" type="button" disabled="disabled" style="display: none;" id="hiddenButtonFixed">Sending <i class="fa fa-spinner" aria-hidden="true"></i></button>
                <span class="hero-form__disclaimer">This data will only be used by Caylegalfirm for processing your query and for no other purpose.</span>
            </div>
        </div>






        <div class="grid-parent grid-parent--sm-4-4-4 signposting signposting--three-col signposting--after-form">



            <nav class="grid-item" aria-label="Personal Legal Services links">
                <header>
                    <p>Most visited in</p>
                    <h1>Personal Legal Services</h1>
                </header>
                <ul>

                    <li>
                        <a href="personal/personal-injury-compensation.html" >Personal Injury Claims</a>
                    </li>

                    <li>
                        <a href="personal/medical-negligence.html" >Medical Negligence Claims</a>
                    </li>

                    <li>
                        <a href="personal/family-law.html" >Divorce & Family Law</a>
                    </li>

                    <li>
                        <a href="personal/conveyancing-property.html" >Conveyancing & Property</a>
                    </li>

                    <li>
                        <a href="personal/will-trust-estate-disputes.html" class="last">Will, Trust & Estate Disputes</a>
                    </li>

                    <li><a href="personal.html" class="view-all">View more services</a></li>
                </ul>
            </nav>




            <nav class="grid-item" aria-label="Wealth Management Services links">
                <header>
                    <p>Most visited in</p>
                    <h1>Wealth Management Services</h1>
                </header>
                <ul>

                    <li>
                        <a href="wealth-management/asset-management.html" >Asset Management For Personal Injury</a>
                    </li>

                    <li>
                        <a href="wealth-management/financial-planning.html" >Financial Planning</a>
                    </li>

                    <li>
                        <a href="wealth-management/investment-management.html" class="last">Investment Management</a>
                    </li>

                    <li><a href="wealth-management.html" class="view-all">View more services</a></li>
                </ul>
            </nav>




            <nav class="grid-item" aria-label="Business Legal Services links">
                <header>
                    <p>Most visited in</p>
                    <h1>Business Legal Services</h1>
                </header>
                <ul>

                    <li>
                        <a href="business/commercial-litigation-and-dispute-resolution.html" >Commercial Litigation & Dispute Resolution</a>
                    </li>

                    <li>
                        <a href="business/employment-law.html" >Employment</a>
                    </li>

                    <li>
                        <a href="business/real-estate.html" >Real Estate</a>
                    </li>

                    <li>
                        <a href="business/corporate.html" >Corporate</a>
                    </li>

                    <li>
                        <a href="business/banking-and-finance.html" class="last">Banking & Finance</a>
                    </li>

                    <li><a href="business.html" class="view-all">View more services</a></li>
                </ul>
            </nav>


        </div>
    </section>

    <section class="copy-image-split-block">
        <div class="container section-padding ">
            <div class="grid-parent grid-parent--sm-6-6">
                <div class="grid-item">
                    <h1>The Human Touch That Mattered</h1>
                    <p>Along with our colleagues and our communities, our clients make us who we are.</p>
                    <p>That's why we're proud to feature five of our clients on our latest TV ads, telling their stories of how we helped them through life's ups and downs.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-solicitors-block">
        <div class="container section-padding">
            <h1>Contact Our Solicitors</h1>
            <p>
            <p>Get in touch with our team for expert legal advice and assistance.</p></p>
            <div class="grid-parent grid-parent--med-4-4-4 margin-top-l">


                <div class="grid-item">


                    <div class="contact-solicitors-block__icon">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                    </div>


                    <h2>Call Us</h2>


                    <p>Call us free on <a class"default-link contact-solicitors-block__phone-link" href="tel:03701500100"><span class="rTapNumber206261" style="visibility: visible;">0370 1500 100</a></span>.</p>



                </div>

                <div class="grid-item">

                    <a class="contact-solicitors-block__icon-link" href="contact-us.html">Email Us
                        <div class="contact-solicitors-block__icon">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                        </div>

                    </a>
                    <h2>Email Us</h2>


                    <p><a href="contact-us.html">Send us an email</a> and we'll get in touch.  </p>

                </div>

                <div class="grid-item">

                    <div class="contact-solicitors-block__icon-link" id="_lpChatBtnContactBlockIcon"></div>
                    <h2>Chat With Us</h2>
                    <span class="display-block margin-top-m"><div id="_lpChatBtnContactBlock"> </div> is available 24/7, 365 days a year</span>


                </div>

            </div>
        </div>
    </section>



    <section class="offices-block primary-background">
        <div class="container section-padding grid-parent grid-parent--sm-4-8">
            <div class="grid-item offices-block__image">
                <img class="lazyload" data-src="https://res.cloudinary.com/irwin-mitchell-llp/image/upload/v1618996085/offices__map--pls.png" alt="">
            </div>

            <div class="grid-item">
                <h1>Our Offices</h1>
                <p>Our offices are located in major cities throughout the UK and have excellent transport links.</p>

                <div class="grid-parent grid-parent--6-6 grid-parent--sm-3-3-3-3 margin-top-l">

                    <div class="grid-item">
                        <ul>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/birmingham.html">Birmingham</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/bristol.html">Bristol</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/cambridge.html">Cambridge</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/chichester.html">Chichester</a></li>

                        </ul>
                    </div>

                    <div class="grid-item">
                        <ul>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/gatwick.html">Gatwick</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/glasgow.html">Glasgow</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/leeds.html">Leeds</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/london.html">London</a></li>

                        </ul>
                    </div>

                    <div class="grid-item">
                        <ul>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/manchester.html">Manchester</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/middlesbrough.html">Middlesbrough</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/newbury.html">Newbury</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/newcastle.html">Newcastle</a></li>

                        </ul>
                    </div>

                    <div class="grid-item">
                        <ul>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/reading.html">Reading</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/sheffield.html">Sheffield</a></li>

                            <li><a class="display-block reverse-link" href="our-offices/united-kingdom/southampton.html">Southampton</a></li>

                        </ul>
                    </div>

                </div>

                <hr>
                <label class="margin-top-0" for="search__offices">Enter your postcode to find your nearest office.</label>
                <div class="search-bar">
                    <input type="search" placeholder="e.g S3 8DT" id="search__offices">
                    <button id="officeSearchButton" class="search-button" type="button" name="button">Search</button>
                </div>

            </div>
        </div>
    </section>
    <script type="text/javascript">
        docReady(function () {
            searchBoxSubmit.wireUp("search__offices", "officeSearchButton", "/office-search-results?q=");
        });
    </script>

    <section class="reviews">
        <div class="grid__container grid__container--narrow">
            <div class="grid-parent grid-parent--sm-6-6 grid-parent--med-7-5 grid-parent--lg-8-4 reviews__top-section">
                <div class="grid-item trustpilot-overall-content">
                    <h1 class="trustpilot-overall-content__heading">What Our Clients Say</h1>
                    <p class="trustpilot-overall-content__copy">We truly value and appreciate the feedback we receive from our clients, as we look to improve the services we offer on an ongoing basis.</p>
                    <a class="trustpilot-reviews-button trustpilot-reviews-button--desktop" role="button" href="https://uk.trustpilot.com/review/www.irwinmitchell.com" target ="_blank">Read More Feedback</a>
                </div>
                <div class="grid-item trustpilot-overall-score">
                    <div class="trustpilot-widget--api trustpilot-overall-score__widget">
                        <a href="https://uk.trustpilot.com/review/www.irwinmitchell.com" target="_blank">
                            <div class="trustpilot-widget--api__logo">
                                <img class="lazyload" data-src="/images/trustpilot/2018rebrand/Trustpilot_brandmark_gr-blk_RGB.svg" alt="">
                            </div>
                            <div class="trustpilot-widget--api__star-rating">
                                <div class="trustpilot-rating trustpilot-rating--4halfstar">
                                    <img class="lazyload" data-src="/images/Trustpilot_ratings_4halfstar-RGB.svg" alt="4.5">
                                </div>
                            </div>
                            <div class="trustpilot-widget--api__business-info" itemscope itemtype="http://data-vocabulary.org/Review-aggregate">
                                <meta itemprop="itemreviewed" content="Caylegalfirm" />
                                <span itemprop="rating" itemscope itemtype="http://data-vocabulary.org/Rating">
                                    <meta itemprop="average" content="4.7" />
                                    <meta itemprop="best" content="5" />
                                    <meta itemprop="worst" content="1" />
                                    TRUSTSCORE <strong>4.7</strong>
                                </span>


                                <p class="trustpilot-widget--api__business-info__count">Based on <span itemprop="count">7485</span> reviews</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid-parent grid-parent--sm-4-4-4 trustpilot-reviews">

                <div class="grid-item trustpilot-reviews__item">
                    <div class="trustpilot-rating trustpilot-rating--5star">
                        <img class="lazyload"  data-src="/images/Trustpilot_ratings_5star-RGB.svg" alt="5">
                    </div>
                    <a class="trustpilot-reviews__title" href="https://uk.trustpilot.com/reviews/5ac3ce2e6d33bc073c5502e5">Very impressed</a>
                    <div class="trustpilot-reviews__details">
                        <p>I am so happy i chose Caylegalfirm as my solicitors, they have done nothing but help me threw my recovery since my tragic accident, I am still recovering and they do their absolute best to make my life easier…</p>
                    </div>
                    <span class="trustpilot-reviews__user">Kayley hicken</span>
                </div>

                <div class="grid-item trustpilot-reviews__item">
                    <div class="trustpilot-rating trustpilot-rating--5star">
                        <img class="lazyload"  data-src="/images/Trustpilot_ratings_5star-RGB.svg" alt="5">
                    </div>
                    <a class="trustpilot-reviews__title" href="https://uk.trustpilot.com/reviews/5d4c4263f018690bd04b0214">Sheffield conveyancers are simply the best!</a>
                    <div class="trustpilot-reviews__details">
                        <p><p>Fast friendly and efficient service from Sheffield team all dealt with electronically due to distance with buying on south coast... The price quoted was fair, fixed and compared favourably against other large firms. Would definitely use again and recommend to anyone.</p>
                        <br></p>
                    </div>
                    <span class="trustpilot-reviews__user">Client</span>
                </div>

                <div class="grid-item trustpilot-reviews__item">
                    <div class="trustpilot-rating trustpilot-rating--5star">
                        <img class="lazyload"  data-src="/images/Trustpilot_ratings_5star-RGB.svg" alt="5">
                    </div>
                    <a class="trustpilot-reviews__title" href="https://uk.trustpilot.com/reviews/5ac8595a6d33bc08ec89452c">Medical Negligence Solicitors</a>
                    <div class="trustpilot-reviews__details">
                        <p><p>I would highly recommend this firm. My medical negligence claim was handled very well by my solicitors Margaret Ryan and Rebecca Haigh. They have kept me well informed…</p></p>
                    </div>
                    <span class="trustpilot-reviews__user">Abby</span>
                </div>

            </div>

            <div class="reviews__bottom-section">
                <a class="trustpilot-reviews-button trustpilot-reviews-button--mobile" href="https://uk.trustpilot.com/review/www.irwinmitchell.com" role="button" target="_blank">Read More Feedback</a>
            </div>
        </div>
    </section>


    <section class="news-and-media-block">
        <div class="container section-padding">
            <h1>News &amp; Insights</h1>
            <div class="grid-parent grid-parent--sm-6-6">

                <div class="grid-item">
                    <div class="star-campaign">

                        <picture>
                            <source media="(min-width: 1100px)" srcset="https://res.cloudinary.com/irwin-mitchell-llp/image/fetch/f_auto,q_auto:best/https://www.irwinmitchell.com/medialibrary/IrwinMitchellcom%20-%20NEW/news%20and%20insights%20images%20-%20NEW/2020/step-home-page.jpg%3fc%3d1%26ct%3d0%26cl%3d0%26cw%3d544%26ch%3d605">
                            <source media="(min-width: 800px)" srcset="https://res.cloudinary.com/irwin-mitchell-llp/image/fetch/f_auto,q_auto:best/https://www.irwinmitchell.com/medialibrary/IrwinMitchellcom%20-%20NEW/news%20and%20insights%20images%20-%20NEW/2020/step-home-page.jpg%3fc%3d1%26ct%3d0%26cl%3d0%26cw%3d544%26ch%3d767">
                            <source media="(min-width: 700px)" srcset="https://res.cloudinary.com/irwin-mitchell-llp/image/fetch/f_auto,q_auto:best/https://www.irwinmitchell.com/medialibrary/IrwinMitchellcom%20-%20NEW/news%20and%20insights%20images%20-%20NEW/2020/step-home-page.jpg%3fc%3d1%26ct%3d0%26cl%3d0%26cw%3d544%26ch%3d852">
                            <source media="(min-width: 601px)" srcset="https://res.cloudinary.com/irwin-mitchell-llp/image/fetch/f_auto,q_auto:best/https://www.irwinmitchell.com/medialibrary/IrwinMitchellcom%20-%20NEW/news%20and%20insights%20images%20-%20NEW/2020/step-home-page.jpg">
                            <source media="(min-width: 200px)" srcset="https://res.cloudinary.com/irwin-mitchell-llp/image/fetch/f_auto,q_auto:best/https://www.irwinmitchell.com/medialibrary/IrwinMitchellcom%20-%20NEW/news%20and%20insights%20images%20-%20NEW/2020/step-home-page.jpg%3fc%3d1%26ct%3d0%26cl%3d0%26cw%3d539%26ch%3d305">
                            <img class="lazyload" data-src="https://res.cloudinary.com/irwin-mitchell-llp/image/fetch/f_auto,q_auto:best/https://www.irwinmitchell.com/medialibrary/IrwinMitchellcom - NEW/news and insights images - NEW/2020/step-home-page.jpg" alt="#">
                        </picture>

                        <div class="star-campaign-text">
                            <h2>Legal Team of the Year</h2>
                            <p>We've won the Private Client Legal Team of the Year (large firm) category at the STEP 2020/21 Private Client Awards.</p>
                            <a href="news-and-insights/newsandmedia/2020/december/irwin-mitchells-private-wealth-team-wins-top-industry-award.html" class="star-campaign__button" >Read about the award</a>
                        </div>

                    </div>
                </div>
                <div class="grid-item">

                    <div class="news-item position-relative margin-top-xl">
                        <span class="display-block">UK Powerhouse</span>

                        <a class="default-link" href="https://irwinmitchell.turtl.co/story/uk-powerhouse-overcoming-disruption-in-2022-consumer/page/1"><h2>Overcoming Disruption in the Consumer Sector</h2></a>
                        <p>The retail sector has faced a number of challenges recently. Our latest report focusses on what businesses need to do to overcome disruption in 2022.</p>

                    </div>

                    <div class="news-item position-relative margin-top-xl">
                        <span class="display-block">The Caylegalfirm Podcast</span>

                        <a class="default-link" href="news-and-insights/podcast.html"><h2>Data Protection and Privacy Claims</h2></a>
                        <p>Caylegalfirm solicitors Joanne Bone, Emma Yates, and Tom Barnard discuss the impact of recent data protection of cases for businesses and other organisations.</p>

                    </div>

                    <div class="news-item position-relative margin-top-xl">
                        <span class="display-block">Events</span>

                        <a class="default-link" href="news-and-insights/events.html"><h2>Webinars</h2></a>
                        <p>Our regular webinars offer free insight from our experts about a&nbsp;wide range of legal and financial issues</p>

                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
