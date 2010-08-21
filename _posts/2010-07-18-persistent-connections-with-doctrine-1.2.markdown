---
layout: post
categories: [php, doctrine]
---
Forcing Doctrine 1.2 to use persistent database connections was a matter that gave me a bit of trouble the other day. It's undocumented, and appears in the code (`Doctrine/Connection.php`) that you can set persistence as an option, but that code also appears to be orphaned.

The best way to create a persistent connection is by passing a persistent PDO object directly to Doctrine:

{% highlight php %}
<?php 
$dsn = ""; // As per PDO DSN syntax
$pdo = new PDO($dsn, null, null, array(
    PDO::ATTR_PERSISTENT => true,
));
$conn = Doctrine_Manager::connection($pdo);
{% endhighlight %}

Not so hard, after all.
