<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $xml = simplexml_load_file("record/record.xml") or die("Error: Cannot create object");
    print_r($xml);
    ?>
</body>

</html>