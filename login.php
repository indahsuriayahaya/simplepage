<!DOCTYPE html>
<html>
<head>
	 <?php require'head.php'; ?>
</head>
<body class="#ffcdd2 red lighten-1">
<br>
<br>
<br>
<div class="row">
<form action="process.php" method="post" class="col s12 m4 offset m4 #ffffff white" style="border: solid #D60000; border-radius:15px;
padding: 10px" >

<h4 style="text-align: center;">LOGIN</h4>
<div class="row">
      
        <div class="input-field col s12 m12">
          <input  placeholder="name" id="name" type="text" class="validate" name="myname">
      
          <label for="name">Name</label>
        </div>
       <div class="row">
        <div class="input-field col s12  m12">
          <input id="password" type="password" class="validate" name="mypassword" >
          <label for="password">Password</label>
        </div>
      </div>
   
  
  <button class="btn waves-effect waves-light col m12" type="submit" name="login" value="submit_login">Submit
    <i class="material-icons right">send</i>
  </button>
     
  </form>
   </div>  
<?php require'script.php'; ?>
   
       <script>  
     $(document).ready(function(){
      $('.slider').slider();
    });
     </script>
    
  </body>
        </html>