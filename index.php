<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a1ba7e80e8.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>BeClutch - Sports & Rec Department Management</title>

    <style>
        /* --- Base Reset & Body (from style.css) --- */
        html, body, div, span, h1, h2, h3, h4, p, a, i, img, header, footer, main, section {
            margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline;
        }
        body { line-height: 1; }
        html { height: 100%; }
        body {
            font-family: 'Cambria', sans-serif; 
            color: #fff;
        }
        a { text-decoration: none; }

        /* --- Header (FIXED: Perfect Centering & No Stripes) --- */
        #header {
            background-color: #7FB522; /* Green from style.css */
            /* Vertical Centering Calculation: (Total Height 120px - Logo Height 67px) / 2 = 26.5px padding */
            padding-top: 26.5px;
            padding-bottom: 26.5px; 
            height: 120px; /* Target total height */
            line-height: normal;
            width: 100%;
            box-sizing: border-box; /* Padding is counted within the height */
        }
        #header-inner {
            overflow: hidden;
            margin: 0 auto;
            max-width: 1080px;
            height: 100%;
        }
        .header-logo {
            /* PATH UPDATED: Removed leading slash. Assumes logo is in 'img' folder. */
            background-image: url('img/logo.png');
            width: 221px;
            height: 67px;
            margin-top: 0; 
            float: left;
            transition: opacity 0.3s ease-in-out;
        }
        .header-logo:hover { opacity: 0.7; }

        /* --- Main Content (Textured Blue Background) --- */
        #main {
            width: 100%;
            background-color: #1C6C9B; 
            background-image: repeating-linear-gradient(
                45deg,
                rgba(0, 0, 0, 0.1),
                rgba(0, 0, 0, 0.1) 1px,
                transparent 1px,
                transparent 5px
            );
            color: #fff; 
            padding: 60px 0;
            min-height: 500px; 
        }
        .start-page-section-inner {
            max-width: 1080px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }
        .splash-chooser h2 {
            font-family: 'Cambria', sans-serif; 
            font-size: 36px;
            line-height: 50px;
            color: #fff; 
            text-align: center;
            margin-bottom: 20px;
        }
        .splash-chooser .subtitle {
            font-size: 18px;
            text-align: center;
            color: #fff; 
            margin-bottom: 50px;
        }
        
        .text-half-cont {
            overflow: hidden;
            width: 100%;
        }
        .text-half-cont div:nth-child(1) {
            width: calc(50% - 20px);
            float: left;
        }
        .text-half-cont div:nth-child(2) {
            width: calc(50% - 20px);
            float: right;
        }

        /* Styles for the chooser boxes */
        .splash-box {
            display: block;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 0; 
            overflow: hidden; 
            color: #555;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            min-height: 280px;
            box-sizing: border-box;
        }
        .splash-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1); 
            border-color: #7FB522; 
        }

        /* --- ADDED: Styles for new banner/text containers --- */
        .splash-box-banner {
            /* This height will be overridden by the inline style */
            height: 90px; 
            width: 100%;
        }
        .splash-box-text-cont {
            /* This padding is being overridden by the inline style */
            padding: 40px 30px;
        }

        .splash-box h3 {
            font-family: 'Cambria', sans-serif;
            font-size: 28px;
            color: #1C6C9B; 
            margin-bottom: 15px;
        }
        .splash-box p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
        }

        /* --- Footer (from style.css) --- */
        #footer {
            background-color: #6A912B; 
            color: #ffffff;
            width: 100%;
        }
        #footer-inner {
            text-align: center;
            padding: 40px 20px;
            margin: 0 auto;
            max-width: 1080px;
            font-size: 13px;
        }

        /* --- Responsive (from style.css) --- */
        @media only screen and (max-width: 768px) {
            /* Mobile header is correctly handled by float:none and margin: auto */
            #header {
                height: 90px;
                padding-top: 0; 
                padding-bottom: 0;
            }
            .header-logo {
                /* PATH UPDATED: Removed leading slash. Assumes logo is in 'img' folder. */
                background-image: url('img/logo-2x.png'); 
                background-size: 180px;
                background-repeat: no-repeat;
                width: 180px;
                margin-top: 19px; /* This margin is what centers it vertically on mobile */
                margin-left: auto;
                margin-right: auto;
                float: none; 
                display: block;
            }
            .splash-chooser h2 {
                font-size: 28px;
                line-height: 1.4;
            }
            .text-half-cont div:nth-child(1),
            .text-half-cont div:nth-child(2) {
                width: 100%;
                float: none;
                margin-bottom: 30px;
            }
            .splash-box {
                min-height: 0;
            }
            #main {
                padding: 40px 0;
            }
        }
    </style>
</head>
<body>
    <div id="header">
        <div id="header-inner">
            <a class="header-logo" href="/"></a>
        </div>
    </div>

    <main id="main">
        <section class="splash-chooser">
            <div class="start-page-section-inner">
                <h2>Welcome to BeClutch</h2>
                <p class="subtitle">Please select your area of interest</p>

                <div class="text-half-cont">
                    <div>
                        <a href="/sports/" class="splash-box" style="display: block; text-align: left;">
                            <div class="splash-box-banner" style="display: block; width: 100%; height: 90px; background-image: url('img/sports.png'); background-size: cover; background-position: center;"></div>
                            <div class="splash-box-text-cont" style="display: block; width: 100%; text-align: left; padding: 40px 30px; box-sizing: border-box;">
                                <h3 style="text-align: center !important;">Team or Group Management</h3>
                                <p style="text-align: left !important;">For club and town teams. Manage communication, scheduling, finances, and more.</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="/camps/" class="splash-box" style="display: block; text-align: left;">
                            <div class="splash-box-banner" style="display: block; width: 100%; height: 90px; background-image: url('img/camps.png'); background-size: cover; background-position: center;"></div>
                            <div class="splash-box-text-cont" style="display: block; width: 100%; text-align: left; padding: 40px 30px; box-sizing: border-box;">
                                <h3 style="text-align: center !important;">Towns & Camps</h3>
                                <p style="text-align: left !important;">For Town Recreation Departments. Manage program registration, scheduling, and communication.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="footer">
        <div id="footer-inner">Copyright © 2024 BeClutch.club<br>All Rights Reserved</div>
    </div>
</body>
</html>