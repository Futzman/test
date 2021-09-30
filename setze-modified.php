<!DOCTYPE html><html> <head> <meta charset="UTF-8">
        <link rel="stylesheet" href="/style/style.css">
    </head>
    <body>
    <?php
    function setze($c, $r){
        echo "<br>";
        $letters = array("A","B","C","D","E","F","G","H");
        $index = 0;
        for($i = 0; $i < 8; $i++){
            if($letters[$i] == $c){
                $index = $i + 1;
            }
        }
        echo "<table class='chess-board'> 
                <tbody>
                     <tr>";
        #echo "<br>";
        #print("Yeah!!!" . $index. "\n");
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
                    if($j ==$index && $i == $r) 
                        echo"<td class='col light'>♛</td>";
                    else
                        echo"<td class='light'></td>";
                    }
                else{
                    if($j == $index && $i == $r) 
                        echo"<td class='col dark'>♛</td>";
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
    