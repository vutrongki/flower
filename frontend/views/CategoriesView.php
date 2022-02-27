
<!-- menu -->
      <?php 
            $categories = $this->modelListCategories();
       ?>
      <div class="menu-primary">
            <ul>
            <?php foreach($categories as $rows): ?>
                  <li>
                        <a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>" title="">
                        <?php echo $rows->name; ?><i class="fas fa-chevron-down"></i></a>
                  </li>
                  <?php endforeach; ?>
                    <li><i style="color: #848484;font-size: 17px;" class="fas fa-search"></i></li>
            </ul>
      </div>
<!-- /menu -->
