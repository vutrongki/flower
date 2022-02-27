<?php 
//load file model o day 
include "models/HomeModel.php";
class HomeController extends Controller{
	//su dung class model
	use HomeModel;
	//ham mac dinh
	public function index(){
		//load view
		$this->loadView("HomeView.php");
	}
}
?>