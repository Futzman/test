<!DOCTYPE html><html> <head> <meta charset="UTF-8">
        <link rel="stylesheet" href="/style/style.css">
        
    </head>
    <body>
      <?php
        include("setze.php");
        if(isset($_GET['row'])&&isset($_GET['column'])){
          setze("C", 3);
        }
        else zeichne()
      ?>

    <form action="?" method="get" class="form-example">
        <input type="text" name="row" id="Row" required width="30">
        <input type="text" name="column" id="Column" required width="30">
        <input type="submit" value="Go">
    </form>

    </body>
</html>