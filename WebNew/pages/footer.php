<style>
    a:hover {
        text-decoration: none;
    }

    .footer-top {
        background: rgb(70, 70, 70);
        max-height: 1000px;
        display: grid;
        grid-template-columns: 60% 20% 20%;
        box-shadow: 0px -5px 10px rgb(70, 70, 70);
        color: white;
        margin: 0 0 0 0;
        padding: 30px;
        position: relative;
    }

    .box1 {
        padding: 0 40px 0 15px;

    }

    .box2 {
        padding: 0 40px 0 15px;
    }

    .box3 {
        padding: 0 40px 0 15px;
    }

    .box4 {
        padding: 0 40px 0 15px;
    }

    


    .dropbutton {
        width: 100px;
        height: 30px;
        padding: 5px;
        border-radius: 10px;
        margin: 5px 0 0 5px;
        color: white;
        border: none;
        background-color: #4CAF50;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        display: inline-block;
        cursor: pointer;

    }

    .insta {
        background: radial-gradient(circle at 30% 107%, #867d1b 0%, #eccb36 5%, #da2919 45%, #aa167b 60%, #112e83 90%);
    }

    .socialMedia {
        display: flex;
        float: left;
    }

    .tagline {
        text-align: center;
        font-size: 12px;
    }

    .selectCategory {
        width: 100px;
        height: 20px;
        font-family: Arial;
    }

    input[type=button],
    input[type=submit],
    input[type=reset] {
        background-color: #4CAF50;
        border: none;
        color: white;
        text-decoration: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #cacaca;
        color: black;
        cursor: pointer;
    }

    .social-icon {
        height: 30px;
        width: auto;
        margin: 0 0 0 10px;
    }

    @media only screen and (max-width: 600px) {
        .footer-top {
            display: inline-grid;
            grid-template-columns: 100%;
            position: relative;
            justify-items: center;
            text-align: center;
        }

        .footer-top>div {
            padding: 0px;
            display: block;

        }

        .socialMedia {
            margin: 0 0 0 15%;
        }
    }
</style>
<footer>
    <div class="footer-top">
        <div class="box1">
            <h3>About Us</h3>

            <p>We,<span> FutureCom</span> are a set of well wishers who are willing to provide free services for our customers in order to make the company Market Research easier. </br>We have gone through hard times when we were assigned to do our Market research for one of our projects. We initially thought of building a site which facilitates our users to make them easy to find what company details they want accoring to their wished category or place</p>

        </div>

        <div class="box3">
            <p class="">
                <h3>Connect us through...</h3>
                <p>Given below are our social media pages</p>
                <div class="socialMedia">
                    <a href="https://www.facebook.com/"> <img src="../video/icons/fb.svg" class="social-icon" alt=""> </a></br>
                    <a href="https://www.instagram.com/"> <img src="../video/icons/insta.svg" class="social-icon" alt=""> </a></br>
                    <a href="https://wa.me/+94779897506"><img src="../video/icons/twitter.svg" class="social-icon" alt=""> </a></br>
                    <a href="https://www.twitter.com/"><img src="../video/icons/whtsp.svg" class="social-icon" alt=""> </a>
                </div>
        </div>
    </div>
    <div class="box4">

        <div class="tagline">
            <hr>
            This site was build as a group project by Group 2 Members of IS1109 Course for the First Year, Second Semester of Information Systems Degree Programme at UCSC
            <hr>
        </div>
    </div>

</footer>