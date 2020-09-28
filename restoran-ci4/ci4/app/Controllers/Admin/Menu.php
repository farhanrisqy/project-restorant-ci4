<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;
use App\Models\Menu_M;

class Menu extends BaseController
{
	public function index()
	{
        $pager = \Config\Services::pager();
		$model = new Menu_M();
		//$kategori = $model -> findAll();

		$data =[
			'judul' => 'DATA MENU',
			'menu' => $model->paginate(3, 'page'),
			'pager' => $model->pager
		];
		return view ("menu/select",$data);
    }

    public function option (){
        $model = new Kategori_M();
		$kategori = $model -> findAll();
		$data = [
			'kategori' => $kategori
		];

		return view ('template/option',$data);

    }

    public function read (){
        echo 'halo gais';
    }

	//--------------------------------------------------------------------

}
