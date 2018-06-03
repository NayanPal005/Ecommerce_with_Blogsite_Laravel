<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Blue White</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="{{asset('public/front_end_asset/style.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{asset('public/front_end_asset/js/cufon-yui.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/front_end_asset/js/cufon-yui.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/front_end_asset/js/cuf_run.js')}}"></script>
</head>
<body>
<div class="main">
    <div class="header">
        <div class="header_resize">
            <div class="nav_menu">
                <ul>
                    <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                    <li><a href="{{URL::to('/support')}}">Support</a></li>
                    <li><a href="{{URL::to('/about')}}">About Us</a></li>
                    <li><a href="{{URL::to('/blog')}}">Blog</a></li>
                    <li><a href="{{URL::to('/contact')}}">Contact Us</a></li>
                    <li><a href="{{URL::to('/login')}}">Admin Login</a></li>
                </ul>
            </div>
            <div class="clr"></div>
            <div class="logo">
                <h1><a href="index.html">Blue White<small>Put your login here</small></a></h1>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                <!--
                <div class="article">
                    <h2>Template License</h2>
                    <p>March 16, 2015 | Posted by <a href="#">Owner</a> | Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
                    <img src="{{asset('public/front_end_asset/images/img1.jpg')}}" width="263" height="146" alt="" class="ilf" />
                    <p>This is a free CSS website template by BlueWebTemplates. This work is distributed under the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to BlueWebTemplates.com.</p>
                    <p><a href="#" class="btn">Read more</a> <a href="#" class="btn">Comments (5)</a></p>
                    <div class="clr"></div>
                </div>
                -->
               @yield('main_content')
                <div class="clr"></div>
            </div>



        <!--    <div class="sidebar">
                <div class="gadget">
                    <h2 class="star">Sidebar Menu</h2>
                    <ul class="sb_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">TemplateInfo</a></li>
                        <li><a href="#">Style Demo</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Archives</a></li>
                        <li><a href="#">Website Templates</a></li>
                    </ul>
                </div>
                <div class="gadget">
                    <h2 class="star">Sponsors</h2>
                    <ul class="ex_menu">
                        <li><a href="#">DreamTemplate</a><br />
                            Over 6,000+ Premium Web Templates</li>
                        <li><a href="#">TemplateSOLD</a><br />
                            Premium WordPress &amp; Joomla Themes</li>
                        <li><a href="#">ImHosted.com</a><br />
                            Affordable Web Hosting Provider</li>
                        <li><a href="#">DreamStock</a><br />
                            Download Amazing Stock Photos</li>
                        <li><a href="#">Evrsoft</a><br />
                            Website Builder Software &amp; Tools</li>
                        <li><a href="#">MyVectorStore</a><br />
                            Royalty Free Stock Icons</li>
                    </ul>
                </div>
            </div>
            -->
            @yield('sidebar')

            <div class="clr"></div>
        </div>
    </div>
    <div class="fbg">
        <div class="fbg_resize">
            <div class="col c1">
                <h2>Image Gallery</h2>
                <a href="#"><img src="{{asset('public/front_end_asset/images/pix1.jpg')}}" width="56" height="56" alt="" class="ad" /></a> <a href="#"><img src="images/pix2.jpg" width="56" height="56" alt="" class="ad" /></a> <a href="#"><img src="images/pix3.jpg" width="56" height="56" alt="" class="ad" /></a> <a href="#"><img src="images/pix4.jpg" width="56" height="56" alt="" class="ad" /></a>
                <div class="clr"></div>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. <a href="#">Suspendisse bibendum</a>. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis. Donec semper vulputate nibh id pharetra. Sed sit amet aliquet ligula. Pellentesque molestie sem eu dolor luctus egestas auctor elit vestibulum.</p>
            </div>
            <div class="col c2">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui nunc, molestie ut porta et, egestas vel justo. Mauris nec velit in libero sollicitudin adipiscing non sodales sem. Fusce rutrum mauris quis purus vulputate placerat. </p>
                <p>Praesent nulla ipsum, congue in tincidunt ut, placerat sed erat. <a href="#">Nunc tempor venenatis vehicula</a>. Integer placerat ultricies sapien, non pharetra tortor egestas ut. Etiam elit dolor, congue eu iaculis non, mollis sed urna. Donec bibendum semper nisi non elementum.<br />
                    Vestibulum imperdiet mattis metus quis.</p>
            </div>
            <div class="col c3">
                <h2>Contact</h2>
                <p>Praesent dapibus, neque id cursus faucibus.</p>
                <p><strong>Phone:</strong> +1234567<br />
                    <strong>Address:</strong> 123 Put Your Address<br />
                    <strong>E-mail:</strong> <a href="#">info@example.com</a></p>
                <h2>Services</h2>
                <ul class="sb_menu">
                    <li><a href="#">consequat molestie</a></li>
                    <li><a href="#">sem justo</a></li>
                    <li><a href="#">semper</a></li>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_resize">
            <p class="lf">&copy; Copyright MyWebSite. Designed by Blue <a href="http://www.bluewebtemplates.com/">Website Templates</a></p>
            <ul class="fmenu">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="support.html">Support</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contacts</a></li>
            </ul>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
