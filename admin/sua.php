<?php
    include ("include/connect.php");
    include ("include/header.php");
    $magame = $_GET['magame'];
    $sql="select * from game INNER JOIN nhasx
    ON game.mansx = nhasx.mansx where magame='$magame' ";
    $tam = $pdo->query($sql);
    $data = $tam->fetchAll();
    $sql_theloai="select * from loai";
$tam_theloai = $pdo->query($sql_theloai);
$data_theloai = $tam_theloai->fetchAll();
//Select bản nhà sản xuất
$sql_nsx= "select * from nhasx";
$tam_nsx = $pdo->query($sql_nsx);
$data_nsx = $tam_nsx->fetchAll();
    //var_dump($data);
?>


<link rel="stylesheet" href="style/sua.css">
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
                                <img src="../images/PS4/games/<?php echo $values['hinh']; ?>" alt="" srcset="">
                            </div>
                    </div>
                </div>
                <aside class="side-colum">
                <form action="suagame.php" method="POST" enctype="multipart/form-data">
                                          <table>
                                            <tr>
                                              <th>Mã game</th>
                                              <td><input name="magame" type="text" value="<?php echo $values['magame']; ?>" readonly></td>
                                            </tr>
                                            <tr>
                                              <th>Tên game</th>
                                              <td><input name="tengame" type="text" value="<?php echo $values['tengame']; ?>"></td>
                                            </tr>
                                            <tr>
                                              <th>Mô tả</th>
                                              <td><input name="mota" type="text"value="<?php echo $values['mota']; ?>"></td>
                                            </tr>
                                            <tr>
                                              <th>Giá</th>
                                              <td><input name="gia" type="text"value="<?php echo $values['gia']; ?>"></td>
                                            </tr>
                                            <tr>
                                              <th>Hình</th>
                                              <td><input name="hinh" type="file" "><?php echo $values['hinh']; ?></td>
                                            </tr>
                                            <tr>
                                              <th>Thể loại </th>
                                              <td><select name=maloai>
                                            <option value="">---Chọn thể loại---</option>
		                                        <?php 
		                                          foreach ($data_theloai as $key => $value) {
			                                          ?><option value='<?php echo $value['maloai'] ?>'>
				                                            <?php echo $value['tenloai'] ?>
			                                            </option>
			                                          <?php }?>
                                            </select></td>
                                            </tr>
                                            <tr>
                                              <th>Nhà sản xuất</th>
                                              <td><select name=mansx>
                                            <option value="">---Chọn nhà sản xuất---</option>
		                                        <?php 
		                                          foreach ($data_nsx as $key => $value) {
			                                          ?><option value='<?php echo $value['mansx'] ?>'>
				                                            <?php echo $value['tennsx'] ?>
			                                            </option>
			                                          <?php }?>
                                            </select></td>
                                            </tr>
                                            <tr>
                                                <th>Hệ máy</th>
                                                <td><input value="ps4"  type="radio" id="ps4" name="hemay"><label   for="ps4">Playstation 4</label>
                                                <input value="ps5"  type="radio" id="ps5" name="hemay"><label   for="ps5">Playstation 5</label>
                                              </td>
                                                
                                            </tr>
                                          </table>
                                          <br>
                                          <button class="btn btn-success" type="submit" name="submit">Sửa</button>
                                          
                                        </form>
                                        <a href="xoa.php?magame=<?php echo $values['magame']; ?>" class="btn btn-danger">Xoá</a>
                
                                       
                </aside>
                <?php }?>
            </div>
        </div>








<?php
   include("include/bottom.php")
?>
