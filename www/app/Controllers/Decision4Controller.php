<?php

declare(strict_types=1);

namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class Decision4Controller extends BaseController
{
    public function calculoBisiesto()
    {
        $data = [];

        $this->view->showViews(
            array(
                'templates/header.view.php',
                'decision4.view.php',
                'templates/footer.view.php'
            ),
            $data
        );
    }
}
