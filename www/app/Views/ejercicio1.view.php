<?php

declare(strict_types=1);

?>
<!--Inicio HTML -->
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <!-- Form -->
            <form method="post" action="/ejercicio1">
                <input type="hidden" name="order" value="1"/>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Filtros</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!--<form action="./?sec=formulario" method="post">                   -->
                    <div class="row">
                        <div class="col-12 ">
                            <div class="mb-3">
                                <label for="texto_json">Texto JSON:</label>
                                <input type="text" class="form-control" name="texto_json" id="texto_json" value=""/>
                            </div>
                        </div>
                    </div>
                    <?php if ($errores != []) {?>
                    <div class="row">
                        <div class="col-12">
                                    <?php foreach ($errores as $error) { ?>
                                        <p class="text-danger"><?php echo $error?></p>
                                        <?php
                                    }?>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="card-footer">
                    <div class="col-12 text-right">
                        <a href="/ejercicio1" value="" name="reiniciar" class="btn btn-danger">Reiniciar filtros</a>
                        <input type="submit" value="Aplicar filtros" name="enviar" class="btn btn-primary ml-2"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if ($asignaturas != null) {
    ?>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <!-- Card Body -->
            <div class="card-body" id="card_table">
                <!-- Table -->
                <table id="tabladatos" class="table table-striped">
                    <thead>
                        <tr>
                            <th><a href="/ejercicio1?order=1">Materia</a><i class="fas fa-sort-amount-down-alt"></i></th>
                            <th><a href="/ejercicio1?order=2">Media</a></th>
                            <th><a href="/ejercicio1?order=3">Suspensos</a></th>
                            <th><a href="/ejercicio1?order=4">Aprobados</a></th>
                            <th><a href="/ejercicio1?order=5">Alumno Max</a></th>
                            <th><a href="/ejercicio1?order=5">Max</a></th>
                            <th><a href="/ejercicio1?order=5">Alumno Min</a></th>
                            <th><a href="/ejercicio1?order=5">Min</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($asignaturas as $key => $asig) {
                            ?>
                            <tr class="">
                                <td><?php echo $key ?></td>
                                <td><?php echo $asig['media'] ?></td>
                                <td><?php echo $asig['suspensos'] ?></td>
                                <td><?php echo $asig['aprobados'] ?></td>
                                <td><?php echo $asig['max']['alumno'] ?></td>
                                <td><?php echo $asig['max']['nota'] ?></td>
                                <td><?php echo $asig['min']['alumno'] ?></td>
                                <td><?php echo $asig['min']['nota'] ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <!-- Pagination -->
            </div>
        </div>
    </div>
        <?php
    } ?>
</div>
<!--Fin HTML -->
