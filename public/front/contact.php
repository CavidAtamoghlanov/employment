<?php include_once "header.php" ?>

<body>
    <div class="wrapper" id="my-wrapper"
        style="position:absolute;top:0px;bottom:0px;left:0;right:0;overflow-x:hidden;transition:all .4s ease;">
        <div class="container d-flex" style="height: 100%;flex-direction:column;transition:all .4s ease;">
            <div id="logo" class="d-flex flex-column"
                style="width: 100%;margin: 0 auto;text-align:center;padding:20px 0 5px;transition: all 700ms ease;position:relative">
                <div id="logo-header"
                    style="padding:15px 0;display: flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;position:relative;transition: all 700ms ease">
                    <img onclick="window.location='/'" src="./employment-logo-2.png" alt=""
                        style="cursor:pointer;object-fit:cover;height:110px;position:relative;top:-31px;right:-4px">
                    <h3 onclick="window.location='/'" id="employment"
                        style="font-size:42px;color: white;cursor:pointer;"><a
                            style="text-decoration: none;color:white;position:relative;" href="/?lang=<?=  $cuurentlang  ?>">Employment<span
                                style="position: relative;top:28px;right:59px;color:#3871a6 !important;">.az</span></a>
                    </h3>
                </div>
            </div>
            <div class="row" id="main-row" style="margin:auto 0;transition: all 700ms ease">
                <style>
                #contact-us p {
                    font-size: 18px;
                }
                </style>
                <div class="col-12 col-lg-7" style="color:white" id="contact-us">
                    <h3 style="margin-bottom: 15px"><?= $lang_list['contact_title'] ?></h3>
                    <p>
                        <?= $lang_list['contact_p1'] ?>
                    </p>
                    <p><?= $lang_list['contact_p2'] ?></p>
                    <p><?= $lang_list['offer'] ?></p>

                    <address style="display: flex;flex-direction:column">
                        <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                           <?= $lang_list['contact_adress'] ?>
                        </span>
                        <span>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a style="color:#3871a6;" href="tel:+994124886586">+994 (12) 488 65 86</a>
                        </span>
                        <span>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a style="color:#3871a6;" href="mailto:info@butagrup.com.tr">info@butagrup.az</a>
                        </span>
                    </address>
                </div>
            </div>
            <footer
                style="margin-top:auto;text-align:center;padding:15px 0;font-weight:600;position:relative;color:white">
                <div onclick="window.location='/?lang=<?=  $cuurentlang  ?>'" class="d-flex"
                    style="cursor:pointer;margin:0 auto 10px auto;width:40px;height:40px;background-color:#fff;color:black;border-radius:50%;justify-content:center;align-items:center">
                    <i class="fa fa-arrow-left" style="font-size: 18px;" aria-hidden="true"></i>
                </div>
                <?php include_once "footer.php" ?>