<h1>Formulario para dar de alta Administradores</h1>

<form action="http://localhost/CASE_Nuevo/backend/public/administradores/recibir" method="POST">
    {{ csrf_field()}}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="email">Correo</label>
    <input type="email" name="email">

    <input type="submit" value="Enviar">
</form>
