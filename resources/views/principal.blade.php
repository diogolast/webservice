@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="starter-template">
            <h1>Rotas</h1>
            <?php
                $routeCollection = Route::getRoutes();

                echo "<table style='width:100%'>";
                echo "<tr>";
                echo "<td width='10%'><h4>HTTP Method</h4></td>";
                echo "<td width='10%'><h4>Route</h4></td>";
                echo "<td width='10%'><h4>Name</h4></td>";
                echo "<td width='70%'><h4>Corresponding Action</h4></td>";
                echo "</tr>";
                foreach ($routeCollection as $value) {
                    echo "<tr>";
                    echo "<td>" . $value->getMethods()[0] . "</td>";
                    echo "<td>" . $value->getPath() . "</td>";
                    echo "<td>" . $value->getName() . "</td>";
                    echo "<td>" . $value->getActionName() . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </div><!-- /.container -->
@endsection