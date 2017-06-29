<?php include "head.php"; ?>
<div class="container">
<form class="form-horizontal" method="post" action="view.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10 col-md-3">
      <input type="email" class="form-control" required id="inputEmail3" name="email" placeholder="Email" />
    </div>
  </div>
  <div class="form-group">
    <label for="inputText3" class="col-sm-2 control-label">Full name</label>
    <div class="col-sm-10 col-md-3">
      <input type="text" class="form-control" id="inputText3" name="fullname" placeholder="Jhon doe" />
    </div>
  </div>
  <div class="form-group">
    <label for="inputText3" class="col-sm-2 control-label">Write about yourself</label>
    <div class="col-sm-10 col-md-6">
    <textarea class="form-control" style="resize: vertical;" name="textWritten"></textarea>
    </label>
    </div>
  </div>
  <div class="form-group">
  <label for="inputDate3" class="col-sm-2 control-label">DoB</label>
      <div class="col-sm-10 col-md-6">
            <input type="date" class="form-control" id="inputDate3" name="dateEntered"/>
      </div>
</div>

<!-- phone number -->
  <div class="form-group">
  <label for="inputTel3" class="col-sm-2 control-label">Phone number</label>
    <div class="col-sm-10 col-md-6">
      <input type="number" class="form-control" name="Phonenumber" required id="inputTel3" />
    </div>
</div>

<!-- gender picking -->
  <div class="form-group">
    <label for="inlineRadio[]" class="col-sm-2 control-label">Gender</label>
      <div class="col-sm-10">
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio[]" name="male" value="option1"> Male</label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio[]" name="female" value="option2"> Female</label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio[]" name="others" value="option3"> Other</label>
      </div>
  </div>

<!-- country picking -->
<!-- <div class="form-group">
  <label for="countries[]" class="col-sm-2 control-label">Nationality</label>
    <div class="col-sm-10 col-md-3">
     <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true">
      </div>
    </div>
  </div> -->
  <!-- end of country picking -->



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
<?php include "foot.php"; ?>
