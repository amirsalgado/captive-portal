<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']); // Middleware para seguridad adicional
    }

    public function index(): View
    {
        $today = Carbon::today();

        // Cache las consultas individuales para reducir la carga en la base de datos
        $visit_count = Cache::remember('visit_count', 300, function () {
            return Client::count();
        });

        $today_visits = Cache::remember('today_visits', 300, function () use ($today) {
            return Client::whereDate('created_at', $today)->count();
        });

        $weekly_visits = Cache::remember('weekly_visits', 300, function () {
            return Client::whereBetween('created_at', [
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek(),
            ])->count();
        });

        $monthly_visits = Cache::remember('monthly_visits', 300, function () {
            return Client::whereMonth('created_at', now()->month)
                         ->whereYear('created_at', now()->year)
                         ->count();
        });

        $yearly_visits = Cache::remember('yearly_visits', 300, function () {
            return Client::whereYear('created_at', now()->year)->count();
        });

        $stats = [
            'total_visits' => $visit_count,
            'today_count' => $today_visits,
            'weekly_count' => $weekly_visits,
            'monthly_count' => $monthly_visits,
            'yearly_count' => $yearly_visits,
        ];

        return view('admin.dashboard', compact('stats'));
    }
}