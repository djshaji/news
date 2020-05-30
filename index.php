<?php
require_once "ui/header.php" ;
?>


<div class="section section-components pb-0" id="section-components">
  <div class="container">
    <!-- <div class="navbar navbar-expand-lg navbar-dark bg-danger mt-4 shadow p-3 mb-5 rounded-pill">
      <div class="h5 text-white">Latest News</div>
    </div> -->
    <div class="row justify-content-center">
      <!-- <div class="col-lg-12"> -->

        <?php
        // require_once "ui/lib/card-h-sm.php" ;
          $array = array () ;
          $array ['title'] = 'News Title' ;
          $array ['img'] = '/assets/img/brand/blue.png' ;
          $array ['heading'] = 'Heading' ;
          $array ['headline'] = 'Headline' ;
          $array ['snippet'] = 'This is a news snippet' ;
          $array ['url'] = 'https://shaji.in' ;
          $array ['date'] =  date("l jS \of F Y ");
          $array ['category'] = 'Nation' ;
          $array ['comments'] = 'https://shaji.in' ;
          // column_full ("Breaking", [$array]) ;
          // row_full ("Breaking", [$array]) ;
          // column_half ("Breaking", [$array]) ;
          // column_half ("Breaking", [$array]) ;
          // row_half ("Breaking", [$array]) ;
          // row_half ("Breaking", [$array]) ;
          $rss_feed = simplexml_load_file("https://www.indiatoday.in/rss/home");
          $news = [] ;
          foreach ($rss_feed->channel->item as $feed_item) {
            $array ['title'] = $feed_item -> title ;
            $array ['img'] = 'https://akm-img-a-in.tosshub.com/indiatoday/images/story/202005/corona-wall-pti-647x363.jpeg?DHU1lm6S646wHT5ianHaHsCgnFd5kBPE' ;
            $array ['heading'] = $feed_item -> title ;
            $array ['headline'] = $feed_item -> title ;
            $array ['snippet'] = $feed_item -> title ;
            $array ['url'] = $feed_item -> link ;
            $array ['date'] =  $feed_item -> pubdate;
            $array ['category'] = 'State' ;
            $array ['comments'] = $feed_item -> link ;
            column_full ("Breaking", [$array] );
            break ;
          }

          foreach ($rss_feed->channel->item as $feed_item) {
            $array ['title'] = $feed_item -> title ;
            $array ['img'] = '/assets/img/brand/blue.png' ;
            $array ['heading'] = $feed_item -> title ;
            $array ['headline'] = $feed_item -> title ;
            $array ['snippet'] = $feed_item -> description ;
            $array ['url'] = $feed_item -> link ;
            $array ['date'] =  $feed_item -> pubdate;
            $array ['category'] = 'Breaking' ;
            $array ['comments'] = $feed_item -> link ;
            array_push ($news, $array) ;
          }

          row_full ("Breaking", $news);

          $rss_feed = simplexml_load_file("https://www.indiatoday.in/rss/1206584");
          $news = [] ;
          foreach ($rss_feed->channel->item as $feed_item) {
            $array ['title'] = $feed_item -> title ;
            $array ['img'] = '/assets/img/brand/blue.png' ;
            $array ['heading'] = $feed_item -> title ;
            $array ['headline'] = $feed_item -> description ;
            $array ['snippet'] = $feed_item -> description ;
            $array ['url'] = $feed_item -> link ;
            $array ['date'] =  $feed_item -> pubdate;
            $array ['category'] = 'Top Stories' ;
            $array ['comments'] = $feed_item -> link ;
            array_push ($news, $array) ;
          }

          row_half ("Top Stories", $news);

          $rss_feed = simplexml_load_file("https://www.indiatoday.in/rss/1206550");
          $news = [] ;
          foreach ($rss_feed->channel->item as $feed_item) {
            $array ['title'] = $feed_item -> title ;
            $array ['img'] = '/assets/img/brand/blue.png' ;
            $array ['heading'] = $feed_item -> title ;
            $array ['headline'] = $feed_item -> description ;
            $array ['snippet'] = $feed_item -> description ;
            $array ['url'] = $feed_item -> link ;
            $array ['date'] =  $feed_item -> pubdate;
            $array ['category'] = 'Sports' ;
            $array ['comments'] = $feed_item -> link ;
            array_push ($news, $array) ;
          }

          row_half ("Sports", $news);

        ?>
      <!-- </div> -->
    </div>
  </div>
</div>

<?php
require_once "ui/footer.php" ;
?>