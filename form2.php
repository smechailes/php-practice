<?php include "head.php"; ?>
<div class="container">
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10 col-md-3">
      <input type="email" class="form-control" required id="inputEmail3" placeholder="Email" />
    </div>
  </div>
  <div class="form-group">
    <label for="inputText3" class="col-sm-2 control-label">Full name</label>
    <div class="col-sm-10 col-md-3">
      <input type="text" class="form-control" id="inputText3" placeholder="Jhon doe" />
    </div>
  </div>
  <div class="form-group">
    <label for="inputText3" class="col-sm-2 control-label">Write about yourself</label>
    <div class="col-sm-10 col-md-6">
    <textarea class="form-control" style="resize: vertical;"></textarea>
    </label>
    </div>
  </div>
  <div class="form-group">
  <label for="inputDate3" class="col-sm-2 control-label">DoB</label>
      <div class="col-sm-10 col-md-6">
            <input type="date" class="form-control" id="inputDate3" />
      </div>
</div>

  <div class="form-group">
  <label for="inputTel3" class="col-sm-2 control-label">Phone number</label>
    <div class="col-sm-10 col-md-6">
      <input type="number" class="form-control" required id="inputTel3" />
    </div>
</div>

  <div class="form-group">
    <label for="inlineRadio[]" class="col-sm-2 control-label">Gender</label>
      <div class="col-sm-10">
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio[]" value="option1"> Male</label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio[]" value="option2"> Female</label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio[]" value="option3"> Other</label>
      </div>
  </div>

<!-- country picking -->
  <div class="form-group">
  <label for="country" class="col-sm-2 control-label">Nationality</label>
    <div class="col-sm-10 col-md-3">
      <div class="bfh-selectbox bfh-countries" data-country="NP" data-flags="true" data-filter="true">
        <div data-value="US">United States</div>
        <div data-value="NP">Nepal</div>
        <div data-value="UK">United Kingdom</div>
        <div data-value="PK">Pakistan</div>
        <div data-value="ES">Spain</div>
        <div data-value="SD">Sudan</div>
        <div data-value="RU">Russia</div>
        <div data-value="PH">Phillipines</div>
        <div data-value="HK">Hongkong</div>
        <div data-value="NO">Norway</div>
      </div>
    </div>
  </div>
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
