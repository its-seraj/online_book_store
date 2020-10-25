<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css?<?=time()?>">
    <link rel="stylesheet" type="text/scss" href="search.scss">
    <script type="text/javascript" src="LogIn/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="LogIn/js/jquery.leanModal.min.js"></script>
    <link type="text/css" rel="stylesheet" href="LogIn/css/style.css?<?=time()?>" />
    <title>HomePage</title>
</head>
<body>
    <div class="nav">
        <div class="container1">
            <div class="more">
                <div class="tab1"></div>
                <div class="more1"></div>
            </div>
        </div>
        <div class="logo"><a href="#">The book store</a></div>
        <script>$(".logo").on("click", function(){location.href="index.php"});</script>
        <div class="searchbox">
            <input type="text" id="search-box" autocomplete="off" placeholder="Search...">
            <div class="search"></div>
        </div>
        <script>
            
        </script>

        <ul>
            <li><a href="#"><div class="category">Category
                <div class="hide-category">
                    <div style="position: absolute; width: 80px; height: 20px;" ><img style="height: 20px; width: 30px;" src="img/triangle.png"></div>
                    <div class="category-box">
                        <div class="left-category">
                            <div class="stream">
                                <div id="Medical">Medical</div>
                            </div>
                            <script>
                                $("#Medical").on("click", function(){
                                    $(".medical-category").css("display", "block");
                                    $(".medical-category").css("color", "blue");
                                    $(".engineering-category").css("display", "none");
                                    $(".management-category").css("display", "none");
                                    $(".asm-category").css("display", "none");
                                    $(".humanities-category").css("display", "none");
                                    $(".law-category").css("display", "none");
                                });
                            </script>
                            <div class="stream">
                                <div id="Engineering">Engineering</div>
                            </div>
                            <script>
                                $("#Engineering").on("click", function(){
                                    $(".medical-category").css("display", "none");
                                    $(".engineering-category").css("display", "block");
                                    $(".management-category").css("display", "none");
                                    $(".asm-category").css("display", "none");
                                    $(".humanities-category").css("display", "none");
                                    $(".law-category").css("display", "none");
                                });
                            </script>
                            <div class="stream">
                                <div id="Management">Management</div>
                            </div>
                            <script>
                                $("#Management").on("click", function(){
                                    $(".medical-category").css("display", "none");
                                    $(".engineering-category").css("display", "none");
                                    $(".management-category").css("display", "block");
                                    $(".asm-category").css("display", "none");
                                    $(".humanities-category").css("display", "none");
                                    $(".law-category").css("display", "none");
                                });
                            </script>
                            <div class="stream">
                                <div id="ASM">Arts, Science & Mathematics</div>
                            </div>
                            <script>
                                $("#ASM").on("click", function(){
                                    $(".medical-category").css("display", "none");
                                    $(".engineering-category").css("display", "none");
                                    $(".management-category").css("display", "none");
                                    $(".asm-category").css("display", "block");
                                    $(".humanities-category").css("display", "none");
                                    $(".law-category").css("display", "none");
                                });
                            </script>
                            <div class="stream">
                                <div id="Humanities">Humanities</div>
                            </div>
                            <script>
                                $("#Humanities").on("click", function(){
                                    $(".medical-category").css("display", "none");
                                    $(".engineering-category").css("display", "none");
                                    $(".management-category").css("display", "none");
                                    $(".asm-category").css("display", "none");
                                    $(".humanities-category").css("display", "block");
                                    $(".law-category").css("display", "none");
                                });
                            </script>
                            <div class="stream" style="border: none;">
                                <div id="Law">Law</div>
                            </div>
                            <script>
                                $("#Law").on("click", function(){
                                    $(".medical-category").css("display", "none");
                                    $(".engineering-category").css("display", "none");
                                    $(".management-category").css("display", "none");
                                    $(".asm-category").css("display", "none");
                                    $(".humanities-category").css("display", "none");
                                    $(".law-category").css("display", "block");
                                });
                            </script>
                        </div>
                        <div class="right-category">
                            <!-- only medical books -->
                            <div class="medical-category">
                                <div class="medical-category1">
                                    <h3>Pre-Clinical Books</h3>
                                    <div class="li"><span><a href="" class="click" data-value="anatomy">anatomy</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="biochemistry">biochemistry</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="physiology">physiology</a></span></div>
            
                                    <h3>Clinical Books</h3>
                                    <div class="li"><span><a href="" class="click" data-value="anaesthesiology">anaesthesiology</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="community medicine">community medicine</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="dermatology & venreology">dermatology & venreology</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="general medicine">general medicine</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="obstetrics & gynaecology">obstetrics & gynaecology</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="opthalmology">opthalmology</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="orthopaedics">orthopaedics</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="otorhinolaryngology(ent)">otorhinolaryngology(ent)</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="pediatrics">pediatrics</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="psychiatry">psychiatry</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="surgery">surgery</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="radio diagnosis">radio diagnosis</a></span></div>
                                </div>
                                <div class="medical-category2">
                                    <h3>Para-Clinical Books</h3>
                                    <div class="li"><span><a href="" class="click" data-value="forensic medicine & toxicology">forensic medicine & toxicology</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="microbiology">microbiology</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="pathology">pathology</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="pharmalogy">pharmalogy</a></span></div>
            
                                    <h3>Dentistry Books</h3>
                                    <div class="li"><span><a href="" class="click" data-value="dental materials">dental materials</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="oral medicine & radiology">oral medicine & radiology</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="general anatomy">general anatomy</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="embryology & histology">embryology & histology</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="orthodontics & dentofacial orthopedics">orthodontics & dentofacial orthopedics</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="general medicine">general medicine</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="conservative dentistry & endodontics">conservative dentistry & endodontics</a></span></div>
                                    <div class="li"><span><a href="" class="click" data-value="general pathology & microbiology">general pathology & microbiology</a></span></div>
                                </div>
                            </div>
                            <div class="engineering-category">
                                <div class="cse"><span>Computer Science & Engineering</span><a href="" class="click eng" data-value="cse">Shop Now</a></div>
                                <div class="cse"><span>Mechanical Engineering</span><a href="" class="click eng" data-value="me">Shop Now</a></div>
                                <div class="cse"><span>Electrical & Electronics Engineering</span><a href="" class="click eng" data-value="ee">Shop Now</a></div>
                                <div class="cse"><span>Civil Engineering</span><a href="" class="click eng" data-value="ce">Shop Now</a></div>
                                <div class="cse"><span>Biotechnology</span><a href="" class="click eng" data-value="biotechnology">Shop Now</a></div>
                            </div>
                            <div class="management-category">
                                <a href="" class="click" data-value="management">Shop Now</a><div class="bg"></div>
                            </div>
                            <div class="asm-category">
                                <a href="" class="click" data-value="asm">Shop Now</a><div class="bg"></div>
                            </div>
                            <div class="humanities-category">
                                <a href="" class="click" data-value="humanity">Shop Now</a><div class="bg"></div>
                            </div>
                            <div class="law-category">
                                <a href="" class="click" data-value="law">Shop Now</a><div class="bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></a></li>
            <li id="account"><a href="#"><?= $_SESSION["id"] ?></a></li>
            <li id="login"><a id="modal_trigger" href="#modal" class="btn" >LogIn / SignUp</a></li>
            <li id="logout"><a href="">LogOut</a></li>
            <li id="cart"><a href="">Cart</a></li>
                <!-- list of carts -->
                <div class="cart-list">
                    <!-- <div class="close-cart">&times;</div>
                    <div class="cart-value">
                        <div class="scrollable-cart">
                            <div class="cart-tab">
                                <img src="img/41A5rzKXNjL._SX370_B.jpg" alt="">
                                <p class="cart-book-name">Human Anatomy and Physiology I for B. PHARMACY PCI 17 (I - B</p>
                                <div class="svg">
                                    <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path fill="blue" d="M10.034,3.635h4.106c0.227,0,0.41-0.184,0.41-0.411c0-0.227-0.184-0.411-0.41-0.411h-4.106c-0.227,0-0.411,0.184-0.411,0.411C9.623,3.451,9.807,3.635,10.034,3.635 M17.412,14.412h0.002l1.643-7.392l-0.008-0.002c0.008-0.032,0.02-0.063,0.02-0.098c0-0.227-0.184-0.411-0.41-0.411H5.492L4.909,4.338L4.903,4.34C4.853,4.171,4.702,4.045,4.516,4.045H1.41C1.184,4.045,1,4.229,1,4.456S1.184,4.867,1.41,4.867h2.791l2.564,9.563h0.001c0.035,0.117,0.119,0.209,0.229,0.258c-0.154,0.25-0.247,0.541-0.247,0.857c0,0.906,0.735,1.643,1.643,1.643c0.907,0,1.643-0.736,1.643-1.643c0-0.301-0.087-0.58-0.228-0.822h4.562c-0.141,0.242-0.229,0.521-0.229,0.822c0,0.906,0.736,1.643,1.643,1.643c0.908,0,1.643-0.736,1.643-1.643c0-0.316-0.092-0.607-0.246-0.857C17.295,14.637,17.381,14.535,17.412,14.412 M15.74,7.331h2.406l-0.365,1.643h-2.223L15.74,7.331z M5.712,7.331h2.722l0.183,1.643H6.152L5.712,7.331z M6.813,11.438L6.373,9.795h2.336l0.183,1.643H6.813z M7.034,12.26h1.949L9.165,13.9h-1.69L7.034,12.26zM8.392,16.365c-0.454,0-0.822-0.367-0.822-0.82s0.368-0.822,0.822-0.822c0.454,0,0.821,0.369,0.821,0.822S8.845,16.365,8.392,16.365 M11.678,13.9H9.991L9.809,12.26h1.869V13.9z M11.678,11.438H9.717L9.534,9.795h2.144V11.438zM11.678,8.974H9.443L9.261,7.331h2.417V8.974z M14.184,13.9h-1.686V12.26h1.869L14.184,13.9z M14.457,11.438h-1.959V9.795h2.143L14.457,11.438z M14.732,8.974h-2.234V7.331h2.416L14.732,8.974z M15.783,16.365c-0.453,0-0.82-0.367-0.82-0.82s0.367-0.822,0.82-0.822s0.822,0.369,0.822,0.822S16.236,16.365,15.783,16.365 M16.686,13.9H15.01l0.184-1.641h1.857L16.686,13.9zM15.283,11.438l0.184-1.643H17.6l-0.365,1.643H15.283z"></path>
                                    </svg>
                                    <div class="item-no">2</div>
                                    <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path fill="blue" d="M9.941,4.515h1.671v1.671c0,0.231,0.187,0.417,0.417,0.417s0.418-0.187,0.418-0.417V4.515h1.672c0.229,0,0.417-0.187,0.417-0.418c0-0.23-0.188-0.417-0.417-0.417h-1.672V2.009c0-0.23-0.188-0.418-0.418-0.418s-0.417,0.188-0.417,0.418V3.68H9.941c-0.231,0-0.418,0.187-0.418,0.417C9.522,4.329,9.71,4.515,9.941,4.515 M17.445,15.479h0.003l1.672-7.52l-0.009-0.002c0.009-0.032,0.021-0.064,0.021-0.099c0-0.231-0.188-0.417-0.418-0.417H5.319L4.727,5.231L4.721,5.232C4.669,5.061,4.516,4.933,4.327,4.933H1.167c-0.23,0-0.418,0.188-0.418,0.417c0,0.231,0.188,0.418,0.418,0.418h2.839l2.609,9.729h0c0.036,0.118,0.122,0.214,0.233,0.263c-0.156,0.254-0.25,0.551-0.25,0.871c0,0.923,0.748,1.671,1.67,1.671c0.923,0,1.672-0.748,1.672-1.671c0-0.307-0.088-0.589-0.231-0.836h4.641c-0.144,0.247-0.231,0.529-0.231,0.836c0,0.923,0.747,1.671,1.671,1.671c0.922,0,1.671-0.748,1.671-1.671c0-0.32-0.095-0.617-0.252-0.871C17.327,15.709,17.414,15.604,17.445,15.479 M15.745,8.275h2.448l-0.371,1.672h-2.262L15.745,8.275z M5.543,8.275h2.77L8.5,9.947H5.992L5.543,8.275z M6.664,12.453l-0.448-1.671h2.375l0.187,1.671H6.664z M6.888,13.289h1.982l0.186,1.671h-1.72L6.888,13.289zM8.269,17.466c-0.461,0-0.835-0.374-0.835-0.835s0.374-0.836,0.835-0.836c0.462,0,0.836,0.375,0.836,0.836S8.731,17.466,8.269,17.466 M11.612,14.96H9.896l-0.186-1.671h1.901V14.96z M11.612,12.453H9.619l-0.186-1.671h2.18V12.453zM11.612,9.947H9.34L9.154,8.275h2.458V9.947z M14.162,14.96h-1.715v-1.671h1.9L14.162,14.96z M14.441,12.453h-1.994v-1.671h2.18L14.441,12.453z M14.72,9.947h-2.272V8.275h2.458L14.72,9.947z M15.79,17.466c-0.462,0-0.836-0.374-0.836-0.835s0.374-0.836,0.836-0.836c0.461,0,0.835,0.375,0.835,0.836S16.251,17.466,15.79,17.466 M16.708,14.96h-1.705l0.186-1.671h1.891L16.708,14.96z M15.281,12.453l0.187-1.671h2.169l-0.372,1.671H15.281z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout">
                        <div class="total-price"><p>Total Price</p><p><img src="img/rupee-indian-white.png"/>1600.00</p></div>
                        <div class="payment">Checkout</div>
                    </div> -->
                </div>
        </ul>
    </div>

    <!-- jQuery code for getting books modal data Dynamically -->
    <script>
        $(document).ready(function(){
            //Live search using ajax
            $(document).on("keyup", "#search-box", function(){
                var search = $(this).val();
                if(search == ""){
                    //location.href = "index.php";
                }
                else{
                    $.ajax({
                        url: "ajax-search.php",
                        type: "POST",
                        data: {searchterm: search},
                        success: function(data){
                            $("#books").html(data);
                            $(".homepage-slider").css("display", "none");
                            $(".container-down").css("display", "none");
                            getBooks();
                            category();
                            addcart();
                        }
                    });
                }
            });

            //get books details on modal
            function getBooks(){
                $(".book-name a").on("click", function(e){
                    e.preventDefault();
                    var str = $(this).text();
                    $(".overlay2").css("display", "block");
                    $.ajax({
                        url: "modal.php",
                        type: "POST",
                        dataType: "JSON",
                        data: {name: str},
                        success: function(data){
                            modaladdcart();
                            $("#modal-img").attr("src", ("img/".concat((data.img),(".jpg"))));
                            $("#modal-book-name").text(data.name);
                            $("#author").text(data.writer);
                            $("#price").text(data.price);
                            $("#discount").text(data.discount);
                            $("#old-price").text(data.old_price);
                            $("#save").text(data.save);
                            $("#weight").text(data.weight);
                            $("#pages").text(data.pages);
                            $("#ISBN-13").text(data.ISBN13);
                            $("#ISBN-10").text(data.ISBN10);
                            $("#Dimensions").text(data.dimensions);
                            $("#Publisher").text(data.publisher);
                            $("#lang").text(data.language);
                            $("#modal-cart").data("value", data.ISBN10);
                        }
                    });
                });
                /* Hide modal on click*/
                $("#cross").on("click", function(){
                    $(".overlay2").css("display", "none");
                });
                window.onclick = function(e){
                    if(e.target == document.getElementsByClassName("overlay2")[0]){
                        $(".overlay2").css("display", "none");
                    }
                }
            }

            //get books list dynamically from database
            $(".click").on("click", function(e){
                var str = $(this).data("value");
                $(".hide-category").css("display", "none");
                $(".homepage-slider").css("display", "none");
                $(".container-down").css("display", "none");
                e.preventDefault();
                $.ajax({
                    url: "getbooks.php",
                    type: "POST",
                    data: {stream: str},
                    success: function(data){
                        $("#books").html(data);
                        getBooks();
                        category();
                        addcart();
                    }
                });
            });

            //function for hover and hide category
            function category(){
                $(".category").mouseover(function(){
                    $(".hide-category").css("display", "block");
                });
                $(".hide-category").mouseout(function(){
                    $(".hide-category").delay("slow").css("display", "none");
                });
            }

            /*$("#books").on("click", "a", function(event){
                event.preventDefault();
                confirm("are you sure ?");
            });*/

            //fuction for addcart inside modal
            function modaladdcart(){
                $(".modal-cart").one("click", function(){
                    $(".overlay2").css("display", "none");//hiding modal after click on modaladdcart
                    var isbn10 = $(this).data("value");
                    $.ajax({
                        url: "addcart.php",
                        type: "POST",
                        data: {ISBN10: isbn10},
                        success: function(data){
                            //login first and then add to cart
                            if(data == 0){
                                $("#modal_trigger").click();//if not login then login modal appear
                                $("#cross").click();//add cart from modal then modal close & login modal appear
                            }
                            else if(data == 1){
                                viewcart();
                            }
                        }
                    });
                });
            }

            //function for addcart
            function addcart(){
                $(".cart").on("click", function(){
                    var isbn10 = $(this).data("value");
                    $.ajax({
                        url: "addcart.php",
                        type: "POST",
                        data: {ISBN10: isbn10},
                        success: function(data){
                            //login first and then add to cart
                            if(data == 0){
                                $("#modal_trigger").click();//if not login then login modal appear
                                $("#cross").click();//add cart from modal then modal close & login modal appear
                            }
                            else if(data == 1){
                                viewcart();
                            }
                        }
                    });
                });
            }
            

            //cart-list get dynamically 
            function viewcart(){
                $.ajax({
                    url: "getcart.php",
                    type: "POST",
                    success: function(data){
                        //
                        $(".cart-list").html(data);
                        //cart modal hide show 
                        $("#cart").on("click", function(e){
                            e.preventDefault();
                            $(".cart-list").show();
                        });
                        $(".close-cart").on("click", function(){
                            $(".cart-list").hide();
                        });
                        //increment or decrement item from svg of cart
                        $(".svg-remove-cart").on("click", function(){
                            var isbn10 = $(this).data("value");
                            $.ajax({
                                url: "svg-cart.php",
                                type: "POST",
                                data: {ISBN10: isbn10, val: 0},
                                success: function(data){
                                    //
                                    viewcart();
                                }
                            });
                        });
                        $(".svg-add-cart").on("click", function(){
                            var isbn10 = $(this).data("value");
                            $.ajax({
                                url: "svg-cart.php",
                                type: "POST",
                                data: {ISBN10: isbn10, val: 1},
                                success: function(data){
                                    //
                                    viewcart();
                                }
                            });
                        });
                    }
                });
                $(".checkout").on("click", function(){
                    confirm("hbyugtfrde");
                });
            }
            viewcart();

            //destroy session when click on logout
            $("#logout").on("click", function(){
                $.ajax({
                    url: "LogIn/verify/destroysession.php",
                    type: "POST",
                    success: function(data){
                        //
                    }
                });
            });

            //this code is for Down-List
            //this code is for Down-List
            //this code is for Down-List
            $.ajax({
                url: "getbooks.php",
                type: "POST",
                data: {homepage: 1},
                success: function(data){
                    $(".container-down").html(data);
                    dummy();
                }
            });
            function dummy(){
                $(".down-list .cards").on("click", function(e){
                    e.preventDefault();
                    var str = $(this).data("value");
                    $(".overlay2").css("display", "block");
                    $.ajax({
                        url: "modal.php",
                        type: "POST",
                        dataType: "JSON",
                        data: {name: str},
                        success: function(data){
                            modaladdcart();
                            $("#modal-img").attr("src", ("img/".concat((data.img),(".jpg"))));
                            $("#modal-book-name").text(data.name);
                            $("#author").text(data.writer);
                            $("#price").text(data.price);
                            $("#discount").text(data.discount);
                            $("#old-price").text(data.old_price);
                            $("#save").text(data.save);
                            $("#weight").text(data.weight);
                            $("#pages").text(data.pages);
                            $("#ISBN-13").text(data.ISBN13);
                            $("#ISBN-10").text(data.ISBN10);
                            $("#Dimensions").text(data.dimensions);
                            $("#Publisher").text(data.publisher);
                            $("#lang").text(data.language);
                            $("#modal-cart").data("value", data.ISBN10);
                        }
                    });
                });
                /* Hide modal on click*/
                $("#cross").on("click", function(){
                    $(".overlay2").css("display", "none");
                });
                window.onclick = function(e){
                    if(e.target == document.getElementsByClassName("overlay2")[0]){
                        $(".overlay2").css("display", "none");
                    }
                }
            }
    });
    </script>


    <!-- start login or signup modal -->
    <div class="container unselectable">    
        <div id="modal" class="popupContainer" style="display:none;">
            <header class="popupHeader">
                <span class="header_title">Login</span>
                <span class="modal_close"><img src="img/close.png"></span>
            </header>
            
            <section class="popupBody">
                <!-- Social Login -->
                <div class="social_login">
                    <div class="">
                        <img id="user" src="LogIn/css/user.png" >
                        <a href="#" class="social_box google">
                            <span class="icon"><img class="fa fa-google" src="img/google.png"></img></span>
                            <span class="icon_title">Connect with Google</span>
                        </a>
                        <br>
                        <a href="#" class="social_box fb">
                            <span class="icon"><img src="img/facebook.png"></span>
                            <span class="icon_title">Connect with Facebook</span>
                            
                        </a>
                    </div>
                    <br>
                    <div class="centeredText">
                        <span>Or use your Email address</span>
                    </div>
    
                    <div class="action_btns">
                        <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                        <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                    </div>
                </div>
    
                <!-- Username & Password Login form -->
                <div class="user_login">
                    <span style="position: absolute; top: 44px; right: 10px; color: red; font-size: 0.8em; font-weight: bold; display: none;">! Please Enter All Details Carefully</span>
                    <form id="email-login-form">
                        <input type="text" id="email-id" placeholder="USER ID" required="required" />
                        <br />
    
                        <input type="password" id="email-pass" placeholder="PASSWORD" required="required" />
                        <br />
    
                        <div class="checkbox">
                            <input id="remember" type="checkbox"  required="required" />
                            <label for="remember">Remember me on this computer</label>
                        </div>
    
                        <div class="action_btns">
                            <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                            <div class="one_half last"><a href="#" id="email-login" class="btn btn_red">Login</a></div>
                        </div>
                    </form>
    
                    <a href="#" class="forgot_password">Forgot password?</a>
                </div>
                <script>
                    $(document).ready(function(){
                        $.ajax({
                            url: "LogIn/verify/verifysession.php",
                            type: "POST",
                            success: function(data){
                                //
                                if(data == 1){
                                    $("#login").css("display", "none");
                                    $("#account").css("display", "block");
                                    $("#logout").css("display", "block");
                                    $("#cart").css("display", "block");
                                }
                            }
                        });
                    });
                    $("#email-login").on("click", function(e){
                        e.preventDefault();
                        var id = $("#email-id").val();
                        var pass = $("#email-pass").val();
                        if(id != "" && pass != ""){
                            $.ajax({
                                url: "LogIn/verify/verifyaccount.php",
                                type: "POST",
                                data: {id: id, pass: pass},
                                success: function(data){
                                    //
                                    if(data == 1){
                                        location.href = "index.php";
                                    }
                                    if(data == 0){
                                        $("#email-login-form").trigger("reset");
                                    }
                                }
                            });
                        }
                        else{
                            $(".user_login span").css("display", "block");
                        }
                    });
                </script>
    
                <!-- Register Form -->
                <div class="user_register">
                    <span style="position: absolute; top: 44px; right: 10px; color: red; font-size: 0.8em; font-weight: bold; display: none;">! Please Enter All Details Carefully</span>
                    <form autocomplete='off' method='POST'>
                        <input type="text" id="fullname" placeholder="FULL NAME" />
                        <br />
    
                        <input type="text" id="userid" placeholder="User ID" />
                        <br />
    
                        <input type="text" id="phone" name="phone" maxlength="10"
                               pattern="[60-99]{1}-[0-9]{4}-[0-9]{4}" placeholder="MOBILE" >
                        <br />
                        <input type="email" id="email" placeholder="EMAIL ID" />
                        <br />
                        <input type="password" id="password" placeholder="PASSWORD" />
                        <br />
    
                        <div class="checkbox">
                            <input id="send_updates" type="checkbox" />
                            <label for="send_updates">Send me occasional email updates</label>
                        </div>
    
                        <div class="action_btns">
                            <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                            <div class="one_half last"><a href="#" id="email-register" class="btn btn_red">Register</a></div>
                        </div>
                    </form>
                </div>
                <script>
                    $("#email-register").on("click", function(e){
                        e.preventDefault();
                        var name = $("#fullname").val();
                        var id = $("#userid").val();
                        var mobile = $("#phone").val();
                        var email = $("#email").val();
                        var pass = $("#password").val();
                        if(name != "" && id != "" && mobile != "" && email != "" && pass != ""){
                            $.ajax({
                                url: "LogIn/verify/registeraccount.php",
                                type: "POST",
                                data: {name: name, id: id, mobile: mobile, email: email, pass: pass},
                                success: function(data){
                                    //
                                    $(".user_register span").css("display", "none");
                                    $(".user_register form").css("display", "none");
                                    $(".user_register").html(data);
                                    setTimeout(function() {
                                        window.location.href="index.php";
                                    }, 4000);
                                    
                                }
                            });
                        }
                        else{
                            $(".user_register span").css("display", "block");
                        }
                    });
                </script>
            </section>
        </div>
    </div>
    <!-- script code for login modal -->
    <script type="text/javascript">
        $("#modal_trigger").leanModal({top : 100, overlay : 0.6, closeButton: ".modal_close" });
    
        $(function(){
            // Calling Login Form
            $("#login_form").click(function(){
                $(".social_login").hide();
                $(".user_login").show();
                return false;
            });
    
            // Calling Register Form
            $("#register_form").click(function(){
                $(".social_login").hide();
                $(".user_register").show();
                $(".header_title").text('Register');
                return false;
            });
    
            // Going back to Social Forms
            $(".back_btn").click(function(){
                $(".user_login").hide();
                $(".user_register").hide();
                $(".social_login").show();
                $(".header_title").text('Login');
                return false;
            });
    
        })
    </script>
   
    <div id="books">
    <!--<div class="tab">
        <div class="cards">           <!--   first card   --
            <div class="img"></div>
            <div class="content">
                <span class="book-name"><a href="#">This is the Book Name by John D Khan</a></span>
                <p class="price"><img src="img/rupee-indian.png">&nbsp;1199 <span class="discount">30% Off</span></p>
                <p class="old-price">1699</p>
                <div class="cart"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="blue" d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path></svg>
                    <span>Add to cart</span>
                </div>
            </div>
        </div>
        <div class="cards">            <!--   second card --
            <div class="img"><img src="img/cat.jpg"></div>
            <div class="content">
                <span class="book-name"><a href="#">How to Prepare for Quantitative Aptitude for the CAT Paperback – 5 June 2018</a></span>
                <p class="price"><img src="img/rupee-indian.png">&nbsp;704 <span class="discount">27% Off</span></p>
                <p class="old-price">960</p>
                <div class="cart"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="blue" d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path></svg>
                    <span>Add to cart</span>
                </div>
            </div>
        </div>
        <div class="cards">            <!--   third card   --
            <div class="img"></div>
            <div class="content">
                <span class="book-name"><a href="#">This is the Book Name by John D Khan</a></span>
                <p class="price"><img src="img/rupee-indian.png">&nbsp;1199 <span class="discount">30% Off</span></p>
                <p class="old-price">1699</p>
                <div class="cart"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="blue" d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path></svg>
                    <span>Add to cart</span>
                </div>
            </div>
        </div>
        <div class="cards">            <!--   fourth card   --
            <div class="img"></div>
            <div class="content">
                <span class="book-name"><a href="#">This is the Book Name by John D Khan</a></span>
                <p class="price"><img src="img/rupee-indian.png">&nbsp;1199 <span class="discount">30% Off</span></p>
                <p class="old-price">1699</p>
                <div class="cart"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="blue" d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path></svg>
                    <span>Add to cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab">
        <div class="cards">            <!--   fifth card   --
            <div class="img"></div>
            <div class="content">
                <span class="book-name"><a href="#">This is the Book Name by John D Khan</a></span>
                <p class="price"><img src="img/rupee-indian.png">&nbsp;1199 <span class="discount">30% Off</span></p>
                <p class="old-price">1699</p>
                <div class="cart"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="blue" d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path></svg>
                    <span>Add to cart</span>
                </div>
            </div>
        </div>
        <div class="cards">            <!--   sixth card   --
            <div class="img"></div>
            <div class="content">
                <span class="book-name"><a href="#">This is the Book Name by John D Khan</a></span>
                <p class="price"><img src="img/rupee-indian.png">&nbsp;1199 <span class="discount">30% Off</span></p>
                <p class="old-price">1699</p>
                <div class="cart"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="blue" d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path></svg>
                    <span>Add to cart</span>
                </div>
            </div>
        </div>
        <div class="cards">            <!--   seventh card   --
            <div class="img"></div>
            <div class="content">
                <span class="book-name"><a href="#">This is the Book Name by John D Khan</a></span>
                <p class="price"><img src="img/rupee-indian.png">&nbsp;1199 <span class="discount">30% Off</span></p>
                <p class="old-price">1699</p>
                <div class="cart"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="blue" d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path></svg>
                    <span>Add to cart</span>
                </div>
            </div>
        </div>
        <div class="cards">            <!--   eight card   --
            <div class="img"></div>
            <div class="content">
                <span class="book-name"><a href="#">This is the Book Name by John D Khan</a></span>
                <p class="price"><img src="img/rupee-indian.png">&nbsp;1199 <span class="discount">30% Off</span></p>
                <p class="old-price">1699</p>
                <div class="cart"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="blue" d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path></svg>
                    <span>Add to cart</span>
                </div>
            </div>
        </div>
    </div> -->
    </div>
    <!--  End cards of books   -->

    <!--  Book-modal Starting here  -->
    <div class="overlay2">
        <div class="book-modal">
            <span id="cross">&times;</span>
            <div class="left-modal">
                <div class="modal-img"><img src=""  id="modal-img"></div><br>
                <span class="modal-book-name"><a id="modal-book-name"></a></span><br><br>
                <b style="color: #000;">by </b><span class="author" id="author"> &nbsp;</span>
            </div>
            <div class="right-modal">
                <div class="product-description">
                    <p class="price"><img src="img/rupee-indian.png">&nbsp;<font id="price"> </font><span class="discount"><font id="discount"></font>% Off</span></p>
                    <span class="mrp">MRP<b style="font-size: 20px;"> :</b> <p class="old-price"><img src="img/rupee-indian.png"><font id="old-price"></font></p></span><br>
                    <span class="mrp">You Save<b style="font-size: 20px;"> :</b> <p class="old-price" style="text-decoration: none;"><img src="img/rupee-indian.png"><font id="save"></font></p></span><br>
                    <span class="mrp">Inclusive of All Taxes</span>
                </div>
                <div>
                    <div class="modal-cart" id="modal-cart"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="blue" d="M17.671,13.945l0.003,0.002l1.708-7.687l-0.008-0.002c0.008-0.033,0.021-0.065,0.021-0.102c0-0.236-0.191-0.428-0.427-0.428H5.276L4.67,3.472L4.665,3.473c-0.053-0.175-0.21-0.306-0.403-0.306H1.032c-0.236,0-0.427,0.191-0.427,0.427c0,0.236,0.191,0.428,0.427,0.428h2.902l2.667,9.945l0,0c0.037,0.119,0.125,0.217,0.239,0.268c-0.16,0.26-0.257,0.562-0.257,0.891c0,0.943,0.765,1.707,1.708,1.707S10,16.068,10,15.125c0-0.312-0.09-0.602-0.237-0.855h4.744c-0.146,0.254-0.237,0.543-0.237,0.855c0,0.943,0.766,1.707,1.708,1.707c0.944,0,1.709-0.764,1.709-1.707c0-0.328-0.097-0.631-0.257-0.891C17.55,14.182,17.639,14.074,17.671,13.945 M15.934,6.583h2.502l-0.38,1.709h-2.312L15.934,6.583zM5.505,6.583h2.832l0.189,1.709H5.963L5.505,6.583z M6.65,10.854L6.192,9.146h2.429l0.19,1.708H6.65z M6.879,11.707h2.027l0.189,1.709H7.338L6.879,11.707z M8.292,15.979c-0.472,0-0.854-0.383-0.854-0.854c0-0.473,0.382-0.855,0.854-0.855s0.854,0.383,0.854,0.855C9.146,15.596,8.763,15.979,8.292,15.979 M11.708,13.416H9.955l-0.189-1.709h1.943V13.416z M11.708,10.854H9.67L9.48,9.146h2.228V10.854z M11.708,8.292H9.386l-0.19-1.709h2.512V8.292z M14.315,13.416h-1.753v-1.709h1.942L14.315,13.416zM14.6,10.854h-2.037V9.146h2.227L14.6,10.854z M14.884,8.292h-2.321V6.583h2.512L14.884,8.292z M15.978,15.979c-0.471,0-0.854-0.383-0.854-0.854c0-0.473,0.383-0.855,0.854-0.855c0.473,0,0.854,0.383,0.854,0.855C16.832,15.596,16.45,15.979,15.978,15.979 M16.917,13.416h-1.743l0.189-1.709h1.934L16.917,13.416z M15.458,10.854l0.19-1.708h2.218l-0.38,1.708H15.458z"></path></svg>
                        <span>Add to cart</span>
                    </div>
                </div>
                <div class="details">
                    <h3>Product Details</h3>
                    <span>Item Weight <b> :</b></span><span><font id="weight"></font> g</span><br>
                    <span>Paperback <b> :</b></span><span><font id="pages"></font> Pages</span><br>
                    <span>ISBN-13 <b> :</b></span><span><font id="ISBN-13"></font></span><br>
                    <span>ISBN-10 <b> :</b></span><span><font id="ISBN-10"></font></span><br>
                    <span>Product Dimensions <b> :</b></span><span><font id="Dimensions"></font> cm</span><br>
                    <span>Publisher <b> :</b></span><span><font id="Publisher"></font></span><br>
                    <span>Language <b> :</b></span><span><font id="lang"></font></span><br>

                </div>
                
            </div>
        </div>
    </div>
    <!-- End Book-modal here -->

    <!-- homepage slide  -->
<div class="homepage-slider">
    <div class="slider">
        <div class="slide_viewer">
            <div class="slide_group">
                <div class="slide"></div>
                <div class="slide"></div>
                <div class="slide"></div>
                <div class="slide"></div>
            </div>
        </div>
    </div><!-- End // .slider -->

    <div class="slide_buttons"></div>

    <div class="directional_nav">
        <div class="previous_btn" title="Previous">
            <svg version="1.1" x="0px" y="0px" width="40px" height="40px" viewBox="-11 -11.5 65 66">
            <g>
                <g>
                <path fill="#fff" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
                    c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
                <path fill="#fff" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
                </g>
            </g>
            </svg>
        </div>
        <div class="next_btn" title="Next">
            <svg version="1.1" x="0px" y="0px" width="40px" height="40px" viewBox="-11 -11.5 65 66">
            <g>
                <g>
                    <path fill="#fff" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
                    <path fill="#fff" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
                </g>
            </g>
            </svg>
        </div>
    </div>
</div>
<!-- End slide -->
<!-- script for iamage slidert -->
<script>
$('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});
</script>
<!-- image slider is ALL SET -->

<div class="container-down"></div>

<!-- Pre Loading Start -->
<div class="loading">
    <img src="img/loading.png" alt="Loading ... ">
</div>
<script>        
    window.onload = function(){
        document.querySelector(".loading").style.display = "none";
    }
</script>
<style>
.loading{
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 9999;
}
</style>
<!-- Pre Loading Start -->

<!-- Footer Area is here -->
<!-- <footer>
    <p>Design & Developed By : <a href="mailto:serajkhan48522@gmail.com">MD SERAJ KHAN</a></p>
</footer> -->

</body>
</html>