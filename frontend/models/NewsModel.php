<?php  
trait NewsModel{
	//lay 1 ban ghi
	public function modelGetRecord($id){
		//lay bien ket noi
		$conn = Connection::getInstance();
		$query = $conn->query("select * from news where id=$id");
		return $query->fetch();
		
	}
}
?>