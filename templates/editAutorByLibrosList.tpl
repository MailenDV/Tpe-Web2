{include file="header.tpl"}

<div class="container">

    <form class="form-edit" action="editar/{$id}" method="POST">

        <h2>Formulario de Edicion:</h2>
            <label>Autores</label>
                <input name="autores" type="text" id="autores" class="form-control">
            <label>Titulo</label>
                <input name="titulo" type="text" id="titulo "class="form-control">
            <label>Categoria</label>
                <input name="categoria" type="text" id="categoria "class="form-control">
            <label>Fecha</label>
                <input name="fecha" type="text" id="fecha "class="form-control">
            <label>Precio</label>
                <input name="precio" type="text" id="precio "class="form-control">
        <h3></h3>
        <input type="submit" class="btn btn-danger" value="actualizar">

    {include file="footer.tpl"}
