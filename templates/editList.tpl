{include file="header.tpl"}

<div class="container">

    <form class="form-edit" action="editar/{$id}" method="POST">

        <h2>Formulario de Edicion:</h2>
        <label>Autores</label>
<input name="autores" type="text" id="autores" class="form-control">
            <label>Nacionalidad</label>
            <input name="nacionalidad" type="text" class="form-control">

        <h3></h3>
        <input type="submit" class="btn btn-danger" value="actualizar">

    {include file="footer.tpl"}

</div>


{*<div class="content">
<h2>
</h2>
<h3>Formulario</h3>
<form method="POST" action="editList/{$autor['id']}">
    <div class='mb-3'>
        <label for='InputAutor' class='form-label'>Autores</label>
        <input type='text' class='form-control' id='InputAutores' aria-describedby='autores' name='autor'>
        <div id='Inputautor' class='form-text'></div>
    </div>
    <div class='mb-3'>
        <label for='InputAutor' class='form-label'>Nacionalidad</label>
        <input type='text' class='form-control' id='InputNacionalidad' aria-describedby='nacionalidad' name='autor'>
        <div id='Inputautor' class='form-text'></div>
    </div>
    <input type="hidden" name="idAutorEdit" value="{$autor['id']}">
    <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
</form>*}







    {*{foreach from=$autor item=$id}   
    <div>
        <label for="autor">Autores</label>
        <input type="text" class="form-control" id="autores" name="autores">
    </div>
    <div>
        <label for="autor">Nacionalidad</label>
        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
    </div>
{/foreach}*}


{*<ul class="list-group">
<form method="post" action="{$form_alta}editar">
    {foreach from=$libro item=$autor}
        <form action="{BASE_url} editar/{$autor->id}" method="POST">
            <input type="hidden" name="id" values="{$autor->id}" placeholder="autor">
            autores <input type="text" name="autores" value="{$autor->$autores}" placeholder="autores">
            nacionalidad <input type="text" name="nacionalidad" value="{$autor->$nacionalidad}" placeholder="nacionalidad">

            <input type="submit" value="Guardar Cambios">
        </form>
    {/foreach}
</ul>*}



