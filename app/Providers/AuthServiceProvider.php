<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Fortify\Fortify;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Fortify::loginView(function() {
            return view('auth.login');
        });

        Fortify::registerView(function() {
            return view('auth.register');
        });

        Fortify::requestPasswordResetLinkView(function() {
            return view('auth.forgot-password');
        });

        Fortify::resetPasswordView(function($request) {
            return view('auth.reset-password', ['request' => $request]);
        });

        // Fortify::confirmPasswordView(function() {
        //     return view('auth.confirm-password');
        // });
    }
}
