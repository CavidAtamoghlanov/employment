
<?php  
    require_once 'connect.php';
    $tables = ["boss","hellojob","progro","staffy","jobsearch","jobustan","offeraz","recruit","azejob","busy","bancoaz","hcbaz","positionaz"] ;

   $sites = count($tables) ;
  
   $count =0;
        foreach($tables as $table){
            $sql = "SELECT COUNT(*) FROM $table ";
           $res = $db->query($sql);
           $vankies_count += $res->fetchColumn();
        }
//echo $vankies_count;
   
?>

<style>
    #job-keywords{
            font-size:18px;
        }
    @media screen and (max-width:600px) {
        #job-keywords{
            font-size:17px !important;
        }

    }
    @media screen and (max-width:991px) {
        .newsletter1{
            padding-top:0px !important;

        }
        #newsletter{
            margin-top:0px !important;
        }
        #result-h5{
            margin-top:0px !important;
        }
        .sosial_icon_2{
            width:90% !important;
        }
        #motto{
            text-align:center !important;
        }
        #motto h1 {
             margin-left: 0px !important;
}
    
    }
    #motto{
        text-align:left;
    }
    
</style>




<body >
    <?php include_once "seo.php"?>
    <div class="wrapper d-flex flex-column" id="my-wrapper" onclick="showSortcheckbox()">
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
                    <div class="col-lg-4 drp-menu">
                        <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a herf="?lang="><?= $cuurentlang?></a>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php 
                                    if($cuurentlang == "AZ"){
                                         echo "
                                            <a class='dropdown-item' style='text-align: center;' href='?lang=TR'>TR</a>
                                            <a class='dropdown-item' style='text-align: center;' href='?lang=EN'>EN</a>
                                            <a class='dropdown-item' style='text-align: center;' href='?lang=RU'>RU</a>";
                                    }elseif($cuurentlang == "TR"){
                        
                                         echo "<a class='dropdown-item' style='text-align: center;' href='?lang=AZ'>AZ</a> 
                                           
                                            <a class='dropdown-item' style='text-align: center;' href='?lang=EN'>EN</a>
                                            <a class='dropdown-item' style='text-align: center;' href='?lang=RU'>RU</a>";
                                    }elseif($cuurentlang == "EN"){
                                         echo "<a class='dropdown-item' style='text-align: center;' href='?lang=AZ'>AZ</a> 
                                            <a class='dropdown-item' style='text-align: center;' href='?lang=TR'>TR</a>
                                            
                                            <a class='dropdown-item' style='text-align: center;' href='?lang=RU'>RU</a>";
                                    }elseif($cuurentlang == "RU"){
                                             echo "<a class='dropdown-item' style='text-align: center;' href='?lang=AZ'>AZ</a> 
                                            <a class='dropdown-item' style='text-align: center;' href='?lang=TR'>TR</a>
                                            <a class='dropdown-item' style='text-align: center;' href='?lang=EN'>EN</a>";  
                                     }     

                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="offset-2 col-lg-2">  
                        <ul id="menu-imp">
                            <li><a style="color: white;" href="/about-us">Haqqımızda</a></li>
                            <li><a style="color: white;" href="/contact-us">Əlaqə</a>
                            </li>
                        </ul>
                    </div>bbb    C:\Users\Dergah\AppData\Roaming\Code\User\globalStorage\humy2833.ftp-simple\remote-workspace-temp\2eeacf02ae09a8444ccf8287476037c0\employment.az\langImg\en.png -->
                </div>

                <div id="search-container" style="margin-top: 70px;transition:margin .4s ease;width:100%">
                    <div id="motto">
                        <h1 style="color: white;font-size:25px"><?= $lang_list['title'] ?></h1>
                    </div>
                    <div class="col-12" id="search-transition" style="transition: all 700ms ease;">
                        <form id="search">
                            <div class="row" style="justify-content: center;">
                                <div class="col-lg-7 col-12" style="justify-content: center;">
                                    <div class="mb-lg-0 d-flex flex-column flex-lg-row"
                                        style="margin-bottom: 35px; position:relative;">
                                        <input 
                                            style="padding: 20px 15px !important;position:relative;margin-right:15px;border-radius: 30px;border:1px solid #3871a6;font-family: 'Source Code Pro', monospace;"
                                            title="<?= $lang_list['placeh1'] ?>" type="text" id="job-keywords"
                                            class="form-control shadow-none" placeholder="<?= $lang_list['placeh1'] ?>"
                                            minlength="2" required>
                                        <i class="fa fa-times" id="remove_input"></i>  
                                       
                                            <?php 


                                            switch ($_GET['lang']) {
                                                case 'AZ':
                                                 echo  ' <span
                                            style="color:white;position: absolute;left:30px;font-weight:bold;top:70px;margin: 10px 0 0 -12px;">Ölkədaxili
                                            ən məşhur <span style="color:#3871a6; font-weight:bold;">'.$sites .'</span> iş axtarma
                                            səhifəsindən ümumi <span  style="color:#3871a6; font-weight:bold;">'. $vankies_count .'</span>
                                            aktiv vakansiyanı sizə təqdim edirik.</span>';
                                                    break;
                                                
                                             case 'EN':
                                                echo  '  <span style="color:white;position: absolute;left:30px;font-weight:bold;top:70px;margin: 10px 0 0 -12px;">We offer you a total of  <span style="color:#3871a6; font-weight:bold;">'.  $vankies_count .'</span> actual job postings from the <span style="color:#3871a6; font-weight:bold;">'. $sites .'</span>
                                                most popular job search pages in Azerbaijan.</span>';   
                                                      
                                                break;
                                             case 'RU':
                                                    echo  ' <span
                                               style="color:white;position: absolute;left:30px;font-weight:bold;top:70px;margin: 10px 0 0 -12px;">Ölkədaxili
                                               ən məşhur <span style="color:#3871a6; font-weight:bold;">'.$sites .'</span> iş axtarma
                                               səhifəsindən ümumi <span  style="color:#3871a6; font-weight:bold;">'. $vankies_count .'</span>
                                               aktiv vakansiyanı sizə təqdim edirik.</span>';
                                                       break;   
                                             case 'TR':
                                                        echo  ' <span
                                                   style="color:white;position: absolute;left:30px;font-weight:bold;top:70px;margin: 10px 0 0 -12px;">Size ülkedeki en popüler <span style="color:#3871a6; font-weight:bold;">'.$sites .'</span> iş arama sayfasından toplam  <span  style="color:#3871a6; font-weight:bold;">'. $vankies_count .'</span>
                                                   aktif iş ilanı sunuyoruz.</span>';
                                                           break;
                                                   default;   
                                                   
                                                   echo  ' <span
                                                   style="color:white;position: absolute;left:30px;font-weight:bold;top:70px;margin: 10px 0 0 -12px;">Ölkədaxili
                                                   ən məşhur <span style="color:#3871a6; font-weight:bold;">'.$sites .'</span> iş axtarma
                                                   səhifəsindən ümumi <span  style="color:#3871a6; font-weight:bold;">'. $vankies_count .'</span>
                                                   aktiv vakansiyanı sizə təqdim edirik.</span>';
                                                           break;
                                                       

                                                    
                                            }
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            ?>
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



                <div class="col-12" style="margin-top:100px;" id="newsletter">
                    <div class="row">
                        <div class="col-12" style="position: relative;top:140px">
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
                </div>
                <div class="col-12" id="result-container">
                    <div class="row">
                        <div class="col-12" style="padding: 0 25px!important;transition: all 700ms ease">
                            <div id="result-count" style="margin: 40px 0;display:none;transition: all 700ms ease">
                                <div id="result"
                                    class="d-flex flex-sm-column flex-lg-row justify-content-between align-items-center">
                                    <h5 id="result-h5" style="color:white;flex: 0.4;margin-bottom:0;margin-top:70px;">
                                        <?= $lang_list['total_result'] ?>: <span style="color:white;" id="count"></span>
                                    </h5>
                                    <div id="filters" class="d-flex flex-lg-row offset-lg-7 align-items-center"
                                        style="flex: 0.6;">
                                        <div id="change-view-container"
                                            style="position:relative;top:-3px;padding:0.5px 0;text-align: center;border:1px solid gray;margin-right:5px;border-radius:3px">
                                            <button class="btn" id="change-view"
                                                style="color:white;outline:none;box-shadow:none;border: none;padding: 0px 8px"
                                                onclick="changeViewHandler()"></button>
                                        </div>
                                        <div id="selectoption">
                                            <!-- <select data-placeholder="?= $lang_list['filter'] ?>" tabindex="1"
                                                class="select2" onchange="filterByCompany(this.value)"
                                                style="outline:none!important;" name="" id="company">
                                            </select> -->


                                            <form>

                                            <style>
                                               .multiselect {
                                                   width: 200px;
                                                   }

                                                   .selectBox {
                                                   position: relative;
                                                   }

                                                   .selectBox select {
                                                   width: 230px;
                                                   font-weight: bold;
                                                   }

                                                   .overSelect {
                                                   position: absolute;
                                                   left: 0;
                                                   right: 0;
                                                   top: 0;
                                                   bottom: 0;
                                                   }

                                                   #checkboxes {
                                                   display: none;
                                                   border: 1px #dadada solid;
                                                   background:white;
                                                   overflow-y:auto;
                                                   height:150px;
                                                   width:230px;
                                                   position:absolute;
                                                    z-index:1000;
                                                   
                                                   }

                                                   #checkboxes label {
                                                   display: block;
                                                   border-radius:5px;
                                                   }

                                                   #checkboxes label:hover {
                                                   background-color: #1e90ff;
                                                   }
                                                   .selectoption{
                                                       padding:.375rem .75rem;
                                                       border-color:transparent;
                                                       box-sizing: border-box;
                                                        box-shadow: none;
                                                        border-radius: .25rem;
                                                        margin-bottom:3px;
                                                        color:#495057;
                                                   }
                                                   .selectoption:focus{
                                                        border-color:#80bdff;
                                                        box-shadow: 0 0 0 0.2rem rgb(0, 123, 255 / 25%);
                                                        outline:0;

                                                   }
                                                   .checkboxall{
                                                       margin-right:5px;
                                                       padding:5px;
                                                   }
                                                   .checkall{
                                                       padding:0 5px;
                                                   }
                                                   .first{
                                                    opacity: 0.8 !important;
                                                   }                                        
                                                    </style>
                                         
                                               <div class="multiselect" >
                                                   <div class="selectBox">
                                                        <select class="selectoption">
                                                            <option style="display: none; height: 0px !important;" id="absered">Şirkət seçin</option>
                                                        </select>
                                                        <div class="overSelect"></div>
                                                   </div>
                                                   <div id="checkboxes">
                                                  
                                               
                                                   </div>
                                               </div>
                                               </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="error-template" id="404-error" style="padding: 0;text-align: center;display: none;">
                        <h2 style="font-size: 45px;color:white"><?= $lang_list['error_titl'] ?></h2>
                        <h4 style="color:white"><?= $lang_list['error_subtitle'] ?></h4>
                        <div class="error-details" style="color:white">
                            <p><?= $lang_list['error_text'] ?></p>
                        </div>
                    </div>
                    <div class="row jobs d-flex"></div>
                    <div id="load-button"><button onclick="loadMore()" style="background: #3871a6;" class="btn ">Daha
                            çox</button></div>
                    <div id="load-button1"><button onclick="loadMore1()" style="background: #3871a6;" class="btn ">Daha
                            çox</button></div>

                </div>



                <div class="row">

                    <div class="col-12 col-lg-4 newsletter1">
                        <h5 class="new-h5"><?= $lang_list['title2'] ?></h5>
                        <form id="newsletter-form" class="d-flex flex-column flex-lg-row">
                            <input type="email" title="e-poçt ünvanınızı daxil edin" id="newsletter-input"
                                style="margin-right:15px;border-radius: 30px;border:1px solid #3871a6;"
                                class="form-control shadow-none" name="newsletter" id=""
                                placeholder="<?= $lang_list['placeh2'] ?>" required>
                            <button type="submit" id="submit_button1"
                                style="padding:7px 20px;background-color:#3871a6;color:white;border-radius:25px;border:none;outline:none;cursor:pointer"><i
                                    class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </form>
                        <span style="color:white" class="sosial_icon">
                            <a style="color: white!important;text-decoration:underline"
                                href="/about-us?lang=<?=  $cuurentlang  ?>"><?= $lang_list['about'] ?></a>
                              &nbsp;&nbsp;&nbsp;
                            <a style="color: white!important;text-decoration:underline"
                                href="/contact-us?lang=<?=  $cuurentlang  ?>"><?php echo $lang_list['contact'] ; ?></a>
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
                            <a class="footer-network" href="https://t.me/employmentaz" target="_blank"><i
                                    style="color: #3871a6;top:1px;" class="fa fa-telegram" aria-hidden="true"></i></a>
                            <a class="footer-network" href="https://twitter.com/EmploymentAz" target="_blank"><i
                                    style="color: #3871a6;top:1px;" class="fa fa-twitter" aria-hidden="true"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <footer style="padding: 0 0 33px 0 !important;">



            <?php include_once "footer.php" ?>




