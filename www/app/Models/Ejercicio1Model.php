<?php

declare(strict_types=1);

namespace Com\Daw2\Models;

use Com\Daw2\Core\BaseDbModel;

class Ejercicio1Model extends BaseDbModel
{
    public function checkErrors($json): array
    {
        $errors = [];

        if (!is_array(json_decode($json))) {
            $errors['json'] = 'Introduce un formato de json correcto';
        }

        return $errors;
    }

    public function getNotas($json): array
    {
        return json_decode($json);
    }
}
