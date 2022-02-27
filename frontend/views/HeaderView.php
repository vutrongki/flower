  <!------------------------- Header --------------------------->
  <header class="header">

    <!-- Top-bar -->
    <div class="top-bar">
      <!-- Header-left -->
      <div class="top-bar-left">
        <ul>
          <li>
            <div class="top-bar-social">
              <ul>
                <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" title=""><i class="far fa-envelope"></i></a></li>
                <li><a href="#" title=""><i class="fas fa-phone-alt"></i></a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="top-bar-contact">
              <ul>
                <li><a href="" title=""><i class="far fa-envelope"></i> HOTRO@MAYFLOWER.VN</a></li>
                <li class="line"></li>
                <li><a href="" title=""><i class="far fa-clock"></i> 07:00 - 20:00</a></li>
                <li class="line"></li>
                <li><a href="" title=""><i class="fas fa-phone-alt"></i> 0385132746</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- /Header-left -->
      <div class="top-bar-space">
        
      </div>
      <!-- Header-right -->
      <div class="top-bar-right">
        <ul>
          <li><a href="" title="">Đăng nhập</a></li>
          <div class="line"></div>
          <li><a href="" title="">Đăng kí</a></li>
          <li><svg style="font-weight: bold;color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="30" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
          </svg></li>
        </ul>
      </div>
      <!-- /Header-right -->
      <div class="top-bar-mobile">
        <h2>Mayflower</h2>
      </div>
    </div>
    <!-- /Top-bar -->


    <!-- logo -->

    <div class="logo">
      <div class="btn-mobile" onclick="showMenuMobile()">
        <i class="fas fa-align-justify"></i>
      </div>

      <!-- menu-mobile -->
      <div class="menu-mobile" id="menu-mobile">
        <ul>
      <?php 
            $categories = $this->modelListCategoriesMobile();
       ?>
       <?php foreach($categories as $rows): ?>          
          <li><a href="#" title=""><?php echo $rows->name; ?></a><button type="button"><i class="fas fa-chevron-down"></i></button></li>
        <?php endforeach; ?>
          <li style="color: rgba(102,102,102,.85);display: flex;"><input style="padding:5px 8px;width:80%;outline: none;boder:0px;" type="text" name="" value="" placeholder="Tìm kiếm "><button style="padding:0px" type="button"><i style="font-size: 17px;padding:10px;background-color: #FE9A2E;color: #fff;" class="fas fa-search"></i></button></li>
        </ul>
      </div>
      <!-- /menu-mobile -->
      
      <div class="img-logo">
        <a href="" title=""><img src="../assets/frontend/images/logo/logo.jpg" alt=""></a>
      </div>
      <h2>ĐIỆN HOA HÀ NỘI - ĐẶT HOA ONLINE - GIAO HOA TẬN NƠI</h2>
      <div class="shadow" id="shadow" onclick="hideMenuMobile()">
        
      </div>
    </div>
    <!-- /logo -->

    <!-- menu -->
          <?php 
              //load MVC bang tay
              include "controllers/CategoriesController.php";
              $obj = new CategoriesController();
              $obj->index();
           ?>
    <!-- /menu -->

  </header>
  <!------------------------- /Header -------------------------->