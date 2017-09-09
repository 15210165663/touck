<?php
namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
header('content-type:text/html;charset=utf-8');
class PersonalController extends Controller
{
	public function Apply()
	{
		return view('home.apply');
	}
}