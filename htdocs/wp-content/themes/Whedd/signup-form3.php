<div class="signupForm">
  <p class="venueData">Where would you like to have your wedding? </p>
  <input type="text" class="venueData clear" name"desiredCity" placeholder="City" size="13">
  <input type="text" class="venueData" name"desiredState" placeholder="State" size="2" maxlength="2">
  <input type="text" class="venueData" name"desiredZip" placeholder="Zip" size="5" min="5" max="5">
  <fieldset class="clear monthGroup">
    <legend>What months are you considering? (select all that apply)</legend>
    <div class="row">
        <label class="grid col-1" for="jan"><input type="checkbox" name="month" id="jan" value="1"/>JAN</label>
        <div class="grid col-1"></div>
        <label class="grid col-1" for="feb"><input type="checkbox" name="month" id="feb" value="2"/>FEB</label>
        <div class="grid col-1"></div>
        <label class="grid col-1" for="mar"><input type="checkbox" name="month" id="mar" value="3"/>MAR</label>
        <div class="grid col-1"></div>
        <label class="grid col-1" for="apr"><input type="checkbox" name="month" id="apr" value="4"/>APR</label>
    </div>
    <div class="row">
        <label class="grid col-1" for="may"><input type="checkbox" name="month" id="may" value="5"/>MAY</label>
        <div class="grid col-1"></div>
        <label class="grid col-1" for="jun"><input type="checkbox" name="month" id="jun" value="6"/>JUN</label>
        <div class="grid col-1"></div>
        <label class="grid col-1" for="jul"><input type="checkbox" name="month" id="jul" value="7"/>JUL</label>
        <div class="grid col-1"></div>
        <label class="grid col-1" for="aug"><input type="checkbox" name="month" id="aug" value="8"/>AUG</label>
    </div>
    <div class="row">
        <label class="grid col-1" for="sep"><input type="checkbox" name="month" id="sep" value="9"/>SEP</label>
        <div class="grid col-1"></div>
        <label class="grid col-1" for="oct"><input type="checkbox" name="month" id="oct" value="10"/>OCT</label>
        <div class="grid col-1"></div>
        <label class="grid col-1" for="nov"><input type="checkbox" name="month" id="nov" value="11"/>NOV</label>
        <div class="grid col-1"></div>
        <label class="grid col-1" for="dec"><input type="checkbox" name="month" id+"dec" value="12"/>DEC</label>
    </div>
  </fieldset>
  <fieldset class="clear dayGroup">
    <legend>What days of the week do you prefer? (select all that apply)</legend>
    <div class="row">
      <label class="grid col-1" for="sun"><input type="checkbox" name="day" id="sun" value="0"/>SUN</label>
      <div class="grid col-1"></div>
      <label class="grid col-1" for="mon"><input type="checkbox" name="day" id="mon" value="1"/>MON</label>
      <div class="grid col-1"></div>
      <label class="grid col-1" for="tue"><input type="checkbox" name="day" id="tue" value="2"/>TUE</label>
      <div class="grid col-1"></div>
      <label class="grid col-1" for="wed"><input type="checkbox" name="day" id="wed" value="3"/>WED</label>      
    </div>
    <div class="row">
      <div class="grid col-1"></div>
      <label class="grid col-1" for="thu"><input type="checkbox" name="day" id="thu" value="4"/>THU</label>
      <div class="grid col-1"></div>
      <label class="grid col-1" for="tue"><input type="checkbox" name="day" id="fri" value="5"/>FRI</label>
      <div class="grid col-1"></div>
      <label class="grid col-1" for="sat"><input type="checkbox" name="day" id="sat" value="6"/>SAT</label>      
      <div class="grid col-1"></div>
    </div>
  </fieldset>
  <div class="clear button prevButton">
    << Prev
  </div>
  <div class="button nextButton">
    Next >>
  </div>
  <div class="error hide"></div>
</div>
