<?php include "head.php";?>
<div class="container">
<form action="database.php" method="post">
  <div class="form-group col-md-3">
    <label for="email">Email address:</label>
    <input type="email" class="form-control col-md-3" id="email" name="email"/>
  </div>
  <div class="form-group col-md-3">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password"/>
  </div>
  <br>
  <button type="submit" class="btn btn-default btn-lg" name="submit">Submit</button>
</form>
</div>
<?php include "foot.php";?>
