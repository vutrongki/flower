<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category</title>
  <link rel="stylesheet" href="../assets/frontend/css/category.css">
  <link rel="stylesheet" type="text/css" href="../assets/frontend/fontawesome/css/all.css">
  <link rel="stylesheet" href="../assets/frontend/OwlCarousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/frontend/../assets/frontend/OwlCarousel/css/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/frontend/css/bootstrap.min.css">  
</head>
<body>
  <!------------------------- Header --------------------------->
<?php include "views/HeaderView.php"; ?>
  <!------------------------- /Header ----------------------- --> 

  <!-- ---------------------- Content ----------------------- -->
  <div class="section container">
    <!-- section-bar -->
    <div class="section-bar">
      <ul>
        <li class="section-bar-left">
          <a href="index.html" title="">Trang Chủ</a>
          <span> >> </span>
          <p>Kệ Hoa 2 Tầng</p>
        </li>
        <li class="showFilterProduct">
          <button type="button" style="background-color:#fff;border: 0px;" data-toggle="modal" data-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
            </svg>
            <span>LỌC</span>  
          </button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Vui lòng nhập giá</h4>
                </div>
                <div class="modal-body">
                  <ul style="border:0px;display: flex;flex-wrap: wrap;text-align: center">
                    <li style="border:0px;padding:10px 5px;width: 120px;margin:0 auto">
                      <input style="color: #555;" min="0" id="fromPrice" placeholder="₫ TỪ" class="form-control" />
                    </li>
                    <li style="border:0px;padding:10px 5px;width: 120px;margin:0 auto">
                      <input style="color: #555;" type="number" min="0" id="toPrice" placeholder="₫ ĐẾN" class="form-control" />
                    </li>
                    <li style="border:0px; text-align:center;display: block;margin-top: 20px;">
                      <input style="background-color: #446084;border: 0px;padding: 12px 30px;color: #fff;" type="button" value="Áp dụng" onclick="location.href = 'index.php?controller=search&action=productPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                    </li>
                  </ul>         
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

        </li>
        <li class="section-bar-right">
          <select>
            <option>Mới nhất</option>
            <option>Thứ tự theo mức giá phổ biến</option>
            <option>Thứ tự theo điểm đánh giá</option>
            <option>Thứ tự theo giá từ thấp đến cao</option>
            <option>Thứ tự theo giá từ cao đến thấp</option>
          </select>
        </li>
      </ul>
    </div>
    <!-- /section-bar -->

    <!-- ---------------------main ----------------- -->
    <div class="main">

      <!-- -------sidebar ---------- -->
      <div class="main-sidebar">
        <h4>DANH MỤC SẢN PHẨM</h4>
        <div class="line"></div>    
        <div>
          <ul>
            <li><a href="" title="">Hoa bó</a></li>
            <li><a href="" title="">Hoa cưới</a></li>
            <li><a href="" title="">Hoa để bàn</a></li>
            <li><a href="" title="">Hoa giỏ</a></li>
            <li><a href="" title="">Hoa tổng hợp</a></li>
            <li><a href="" title="">Kệ hoa 2 tầng</a></li>
            <li><a href="" title="">Kệ tranh</a></li>
            <li><a href="" title="">Lẵng hoa 2 tầng</a></li>
            <li><a href="" title="">Lọ hoa</a></li>
            <li><a href="" title="">Mẫu giáng sinh</a></li>
            <li><a href="" title="">Túi hoa tươi</a></li>
          </ul>
        </div>  
        <h4 style="margin-top: 30px;">LỌC THEO GIÁ</h4>
        <div class="line" style="margin-bottom: 20px;"></div>
        <div class="filterPrice">
          <ul style="border:0px;display: flex;flex-wrap: wrap;">
            <li style="border:0px;padding:10px 5px;width: 120px;">
              <input style="color: #555;" min="0" id="fromPrice" placeholder="₫ TỪ" class="form-control" />
            </li>
            <li style="border:0px;padding:10px 5px;width: 120px;">
              <input style="color: #555;" type="number" min="0" id="toPrice" placeholder="₫ ĐẾN" class="form-control" />
            </li>
            <li style="border:0px; text-align:center;display: block;margin-top: 20px;">
              <input style="background-color: #446084;border: 0px;padding: 12px 30px;color: #fff;" type="button" value="Áp dụng" onclick="location.href = 'index.php?controller=search&action=productPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
            </li>
          </ul>       
        </div>            
      </div>
      <!-- --------/sidebar------------ -->
      <!-- ------------list------------ -->
      <div class="main-primary">
        <div class="main-list">
          <div class="product-item">
            <div class="img">
              <img src="images/products/1.jpg" alt="">
              <div class="view"><a href="#" title="">QUICK VIEW</a></div>
            </div>
            <h7>Xuân yêu thương</h7>
            <p>350,000₫</p>
          </div>
          <div class="product-item">
            <div class="img">
              <img src="images/products/2.jpg" alt="">
              <div class="view"><a href="#" title="">QUICK VIEW</a></div>
            </div>            
            <h7>Bó Hoa Beatrice</h7>
            <p>350,000₫</p>
          </div>
          <div class="product-item">
            <div class="img">
              <img src="images/products/3.jpg" alt="">
              <div class="view"><a href="#" title="">QUICK VIEW</a></div>
            </div>
            <h7>Send my love</h7>
            <p>350,000₫</p>
          </div>
          <div class="product-item">
            <div class="img">
              <img src="images/products/4.jpg" alt="">
              <div class="view"><a href="#" title="">QUICK VIEW</a></div>
            </div>            
            <h7>Bó hoa juliet lộng lẫy</h7>
            <p>350,000₫</p>
          </div>
          <div class="product-item">
            <div class="img">
              <img src="images/products/5.jpg" alt="">
              <div class="view"><a href="#" title="">QUICK VIEW</a></div>
            </div>            
            <h7>Chinh phục tình yêu</h7>
            <p>350,000₫</p>
          </div>        
        </div>  
        <div style=""  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
          <ul class="pagination" style="margin-left:25px;">
            <li class="page-item"><a style="font-size: 17px;margin-left: 5px;" class="page-link" href="">1</a></li>
            <li class="page-item"><a style="font-size: 17px;margin-left: 5px;" class="page-link" href="">2</a></li>           
          </ul>
        </div>            
      </div>      
      <!-- ------------/list ----------- -->
    </div>
    <!-- ---------------------/main ---------------- -->
  </div>
  <!-- ---------------------- /Section ----------------------- -->

  <!-- -------------------------- Footer ----------------------- -->
  <div class="footer">
    <ul class="container">
      <li>
        <h4>GIỚI THIỆU</h4>
        <img src="images/logo/footer.jpg" alt="">
        <h5>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ HOA MAY FLOWER</h5>
        <p>Giấy chứng nhận <span>Đăng ký Kinh doanh số 0107400579 </span>Đăng ký & quản lý bởi Chi cục Thuế Quận Hai Bà Trưng</p>
        <h5>LIÊN HỆ</h5>
        <p>Địa chỉ: <span>Tòa A, chung cư T608 - Khu đô thị Nam Cường, ngõ 234 Hoàng Quốc Việt, Hà Nội</span></p>
        <p>Điện thoại : <span> 0904375699</span></p>
        <p>Email:<span>hotro@mayflower.vn</span></p>
      </li>
      <li>
        <h4>CHỦ ĐỀ NỔI BẬT</h4>
        <div class="line-footer">

        </div>
        <div class="topic">
          <a href="" title="">bó hoa hồng</a>
          <a href="" title="">bó hoa hồng đẹp</a>
          <a href="" title="">bó hoa tươi đẹp nhất</a>
          <a href="" title="">các giỏ hoa tươi</a>
          <a href="" title="">giỏ hoa 8/3 đẹp</a>
          <a href="" title="">hoa bó đẹp</a>
          <a href="" title="">hoa hồng</a>
          <a href="" title="">hoa tặng sinh nhật</a>
          <a href="" title="">tặng hoa ngày nhà giáo việt nam</a>
          <a href="" title="">hoa valentine</a>
          <a href="" title="">hoa tươi</a>
          <a href="" title="">hoa khai trương đẹp nhất</a>
          <a href="" title="">hoa tươi đẹp</a>
          <a href="" title="">mẫu hoa tươi đẹp</a>
          <a href="" title="">đặt hoa valentine 14/2</a>
          <a href="" title="">đặt sinh nhật</a>
          <a href="" title="">hoa tặng thầy cô</a>
          <a href="" title="">hoa tặng mẹ</a>
          <a href="" title="">đặt hồng tím</a>
          <a href="" title="">giỏ hoa 8/3 đẹp</a>
          <a href="" title="">hoa khai trương đẹp nhất</a>
          <a href="" title="">bó hoa hồng đẹp</a>
          <a href="" title="">hoa tươi</a>
          <a href="" title="">bó hoa tươi đẹp nhất</a>
          <a href="" title="">bó hoa tươi đẹp nhất</a>
        </div>
      </li>
      <li>
        <h4>TÌM KIẾM NHIỀU</h4>
        <div class="line-footer">

        </div>
        <div class="topic">
          <a href="" title="">bó hoa hồng</a>
          <a href="" title="">bó hoa hồng đẹp</a>
          <a href="" title="">bó hoa tươi đẹp nhất</a>
          <a href="" title="">các giỏ hoa tươi</a>
          <a href="" title="">giỏ hoa 8/3 đẹp</a>
          <a href="" title="">hoa bó đẹp</a>
          <a href="" title="">hoa hồng</a>
          <a href="" title="">hoa tặng sinh nhật</a>
          <a href="" title="">tặng hoa ngày nhà giáo việt nam</a>
          <a href="" title="">hoa valentine</a>
          <a href="" title="">hoa tươi</a>
          <a href="" title="">hoa khai trương đẹp nhất</a>
          <a href="" title="">hoa tươi đẹp</a>
          <a href="" title="">mẫu hoa tươi đẹp</a>
          <a href="" title="">đặt hoa valentine 14/2</a>
          <a href="" title="">đặt sinh nhật</a>
          <a href="" title="">hoa tặng thầy cô</a>
          <a href="" title="">hoa tặng mẹ</a>
          <a href="" title="">đặt hồng tím</a>
          <a href="" title="">giỏ hoa 8/3 đẹp</a>
          <a href="" title="">hoa khai trương đẹp nhất</a>
          <a href="" title="">bó hoa hồng đẹp</a>
          <a href="" title="">hoa tươi</a>
          <a href="" title="">bó hoa tươi đẹp nhất</a>
          <a href="" title="">hoa tặng sinh nhật</a>
          <a href="" title="">bó hoa tươi đẹp</a>
          <a href="" title="">bó hoa tươi đẹp nhất</a>
          <a href="" title="">các giỏ hoa tươi</a>
        </div>
      </li>
    </ul>
  </div>
  <!-- -------------------------- /Footer ----------------------- -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../assets/frontend/js/bootstrap.min.js"></script>
<script type="text/javascript">
  function showMenuMobile() {
    document.getElementById("menu-mobile").style.transform = 'translateX(0px)';
    document.getElementById("shadow").style.display = 'block';
  }
  function hideMenuMobile() {
    document.getElementById("menu-mobile").style.transform = 'translateX(-100%)';
    document.getElementById("shadow").style.display = 'none';
  }
</script>
</html>