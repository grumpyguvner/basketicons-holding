<?php
        $title = "Basket Icons";
        $subtitle = "POS SYSTEMS | ONLINE RETAIL | MOBILE COMMERCE | B2B";
        $css = "main.css";
        $logo = "basketicons";
        $list = "http://newsletters.boundlessmarketing.co.uk/t/j/s/matth/";
        $field = "cm-matth-matth";
?>
<!doctype html>
<html class="no-js" lang="EN">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?>: is coming soon&hellip;</title>
        <meta name="description" content="<?php echo $subtitle; ?>">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/<?php echo $css; ?>">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        
        <!--[if IE 7]><link rel="stylesheet" href="assets/css/fontello/fontello-ie7.min.css"><![endif]-->
        <!--[if lt IE 9]>
        <script src="/concrete/js/ie/html5-shiv.js"></script>
        <script src="/concrete/js/ie/respond.js"></script>
        <![endif]-->
        <script>
            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                        document.createTextNode(
                                '@-ms-viewport{width:auto!important}'
                                )
                        )
                document.querySelector('head').appendChild(msViewportStyle)
            }
        </script>
    </head>
    <body>
        <div id="wrapper">
        <div class="container">
        <section id="main">
            <header>
                <img src="assets/img/<?php echo $logo; ?>-logo.png" alt="Basket Icons" width="200" height="200">
            </header>
            <p><?php echo $title; ?> is coming soon &hellip; <br><?php echo $subtitle; ?></p>
            <footer>
                <p>For more information enter your email address below</p>
                <form action="<?php echo $list; ?>" method="post" id="subForm">
                    <div class="input-group">
                      <input type="email" id="fieldEmail" name="<?php echo $field; ?>" class="form-control" required placeholder="Enter your email address">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Subscribe</button>
                      </span>
                    </div>
                </form>
            </footer>
        </section>
        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="/assets/js/main.min.js"></script>
        <script src="/assets/js/custom.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--        <script>
                    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                    e.src='https://www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
                </script>-->
    </body>
</html>