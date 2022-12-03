<html>
    <head>
        <title>

        </title>
    </head>
    <body style="display:flex; justify-content: center; align-items: center; border: 1px solid white; background-color: #23BFAA;">
  
       <div style="display:flex; grid-gap:50px; background-color: #3D3C3E; border-radius: 15px; height: 250px; width: 600px; justify-content: center; align-items: center; padding:20px;">
       <div style="margin-top: -10px;"><h1 style="color: #27C4B6;">PHP<br>Calculator </h1> </div>
    
  
            <form method="POST">
            <input  style="color: #27C4B6; border: 1px solid #27C4B6 ;text-align:center; height: 30px;" placeholder="Enter Number" type="text" name="number1" >
            <br>
            <br>
            <input  style="color: #27C4B6;height: 30px; text-align:center; border: 1px solid #27C4B6; " placeholder="Enter Number" type="text" name="number2" >
            <br>
            <select style="margin-left: 65px; margin-top: 10px; color: #3D3C3E;" name="operation" id="operation">
                    <option value="add">ADD</option>
                    <option value="sub">SUB</option>
                    <option value="mul">MUL</option>
                    <option value="div">DIV</option>
            </select>
            <br>
            <button style="margin-top:15px;  width:170px;background-color:#23BFAA;color:white; border:none; border-radius: 4px; padding:5px;" name="submit" >SUBMIT</button>


          
            </form>

            <div>
                <h1 style="text-align: center; color:white;">Result</h1>
 <p style="text-align:center; margin-top:20px; color: white; font-size:larger; background-color: #23BFAA; border-radius: 5px; padding: 10px;">
                <?php
                if(isset($_POST['submit'])){
                    $num1 = $_POST['number1'];
                    $num2 = $_POST['number2'];
                    // echo $num1 . $num2;
                    $operation = $_POST['operation'];

                    switch($operation){
                        case "add":
                            $sum = $num1 + $num2;
                            echo "The addition of two number is {$sum}";
                            break;
                        case "sub":
                            $sub = $num1 - $num2;
                            echo "The submission of two number is {$sub}";
                            break;

                        case "mul":
                            $mul = $num1 * $num2;
                            echo "The Multiple of two number is {$mul}";
                            break;
                            
                        case "div":
                            $div = $num1  / $num2;
                            echo "The division of two number is {$div}";
                            break;

                        default:
                            echo "Sorry it's not exist";

                    }
                }
                
                ?>
            </p>
 </div>
      
       </div>

    </body>
</html>