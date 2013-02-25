Tramore Tennis Website
======================

Source code for the Tramore Tennis website - [http://www.tramoretennis.com](http://www.tramoretennis.com).

The site is mostly static, apart from the news feed which is pulled from the Tramore Tennis page on Facebook: [www.facebook.com/tramoretennis](www.facebook.com/tramoretennis). We effectively use Facebook as a CMS; the Facebook Club administrators post news on Facebook, which is then picked up on the main www.tramoretennis.com website. The club has a large number of members who follow the Club on Facebook, and there are far more visitors to the Facebook page than the club website (so Facebook is an excellent communication mechanism for the club). 

This process used to happen in reverse, i.e. the Club Admins would update the tramoretennis.com website, and this RSS feed would get sucked in to Facebook. However, this was problematic:

* The previous website was a Drupl based website, and the club admins (i.e. relatively non technical people) found it difficult to update. 

* Facebook pulling in the RSS feed wasn't great, it seemingly happened at random and sometimes not at all. So it was difficult to update Facebook with any great certainty (and as mentioned above, far more club members get club news from Facebook rather than the website itself).  

* The old Drupal based website was looking dated, and hard to update, would require significant work to make it good on mobile/tablets etc.

So the new workflow has several advantages:

* Club Admins are more comfortable updating Facebook

* Easy to give (and revoke) people admin access the Facebook Page

* The club website is much simpler; no Drupal, replaced with largely static content, based on [Bootstrap](twitter.github.com/bootstrap/) so looks good and reads well on mobile/tablets.


The Facebook news feed
----------------------

To get the news feed from Facebook:

* Follow the instructions [http://johndoesdesign.com/blog/2011/php/adding-a-facebook-news-status-feed-to-a-website/](here) for setting up a Facebook App, getting the access token, etc. Many thanks to [johndoesdesign.com/](http://johndoesdesign.com/) for his excellent instructions.

* Make sure there are no restrictions on website, for some reason the Facebook Page was restricted to viewers from Ireland and the feed wasn't visible as a result. Removing this restriction in Facebook resolved the issue.

* See the code in [newsfeed.php](TODO) 
 
Usage
-----

To use, you first have to get a Facebook access token (as described above). Then, rename 'fbtoken.php.sample' to 'fbtoken.php', and add your token:
    
    $fbToken = "<insert your token here>";
    
There are no other dependencies apart from Apache/PHP.
 

