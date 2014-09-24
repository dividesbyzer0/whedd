<div class="signupForm">
  <div id="desiredLocation clear">
    <p class="venueData">Where would you like to have your wedding? </p>
    <input type="text" class="venueData clear" name"desiredCity" placeholder="City" size="13">
    <input type="text" class="venueData" name"desiredState" placeholder="State" size="2" maxlength="2">
    <input type="text" class="venueData" name"desiredZip" placeholder="Zip" size="5" min="5" max="5">
  </div>
  <div id="desiredMonth" class="clear venueData">
    <p class="venueData">What months are you considering? (select all that apply) </p>
    <div class="center-parent row">
      <div class="center-child">
          <input type="checkbox" name="month" value="1" class="grid col-1">
          JAN
          <input type="checkbox" name="month" value="2" class="grid col-2">
          FEB
          <input type="checkbox" name="month" value="3" class="grid col-2">
          MAR
          <input type="checkbox" name="month" value="4" class="grid col-2">
          APR
      </div>
    </div>
    <div class="center-parent row">
      <div class="center-child">
        <div class="grid col-1">
          <input type="checkbox" name="month" value="5">
          MAY
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="6">
          JUN
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="7">
          JUL
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="8">
          AUG
        </div>
      </div>
    </div>  
    <div class="center-parent row">
      <div class="center-child">
        <div class="grid col-1">
          <input type="checkbox" name="month" value="9">
          SEP
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="10">
          OCT
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="11">
          NOV
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="12">
          DEC
        </div>
      </div>
    </div>
  </div>
  <div id="desiredDay" class="clear venueData">
    <p class="venueData">What days of the week do you prefer? (select all that apply) </p>
    <div id="venueDay1" class="center-parent row">
      <div class="center-child">
        <div class="grid col-1">
          <input type="checkbox" name="month" value="0">
          SUN
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="1">
          MON
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="2">
          TUE
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="3">
          WED
        </div>
      </div>
    </div>
    <div id="venueDay2" class="center-parent row">
      <div class="center-child">
        <div class="grid col-1">
          <input type="checkbox" name="month" value="4">
          THU
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="5">
          FRI
        </div>
        <div class="grid col-2">
          <input type="checkbox" name="month" value="6">
          SAT
        </div>
        <div class="grid col-2">
        </div>
      </div>
    </div>
  <div class="clear button prevButton">
    << Prev
  </div>
  <div class="button nextButton">
    Next >>
  </div>
  <div class="error hide"></div>
</div>
