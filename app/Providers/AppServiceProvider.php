<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Location;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
{
    // Mendapatkan semua kontak dan membagikan ke semua view
    $contacts = Contact::all();
    view()->share('contacts', $contacts);

    $locations = Location::all();
    view()->share('locations', $locations);


}
}
