<DOCTYPE html!>
<html>
<head>


<meta charset="utf-8">
<title>Sign Up</title>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>


<style> 
		

*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: serif;
 
}

body{
  min-height: 100vh;
  background: linear-gradient(90deg, rgba(188,221,255,1) 0%, rgba(151,198,255,1) 35%, rgba(239,211,255,0.9851094734768907) 100%);
}

.regist-form{
  width: 360px;
  background: #f1f1f1;
  height: 580px;
  padding: 80px 40px;
  border-radius: 10px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}

.regist-form h1{
  text-align: center;
  margin-bottom: 60px;
}

.txtb{
  border-bottom: 2px solid #adadad;
  position: relative;
  margin: 30px 0;
}

.txtb input{
  font-size: 15px;
  color: #333;
  border: none;
  width: 100%;
  outline: none;
  background: none;
  padding: 0 5px;
  height: 40px;
}

.txtb span::before{
  content: attr(data-placeholder);
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  z-index: -1;
  transition: .5s;
}

.txtb span::after{
  content: '';
  position: absolute;
  width: 0%;
  height: 2px;
  background: linear-gradient(120deg,#71bae4,#d6d2d2,#dfdbef,#e9eff7);
  transition: .5s;
}

.focus + span::before{
  top: -5px;
}
.focus + span::after{
  width: 100%;
}

.registbtn{
  display: block;
  width: 100%;
  height: 50px;
  border: none;
  background: linear-gradient(120deg,#71bae4,#d6d2d2);
  background-size: 200%;
  color: #fff;
  outline: none;
  cursor: pointer;
  transition: .5s;
  
}

.registbtn:hover{
  background-position: right; 
  color: black;
  font-weight:bold;
}

.bottom-text{
  margin-top: 40px;
  text-align: center;
  font-size: 13px;
  
}
</style>
</head>
<body>
<form action="query.php" method="post" class="regist-form">
  <h1>Sign Up</h1>
    <div class="txtb" >
    <input type="text" name="first_name" required>
	<span data-placeholder="First Name"></span>
</div>

<div class="txtb" >
    <input type="text"  name="last_name" required>
	<span data-placeholder="Last Name"></span>
</div>


<div class="txtb" >
<input name="email" type="email"required>
	<span data-placeholder="Email"></span>
</div>
   

<div class="txtb" >
    <input type="password"  name="password" required>
		<span data-placeholder="Password"></span>
</div>



<div class="txtb" >
<input name="phone" type="tel" required >
	<span data-placeholder="(###)###-####"></span>
</div>






  <input type="submit" value="Register Now" class="registbtn">
  
   <div class="bottom-text">
  <p>Do have an account? <a href="login.php" style="color: #71bae4; font-weight:bold; font-size: 14px; ">Login</a></p>
  </div>

</form>

  <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>
</body>
</html>