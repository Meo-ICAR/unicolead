<?php

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
});

Route::get('/b/{token}', function ($token, Request $request) {
    $lead = Lead::where('token', $token)->firstOrFail();

    // Log the click
    $lead->views()->create([
        'ip_address' => $request->ip(),
        'user_agent' => $request->userAgent(),
    ]);

    // Update lead tracking status
    $lead->increment('views_count');
    if (! $lead->opened_at) {
        $lead->update([
            'opened_at' => now(),
        ]);
    }

    return view('brochure', compact('lead'));
})->name('brochure.track');
