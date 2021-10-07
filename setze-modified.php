<!DOCTYPE html><html> <head> <meta charset="UTF-8">
        <link rel="stylesheet" href="/style/style.css">
    </head>
    <body>
    <?php
    global $color;
    global $figure;

    

    function setze($c, $r ,$f, $fcolor){
        
        static $color;
        static $figuire;
        $letters = array("A","B","C","D","E","F","G","H");
        $index = 0;
        for($i = 0; $i < 8; $i++){
            if($letters[$i] == $c){
                $index = $i + 1;
            }
        }

        $charactersFill = array("♜","♞","♝","♛","♚","♟");
        $charactersNotFill = array("♖","♘","♗","♕", "♔", "♙");
        $characterIndex = 0;
        for($i = 0; $i < 6; $i++){
            if($f == $charactersFill[$i])
                $characterIndex = $i;
        }
        

        echo "<table class='chess-board'> 
                <tbody>
                     <tr>";
        
        echo "<br>";
        echo"<th></th>";
        foreach($letters As $headerLetters){
            echo"<th>{$headerLetters}</th>";
        }
        echo"</tr>";
        for($i = 1; $i < 9;$i++){
            echo"<tr>";
            echo"<th>{$i}</th>";
            for($j=1; $j<9; $j++){
                $num = (8 * ($i - 1)) + $j;
                if(fmod($i+$j,2) == 0){
                    if($j == $index && $i == $r) 
                        if($fcolor == 'white'){
                            echo"<td class='colblack light'>$charactersNotFill[$characterIndex]</td>";
                            $color = 'white';
                            $figuire = $charactersNotFill[$characterIndex];
                        }
                        else {
                            echo"<td class='colblack light'>$charactersFill[$characterIndex]</td>";
                            $color = 'white';
                            $figuire = $charactersFill[$characterIndex];
                        }
                    else
                        echo"<td class='light'></td>";
                    }
                else{
                    if($j == $index && $i == $r) 
                        if($fcolor == 'white')
                          echo"<td class='colwhite dark'>$f</td>";
                        else{
                          echo"<td class='colwhite dark'>$charactersNotFill[$characterIndex]</td>";
                          $color = 'white';
                          $figuire = $charactersFill[$characterIndex];      
                        }
                    else 
                        echo"<td class='dark'></td>";
                    }
                }
                echo"<th class='rt'>{$i}</th>";
                echo"</tr>";
            }
            echo"<th></th>";
            foreach($letters As $headerLetters){
                echo"<th class='rt'>{$headerLetters}</th>";
            }
        }    
    ?>
</body>
</html>
    