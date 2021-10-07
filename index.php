<!DOCTYPE html><html> <head> <meta charset="UTF-8">
        <link rel="stylesheet" href="/style/style.css">
        
    </head>
    <body>
      <?php
        include("setze-modified.php");

        if(!isset($_GET['row'])||isset($_GET['neuStart']))
          setze(0,0,0,0);
        else{
          setze($_GET['row'], $_GET['column'] - 1, $_GET['rowTo'], $_GET['columnTo'] - 1);
        }

       ?>
      <h1> Project EnigmA (chessBoard)</h1>
    <hr>
    <form action="?" method="get">
        <label for = "row"> Figur bewegen von  </label>
        
        <select name = "row" id = "row">
          <option value = "A"<?php if(isset($_GET['row']) && ($_GET['row'] == "A")) echo "selected=\"selected\"";?>>A</option>
          <option value = "B"<?php if(isset($_GET['row']) && $_GET['row'] == "B") echo "selected=\"selected\"";?>>B</option>
          <option value = "C"<?php if(isset($_GET['row']) && $_GET['row'] == "C") echo "selected=\"selected\"";?>>C</option>
          <option value = "D"<?php if(isset($_GET['row']) && $_GET['row'] == "D") echo "selected=\"selected\"";?>>D</option>
          <option value = "E"<?php if(isset($_GET['row']) && $_GET['row'] == "E") echo "selected=\"selected\"";?>>E</option>
          <option value = "F"<?php if(isset($_GET['row']) && $_GET['row'] == "F") echo "selected=\"selected\"";?>>F</option>
          <option value = "G"<?php if(isset($_GET['row']) && $_GET['row'] == "G") echo "selected=\"selected\"";?>>G</option>
          <option value = "H"<?php if(isset($_GET['row']) && $_GET['row'] == "H") echo "selected=\"selected\"";?>>H</option>
        </select>
        <label for = "column">  </label>
        <select name = "column" id = "column">
          <option value = "1"<?php if(isset($_GET['column']) && $_GET['column'] == "1") echo "selected=\"selected\"";?>>1</option>
          <option value = "2"<?php if(isset($_GET['column']) && $_GET['column'] == "2") echo "selected=\"selected\"";?>>2</option>
          <option value = "3"<?php if(isset($_GET['column']) && $_GET['column'] == "3") echo "selected=\"selected\"";?>>3</option>
          <option value = "4"<?php if(isset($_GET['column']) && $_GET['column'] == "4") echo "selected=\"selected\"";?>>4</option>
          <option value = "5"<?php if(isset($_GET['column']) && $_GET['column'] == "5") echo "selected=\"selected\"";?>>5</option>
          <option value = "6"<?php if(isset($_GET['column']) && $_GET['column'] == "6") echo "selected=\"selected\"";?>>6</option>
          <option value = "7"<?php if(isset($_GET['column']) && $_GET['column'] == "7") echo "selected=\"selected\"";?>>7</option>
          <option value = "8"<?php if(isset($_GET['column']) && $_GET['column'] == "8") echo "selected=\"selected\"";?>>8</option>
        </select>


       


        <label for = "rowTo"> nach </label>
        <select name = "rowTo" id = "rowTo">
          <option value = "A"<?php if(isset($_GET['row']) && ($_GET['row'] == "A")) echo "selected=\"selected\"";?>>A</option>
          <option value = "B"<?php if(isset($_GET['row']) && $_GET['row'] == "B") echo "selected=\"selected\"";?>>B</option>
          <option value = "C"<?php if(isset($_GET['row']) && $_GET['row'] == "C") echo "selected=\"selected\"";?>>C</option>
          <option value = "D"<?php if(isset($_GET['row']) && $_GET['row'] == "D") echo "selected=\"selected\"";?>>D</option>
          <option value = "E"<?php if(isset($_GET['row']) && $_GET['row'] == "E") echo "selected=\"selected\"";?>>E</option>
          <option value = "F"<?php if(isset($_GET['row']) && $_GET['row'] == "F") echo "selected=\"selected\"";?>>F</option>
          <option value = "G"<?php if(isset($_GET['row']) && $_GET['row'] == "G") echo "selected=\"selected\"";?>>G</option>
          <option value = "H"<?php if(isset($_GET['row']) && $_GET['row'] == "H") echo "selected=\"selected\"";?>>H</option>
        </select>

        

        <label for = "columnTo">  </label>
        <select name = "columnTo" id = "columnTo">
          <option value = "1"<?php if(isset($_GET['column']) && $_GET['column'] == "1") echo "selected=\"selected\"";?>>1</option>
          <option value = "2"<?php if(isset($_GET['column']) && $_GET['column'] == "2") echo "selected=\"selected\"";?>>2</option>
          <option value = "3"<?php if(isset($_GET['column']) && $_GET['column'] == "3") echo "selected=\"selected\"";?>>3</option>
          <option value = "4"<?php if(isset($_GET['column']) && $_GET['column'] == "4") echo "selected=\"selected\"";?>>4</option>
          <option value = "5"<?php if(isset($_GET['column']) && $_GET['column'] == "5") echo "selected=\"selected\"";?>>5</option>
          <option value = "6"<?php if(isset($_GET['column']) && $_GET['column'] == "6") echo "selected=\"selected\"";?>>6</option>
          <option value = "7"<?php if(isset($_GET['column']) && $_GET['column'] == "7") echo "selected=\"selected\"";?>>7</option>
          <option value = "8"<?php if(isset($_GET['column']) && $_GET['column'] == "8") echo "selected=\"selected\"";?>>8</option>
        </select>
      

        

        <label for = "moveToField"></label>
        
        <abstand>  </abstand>
        <input type="submit" value="Go">
        <abstand>  </abstand>
        <button onclick="setze(0,0,0,0)">Neustart</button>
        <hr>
    </form>

    </body>
</html>