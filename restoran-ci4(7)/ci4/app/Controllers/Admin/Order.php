<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Order extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$pager =\Config\Services::pager();

		$sql = "SELECT * FROM vorder";
		$result = $db->query($sql);
		$row = $result->getResult('array');

		$total = count($row);
		$tampil = 3 ;

		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			echo $page;
			$mulai = ($tampil * $page) - $tampil;
			$sql = "SELECT * FROM vorder 
			 $mulai,$tampil";
		}else{
			$sql = "SELECT * FROM vorder ORDER BY status ASC LIMIT 0,$tampil";
		};
		$result = $db->query($sql);
		$row = $result->getResult('array');
		$data=[
			'judul'=>'DATA ORDER',
			'order'=>$row,
			'pager'=>$pager,
			'perPage'=>$tampil,
			'total'=>$total
		];

		echo view('order/select',$data);
	}


	public function find($id = null){
		$db = \Config\Database::connect();

		$sql = "SELECT * FROM vorder WHERE idorder=$id";
		$result = $db->query($sql);
		$row = $result->getResult('array');

		echo "<hr>";

		$sql = "SELECT * FROM vorderdetail WHERE idorder=$id";
		$result = $db->query($sql);
		$detail = $result->getResult('array');



		$data =[
			'judul' => 'PEMBAYARAN PELANGGAN',
			'order' => $row,
			'detail' => $detail

		];

		echo view('order/update',$data);
	} 

	//--------------------------------------------------------------------

}
