---
layout: default
---
<article id="about">
<img src="http://www.gravatar.com/avatar/b0a428c4f5e9cae36fd766d69a987600?s=50" />
<p>
Hi! I'm Johnson, a web developer who loves writing code. I currently work at <a href="http://locatrix.com">Locatrix Communications</a> and use PHP, Ruby, HTML, CSS and JavaScript to create <a href="http://everyone.whereis.com">dynamic</a> <a href="http://mpoll.me">applications</a>. (<a href="/about">read more</a>)
</p>
</article>
<hr />
<article>
<h1>Recent Posts</h1>
<ul>
{% for post in site.posts | limit: 5 %}
    <li><a href="{{ post.url }}">{{ post.title }}</a> <span class="meta"><time datetime="{{ post.date | date: "%Y-%m-%d" }}">{{ post.date | date: "%B %d, %Y" }}</time></span></li>
{% endfor %}
    <li><a href="/archive">See the full archive.</a></li>
</ul>
</article>
