<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'termsAndConditions'=> 'By registering, I accept the whujo <a class="underline text-blue-500" href="'.route('terms.show'). '">terms and conditions</a>, as well as their <a class="underline text-blue-500" href="' . route('policy.show') . '">privacy policies</a> and declare my agreement with the provisions.'

];
