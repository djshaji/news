<!--
  $title = card title
  $img = card image
  $headline = news headline
  $snippet = news snippet
  $url = url link for "read more"
  $date = date
  $category = category
  $comments = comments url
-->

<div class="card">
  <h5 class="card-header"><?php echo $title ;?></h5>
  <img class="card-img-top" src="<?php echo $img ;?>" alt="Card image cap" height="300px">

  <div class="card-body">
    <a href="<?php echo $url ;?>"
      <h5 class="card-title"><?php echo $headline ;?></h5>
    </a>
    <p class="card-text">
      <?php echo $snippet ;?>  
    </p>
    <footer class="blockquote-footer row">
      <div class="col-md-4">
        <i class="material-icons">date_range</i>
        <?php echo $date ;?>
      </div>
      <div class="col-md-3">
        <i class="material-icons">pin_drop</i>
        <?php echo $category ;?>
      </div>
      <div class="col-md-4">
        <i class="material-icons">comment</i>
        <a href="<?php echo $comments ;?>">Comments</a>
      </div>
    </footer>
    
  </div>
</div>
