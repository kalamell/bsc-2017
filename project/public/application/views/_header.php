<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>
            <?php echo $title;?>
        </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='<?php echo base_url();?>assets/css/inline.css' type='text/css' media='all' />
        <link rel='stylesheet' id='animate-css-css' href='<?php echo base_url();?>assets/css/animate.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome-css' href='<?php echo base_url();?>assets/css/font-awesome.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='themify-icons-css' href='<?php echo base_url();?>assets/css/themify-icons.css' type='text/css' media='all' />
        <link rel='stylesheet' id='azexo-skin-css' href='<?php echo base_url();?>assets/css/skin-66a013dbcf.css' type='text/css' media='all' />
        <link rel='stylesheet' id='azexo-fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700%7COpen+Sans:400%7CFontAwesome:100,200,300,400,700%7CVarela%20Round:400&amp;subset=latin,latin-ext' type='text/css' media='all' />
        <link rel='stylesheet' id='azexo-style-css' href='<?php echo base_url();?>assets/css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='azh_frontend-css' href='<?php echo base_url();?>assets/css/frontend.css' type='text/css' media='all' />
        <link rel='stylesheet' id='azexo-extension-skin-css' href='<?php echo base_url();?>assets/css/skin-ffb12cacd5.css' type='text/css' media='all' />
        <link rel='stylesheet' id='magnific-popup-css' href='<?php echo base_url();?>assets/css/magnific-popup.css' type='text/css' media='all' />
        <link href="https://fonts.googleapis.com/css?family=Kanit:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://jaysalvat.github.io/vegas/releases/latest/vegas.min.css">
        <link rel='stylesheet' href='<?php echo base_url();?>assets/css/isobar-style.css' type='text/css' media='all' />
        <style>
            nav.primary-navigation ul.nav-menu:not(.vc) > li.menu-item > ul.sub-menu:not(.vc) > li.menu-item > a.menu-link, nav.primary-navigation ul.sub-menu:not(.vc) > li.menu-item > ul.sub-menu:not(.vc) > li.menu-item > a.menu-link {
                font-family: 'Kanit', sans-serif !important;
                line-height: 60px !important;
                color: #333 !important;
            }

            input.error, select.error { margin-bottom: 2px !important; color: red !important; }
            label.error { color: red !important; }
        </style>
    </head>
    <body class="">
        <div id="preloader">
            <div id="status"></div>
        </div>
        <div id="page" class="hfeed site">

            <?php $this->load->view('menu');?>

            <div id="main" class="site-main">
                <div class="wrapper">
                    <div class="banner">
                        <div class="banner-bg">
                            <div class="container">
                                <div class="login-box" style="visibility: hidden;">
                                    <h1>LOGIN</h1>
                                    <form action="">
                                        <ul>
                                            <li>
                                                <label for="email">Email</label>
                                                <input type="text" id="email">
                                            </li>
                                            <li>
                                                <label for="password">Password</label>
                                                <input type="text" id="password">
                                            </li>
                                            <li>
                                                <input type="submit" value="LOGIN">
                                                <input type="submit" value="SIGN UP">
                                            </li>
                                            <li class="forgot">
                                                <a href="">Forgot Password?</a>
                                            </li>
                                            <li>
                                                <a href=""><img src="<?php echo base_url();?>assets/images/isobar-dev/fb.png" alt=""></a>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
