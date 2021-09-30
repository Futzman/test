<!DOCTYPE html><html> <head> <meta charset="UTF-8">
        <link rel="stylesheet" href="/style/style.css">
        
    </head>
    <body>
      <?php
        include("setze-modified.php");
        if(isset($_GET['row']) && isset($_GET['column']) && isset($_GET['figur']) && isset($_GET['figurcolor'])){
          setze($_GET['row'], $_GET['column'], $_GET['figur'], $_GET['figurcolor']);
         
        }
        else setze(0, 0, 0, 0)
      ?>
      <h1> Project EnigmA (chessBoard)</h1>
    <hr>
    <form action="?" method="get">
        <label for = "row"> Wählle Position des Feldes </label>
        
        <select name = "row" id = "row">
          <option value = "A"<?php if($_GET['row'] == "A") echo "selected=\"selected\"";?>>A</option>
          <option value = "B"<?php if($_GET['row'] == "B") echo "selected=\"selected\"";?>>B</option>
          <option value = "C"<?php if($_GET['row'] == "C") echo "selected=\"selected\"";?>>C</option>
          <option value = "D"<?php if($_GET['row'] == "D") echo "selected=\"selected\"";?>>D</option>
          <option value = "E"<?php if($_GET['row'] == "E") echo "selected=\"selected\"";?>>E</option>
          <option value = "F"<?php if($_GET['row'] == "F") echo "selected=\"selected\"";?>>F</option>
          <option value = "G"<?php if($_GET['row'] == "G") echo "selected=\"selected\"";?>>G</option>
          <option value = "H"<?php if($_GET['row'] == "H") echo "selected=\"selected\"";?>>H</option>
        </select>
        <label for = "column">  </label>
        <select name = "column" id = "column">
          <option value = "1"<?php if($_GET['column'] == "1") echo "selected=\"selected\"";?>>1</option>
          <option value = "2"<?php if($_GET['column'] == "2") echo "selected=\"selected\"";?>>2</option>
          <option value = "3"<?php if($_GET['column'] == "3") echo "selected=\"selected\"";?>>3</option>
          <option value = "4"<?php if($_GET['column'] == "4") echo "selected=\"selected\"";?>>4</option>
          <option value = "5"<?php if($_GET['column'] == "5") echo "selected=\"selected\"";?>>5</option>
          <option value = "6"<?php if($_GET['column'] == "6") echo "selected=\"selected\"";?>>6</option>
          <option value = "7"<?php if($_GET['column'] == "7") echo "selected=\"selected\"";?>>7</option>
          <option value = "8"<?php if($_GET['column'] == "8") echo "selected=\"selected\"";?>>8</option>
        </select>
        <select name = "figur" id = "figur">
          <option value = "♜"<?php if($_GET['figur'] == "♜") echo "selected=\"selected\"";?>>♜</option>
          <option value = "♞"<?php if($_GET['figur'] == "♞") echo "selected=\"selected\"";?>>♞</option>
          <option value = "♝"<?php if($_GET['figur'] == "♝") echo "selected=\"selected\"";?>>♝</option>
          <option value = "♛"<?php if($_GET['figur'] == "♛") echo "selected=\"selected\"";?>>♛</option>
          <option value = "♚"<?php if($_GET['figur'] == "♚") echo "selected=\"selected\"";?>>♚</option>
          <option value = "♟"<?php if($_GET['figur'] == "♟") echo "selected=\"selected\"";?>>♟</option>
        </select>
        <select name = "figurcolor" id = "figurcolor">
          <option value = "white"<?php if($_GET['figurcolor'] == "white") echo "selected=\"selected\"";?>>white</option>
          <option value = "black"<?php if($_GET['figurcolor'] == "black") echo "selected=\"selected\"";?>>black</option>
        </select>
        <abstand>  </abstand>
        <input type="submit" value="Go">
        <hr>
    </form>

    </body>
</html>