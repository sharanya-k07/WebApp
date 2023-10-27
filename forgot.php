
<html>
<head>
<title>Seon Ashram Trust(R)</title>
<style>
body {
    font-family: 'Noto Serif', serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
	background:url("vector2.jpg");
	background-size:cover;
	background-repeat:no-repeat;
	background-position:center;
}
form {
    display: flex;
    flex-direction: column;
    padding: 0 50px;
    height: 160%;
}
input {
    width: 120%;
    outline: 0;
    border-width: 0px 0px 1px 0px;
    border-color: rgb(200, 200, 200);
    padding: 10px 10px;
}
input:focus {
    border-color: #34e3a3;
}

select {
    width: 120%;
    outline: 0;
    border-width: 0px 0px 1px 0px;
    border-color: rgb(200, 200, 200);
    padding: 10px 10px;
}
select:focus {
    border-color: #34e3a3;
}
button {
	display: flex;
    height: 210px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
	font-size: 14px;
    border-radius: 50px;
    width: 150px;
    height: 40px;
    background: linear-gradient(to right, #34e3a3 50%, white 50%);
    background-size: 200% 100%;
    background-position: right top;
    transition: all .5s ease-out;
    color: #34e3a3;
	cursor: pointer;
    color: white;
    background-position: left bottom;
	outline: none;
}
</style>


</head>
<body>

<div style="display: grid;
    grid-template-rows: 30% 50% 20%; color: rgb(200, 200, 200);
	 margin-top:-35px;">
	 
<h2 style="padding: 20px 0px 10px 0px;
    text-align: center;
	margin-top:10%;
    font-family: 'Noto Serif', serif;
    font-size: 26px;
    letter-spacing: 1px;">Forgot Password?<br>
Reset Now</h2>
<form method="post" action="#">
<input type="email" name="email" required="" placeholder="Email"><br>
<select style="width:100%;color:grey;" name="question">
							<option>Select Questions</option>
							<option value="whats your favorite food?">What is your favorite food?</option>
							<option value="What is your dream job?">What is your dream job?</option>
							<option value="What is your dream job?">What is your favorite color?</option>
							<option value="who is your favorite person?">Who is your favorite person?</option>
							<option value="your role model? or your super hero?">Your role model? or Your super hero?</option>
</select><br>
<input type="text" name="answer" required="" placeholder="Answer" ><br>
<input type="password" name="password" required="" placeholder="Password" ><br><br>
<center><button type="submit" name="submit">RESET</button></center>
</form>
<?php
if(isset($_POST['submit']))
{
	include('config.php');
	$email=$_POST['email'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	$password=$_POST['password'];
	
	$sql="update register set password='".$password."' where email='".$email."' and question='".$question."' and answer='".$answer."'";
	mysqli_query($con, $sql);
	echo "<script>
				alert('Password has been reset');
				</script>";
	echo "<script> location.href='signup4.php'; </script>";
}	
?>
</div>

</body>
</html>
