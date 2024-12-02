<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::all();
        $visit_count = $clients->count();
        $today_visits = $clients->whereDate('created_at', today())->count();
        $weekly_visits = $clients->whereBetween('created_at', [now()->subWeek(), now()])->count();
        $monthly_visits = $clients->whereBetween('created_at', [now()->subMonth(), now()])->count();
        $yearly_visits = $clients->whereBetween('created_at', [now()->subYear(), now()])->count();

        return view('admin.dashboard', compact('visit_count', 'today_visits', 'weekly_visits', 'monthly_visits', 'yearly_visits'));
    }
}
