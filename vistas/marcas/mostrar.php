    <h1>Marcas</h1>
<a href="?ctrl=CtrlMarca&accion=nuevo"> Nueva Marca</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th colspan="2">Operaciones</th>
        </tr>
    <?php  
        # var_dump($datos);exit;
        if (is_array($datos))
        foreach ($datos as $d) { ?>
        
        <tr>
            <td><?=$d['idmarcas']?></td>
            <td><?=$d['nombre']?></td>
            <td><a href="?ctrl=CtrlMarca&accion=editar&id=<?=$d['idmarcas']?>"> Editar</a></td>
            <td><a href="?ctrl=CtrlMarca&accion=eliminar&id=<?=$d['idmarcas']?>"> Eliminar</a></td>
        </tr>
        <?php } ?>
    </table>
<p></p>

<p></p>
<a href="?">Retornar</a>
