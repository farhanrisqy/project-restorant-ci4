<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		echo "<h1> belajar ci4 </h1>";
	}

	public function read()
	{
		$model = new Kategori_M();
		$kategori = $model -> findAll();

		$data =[
			'judul' => 'SELECT DATA DARI controller',
			'kategori' => $kategori
		];


	
		return view ("kategori/select",$data);
		
	}


	public function create()
	{
		
		return view ("kategori/insert");
		
	}
	public function insert()
	{
		print_r($_POST);

		$model = new Kategori_M();
		$model -> insert($_POST);

		return redirect ()-> to (base_url()."/admin/kategori");
	}
	
	public function find($id = null)
	{
		echo "<h1> update data </h1>";
	}

	public function update($id = null)
	{
		echo "proses update data $id ";
	}

	public function delete($id = null)
	{
		$model = new Kategori_M();
		$model -> delete($id);
		return redirect ()-> to (base_url()."/admin/kategori");

	}

	//--------------------------------------------------------------------

}
