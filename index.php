index.php
    <?php

$course1 = [
    'BSIT',
    'BSBA',
    'HMO',
    'NC2',
    'ENGINEERING',
    'NURSE',
    'ARCHITECT',
    'TOURISM',
];

    $course2 = [
        'HMO',
        'ENGINEERING',
        'NURSE'
    ];

    $result = array_diff ($course1,$course2)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php print_r($result) ?></h1>
</body>
</html>



