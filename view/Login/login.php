<!doctype html>
<html>
<?php 
require_once('settings.php');


$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Oracooli</title>

    <!-- Bootstrap CSS CDN -->


	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

   
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
  <div class="container-fluid"id="login">
  
  <h1>Oracooli</h1>
   <!-- Login Form-->
  <form id="login_form" action="view/Login/demo2.php" method="POST">
    <a href='<?php echo $login_url?>'>Google Login</a>
	 <div class="input-group" style="background-color:transparent;">
    
      <input id="email_login" type="email"  name="email_login" placeholder="Email"required="">
	  
	    <span class="input-group-addon"><i class="far fa-user"></i></span>
    </div>
	 <div class="input-group">
    
      <input id="Password" type="password"  name="Password" placeholder="Password"required="">
	    <span class="input-group-addon"><i class="fas fa-key"></i></span>
    </div>
	
    <button style="margin-left:-15%;type="Submit" class="btn btn-link ">Login</button>
 
    <a  data-toggle="modal" data-target="#myModal1" data-backdrop="static" data-keyboard="false"style="float:left;margin-top:25%;" class="btn btn-link ">Forget Password ?</a>
	<a data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" style="float:right;margin-top:25%;margin-right:2%;" class="btn btn-link ">Sign-Up</a>
	 </form>
	      
</div>
  <!-- signup Form-->
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="background-color:white;">
                           <div class="modal-dialog"style="background-color:transparent;">

      <!-- Modal content-->
              <div class="modal-content" style="background-color:transparent;height:600px;">
        
          

        
       

 <div class="container-fluid"id="register">
 
   <button style=" outline:none !important;float:right;color:black;margin-right:-4%;" type="button" class="btn btn-link" data-dismiss="modal"><i class="fas fa-times"></i></button>
   <h1>Oracooli</h1>
  <form  method="post" id="register_form" action="view/Login/demo.php">
     <div class="input-group">
    
      <input id="username" type="username"  name="username" placeholder="Username" required="">
	    <span class="input-group-addon"><i class="fas fa-user"></i></span>
    </div>
	 <div class="input-group" style="background-color:transparent;">
    
      <input id="email_registration" type="email"  name="email_registration" placeholder="Email"required="">
	  
	    <span class="input-group-addon"><i class="far fa-user"></i></span>
    </div>
	 <div class="input-group">
    
      <input id="registration_password" type="password"  name="registration_password" placeholder="Password"required="">
	    <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></i></span>
    </div>
	 <div class="input-group">
    
      <input id="registration_password_confirm" type="password"  name="registration_password_confirm" placeholder="Confirm Password"required="">
	    <span class="input-group-addon"><i class="fas fa-unlock"></i></span>
    </div>
	
    <button type="Submit" class="btn btn-link ">Sign-Up</button>
 

	 </form>
	      
</div>

      
     

                         </div>
                         </div>
                         </div>
						   <!-- Forget Password Form-->
						     <!-- Modal-->
 <div class="modal fade" id="myModal1" role="dialog" style="background-color:white;">
 <div class="modal-dialog"style="background-color:transparent;">

      <!-- Modal content-->
              <div class="modal-content" style="background-color:white;height:200px;margin-top:10%;">
        
          

        
       

               <div class="container-fluid"id="forget">
 
               <button style=" outline:none !important;float:right;color:black;margin-right:-4%;" type="button" class="btn btn-link" data-dismiss="modal"><i class="fas fa-times"></i></button>
              <h1>Oracooli</h1>
   <form >
               <div class="input-group">
    
                <input id="email_forget" type="email"  name="email_forget" placeholder="Email "required="">
	           <span class="input-group-addon"><i class="fas fa-user"></i></span>
		        <button type="Submit" class="btn btn-link ">Submit</button>
                </div>
	
	
	
	
    
 

	 </form>
	      
</div>

      
     

                         </div>
                         </div>
                         </div>
</body>
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700);

body {
    background-color:;

  width: 100%;
  height: 100%;
  display: block;
  top: 0px;
  left: 0px;
  position: fixed;
}
#login h1{

text-align:center;
   font-family: "Playfair Display", serif;
color:#005b96;
font-style: italic;
background-color:transparent;
}

#login {
background-color:transparent;
  width: 40%;
  height: 50%;
  position: fixed;
  top: 25%;
  left: 40%;
  margin-left: -10%;
  margin-top: -100px;
  
  color: #333;
box-shadow:10px 15px 25px 0 rgba(0, 0, 0, 0.2), 0 15px 22px 0 rgba(0, 0, 0, 0.19);
}




#login form {
background-color:transparent;
  width: 105%;
  margin-left:-1%;
 height:70%;
  text-align: center;
margin-top:15%;
}
/*#login form:hover {
 margin-top:1000px;
  width: 100%;
  margin:  auto;
  text-align: right;
  background-color:transparent;
}*/

#login form h1 {
  font-family: 'Open Sans Condensed', sans-serif;
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 20px;
}


#login form span {
  width: 1%;
  height: 0.5%;
  border-radius: 5px;
  border: none;
  
  margin-bottom: 10px;
  background-color:transparent;

}
#login form span i{
  color:#9932CC;
}



#login form input {
  width: 100%;
  height: 55px;
  margin-top:2%;
  
  margin-bottom: 10px;
  text-indent: 10px;
 border-top:none;
 border-left:none;
 border-right:none;
   border-bottom: 1px #9932CC solid;
  
}

#login form input:focus {

 outline:none;
 border-bottom: 1px #9932CC solid;

  
}
#login form  input:focus::placeholder { 
text-align:right;


color:#9932CC;

}
#login form button {
margin-top:5%;
color:#9932CC;
font-size:15px;
text-decoration:none;
outline:none !important;


}
#login form a {
margin-top:5%;
color:#9932CC;
font-size:15px;
text-decoration:none;
outline:none !important;


}

#login form button:active {
outline:none;

}
/*Register*/

#register h1{

text-align:center;
   font-family: "Playfair Display", serif;
color:#005b96;
font-style: italic;
background-color:transparent;
}
#register {
background-color:	white;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 25%;
  left: 0;
  margin-left: 0%;
  margin-top: -25%;
  
  color: #333;
  border-radius:10px;

}




#register form {
background-color:white;
  width: 103%;
  margin-left:-1%;
 height:70%;
  text-align: center;
margin-top:15%;
}
/*register form:hover {
 margin-top:1000px;
  width: 100%;
  margin:  auto;
  text-align: right;
  background-color:transparent;
}*/

#register form h1 {
  font-family: 'Open Sans Condensed', sans-serif;
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 20px;
  margin-top:2%;
}


#register form span {
  width: 1%;
  height: 0.5%;
  border-radius: 5px;
  border: none;
  
  margin-bottom: 10px;
  background-color:transparent;

}
#register form span i{
  color:#9932CC;
}



#register form input {
  width: 100%;
  height: 55px;
  margin-top:2%;
  background-color:	white;
  margin-bottom: 10px;
  text-indent: 10px;
 border-top:none;
 border-left:none;
 border-right:none;
   border-bottom: 1px lightgrey solid;
  
}

#register form input:focus {

 outline:none;
 border-bottom: 1px #9932CC solid;

  
}
#register form  input:focus::placeholder { 
text-align:right;
color:#9932CC;
}
#register form button {
margin-top:15%;
color:#9932CC;
font-size:17px;
text-decoration:none;
outline:none !important;
margin-left:-25px;


}
#register form a {
margin-top:5%;
color:#9932CC;
font-size:15px;
text-decoration:none;
outline:none !important;


}

#register form button:active {
outline:none;

}
/*Forget Password*/

#forget h1{

text-align:center;
   font-family: "Playfair Display", serif;
color:#005b96;
font-style: italic;
background-color:transparent;
}
#forget {
background-color:	white;
  width: 95%;
  height: 30%;
  position: fixed;
  top: 25%;
  left: 0;
  margin-left: 1%;
  margin-top: -6%;
  
  color: #333;
  border-radius:10px;

}




#forget form {
background-color:white;
  width: 100%;
  margin-left:-1%;
 height:20%;
  text-align: center;
margin-top:4%;
}
/*register form:hover {
 margin-top:1000px;
  width: 100%;
  margin:  auto;
  text-align: right;
  background-color:transparent;
}*/

#forget form h1 {
  font-family: 'Open Sans Condensed', sans-serif;
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 20px;
  margin-top:2%;
}


#forget form span {
  width: 1%;
  height: 0.5%;
  border-radius: 5px;
  border: none;
  
  margin-bottom: 10px;
  background-color:transparent;

}
#forget form span i{
  color:#9932CC;
}



#forget form input {
  width: 100%;
  height: 55px;
  margin-top:2%;
  background-color:	white;
  margin-bottom: 10px;
  text-indent: 10px;
 border-top:none;
 border-left:none;
 border-right:none;
   border-bottom: 1px lightgrey solid;
  
}

#forget form input:focus {

 outline:none;
 border-bottom: 1px #9932CC solid;

  
}
#forget form  input:focus::placeholder { 
text-align:right;
color:#9932CC;
}
#forget form button {
margin-top:15%;
color:#9932CC;
font-size:17px;
text-decoration:none;
outline:none !important;
margin-left:-25px;


}
#forget form a {
margin-top:5%;
color:#9932CC;
font-size:15px;
text-decoration:none;
outline:none !important;


}

#forget form button:active {
outline:none;

}
</style>

<script type='text/javascript'>
    /* attach a submit handler to the form */
    $("#register_form").submit(function(event) {

      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post with element id name and name2*/
      //var posting = $.post( url, { name: $('#name').val(), name2: $('#name2').val() } );
      var form_data = $('#register_form').serialize();
      alert(JSON.stringify(form_data));
      /* Alerts the results */
		      $.ajax({
		    url: url,
		    type: "POST",
		    data : form_data,
		    beforeSend: function() {

		    },
		    success: function(data){
		    	alert(data);



		    },
		    error: function(xhr, ajaxOptions, thrownError) {
		       console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		    }
		});
    });
</script>
</html>