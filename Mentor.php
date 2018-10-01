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
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Oracooli/Mentor</title>

    <!-- Bootstrap CSS CDN -->
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/bootstrap-theme.css" rel="stylesheet" />

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="js/bootstrap.min.js" rel="stylesheet" />


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="mediatag1200px.css">


    <!-- Font Awesome JS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="bg-light " >
		
                 <div class="">
                <ul class="list-unstyled components" style="height:">
                    <li class="sideicon">
                        <a href="#homeSubmenu"  aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            Inbox
                        </a>

                    </li>
                <li class="sideicon">
                        <a href="#homeSubmenu"  aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            Inbox
                        </a>

                    </li> <li class="sideicon">
                        <a href="#homeSubmenu"  aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            Inbox
                        </a>

                    </li> <li class="sideicon">
                        <a href="#homeSubmenu"  aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            Inbox
                        </a>

                    </li> <li class="sideicon">
                        <a href="#homeSubmenu"  aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            Inbox
                        </a>

                    </li>
 </ul>
<ul >
					 <div  class="sidebar-footer" style="">

                <!-- item--><a href="#" class=" " style="color:blue;" data-placement="bottom" data-toggle="tooltip" title="Feedback"><i class="far fa-comment-alt"></i></a><br>
				<!-- item--><a href="#" class=""style="color:black;" data-placement="bottom" data-toggle="tooltip" title="Settings"><i class="fas fa-cog"></i></a><br>
                <!-- item--><a href="#" class="" style="color:red;" data-placement="bottom" data-toggle="tooltip" title="Logout"><i class="fas fa-power-off"></i></a>

	       </div>
</ul>
               

                 </div>

	




        </nav>

    
<div id="content">

 <nav class="navbar  bg-light">
                

<nav class="nav ">
 <a   id="sidebarCollapse" class="btn btn-link navbar-btn"> <i  class="fas fa-align-left  "></i> </a>

 <a class="nav-link navbarsmall" data-toggle="tooltip" data-placement="bottom" title="Home" href="#"> <i class="fas fa-home   "></i></a>
  <a class="nav-link navbarsmall" data-toggle="tooltip" data-placement="bottom" title="Live Data" href="#"><i class="fas fa-chart-line   "></i></a></a>
  <a class="nav-link navbarsmall" data-toggle="tooltip" data-placement="bottom" title="Search" href="#"><i class="fas fa-search     "></i></a></a>
  
  </nav>
<nav class="justify-content-center">
<span class=" nav-logo">Oracooli</span>
</nav>
<nav class="nav  dropdown">
  <a class="nav-link navbarsmall icon3  " data-toggle="tooltip" data-placement="bottom" title="Notifications" href="#"><i class="fas fa-exclamation-circle "></i></a>
  <a class="nav-link navbarsmall icon3 " data-toggle="tooltip" data-placement="bottom" title="Mentor"href="#"><i class="fas fa-user-graduate"></i></a>
  <a class="nav-link navbarsmall icon2" class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $userData->first_name." ".$userData->last_name;?><span class="caret"></span><img  class="rounded-circle" src="uploads/<?php echo $userData->profile_image; ?>"></a>
   <div class="dropdown-menu border-bottom border-left-0 border-right-0 border-top-0" >
  <a href="#" class="dropdown-item" ><i class="fas fa-user "></i>Edit Profile</a>
      <a href="#" class="dropdown-item " ><i class="fas fa-envelope" ></i>Inbox</a>
      <a href="#" class="dropdown-item "><i class="fas fa-power-off"></i>Logout</a>
      <a href="#" class="dropdown-item "><i class="fas fa-clipboard"></i>Tasks</a>
  </div>
  </nav>
                    <button class="btn btn-dark d-inline-block d-lg-none" type="button" data-toggle="collapse" data-target="#Content" aria-controls="Content" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="Content">
                        <ul class="nav d-flex justify-content-end ">
						    <a class="nav-link " href="#"> <i class="fas fa-home   "></i></a>
                            <a class="nav-link" href="#"><i class="fas fa-chart-line   "></i></a></a>
                            <a class="nav-link" href="#"><i class="fas fa-search     "></i></a></a>
                          <a class="nav-link icon2 " href="#"><i class="fas fa-exclamation-circle "></i></a>
                           <a class="nav-link icon2 " href="#"><i class="fas fa-user-graduate"></i></a>
                             <a class="nav-link" href="#"><?php echo $userData->first_name." ".$userData->last_name;?><span class="caret"></span><img  class="rounded-circle"src="images/ajay.jpg"></a>
                    
                       
                        </ul>
                    </div>
               </nav>
			   
			   
			                    <!-- <MAIN CONTENT -->
								
								
           <div class=" content-main scroll" style="background-color:;" >
    

                 
						  <div class="jumbotron profilecontainer">
			  
			
	
         <!--profile -->
		 <!--Profile description -->
		 <div class="d-flex flex-row justify-content-center" style="">
		 
		 <div class="card profilecard" >
  <img class="card-img-top " style="height:11rem;"src="uploads/<?php echo $userData->profile_image; ?>" alt="Card image cap" >
     <button onclick="#" class="btn follow profilecardbutton" >
   <span class="msg-follow">Follow</span>
  <span class="msg-following">Following</span>
  <span class=" msg-unfollow">Unfollow</span></button>

  <div class="card-body">
  
   <p class=""style="color:black;text-align:center; font-size:12px;
 
 font-family:Lucida Console, Courier, monospace;

"> Ajay Chaudhari</p>
   <hr width="30%">
    <p class="card-title" style="text-align:;font-size:11px;color:black; font-family:Lucida Console, Courier, monospace;">About</p>
    <p class="card-text " style="font-size:10px;color:red">
				Tell About Yourself
			</p>
  </div>

  <div class="card-footer" style="background-color:white;border:none">
    <form class="form-inline"style="font-size:9px;margin-top:%;">

    
    <li class="list-group font-weight-normal   "style="margin-left:-1%">Following : 1.5M</li>
    <li class="list-group  font-weight-normal "style="margin-left:18%">Followers :10</li>
 </form>
    	<button onclick="#" class="btn btn-success btn-md navbar-btn" style="margin-left:1%;font-size:15px;margin-top:17%;width:100%;border:none;background-color:white;color:#9932CC;">
  Add as Friend
  </button>
  </div>
</div>
		 <div class="card profiledetails" style="">
		  <a href="#" class="close1" data-toggle="modal" data-target="#EditP"><i style="background-color:;outline;none;border:none;float:right;margin-right:1%;margin-top:1%;"class="fas fa-user-edit"></i></a>
		  
		  <div class="profiledescription" style=
		  "" >
		    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Education:</th>
      <td ><?php echo $userData->education;?></td>
      <th scope="col">Current Qualifications:</th>
     <td ><?php echo $userData->current_qualification;?></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="col">Skills::</th>
      <td ><?php echo $userData->languages_know;?></td>
      <th scope="col">Expertise:</th>
     <td ><?php echo $userData->expertise;?></td>
    </tr>
    <tr>
      <th scope="col">Job:</th>
      <td ><?php echo $userData->jobs;?></td>
      <th scope="col">Job Designation:</th>
     <td ><?php echo $userData->designation;?></td>
    </tr>
    <tr>
      <th scope="col">Experience:</th>
      <td ><?php echo $userData->experience;?> years</td>
      <th scope="col">Acheivement:</th>
     <td ><?php echo $userData->achievement;?></td>
    </tr>
	  
  </tbody>
</table>
	<!-- 		
 <div class="row" style="background-color:;">
  <div class="col-md-3"style="background-color:;width:20%;"><b>Education:</b></div>
  <div class="col-md-3"style="background-color:;width:30%;">BE CSE</div>
  <div class="col-md-3"style="background-color:;width:20%;"><b>Current Qualifications:</b></div>
  <div class="col-md-3">Amcat Qualified</div>
</div><br><br>
<div class="row" style="background-color;">
  <div class="col-md-3"style="background-color:;width:20%;"><b>Skills:</b></div>
  <div class="col-md-3"style="background-color:;width:30%;"> HTML5.1,PHP,Javascript,
  Angular JS,</div>
  <div class="col-md-3"style="background-color:;width:20%;"><b>Expertise:</b></div>
  <div class="col-md-3">Django</div>
</div>
<br><br>
<div class="row" style="">
  <div class="col-md-3"style="background-color:;width:20%;"><b>Job :</b></div>
  <div class="col-md-3"style="background-color:;width:30%;">Product Development</div>
  <div class="col-md-3"style="background-color:;width:20%;"><b>Job Designation: </b></div>
  <div class="col-md-3">CTO</div>
</div>
<br><br>
<div class="row" style="">
  <div class="col-md-3"style="background-color:;width:20%;"><b>Experience:	</b></div>
  <div class="col-md-3"style="background-color:;width:30%;">10 years</div>
  <div class="col-md-3"style="background-color:;width:20%;"><b>Acheivement:</b></div>
  <div class="col-md-3">dshkjakjsadh</div>
</div>
<br><br>
<div class="row" style="">
  <div class="col-md-3"style="background-color:;width:20%;"><b>Experience:	</b></div>
  <div class="col-md-3"style="background-color:;width:30%;">10 years</div>
  <div class="col-md-3"style="background-color:;width:20%;"><b>Acheivement:</b></div>
  <div class="col-md-3">dshkjakjsadh</div>
</div>
-->
</div>
  <a href="#" class="close1" data-toggle="modal" data-target="#uploadP"><i style="background-color:transparent;outline;none;border:none;float:right;margin-right:1%;margin-top:%;"class="fas fa-cloud-upload-alt"></i></a>
</div>

</div>
 		<style>


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

	</div>

	

	<div class="container-fluid"style="top:0px; position:sticky;z-index:2;background-color:Transparent">
<a  class="trendingicon" data-toggle="collapse" href="#trending" aria-expanded="false" aria-controls="trending" style="">
    <i class="fas fa-glasses " ></i>
  </a>	
			<div class="collapse show active" id="trending" style="margin-top:;width:50rem; height:5rem; border:none; background-color:white;margin-left:15%;z-index:0  ">
		   

 

<div class="container"  >
  
  <div class='row' style="margin-top:-3rem;margin-left:-25rem;width:110rem;">

      <div class="carousel slide media-carousel  "   data-ride="carousel" style=" background-color:transparent;z-index:0" id="media">
        <div class="carousel-inner"style="background-color:white">
          <div class="carousel-item  show active"style="background-color:white;z-index:0" >
         <div class="card-deck " style="background-color:transparent;height:3rem;z-index:0" >
              <div class="card " style="width:10rem;background-color:transparent;border:none;z-index:0">

			      <img class="card-img-top "  style="width:4rem;height:3rem" src="images\ajay.jpg"  class="media-object" > 
		            <span class="trendingfont"> Ajay Chaudhari</span>
					<span class="trendingdescription" > django tuoorial guid for the beginnner </span>
              </div>  
			  <div class="card " style="width:rem;background-color:transparent;border:none">

			      <img class="card-img-top "  style="width:4rem;height:3rem"  src="images\ajay.jpg"  class="media-object" > 
		            <span class="trendingfont"> Ajay Chaudhari</span>
					<span class="trendingdescription"> django tuoorial guid for the beginnner </span>
              </div>   
			  <div class="card " style="width:rem;background-color:transparent;border:none">

			      <img class="card-img-top "   style="width:4rem;height:3rem" src="images\ajay.jpg"  class="media-object" > 
		            <span class="trendingfont"> Ajay Chaudhari</span>
					<span class="trendingdescription"> django tuoorial guid for the beginnner </span>
              </div>  
			  <div class="card " style="width:rem;background-color:;border:none">

			      <img class="card-img-top "   style="width:4rem;height:3rem" src="images\ajay.jpg"  class="media-object" > 
		            <span class="trendingfont"> Ajay Chaudhari</span>
					<span class="trendingdescription"> django tuoorial guid for the beginnner
			</span>
              </div>      
            
			  <!--  <div class="card ">

			      <img class="card-img-top" style="width:10rem" src="images\ajay.jpg"  class="media-object" > 
		
              </div>
			     
               <!-- <div class="card ">

			      <img class="card-img-top" style="width:10rem" src="images\ajay.jpg"  class="media-object" > 
		
              </div>-->
		 
			
                     
            </div>
          </div>
         <div class="carousel-item  show " >
         <div class="card-deck " style="height:3rem;" >
             <div class="card " style="width:10rem;background-color:white;border:none">

			      <img class="card-img-top "  style="width:4rem;height:3rem" src="images\ajay.jpg"  class="media-object" > 
		            <span class="trendingfont"> Ajay Chaudhari</span>
					<span class="trendingdescription" > django tuoorial guid for the beginnner </span>
              </div>     
			<div class="card " style="width:10rem;background-color:white;border:none">

			      <img class="card-img-top "  style="width:4rem;height:3rem" src="images\ajay.jpg"  class="media-object" > 
		            <span class="trendingfont"> Ajay Chaudhari</span>
					<span class="trendingdescription" > django tuoorial guid for the beginnner </span>
              </div>  
                   <div class="card " style="width:10rem;background-color:white;border:none">

			      <img class="card-img-top "  style="width:4rem;height:3rem" src="images\ajay.jpg"  class="media-object" > 
		            <span class="trendingfont"> Ajay Chaudhari</span>
					<span class="trendingdescription" > django tuoorial guid for the beginnner </span>
              </div>  
                 <div class="card " style="width:10rem;background-color:white;border:none">

			      <img class="card-img-top "  style="width:4rem;height:3rem" src="images\ajay.jpg"  class="media-object" > 
		            <span class="trendingfont"> Ajay Chaudhari</span>
					<span class="trendingdescription" > django tuoorial guid for the beginnner </span>
              </div>  
			  
            
			  <!--  <div class="card ">

			      <img class="card-img-top" style="width:10rem" src="images\ajay.jpg"  class="media-object" > 
		
              </div>
			     
               <!-- <div class="card ">

			      <img class="card-img-top" style="width:10rem" src="images\ajay.jpg"  class="media-object" > 
		
              </div>-->
		 
			
                     
            </div>
          </div>
        
		  
        </div>
       <a class="carousel-control-prev" href="#media"" role="button" data-slide="prev">
    <i class="fas fa-angle-double-left"aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#media" role="button" data-slide="next">
    <i class="fas fa-angle-double-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
  
      </div>                          
  
 
</div>
</div>
</div>
</div>
			<!-- Feed Selector-->
				 <div class="container-fluid"style="margin-top:-5%;background-color:transparent" >

<div class="card border-success  mb-3" style="max-width: 15rem;margin-top:8rem;position:sticky;top:20%;">
  <div class="card-header"style="font-size:13px;color:;background-color:white">Recent Activity</div>
  <div class="card-body">
    <h5 class="card-title"style="font-size:12px">Primary card title</h5>
    <p class="card-text"style="font-size:11px">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card border-info  mb-3" style="max-width:15rem;position:sticky;top:60%;">
  <div class="card-header"style="color:Lightblue;background-color:white">Suggestion</div>
  <div class="card-body">
    <h5 class="card-title"style="font-size:12px">Secondary card title</h5>
    <p class="card-text"style="font-size:11px">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div id="mySidenav2" style=" background-color:;" class="sidenav2">
  
   <a href="#" id="friends" data-toggle="collapse" data-target="#demo" >Community</a><br><br><br><br>
</div>
		 <div class="card collapse border-dark show active" id="demo"  style="background-color:white;color:black;width:15rem;">

	 <div class="row">



	<div class="card-title container-fluid text-center" style="background-color:;">


 <nav >
    <div class="nav nav-tabs " id="nav-tab" role="tablist">
	
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#tab1default" role="tab" aria-controls="nav-home" aria-selected="true">Mentor </a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#tab2default" role="tab" aria-controls="nav-profile" aria-selected="false">Friends</a>
  
  </div>
                                                 
				
                         
                        </nav>
</div>
<div class="card-body text-center" style="">
	 <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">Default 1</div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                      
                      
                    </div>
	<div class="card-footer   " style="border:none;background-color:white;position:absolute;
  bottom:0;width:rem;
  " >

		
		
			
			
		
	

</div>
				</div>

				
	

			</div>
			</div>	
<div class="container"style="background-color:white;width:50rem;margin-top:-41rem;"> 
		<div id="mySidenav1"  class="sidenav1">
  <a href="#Feeds" id="about"data-toggle="tooltip" title="All Feeds" data-placement="right"><i class="far fa-list-alt fa-2x "></i></a><br><br><br><br>
  
  
  
  <a href="#" class="blog" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"><i data-toggle="tooltip" data-placement="right"title="Videos" class="fas fa-video fa-2x"></i></a><br><br><br><br>
  
  
  
  
  <a href="#images2" id="projects"title="Images" data-toggle="tooltip" data-placement="right"><i class="far fa-images fa-2x"></i></a><br><br><br><br>
  <a href="#" id="contact"data-toggle="tooltip" data-placement="right"title="Seminars"><i class="far fa-file-video fa-2x"></i></a><br><br><br><br>
   <a href="#" id="quizzes"  data-toggle="tooltip" data-placement="right" title="Quizzes"><i class="fas fa-book-reader fa-2x"></i></a><br><br><br><br>
</div>
   <a href="#Feeds" id="top"  style="color:red;float:right;margin-top:70rem;position:sticky;top:35rem"data-toggle="tooltip" data-placement="right" title="Top"><i class="fas fa-angle-double-up fa-2x"></i></a><br><br><br><br>


	

<style>

.fa-2x{
  font-size: 1.5em;
}
#demo {
    float:right;
    top:12%;
    position: sticky;
    right:-12rem ;
	margin-right:1rem;
    transition: 0.3s;
    padding: 15px;
    width: 20rem;
	height:33.5rem;
    margin-top:-22rem;
    text-decoration: none;
    font-size: 11px;
    color: darkcyan;
    border-radius: 0 5px 5px 0;
	background-color:red;
}

#demo a {
  
}


#mySidenav2 {

	margin-right:-0.5rem;
    float:right;
    top:85%;
    position: sticky;
    right: -100px;
    transition: 0.3s;
    padding: 15px;
    width: 1px;
	height:10rem;
    margin-top:-15rem;
    text-decoration: none;
    font-size: 15px;
    color: darkcyan;
    border-radius: 0 5px 5px 0;
	background-color:;
}


#mySidenav2 a {
margin-right:-1.5rem;
 width: 8rem;
 height:3rem;
 transform: rotate(270deg);
	transform-origin: left top 0;
     top:75%;
	  margin-top:5rem;
    font-family:Lucida Console, Courier,monospace ;
   white-space: pre-wrap;
    position: fixed;
	color:white;
	text-align:center;
	z-index:1;
	
	background-color:darkcyan;
  
   
}
#mySidenav2.active {
margin-right:0.6rem;
    float:right;
    top:75%;
    position: sticky;
    right: -100px;
    transition: 0.3s;
    padding: 15px;
    width: 1px;
	height:10rem;
    margin-top:-15rem;
    text-decoration: none;
    font-size: 15px;
    color: red;
    border-radius: 0 5px 5px 0;
	background-color:;
  z-index:1;
   
}
#mySidenav2 a:hover {
    left: ;
	color:white;
}
#Friends {

    top: 20px;
    background-color: transparent;
}
/*Feeds*/
#mySidenav1 {
top:7rem;
    position: sticky;
    left: -100px;
    transition: 0.3s;
    padding: 15px;
    width: 9px;
	height:300px;
     margin-top:18rem;
	  margin-left:3%;
    text-decoration: none;
    font-size: 18px;
    color: darkcyan;
    border-radius: 0 5px 5px 0;
	background-color:white;
}

#mySidenav1 a {
    position: absolute;
    left: -40px;
    transition: 0.3s;
    padding: 15px;
    width: 40px;
    text-decoration: none;
    font-size: 9px;
    color: darkcyan;
    border-radius: 0 5px 5px 0;
	margin-left:25px;
}

#mySidenav1 a:hover {
    left: ;
	color:darkcyan;
}

#about {

    top: 20px;
    background-color: transparent;
}

.blog {
    top: 80px;
     background-color: transparent;
}

#projects {
    top: 140px;
     background-color: transparent;
}

#contact {
    top: 200px;
    background-color: transparent;
}
#quizzes{
    top: 260px;
    background-color: transparent;
}
#top{
    top: 260px;
    background-color: transparent;
}
</style>




	

		
			  	 <div class="card mx-auto chover  mb-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			     	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a> 
				 
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  <!--  <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="images/ETRG.mp4" allowfullscreen></iframe>
</div>-->
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:15rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->
 
			  
			  
			  
			  
			  
			  
			

                 
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >



					  
				<textarea   required="" placeholder="Comments"></textarea>
			

  </div>
             
              </div>
			  
		
			 
			  
               

 <div class=" card  mx-auto chover  mt-4 mb-5 " value="autofocus"  id="multi">
			  	 <div class="focus1 collapse multi-collapse"  id="multiCollapseExample2">

               <div class="card-header" style="background-color:white;border:none">
                
			      
				 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a> 
				 

			  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({animation: true});   
});
</script>
			 
              </div>
             <div class="card-body ">
			
			  <img class="card-img-top " src="images/ajay.jpg" alt="Card image cap" >
			   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div> 
                  <h6 class="card-title">DOTA 2</h6>
				  
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>
<div class="collapse"  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->
 
			  
			  
			  
			  
			  
			  
			  </div>

                 
            </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >



					  
				<textarea   required="" placeholder="Comments"></textarea>
			

  </div>
              </div>
              </div>
			  
			  
			  		  	 <div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			     	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a>
				 
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->
 
			  
			  
			  
			  
			  
			  
			

                 
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >



					  
				<textarea   required="" placeholder="Comments"></textarea>
			

  </div>
             
              </div>
			  		  	 <div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			     	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a>
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->
 
			  
			  
			  
			  
			  
			  
			

                 
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >



					  
				<textarea   required="" placeholder="Comments"></textarea>
			

  </div>
             
              </div>
			  		  	 <div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			      <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> 
				  Ajay Chaudhari
				 
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->
 
			  
			  
			  
			  
			  
			  
			

                 
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >



					  
				<textarea   required="" placeholder="Comments"></textarea>
			

  </div>
             
              </div>
			  		  	 <div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			      	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a>
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->
 
			  
			  
			  
			  
			  
			  
			

                 
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >



					  
				<textarea   required="" placeholder="Comments"></textarea>
			

  </div>
             
              </div>
			  		  	 <div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			      	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a>
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->
 
			  
			  
			  
			  
			  
			  
			

                 
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >



					  
				<textarea   required="" placeholder="Comments"></textarea>
			

  </div>
             
              </div>
			  		  	 <div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			      	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a>
				 
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->
 
			  
			  
			  
			  
			  
			  
			

                 
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >



					  
				<textarea   required="" placeholder="Comments"></textarea>
			

  </div>
             
              </div>
			  		  	 <div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			      	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a>
				 
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->
 
			  
			  
			  
			  
			  
			  
			

                 
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >



					  
				<textarea   required="" placeholder="Comments"></textarea>
			

  </div>
             
              </div>
			  		  	 <div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			     	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a>
				 
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->               
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >					  
				<textarea   required="" placeholder="Comments"></textarea>
  </div>            
              </div>	<div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			     	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a>
				 
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->               
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >					  
				<textarea   required="" placeholder="Comments"></textarea>
  </div>            
              </div>	<div class="card mx-auto chover mt-5 " id="Feeds" style="">

               <div class="card-header" style="background-color:white;border:none">
                
			     	 <a href="mentor.html"  data-content="Expertise" title="Follow<i style='float:right'>Ask Questions ?</i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="images\ajay.jpg"  class="media-object" style="width:40px; height:40px"> Ajay Chaudhari</a>
				 
			  
              </div>
             <div class="card-body ">
			  
			  <img class="card-img-top " src="images/dota_2.jpg" alt="Image" ></img>
			  
		   <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
			  	  <div class="clike">
			  <ul class="list-group  ">
               <button type="button"  class="btn btn-danger btn-circle"><i class="fas fa-heartbeat "></i>
                            </button><br>
							 <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                            </button> <br>
							<button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                            </button>

</ul>
			 
			   
			   
                </div> 
                </div>
              
				  <h6 class="card-title">DOTA 2</h6>
				
              <div class="card-text "id="module">
			  
			  <a role="button" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
</a>

<div style="" class="collapse"  id="Description" aria-expanded="false">
			
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			<!--  <div class=" collapse "  id="Description" aria-expanded="false">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  
  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>		 	  

			 		  
<a role="button" class="collapsed" data-toggle="collapse" href="#Description" aria-expanded="false" aria-controls="Description">
</a>-->               
            </div>
			 </div>
			<div class="card-footer text-muted comment border-bottom border-dark " style="border:none;background-color:white" >					  
				<textarea   required="" placeholder="Comments"></textarea>
  </div>            
              </div>	
              </div>
		  
              
			  
			  
			 </div>
			


</div>
<!--Edit Profile Modal-->
<div class="modal fade" id="EditP" tabindex="-1" role="dialog" aria-labelledby="EditP" aria-hidden="true">
  <div class="modal-dialog  modal-full " >
    <div class="modal-content " style="background-color:transparent" >
		 <div class="d-flex flex-row pcard">
		 
		 <div class="card " style="box-shadow:10px 15px 25px 0 rgba(0, 0, 0, 0.2), 0 15px 22px 0 rgba(0, 0, 0, 0.19);width: 20rem;border:none;margin-left:9.3%;margin-top:8.5%;z-index:5;">
  <img class="card-img-top " src="images/ajay.jpg" alt="Card image cap" >
     <button onclick="#" class="btn btn-primary btn-md navbar-btn follow" style="border:none;border-radius:10%;background-color:#9932CC;margin-top:-12%;width:25%;margin-left:-8%;;font-size:12px;">
   <span class="msg-follow">Follow</span>
  <span class="msg-following">Following</span>
  <span class=" msg-unfollow">Unfollow</span></button>

  <div class="card-body">
   <p class="font-weight-normal"style="color:black;text-align:center;"> Ajay Chaudhari</p>
   <hr width="30%">
    <p class="card-title" style="text-align:;font-size:15px;color:black;">About</p>
    <p class="card-text " style="font-size:11px;color:red">
				Tell About Yourself
			</p>
  </div>
  <form class="form-inline"style="font-size:12px;margin-top:2%;">

    
    <li class="list-group p-4 ">Following : 10</li>
    <li class="list-group p-1 ml-5 font-weight-normal ">Followers :10</li>
 </form>
  <div class="card-body">
    	<button onclick="#" class="btn btn-success btn-md navbar-btn" style="margin-left:;font-size:15px;margin-top:20%;width:100%;border:none;background-color:white;color:#9932CC;">
  Add as Friend
  </button>
  </div>
</div>
		 <div class="card" style="box-shadow:10px 15px 25px 0 rgba(0, 0, 0, 0.2), 0 15px 22px 0 rgba(0, 0, 0, 0.19);width: 80rem;height:28rem;border:none;margin-left:10%;margin-top:12%;margin-left:-5%;z-index:0">
		 
		  <div class="" style=
		  "background-color:white;width:75%;float:;font-size:15px;margin-left:5%;margin-top:4%;" >
		   <ol class="carousel-indicators">
        <a style="color:;"  href="#carouseledit" data-slide="prev" class="active"><i class="fas fa-angle-left fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
        <a  style="color:;" href="#carouseledit" data-slide="next"><i class="fas fa-angle-right fa-2x"></i></a>
    </ol> 
		   <div class="carousel slide"id="carouseledit"  data-interval="false" data-ride="carousel" style="background-color:white;width:100%;float:right;font-size:10px;margin-right:-16%;margin-top:-5%;" >

  <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
 <h4 style="text-align:center;font-size:15px;">Personal Information</h4><br><br>
 <button type="button" style="color:red;margin-top:-5%;margin-right:2%;"class="close float-right" data-dismiss="modal"><i class="fas fa-times "></i></button>
<form class="pfont">
  <div class="row form-group">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form>
  <div class="clearfix"> </div>
  <form class="pfont" >
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

   <form class="pfont" >
    <div class="form-inline"  >
             
            <select class=" form-control pfont">
            	<option value="">India</option>
            	<option value="">USA</option>
            	<option value="">China</option>
            	<option value="">Gremany</option>
            	<option value="">Japan</option>
            </select>
            </div>
			
</form>
<form class="form-inline pfont">
<button type="button"  style="margin-left:85%;outline:none;float:right;text-decoration:none; "class="btn btn-link float-right" >Save Changes</button>
</form>
 </div>
       <div class="carousel-item ">
 <h4 style="text-align:center;font-size:15px">Mentee Information</h4><br><br>
 <button type="button" style="color:red;margin-top:-5%;margin-right:2%;"class="close float-right" data-dismiss="modal"><i class="fas fa-times"></i></button>
<form class="pfont">
  <div class="row form-group">
    <div class="col">
      <input type="text" class="form-control" id="Current Qualifications" placeholder="Current Qualifications">
    </div>
    <div class="col">
      <input type="text" class="form-control" id="Desired Job" placeholder="Desired Job">
    </div>
  </div>
</form><br>
  <div class="clearfix"> </div>
  <form class="pfont" >
   <div class="form-group">
    
    <input type="text" class="form-control" id="Education" placeholder="Education (10th,12th,Degree)">
  </div>
    <div class=" form-group">
           <input type="text" class="form-control" id="DesiredSkills" placeholder="Desired Skills">
            </div>

 
</form>

<form class="form-inline pfont">
<button type="button"  class="btn btn-link" style="margin-right:75%;outline:none;float:right;text-decoration:none; " >Save Changes</button>

</form>
 </div>
 <div class="carousel-item">
 <h4 style="text-align:center;font-size:15px">Mentor Information</h4><br><br>
  <button type="button" style="color:red;margin-top:-5%;margin-right:2%;"class="close float-right" data-dismiss="modal"><i class="fas fa-times"></i></button>
<form class="form-inline pfont">
  <div class="form-group">
   
    <input type="text" class="form-control" id="Jobs" placeholder="Jobs">
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="form-group">
   
    <input type="text" class="form-control" id="Experience" placeholder="Experience">
  </div><br><br></form><br>
  <div class="clearfix"> </div>
  <form  class="pfont">
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
<form class="form-inline pfont">
<button type="button"  class="btn btn-link "style="margin-right:3%;outline:none;float:right;text-decoration:none; " >Confirm</button>
<button type="button"  class="btn btn-link " style="margin-left:65%;outline:none;float:right;text-decoration:none; ">Save Changes</button>
</form>
 </div>

                </div>
                </div>  
			 

</div>

</div>
</div>

    </div>
  </div>
</div>
<!-- Profile upload Modal-->
<div class="modal fade" id="uploadP" tabindex="-1" role="dialog" aria-labelledby="uploadP" aria-hidden="true">
  <div class="modal-dialog  modal-full " >
    <div class="modal-content " style="background-color:transparent" >
		 <div class="d-flex flex-row pcard">
		 
	
		<div class="container-fluid" style="height:850px;background-color:transparent;margin-left:%;">

			  <div class="jumbotron " style="margin-top:75px;height:750px;width:85%;background-color:transparent;margin-left:5%;">
         <!--upload -->
  
	 <button type="button" style="color:white; outline:none" class="close pbutton float-center" data-dismiss="modal"><i class="far fa-times-circle" ></i></button>



	
<div style="">

   <nav >
    <div class="nav nav-tabs " id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#tab1default" role="tab" aria-controls="nav-home" aria-selected="true">Files</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#tab2default" role="tab" aria-controls="nav-profile" aria-selected="false">Video</a>
  
  </div>
                                                  
				
                         
                        </nav>
						 <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1default">          
			 <div class="jumbotron " style="border-bottom:0.5px solid grey;border-top:none;border-left:0.5px solid grey;
                 border-right:0.5px solid grey;
                  height:600px;width:102%;background-color:white ;margin-left:-1%;margin-top:0%;">
         <!--profile -->
		 <!--Profile description -->
		   <div id="drop-area" class="scroll1">


  <form class="my-form">
   
    <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
      <div style="margin-top:6%;text-align:center;font-size:15px;">
      <label style="position:sticky;top:0;text-decoration: none ;color:red"class="btn btn-link" for="fileElem"><i class="fas fa-cloud-upload-alt"></i> Just Drag and Drop</label>
      </div>
  </form>
  
  <div id="gallery" /></div>
</div>



		 <style>


/* skin.css Style*/
progress[value]{

width:100%;
height:1%;




}
.scroll1::-webkit-scrollbar {
  width: 1px;
}
#drop-area {
  overflow-y:scroll;
  border-radius: 20px;
  width: 107%;
  height:60%;
  margin-top:-2.5%;
  margin-left:-3.5%;
  padding: 20px;
}
#drop-area.highlight {
  border-color: purple;
}

.my-form {
  margin-bottom: 10px;
  
}
#gallery {
  margin-top: 10px;
}
#gallery img {
  width: 150px;
  margin-bottom: 10px;
  padding:20px;
  vertical-align: middle;
}
.button {

  display: inline-block;
  padding: 10px;
  background: #ccc;
  cursor: pointer;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.button:hover {
  background: #ddd;
}
#fileElem {
  display: none;
}
		 </style>
		 <script>
// ************************ Drag and drop ***************** //
let dropArea = document.getElementById("drop-area")

// Prevent default drag behaviors
;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, preventDefaults, false)   
  document.body.addEventListener(eventName, preventDefaults, false)
})

// Highlight drop area when item is dragged over it
;['dragenter', 'dragover'].forEach(eventName => {
  dropArea.addEventListener(eventName, highlight, false)
})

;['dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, unhighlight, false)
})

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false)

function preventDefaults (e) {
  e.preventDefault()
  e.stopPropagation()
}

function highlight(e) {
  dropArea.classList.add('highlight')
}

function unhighlight(e) {
  dropArea.classList.remove('active')
}

function handleDrop(e) {
  var dt = e.dataTransfer
  var files = dt.files

  handleFiles(files)
}

let uploadProgress = []
let progressBar = document.getElementById('progress-bar')

function initializeProgress(numFiles) {
  progressBar.value = 0
  uploadProgress = []

  for(let i = numFiles; i > 0; i--) {
    uploadProgress.push(0)
  }
}

function updateProgress(fileNumber, percent) {
  uploadProgress[fileNumber] = percent
  let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
  console.debug('update', fileNumber, percent, total)
  progressBar.value = total
}

function handleFiles(files) {
  files = [...files]
  initializeProgress(files.length)
  files.forEach(uploadFile)
  files.forEach(previewFile)
}

function previewFile(file) {
  let reader = new FileReader()
  reader.readAsDataURL(file)
  reader.onloadend = function() {
    let img = document.createElement('img')
    img.src = reader.result
    document.getElementById('gallery').appendChild(img)
  }
}

function uploadFile(file, i) {
  var url = 'https://api.cloudinary.com/v1_1/YOU/image/upload'
  var xhr = new XMLHttpRequest()
  var formData = new FormData()
  xhr.open('POST', url, true)
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest')

  // Update progress (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    updateProgress(i, (e.loaded * 100.0 / e.total) || 100)
  })

  xhr.addEventListener('readystatechange', function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      updateProgress(i, 100) // <- Add this
    }
    else if (xhr.readyState == 4 && xhr.status != 200) {
      // Error. Inform the user
    }
  })

  formData.append('upload_preset', 'YOU')
  formData.append('file', file)
  xhr.send(formData)
}
		 </script>
<form class="pfont">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Title">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Tags">
    </div>
  </div>
</form>
<br>
<form>
  <div class="text-area1">
				<textarea   required="" placeholder="What are you doing..." >Description</textarea>
			
			</div>
			</form>
				 <ul style="margin-top:;width:120%;background-color:;">
				 
					
					
					  
					
					<div class="upload">
	       

 <a class="btn btn-link "style="text-decoration:none;"> Post</a>
 
            <a class="btn btn-link "style="text-decoration:none;color:"> <i class="fas fa-user-friends fa-2x"></i></a>
	        




            <a class="btn btn-link"style="text-decoration:none" > <i class="fas fa-users fa-2x"></i></a>
	        



            <a class="btn btn-link "style="text-decoration:none;color:"> <i class="fas fa-globe-asia fa-2x"></i></a>
	        



            <a class="btn btn-link "style="text-decoration:none;"><i class="fas fa-headset fa-2x"></i></a>
	        


</div>
					 

					
	
				 </ul>

			</div>
	
			</div>
									<style>
					.upload {
    margin-top:-5% ;
                        margin-right: 20%;
    float:right;
}
    
a:hover + .upload {
    display: block;
	margin-left:0%;
	float:left;
	
}



					</style>					
						
                        <div class="tab-pane fade" id="tab2default">
												 <div class="jumbotron " style="border-bottom:0.5px solid grey;border-top:none;border-left:0.5px solid grey;
                 border-right:0.5px solid grey;
                  height:600px;width:102%;background-color:white ;margin-left:-1%;margin-top:0%;">
         <!--profile -->
		 <!--Profile description -->
		   <div id="drop-area" class="scroll1">


  <form class="my-form">
   
    <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
      <div style="margin-top:6%;text-align:center;font-size:15px;">
      <label style="position:sticky;top:0;text-decoration: none ;color:red"class="btn btn-link" for="fileElem"><i class="fas fa-cloud-upload-alt"></i> Just Drag and Drop</label>
      </div>
  </form>
  
  <div id="gallery" /></div>
  
			</div>
		<form class="pfont">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Title">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Tags">
    </div>
  </div>
</form>
<br>
<form>


  <div class="text-area1">
				<textarea   required="" placeholder="What are you doing..." >Description</textarea>
			
			</div>
			
				 <ul style="margin-top:;width:120%;background-color:;">
				 
					
					
					  
					
					<div class="upload">
	       

 <a class="btn btn-link "style="text-decoration:none;"> Post</a>
 
            <a class="btn btn-link "style="text-decoration:none;color:"> <i class="fas fa-user-friends fa-2x"></i></a>
	        




            <a class="btn btn-link"style="text-decoration:none" > <i class="fas fa-users fa-2x"></i></a>
	        



            <a class="btn btn-link "style="text-decoration:none;color:"> <i class="fas fa-globe-asia fa-2x"></i></a>
	        



            <a class="btn btn-link "style="text-decoration:none;"><i class="fas fa-headset fa-2x"></i></a>
	        


</div>
					 

					
	
				 </ul>
			
                        </div>
                        </div>
						
						

                      
                    </div>
</div>
</div>

    </div>
  </div>
</div>
   
				<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

		

  

     



    <!-- jQuery CDN - Slim version (=without AJAX) 
	 $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar,#content,.content-main,.navbar').toggleClass('active');
				 
            });-->
   

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar,#content,.content-main,.navbar,.pcard,#mySidenav2').toggleClass('active');
				 $(this).toggleClass('active');
				 
            });

        });
    </script>
	
	  <script type="text/javascript">
$(document).ready(function () {
    $("nav").find("li").on("click", "a", function () {
        $('.navbar-collapse.in').collapse('hide');
    });
});
  </script>
  
	<!--search bar -->
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
