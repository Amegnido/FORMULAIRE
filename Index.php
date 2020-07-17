
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Formulaire d'inscription</title>
</head>

<header><h1> STUDENTS ATTENDANCE</h1></header>
<body>
   <fieldset> 
<form action="form_page">
  <div class="container">
    <h1>Register</h1>
    <p>Fill in the different fields to register.</p>
    <hr>
<div>
    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" id="Name" required autocomplete
    >
</div>
<div>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required autocomplet
    class="inputbasic">
</div>
<div>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required
    class="inputbasic">
</div>
    <hr>
         <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    
  </div>
</form>
</fieldset>
</body>

</html> 