<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login</title>

    <style>
		@import url('https://fonts.googleapis.com/css?family=Lato');


.body{
    position: fixed;
    overflow-y: scroll;
    width: 100%;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(https://i.imgur.com/ufmsqQH.png);
	background-size: cover;
	-webkit-filter: blur(0px);

}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	
}

.header div{
	float: left;
	color: aqua;
	font-family: 'Lato', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: chartreuse !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Lato', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Lato', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Lato', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

  

</head>

<body oncontextmenu="return false">

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Wexyne's<span> Site</span></div>
		</div>
		<br>
		<form name="login">
		<div class="login">
				<input type="text" placeholder="Username" name="userid"><br>
				<input type="password" placeholder="Password" name="pswrd"><br>
				<input type="button" onclick="check(this.form)" value="Login"/>
		</div>



</form>
<script language="javascript">
function check(form)
{
 
 if(form.userid.value == "Admin" && form.pswrd.value == "Admin")
  {
      location.href = "http://localhost/Wexyne%20Site/index.php";
  }
 else
 {
   alert("The username or/and the password are incorrect")
  }
}
</script>
</body>
</html>




















