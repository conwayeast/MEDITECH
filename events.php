<?php include( "_includes/header.inc"); ?>


<div class="full-width-container">
  <div class="centered-container">
    <h1>Customer Events Schedule</h1>
  </div>
</div>


<div class="centered-container">
  <div class="body-with-sidebar">

  <div class="panel">
    <form>
      <input type="text" placeholder="Search for Events" />
    </form>
    <input class="button expand" type="submit" id="searchsubmit" value="Search">
  </div>


  <div class="panel">
    <div class="filter">
      <h3 class="filter__title">Filter Events By:</h3>
      <ul class="filter__list">
        <li class="filter__list__item">
          <input class="filter__list__item__checkbox icheckbox_flat-blue" id="MD" type="checkbox"><label class="filter__list__item__label">MD</label>
        </li>
        <li class="filter__list__item">
          <input class="filter__list__item__checkbox icheckbox_flat-blue" id="CIO" type="checkbox"><label class="filter__list__item__label">CIO</label>
        </li>
        <li class="filter__list__item">
          <input class="filter__list__item__checkbox" id="Nurse" type="checkbox"><label class="filter__list__item__label">Nurse</label>
        </li>
        <li class="filter__list__item">
          <input class="filter__list__item__checkbox" id="IT" type="checkbox"><label class="filter__list__item__label">IT</label>
        </li>
        <li class="filter__list__item">
          <input class="filter__list__item__checkbox" id="Home Care" type="checkbox"><label class="filter__list__item__label">Home Care</label>
        </li>
        <li class="filter__list__item">
          <input class="filter__list__item__checkbox" id="International" type="checkbox"><label class="filter__list__item__label">International</label>
        </li>
      </ul>
    </div>
  </div>

  <dl>
    <dd><a href="#panel1b">
      <div class="row">
        <div class="column">
          <h4><a href="http://mktdevphp/marcomm/Drupal-HTMLStructure-2/events-physician.php">Physician Forum</a></h4>
        </div>
      </div>

      <div class="row">
        <div class="medium-8 column">
          <p>August 3rd-4th<br>Renaissance Waterfront Hotel - Boston, MA</a><p>
        </div>

        <div class="medium-4 column hide-for-small-only" style="text-align:right; margin-bottom:0;">
          <p><a href="#" class="small button expand" >Learn More</a></p>
        </div>
      </div>

      <div class="row">
        <div class="column" id="panel1b" class="content active">
          Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>

      <div class="row">
        <div class="column show-for-small-only">
          <p><a href="#" class="small button expand">Learn More</a></p>
        </div>
      </div>
    </dd>

    <hr>

    <dd><a href="#panel2b">
      <div class="row">
        <div class="column">
          <h4>CIO Technology Forum</h4>
        </div>
      </div>

      <div class="row">
        <div class="medium-8 column">
          <p>August 12th-13th<br>MEDITECH Facility - Canton, MA</a><p>
        </div>

        <div class="medium-4 column hide-for-small-only" style="text-align:right; margin-bottom:0;">
          <p><a href="#" class="small button expand">Learn More</a></p>
        </div>
      </div>

      <div class="row">
        <div class="column" id="panel2b" class="content active">
          Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>

      <div class="row">
        <div class="column show-for-small-only">
          <p><a href="#" class="small button expand">Learn More</a></p>
        </div>
      </div>
    </dd>

    <hr>

    <dd><a href="#panel3b">
      <div class="row">
        <div class="column">
          <h4>6.0 Peer-to-Peer</h4>
        </div>
      </div>

      <div class="row">
        <div class="medium-8 column">
          <p>August 13th<br>Barton Creek Resort &amp; Spa - Austin, TX</a><p>
        </div>

        <div class="medium-4 column hide-for-small-only" style="text-align:right; margin-bottom:0;">
          <p><a href="#" class="small button expand">Learn More</a></p>
        </div>
      </div>

      <div class="row">
        <div class="column" id="panel3b" class="content active">
          Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>

      <div class="row">
        <div class="column show-for-small-only">
          <p><a href="#" class="small button expand">Learn More</a></p>
        </div>
      </div>
    </dd>

    <hr>

    <dd><a href="#panel4b">
      <div class="row">
        <div class="column">
          <h4>Nurse &amp; Home Care</h4>
        </div>
      </div>

      <div class="row">
        <div class="medium-8 column">
          <p>August 22nd &amp; 25th<br>Renaissance Waterfront Hotel - Quincy, MA</a><p>
        </div>

        <div class="medium-4 column hide-for-small-only" style="text-align:right; margin-bottom:0;">
          <p><a href="#" class="small button expand">Learn More</a></p>
        </div>
      </div>

      <div class="row">
        <div class="column" id="panel4b" class="content active">
          Panel 4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
        
      <div class="row">
        <div class="column show-for-small-only">
          <p><a href="#" class="small button expand">Learn More</a></p>
        </div>
      </div>
    </dd>
  </dl>
    
  <div class="panel" text align="center">
    <a href="#">Load More</a>
  </div>

</div>


<!-- SIDEBAR -->
<?php include( "_includes/eventsSidebar.php"); ?>



<!-- FOOTER -->
<?php include( "_includes/footer.inc"); ?>