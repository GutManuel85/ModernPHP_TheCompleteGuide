<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php
    
    var_dump($_GET);

?></pre>

// example URL for Browser: http://localhost/ModernPHP_TheCompleteGuide/06%20-%20params%20and%20forms/01%20-%20GET/my-get.php?book=Lord%20of%20the%20Rings&author=Manuel%20Gut

<?php if (!empty($_GET['book'])): ?>
    <h1><?php echo $_GET['book']; ?></h1>
    <h1><?php echo $_GET['author']; ?></h1>
<?php endif; ?>

</body>
</html>