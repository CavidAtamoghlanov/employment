<?php include_once "header.php" ?>
<body>
    <div class="wrapper" id="my-wrapper" style="position:absolute;top:0px;bottom:0px;left:0;right:0;overflow-x:hidden;transition:all .4s ease;">
        <div class="container d-flex" style="height: 100%;flex-direction:column;transition:all .4s ease;">
            <div id="logo" class="d-flex flex-column" style="width: 100%;margin: 0 auto;text-align:center;padding:20px 0 5px;transition: all 700ms ease;position:relative">
                <div id="logo-header" onclick="window.location='/'" style="padding:15px 0;cursor:pointer;display: flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;position:relative;transition: all 700ms ease">
                    <img src="./employment-logo.png" alt="" style="object-fit:cover;height:110px;position:relative;top:-31px;right:-4px">
                    <h3 id="employment" style="font-size:42px;color: white;"><a style="text-decoration: none;color:white;position:relative;" href="/">Employment<span style="position: relative;top:28px;right:59px;color:blue!important">.az</span></a></h3>
                </div>
            </div>
            <div class="row" id="main-row" style="margin:auto 0;transition: all 700ms ease">
                <div class="col-12" style="color:white;text-align:center">
                    <h1>403 Qadağandır</h1>
                </div>
            </div>
            <footer style="margin-top:auto;text-align:center;padding:15px 0;font-weight:600;position:relative;color:white">
                <div onclick="window.location='/'" class="d-flex " style="cursor:pointer;margin:0 auto 10px auto;width:40px;height:40px;background-color:#fff;color:black;border-radius:50%">
                    <div style="margin: auto;">
                        <i class="fa fa-arrow-left" style="font-size: 18px;" aria-hidden="true"></i>
                    </div>
                </div>
            <?php include_once "footer.php" ?>