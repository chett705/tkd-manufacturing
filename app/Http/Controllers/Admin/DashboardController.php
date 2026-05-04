<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Product;
use App\Models\TeamMember;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $startOfMonth = now()->startOfMonth();

        $stats = [
            'products' => [
                'total' => Product::count(),
                'new_this_month' => Product::where('created_at', '>=', $startOfMonth)->count(),
            ],
            'teamMembers' => [
                'total' => TeamMember::count(),
                'new_this_month' => TeamMember::where('created_at', '>=', $startOfMonth)->count(),
            ],
            'certificates' => [
                'total' => Certificate::count(),
                'new_this_month' => Certificate::where('created_at', '>=', $startOfMonth)->count(),
            ],
            'contacts' => [
                'total' => Contact::count(),
                'new_this_month' => Contact::where('created_at', '>=', $startOfMonth)->count(),
            ],
        ];

        $recentActivities = Activity::latest()
            ->take(5)
            ->get(['id', 'title', 'description', 'created_at']);

        return view('backend.dashboard.index', compact('stats', 'recentActivities'));
    }
}
