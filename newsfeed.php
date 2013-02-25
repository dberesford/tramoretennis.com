<?php
include 'fbtoken.php';

// check if cached contents exist 
$cachedFeed = '/tmp/fb_feed_cache.js';
$feed = '';
$cachetime = 30 * 60; // 30 minutes

if (file_exists($cachedFeed) && (time() - $cachetime < filemtime($cachedFeed))) {  
  $fbFeed = file_get_contents($cachedFeed);
} else {
  //Get the contents of the Facebook page
  $fbFeed = file_get_contents("https://graph.facebook.com/tramoretennis/feed?access_token=$fbToken");
  file_put_contents($cachedFeed, $fbFeed); // cache it
}

$feed = json_decode($fbFeed);

// process the news items
foreach ($feed->data as $news ) {
  if (!empty($news->message)) {
    $t = strtotime($news->created_time);
    $d = date("M d, Y", $t);
    
    $id = explode("_", $news->id);
    $postUrl = "http://www.facebook.com/tramoretennis/posts/$id[1]";
    //var_dump($postUrl);
    echo '<div class="media">';
    echo '<a class="pull-left" href="#">';
    echo '<img class="media-object"  src="/img/news1.png">';
    echo '</a>';
    echo '<div class="media-body">';
    echo "<h4 class=\"media-heading\">$d ";
    echo "<small><a target=\"_blank\" href=\"$postUrl\"><i class=\"icon-facebook\"></i></a> </small>";
    if (isset($news->likes)) {
      $count = $news->likes->count;
      if ($count > 0) echo "<small><a target=\"_blank\" href=\"$postUrl\"><i class=\"icon-thumbs-up\"></i> $count </a></small>";
    }
    if (isset($news->comments)) {
      $count = $news->comments->count;
      if ($count > 0) echo "<small><a target=\"_blank\" href=\"$postUrl\"><i class=\"icon-comments-alt\"></i> $count </a></small>";
    }
    echo "</h4>";
    echo $news->message;

    // process any links/photos
    if (isset($news->link)) {
      echo "<a href=\"$news->link\">";
      if (isset($news->picture)) echo "<img src=\"$news->picture\">";
      else echo "link";
      echo "</a>";
    }

    echo '  </div>';
    echo '</div>';
    echo '<hr>';
  }
}
?>
