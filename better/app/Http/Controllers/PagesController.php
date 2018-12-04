<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{

	public function index(){
		$data = array(
			'title'=>'Services',
			'services' =>['Web.Design','Programing','SEO']
		);
		return view('pages.index')->with($data);;
    }
}