<?php

declare(strict_types=1);

namespace Com\Daw2\Models;

use Com\Daw2\Core\BaseDbModel;

class Ejercicio1Model extends BaseDbModel
{
    public function checkErrors($json): array
    {
        $errors = [];

        return $errors;
    }

    public function getNotas($json): array
    {
        return [];
    }
}
