<html>
    <title>Toko Buku Online Ubermensch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <body>
        <div id="header">
            <img src="./images/header.png"  width=100% height=30%></div>
            <div id="konten">
                <?php
                $pages_dir = 'pages';
                if(!empty($_GET['p'])){
                    $pages = scandir($pages_dir, 0);
                    unset($pages[0], $pages[1]);
                    $p = $_GET['p'];
                    if(in_array($p.'.html', $pages)){
                            include($pages_dir.'/'.$p.'.html');
                        } else 
            if(in_array($p.'.php', $pages)){
                            include($pages_dir.'/'.$p.'.php');
                            } else 
                            {
                                echo "$pages_dir Halaman tidak ditemukan! :(";
                            }
                    } else {
                            include($pages_dir.'/home.html');
                            }
                ?>
            </div>
    </body>
</html>