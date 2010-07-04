---
layout: default
title: Resume
---
<?php
include_once __DIR__.'/job.php';
//include_once __DIR__.'/repos.php';
//$repos = Repos::get();

<h2>Employment History</h2>
<ul>
    <? foreach($jobs as $job): ?>
    <li class="job">
        <h3><?= $job->title ?></h3>
        <h4>
            <?= $job->name ?>
            <? if(!empty($job->from)): ?>
            <span><?= $job->from ?> - <?= $job->to ?></span>
            <? endif; ?>
        </h4>
        <?= $job->blurb ?>
        <ul class="print">
        <? foreach($job->points as $p): ?>
            <li>
                <? if(!empty($p->heading)): ?>
                <strong><?= $p->heading ?>:</strong>
                <? endif; ?>
                <?= $p->blurb ?>
            </li>
        <? endforeach; ?>
        </ul>
    </li>
    <? endforeach; ?>
</ul>
</div>

<div class="side grid_4 omega">
    <h2>Skills</h2>
    <ul class="skills">
        <li><strong>Web Development:</strong> <span>PHP (CakePHP, Zend Framework, PHPunit), JSP, XHTML, Javascript (jQuery, Prototype, OpenLayers), CSS, Accessibility.</span></li>
        <li><strong>Databases:</strong> <span>PostgreSQL, MySQL, SQLite, Oracle.</span></li>
        <li><strong>Programming:</strong> <span>Ruby, Python, Java.</span></li>
        <li><strong>Software:</strong> <span>vim, Eclipse IDE, Apache HTTPD, Adobe Photoshop.</span></li>
    </ul>
    <? if($repos): ?>
    <h2>Github Repositories</h2>
    <ul id="git" class="skills">
        <? foreach($repos as $repo): ?>
        <li><strong><a href="<?= $repo['url'] ?>"><?= $repo['name'] ?></a></strong> <?= $repo['description'] ?></li>
        <? endforeach; ?>
    </ul>
    <? endif; ?>
    <h2>Education</h2>
    <ul id="edu">
        <? foreach($educations as $job): ?>
        <li class="job">
            <h3><?= $job->title ?></h3>
            <h4>
                <?= $job->name ?>
                <? if(!empty($job->from)): ?>
                <span>(<?= $job->from ?> - <?= $job->to ?>)</span>
                <? endif; ?>
            </h4>
            <?= $job->blurb ?>
            <ul>
            <? foreach($job->points as $p): ?>
                <li>
                    <? if(!empty($p->heading)): ?>
                    <strong><?= $p->heading ?></strong>
                    <? endif; ?>
                    <?= $p->blurb ?>
                </li>
            <? endforeach; ?>
            </ul>
        </li>
        <? endforeach; ?>
    </ul>
</div>

<div id="referees" class="grid_12 omega">
    <h2>Referees</h2>
    <p>Referee details provided on request.</p>
</div>

</div>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12101695-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();
</script>
<script type="text/javascript" src="js/jquery.js?<?=$v?>"></script>
<script type="text/javascript" src="js/resume.js?<?=$v?>"></script>
</body>
</html>