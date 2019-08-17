<?php

namespace App\Http\Controllers;

use App\Notifications\OrderNotification;
use Illuminate\Http\Request;
use App\Order;
use App\User;

class OrderController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function order(Request $request)
	{
		$order = Order::create($request->all());

		$user = User::find(1);

		$user->notify(new OrderNotification($order));

		return redirect()->back();
	}
}
