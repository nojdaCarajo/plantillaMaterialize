 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<div class="constructor">
	<div class="buscador">
		<input type="search" name="buscador" id="buscador">
	</div>
	<table>
		<thead>
			
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Cedula</th>
				<th>Cargo</th>
				<th>Departamento</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Alejandro</td>
				<td>Guzman</td>
				<td>7863425</td>
				<td>analista</td>
				<td>ventas</td>
			</tr>
			<tr>
				<td>Isamar</td>
				<td>Ortega</td>
				<td>23222459</td>
				<td>analista</td>
				<td>Ventas</td>
			</tr>
			<tr>
				<td>Oscar</td>
				<td>Orellana</td>
				<td>19629354</td>
				<td>Supervisor</td>
				<td>Obras</td>
			</tr>
			<tr>
				<td>Josue</td>
				<td>Barreto</td>
				<td>25747486</td>
				<td>Jefe de operaciones</td>
				<td>Tecnologia e inovacion</td>
			</tr>
			<tr>
				<td>Nubia</td>
				<td>Graterol</td>
				<td>7368146</td>
				<td>Coordinadora</td>
				<td>Departamento legal</td>
			</tr>
		</tbody>
	</table>
</div>


<button id="goles" type="button">Boton</button>
<script src="vista/js/jquery.js"></script>
<script type="text/javascript">

$(function(){ 
    //listar()
        $("#buscador").keyup(function(){
        if( $(this).val() != "")
        {
            $("table tbody>tr").hide();
            $("table td:buscar('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            $("table tbody>tr").show();
        }
    });
});
$.extend($.expr[":"], 
{
    "buscar": function(elem, i, match, array) 
    {
        return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
})




</script>
</body>
</html>