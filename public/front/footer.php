                <!-- <span style="color:white">
                    <a style="color: white!important;text-decoration:underline" href="/about-us">Haqqımızda</a> |
                    <a style="color: white!important;text-decoration:underline" href="/contact-us">Əlaqə</a>
                </span> -->
                <br />
                <div style="width:100%;height:5px"></div>
                <!-- <span>
                    <a class="footer-network" href="https://www.facebook.com/butagruptr" target="_blank"><i
                            style="color: #3871a6;top:2px;" class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="footer-network" href="https://www.instagram.com/employmentaz/" target="_blank"><i
                            style="color: #3871a6;top:1px;" class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a class="footer-network" href="https://www.linkedin.com/in/employment-az%C9%99rbaycan-08a51a218/"
                        target="_blank"><i style="color: #3871a6;top:1px;" class="fa fa-linkedin"
                            aria-hidden="true"></i></a>
                </span> -->
                <br />
                <div style="width:100%;height:5px"></div>
                <span style="color:white">
                    &copy; 2021 Employment.az &nbsp;
                    <?php 
                        switch ($_GET['lang']) {
                            case 'AZ':
                            echo  ' <a style="color: white!important;text-decoration:underline" target="_blank"
                            href="https://butagrup.com.tr/?lang=az">Buta Grup</a>';
                                break;
                            
                        case 'EN':
                            echo  ' <a style="color: white!important;text-decoration:underline" target="_blank"
                            href="https://butagrup.com.tr/?lang=en">Buta Grup</a>';   
                                
                            break;
                        case 'RU':
                                echo  '  <a style="color: white!important;text-decoration:underline" target="_blank"
                                href="https://butagrup.com.tr/?lang=rus">Buta Grup</a>';
                                break;   
                        case 'TR':
                                    echo  ' <a style="color: white!important;text-decoration:underline" target="_blank"
                                    href="https://butagrup.com.tr/?lang=tr">Buta Grup</a>';
                                    break;
                            default;   
                            
                            echo  '  <a style="color: white!important;text-decoration:underline" target="_blank"
                            href="https://butagrup.com.tr/?lang=az">Buta Grup</a>';
                                    break;        
                        }
                        ?>
                </span>
                </footer>
                </div>
                </div>
                <div class="loader-wrapper">
                    <span class="loader">
                        <span class="loader-inner"></span>
                    </span>
                </div>
                <div class="background-wrapper"><img src="bg-2.jpg" alt="background"></div>
                <div class="background-wrapper1"></div>

                <div class="row">
                        <div class="col-12" style="position: relative;">
                            <div class="alert alert-primary" id="alert-box" role="alert"
                                style="display:none;position: absolute;right:-200px;z-index:20;">
                               <?= $lang_list['mail_success']?>
                            </div>
                            <div class="alert alert-danger" id="alert-box1" role="alert"
                                style="display:none;position: absolute;right:-200px;z-index:20;">
                                <?= $lang_list['mail_isset']?>
                            </div>
                            <div class="alert alert-info" id="alert-box2" role="alert"
                                style="display:none;position: absolute;right:-200px;z-index:20;">
                                <?= $lang_list['mail_error']?>
                            </div>
                        </div>


                    </div>
                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                    crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.js"
                    integrity="sha512-pF+DNRwavWMukUv/LyzDyDMn8U2uvqYQdJN0Zvilr6DDo/56xPDZdDoyPDYZRSL4aOKO/FGKXTpzDyQJ8je8Qw=="
                    crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/selectize.min.js"
                    integrity="sha512-JiDSvppkBtWM1f9nPRajthdgTCZV3wtyngKUqVHlAs0d5q72n5zpM3QMOLmuNws2vkYmmLn4r1KfnPzgC/73Mw=="
                    crossorigin="anonymous"></script>
                <script src="https://employment.az/app.js?<?php echo time(); ?>"></script>
                </body>

                </html>