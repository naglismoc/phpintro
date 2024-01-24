<?php

include "./Author.php";
include "./Math.php";

// $author = new Author();
// print_r($author);
// echo "<br>";
// $author->id = 1;
// $author->name = "Travers";
// $author->surname = "Pheby";
// echo "<br>";
// print_r($author);
// echo "<br>";
// echo $author;
// echo "<br>";
// echo $author->initials();
// echo "<br>";
// echo "<br>";
// $author2 = new Author();
// $author2->id = 2;
// $author2->name = "Tatiana";
// $author2->surname = "Cuffley";

// echo $author2->initials();
// echo "<br>";

$author3 = new Author(3,"Mord","Blackholl");
echo $author3;
echo "<br>";

echo $author3->getId();
echo "<br>";
$author3->setId(40);
echo $author3;
echo "<br>";

$author4 = new Author();
$author4->setId(4);
$author4->setName("Case");
$author4->setSurname("Roth");

echo Author::classIntro();

echo Math::multiply(5,6);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
   

</body>

</html>