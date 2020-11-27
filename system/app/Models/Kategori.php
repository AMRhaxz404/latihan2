<?php 

namespace App\Models;
use App\Models\User;

class Kategori extends Model{
	protected $table = 'kategori';

	function seller(){
		return $this->belongsTo(User::class, 'id_user'); 
	}
}