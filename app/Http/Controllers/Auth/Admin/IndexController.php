<?php 
namespace App\Http\Controllers\Auth\Admin;

use App\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function index()
	{
		$users = DB::table('lv')->get();
		return view('user.user', ['users' => $users]);
	}
}


 ?>