<ul class='nav nav-tabs' id='myTab' role='tablist'>
  <li class='nav-item'>
    <a class='nav-link active' id='home-tab' data-toggle='tab' href='#home' role='tab' aria-controls='home' aria-selected='true'>Cantón 1</a>
  </li>
  <li class='nav-item'>
    <a class='nav-link' id='sjo-tab' data-toggle='tab' href='#sjo' role='tab' aria-controls='sjo' aria-selected='false'>Cantón 2</a>
  </li>
  <li class='nav-item'>
    <a class='nav-link' id='ala-tab' data-toggle='tab' href='#ala' role='tab' aria-controls='ala' aria-selected='false'>Cantón 3</a>
  </li>
  <li class='nav-item'>
    <a class='nav-link' id='her-tab' data-toggle='tab' href='#her' role='tab' aria-controls='her' aria-selected='false'>Cantón 4</a>
  </li>
  <li class='nav-item'>
    <a class='nav-link' id='car-tab' data-toggle='tab' href='#car' role='tab' aria-controls='car' aria-selected='false'>Cantón 5</a>
  </li>
</ul>
<div class='tab-content' id='myTabContent'>
<?php
    echo "  
  <div class='tab-pane fade show active' id='home' role='tabpanel' aria-labelledby='home-tab'>
      <iframe class='w-100' style='height: 85vh !important;overflow-y: hidden;  overflow-x: hidden; ' src='". $_SESSION['canton1'] ."'></iframe>
  </div>
  <div class='tab-pane fade' id='sjo' role='tabpanel' aria-labelledby='sjo-tab'>
      <iframe class='w-100' style='height: 85vh !important;overflow-y: hidden;  overflow-x: hidden; ' src='". $_SESSION['canton2'] ."'></iframe>
  </div>
  <div class='tab-pane fade' id='ala' role='tabpanel' aria-labelledby='ala-tab'>
      <iframe class='w-100' style='height: 85vh !important;overflow-y: hidden;  overflow-x: hidden; ' src='". $_SESSION['canton3'] ."'></iframe>
  </div>
  <div class='tab-pane fade' id='her' role='tabpanel' aria-labelledby='her-tab'>
      <iframe class='w-100' style='height: 85vh !important;overflow-y: hidden;  overflow-x: hidden; ' src='". $_SESSION['canton4'] ."'></iframe>
  </div>
  <div class='tab-pane fade' id='car' role='tabpanel' aria-labelledby='car-tab'>
      <iframe class='w-100' style='height: 85vh !important;overflow-y: hidden;  overflow-x: hidden; ' src='". $_SESSION['canton5'] ."'></iframe>
  </div>
    ";
    ?>
</div>

