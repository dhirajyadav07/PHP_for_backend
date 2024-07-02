<!DOCTYPE html>
<html lang="en">
<head>
    
</head>


<body>
    <form method="post" >
        <h2>LOGIN</h2>
            <label >Enter your fav color </label>
            <input type="text" name="favcolor">
            <input type="submit" name="submit" onclick="display" >
            
    </form>
    <p>
        <?php
        if(isset($_POST['submit'])){
            $favColor=$_POST['favcolor'];
            switch($favColor){
                case 'red' : echo "your fav color is red";
                    break;
                case 'blue' : echo "your fav color is blue";
                    break;
                    
                case 'white' : echo "your fav color is white";
                break;
                case 'pink' : echo "your fav color is pink";
                break;
                default  : echo "sorry you canot choose this color , because i dont want";
                break;
            }
        }
        ?>
    </p>
    
</body>
</html>



