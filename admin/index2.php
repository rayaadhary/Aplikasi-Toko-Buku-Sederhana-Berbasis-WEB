<html>
    <title>Pengelolaan Data Barang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
<body>
    <div class="w3-bar w3-blue-gray">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-display-topright w3-button w3-cyan">
            <img src="../images/img_avatar4.png" class="w3-circle" alt="Alps" width=20 height=20>
        </button>
    </div>

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>        
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>    
                <img src="../images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
            </div>

            <form class="w3-container" action="index.php" method=post>
                <div class="w3-section">
                    <label><b>Username</b></label><input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" value='admin' name="username" required>
                    <label><b>Password</b></label><input class="w3-input w3-border" type="text" placeholder="Enter Password" name="password" value='12345678' required>
                    <div id="konten">
                    <button class="w3-button w3-block w3-cyan w3-section w3-padding" type="submit">Logout</button>
                    </div>
                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <center>Klik Logout untuk keluar
            </div>
        </div>
    </div>

    <div class="w3-container">
        <a href="index2.php">
        <img src="../images/header.png" width=100% height=30% >
    </div>

    <div class="w3-bar w3-cyan">
        <a href="index2.php?p=home" class="w3-bar-item w3-button">Home</a>
        <a href="index2.php?p=inputbarang" class="w3-bar-item w3-button">Insert</a>
        <a href="index2.php?p=tampilbarang" class="w3-bar-item w3-button">Select</a>
        <a href="index2.php?p=update" class="w3-bar-item w3-button">Update</a>
        <a href="index2.php?p=delete" class="w3-bar-item w3-button">Delete</a>
        <a href="index2.php?p=datapenjualan" class="w3-bar-item w3-button">Penjualan</a>
        <a href="index2.php?p=profil" class="w3-bar-item w3-button">Profil</a>
  
        <div class="w3-dropdown-hover">
            <button class="w3-button">Dropdown</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="index2.php?p=inputbarang" class="w3-bar-item w3-button">Insert</a>
                <a href="index2.php?p=tampilbarang" class="w3-bar-item w3-button">Select</a>
                <a href="index2.php?p=update" class="w3-bar-item w3-button">Update</a>
                <a href="index2.php?p=delete" class="w3-bar-item w3-button">Delete</a>
                <a href="index2.php?p=datapenjualan" class="w3-bar-item w3-button">Penjualan</a>
                <a href="index2.php?p=profil" class="w3-bar-item w3-button">Profil</a>
                <a href="index.php?p=index" class="w3-bar-item w3-button">Logout</a> 
            </div>
        </div>
    </div>

    <div id="konten">
        <?php
        $pages_dir = 'pages';
        if(!empty($_GET['p'])){
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);
        $p = $_GET['p'];
        if(in_array($p.'.html', $pages)){
        include($pages_dir.'/'.$p.'.html');
        } else if(in_array($p.'.php', $pages)){
        include($pages_dir.'/'.$p.'.php');
        } else 
        {
        echo "<center>";
        echo "$pages_dir Halaman tidak ditemukan! :(";
        }
        } else {
        include($pages_dir.'/home.html');
        }
        ?>
    </div>
</body>
</html>