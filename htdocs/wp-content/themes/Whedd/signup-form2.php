<div class="signupForm"
    <fieldset class="radioGroup">
      <legend>Do you need help finding a venue? </legend>
      <label for="rbDateYes">
        <input type="radio" name="dateSet" value="yes" id="rbDateYes" />
        YES
      </label>
      <label for="rbDateNo">
        <input type="radio" name="dateSet" value="no" id="rbDateNo" />
        NO
      </label>
    </fieldset>
    <div id="venueData">
      <input type="text" name"venueName" placeholder="If no, enter your venue" size="40">
      <input type="text" name"venueCity" placeholder="City" size="20">
      <input type="text" name"venueState" placeholder="State" size="10" maxlength="2">
      <input type="number" name"venueZip" placeholder="Zip" size="10" min="5" max="5">
    </div>
    <div id="aboutVenue">
      <p>Tell us about your venue</p>
      <input type="textarea" name"venueAbout" placeholder="Describe your venue here" rows="4" cols="40">
    </div>
  <div id="prevButton" class="clear button">
    Next >>
  </div>
  <div id="nextButton" class="button">
    Next >>
  </div>
  <div class="error hide"></div>
</div>
