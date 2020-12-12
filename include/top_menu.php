<header>
  <div class="top-bar">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-auto">
          <ul class="top-bar_social-list">
            <li><a href="index.php"><img src="images/unnamed.png" alt="favicon" height="90px" width="140px"> </a></li>
          </ul>
          
        </div>
        <div class="col-auto timkiem">
        <form action="hienthitim.php" method="GET">
            <input type="text" name="timkiem">
            <button class="bnt " type="submit" name="submit">Tìm</button>
          </form>
        </div>
        
        <div class="col-auto">
          
          <div class="top-bar_links">
            <a href="#">Liên hệ</a> 
            <?php 
             if(isset($_SESSION['username'])){
               echo "Xin chao". $_SESSION['username'];
             }else{ ?>

              <span><a type="button" data-toggle="modal" data-target="#myModal">Đăng Nhập</a>/<a href="dangki.php">Đăng kí</a></span>
             <?php }
            ?>
              
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <h4 class="modal-title">ĐĂNG NHẬP</h4>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="index.php" method="POST">
                      <table>
                        <tr>
                          <th>
                            <p>Tên tài khoản:</p>
                          </th>
                          <td><input style="height:30px" name="username" type="text"></td>
                        </tr>
                        <tr>
                          <th>
                            <p>Mật khẩu: </p>
                          </th>
                          <td><input style="height:30px" name="pass" type="password"></td>
                        </tr>
                      </table>
                      <button type="submit" name="submit" class="btn btn-success">Đăng nhập</button>
                    </form>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="menu">
      <div class="container ">
        <div class="row justify-content-between ">
          <div class="col-auto">
            <div class="menu-category">
              <span><i class="fas fa-list"></i>Danh mục sản phẩm</span>
              <ul>
                <li><a  href=""><i class="fas fa-gamepad"></i>Game PS4</a></li>
                <li><a href="#"><i class="fas fa-gamepad"></i>Game PS5</a></li>
              </ul>
            </div>
            <ul class="sub-menu col-auto ">
              <li><a href="https://www.facebook.com/QTN.KACA/"><i class="fab fa-facebook-square"></i>Facebook</a></li>
              <li><a href="#"><i class="fab fa-youtube"></i>youtube</a></li>
              <li><a href="#"><i class="fas fa-phone-alt"></i>Mua hàng 1900100</a></li>
            </ul>
          </div>

        </div>
      </div>
    </nav>
</header>