<?php include "head.php"; ?>
<div class="container">
<form class="form-horizontal" method="post" action="view.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10 col-md-3">
      <input type="email" class="form-control" required id="inputEmail3" name="email" placeholder="Email" />
    </div>
  </div>
  <div class="form-group">
    <label for="inputText3" class="col-sm-2 control-label">Full name</label>
    <div class="col-sm-10 col-md-3">
      <input type="text" class="form-control" id="inputText3" name="fullName" placeholder="Jhon doe" />
    </div>
  </div>
  <div class="form-group">
    <label for="inputText3" class="col-sm-2 control-label">Write about yourself</label>
    <div class="col-sm-10 col-md-6">
    <textarea class="form-control" name="textArea" style="resize: vertical;"></textarea>
    </label>
    </div>
  </div>
  <div class="form-group">
  <label for="inputDate3" class="col-sm-2 control-label">DoB</label>
      <div class="col-sm-10 col-md-6">
            <input type="date" name="DoB" class="form-control" id="inputDate3" />
      </div>
</div>

<!-- phone number -->
  <div class="form-group">
  <label for="inputTel3" class="col-sm-2 control-label">Phone number</label>
    <div class="col-sm-10 col-md-6">
      <input type="number" class="form-control" name="PhoneNum" required id="inputTel3" />
    </div>
</div>

<!-- gender picking -->
  <div class="form-group">
    <label for="inlineRadio[]" class="col-sm-2 control-label">Gender</label>
      <div class="col-sm-10">
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio[]" name="Gender" value="option1"> Male</label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio[]" name="Gender" value="option2"> Female</label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio[]" name="Gender" value="option3"> Other</label>
      </div>
  </div>
<div class="form-group">
  <label for="PicUpload" class="col-sm-2 control-Label">Pic upload</label>
    <div class="col-sm-4">
      <label class="custom-file">
        <input type="file" id="file" name="picUpload2" class="custom-file-input">
          <span class="custom-file-control"></span>
      </label>
    </div>
</div>
<!-- country picking -->
<div class="form-group">
  <label for="countries[]" class="col-sm-2 control-label">Nationality</label>
    <div class="col-sm-10 col-md-3">
      <div class="bfh-selectbox bfh-countries" data-country="NP" id="countries[]" data-flags="true" data-filter="true">
        <div data-value="US" name="United states" id="countries[]">United States</div>
        <div data-value="NP" name="Nepal" id="countries[]">Nepal</div>
        <div data-value="UK" name="UnitedKingdom" id="countries[]">United Kingdom</div>
        <div data-value="PK" name="Pakistan" id="countries[]">Pakistan</div>
        <div data-value="ES" name="Spain" id="countries[]">Spain</div>
        <div data-value="SD" name="Sudan" id="countries[]">Sudan</div>
        <div data-value="RU" name="Russia" id="countries[]">Russia</div>
        <div data-value="PH" name="Philippines" id="countries[]">Phillipines</div>
        <div data-value="HK" name="HongKong" id="countries[]">Hongkong</div>
        <div data-value="NO" name="Norway" id="countries[]">Norway</div>
      </div>
    </div>
  </div>
  <!-- end of country picking -->



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember"> Remember me
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
