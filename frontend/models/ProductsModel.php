<?php 
	trait ProductsModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead($category_id,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			//---
			//sap xep cac ban ghi theo thu tu
			$orderBy = "order by id desc";
			$order = isset($_GET["order"]) ? $_GET["order"] : "";
			switch($order){
				case "priceAsc":
					$orderBy = " order by price asc ";
					break;
				case "priceDesc":
					$orderBy = " order by price desc ";
					break;
				case "nameAsc":
					$orderBy = "and hot=1 order by name asc ";
					break;
				case "nameDesc":
					$orderBy = " order by name desc ";
					break;
			}
			$query = $conn->query("select * from products where category_id=$category_id $orderBy  limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($category_id,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where category_id=$category_id");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}								
		//lay ten danh muc san pham
		public function modelGetCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id=$category_id");
			$result = $query->fetch();
			return isset($result->name) ? $result->name : "";
		}	
	//lay 6 san pham noi bat
	public function modelHotProducts(){
		$conn = Connection::getInstance();
		$query = $conn->query("select * from products where hot=1 order by id desc limit 0,8");
		return $query->fetchAll();
	}	
	public function modelCategory(){
		$conn = Connection::getInstance();
		$query = $conn->query("select * from categories where parent_id !=0 order by id limit 0,10");
		return $query->fetchAll();
	}	
		//rating
		public function modelRating(){
			//insert ban ghi vao table rating
			$star = $_POST["rating"];
			$comment = $_POST["comment"];
			$id = isset($_GET["id"]) ? $_GET["id"] : 0 ;
			//lay bien ket noi
			$conn = Connection::getInstance();
			$conn->query("insert into rating set star=$star,comment='$comment',product_id=$id");
			header("location:index.php?controller=products&action=detail&id=$id");
		}		
		//lay cac danh gia star
		public function modelGetStar($product_id, $star){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from rating where product_id=$product_id and star=$star");

			//tra ve so luong ban ghi
			return $query->rowCount();
		}
			//tinh tong so sao trung binh tuong ung voi tung san pham
	public function modelTotalRating($product_id){
		$conn = Connection::getInstance();
			//tinh tong cac cot star cua table rating tuong ung voi id truyen vao
		$query1 = $conn->query("select sum(star) as sumStar from rating where product_id=$product_id");
		$result1 = $query1->fetch();
		$sumStar = isset($result1->sumStar) ? $result1->sumStar : 0;
			//tinh so luong cac ban ghi cua taable rating tuong ung voi id truyen vao
		$query2 = $conn->query("select id from rating where product_id=$product_id");
		$totalRecord = $query2->rowCount();
		if($totalRecord > 0){
			$avgStar = $sumStar/($totalRecord);
			return $avgStar;
		}
		return 0;
	}

		//liet ke cac danh muc cap cha
	public function modelListCategoriesMobile(){
		$conn = Connection::getInstance();
		$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
		return $query->fetchAll();
	}				
}
 ?>