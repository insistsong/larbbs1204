<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts(): array
=======
    public function hosts()
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
