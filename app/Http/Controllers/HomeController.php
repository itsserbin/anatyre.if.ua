<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Mail\NewOrder;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Display the user's profile form.
     */
    final public function createOrder(Request $request): bool
    {
        try {
            Mail::to('serbin.ssd@gmail.com')->send(new NewOrder($request->all()));
            return true;
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }
}
