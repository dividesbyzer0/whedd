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
      <input type="text" class="venueData" name="venueName" placeholder="If no, enter your venue" size="40">
      <input type="text" class="venueData" name"venueCity" placeholder="City" size="20">
      <input type="text" class="venueData" name"venueState" placeholder="State" size="5" maxlength="2">
      <input type="number" class="venueData" name"venueZip" placeholder="Zip" size="5" min="5" max="5">
    </div>
    <div id="aboutVenue" class="clear venueData">
      <p>Tell us about your venue </p>
      <textarea name"venueAbout" class="venueData" placeholder="Describe your venue here" rows="6" cols="48">
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
