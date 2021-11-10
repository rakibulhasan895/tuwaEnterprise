<?php

namespace App\Http\Controllers;
use App\Models\blog;
use App\Models\agroni_services;
use App\Models\agroni_bishesotto;
use App\Models\abs_x_years_interests;
use App\Models\abs_account_details;
use App\Models\tuwakrishi;
use App\Models\contact;

use DB;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		return view('home');
	}
		public function localabsdetail() {
		$data = abs_account_details::latest()->paginate(10);

		return view('admin.absaccountdetails.local')->with('data', $data);
	}
		public function localblog() {
		$data     = blog::latest()->paginate(10);
		$archives = DB::select('select year(created_at) as year, month(created_at) as month from blogs group by year(created_at), month(created_at)');

		return view('admin.blog.local', compact('data', 'archives'));
	}
		public function localserivces() {
		$data = agroni_services::latest()->paginate(10);

		return view('admin.agroniservices.local',compact('data'));
	}
		public function localbisesotto() {
		$data = agroni_bishesotto::latest()->paginate(10);

		return view('admin.agronibisesotto.local')->with('data', $data);
	}
		public function localinterest() {
		$data = abs_x_years_interests::latest()->paginate(10);

		return view('admin.absxyinterest.local')->with('data', $data);
	}
		public function localtuwasadkrishi() {
		$data = tuwakrishi::latest()->paginate(10);

		return view('admin.tuwasadkrisi.local')->with('data', $data);
	}
		public function localcontact() {
		$data = contact::latest()->paginate(10);

		return view('admin.contact.local')->with('data', $data);
	}
	
}
