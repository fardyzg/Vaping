<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="service-modal-body">
        <i class="fas fa-times modal-close-btn"></i>
        <form id="formulario">
            <h1>Libro de reclamaciones</h1>
            <br>
            <div class="box-input">
                <label class="labelimp" > Escriba su Nombres</label>
                <input name="nombres" id="nombres" required>
            </div>
            <div class="box-input">
                <label class="labelimp" >Escriba su Apellidos </label>
                <input name="apellidos" id="apellidos" required>
            </div>
            <div class="box-input">
                <label class="labelimp" > Escbriba su Reclamo</label>
                <textarea name="reclamos" id="reclamos" required></textarea>
            </div>
            <div class="container-butt">
                <a class="buton" id="send" onclick="enviarFormulario()">Enviar</a>
            </div>
        </form>
    </div>
	


<script>
        const evento = document.getElementById('send');
        const enviarFormulario = (event) => {
            event.preventDefault(); // Evita la recarga de página
            let Nombre = document.getElementById('nombres').value;
            let Apellido = document.getElementById('apellidos').value;
            let Reclamo = document.getElementById('reclamos').value;
            let Numero = '+51913245598'; // Agrega el prefijo internacional +
            var win = window.open(`https://wa.me/${Numero}?text=Hola%20mi%20nombre%20es:%20${encodeURIComponent(Nombre)},%20Mi%20reclamo:%20${encodeURIComponent(Reclamo)}`, '_blank');
        };
        evento.addEventListener('click', enviarFormulario);
    </script>

</body>


</html>








