<?php
include("config.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.freepik.com/premium-vector/chat-app-logo-design-vector_18099-2968.jpg?w=2000" type="image/jpg" sizes="13x13">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    <script>
        function chat(){
            var request = new XMLHttpRequest();
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    document.getElementById('chat').innerHTML = request.responseText;
                }
            }
        request.open('GET','chat.php',true);
        request.send();
        }
        setInterval(function(){chat()},1000);
    </script>
</head>
<body onload="chat();">
<div class="main-chat">

    <div class="app-chat">
    <div id="chat"></div>
    </div>
            <form  method="post">
                <input type="text" name="name" id="on" required placeholder="Enter Your Name...">
                <textarea name="mag" id="" required placeholder="Entr Your Messga..."></textarea>
                <input type="submit" name="submit" value="Send" id="">
            </form>
            <?php
            if(isset($_POST['submit'])){
                $n = $_POST['name'];
                $m = $_POST['mag'];
            $inser = "INSERT INTO appchat(name,mag) VALUE('$n','$m')";
            $sql = mysqli_query($con,$inser);
            if($sql){
                echo '<embed loop="true" hidden="true" src="sond.mp3" autoplay="true">';
            }
            // header('location:index.php');

        }
        ?>
</div>




<script>

const on = document.getElementById('on');
const onlines = document.getElementById('of');


if (navigator.onLine){
    on.textContent = 'online';
    on.style.color = 'green';
}else{
    on.textContent = 'offline';
    on.style.color = 'red';
}



if (navigator.onLine){
    onlines.textContent = 'online';
    onlines.style.color = 'green';
}else{
    onlines.textContent = 'offline';
    onlines.style.color = 'red';
}


</script>




</body>
</html>
