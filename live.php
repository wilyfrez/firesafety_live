<?php 
session_start();

if(!isset($_SESSION['joined'])) {
	header('Location: index.php');
}

include('dbconnector.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
    content="Fire Satefy Initiative, Fire, Satefy, OCEO Fire, Fire Safety, Safety Initiative, Safety Tips ">
    <meta name="keywords"
    content="Fire Satefy Initiative, Fire, Satefy, OCEO Fire, Fire Safety, Safety Initiative, Safety Tips ">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fire Safety Initiative</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Your custom styles (optional) -->


    <style type="text/css">
    .nav-tabs .nav-link.active {
        color: #007bff !important;
    }

    body {
        overflow-x: hidden !important;
    }

    a {
        color: #495057 !important;
    }

    .btn-style {
        border: 1px solid #fff;
        border-radius: 15px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        background-color: #fff;
        
    }

    .navbar-brand {
        font-size: 2em;
        font-weight: bold;
    }


    .btn-style:hover {
        background-color: #fff;
    }

    .btn-style:active {
        border: 0px solid #fff;
    }

    .textarea {

        border-radius: 15px;
    }

    /*-- another background-color 
	background-color:#e5e2eb; --*/

    .comment-box {
        border: 1px solid #f7f8fa;
        background-color: #f7f8fa;
        border-radius: 15px;
         font-size: 0.95rem;
    }


    .commentor-name {
        font-weight: 600;
        color: #5cb85c;
    }

    .sm-comment-name {
        margin-left: 80px;
    }

    .timeAgo,
    .country {
        font-size: 0.75rem;
        font-weight: 500;
    }


    .videoplayer p {
        margin-bottom: 5px;
    }

    @media (max-width: 768px) {
        h4 {
            font-size: 1.0rem;
        }

        .navbar-brand {
            font-size: 1.7em;

        }

    }

    .timeAgo,
    .country {
        font-size: 0.7rem;
    }

    .pic img {
        height: 35px;
        width: 35px;
    }

    .comment-box {
        font-size: .85rem;
    }

    .testify-name {
        font-size: 0.8rem;
    }

    @media (max-width: 576px) {
        .navbar {
            width: 100%;
            z-index: 2;
            padding: 0 0.5rem !important;
        }

        .navbar-brand {
            font-size: 1.4em;

        }


        .navbar-toggler {
            padding: 0.1rem !important;
        }

        h4 {
            font-size: 0.9rem;
        }

        .textarea {
            font-size: 0.8rem;
        }

        .videoplayer {
            width: 100%;

        }

        .tab-content {
            background-color: #fff;
            width: 100%;
            margin-top: 21rem;
        }

        .btn-style {
            font-size: 0.8rem !important;
            padding: 0.35rem !important;
            border-radius: 12px;
        }

        .timeAgo,
        .country {
            font-size: 0.65rem;
        }

        .comment-box {
            font-size: .75rem;
        }

        .pic img {
            height: 25px;
            width: 25px;

        }

        footer {
            font-size: 0.7rem;
        }
    }

    @media (max-width: 375px) {}

    @media (max-width: 320px) {

        .pic img {
            height: 20px;
            width: 20px;
        }
    }
    </style>



</head>

<body class="bg-light">

    <!--Main Navigation-->


    <!-- Navbar -->
    <nav class="navbar  navbar-expand-lg navbar-light  bg-white">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand text-warning" href="#">
                <span>
                    <img src="img/logo1.png" alt="" height="50px" width="50px">
                </span>
                Fire Safety Initiative
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar"
                aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="myNavbar">


                <!-- Right -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link  text-success mr-2">You're welcome,
                            <span style="text-transform: capitalize;">
                                <?php echo $_SESSION['fullname']; ?>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a type="button" href="logout.php"
                            class="btn btn-outline-warning nav-link border border-warning rounded text-dark"
                            name="signOut">
                            Sign Out
                        </a>

                    </li>

                </ul>


            </div>

        </div>
    </nav>
    <!-- Navbar -->


    <!--Main Navigation-->

    <!--Main layout-->
    <div class="">
        <div class="row ">
            <div class="col"></div>
            <div class="col-12 col-lg-8 bg-white card mt-lg-3">
                <div class="videoplayer bg-white mt-lg-4 mx-lg-2 mb-lg-2 m-0">
                    <video class=" w-100" src="vid/promo.mp4" controls></video>

                    <h5 class="ml-4 text-secordary">Fire Safety Tips</h5>


                    <hr>


                </div>


                <div id="posted-comments">
                    <?php 
										
									$commentSql = $conn->query("SELECT * FROM comments ORDER BY comments.id DESC");
									while($data = $commentSql->fetch_assoc() ) {
										   
										echo  '<div class="d-flex flex-row container-fluid mb-1">
												   <div class="pic">
														<img class="rounded-circle  mr-3" src="img/pic.png" height="40px" width="40px" alt="">
												   </div>
													<div class="flex-grow-1">
													   <div class=" comment-box w-100  p-2">
														   <span class="commentor-name mr-2 mr-md-3 ">'.$data['name'].'</span>'.$data['comment'].'
													   </div>
													<div class="col-12 country">'.$data['country'].' <time class="date timeago" datetime="'.$data['time'].'"></time>  </div>
													</div>
											  </div>';
										}			
						 ?>


                    <!--Add Your Comments-->
                    <div class="col-12  mt-4">
                        <input id="commentor" type="text" name="commentor" value=" " class="d-none">
                        <textarea class="form-control textarea  p-2  " id="newComment" name="newComment"
                            placeholder="Add your comment " cols="30" rows="2"></textarea>
                        <a type="submit" name="addComment"
                            class="btn-sm btn-white my-2 btn-style text-warning p-2 float-right commentDetails"
                            onclick="addComment()" id="addComment">Post Comment</a>
                    </div>


                </div>




            </div>


            <div class="col"></div>


        </div>
    </div>

    <!--Main layout-->



    <!--Footer-->
    <footer class="sticky-footer shadow-sm bg-white  font-small wow fadeIn">

        <div class="d-flex justify-content-around align-items-center text-dark  ">
            <div class="logo ">
                <img src="img/logo.png" alt="" height="200px" width="200px">
            </div>
           
            <div class="Contact text-left text-warning">
                <h3>Contact</h3>
                <p> 8 Billings Way, Oregun, Ikeja Lagos State</p>
                <p>+234 811110003</p>
                <p>firesafety@loveworld360.com</p>
            </div>
        </div>

        <hr>

        <!--Copyright-->
        <div class="footer-copyright text-center text-secondary py-1 py-lg-2">
            © 2020 Media-Programming, OCEO

        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- TimeAgo JavaScript -->
    <script type="text/javascript" src="js/jquery.timeago.js"></script>

    <!-- Initializations -->
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();

    setInterval(updateComment, 1000);

    jQuery(document).ready(function() {
        jQuery("time.timeago").timeago();
    });


    function addComment() {
        var comment = document.getElementById("newComment").value;
        document.getElementById("newComment").value = "";
        if (comment == "") {
            document.getElementById("newComment").style.borderColor = "red";
        } else {
            var params = "addComment=" + 1 + "&comment=" + comment;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //Prepend comment
                    var parentComment = document.getElementById("posted-comments");
                    var childComment = document.createElement('div');
                    childComment.innerHTML = this.responseText;

                    // Prepend it
                    parentComment.insertBefore(childComment, parentComment.firstChild);
                }
            };
            xmlhttp.open("POST", "process.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send(params);
        }
    }

    function testify() {

        var testimony = document.getElementById('testimony').value;
        document.getElementById("testimony").value = "";

        if (testimony == "") {
            //	if any input is empty 
            document.getElementById('testimony').style.borderColor = "red";
        } else {

            var params = "testify=" + 1 + "&testimony=" + testimony;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("testimony-status").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("POST", "process.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send(params);
        }
    }


    function updateComment() {

        var params = "updateComment=" + 1;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("posted-comments").innerHTML = this.responseText;
                jQuery(document).ready(function() {
                    $("time.timeago").timeago();
                });
            }
        };
        xmlhttp.open("POST", "process.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(params);
    }
    </script>
</body>

</html>