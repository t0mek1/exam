<?php

function printDate()
{
  $data = date("d-m-Y");
  echo($data);
}

function printTime()
{
  $czas = date("G:i:s");
  echo($czas);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12345</title>
</head>
<body>
    <h1 class="display-5 fw-bold">under consctrution</h1>
    <H2 ALIGN="center">
    Dzisiaj jest <?PHP printDate() ?>
    <BR>
    Godzina <?PHP printTime() ?>
    </H2>
</body>
</html>