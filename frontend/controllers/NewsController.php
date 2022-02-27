<?php  
include"models/NewsModel.php";
class NewsController extends Controller{
	use NewsModel;
	public function detail(){
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$record = $this->modelGetRecord($id);
		$this->loadView("NewsView.php",["record"=>$record]);
	}
}
?>