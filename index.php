<?php
    if(isset($_POST['col'])){
      $cols = is_numeric($_POST['col']) &&$_POST["col"] > 0 ? $_POST['col'] : 10;
    }
    else{
        $cols = 10;
    }

    if(isset($_POST['row'])){
        $rows = is_numeric($_POST['row']) &&$_POST["row"] > 0 ? $_POST['row'] : 10;
      }
      else{
          $rows = 10;
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
    <form action="./index.php" method="POST">
        <input type="number" name="col" placeholder="Enter Column" min=1>
        <input type="number" name="row" placeholder="Enter Row" min=1>
        <input type="submit" value="Submit">
    </form>
    <table border=1 style="text-align: center; margin-top:1rem">  
        <?php
            for ($row = 1; $row <= $rows; $row++){
        ?>
        <tr>
            <?php
                
                    echo "<td style='padding: 1rem;'>" .  $row . "</td>";
            ?>
        </tr>
        <?php
            }        
        ?>        


    </table>

    <table border=1 style="text-align: center; margin-top:1rem">  
        
        <tr>
            <?php
                for($col = 1 ; $col <= $cols; $col++){
                    echo "<td style='padding: 1rem;'>" . $col  . "</td>";
                }
            ?>
        </tr>        


    </table>

    <table border=1 style="text-align: center; margin-top:1rem">  
        <?php
            for ($row = 1; $row <= $rows; $row++){
        ?>
        <tr>
            <?php
                for($col = 1 ; $col <= $cols; $col++){
                    echo "<td style='padding: 1rem;'>" . $col * $row . "</td>";
                }
            ?>
        </tr>
        <?php
            }        
        ?>        


    </table>





</html>
</body>