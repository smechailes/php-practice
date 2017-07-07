<?php include "head.php";?>
<div class="container">
<?php
	if(isset($_SESSION['error']) && $_SESSION['error'] != ""){
			echo $_SESSION['error'];		
		}
	
	if(isset($_SESSION['warning']) && $_SESSION['warning'] != ""){
			echo $_SESSION['warning'];		
		}
	
	if(isset($_SESSION['success']) && $_SESSION['success'] != ""){	
			echo $_SESSION['success'];		
		}
?>
<form class="form-horizontal" action="loginprocess.php" method="post">

<!--username input--->
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">username</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="username">
    </div>
  </div>

<!--password input --->
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>

<!-- input file --->
<div class="form-group">
    <label for="exampleInputFile" class="col-sm-3 control-label">File input</label>
	<div class="col-sm-6">    
	<input type="file" id="exampleInputFile" name="file">
    <!--<p class="help-block">Example block-level help text here.</p>-->
	</div>
  </div>

<!-- selecting country --->
<div class="form-group">
 <label for="country" class="col-sm-3 control-label">Select Country</label>
<div class="col-sm-6"> 
  <select class="form-control" id="country" name="country">
    Nepal
    <span class="caret"></span>
     	<option><a href="#">Nepal</a></option>
    	<option><a href="#">USA</a></option>
    	<option><a href="#">Dubai</a></option>
 	<option><a href="#">Nepal</a></option>
   	<option><a href="#">USA</a></option>
    	<option><a href="#">Dubai</a></option>
 	<option><a href="#">Nepal</a></option>
    	<option><a href="#">USA</a></option>
    	<option><a href="#">Dubai</a></option>
 </select>
</div>
</div>

<!-- checkbox--->
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember me"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
<?php include "foot.php";?>
