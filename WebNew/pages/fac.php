<style>
    .content {
     
        color: black; 
        text-align: center;
        font-size: 100%;
        font: inherit;
        visibility: visible;
        animation-delay: 0.4s;
        animation-name: fadeInLeft;
        width: 100%;
        text-align: center !important;
        grid-template-columns: 100%;
        margin-left: auto !important;
        margin-right: auto   !important;
    }

    .in-content-left {
        margin: 20px;
        padding: 20px;
        border: 10px;
        font-size: 100%;
        font: inherit;
        float: left;
        vertical-align: top;
        height: 300px;
        width: 400px;
        box-shadow: 5px 7px 23px 0px rgb(58 52 82 / 56%);
    }

    .banner {
        text-align: center;
        width: 100%;
        height: auto;
        color: white;

    }

  

    .last {
        display: block;
        float: bottom;
    }

    * {
        margin: 0;
    }

    html,


    .wrapper {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        margin: 0 auto -142px;
        /* the bottom margin is the negative value of the footer's height */
    }

    .footer,
    .push {
        height: 142px;
        /* .push must be the same height as .footer */
    }

    .middle {
        float: none;
        align-items: center;
    }

    .serviceicon {
        padding-top: 10px;
    }

    .serviceCont {
        padding: 10px;
    }
    h2{
        color: rgb(70, 70, 70);
    }
</style>



</head>

<div class="complete">
    <div class="top-nav">
        <?php
            include "nav.html";
        ?>
        <div class="banner">
            <img src="img/Services.png" width="100%">
            <div class="content">
                <div class="wrapper">
                    <div class="grid">
                        <div class="in-content-left ">
                            <h2> Graphic Designing </h2></br>
                            <div class="serviceicon">
                                <img src="./icons/graphic-design.svg" class="social-icon" alt="" style="height: 100px">
                                <div class="serviceCont">
                                    <p>We server our Graphic Design, Web Design, Advertising and Marketing Solutions online. Graphic Design in Srilanka our skilled graphic designers’ services that will ensure that everything is as perfect as it should be. Our creative artists will design your logo, your business paperwork or any other company material</p>
                                </div>
                            </div>

                        </div>
                        <div class="in-content-left ">
                            <h2>Business Consultancy </h2>
                            <div class="serviceicon">
                                <img src="./icons/consultant.svg" class="social-icon" alt="" style="height: 100px">
                                <div class="serviceCont">
                                    <p>We server our Graphic Design, Web Design, Advertising and Marketing Solutions online. Graphic Design in Srilanka our skilled graphic designers’ services that will ensure that everything is as perfect as it should be. Our creative artists will design your logo, your business paperwork or any other company material</p>
                                </div>
                            </div>
                        </div>
                        <div class="in-content-left ">
                            <h2> Strategy Development Programs</h2>
                            <div class="serviceicon">
                                <img src="./icons/analysis.svg" class="social-icon" alt="" style="height: 100px">
                                <div class="serviceCont">
                                    <p>We server our Graphic Design, Web Design, Advertising and Marketing Solutions online. Graphic Design in Srilanka our skilled graphic designers’ services that will ensure that everything is as perfect as it should be. Our creative artists will design your logo, your business paperwork or any other company material</p>
                                </div>
                            </div>
                        </div>
                        <div class="in-content-left  ">
                            <h2> Secure Company Details storage </h2>
                            <div class="serviceicon">
                                <img src="./icons/padlock.svg" class="social-icon" alt="" style="height: 100px">
                                <div class="serviceCont">
                                    <p>We server our Graphic Design, Web Design, Advertising and Marketing Solutions online. Graphic Design in Srilanka our skilled graphic designers’ services that will ensure that everything is as perfect as it should be. Our creative artists will design your logo, your business paperwork or any other company material</p>
                                </div>
                            </div>
                        </div>
                        <div class="in-content-left ">
                            <h2> Company Development Webinars </h2>
                            <div class="serviceicon">
                                <img src="./icons/webinar.svg" class="social-icon" alt="" style="height: 100px">
                                <div class="serviceCont">
                                    <p>We server our Graphic Design, Web Design, Advertising and Marketing Solutions online. Graphic Design in Srilanka our skilled graphic designers’ services that will ensure that everything is as perfect as it should be. Our creative artists will design your logo, your business paperwork or any other company material</p>
                                </div>
                            </div>
                        </div>
                        <div class="in-content-left ">
                            <h2>Search Engine Optimization </h2>
                            <div class="serviceicon">
                                <img src="./icons/seo.svg" class="social-icon" alt="" style="height: 100px">
                                <div class="serviceCont">
                                    <p>We server our Graphic Design, Web Design, Advertising and Marketing Solutions online. Graphic Design in Srilanka our skilled graphic designers’ services that will ensure that everything is as perfect as it should be. Our creative artists will design your logo, your business paperwork or any other company material</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Content Division-->
                    <?php include "footer.php" ?>
                </div>
                
            </div>

           
        </div>

        <div class="footer">
        

        </div>
    </div>


</div>