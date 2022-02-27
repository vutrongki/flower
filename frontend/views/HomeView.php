<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
  <!-- ----------------------- Section ------------------------ -->
  <section class="section">

    <!-- ------------------- Slider ------------------ -->
    <div class="owl-carousel owl-theme slider-banner" id="myCarousel">
      <div class="item"><img src="../assets/frontend/OwlCarousel/images/web2.jpg" alt=""></div>
      <div class="item"><img src="../assets/frontend/OwlCarousel/images/web3.jpg" alt=""></div>
      <div class="item"><img src="../assets/frontend/OwlCarousel/images/web4.jpg" alt=""></div>
    </div>
    <!-- ------------------- /Slider ------------------ -->

    <!-- --------------------Products ----------------- -->
    <div class="container main">
      <!-- ----Mẫu hoa mới nhất -->
      <?php $newProducts = $this->modelNewProducts(); ?>
      <div>
        <div class="row title">
          <div class="line"></div><i class="fas fa-heart"></i><h4>MẪU HOA MỚI NHẤT</h4><div class="line"></div>
        </div>
        <div class="products">
         <?php foreach($newProducts as $rowsNewProducts):  ?>
          <div class="product-item">
            <div class="img">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rowsNewProducts->id; ?>"><img src="../assets/upload/products/<?php echo $rowsNewProducts->photo; ?>" alt=""></a>
              <div class="view"><a href="#" title="">QUICK VIEW</a></div>
            </div>
          <a style="text-decoration: none;color: #333;" href="index.php?controller=products&action=detail&id=<?php echo $rowsNewProducts->id; ?>">
              <h7>
              <?php echo $rowsNewProducts->name; ?></h7></a>
            <p><?php echo number_format($rowsNewProducts->price).'₫'; ?></p>
          </div>
<?php endforeach; ?>
        </div>
      </div>
      <!-- ---- /Mẫu hoa mới nhất -->  

      <!-- -----------------Slider-product --------------------- -->

      <?php $hotProducts = $this->modelHotProducts(); ?>
      <div>
        <div class="row title">
          <div class="line"></div><i class="fas fa-gift"></i><h4>MẪU HOA HOT TRONG THÁNG</h4><div class="line"></div>
        </div>

        <div class="owl-carousel owl-theme slider-products" id="slider-products">
          <?php foreach($hotProducts as $rowsHotProducts ): ?>
          <div class="item">
            <div class="slider-img">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rowsHotProducts->id; ?>"><img src="../assets/upload/products/<?php echo $rowsHotProducts->photo; ?>" alt=""></a>
              <div class="slider-view"><a href="#" title="">QUICK VIEW</a></div>
            </div>            
          <a style="text-decoration: none;color: #333;" href="index.php?controller=products&action=detail&id=<?php echo $rowsNewProducts->id; ?>">
              <h7>
              <?php echo $rowsHotProducts->name; ?></h7></a>
            <p><?php echo number_format($rowsHotProducts->price);?>₫</p>         
          </div>
          <?php endforeach; ?>                             
        </div>        
      </div>

      <!-- ------------/Slider-products -->
      <!-- ----Mẫu hoa sang trong -->
      <div>
        <div class="row title">
          <div class="line"></div><i class="fas fa-heart"></i><h4>MẪU HOA SANG TRỌNG</h4><div class="line"></div>
        </div>
        <div class="products">
          <?php
            $listProducts = $this->modelListProducts();
            foreach($listProducts as $rowsProducts): 
          ?>          
          <div class="product-item">
            <div class="img">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rowsProducts->id; ?>"><img src="../assets/upload/products/<?php echo $rowsProducts->photo; ?>" alt=""></a>
              <div class="view"><a href="#" title="">QUICK VIEW</a></div>
            </div>
          <a style="text-decoration: none;color: #333;" href="index.php?controller=products&action=detail&id=<?php echo $rowsProducts->id; ?>">
              <h7>
              <?php echo $rowsHotProducts->name; ?></h7></a>
            <p><?php echo number_format($rowsProducts->price); ?> ₫</p>
          </div>
        <?php endforeach; ?> 
        </div>
      </div>
      <!-- ---- /Mẫu hoa mới nhất -->       
    </div>
    <!-- --------------------/Products -->

    <!-- ---------------Contact---------------- -->
    <div class="container-fluid contact">
      <h5>DỊCH VỤ ĐIỆN HOA</h5>
      <p>Alo ngay cho chúng tôi để đem đến món quà và sự bất ngờ cho người bạn yêu thương!</p>
      <span><i class="fas fa-phone-alt"></i>0385132746</span>
    </div>
    <!-- ----------------/Contact --------------- -->

    <!-- -----------------Sense-flower--------------------- -->

    <div class="container sense">
      <div class="row sense-title">
        <div class="line"></div><i class="fas fa-disease"></i></i><h4>Ý NGHĨA CÁC LOÀI HOA</h4><div class="line"></div>
      </div>

      <div class="owl-carousel owl-theme sense-slider" id="sense">
        <?php $hotNews = $this->modelHotNews();
          foreach($hotNews as $rowsHotNews):  ?>        
        <div class="item">
          <div class="sense-img">
            <img src="../assets/upload/news/<?php echo $rowsHotNews->photo; ?>" alt="">
          </div>            
          <h5><?php echo $rowsHotNews->name; ?></h5>
          <?php $text = $rowsHotNews->description; ?>
          <a href="" title=""><?php   if (str_word_count($text,0) > 10) {
                  $words = str_word_count($text, 2);
                  $pos   = array_keys($words);
                  echo $text  = substr($text, 0, $pos[23]) . '[...]';} ?> </a>          
        </div>  
  <?php endforeach; ?>                             
      </div>        
    </div>


    <!-- ------------/Sense-flower -->    

    <!-- --------------------- Service ---------------- -->

    <div class="container mt-5 service">
      <h2>DỊCH VỤ MAY FLOWER</h2>
      <div class="list-service">
        <div class="item-service">
          <div><i class="far fa-star"></i></div>
          <h4>LÀM HOA TƯƠI HÀ NỘI</h4>
          <p>Dịch vụ điện hoa chuyên nghiệp tại Hà Nội – Chuyên cung cấp hoa tươi khu vực Hà Nội – Đảm bảo hoa tươi lâu, Nhanh chóng, Đúng hẹn, miễn phí Thiệp đi kèm hoa</p>
        </div>
        <div class="item-service">
          <div><i class="fas fa-cog"></i></div>
          <h4>GIAO HOA TẬN NHÀ</h4>
          <p>Giao hoa nhanh chóng, đúng hẹn và độc đáo. Nhân viên giao hoa nhiệt tình chu đáo, giữ hoa luôn xinh đẹp và tươi tắn tới tay người nhận</p>
        </div>    
        <div class="item-service">
          <div><i class="fas fa-american-sign-language-interpreting"></i></div>
          <h4>ĐIỆN HOA HÀ NỘI</h4>
          <p>May Flower chuyên cung cấp dịch vụ điện hoa, điện hoa hà nội, hoa sinh nhật, hoa khai trương… giúp bạn trao gửi yêu thương cho người thân yêu!</p>
        </div>  
        <div class="list-service">
          <div class="item-service">
            <div><i class="fas fa-award"></i></div>
            <h4>LÀM HOA TƯƠI HÀ NỘI</h4>
            <p>Dịch vụ điện hoa chuyên nghiệp tại Hà Nội – Chuyên cung cấp hoa tươi khu vực Hà Nội – Đảm bảo hoa tươi lâu, Nhanh chóng, Đúng hẹn, miễn phí Thiệp đi kèm hoa</p>
          </div>
          <div class="item-service">
            <div><i class="fas fa-atom"></i></div>
            <h4>GIAO HOA TẬN NHÀ</h4>
            <p>Giao hoa nhanh chóng, đúng hẹn và độc đáo. Nhân viên giao hoa nhiệt tình chu đáo, giữ hoa luôn xinh đẹp và tươi tắn tới tay người nhận</p>
          </div>    
          <div class="item-service">
            <div><i class="fas fa-bezier-curve"></i></div>
            <h4>ĐIỆN HOA HÀ NỘI</h4>
            <p>May Flower chuyên cung cấp dịch vụ điện hoa, điện hoa hà nội, hoa sinh nhật, hoa khai trương… giúp bạn trao gửi yêu thương cho người thân yêu!</p>
          </div>                  
        </div>
      </div>
    </div>
    <!-- --------------------- /Service ---------------- -->

    <!-- ------------------ Question -------------------- -->
    <div class="question container">
      <h4>Câu hỏi thường gặp</h4>
      <div id="boder">
        <div class="question-title click1">
          <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-chevron-compact-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
          </svg>
          <h5>MayFlower cung cấp sản phẩm gì?</h5>
        </div>
        <p id="question1">Chúng tôi là website bán hoa Online uy tín hàng đầu tại Hà Nội. Chúng tôi cung cấp các dịch vụ liên quan đến điện hoa, tặng hoa khai trương cửa hàng, sinh nhật, các dịp lễ tết cùng nhiều dịch vụ khác có liên quan</p>
      </div>
      <div id="boder">
        <div class="question-title click2">
          <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-chevron-compact-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
          </svg>
          <h5>Làm sao để mua được Sản phẩm từ MayFlower.Vn?</h5>
        </div>
        <p id="question2">Quý khách có thể đặt hàng trực tiếp trên website hoặc gọi điện tới hotline 0904375699 để được hỗ trợ. Ngoài ra khách hàng có thể thể đặt hàng trực tiếp tại shop: 234 Hoàng Quốc Việt, Hà Nội</p>
      </div>
      <div id="boder">
        <div class="question-title click3">
          <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-chevron-compact-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
          </svg>
          <h5>Sản phẩm của MayFlower có đảm bảo chất lượng và đúng mẫu không?</h5>
        </div>
        <p id="question3">MayFlower cam kết phục vụ các sản phẩm, dịch vụ tốt nhất đến quý khách. Bạn cứ yên tâm nhé!</p>
      </div>
    </div>      
    <!-- ------------------ /Question -------------------- -->
  </section>
  <!-- ----------------------- /Section ----------------------- -->