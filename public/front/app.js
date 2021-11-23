document.onreadystatechange = function () {
    if (document.readyState === "complete") {
        $(".loader-wrapper").fadeOut();
        $("#my-wrapper").show();
    }
};
var bitmeTarixi;
var melumatinBitmesi;
var more;
var urlLink;



// show company name sort hissesi
function showSortcheckbox(){
    if (document.getElementById('checkboxes').style.display == "block"){
        document.getElementById('checkboxes').style.display = "none";
    }
}
// show company name sort hissesi
window.addEventListener('click', function(e){  
    if (document.getElementById('checkboxes').contains(e.target) || document.getElementById('selectoption').contains(e.target)){
        if (document.getElementById('selectoption').contains(e.target)){
            if (document.getElementById('checkboxes').style.display == "block"){
                document.getElementById('checkboxes').style.display = "none";
            }else{
                document.getElementById('checkboxes').style.display = "block";
            }
        }
        else if (document.getElementById('checkboxes').contains(e.target)){
            document.getElementById('checkboxes').style.display = "block";
        }
    } 
   });


// dilin deishmesi
function ChangeLanguage() {
    const queryString = window.location.search;
    // console.log(queryString);

    const urlParams = new URLSearchParams(queryString);
    const langs = urlParams.get('lang');
    console.log(langs);


    switch (langs) {
        case 'AZ':
            more = "Daha çox";
            urlLink = "Ətraflı Baxış";
            bitmeTarixi = "Bitmə vaxtı: ";
            melumatinBitmesi = "Daha çox məlumat yoxdur";

            break;
        case 'EN':
            more = "More";
            urlLink = "Detailed overview";
            bitmeTarixi = "End time: ";
            melumatinBitmesi = "No more information";

            break;

        case 'RU':
            more = "Больше";
            urlLink = "Подробный обзор";
            bitmeTarixi = "Время окончания: ";
            melumatinBitmesi = "Больше нет информации";

            //Инструкции, соответствующие значению valueN
            //statementsN
            break;
        case 'TR':
            more = "Daha fazla";
            urlLink = "Ayrıntılı genel bakış";
            bitmeTarixi = "Bitiş zamanı: ";
            melumatinBitmesi = "Daha fazla bilgi yok";

            break;
        default:
            more = "Daha çox";
            urlLink = "Ətraflı Baxış";
            bitmeTarixi = "Bitmə vaxtı: ";
            melumatinBitmesi = "Daha çox məlumat yoxdur";
            break;
    }
}


// email ile qeydiyat birldisrish gosterimi
let newsletterForm = function (e) {
    e.preventDefault();

    $.ajax({
   
        type: "POST",
        url: "newsletter.php",
        data: { newsletter: $("#newsletter-input")?.val()?.toLowerCase()?.trim() },
        beforeSend: () => {
            $("#submit_button1").html('<i class="fa fa-spinner fa-spin"></i>');
            $("#submit_button1").prop("disabled", true);

        },
        success: (res) => {

            $("#newsletter-input").val("");
            if (res == 1) {
                $("#alert-box").fadeIn();
                $("#alert-box").animate({ bottom: "150px" }, 1200);
                setTimeout(() => {
                    $("#alert-box").animate({ bottom: "0" }, 1200);
                    $("#alert-box").fadeOut();
                }, 4000);
            } else if (res == 0) {

                $("#alert-box1").fadeIn();
                $("#alert-box1").animate({ bottom: "150px" }, 1200);
                setTimeout(() => {
                    $("#alert-box1").animate({ bottom: "-10px" }, 1200);
                    $("#alert-box1").fadeOut();
                }, 4000);
            } else if (res == 2) {
                $("#alert-box2").fadeIn();
                $("#alert-box2").animate({ bottom: "150px" }, 1200);
                setTimeout(() => {
                    $("#alert-box2").animate({ bottom: "0" }, 1200);
                    $("#alert-box2").fadeOut();
                }, 4000);
            }
            $("#submit_button1").html(
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            );
            $("#submit_button1").prop("disabled", false);
        },
    });
};

$("#newsletter-form").submit(newsletterForm);



var view = "list";
let changeView = $("#change-view");

if (Cookies.get("view")) {
    if (Cookies.get("view") == "list") {
        view = "list";
        changeView.html(
            '<i style="color:white;font-size:18px" class="fa fa-th-large"></i>'
        );
    } else {
        view = "grid";
        changeView.html(
            '<i style="color:white;font-size:18px" class="fa fa-bars"></i>'
        );
    }
} else {
    changeView.html(
        '<i style="color:white;font-size:18px" class="fa fa-th-large"></i>'
    );
}

var colView;

if (view == "list") {
    colView = "col-12";
} else {
    colView = "col-6";
}
var limit = 10;
var counter1 = 10;
var data_res = [];
var data_res1 = [];
var data_res2 = [];
var data_res3 = [];

let loadMore = function () {
    ChangeLanguage();

    if (Cookies.get("view")) {
        if (view == "list") {
            colView = "col-12";
        } else if (view == "grid") {
            colView = "col-6";
        }
    } else {
        colView = "col-12";
        changeView.html(
            '<i style="color:white;font-size:18px" class="fa fa-bars"></i>'
        );
    }

    if (limit < data_res.length) {
        $(".jobs").html("");
        limit += 10;
        data_res1 = data_res.slice(0, limit);
        for (let i = 0; i < data_res1.length; i++) {
            let jobName = "";
            let sourceImg;
            if (data_res1[i]?.links?.includes("staffy")) {
                sourceImg = "./sites/staffy.png";
            }
            if (data_res1[i]?.links?.includes("boss")) {
                sourceImg = "./sites/boss.png";
            }
            if (data_res1[i]?.links?.includes("jobustan")) {
                sourceImg = "./sites/jobustan.png";
            }
            if (data_res1[i]?.links?.includes("hellojob")) {
                sourceImg = "./sites/hellojob.png";
            }
            if (data_res1[i]?.links?.includes("progro")) {
                sourceImg = "./sites/progro.png";
            }
            if (data_res1[i]?.links?.includes("jobsearch")) {
                sourceImg = "./sites/jobsearch.png";
            }
            if (data_res1[i]?.links?.includes("offer")) {
                sourceImg = "./sites/offer.png";
            }
            if (data_res1[i]?.links?.includes("azejob")) {
                sourceImg = "./sites/azejob.png";
            }
            if (data_res1[i]?.links?.includes("edumap")) {
                sourceImg = "./sites/edumap.png";
            }
            if (data_res1[i]?.links?.includes("position")) {
                sourceImg = "./sites/position.png";
            }

            if (data_res1[i]?.links?.includes("hcb")) {
                sourceImg = "./sites/hcb.png";
            }
            if (data_res1[i]?.links?.includes("busy")) {
                sourceImg = "./sites/busy.jpg";
            }
            if (data_res1[i]?.links?.includes("vakansiya.az")) {
                sourceImg = "./sites/vakasiya-icon.png";
            }
            if (data_res1[i]?.links?.includes("banco")) {
                sourceImg = "./sites/banco.png";
            }
            if (data_res1[i]?.links?.includes("recruit")) {
                sourceImg = "./sites/recruit.png";
            }
            if (view == "grid") {
                jobName =
                    data_res1[i]?.job?.length > 25
                        ? data_res1[i]?.job?.slice(0, 25) + "..."
                        : data_res1[i]?.job;
            } else if (view == "list") {
                data_res1[i]?.job?.length > 100
                    ? data_res1[i]?.job?.slice(0, 100) + "..."
                    : data_res1[i]?.job;
                jobName = data_res1[i]?.job;
            }
            var date = "";

            if (data_res1[i]?.deadline != null && isNaN(data_res1[i]?.deadline)  &&  data_res1[i]?.deadline != "0000-00-00 00:00:00") {
                var dateobj = new Date(data_res1[i]?.deadline.replace(/-/g, "/").split(" ")[0]);
                var month = dateobj.getMonth() + 1;
                var day = dateobj.getDate();
                var year = dateobj.getFullYear();
                date = bitmeTarixi + "" + day + "." + month + "." + year;
                // date = bitmeTarixi + "" + dateobj; 
            }


            description =
                data_res1[i]?.job_descr?.length > 100
                    ? data_res1[i]?.job_descr?.slice(0, 100) + "..."
                    : " ";

            $(".jobs").append(
                '<div style="transition:all .4s ease;" id="' +
                data_res1[i]?.id +
                '" class="' +
                colView +
                ' job-list"><div class="adi" style="position:relative;background-color:white;border-radius:10px;padding:10px;box-shadow: 2px 3px 8px 1px gray;margin-bottom:20px;"><div class="row"><div class="col-md-6"><h4><i class="fa fa-bullhorn" aria-hidden="true"></i> ' +
                jobName +
                '</h4></div><div class="col-md-6"><span style="float:right">' +
                date +
                '</span></div></div><h6 style="color:rgb(56, 113, 166) !important;"><i class="fa fa-building" style="color:rgb(56, 113, 166);" aria-hidden="true"></i> ' +
                data_res1[i]?.company +
                "</h6><span>" +
                description +
                '</span><p><a target="_blank" style="position: relative;top: 18px;" href="' +
                data_res1[i]?.links +
                '"><i class="fa fa-link" aria-hidden="true"></i>' + urlLink + '</a></p><div style="position:absolute;right:10px;bottom:10px;"><div>' +
                "<img src=" +
                sourceImg +
                ' height="40" width="40" style="object-fit:cover;"/></div></div></div>'
            );
        }
    }
    if (limit >= data_res.length) {
        $("#load-button").html(melumatinBitmesi);
    }
};

let loadMore1 = function () {
    ChangeLanguage();
 


    if (Cookies.get("view")) {
        if (view == "list") {
            colView = "col-12";
        } else if (view == "grid") {
            colView = "col-6";
        }
    } else {
        colView = "col-12";
        changeView.html(
            '<i style="color:white;font-size:18px" class="fa fa-bars"></i>'
        );
    }

    if (counter1 < data_res2.length) {
        $(".jobs").html("");
        counter1 += 10;
        data_res3 = data_res2.slice(0, counter1);
        for (let i = 0; i < data_res3.length; i++) {
            let jobName = "";
            let sourceImg;
            if (data_res3[i]?.links?.includes("staffy")) {
                sourceImg = "./sites/staffy.png";
            }
            if (data_res3[i]?.links?.includes("boss")) {
                sourceImg = "./sites/boss.png";
            }
            if (data_res3[i]?.links?.includes("jobustan")) {
                sourceImg = "./sites/jobustan.png";
            }
            if (data_res3[i]?.links?.includes("hellojob")) {
                sourceImg = "./sites/hellojob.png";
            }
            if (data_res3[i]?.links?.includes("progro")) {
                sourceImg = "./sites/progro.png";
            }
            if (data_res3[i]?.links?.includes("jobsearch")) {
                sourceImg = "./sites/jobsearch.png";
            }
            if (data_res3[i]?.links?.includes("offer")) {
                sourceImg = "./sites/offer.png";
            }
            if (data_res3[i]?.links?.includes("azejob")) {
                sourceImg = "./sites/azejob.png";
            }
            if (data_res3[i]?.links?.includes("edumap")) {
                sourceImg = "./sites/edumap.png";
            }
            if (data_res3[i]?.links?.includes("hcb")) {
                sourceImg = "./sites/hcb.png";
            }
            if (data_res3[i]?.links?.includes("position")) {
                sourceImg = "./sites/position.png";
            }
            if (data_res3[i]?.links?.includes("busy")) {
                sourceImg = "./sites/busy.jpg";
            }
            if (data_res3[i]?.links?.includes("vakansiya.az")) {
                sourceImg = "./sites/vakasiya-icon.png";
            }
            if (data_res3[i]?.links?.includes("banco")) {
                sourceImg = "./sites/banco.png";
            }
            if (data_res3[i]?.links?.includes("recruit")) {
                sourceImg = "./sites/recruit.png";
            }

            if (view == "grid") {
                jobName =
                    data_res3[i]?.job?.length > 25
                        ? data_res3[i]?.job?.slice(0, 25) + "..."
                        : data_res3[i]?.job;
            } else if (view == "list") {
                data_res1[i]?.job?.length > 100
                    ? data_res1[i]?.job?.slice(0, 100) + "..."
                    : data_res1[i]?.job;
                jobName = data_res3[i]?.job;
            }
            var date = "";

            if (data_res3[i]?.deadline != null && isNaN(data_res3[i]?.deadline)&&  data_res1[i]?.deadline != "0000-00-00 00:00:00" ) {
                var dateobj = new Date(data_res1[i]?.deadline.replace(/-/g, "/").split(" ")[0]);
                var month = dateobj.getMonth() + 1;
                var day = dateobj.getDate();
                var year = dateobj.getFullYear();
                date = bitmeTarixi + "" + day + "." + month + "." + year;
                // date = bitmeTarixi + "" + dateobj; 
            }

            description =
                data_res3[i]?.job_descr?.length > 100
                    ? data_res3[i]?.job_descr?.slice(0, 100) + "..."
                    : " ";

            $(".jobs").append(
                '<div style="transition:all .4s ease;" id="' +
                data_res3[i]?.id +
                '" class="' +
                colView +
                ' job-list"><div style="position:relative;background-color:white;border-radius:10px;padding:10px;box-shadow: 2px 3px 8px 1px gray;margin-bottom:20px;"><div class="row"><div class="col-md-6"><h4><i class="fa fa-bullhorn" aria-hidden="true"></i> ' +
                jobName +
                '</h4></div><div class="col-md-6"><span style="float:right">' +
                date +
                '</span></div></div><h6 style="color:rgb(56, 113, 166) !important;"><i class="fa fa-building" style="color:rgb(56, 113, 166);" aria-hidden="true"></i> ' +
                data_res3[i]?.company +
                "</h6><span>" +
                description +
                '</span><p><a target="_blank" style="position: relative;top: 18px;" href="' +
                data_res3[i]?.links +
                '"><i class="fa fa-link" aria-hidden="true"></i> ' + urlLink + '</a></p><div style="position:absolute;right:10px;bottom:10px;"><div>' +
                "<img src=" +
                sourceImg +
                ' height="40" width="40" style="object-fit:cover;"/></div></div></div>'
            );
        }
    }

    if (counter1 >= data_res2.length) {
        $("#load-button1").html(melumatinBitmesi);
    }
};


// secilmish chekpointin massive elave edilmesi
var arrCompanyName = [];
function myFunction(id) {
    var checkBox = document.getElementById(id);

    if (checkBox.checked == true){
        arrCompanyName.push(jobs[id].value);
 
        filterByCompany(arrCompanyName);
        
    } else {
        for(i=0; i < arrCompanyName.length; i++){
           
            if (arrCompanyName[i] == jobs[id].value){
                arrCompanyName.splice(i, 1);

                
                filterByCompany(arrCompanyName);
            }
        }

    }
 
}



let submitForm = function (e) {
   
    e.preventDefault();

    if (Cookies.get("view")) {
        if (view == "list") {
            colView = "col-12";
        } else if (view == "grid") {
            colView = "col-6";
        }
    } else {
        colView = "col-12";
        changeView.html(
            '<i style="color:white;font-size:18px" class="fa fa-bars"></i>'
        );
    }

    let ajaxData = {
        search: $("#job-keywords")?.val()?.trim(),
    };
    $.ajax({
        type: "POST",
        async: true,
        dataType: "json",
        url: "data.php",
        cache: false,
        data: ajaxData,
        beforeSend: () => {
            $("#submit_button").html('<i class="fa fa-spinner fa-spin"></i>');
            $("#submit_button").prop("disabled", true);
        },
        success: function (res) {
            if (res == 1) {
                window.location = "/";
            }
       


   
            //   console.log(res);


            // if (langs == null){
            //     langs ="AZ";
            // }
            // else{
            //     langs = langs;
            // }




            data_res = [];
            data_res1 = [];
            data_res2 = [];
            data_res3 = [];
            counter1 = 10;
            limit = 10;

            $("#submit_button").html(
                '<i class="fa fa-search" aria-hidden="true"></i>'
            );

            // sorcingdeki cixan postlardaki yazilarin dillere gore deishmesi
            ChangeLanguage();

            $("#load-button").html(
                '<button onclick="loadMore()" class="btn " style="background-color:#3871a6 !important;color:#fff;">' + more + '</button>'
            );
            $("#submit_button").prop("disabled", false);
            // $("#newsletter").hide();
            $("#submit_button").css("animation", "none");
            $("#motto").hide();
            $("#search-container").css("margin-top", "70px");
            $(".jobs").show();
            $(".jobs").animate({ bottom: "0px" });
            $(".jobs").html("");
            data_res = res;
            var flags = {};

            data_res = data_res.filter((job) => {
                if (
                    flags[job?.job?.toLowerCase()?.trim()] &&
                    flags[job?.company?.toLowerCase()?.trim()]
                ) {
                    return false;
                }
                flags[job?.job?.toLowerCase()?.trim()] = true;
                flags[job?.company?.toLowerCase()?.trim()] = true;
                return true;
            });

           

            if (data_res.length == 0) {
                $("#404-error").show();
                $("#result-count").show();
                $("#count").html(data_res.length);
                $("#load-button").hide();
                $("#load-button1").hide();
            } else {
                $("#load-button").show();
                $("#load-button1").hide();
                $("#404-error").hide();
                $("#result-count").show();
                $("#count").html(data_res.length);
                data_res1 = data_res.slice(0, limit);
                if (data_res.length <= 10) {
                    $("#load-button").html(melumatinBitmesi);
                }
                for (let i = 0; i < data_res1.length; i++) {
                    let jobName = "";
                    let sourceImg;
                    if (data_res1[i]?.links?.includes("staffy")) {
                        sourceImg = "./sites/staffy.png";
                    }
                    if (data_res1[i]?.links?.includes("boss")) {
                        sourceImg = "./sites/boss.png";
                    }
                    if (data_res1[i]?.links?.includes("jobustan")) {
                        sourceImg = "./sites/jobustan.png";
                    }
                    if (data_res1[i]?.links?.includes("hellojob")) {
                        sourceImg = "./sites/hellojob.png";
                    }
                    if (data_res1[i]?.links?.includes("progro")) {
                        sourceImg = "./sites/progro.png";
                    }
                    if (data_res1[i]?.links?.includes("jobsearch")) {
                        sourceImg = "./sites/jobsearch.png";
                    }
                    if (data_res1[i]?.links?.includes("offer")) {
                        sourceImg = "./sites/offer.png";
                    }
                    if (data_res1[i]?.links?.includes("azejob")) {
                        sourceImg = "./sites/azejob.png";
                    }
                    if (data_res1[i]?.links?.includes("edumap")) {
                        sourceImg = "./sites/edumap.png";
                    }
                    if (data_res1[i]?.links?.includes("hcb")) {
                        sourceImg = "./sites/hcb.png";
                    }
                    if (data_res1[i]?.links?.includes("position")) {
                        sourceImg = "./sites/position.png";
                    }
                    if (data_res1[i]?.links?.includes("busy")) {
                        sourceImg = "./sites/busy.jpg";
                    }
                    if (data_res1[i]?.links?.includes("vakansiya.az")) {
                        sourceImg = "./sites/vakasiya-icon.png";
                    }
                    if (data_res1[i]?.links?.includes("banco")) {
                        sourceImg = "./sites/banco.png";
                    }
                    if (data_res1[i]?.links?.includes("recruit")) {
                        sourceImg = "./sites/recruit.png";
                    }

                    if (view == "grid") {
                        jobName =
                            data_res1[i]?.job?.length > 25
                                ? data_res1[i]?.job?.slice(0, 25) + "..."
                                : data_res1[i]?.job;
                    } else if (view == "list") {
                        data_res1[i]?.job?.length > 100
                            ? data_res1[i]?.job?.slice(0, 100) + "..."
                            : data_res1[i]?.job;
                        jobName = data_res1[i]?.job;
                    }
                    var date = "";

                    if (data_res1[i]?.deadline != null && isNaN(data_res1[i]?.deadline)&&  data_res1[i]?.deadline != "0000-00-00 00:00:00") {
                        var dateobj = new Date(data_res1[i]?.deadline.replace(/-/g, "/").split(" ")[0]);
                        var month = dateobj.getMonth() + 1;
                        var day = dateobj.getDate();
                        var year = dateobj.getFullYear();
                        date = bitmeTarixi + "" + day + "." + month + "." + year;
                        // date = bitmeTarixi + "" + dateobj; 


                    }


                    description =
                        data_res1[i]?.job_descr?.length > 100
                            ? data_res1[i]?.job_descr?.slice(0, 100) + "..."
                            : " ";

                    $(".jobs").append(
                        '<div style="transition:all .4s ease;" id="' +
                        data_res1[i]?.id +
                        '" class="' +
                        colView +
                        ' job-list"><div style="position:relative;background-color:white;border-radius:10px;padding:10px;box-shadow: 2px 3px 8px 1px gray;margin-bottom:20px;"><div class="row"><div class="col-md-6"><h4><i class="fa fa-bullhorn" aria-hidden="true"></i> ' +
                        jobName +
                        '</h4></div><div class="col-md-6"><span style="float:right">' +
                        date +
                        '</span></div></div><h6 style="color:rgb(56, 113, 166) !important;"><i class="fa fa-building" style="color:rgb(56, 113, 166);" aria-hidden="true"></i> ' +
                        data_res1[i]?.company +
                        "</h6><span>" +
                        description +
                        '</span><p><a target="_blank" style="position: relative;top: 18px;" href="' +
                        data_res1[i]?.links +
                        '"><i class="fa fa-link" aria-hidden="true"></i>' + urlLink + '</a></p><div style="position:absolute;right:10px;bottom:10px;"><div>' +
                        "<img src=" +
                        sourceImg +
                        ' height="40" width="40" style="object-fit:cover;"/></div></div></div>'
                    );
                }
            }


            // show compani name, in select copany name
            jobs = [];

            jobs = data_res.map((item) => ({
                text: item?.company?.trim(),
                value: item?.company?.trim(),
            }));

            var flags1 = {};

            jobs = jobs.filter((job) => {
                if (flags1[job?.value?.toLowerCase()?.trim()]) {
                    return false;
                }
                flags1[job?.value?.toLowerCase()?.trim()] = true;
                return true;
            });
            function sortJobs(a, b) {
                if (a?.value > b?.value) return 1;
                if (b?.value > a?.value) return -1;

                return 0;
            }
            jobs.sort(sortJobs);

            $("#checkboxes").html("");
            for (let i = 0; i < jobs.length; i++) {
                if (jobs[i].value == ""){
                    continue;
                }
                $("#checkboxes").append('<label class="checkall" for="'+(i)+'">'+
                '<input class="checkboxall" onclick="myFunction('+(i)+')" type="checkbox" id="'+(i)+'" /><span class="first">'+jobs[i].value+'</span></label>');

            }
            
            // console.log(jobs.length);
            // console.log(jobs);
            // $("#checkboxes").append('<label class="checkall" for="one">'+
            // '<input class="checkboxall" type="checkbox" id="one" /><span class="first">'+jobs+'</span></label>');
           


          
            


            // $("#checkboxes").selectize()[0].selectize.clear();

            // let selectize = $("#checkboxes")[0].selectize;

            // selectize.clearOptions();

            // selectize.addOption(jobs);

            // $(document).ready(function () {
            //     $("#checkboxes").selectize();
            // });
        },
        error: (err) => {
            console.log(err);
        },
    });

    $.ajax({
        type: "POST",
        async: true,
        url: "search.php",
        data: { search: $("#job-keywords")?.val()?.toLowerCase()?.trim() },
        success: () => { },
    });
    
};

$("#search").submit(submitForm);




//  search ve  shirketlere gore filter funksiyasi
let filterByCompany = (e) => {
    if (Cookies.get("view")) {
        if (view == "list") {
            colView = "col-12";
        } else if (view == "grid") {
            colView = "col-6";
        }
    } else {
        colView = "col-12";
        changeView.html(
            '<i style="color:white;font-size:18px" class="fa fa-bars"></i>'
        );
    }

    ChangeLanguage();


    counter1 = 10;
    $(".jobs").html("");

    $("#load-button1").html(
        '<button onclick="loadMore1()" class="btn " style="background-color:#3871a6 !important;color:#fff;">' + more + '</button>'
    );
    let filter = e;
    if (filter.length > 0) {
        for (i=0; i< arrCompanyName.length; i++){
            data_res2 = data_res.filter((item) => {
             
                if (item?.company?.includes(arrCompanyName[i])) {
                    return true;
                } else {
                    return false;
                }

            });
         

       
            if (data_res2.length == 0) {
                $("#404-error").show();
                $("#result-count").show();
                $("#count").html(data_res2.length);
                $("#load-button").hide();
                $("#load-button1").hide();
            } else {
                $("#404-error").hide();
                $("#result-count").show();
                $("#load-button").hide();
                $("#load-button1").show();
                $("#count").html(data_res2.length);
                data_res3 = data_res2.slice(0, counter1);
                if (data_res2.length <= 10) {
                    $("#load-button1").html("Daha çox məlumat yoxdur");
                }
                for (let i = 0; i < data_res3.length; i++) {
                    
                    let jobName = "";
                    let sourceImg;
                    if (data_res3[i]?.links?.includes("staffy")) {
                        sourceImg = "./sites/staffy.png";
                    }
                    if (data_res3[i]?.links?.includes("boss")) {
                        sourceImg = "./sites/boss.png";
                    }
                    if (data_res3[i]?.links?.includes("jobustan")) {
                        sourceImg = "./sites/jobustan.png";
                    }
                    if (data_res3[i]?.links?.includes("hellojob")) {
                        sourceImg = "./sites/hellojob.png";
                    }
                    if (data_res3[i]?.links?.includes("progro")) {
                        sourceImg = "./sites/progro.png";
                    }
                    if (data_res3[i]?.links?.includes("jobsearch")) {
                        sourceImg = "./sites/jobsearch.png";
                    }
                    if (data_res3[i]?.links?.includes("offer")) {
                        sourceImg = "./sites/offer.png";
                    }
                    if (data_res3[i]?.links?.includes("azejob")) {
                        sourceImg = "./sites/azejob.png";
                    }
                    if (data_res3[i]?.links?.includes("edumap")) {
                        sourceImg = "./sites/edumap.png";
                    }
                    if (data_res3[i]?.links?.includes("hcb")) {
                        sourceImg = "./sites/hcb.png";
                    }
                    if (data_res3[i]?.links?.includes("position")) {
                        sourceImg = "./sites/position.png";
                    }
                    if (data_res3[i]?.links?.includes("busy")) {
                        sourceImg = "./sites/busy.jpg";
                    }
                    if (data_res3[i]?.links?.includes("vakansiya.az")) {
                        sourceImg = "./sites/vakasiya-icon.png";
                    }
                    if (data_res3[i]?.links?.includes("banco")) {
                        sourceImg = "./sites/banco.png";
                    }
                    if (data_res3[i]?.links?.includes("recruit")) {
                        sourceImg = "./sites/recruit.png";
                    }

                    if (view == "grid") {
                        jobName =
                            data_res3[i]?.job?.length > 25
                                ? data_res3[i]?.job?.slice(0, 25) + "..."
                                : data_res3[i]?.job;
                    } else if (view == "list") {
                        data_res1[i]?.job?.length > 100
                            ? data_res1[i]?.job?.slice(0, 100) + "..."
                            : data_res1[i]?.job;
                        jobName = data_res3[i]?.job;
                    }
                    var date = "";

                    if (data_res3[i]?.deadline != null && isNaN(data_res3[i]?.deadline)&&  data_res1[i]?.deadline != "0000-00-00 00:00:00") {
                        var dateobj = new Date(data_res1[i]?.deadline.replace(/-/g, "/").split(" ")[0]);
                        var month = dateobj.getMonth() + 1;
                        var day = dateobj.getDate();
                        var year = dateobj.getFullYear();
                        date = bitmeTarixi + "" + day + "." + month + "." + year;
                        // date = bitmeTarixi + "" + dateobj; 
                    }
                    description =
                        data_res3[i]?.job_descr?.length > 100
                            ? data_res3[i]?.job_descr?.slice(0, 100) + "..."
                            : " ";
                    $(".jobs").append(
                        '<div style="transition:all .4s ease;" id="' +
                        i +
                        '" class="' +
                        colView +
                        ' job-list"><div style="position:relative;background-color:white;border-radius:10px;padding:10px;box-shadow: 2px 3px 8px 1px gray;margin-bottom:20px;"><div class="row"><div class="col-md-6"><h4><i class="fa fa-bullhorn" aria-hidden="true"></i> ' +
                        jobName +
                        '</h4></div><div class="col-md-6"><span style="float:right">' +
                        date +
                        '</span></div></div><h6 style="color:rgb(56, 113, 166) !important;"><i class="fa fa-building" style="color:rgb(56, 113, 166);" aria-hidden="true"></i> ' +
                        data_res3[i]?.company +
                        "</h6><span>" +
                        description +
                        '</span><p><a target="_blank" style="position: relative;top: 18px;" href="' +
                        data_res3[i]?.links +
                        '"><i class="fa fa-link" aria-hidden="true"></i> ' + urlLink + '</a></p><div style="position:absolute;right:10px;bottom:10px;"><div>' +
                        "<img src=" +
                        sourceImg +
                        ' height="40" width="40" style="object-fit:cover;"/></div></div></div>'
                    );
                }
            }
        }
    } else if(filter.length == 0) {
        
                $("#404-error").hide();
                $("#result-count").show();
                $("#load-button").hide();
                $("#load-button1").show();
                $("#count").html(data_res.length);
                data_res3 = data_res.slice(0, counter1);
                if (data_res2.length <= 10) {
                    $("#load-button1").html("Daha çox məlumat yoxdur");
                }
                for (let i = 0; i < data_res3.length; i++) {
                    let jobName = "";
                    let sourceImg;
                    if (data_res3[i]?.links?.includes("staffy")) {
                        sourceImg = "./sites/staffy.png";
                    }
                    if (data_res3[i]?.links?.includes("boss")) {
                        sourceImg = "./sites/boss.png";
                    }
                    if (data_res3[i]?.links?.includes("jobustan")) {
                        sourceImg = "./sites/jobustan.png";
                    }
                    if (data_res3[i]?.links?.includes("hellojob")) {
                        sourceImg = "./sites/hellojob.png";
                    }
                    if (data_res3[i]?.links?.includes("progro")) {
                        sourceImg = "./sites/progro.png";
                    }
                    if (data_res3[i]?.links?.includes("jobsearch")) {
                        sourceImg = "./sites/jobsearch.png";
                    }
                    if (data_res3[i]?.links?.includes("offer")) {
                        sourceImg = "./sites/offer.png";
                    }
                    if (data_res3[i]?.links?.includes("azejob")) {
                        sourceImg = "./sites/azejob.png";
                    }
                    if (data_res3[i]?.links?.includes("edumap")) {
                        sourceImg = "./sites/edumap.png";
                    }
                    if (data_res3[i]?.links?.includes("hcb")) {
                        sourceImg = "./sites/hcb.png";
                    }
                    if (data_res3[i]?.links?.includes("position")) {
                        sourceImg = "./sites/position.png";
                    }
                    if (data_res3[i]?.links?.includes("busy")) {
                        sourceImg = "./sites/busy.jpg";
                    }
                    if (data_res3[i]?.links?.includes("vakansiya.az")) {
                        sourceImg = "./sites/vakasiya-icon.png";
                    }
                    if (data_res3[i]?.links?.includes("banco")) {
                        sourceImg = "./sites/banco.png";
                    }
                    if (data_res3[i]?.links?.includes("recruit")) {
                        sourceImg = "./sites/recruit.png";
                    }

                    if (view == "grid") {
                        jobName =
                            data_res3[i]?.job?.length > 25
                                ? data_res3[i]?.job?.slice(0, 25) + "..."
                                : data_res3[i]?.job;
                    } else if (view == "list") {
                        data_res1[i]?.job?.length > 100
                            ? data_res1[i]?.job?.slice(0, 100) + "..."
                            : data_res1[i]?.job;
                        jobName = data_res3[i]?.job;
                    }
                    var date = "";

                    if (data_res3[i]?.deadline != null && isNaN(data_res3[i]?.deadline)&&  data_res1[i]?.deadline != "0000-00-00 00:00:00") {
                        var dateobj = new Date(data_res1[i]?.deadline.replace(/-/g, "/").split(" ")[0]);
                        var month = dateobj.getMonth() + 1;
                        var day = dateobj.getDate();
                        var year = dateobj.getFullYear();
                        date = bitmeTarixi + "" + day + "." + month + "." + year;
                        // date = bitmeTarixi + "" + dateobj; 
                    }
                    description =
                        data_res3[i]?.job_descr?.length > 100
                            ? data_res3[i]?.job_descr?.slice(0, 100) + "..."
                            : " ";
                    $(".jobs").append(
                        '<div style="transition:all .4s ease;" id="' +
                        i +
                        '" class="' +
                        colView +
                        ' job-list"><div style="position:relative;background-color:white;border-radius:10px;padding:10px;box-shadow: 2px 3px 8px 1px gray;margin-bottom:20px;"><div class="row"><div class="col-md-6"><h4><i class="fa fa-bullhorn" aria-hidden="true"></i> ' +
                        jobName +
                        '</h4></div><div class="col-md-6"><span style="float:right">' +
                        date +
                        '</span></div></div><h6 style="color:rgb(56, 113, 166) !important;"><i class="fa fa-building" style="color:rgb(56, 113, 166);" aria-hidden="true"></i> ' +
                        data_res3[i]?.company +
                        "</h6><span>" +
                        description +
                        '</span><p><a target="_blank" style="position: relative;top: 18px;" href="' +
                        data_res3[i]?.links +
                        '"><i class="fa fa-link" aria-hidden="true"></i> ' + urlLink + '</a></p><div style="position:absolute;right:10px;bottom:10px;"><div>' +
                        "<img src=" +
                        sourceImg +
                        ' height="40" width="40" style="object-fit:cover;"/></div></div></div>'
                    );
                }
        // $("#load-button").show();
        // $("#load-button1").hide();
        // if (data_res1.length == 0) {
        //     $("#404-error").show();
        //     $("#result-count").show();
        //     $("#count").html(data_res1.length);
        //     $("#load-button").hide();
        //     $("#load-button1").hide();
        // } 
        
    }
    
    

};

var elements = document.getElementsByClassName("job-list");
var i;
let changeViewHandler = function () {

    if (Cookies.get("view")) {
        if (Cookies.get("view") == "list") {
            for (i = 0; i < elements?.length; i++) {
                elements[i]?.classList?.add("col-6");
                elements[i]?.classList?.remove("col-12");
            }
            Cookies.remove("view", { path: "" });
            Cookies.set("view", "grid", { expires: 7, path: "" });
            view = "grid";
            changeView.html(
                '<i style="color:white;font-size:18px" class="fa fa-bars"></i>'
            );
        } else {
            for (i = 0; i < elements?.length; i++) {
                elements[i]?.classList?.add("col-12");
                elements[i]?.classList?.remove("col-6");
            }
            Cookies.remove("view", { path: "" });
            Cookies.set("view", "list", { expires: 7, path: "" });
            view = "list";
            changeView.html(
                '<i style="color:white;font-size:18px"  class="fa fa-th-large"></i>'
            );
        }
    } else {
        for (i = 0; i < elements?.length; i++) {
            elements[i].classList?.add("col-6");
            elements[i].classList?.remove("col-12");
        }
        Cookies.remove("view", { path: "" });
        Cookies.set("view", "grid", { expires: 7, path: "" });
        view = "grid";
        changeView.html(
            '<i style="color:white;font-size:18px" class="fa fa-bars"></i>'
        );
    }
};
$("#remove_input").click(function () {
    $(".shadow-none").val(" ");
});
