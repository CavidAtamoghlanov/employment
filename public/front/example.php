<?php include_once "header.php" ?>
<?php  
    $tables = ["boss","hellojob","progro","staffy","jobsearch","jobustan","offeraz","asankadraz","rabotaaz","ejobaz","bancoaz","hcbaz","kadraz","positionaz","vakansiyaaz"] ;
        
?>

<body>
    <?php include_once "seo.php"?>
    <div class="wrapper d-flex flex-column" id="my-wrapper">
        <div class="container" style="transition:all .4s ease;flex-grow:1">
            <div>
                <!-- <div id="logo">
                    <div id="logo-header">
                        <img onclick="window.location='/'" src="./employment-logo-2.png" alt="logo"
                            style="cursor:pointer;object-fit:cover;height:110px;position:relative;top:-31px;right:-4px">
                        <h3 onclick="window.location='/'" id="employment"
                            style="cursor:pointer;font-size:42px;color: white;"><a
                                style="text-decoration: none;color:white;position:relative;" href="/">Employment<span
                                    style="position: relative;top:28px;right:59px;color:#3871a6 !important;">.az</span></a>
                        </h3>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-4 d-sm-none d-lg-block "></div>
                    <div class=" col-lg-4" style="position: relative; top:35px;">
                        <div id="logo-header">
                            <img onclick="window.location='/'" src="./employment-logo-2.png" alt="logo"
                                style="cursor:pointer;object-fit:cover;height:110px;position:relative;top:-31px;right:-4px">
                            <h3 onclick="window.location='/'" id="employment"
                                style="cursor:pointer;font-size:42px;color: white;"><a
                                    style="text-decoration: none;color:white;position:relative;"
                                    href="/">Employment<span
                                        style="position: relative;top:28px;right:59px;color:#3871a6 !important;">.az</span></a>
                            </h3>
                        </div>
                    </div>
                    <!-- <div class="offset-2 col-lg-2">
                        <ul id="menu-imp">
                            <li><a style="color: white;" href="/about-us">Haqqımızda</a></li>
                            <li><a style="color: white;" href="/contact-us">Əlaqə</a>
                            </li>
                        </ul>
                    </div> -->
                </div>

                <div id="search-container" style="margin-top: 70px;transition:margin .4s ease;width:100%">
                    <div id="motto" style="text-align: left !important; margin-left:25px;">
                        <h1 style="color: white;font-size:25px">Azərbaycanın ilk İş Axtarış Sistemi</h1>
                    </div>
                    <div class="col-12" id="search-transition" style="transition: all 700ms ease;">
                        <form id="search">
                            <div class="row" style="justify-content: center;">
                                <div class="col-lg-7 col-12" style="justify-content: center;">
                                    <div class="mb-lg-0 d-flex flex-column flex-lg-row" style="margin-bottom: 35px;">
                                        <input
                                            style="font-size:18px !important;padding: 20px 15px !important;position:relative;margin-right:15px;border-radius: 30px;border:1px solid blue"
                                            title="Açar söz daxil edin..." type="text" id="job-keywords"
                                            class="form-control shadow-none" placeholder="Açar Söz" minlength="2"
                                            required>
                                        <span
                                            style="color:white;position: absolute;left:30px;font-weight:bold;top:40px">iş
                                            adı, şirkət, bacarıq</span>
                                        <button type="submit" id="submit_button"
                                            style="padding:7px 20px;background-color:#3871a6;color:white;border-radius:25px;border:none;outline:none;cursor:pointer"><i
                                                class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <div class=" col-lg-5 d-sm-none d-lg-block"></div>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="col-12" style="margin-top:100px" id="newsletter">
                    <div class="row">
                        <div class="col-12" style="position: relative;top:-80px">
                            <div class="alert alert-primary" id="alert-box" role="alert"
                                style="display:none;position: absolute;right:-1000px;z-index:20;">
                                Bülletenimizə qoşulduğunuz üçün təşəkkür edirik
                            </div>
                            <div class="alert alert-danger" id="alert-box1" role="alert"
                                style="display:none;position: absolute;right:-1000px;z-index:20;">
                                Siz artıq bülletenimizə qoşulmusunuz
                            </div>
                            <div class="alert alert-info" id="alert-box2" role="alert"
                                style="display:none;position: absolute;right:-1000px;z-index:20;">
                                E-poçtun formatı yanlışdır
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-12" id="result-container">
                    <div class="row">
                        <div class="col-12" style="padding: 0 25px!important;transition: all 700ms ease">
                            <div id="result-count" style="margin: 40px 0;display:none;transition: all 700ms ease">
                                <div id="result"
                                    class="d-flex flex-sm-column flex-lg-row justify-content-between align-items-center">
                                    <h5 id="result-h5" style="color:white;flex: 0.4;margin-bottom:0">Ümumi Nəticə: <span
                                            style="color:white;" id="count"></span></h5>
                                    <div id="filters" class="d-flex flex-lg-row justify-content-end align-items-center"
                                        style="flex: 0.6;">
                                        <div id="change-view-container"
                                            style="position:relative;top:-3px;padding:0.5px 0;text-align: center;border:1px solid gray;margin-right:5px;border-radius:3px">
                                            <button class="btn" id="change-view"
                                                style="color:white;outline:none;box-shadow:none;border: none;padding: 0px 8px"
                                                onclick="changeViewHandler()"></button>
                                        </div>
                                        <div>
                                            <select data-placeholder="Şirkət seçin" tabindex="1" class="select2"
                                                onchange="filterByCompany(this.value)" style="outline:none!important;"
                                                name="" id="company">
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="error-template" id="404-error" style="padding: 0;text-align: center;display: none;">
                        <h2 style="font-size: 45px;color:white">Təəssüf</h2>
                        <h4 style="color:white">Açar sözə uyğun nəticə tapılmadı</h4>
                        <div class="error-details" style="color:white">
                            <p>Zəhmət olmasa, fərqli açar sözlərdən istifadə etməyə çalışın.</p>
                        </div>
                    </div>
                    <div class="row jobs d-flex"></div>
                    <div id="load-button"><button onclick="loadMore()" class="btn btn-primary">Daha
                            çox</button></div>
                    <div id="load-button1"><button onclick="loadMore1()" class="btn btn-primary">Daha
                            çox</button></div>

                </div>



                <div class="row">

                    <div class="col-12 col-lg-4 newsletter1">
                        <h5>Yeniliklərdən xəbərdar olun</h5>
                        <form id="newsletter-form" class="d-flex flex-column flex-lg-row">
                            <input type="email" title="e-poçt ünvanınızı daxil edin" id="newsletter-input"
                                style="margin-right:15px;border-radius: 30px;border:1px solid blue"
                                class="form-control shadow-none" name="newsletter" id="" placeholder="e-poçt ünvanı"
                                required>
                            <button type="submit" id="submit_button1"
                                style="padding:7px 20px;background-color:#3871a6;color:white;border-radius:25px;border:none;outline:none;cursor:pointer"><i
                                    class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </form>
                        <span style="color:white" class="sosial_icon">
                            <a style="color: white!important;text-decoration:underline" href="/about-us">Haqqımızda</a>
                            |
                            <a style="color: white!important;text-decoration:underline" href="/contact-us">Əlaqə</a>
                        </span>
                        <span style="display: block; width:80%; text-align:center; margin-top:15px;"
                            class="sosial_icon_2">
                            <a class="footer-network" href="https://www.facebook.com/butagruptr" target="_blank"><i
                                    style="color: #3871a6;top:2px;" class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a class="footer-network" href="https://www.instagram.com/employmentaz/" target="_blank"><i
                                    style="color: #3871a6;top:1px;" class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a class="footer-network"
                                href="https://www.linkedin.com/in/employment-az%C9%99rbaycan-08a51a218/"
                                target="_blank"><i style="color: #3871a6;top:1px;" class="fa fa-linkedin"
                                    aria-hidden="true"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <footer style="padding: 0 0 33px 0 !important;">
                <?php include_once "footer.php"?>
        </div>