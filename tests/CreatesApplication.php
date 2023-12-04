<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
<<<<<<< HEAD
use Illuminate\Foundation\Application;
=======
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef

trait CreatesApplication
{
    /**
     * Creates the application.
<<<<<<< HEAD
     */
    public function createApplication(): Application
=======
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
