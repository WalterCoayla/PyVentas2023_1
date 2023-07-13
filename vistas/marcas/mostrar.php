    <h1>Marcas</h1>
<a href="?ctrl=CtrlMarca&accion=nuevo" class="btn btn-primary"> Nueva Marca</a>

<button class="btn btn-warning" id="imprimir">Imprimir</button>

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

<script type="text/javascript">
  $(function () {
    $('#imprimir').click( function(){ 
      //  alert ("imprimiendo");

      var datos= <?=json_encode(isset($datos)?$datos:'');?>;
      
      console.log(datos)
      const doc = new jsPDF();
        doc.setFontSize(20)
        doc.setTextColor(255, 0, 0) // Rojo
      doc.text("REPORTE", 50, 10);

      doc.setFontSize(10)
      doc.setTextColor(0, 0, 0) // Negro

      let columnas =[]
    columnas.push( Object.keys(datos[0]) )

    let data = [] 

    for (let i in datos) {
        data.push( Object.values(datos[i]));
    }
    doc.autoTable({ 
        head: columnas,
        body: data,
            margin:{top:40}
        })


      doc.save("prueba.pdf");
    });

    $('#imprimir1').click( function(){ 
      //  alert ("imprimiendo");

      var datos= <?=json_encode(isset($datos)?$datos:'');?>;
      
      console.log(datos)
      const doc = new jsPDF();

      doc.text("REPORTE", 50, 10);

      for (i=0; i<datos.length;i++){
        doc.text(datos[i]['idmarcas'],30,50+i*10)
        doc.text(datos[i]['nombre'],50,50+i*10)
      }
      doc.save("prueba.pdf");
    });
  });
</script>

