<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="daftarmasukuser.css">
    <script src="script.js"></script>
    <title>Login</title>
</head>
<center>
<body>
    
    <!-- <img></img> -->

    <div class="box">
        <!-- image -->
        <!-- <div class="image"> -->
            <div class="admin">
                <img id="img1" src="user image/admin.png">
                <p id="admin">Admin</p>
            </div>
        <div class="juruteknik">
            <img id="img2" src="user image/juruteknik.png">
            <p>Juruteknik</p>
        </div>
        <!-- </div> -->
        <!-- image -->

        <!-- input type -->
        <div class="text">
            <p>Please fill out form below to get started</p>
        </div>
        <div class="input">
            <input type="email" placeholder="ZafranIlyas@gmail.com" onclick="input()" id="input">
            <br>
            <input type="password" placeholder="Zafran@Ilyas$1SE" onclick="input2()" id="input2"> 
        </div>
        <!-- input type -->
        <button>Login</button>
    </div>


</body>
</center>
</html>