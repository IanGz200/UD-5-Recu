<?php

declare(strict_types=1);

namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;
use Com\Daw2\Models\Ejercicio1Model;

class EjerciciosController extends BaseController
{
    public function ejercicio1(): void
    {
        $data = array(
            'titulo' => 'Ejercicio 1',
            'breadcrumb' => ['Inicio, Ejercicio 1'],
        );
        $this->view->showViews(
            array(
                'templates/header.view.php',
                'ejercicio1.view.php',
                'templates/footer.view.php'
            ),
            $data
        );
    }

    public function getNotas(): void
    {
        $model = new Ejercicio1Model();
        $asig = [];
        $errors = $model->checkErrors($_POST['texto_json']);

        if ($errors = []) {
            $asig = $model->getNotas($_POST['texto_json']);
        }

        $data =
            array(
                'titulo' => 'Ejercicio 1',
                'breadcrumb' => ['Inicio, Ejercicio 1'],
                'asignaturas' => $asig,
                'errores' => $errors

            );

        $this->view->showViews(
            array(
                'templates/header.view.php',
                'ejercicio1.view.php',
                'templates/footer.view.php'
            ),
            $data
        );
    }

    public function ejercicio2(): void
    {
        $data = array(
            'titulo' => 'Ejercicio 1',
            'breadcrumb' => ['Inicio, Ejercicio 1']
        );
        $this->view->showViews(
            array(
                'templates/header.view.php',
                'ejercicio1.view.php',
                'templates/footer.view.php'
            ),
            $data
        );
    }
}
