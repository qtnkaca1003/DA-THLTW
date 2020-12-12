<?php
    include ("include/connect.php");
    include ("include/header.php");
    $magame = $_GET['magame'];
    $sql="select * from game INNER JOIN nhasx
    ON game.mansx = nhasx.mansx where magame='$magame' ";
    $tam = $pdo->query($sql);
    $data = $tam->fetchAll();
    //var_dump($data);
    
?>
<link rel="stylesheet" href="style/product.css">
<link rel="stylesheet" href="style/top_menu.css">
</head>
<body>
    <?php
        include ("include/top_menu.php")
    ?>
        <hr>
        <div class="container">
        <div class="title">
                        <h2>Game Ps4</h2>
                    </div>
            <div class="row">
                <?php foreach( $data as $key =>$values){ ?>
                <div class="content"">
                    
                        <div class="row">
                            <div class="card">
                                <img src="images/PS4/games/<?php echo $values['hinh']; ?>" alt="" srcset="">
                            </div>
                    </div>
                </div>
                <aside class="side-colum">
                    <div class="title">
                        <p class="game_name">
                        <?php echo $values['tengame']; ?>
                        </p>
                        <ul class="info">
                            <li>Nhà sản xuất: <?php echo $values['tennsx']; ?></li>
                        </ul>
                        
                    </div>
                    <div class="video">
                        <h5>Mô tả</h5>
                        <iframe width="560" height="315" src="<?php echo $values['mota']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <video src="<?php echo $values['mota']; ?>" autoplay></video>
                    
                    </div>
                    <div class="buy">
                        <button class="btn_buy ">Mua ngay</button><br>
                        <button class="add_cart">Thêm vào giỏ hàng</button>
                    </div>
                    

                </aside>
                <?php }?>
            </div>
        </div>








<?php
   include("include/bottom.php")
?>
