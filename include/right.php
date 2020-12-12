<aside class="side-colum">
            <div class="filter">
              <div class="title_filter">
                <p> Bộ lọc</p>
              </div>
              <div class="filter_header">
                <p>Thể loại</p>
              </div>
              <div class="filter_body" >
                <ul>
                <?php
                    $i=1;
                  foreach ($data_loai as $key => $value) {?>
                    <li>
                    <input value="<?php echo $value['maloai'];?>"  type="checkbox" id="c<?php echo $i;?>" name="cc">
                      <label   for="c<?php echo $i;?>"><?php echo $value['tenloai'];?></label>
                      <?php $i++; ?>
                  </li>
                 
                  <?php } ?>
              </ul>
              </div>
            </div>
          </aside>