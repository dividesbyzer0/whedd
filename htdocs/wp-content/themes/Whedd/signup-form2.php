<div class="signupForm">
    <fieldset class="radioGroup">
      <legend>Do you need help finding a venue? </legend>
      <label for="rbDateYes"><input type="radio" name="dateSet" value="yes" id="rbDateYes" />YES</label>
      <label for="rbDateNo"><input type="radio" name="dateSet" value="no" id="rbDateNo"/>NO</label>
    </fieldset>
    <div id="venueData clear">
      <input type="text" class="venueData" name="venueName" placeholder="If no, enter your venue" size="30">
      <input type="text" class="venueData clear" name"venueCity" placeholder="City" size="13">
      <input type="text" class="venueData" name"venueState" placeholder="State" size="2" maxlength="2">
      <input type="text" class="venueData" name"venueZip" placeholder="Zip" size="5" min="5" max="5">
    </div>
    <div id="aboutVenue" class="clear venueData">
      <label class="venueData" for="venueDescription">Tell us about your venue </label>
      <textarea name"venueAbout" id="venueDescription" class="venueData" placeholder="Describe your venue here" rows="6" cols="25">
      Describe your venue here
      </textarea>
    </div>
  <div class="clear button prevButton">
    << Prev
  </div>
  <div class="button nextButton">
    Next >>
  </div>
  <div class="error hide"></div>
</div>
