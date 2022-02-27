<?php 
	//include file model
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//su dung file model o day
		use ProductsModel;
		//ham tao
		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function category(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 9;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($category_id,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($category_id,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("ProductsCategoryView.php",["data"=>$data,"numPage"=>$numPage]);
		}		
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);
			//load view, truyen du lieu ra view
			$this->loadView("ProductsDetailView.php",["record"=>$record]);
		}
			//danh gia so sao
		public function rating(){
			// $id = isset($_GET["id"]) ? $_GET["id"] : 0;
			// $star = $_POST['rating'];
			//kiem tra user neu dang nhap thi cho danh gia va nguoc lai
			if(!isset($_SESSION["customer_id"]))
				header("location:index.php?controller=account&action=login");
			else
				$this->modelRating();
			//di chuyen den trang chi tiet san pham
			// header("location:index.php?controller=products&action=detail&id=$id");
		}
	}
 ?>