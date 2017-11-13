@extends('layouts.master')

@section('content')
    <div class="container-default">
    
    <div id="slides">
        <img src="images/sliders_images/1.png" alt="Some alt text">
        <img src="images/sliders_images/2.jpg" alt="Some alt text">
        <img src="images/sliders_images/3.jpg" alt="Some alt text">
        <img src="images/sliders_images/4.jpg" alt="Some alt text">
        <img src="images/sliders_images/5.jpg" alt="Some alt text">
    </div>
    <div class="container">
    <article id="slider_content1">
        <h3>NEED LOGO?</h3>
        <p class="responsive_button">we have a lot of experience,<br>and our motto is “be visual”...</p>
    </article>
    <article id="slider_content2">
        <h3>NEED A WEBSITE?</h3>
        <p style="color:  #454545" class="responsive_button">our developers can make any kind of code,<br>
        which will make your website or app working good!  </p>
    </article>
    <article id="slider_content3">
        <h3>NEED A RECOGNIZABLE IDENTITY?</h3>
        <p class="responsive_button">corporate identity of your company will define who you are...<br>
        we can improve existing, or create a completely new one.</p>
    </article>
    <article id="slider_content4">
        <h3>NEED A BROCHURE?</h3>
        <p style="color:  #454545" class="responsive_button">we are dealing with brochure design <br>
        on a daily basis. bi-fold, tri-fold, z-fold, c-fold.
        you name it...</p>
    </article>
    <article id="slider_content5">
        <h3>NEED A WEB SITE DESIGN THAT ROCKS?</h3>
        <p class="responsive_button" style="color:  #454545" >our team can make stunning design for <br>
        your web page. we can code it too. </p>
    </article>
    </div>
    
</div>
<div id="big2" class="big23"></div>
<div class="container">
    <div id="onama" >
        <p>
        we are a creative team of three individuals with field of expertise in graphic design and web design/development. two developers, one designer, each of us has over ten years of experience. services we offer are all sorts of graphic design (corporate and branding, infographics, packaging, websites, apps, etc.)
        </p>
        <a href="aboutus.php" id="more">...MORE</a>
    </div>
</div>
<div class="container">
    <div id="comments-about-us" >
        <h2>COMMENTS ABOUT US</h2><br>
        <a href="https://www.elance.com/s/edit/kojekude_studio/job-history/?t=1">
            <p>
            “I am extremely happy with the work provided. I experienced excellent service. The designs were great and the communication
            and response times were above and beyond. I would highly recommend Kojekude and look forward to working with them again in the future.”
            </p>
            <h3>- ronkravmaga</h3><br>
        </a>
        <a href="https://www.elance.com/s/edit/kojekude_studio/job-history/?t=1">
            <p>
            “Great contractor! Very professional! Already re-hired! High quality results”
            </p>
            <h3>- baaklini</h3><br>
        </a>
        <a href="https://www.elance.com/s/edit/kojekude_studio/job-history/?t=1">
            <p>
            “Great work as usual!!! Highly recommended!”
            </p>
            <h3>- baaklini</h3><br>
        </a>
    </div>
</div>
<div id="big3" class="big3"></div>
<div class="container-fluid" id="middle-menu">
    <div class="raw">
    <div class="container" id="boxcontent">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <article>
                <a href="portfolio/" style="width: 126px;margin: 0 auto;">
                    <input id="develop" type="image" src="images/developing.png " alt="developing"/>
                </a>
                <h3>DEVELOPING</h3>
                <p  id="text-developinga">
                need a website?<br />
                need a cool app?<br />
                our developers will bring<br />
                a life to your company.
                </p>
            </article>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <article>
                <a href="portfolio/">
                    <input id="desi" type="image" src="images/design.png " alt="design"/>
                </a>
                <h3>DESIGN</h3>
                <p id="text-design">
                our designers<br/>
                will make your business<br/>
                recognizable and visible<br />
                to your target group.<br/>
                </p>
         </article>
            
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <article>
                <a href="portfolio/">
                    <input id="ready" type="image" src="images/web-design.png " alt="web design"/>
                </a>
                <h3>WEB-DESIGN</h3>
                <p id="text-ready">
                we love doing <br />
                internet presentations.<br />
                web design, app design,<br />
                banners...you name it!
                </p>
        </article>
            
        </div>
    </div>






  </div>
</div>
@stop