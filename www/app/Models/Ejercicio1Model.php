<?php

declare(strict_types=1);

namespace Com\Daw2\Models;

use Com\Daw2\Core\BaseDbModel;

class Ejercicio1Model extends BaseDbModel
{
    public function checkErrors($json): array
    {
        $errors = [];

        $decoded = json_decode($json, true);

        if (!is_array($decoded)) {
            $errors['formato'] = 'El json no contiene un formato válido';
        } elseif ($decoded == []) {
            $errors['vacio'] = 'El json no contiene ninguna información';
        }

        return $errors;
    }

    public function getNotas($json): array
    {
        $decoded = json_decode($json, true);
        $resultado = [];

        foreach ($decoded as $key => $value) {
            $resultado[$key] = [];

            $media = 0;
            $suspensos = 0;
            $aprobados = 0;
            $max = [
                'alumno' => '',
                'nota' => 0
            ];
            $min = [
                'alumno' => '',
                'nota' => 10
            ];
            foreach ($value as $key2 => $v) {
                $media += $v;
                if ($v < 5) {
                    $suspensos += 1;
                } else {
                    $aprobados += 1;
                }
                if ($v > $max['nota']) {
                    $max['nota'] = $v;
                    $max['alumno'] = $key2;
                }
                if ($v < $min['nota']) {
                    $min['nota'] = $v;
                    $min['alumno'] = $key2;
                }
            }
            $media = $media / count($value);

            $resultado[$key]['media'] = $media;
            $resultado[$key]['suspensos'] = $suspensos;
            $resultado[$key]['aprobados'] = $aprobados;
            $resultado[$key]['max'] = $max;
            $resultado[$key]['min'] = $min;
        }

        return $resultado;
    }
}
