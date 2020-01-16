<?php

/**
 * @Author: Sistemas
 * @Date:   2019-11-25 08:50:19
 * @Last Modified by:   Sistemas
 * @Last Modified time: 2019-11-25 16:43:16
 */
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#tblDemo").DataTable({
                "info": true,
                "scrollX": true,
                "sort": true,
                "destroy": true,
                "searching": true,
                "paginate": true,
                "lengthMenu": [
                    [10,20,50,100, -1],
                    [10,20,50,100, "Todo"]
                ],
                "order": [
                    [0, "desc"]
                ],
                "language": {
                    "info": "Registro _START_ a _END_ de _TOTAL_ entradas",
                    "infoEmpty": "Registro 0 a 0 de 0 entradas",
                    "zeroRecords": "No se encontro coincidencia",
                    "infoFiltered": "(filtrado de _MAX_ registros en total)",
                    "emptyTable": "NO HAY DATOS DISPONIBLES",
                    "lengthMenu": '_MENU_ ',
                    "search": 'Buscar <i class="fa fa-search"></i>:  ',
                    "loadingRecords": "<i class='fa fa-spin fa-refresh'></i>",
                    "processing": "Procesando datos  <i class='fa fa-spin fa-refresh'></i>",
                    "paginate": {
                        "first": "Primera",
                        "last": "Última ",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
	});
</script>