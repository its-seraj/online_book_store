<?php
    session_start();
    if(isset($_SESSION["username"])){
    }
    else{
        echo "<script>location.href='../index.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="update.css?<?=time()?>">
    <script type="text/javascript" src="../../LogIn/js/jquery-1.11.0.min.js"></script>
</head>
<body>
    <div class="nav">
        <h1 class="logo">Admin Panel</h1>
        <div class="underline"></div>
        <div class="nav2"><span class="horizontal"></span><h1 class="name"><?= $_SESSION["username"] ?></h1></div>
        <div class="logout">Logout</div>
    </div>
    <script>
        $(".logo").on("click", function(){
            location.href='../index.php';
        });
    </script>

    <div class="container">
        <div class="dropdown">
            <form method="post">
                <select class="category">
                    <option disabled selected>Select Category</option>
                    <option value="cse">Computer Science Eng</option>
                    <option value="ce">Civil Eng</option>
                    <option value="me">Mechanical Eng</option>
                    <option value="ee">Electrical & Electronics</option>
                    <option value="biotechnology">Biotechnology</option>
                    <optgroup label="Medical">
                        <option value="anatomy">anatomy</option>
                        <option value="biochemistry">biochemistry</option>
                        <option value="physiology">physiology</option>
                        <option value="anaesthesiology">anaesthesiology</option>
                        <option value="community medicine">community medicine</option>
                        <option value="dermatology & venreology">dermatology & venreology</option>
                        <option value="general medicine">general medicine</option>
                        <option value="obstetrics & gynaecology">obstetrics & gynaecology</option>
                        <option value="opthalmology">opthalmology</option>
                        <option value="orthopaedics">orthopaedics</option>
                        <option value="otorhinolaryngology(ent)">otorhinolaryngology(ent)</option>
                        <option value="pediatrics">pediatrics</option>
                        <option value="psychiatry">psychiatry</option>
                        <option value="surgery">surgery</option>
                        <option value="radio diagnosis">radio diagnosis</option>
                        <option value="forensic medicine & toxicology">forensic medicine & toxicology</option>
                        <option value="microbiology">microbiology</option>
                        <option value="pathology">pathology</option>
                        <option value="pharmalogy">pharmalogy</option>
                        <option value="dental materials">dental materials</option>
                        <option value="general anatomy">general anatomy</option>
                        <option value="general pathology & microbiology">general pathology & microbiology</option>
                        <option value="general medicine">general medicine</option>
                    </optgroup>
                </select>
                <input id="submit1" type="submit" value="Go">
            </form>
        </div>
        <script>
        //Here one problem : 
        //when we modify book details then the modified field
        //remains same at all 
        
            $(document).ready(function(){
                //click on logut to logout
                $(".logout").on("click", function(){
                    $.ajax({
                        url: "../logout.php",
                        type: "POST",
                        success: function(data){
                            //
                            location.href='../index.php';
                        }
                    });
                });

                /* modal codes */
                function modify(){
                    $(".edit").on("click", function(e){
                        e.preventDefault();
                        var isbn = $(this).data("value");
                        $(".overlay2").css("display", "block");
                        $.ajax({
                            url: "admin-modal.php",
                            type: "POST",
                            dataType: "JSON",
                            data: {isbn10: isbn},
                            success: function(data){
                                $("#img").attr("value", data.img);
                                $("#bookname").attr("value", data.name);
                                $("#writer").attr("value", data.writer);
                                $("#price").attr("value", data.price);
                                $("#discount").attr("value", data.discount);
                                $("#old-price").attr("value", data.old_price);
                                $("#save").attr("value", data.save);
                                $("#weight").attr("value", data.weight);
                                $("#pages").attr("value", data.pages);
                                $("#isbn10").attr("value", data.ISBN10);
                                $("#isbn13").attr("value", data.ISBN13);
                                $("#dimensions").attr("value", data.dimensions);
                                $("#publisher").attr("value", data.publisher);
                                $("#language").attr("value", data.language);
                                $("#department").attr("value", data.department);
                                //$("#submit").attr("data-value", data.ISBN10);
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

                /*modifying or edit in database */
                //this file contain code for execute update
                <?php //include("modify.php"); ?>
                $("#submit2").on("click", function(e){
                    e.preventDefault();
                    if(confirm("Are you really want to Modify Data in Database ?") == true){
                        var isbn10 = $("#isbn10").val();
                        var isbn13 = $("#isbn13").val();
                        var img = $("#img").val();
                        var name = $("#bookname").val();
                        var writer = $("#writer").val();
                        var price = $("#price").val();
                        var discount = $("#discount").val();
                        var oldprice = $("#old-price").val();
                        var save = $("#save").val();
                        var weight = $("#weight").val();
                        var pages = $("#pages").val();
                        var dimensions = $("#dimensions").val();
                        var publisher = $("#publisher").val();
                        var language = $("#language").val();
                        var department = $("#department").val();
                        $.ajax({
                            url: "modify.php",
                            type: "POST",
                            data: {ISBN10: isbn10, ISBN13: isbn13, name: name, img: img, writer: writer, price: price, discount: discount, oldprice: oldprice, save: save, weight: weight, pages: pages, dimensions: dimensions, publisher: publisher, language: language, department: department},
                            success: function(data){
                                //no return value
                                refresh();
                            }
                        });
                        $(".overlay2").css("display", "none");
                    }
                });
                
                function listing(){
                    $("#submit1").on("click", function(e){
                        e.preventDefault();
                        var selected = $(".category option:selected").val();
                        //hide instruction on homepage
                        $(".instruction").css("display", "none");
                        $.ajax({
                            url: "get.php",
                            type: "POST",
                            data: {stream: selected},
                            success: function(data){
                                $(".table").html(data);
                                //javascript not work on it plzz call that function 
                                //which will use on this content 
                                modify();
                                delette();
                            }
                        });
                    });
                }
                listing();

                /* Refresh list when we want */
                function refresh(){
                    var selected = $(".category option:selected").val();
                    $.ajax({
                        url: "get.php",
                        type: "POST",
                        data: {stream: selected},
                        success: function(data){
                            $(".table").html(data);
                            //javascript not work on it plzz call that function 
                            //which will use on this content 
                            modify();
                            delette();
                        }
                    });
                }

                /* Delete table when clixk on delete */
                function delette(){
                    $(".delete").on("click", function(e){
                        e.preventDefault();
                        if(confirm("Are you sure to Delete ?") == true){
                            var isbn = $(this).data("value");
                            $.ajax({
                                url: "delete.php",
                                type: "POST",
                                data: {isbn10: isbn},
                                success: function(data){
                                    //no return value
                                    refresh();
                                }
                            });
                        }
                    });
                }
            });
        </script>

        <div class="table"></div>
    </div>

    <div class="instruction">
        <h3>Remember That</h3>
        <img src="admin.png" />
        <p style="padding-top: 100px;"><span class="circle"></span>&nbsp; All the Data are very Sensitive </p>
        <p><span class="circle"></span>&nbsp; There is no Backup to Recover Lost Data </p>
        <p><span class="circle"></span>&nbsp; If you Modify or Delete any Data, it will never be Recover  </p>
        <p><span class="circle"></span>&nbsp; We recommend you to read the Documentation carefully (tap on Read More) </p>
        <div class="read-more"><a href="Documentation.pdf" target="_blank">Read More ...</a></div>
    </div>


    <!--     Modal for edit or modify database value -->
    <div class="overlay2">
        <div class="book-modal">
            <span id="cross">&times;</span>
            <form autocomplete='off' method='POST'>
                <div class="left-modal">
                    <div class='inputBox'><input type='text' name='ISBN10' id="isbn10" required='required'><span>ISBN-10</span></div>
                    <div class='inputBox'><input type='text' name='ISBN13' id="isbn13" required='required'><span>ISBN-13</span></div>
                    <div class='inputBox'><input type='text' name='name' id="bookname" required='required'><span>Book Name</span></div>
                    <div class='inputBox'><input type='text' name='img' id="img" required='required'><span>img Name</span></div>
                    <div class='inputBox'><input type='text' name='writer' id="writer" required='required'><span>Writer</span></div>
                    <div class='inputBox'><input type='text' name='price' id="price" required='required'><span>Price</span></div>
                    <div class='inputBox'><input type='number' name='discount' id="discount" required='required'><span>Discount</span></div>
                    <div class='inputBox'><input type='text' name='oldprice' id="old-price" required='required'><span>Old Price</span></div>
                </div>
                <div class="right-modal">
                    <div class='inputBox'><input type='text' name='save' id="save" required='required'><span>Save</span></div>
                    <div class='inputBox'><input type='number' name='weight' id="weight" required='required'><span>Weight</span></div>
                    <div class='inputBox'><input type='number' name='pages' id="pages" required='required'><span>Pages</span></div>
                    <div class='inputBox'><input type='text' name='dimensions' id="dimensions" required='required'><span>Dimensions</span></div>
                    <div class='inputBox'><input type='text' name='publisher' id="publisher" required='required'><span>Publisher</span></div>
                    <div class='inputBox'><input type='text' name='language' id="language" required='required'><span>Language</span></div>
                    <div class='inputBox'><input type='text' name='department' id="department" required='required'><span>Department</span></div>
                </div>
                <div class='inputBox'><input id='submit2' type='submit' name='submit' value='MODIFY'></div>
		    </form>
	    </div>
    </div>
</body>
</html>