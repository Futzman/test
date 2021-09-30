<!DOCTYPE html><html> <head> <meta charset="UTF-8">
        <link rel="stylesheet" href="/style/style.css">
        
    </head>
    <body>
      <?php
        include("setze-modified.php");
        if(isset($_GET['row'])&&isset($_GET['column'])){
          setze($_GET['row'], $_GET['column']);
        }
        else setze(0,0)
      ?>

    <form action="?" method="get" class="form-example">
        <input type="text" name="row" id="Row" required width="30">
        <input type="text" name="column" id="Column" required width="30">
        <input type="submit" value="Go">
    </form>

    </body>
</html>