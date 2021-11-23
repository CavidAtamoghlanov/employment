<?php
header_remove("X-Powered-By"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employment.az</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.bootstrap4.min.css" integrity="sha512-MMojOrCQrqLg4Iarid2YMYyZ7pzjPeXKRvhW9nZqLo6kPBBTuvNET9DBVWptAo/Q20Fy11EIHM5ig4WlIrJfQw==" crossorigin="anonymous" />
    <link rel="shortcut icon" type="image/png" href="./employment-logo.png"/>
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Comfortaa", cursive;
        }

        ::-webkit-scrollbar {
        width: 8px;
        }

        ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
        background: white;
        border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
        background: #1017cc;
        cursor: pointer;
        }

        .background-wrapper1{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        opacity: 0.7;
        background-color: black;
        }
        .background-wrapper2{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        bottom:0;
        right:0;
        z-index: 3;
        background-color: black;
        padding: 20px 0;
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.1s linear;
        }

        .background-wrapper{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -2;
        opacity: 0.2;
        }

        .background-wrapper img{
        object-fit: cover;
        width: 100%;
        height: 100%;
        }

        .container {
        width: 80% !important;
        max-width: 1200px !important;
        }

        @media screen and (max-width: 576px) {

        #logo-header img{
            height: 70px !important;
            top: -25px !important;
            right:-1px !important;
        }
        #logo-header h3{
            font-size: 30px !important;
        }
        #employment span{
            right: 42px !important;
            top:22px !important;
        }

        .container {
            width: 100% !important;
        }
        }

    </style>
</head>
<body>
    <div class="wrapper" id="my-wrapper" style="position:absolute;top:0px;bottom:0px;left:0;right:0;overflow-x:hidden;transition:all .4s ease;">
        <div class="container d-flex" style="height: 100%;flex-direction:column;transition:all .4s ease;">
            <div id="logo" class="d-flex flex-column" style="width: 100%;margin: 0 auto;text-align:center;padding:20px 0 5px;transition: all 700ms ease;position:relative">
                <div id="logo-header" onclick="window.location='/'" style="padding:15px 0;cursor:pointer;display: flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;position:relative;transition: all 700ms ease">
                    <img src="./employment-logo.png" alt="" style="object-fit:cover;height:110px;position:relative;top:-31px;right:-4px">
                    <h3 id="employment" style="font-size:42px;color: white;"><a style="text-decoration: none;color:white;position:relative;" href="/">Employment<span style="position: relative;top:28px;right:59px;color:blue!important">.az</span></a></h3>
                </div>
            </div>
            <div class="row" id="main-row" style="padding:10px 0;margin:auto 0;transition: all 700ms ease">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12" style="padding: 0 25px!important;transition: all 700ms ease">
                            
                        </div>
                    </div>
                </div>
            </div>
            <footer style="margin-top:auto;text-align:center;padding:15px 0;font-weight:600;position:relative;color:white">
                <div onclick="window.location='/'" class="d-flex " style="cursor:pointer;margin:0 auto 10px auto;width:40px;height:40px;background-color:#fff;color:black;border-radius:50%">
                    <div style="margin: auto;">
                        <i class="fa fa-arrow-left" style="font-size: 18px;" aria-hidden="true"></i>
                    </div>
                </div>
                <span style="color:white"> <a style="color: white!important;text-decoration:underline" href="/terms-of-use">Istifadə qaydaları</a> | <a style="color: white!important;text-decoration:underline" href="/about-us">Haqqımızda</a> | <a style="color: white!important;text-decoration:underline" href="/contact-us">Əlaqə</a> </span>
                <br/>
                <span> <a href="https://www.facebook.com/butagruptr" style="margin-right: 3px;" target="_blank"><i style="font-size: 18px;color:white" class="fa fa-facebook" aria-hidden="true"></i></a> <a style="margin-right: 3px;" href="https://www.instagram.com/butagruptr/" target="_blank"><i style="font-size: 18px;color:white" class="fa fa-instagram" aria-hidden="true"></i></a> <a href=""><i style="font-size: 18px;color:white" class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                <br/>
                <span style="color:white">&copy; 2021 Employment.az | <a style="color: white!important;text-decoration:underline" target="_blank" href="http://butagrup.az/">Buta Grup</a></span>
            </footer>
        </div>
    </div>

    <div class="background-wrapper"><img src="background3.jpg" alt=""></div>
    <div class="background-wrapper1"></div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>