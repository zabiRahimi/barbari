<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Validator::extend('mobail', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^09[0-9]{9}$/', $value);
      });
      Validator::extend('tel', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^0[0-9]{10}$/', $value);
      });
      Validator::extend('pas', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^[A-Za-z0-9_]{4,}$/', $value);
      });
      Validator::extend('codepost', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^[0-9]{5}_?\s?-?[0-9]{5}$/', $value);
      });
      Validator::extend('name', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^[\x{0621}-\x{0628}\x{062A}-\x{063A}\x{0641}-\x{0642}\x{0644}-\x{0648}\x{064E}-\x{0651}\x{0655}\x{067E}\x{0686}\x{0698}\x{06A9}\x{06AF}\x{06BE}\x{06CC} \s]{3,}$/u', $value);
      });
      Validator::extend('address', function($attribute, $value, $parameters, $validator) {
        return preg_match('/^[\p{Arabic}\d?_?،?,?\-?\/?\s?]{2,}$/u', $value);
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
