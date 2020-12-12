<header >
        <div class="top-bar"  >
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-auto">
                <ul class="top-bar_social-list">
                  <li><a href="http://localhost/DoAn_TH-TLWeb/index.php"><img src="../images/unnamed.png" alt="favicon" height="90px" width="140px"> </a></li>
                </ul>
              </div>
              <div class="col-auto">
                <div class="top-bar_links">
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
                            <li><a href="#"><i class="fas fa-gamepad"></i>Game PS4</a></li>
                            <li><a href="#"><i class="fas fa-gamepad"></i>Game PS5</a></li>
                          </ul>
                        </div>
                          <ul class="sub-menu col-auto ">
                            <li><a href="https://www.facebook.com/QTN.KACA/"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i>youtube</a></li>
                            <li>
                              <a type="button"data-toggle="modal"data-target="#exampleModal">
                                Thêm sản phẩm
                              </a>
                                  <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        <form action="addgame.php" method="POST" enctype="multipart/form-data">
                                          <table>
                                            <tr>
                                              <th>Mã game</th>
                                              <td><input name="magame" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th>Tên game</th>
                                              <td><input name="tengame" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th>Mô tả</th>
                                              <td><input name="mota" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th>Giá</th>
                                              <td><input name="gia" type="text"></td>
                                            </tr>
                                            <tr>
                                              <th>Hình</th>
                                              <td><input name="hinh" type="file"></td>
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
                                          <button class="btn btn-success" type="submit" name="submit">Thêm Game</button>
                                        </form>
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                            </li>
                          </ul>
                      </div>
                      <div class="col-auto">
                      </div>
                    </div>
              </div>
            </nav>
      </header>