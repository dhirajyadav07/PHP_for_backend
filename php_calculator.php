<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
       <input type="text" name='n1' placeholder="Enter Number" required>
       <input type="text" name='n2' placeholder="Enter Number" required>
       
       <select name="op">
        <option value="add">ADD</option>
        <option value="sub">SUB</option>
        <option value="mult">MULT</option>
        <option value="div">DIV</option>
        
       </select><br>
       <input type="submit" name='submit' value="submit">
    </form>
    <p>
        <?php
        if(isset($_POST['submit'])){
            $num1=$_POST['n1'];
            $num2=$_POST['n2'];
            
            $operator=$_POST['op'];
            // echo "$num1  $num2 $operator";
            switch($operator){
                case 'add': $sum=$num1 + $num2;
                    echo "the sum of given number is $sum";
                    break;
                case 'sub':$sub=$num1-$num2;
                    echo "the sub of given number is $sub";
                    break;
                case 'mult':$mul=$num1*$num2;
                    echo "the mult of given number is $mul";
                    break;
                case 'div':$div=$num1/$num2;
                    echo "the div of given number is $div";
                    break;
                default : echo "Sorry its not exist";
                    exit;
            }
        }
        ?>
    </p>
</body>
</html>