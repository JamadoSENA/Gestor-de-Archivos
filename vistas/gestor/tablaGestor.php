<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-hover" id="tablaGestorDataTable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo Archivo</th>
                        <th>Descargar</th>
                        <th>Visualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="btn btn-danger btn-sm">
                                <span class="fa-solid fa-trash"></span>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){
        $('#tablaGestorDataTable').DataTable();
    });

</script>