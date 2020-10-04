<?php

namespace App\Models;
use CodeIgniter\Model;

class Menu_M extends Model{

    protected $table = 'tblmenu';

    protected $primaryKey = 'idmenu';

    protected $allowedFields = ['idkategori', 'menu' , 'gambar' , 'harga'];

}