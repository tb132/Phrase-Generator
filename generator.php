<?php
    if(isset($_GET['btn-save'])){
      $filename = "file.txt";
      $text = $_GET['phrase_01'] . " " . $_GET['phrase_02'] . " " . $_GET['name'] . "\n";
      file_put_contents($filename, $text, FILE_APPEND);
    }
?>
<!DOCTYPE html>
<html>
    <body>
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>I say YES to ... </title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
      </head>
       <div class="main">
        <h1>I say YES! to...</h1>
        <form method="get">
            <select class="custom-select" name="phrase_01">
                <option value="unheimliche">unheimliche</option>
                <option value="nette">nette</option>
                <option value="komische">komische</option>
                <option value="umwerfende">umwerfende</option>
            </select>
            <select name="phrase_02">
                <option value="Tofuburger">Tofuburger</option>
                <option value="Studenten">Studenten</option>
                <option value="Vorlesungen">Vorlesungen</option>
                <option value="Alien">Alien</option>
            </select>
        <br/>
        <br/>
        <form class="form-inline" method="get">
        <div class="form-group">
        <label for="beispielFeldName2"</label>
        <input type="text" class="form-control" id="beispielFeldName2" placeholder="Name" name="name">
        </div>

            <br/>
             <button type="submit" class="btn btn-default" name="btn-save" value="1">Say YES!</button>

        </form>

    </body>

</html>
