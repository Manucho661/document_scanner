<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Admin\Document;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share documents with all views
        View::composer('*', function ($view) {
            $documents = Document::all();
            $view->with('documents', $documents);
        });
    }

    public function register()
    {
        //
    }
}
