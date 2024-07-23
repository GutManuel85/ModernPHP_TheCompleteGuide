<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./simple.css">
</head>
<body>
    <pre>
        <?php
        $categories = ['Programming', 'Business', 'Art', 'Law'];
        //var_dump($categories);
        echo $categories[0];
        echo "\n";
        echo $categories[1];
        echo "\n";
        echo var_dump(in_array('Programming', $categories));
        echo "\n";
        if(in_array('Art', $categories)){
            echo "Art is in the array";
        };
        echo "\n";
        echo count($categories);
        echo "\n";
        echo "The last element in the array is: " . $categories[count($categories) -1];
        ?>
    </pre>
</body>
</html>