<html>
<title>Feedback</title>
<head>
<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: Helvetica;
}

body {
  background-image: url("petproduct/background.jpg");
  height:100vh;
  display: flex;
  justify-content: center;
  align-items:center;
}

form {
  padding-left:25px;
  padding-right:25px;
  padding-top:60px;
  margin: 12px auto;
  border: 2px solid #ccc;
  border-radius: 20px;
  position:relative;
  z-index:1;
}

form > div{
  position:absolute;
  top:0;
  left:50%;
  padding:0 20px;
  transform:translate(-50%,-50%);
  background-color:black;
  border: 2px solid #ccc;
  border-radius: 20px;
  text-align:center;
}

form > div > img{
  filter:invert(1);
  width:100px;
  opacity: 0.5;
}

form > input,select,option,
form > textarea {
  padding: 12px;
  margin: 12px auto;
  border: 1px solid #ccc;
  color: #ddd;
  background-color: #222;
  border-radius: 4px;
  display: block;
  width: 70vw;
  opacity: 0.5;
}

form > textarea{
  height:100px;
  resize:none;
  opacity: 0.5;
}

form > input[type="submit"] {
  max-width: 20vw;
  padding-left: 1%;
  padding-right: 1%;
  cursor: pointer;
  transition: 0.35s;
  opacity: 0.5;
}

form > input[type="submit"]:hover {
  background-color: #555;
}


</style>
</head>
<body>
<form>
  <div>
  <img src="https://cdn4.iconfinder.com/data/icons/basic-user-interface-elements/700/mail-letter-offer-256.png" alt="icon">
   </div>
  <input type="text" placeholder="Name" required>
  <input type="email" placeholder="Email Address" required>
  <input type="text" placeholder="Topic" required>
  <select style="width:100%;" name="question" placeholder="select topic">
  <option value="about pet">About pet</option>
  <option value="about product">About Product</option>
  </select>
  <textarea placeholder="Subject" required></textarea>
  <input type="submit" value="Send">
  <input type="submit" value="Back">
</form>
<script>
</script>
</body>
</html>