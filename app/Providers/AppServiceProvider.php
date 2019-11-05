<?php

namespace App\Providers;

// use App\Project;
// use App\Task;
// use App\Observers\ProjectObserver;
// use App\Observers\TaskObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot(UrlGenerator $url)
  {
    if (env('APP_ENV') !== 'local') {
      $url->forceSchema('https');
    }
    // Project::observe(ProjectObserver::class);
    // Task::observe(TaskObserver::class);
  }
}
