<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript register form validation </title>
   
</head>
<body onload='document.form1.name.focus()'>
<div class="mail">
<h2> Register form validation</h2>
<form name="form1" action="#" onsubmit="Validate(document.form1.text1)"> 
<ul>
  
<li>   <label for='name' >Name </label>       <input type='text' name='name'placeholder="Enter your Name" required /></li>
<h4> </h4>
<li>   <label for='text1' >Email </label>   <input type='text' name='text1' placeholder="Enter your Email" required /></li>
<h4> </h4>
<li>   <label for='phone' >Phone Number </label>    <input type='tel' name='phone' min='5' max='14' placeholder="Enter your phone number" required /></li>
<h4> </h4>
<li class="submit"><input type="submit" name="submit" value="Submit" /></li>

</ul>
</form>
</div>
<script src="validation.js"></script>
</body>
</html>