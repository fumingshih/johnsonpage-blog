---
layout: default
---
<?php
$tweets = null;
if(extension_loaded('memcache')) {
    $memcache = new Memcache;
    if($memcache->connect('localhost', 11211)) {
        $tweets = $memcache->get('twitter');
    }
}
if(!$tweets) {
    $http = @file_get_contents('http://api.twitter.com/1/statuses/user_timeline.json?screen_name=jwpage&count=5&skip_user=true');
    $tweets = json_decode($http, true);
    $memcache && $memcache->set('twitter', $tweets, 3600);
}
include "src/Autolink.php";
function niceTime($time) {
  $time = strtotime($time);
  $delta = time() - $time;
  if ($delta < 60) {
    return 'less than a minute ago';
  } else if ($delta < 120) {
    return 'about a minute ago';
  } else if ($delta < (45 * 60)) {
    return floor($delta / 60) . ' minutes ago';
  } else if ($delta < (90 * 60)) {
    return 'about an hour ago';
  } else if ($delta < (24 * 60 * 60)) {
    return 'about ' . floor($delta / 3600) . ' hours ago';
  } else if ($delta < (48 * 60 * 60)) {
    return '1 day ago.';
  } else {
    return floor($delta / 86400) . ' days ago';
  }
}
?>

{% assign post = site.posts.first %}
{% assign front_page = true %}
{% include post.html %}

<hr />
<article>
<h1>Recent Posts</h1>
<ul>
{% for post in site.posts | limit: 5 %}
    <li><a href="{{ post.url }}">{{ post.title }}</a> <span class="meta">(posted on <time datetime="{{ post.date | date: "%Y-%m-%d" }}">{{ post.date | date: "%B %d, %Y" }}</time>)</span></li>
{% endfor %}
    <li><a href="/archive">See the full archive.</a></li>
</ul>
</article>
<hr />
<article>
<h1>On Twitter</h1>
<ul>
    <? 
    if(is_array($tweets)): 
    foreach($tweets as $k=>$v):
    if(substr($v['text'], 0, 1) != '@'):
    ?>
    <li>
        <?=Twitter_Autolink::autolink($v['text'])?>
        <span class="meta">
        (<time datetime="<?=strftime('%Y-%m-%d', strtotime($v['created_at']))?>"><?=niceTime($v['created_at'])?></time>)
        </span>
    </li>
    <? 
    endif; 
    endforeach; 
    endif; ?>
    <li><a href="http://twitter.com/jwpage">Follow me on Twitter</a></li>
</ul>
</article>
