<html>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
<body>
    <div class="w3-bar w3-cyan">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-display-topright w3-button w3-aqua">
            <img src="../images/img_avatar4.png" class="w3-circle" alt="Alps" width=30 height=30>
        </button>
    </div>

    <div class="w3-container">
      <img src="../images/header.png"  width=100% height=30%>
    </div>

    <div class="w3-bar w3-aqua">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-aqua">Login</button>
        <a href="../index.php" class="w3-bar-item w3-button">Kembali ke Toko</a>
    </div>

    <div class="w3-container w3-center w3-animate-left">
         <img src="../images/body.jpg"  width=100%>
    </div>
     
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>        
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>    
                <img src="../images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
            </div>

            <form class="w3-container" action="index2.php" method=post>
                <div class="w3-section">
                    <label><b>Username</b></label><input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" value='admin' name="username" required>
                    <label><b>Password</b></label><input class="w3-input w3-border" type="text" placeholder="Enter Password" name="password" value='12345678' required>
                    <div id="konten">
                    <button class="w3-button w3-block w3-aqua w3-section w3-padding" type="submit">Login</button>
                    </div>
                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <center>Masukan Username dan Password Anda
            </div>
        </div>
    </div>
</body>
</html>