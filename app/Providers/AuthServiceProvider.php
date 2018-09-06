<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Carbon\Carbon;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // // register routes required for issueing/revoking access tokens
        // Passport::routes();

        // // expire time for tokens
        // Passport::tokensExpireIn(Carbon::now()->addDays(15));
        // Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));
    }
}
