<!DOCTYPE html>
<html>
<?php session_start();?>
<?php if(!isset($_SESSION['user_data']['id'])){
  echo "some issues with login";exit;
}
include 'model/ProfileModel.php';
$profileModel = new ProfileModel();
$userData = $profileModel->getUserData($_SESSION['user_data']['id']);
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Oracooli/Mentor</title>

<!-- Bootstrap CSS CDN -->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Our Custom CSS -->

<link rel="stylesheet" href="style4.css">



<!-- Font Awesome JS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/regular.css" integrity="sha384-zkhEzh7td0PG30vxQk1D9liRKeizzot4eqkJ8gB3/I+mZ1rjgQk+BSt2F6rT2c+I" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
<!--MAIN WRAPPER CLASS  -->
<div class="wrapper">

  <!-- SIDEBAR  -->


  <nav id="sidebar">

    <div style="margin-top:-19px;">
      <ul class="list-unstyled components">
        <li class="">
          <a href="#homeSubmenu"  aria-expanded="false">
            <i class="far fa-envelope"></i>
            Inbox
          </a>

        </li>
        <li>
          <a href="#">
            <i class="glyphicon glyphicon-briefcase"></i>
            About
          </a>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
            <i class="glyphicon glyphicon-duplicate"></i>
            Pages
          </a>
          <ul class="collapse list-unstyled" id="pageSubmenu" style="font-size:0.60em">
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="glyphicon glyphicon-link"></i>
            Portfolio
          </a>
        </li>
        <li>
          <a href="#">
            <i class="glyphicon glyphicon-paperclip"></i>
            FAQ
          </a>
        </li>
        <li>
          <a href="#">
            <i class="glyphicon glyphicon-send"></i>
            Contact
          </a>
        </li>


        <div  class="sidebar-footer" >

          <!-- item--><a href="" class="link" data-toggle="tooltip" title="Feedback"><i class="far fa-comment-alt"></i></a>
          <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="fas fa-cog"></i></a>
          <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="fas fa-power-off"></i></a>

        </div>

      </ul>

    </div>




  </nav>
  <!--SIDEBAR END  -->


  <!--MAIN NAVBAR AND BODY -->
  <div id="content">


    <!-- NAVBAR  -->

    <nav class="navbar">

      <!-- SIDEBAR COLLAPSE BUTTON  -->

      <button style="padding-left:15px;text-decoration:none;background-color:transparent;padding-top:-25px;margin-top:20px;margin-bottom:-70px;height:70px;margin-left:-5px;width:5px" type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
        <span><i style="text-align:center;margin-top:15px;margin-left:-10px;color:white" class="fas fa-align-left  "></i></span>
      </button>
      <!-- SIDEBAR COLLAPSE BUTTON END -->



      <!-- NAVBAR BUTTON AND TITLE  -->
      <div class="container-fluid">
        <a class="nav-logo" href="index.html">Oracooli</a>
        <li style="list-style-type: none;" class="dropdown">
          <a href="#"class="dropdown-toggle"  data-toggle="dropdown"><?php echo $userData->first_name." ".$userData->last_name;?><span class="caret"></span>
            <img  class="img-circle"src="images/ajay.jpg"> </a>
            <ul class="dropdown-menu">
              <li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fas fa-user"></i>&nbsp;Edit Profile</a></li>
              <li><a href="#"><i class="fas fa-envelope"></i>&nbsp;Inbox</a></li>
              <li><a href="#"><i class="fas fa-power-off"></i>&nbsp;Logout</a></li>
              <li><a href="#"><i class="fas fa-clipboard"></i>&nbsp;Tasks</a></li>
            </ul>
          </li>
          <a class="dropdown" href="index.html" >
            <i style="text-align:center;margin-top:15px;margin-left:-5px;color:white"class="fas fa-exclamation-circle   "></i>
            <span></span>
          </a>
          <a class="dropdown" href="mentor.html" >
            <i style="text-align:center;margin-top:15px;margin-left:-5px;color:white"class="fas fa-user-graduate  "></i>
            <span></span>
          </a>
          <a class="nav-icon" href="index.html" >
            <i style="text-align:center;margin-top:15px;margin-left:-10px;color:white"class="fas fa-home  "></i>
            <span></span>
          </a>
          <a class="nav-icon" href="index.html" >
            <i style="text-align:center;margin-top:15px;margin-left:-10px;color:white"class="fas fa-chart-line  "></i>
            <span></span>
          </a>
          <a class="	nav-icon" href="#"data-toggle="modal" data-target="#myModal" >
            <i style="text-align:center;margin-top:15px;margin-left:-10px;color:white;"class="fas fa-search  "></i>
            <span></span>
          </a>
        </div>



        <!-- SEARCH MODAL -->

        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- MODAL CONTENT-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close float-left" data-dismiss="modal">&times;</button>

              </div>
              <div class="modal-body">

                <div class="row"style="background-color:green;">
                  <div class="col-sm-6 col-sm-offset-3">

                    <div class="input-group stylish-input-group">
                      <input type="text" class="form-control"  placeholder="Search" >
                      <span class="input-group-addon">
                        <button type="submit">
                          <span class="fas fa-search"></span>
                        </button>
                      </span>
                    </div>

                  </div>

                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
        </div>
        <style>

        .stylish-input-group .input-group-addon{
          background: white !important;
        }
        .stylish-input-group .form-control{
          border-right:0;
          box-shadow:0 0 0;
          border-color:#ccc;
          margin-left:-125px;
          width:100%;

        }
        .stylish-input-group button{
          border:0;
          background:transparent;

        }
        </style>


        <!-- NAVBAR BUTTON AND TITLE END -->







      </nav>
      <!-- NAVBAR  END -->


      <!--  PROFILE EDIT MODAL CONTENT-->


      <div class="modal fade" style="background-color:transparent;opacity: 1;height:100%;margin-top:3%;"id="myModal2" role="dialog">

        <div style="background-color:tranparent;width:105%;height:1%;margin-left:-0.9%;"class="modal-dialog">


          <div class="modal-content"style="background-color:green;height:1%;">

            <div class="modal-body" style="height:1%">

              <!--PROFILE EDIT FORM DESCRIPTION -->

              <div class="container-fluid" style="height:750px;background-color:transparent;margin-left:-15%;margin-top:-1%;">

                <div class="jumbotron " style="box-shadow:10px 15px 25px 0 rgba(0, 0, 0, 0.2), 0 15px 22px 0 rgba(0, 0, 0, 0.19);margin-top:75px;height:500px;width:75%;background-color:white;margin-left:20.5%;">




                  <div class="carousel slide"id="carouseledit"  data-interval="false" data-ride="carousel" style="background-color:white;width:80%;height:110%;float:right;font-size:15px;margin-right:5%;margin-top:-2%;" >
                    <ol class="carousel-indicators">
                      <a style="color:;"  href="#carouseledit" data-slide="prev" class="active"><i class="fas fa-angle-left fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <a  style="color:;" href="#carouseledit" data-slide="next"><i class="fas fa-angle-right fa-2x"></i></a>
                    </ol>
                    <div class="carousel-inner" role="listbox">

                      <!-- FIRST EDIT FORM -->
                      <div class="item active">
                        <h4 style="text-align:center">Personal Information</h4><br><br>
                        <button type="button" style="color:red;margin-top:-6%;"class="close float-right" data-dismiss="modal"><i class="fas fa-times"></i></button>
                        <form class="form-inline">
                          <div class="form-group">

                            <input type="text" class="form-control" id="First Name" placeholder="First Name">
                          </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <div class="form-group">

                            <input type="text" class="form-control" id="Last Name" placeholder="Last Name">
                          </div><br><br></form>
                          <div class="clearfix"> </div>
                          <form >
                            <div class="form-group">

                              <input type="Email" class="form-control" id="Email" placeholder="Email">
                            </div>
                            <div class=" form-group">
                              <input type="text" class="form-control" id="Language" placeholder="Languages Know">
                            </div>

                            <div class=" form-group">

                              <input type="text" class="form-control"  placeholder="Mobile Number" >
                            </div>
                          </form>

                          <form >
                            <div class="form-inline"  >
                              <label style="font-weight:500">select</label>
                              <select class=" form-control">
                                <option value="">India</option>
                                <option value="">USA</option>
                                <option value="">China</option>
                                <option value="">Gremany</option>
                                <option value="">Japan</option>
                              </select>
                            </div>

                          </form>
                          <form class="form-inline">
                            <button type="button"  style="margin-left:65%;outline:none;float:right;text-decoration:none; "class="btn btn-link float-right" >Save Changes</button>
                          </form>
                        </div>


                        <!-- SECOND EDIT FORM -->


                        <div class="item ">
                          <h4 style="text-align:center">Mentee Information</h4><br><br>
                          <button type="button" style="color:red;margin-top:-6%;"class="close float-right" data-dismiss="modal"><i class="fas fa-times"></i></button>
                          <form class="form-inline">
                            <div class="form-group">

                              <input type="text" class="form-control" id="Currentqualifications" placeholder="Current qualifications">
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-group">

                              <input type="text" class="form-control" id="Desired job" placeholder="Desired job or Field">
                            </div><br><br></form>
                            <div class="clearfix"> </div>
                            <form >
                              <div class="form-group">

                                <input type="text" class="form-control" id="Education" placeholder="Education (10th,12th,Degree)">
                              </div>
                              <div class=" form-group">
                                <input type="text" class="form-control" id="DesiredSkills" placeholder="Desired Skills">
                              </div>


                            </form>

                            <form class="form-inline">
                              <button type="button"  class="btn btn-link"style="margin-left:65%;outline:none;float:right;text-decoration:none; " >Save Changes</button>

                            </form>
                          </div>

                          <!-- THIRD EDIT FORM -->

                          <div class="item">
                            <h4 style="text-align:center">Mentor Information</h4><br><br>
                            <button type="button" style="color:red;margin-top:-6%;"class="close float-right" data-dismiss="modal"><i class="fas fa-times"></i></button>
                            <form class="form-inline">
                              <div class="form-group">

                                <input type="text" class="form-control" id="Jobs" placeholder="Jobs">
                              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="form-group">

                                <input type="text" class="form-control" id="Experience" placeholder="Experience">
                              </div><br><br></form>
                              <div class="clearfix"> </div>
                              <form >
                                <div class="form-group">

                                  <input type="text" class="form-control" id="Job Designation" placeholder="Job Designation">
                                </div>
                                <div class=" form-group">
                                  <input type="text" class="form-control"  placeholder="Expertise">
                                </div>

                                <div class=" form-group">

                                  <input type="text" class="form-control "id="Acheivement"  placeholder="Acheivement" >
                                </div>
                              </form><br><br><br>
                              <form class="form-inline">
                                <button type="button"  class="btn btn-link "style="margin-right:3%;outline:none;float:right;text-decoration:none; " >Confirm</button>
                                <button type="button"  class="btn btn-link " style="margin-left:65%;outline:none;float:right;text-decoration:none; ">Save Changes</button>
                              </form>
                            </div>

                          </div>
                        </div>
                        <!--PROFILE CARD MODAL-->

                        <div class="panel panel-defualt" style="box-shadow:10px 15px 25px 0 rgba(0, 0, 0, 0.2), 0 15px 22px 0 rgba(0, 0, 0, 0.19);margin-left:-13%;margin-top:-6.1%;height:600px;width:25%;background-color:white;">

                          <div class="row">



                            <div class="panel-heading container-fluid">

                              <img src="images/ajay.jpg" alt="image" style="height:250px;  margin-top:-5%;margin-left:-0.5%;width:101%;">
                            </img>
                            <button onclick="#" class="btn btn-primary btn-md navbar-btn follow" style="border:none;border-radius:10%;background-color:#9932CC;margin-top:-18.7%;margin-left:-11px;">
                              <span class="">  <div  class="post-file">
                                <i class="far fa-edit"></i>
                                <input id="input-1" name="input1[]" type="file" multiple="" class="">
                              </div></span>

                            </button>
                            <script>
                            $(document).on('ready', function() {
                              $("#input-1").fileinput({showCaption: false});
                            });
                            </script>
                            <script>
                            $(document).on('ready', function() {
                              $("#input-2").fileinput({showCaption: false});
                            });
                            </script>
                            <script>
                            $(document).on('ready', function() {
                              $("#input-3").fileinput({showCaption: false});
                            });
                            </script>
                            <script>
                            $(document).on('ready', function() {
                              $("#input-4").fileinput({showCaption: false});
                            });
                            </script>

                            <div style="font-size:19px;background-color:white;margin-top:-4.5%;width:100%;height:30px;margin-left:;text-align:center">
                              <input id="name" type="text"  name="name" placeholder="Ajay Chaudhari"required="">
                            </div>
                            <hr width="30%">
                            <div class="panel-body text-center " style="font-size:15px ;background-color:white;margin-top:-5%;">

                              About

                            </div>
                            <br>
                            <div >
                              <ul class="list-unstyled components"style="background-color:white;width:85%;;margin-top:-45%;margin-left:5%;border:0px solid white;line-height:30px;font-size:12px">
                                <li><div class="text-area" >
                                  <textarea   required="" > What are you doing...</textarea>
                                </div></li>




                              </ul>




                            </div>


                          </div>


                        </div>
                      </div>
                    </div>
                  </div>
                  <!--PROFILE EDIT FORM DESCRIPTION  END-->


                </div>
              </div>
            </div>
          </div>



          <!--  PROFILE EDIT MODAL CONTENT END-->


          <!--MAIN CONTENT  -->
          <div id="#page-wrapper " >
            <div class=" content-main scroll" >






              <!--PROFILE DESCRIPTION-->

              <div class="container-fluid" style="height:700px;background-color:#fdfbfb;margin-left:-15%;">


                <div class="jumbotron " style="box-shadow:10px 15px 25px 0 rgba(0, 0, 0, 0.2), 0 15px 22px 0 rgba(0, 0, 0, 0.19);margin-top:99px;height:500px;width:75%;background-color:white;margin-left:22%;">


                  <a href="#" class="close1" data-toggle="modal" data-target="#myModal2"><i style="outline;none;border:none;float:right;margin-right:-2%;margin-top:-1%;"class="fas fa-user-edit"></i></a>



                  <div class="" style="background-color:white;width:85%;height:110%;float:right;font-size:15px;margin-right:-2%" >
                    <div class="row" style="background-color:;">
                      <div class="col-md-3"style="background-color:;width:20%;"><b>Education:</b></div>
                      <div class="col-md-3"style="background-color:;width:30%;"><?php echo $userData->education;?></div>
                      <div class="col-md-3"style="background-color:;width:20%;"><b>Current Qualifications:</b></div>
                      <div class="col-md-3"><?php echo $userData->current_qualification;?></div>
                    </div><br><br>
                    <div class="row" style="background-color;">
                      <div class="col-md-3"style="background-color:;width:20%;"><b>Skills:</b></div>
                      <div class="col-md-3"style="background-color:;width:30%;"><?php echo $userData->languages_know;?></div>
                        <div class="col-md-3"style="background-color:;width:20%;"><b>Expertise:</b></div>
                        <div class="col-md-3"><?php echo $userData->expertise;?></div>
                      </div>
                      <br><br>
                      <div class="row" style="">
                        <div class="col-md-3"style="background-color:;width:20%;"><b>Job :</b></div>
                        <div class="col-md-3"style="background-color:;width:30%;"><?php echo $userData->jobs;?></div>
                        <div class="col-md-3"style="background-color:;width:20%;"><b>Job Designation: </b></div>
                        <div class="col-md-3"><?php echo $userData->designation;?></div>
                      </div>
                      <br><br>
                      <div class="row" style="">
                        <div class="col-md-3"style="background-color:;width:20%;"><b>Experience:	</b></div>
                        <div class="col-md-3"style="background-color:;width:30%;"><?php echo $userData->experience;?> years</div>
                        <div class="col-md-3"style="background-color:;width:20%;"><b>Acheivement:</b></div>
                        <div class="col-md-3"><?php echo $userData->achievement;?></div>
                      </div>
                      <br><br>
                      <div class="row" style="">
                        <div class="col-md-3"style="background-color:;width:20%;"><b>Country	</b></div>
                        <div class="col-md-3"style="background-color:;width:30%;"><?php echo $userData->country;?></div>
                        <div class="col-md-3"style="background-color:;width:20%;"><b>University</b></div>
                        <div class="col-md-3"><?php echo $userData->university;?></div>
                      </div>
                      <br><br>


                    </div>


                    <!--PROFILE DESCRIPTION CARD  -->


                    <div class="panel panel-defualt" style="box-shadow:10px 15px 25px 0 rgba(0, 0, 0, 0.2), 0 15px 22px 0 rgba(0, 0, 0, 0.19);margin-left:-15%;margin-top:-6%;height:600px;width:25%;background-color:white;">

                      <div class="row">



                        <div class="panel-heading container-fluid">

                          <img src="uploads/<?php echo $userData->profile_image; ?>" alt="image" style="height:250px;  margin-top:-5%;margin-left:-1%;width:101.5%;">

                          <button onclick="#" class="btn btn-primary btn-md navbar-btn follow" style="border:none;border-radius:10%;background-color:#9932CC;margin-top:-20%;margin-left:-11px;">
                            <span class="msg-follow">Follow</span>
                            <span class="msg-following">Following</span>
                            <span class=" msg-unfollow">Unfollow</span></button>
                          </img>
                          <style>

                          button .msg-follow,
                          button .msg-following,
                          button .msg-unfollow{
                            display: none;

                          }


                          button .msg-follow{
                            display: inline;
                          }

                          button.following .msg-follow{
                            display: none;
                          }

                          button.following .msg-following{
                            display: inline;
                          }

                          button.following:not(.wait):hover .msg-following{
                            display: none;
                          }

                          button.following:not(.wait):hover .msg-unfollow{
                            display: inline;
                          }
                          </style>
                          <script>
                          $('button').click(function(){
                            var $this = $(this);
                            $this.toggleClass('following')
                            if($this.is('.following')){
                              $this.addClass('wait');
                            }
                          }).on('mouseleave',function(){
                            $(this).removeClass('wait');
                          })
                        </script>
                        <div style="font-size:19px;background-color:white;margin-top:-5%;width:100%;height:30px;margin-left:;text-align:center">
                          <?php echo $userData->first_name." ".$userData->last_name;?>
                        </div>
                        <hr width="30%">
                        <div class="panel-body text-center " style="font-size:15px ;background-color:white;margin-top:-5%;">

                          About
                          <div class="text-area1">
                            <pre id="uploadstatus"> <?php echo $userData->about;?></pre>
                          </div>
                        </div>

                        <br>
                        <div>
                          <ul class="list-unstyled components"style="background-color:white;width:100%;;margin-top:-40%;margin-left:px;border:0px solid white;line-height:30px;font-size:12px">


                            <div class="col-md-3"style="background-color:;width:%;"><b>Following: </b></div>
                            <div class="col-md-3"> <?php echo $userData->followers;?> </div>
                            <div class="col-md-3"style="background-color:;width:%;"><b>Followers: </b></div>
                            <div class="col-md-3"> <?php echo $userData->following;?> </div>

                          </ul>




                        </div>

                        <button onclick="#" class="btn btn-success btn-md navbar-btn" style="margin-left:-0.1%;font-size:15px;margin-top:25%;width:100%;border:none;background-color:white;color:#9932CC;">
                          Add as Friend
                        </button>

                      </div>


                    </div>
                  </div>
                </div>
              </div>
              <!--PROFILE DESCRIPTION END -->
              <br>


              <br>
              <br>
            </div>

          </div>
          <!--MAIN CONTENT END  -->

        </div>
        <!--MAIN NAVBAR AND BODY END  -->
      </div>
      <!--MAIN WRAPPER CLASS  END  -->

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <!-- Popper.JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <!-- Bootstrap JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

      <script type="text/javascript">
      $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
          $('#sidebar,#content,.content-main,.navbar').toggleClass('active');

        });

      });
      </script>


      <!--SEARCH BAR -->
      <script>
      $(document).ready(function(){
        $('#search').on("click",(function(e){
          $(".form-group").addClass("sb-search-open");
          e.stopPropagation()
        }));
        $(document).on("click", function(e) {
          if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
            $(".form-group").removeClass("sb-search-open");
          }
        });
        $(".form-control-submit").click(function(e){
          $(".form-control").each(function(){
            if($(".form-control").val().length == 0){
              e.preventDefault();
              $(this).css('border', '2px solid red');
            }
          })
        })
      })
    </script>
  </body>

  </html>
