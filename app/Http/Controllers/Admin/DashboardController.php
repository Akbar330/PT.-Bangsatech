<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Testimonial;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard', [
            'customerCount' => Customer::count(),
            'activeCustomerCount' => Customer::active()->count(),
            'testimonialCount' => Testimonial::count(),
            'activeTestimonialCount' => Testimonial::active()->count(),
        ]);
    }
}
