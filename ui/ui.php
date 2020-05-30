<?php

function column_full ($heading, $array) {
  printf ('
  <div class="col-lg-12">
  <div class="navbar navbar-expand-lg navbar-dark bg-danger mt-4 shadow p-3 mb-2 rounded-pill">
    <div class="h5 text-white">%s</div>
  </div>
  ',$heading
  ) ;

  foreach ($array as $a) {
    $title = $a ['title'] ;
    $img = $a ['img'] ;
    $headline = $a ['headline'] ;
    $snippet = $a ['snippet'] ;
    $url = $a ['url'] ;
    $date = $a ['date'] ;
    $category = $a ['category'] ;
    $comments = $a ['comments'] ;
    
    include "lib/card-lg.php" ;
  }

  print ("</div>") ;
}

function row_full ($heading, $array) {
  printf ('
  <div class="col-lg-12">
  <div class="navbar navbar-expand-lg navbar-dark bg-danger mt-4 shadow p-3 mb-2 rounded-pill">
    <div class="h5 text-white">%s</div>
  </div>
  ',$heading
  ) ;

  foreach ($array as $a) {
    $title = $a ['title'] ;
    $img = $a ['img'] ;
    $headline = $a ['headline'] ;
    $snippet = $a ['snippet'] ;
    $url = $a ['url'] ;
    $date = $a ['date'] ;
    $category = $a ['category'] ;
    $comments = $a ['comments'] ;
    
    include "lib/card-h-lg.php" ;
  }

  print ("</div>") ;
}

function column_half ($heading, $array) {
  printf ('
  <div class="container col-md-5">
    <div class="navbar navbar-expand-lg navbar-dark bg-danger mt-4 shadow p-3 mb-2 rounded-pill">
      <div class="h5 text-white">%s</div>
    </div>
  ',$heading
  ) ;

  foreach ($array as $a) {
    $title = $a ['title'] ;
    $img = $a ['img'] ;
    $headline = $a ['headline'] ;
    $snippet = $a ['snippet'] ;
    $url = $a ['url'] ;
    $date = $a ['date'] ;
    $category = $a ['category'] ;
    $comments = $a ['comments'] ;
    
    include "lib/card-md.php" ;
  }

  print ("</div>") ;
}

function row_half ($heading, $array) {
  printf ('
  <div class="container col-md-5">
    <div class="navbar navbar-expand-lg navbar-dark bg-danger mt-4 shadow p-3 mb-2 rounded-pill">
      <div class="h5 text-white">%s</div>
    </div>
  ',$heading
  ) ;

  foreach ($array as $a) {
    $title = $a ['title'] ;
    $img = $a ['img'] ;
    $headline = $a ['headline'] ;
    $snippet = $a ['snippet'] ;
    $url = $a ['url'] ;
    $date = $a ['date'] ;
    $category = $a ['category'] ;
    $comments = $a ['comments'] ;
    
    include "lib/card-h-sm.php" ;
  }

  print ("</div>") ;
}

?>