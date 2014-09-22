<div class="signupForm">
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
    <div id="venueData clear">
      <input type="text" class="venueData" name="venueName" placeholder="If no, enter your venue" size="30">
      <input type="text" class="venueData clear" name"venueCity" placeholder="City" size="15">
      <input type="text" class="venueData" name"venueState" placeholder="State" size="2" maxlength="4">
      <input type="text" class="venueData" name"venueZip" placeholder="Zip" size="5" min="5" max="5">
    </div>
    <div id="aboutVenue" class="clear venueData">
      <p class="venueData">Tell us about your venue </p>
      <textarea name"venueAbout" class="venueData" placeholder="Describe your venue here" rows="6" cols="25">
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
