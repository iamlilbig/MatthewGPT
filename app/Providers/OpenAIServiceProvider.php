<?php

namespace App\Providers;

use App\Http\OpenAI\ChatGPTServices;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class OpenAIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind("ChatGPT", function (){
            return new ChatGPTServices();
        });
    }
}
