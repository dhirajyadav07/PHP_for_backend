<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
    <style>
        *{margin: 0;padding: 0;box-sizing: border-box;}
        h1{text-align: center; line-height: 20vh; color:  #6c63ff;}
        .main-div{
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 80vh;
            align-items: center;

        }
        .left-side{
            background-color: #ABB2B9;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
        }
        .left-side img{
            width: 400px;
            height: auto;
        }
        .right-side{
            width: 400px;
            height: 300px;
            background-color: #ABB2B9;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .input1{
            width: 250px;
            height: 40px;
            padding: 5px;
            outline: none;
            display: flex;
            border-radius: 1px solid grey;
            border-radius: 5px;
            

        }
        .selection{
            width: 100%;
            margin: 20px 0;

        }
        .button{
            
            padding: 10px 16px;
            border-radius: 5px;
            outline: none;
            border-radius: none;
            background-color: #6c63ff;
            color: white;
            font-size: 0.9rem;
            


        }
        p{
            margin: 20px 0 0 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Temperature Conversion</h1>
        <div class="main-div">
            <div class="left-side">
                <img src="images/weather1.png" alt="">
            </div>
    
            <div class="right-side">
               <form action method="post">
                <input type="text" name="num" class="input1" placeholder="enter the temperature">
                <br>
                <div class="selection">
                    <label>cel</label>
                <input type="radio" name="units" value="cel">
                <label>farehn</label>
                <input type="radio" name="units" value="farehn">
                </div>
                
                <input type="submit" name="submit" value="Convert Now" class="button">
               
            </form>
            <p>
                <?php
                if(isset($_POST['submit'])) {
                    $num=$_POST['num'];
                    $select=$_POST['units'];
                    if($select=='cel'){
                        $result = ($num - 32) * 5 / 9;
                        echo "temperature in degree celcious : ",$result;
                    }
                    elseif($select=='farehn'){
                    $result = $num * 9 / 5 + 32;
                    echo "temperature in degree fahrenhite : ",$result;
                    }
                    else
                        echo " please enter a number and select units for conversion ";
                 }
                



?>

            </p>
            </div>
        </div>
    </header>


    
</body>
</html>



