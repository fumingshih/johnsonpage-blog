<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>
    {% if page.title %}{{ page.title }} &mdash; johnsonpage.org
    {% else %}johnsonpage.org &mdash; code and words from a web developer in brisbane, australia  
    {% endif %}
    
    </title>
    <meta charset="utf-8" />
    <meta name="author" content="{{ site.author }}" />
    <script>
    (function(B,C){B[C]=B[C].replace(/\bno-js\b/,'js');if(!/*@cc_on!@*/0)return;var e = "abbr article aside audio canvas command datalist details figure figcaption footer header hgroup mark meter nav output progress section summary time video".split(' '),i=e.length;while(i--){document.createElement(e[i])}})(document.documentElement,'className');
    </script>

    <link rel="stylesheet" href="/css/blueprint/screen.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/css/blueprint/print.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" type="text/css" media="print">  
    <!--[if lt IE 8]><link rel="stylesheet" href="/css/blueprint/ie.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" type="text/css" media="screen, projection"><![endif]-->
    <link rel="stylesheet" href="/css/style.css?{{ site.time | date:"%Y%m%d%H%M%S" }}" />
    <link href="/atom.xml" rel="alternate" type="application/atom+xml" />
</head>
<body>
    <div class="container">
        <div class="hell span-16">
            <header>
                <hgroup>
                    <h1><a href="/"><span>johnson</span> <span>page</span></a></h1>
                    <h2>code and words from <strong>a web developer in Brisbane, Australia</strong></h2>
                </hgroup>
            </header>

            <div id="content">
            {{ content }}
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>

        <footer class="span-18">
            <article id="about" class="boxxy span-6">
                <h1>About</h1>
                <p>
                I'm Johnson Page, a web developer from Brisbane, Australia 
                who enjoys working with, and&nbsp;thinking about, all manner 
                of web technologies. 
                <a href="/about">Read a little more about me.</a>.
                </p>
            </article>
            <nav id="more" class="boxxy span-4">
                <h1>More</h1>
                <ul>
                    <li><a href="/colophon">Colophon</a></li>
                    {% comment %}
                    <li><a href="/resume">Resume</a></li>
                    {% endcomment %}
                    <li><a href="/archive">Archive</a></li>
                    <li><a href="/atom.xml">Subscribe (Atom)</a></li>
                </ul>
            </nav>
            <nav id="else" class="boxxy span-4 last">
                <h1>Elsewhere</h1> 
                <ul>
                    <li><a href="http://twitter.com/jwpage">Twitter</a></li>
                    <li><a href="http://github.com/jwpage">Github</a></li>
                    <li><a href="mailto:jwpage+site@gmail.com">Email</a></li>
                </ul>
            </nav>
        </footer>
        <div class="clear"></div>
    </div>
    <p class="clear" id="very-footer">
        Powered by <a href="http://jekyllrb.com/">Jekyll</a>
    </p>
<script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-12101695-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga. async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http:// www') + '.google-analytics.com/ga.js';
(document.getElementsByTagName('head')[0] || document.                      getElementsByTagName('body')[0]).appendChild(ga);
})();
</script>
<script src="/js/jquery-1.4.2.min.js?{{ site.time | date:"%Y%m%d%H%M%S" }}"></script>
<script src="/js/site.js?{{ site.time | date:"%Y%m%d%H%M%S" }}"></script>
</body>
</html>
