# englishlang
Here is a code for (heroku) app, that can help with learning tenses in english. 
____
You should have a database with table "tenses" and some examples for every tense:
```php
$link = pg_connect("CONNECT");
$query = pg_query($link, "SELECT example FROM tenses WHERE tense = '{$name}'");
```
