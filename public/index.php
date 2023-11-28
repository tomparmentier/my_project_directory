<?php

use App\Kernel;
// chargement des classes
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// et chargement du noyau avec les variables d'environnement
return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};


