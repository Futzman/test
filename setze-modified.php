<!DOCTYPE html><html> <head> <meta charset="UTF-8">
        <link rel="stylesheet" href="/style/style.css">
    </head>
    <body>
    <?php
    global $color;
    global $figure;

    function indexOfFigure($fig){
        $chars = array("♜","♞","♝","♛","♚","♟","♖","♘","♗","♕","♔","♙");
        for($k = 0; $k < 12; $k++){
            if($fig == $chars[$k])
                if($k < 6)
                    return ($k + 6);
                else
                    return $k;
        }
    }

    function IndexOfChar($ch){
        $letters = array("A","B","C","D","E","F","G","H");
        for($i = 0; $i < 8; $i++){
            if($letters[$i] == $ch){
                return $i;
            }
        }
    }

    function setze($r, $c ,$rTo, $cTo){
        
       
        //$brett = file_get_contents($jBoard);
        
        //$chess = json_encode($brett);
        if($r == $rTo && $cTo == $c && $r == 0){
            $jBoard = "schach-pos.json";
            $chessColor = array(array(array("♜","bl"),array("♞","bl"), array("♝","bl"),array("♚","bl"),array("♛","bl"),array("♝","bl"), array("♞","bl"),array("♜","bl")),
                 array(array("♟","bl"),array("♟","bl"), array("♟","bl"),array("♟","bl"),array("♟","bl"),array("♟","bl"), array("♟","bl"),array("♟","bl")),
                 array(array("","none"),array("","none"), array("","none"),array("","none"),array("","none"),array("","none"), array("","none"),array("","none")),
                 array(array("","none"),array("","none"), array("","none"),array("","none"),array("","none"),array("","none"), array("","none"),array("","none")),
                 array(array("","none"),array("","none"), array("","none"),array("","none"),array("","none"),array("","none"), array("","none"),array("","none")),
                 array(array("","none"),array("","none"), array("","none"),array("","none"),array("","none"),array("","none"), array("","none"),array("","none")),
                 array(array("♙","wh"),array("♙","wh"), array("♙","wh"),array("♙","wh"),array("♙","wh"),array("♙","wh"), array("♙","wh"),array("♙","wh")),
                 array(array("♖","wh"),array("♘","wh"), array("♗","wh"),array("♔","wh"),array("♕","wh"),array("♗","wh"), array("♘","wh"),array("♖","wh")));

        
        $jChess = json_encode($chessColor);
        
        file_put_contents($jBoard, $jChess);
        }
        else{
            $jBoard = "schach-pos.json";
            $brett = file_get_contents($jBoard);
            $chessColor = json_decode($brett);
            
            $figur = $chessColor[$c][indexOfChar($r)][0];
            $figurColor = $chessColor[$c][indexOfChar($r)][1];
            $chessColor[$c][indexOfChar($r)][0] = "";
            $chessColor[$c][indexOfChar($r)][1] = "none";
            $chessColor[$cTo][indexOfChar($rTo)][0] = $figur;
            $chessColor[$cTo][indexOfChar($rTo)][1] = $figurColor;
            
            $jChess = json_encode($chessColor);
            file_put_contents($jBoard, $jChess);
        }
       
        

        $letters = array("A","B","C","D","E","F","G","H");
        $index = 0;
        for($i = 0; $i < 8; $i++){
            if($letters[$i] == $c){
                $index = $i + 1;
            }
        }

        $characters = array("♜","♞","♝","♛","♚","♟","♖","♘","♗","♕", "♔", "♙");
        $charactersNotFill = array("♖","♘","♗","♕", "♔", "♙");
        $characterIndex = 0;
        
        

        echo "<table class='chess-board'> 
                <tbody>
                     <tr>";
        
        echo "<br>";
        echo"<th></th>";
        foreach($letters As $headerLetters){
            echo"<th>{$headerLetters}</th>";
        }
        echo"</tr>";
        //Schachbrett - Aufbau
        for($i = 0; $i < 8;$i++){
            echo"<tr>";
            echo"<th>".($i + 1)."</th>";
            for($j=0; $j < 8; $j++){
                $num = (8 * ($i - 1)) + $j;
                if(fmod($i+$j,2) == 0){ // <<<<<<<<<<<<<< weisses Feld
                    if($chessColor[$i][$j][0] == ""){
                        echo"<td class='colblack light'></td>";
                    }
                    else if($chessColor[$i][$j][1] == "bl"){
                        $temp = $chessColor[$i][$j][0];
                        echo"<td class='colblack light'>".$temp."</td>";
                        
                        }
                        else{
                            
                            echo"<td class='colblack light'>".$characters[indexOfFigure($chessColor[$i][$j][0])]."</td>";
                        }
                }
                
                else {   
                    
                    if($chessColor[$i][$j][1] == "wh"){
                        $temp = indexOfFigure($chessColor[$i][$j][0]) - 6;
                        echo"<td class='colwhite dark'>".$characters[$temp]."</td>";
                    }
                    else if($chessColor[$i][$j][1] == "bl"){
                        $temp = indexOfFigure($chessColor[$i][$j][0]);
                        echo"<td class='colwhite dark'>".$characters[$temp]."</td>";
                    }
                    else{
                        echo"<td class='colwhite dark'></td>";
                    }  
                        
                   
                     
                }
            }   
        
        echo"<th class='rt'>".($i + 1)."</th>";
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
    