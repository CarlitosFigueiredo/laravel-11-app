<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\View\View;

class UserController extends Controller implements HasMiddleware
{
     /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        // return [
        //     'auth',
        //     new Middleware('log', only: ['index']),
        //     new Middleware('subscribed', except: ['store']),
        // ];

        return [
            function (Request $request, Closure $next) {
                return $next($request);
            },
        ];
    }

    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id),
        ]);
    }
}
