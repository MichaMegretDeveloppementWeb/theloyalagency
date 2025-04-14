<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MaintenanceWithSecret extends Command
{
    protected $signature = 'maintenance:withsecret';

    protected $description = 'Met l\'application en mode maintenance avec le secret défini dans le .env';

    public function handle()
    {

        $secret = config('app.maintenance.secret');

        if (!$secret) {
            $this->error('La variable MAINTENANCE_SECRET n\'est pas définie dans le fichier de configuration.');
            return 1;
        }

        // Active le mode maintenance avec le secret
        Artisan::call('down', ['--secret' => $secret]);

        $this->info("L'application est en mode maintenance avec le secret '{$secret}'.");
        $this->info("Pour accéder, utilisez l'URL: " . url($secret));

        return 0;
    }
}
