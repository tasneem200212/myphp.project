<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Question 1 -->
    <!-- <form action="super_variables.php" method="POST">
        email: <input type="email" name="email">
        password: <input type="password" name="password">
        <input type="submit">
    </form> -->

    <!-- *************************************************************** -->

    <!-- Question 2 -->

    <!-- <form action="super_variables.php" method="Get">
        URL: <input type="url" name="url" placeholder="https://example.com">
        <input type="submit" value="GO">
    </form> -->

    <!-- Question 3 -->

    <!-- <div class="container">
        <form action="super_variables.php" method="GET" class="form mt-3">
            number 1: <input type="number" name="number1" class="form-control mb-3">
            number 2: <input type="number" name="number2" class="form-control">
            operater: <input type="text" name="operater" class="form-control">

            <input type="submit" class="btn btn-primary mt-3">
        </form>
    </div> -->

        <!-- Question 4 -->

    <!-- <div class="container">
<form action="super_variables.php" method="GET" class="form mt-3">
<input type="text" size="50" placeholder="Task name" name="task_name" class="form-control mb-3"> 
<input type="submit" value="Add Task" class="btn btn-primary mt-3" >
    </form>
    <h2>The list of tasks</h2>
    <ul>
<?php 
/*session_start();
if(!isset($_SESSION['todo_list'])){
    $_SESSION['todo_list']=[];
}
if (isset($_GET["task_name"])) {
 $_SESSION['todo_list'][]=htmlspecialchars($_GET["task_name"]);
}
else {
    echo "";
}

foreach($_SESSION['todo_list'] as $value){
echo "<li>". htmlspecialchars($value) ."</li>";
}*/

?>
    </ul>
    </div> -->



    <?php
    // 1.create a form and send email and password , in the action page you will determine if the data is sent by get or post

    /*
    if (isset($_GET["email"])) {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            echo    $_GET["email"];
        }
    } elseif (isset($_POST["email"])) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            echo $_POST["email"];
        }
    } else {
        echo "please enter your info";
    }
        */

    /*2. make asearch engine website that contain URL as input text and button named (GO) if you click on Go
    will redirect you to the written URL */

    /*
    if (isset($_GET["url"])) {
        $url = $_GET["url"];
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            header("Location:$url");
            exit;
        } else {
            echo "please enter correct url";
        }
    }
     else {
        echo "";
    }
*/

    // 2. make aCalculator that contain Basic Mathematical operations(+,-,*,/)

    /*
    if (isset($_GET["number1"]) && isset($_GET["number2"]) && isset($_GET["operater"])) {
        $num1 = $_GET["number1"];
        $num2 = $_GET["number2"];
        $op = $_GET["operater"];

        $op = trim($op);
            if ($op == "+") {
               echo   $num1 + $num2;
            } elseif ($op == "-") {
                echo  $num1 - $num2;
            } elseif ($op == "*") {
                echo  $num1 * $num2;
            } elseif ($op == "/") {
                echo  $num1 / $num2;
            }
        
    
        else{
            echo "<p style='color:red'> Invalid operator!</p>";
        }
        }
     else {
        echo "";
    }
        */


        // 3. Create a To Do List Page.
        /* */
        // session_start();
        // if(!isset($_SESSION['todo_list'])){
        //     $_SESSION['todo_list']=[];
        // }
        // if (isset($_GET["task_name"])) {
        //  $_SESSION['todo_list'][]=htmlspecialchars($_GET["task_name"]);
        // }
        // else {
        //     echo "";
        // }


        // 4. determine the project name, and script name 

        /*
$page=$_SERVER['SCRIPT_NAME'];
echo $page . "<br>";

echo basename($page)
*/

// 5. Determine page requested time.

/*
$reqest=$_SERVER['REQUEST_TIME'];
echo "The page was requested at: ". date("Y-m-d H:i:s",$reqest);
*/


// 6. make a website counter on refresh ?
/*
session_start();

if(!isset ($_SESSION['count'])){
$_SESSION['count']=0;}
echo $_SESSION['count']++;
*/

// 7. Number of visitors ?

/*
session_start();
if(isset($_SESSION['view']))
    $_SESSION['view']=$_SESSION['view']+1;
    else
     $_SESSION['view']=1;
    
     echo"views = ". $_SESSION['view'];
*/

   /* 8. Creating Cookies include cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure],
 [httponly] . Then Retrieve all cookies value after that delete the cookies . */
/*
 setcookie("name","Tasneem",time() - 86400 ,"/","example.com",true,true);
 if(isset($_COOKIE["name"])){
    echo "is found" . "<br>";
    echo $_COOKIE["name"]. "<br>";
}
else{
    echo "isn't found";   
}*/

/*
setcookie("user","Tasneem",time()- 3600 ,"/","",true,true);
if(isset($_COOKIE["user"])){
    echo "is found" . "<br>";
    echo $_COOKIE["user"]. "<br>";
}
else{
    echo "isn't found";   
}
    */




















   
    ?>
</body>

</html>