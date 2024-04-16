<?php
//include __DIR__ . '/../api/random-animal.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Random Pets</title>
</head>

<body>

<?php
$dogQuantity = 10;

for ($i = 0; $i<$dogQuantity; ++$i) {
    $getDogs = file_get_contents('https://dog.ceo/api/breeds/image/random');
    $dogs[] = json_decode($getDogs, true);
}

$copyOneDog = $dogs;
$copyTwoDog = $dogs;
$lastDog = array_pop($copyOneDog);
$firstDog = array_shift($copyTwoDog);

//echo "<img src=\"{$firstDog[message]}\" alt=\"random dog image\"/>";

echo <<<HTML
<img width="300" src="$firstDog[message]" alt="first dog image" />
HTML;

echo <<<HTML
<img width="300" src="$lastDog[message]" alt="last dog image" />
HTML;

foreach ($dogs as $k => $dog) {
    echo <<<HTML
<img width="300" src="$dog[message]" alt="random dog-$k"/>
HTML;
}

?>

</body>
</html>
