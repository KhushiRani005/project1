<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="400px" border="1px" cellspecing="0px">
        <?php 
        echo "chess Board";
        $a=0;

        for($c=0;$c<8;$c++){
            echo "<tr>"
            $a=$c;

            for($r=0;$r<8;$r++){
                if($a%2==0){
                    "<td height=100px width=20px bgcolor=black></td>"
                     $a++
                }
                else{
                    "<td height=100px width=20px bgcolor=white></td>"

                }
            }
            echo "</tr>"
        }
        
        
        ?>
    </table>

</body>
</html>