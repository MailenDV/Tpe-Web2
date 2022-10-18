{include file='header.tpl'}


{*listado de autor por libros*}
<table class="table table-striped">

    <thead>
        <th></th>            
    </thead> 
       {foreach from=$AutoresByLibros item=$libros}
        <tr>
            <td> {$libros->autores|truncate:25} </td>
            <td> {$libros->titulo|truncate:25} </td>
            <td> {$libros->categoria|truncate:25} </td>
            <td> {$libros->fecha|truncate:25} </span> </td>
            <td> {$libros->precio|truncate:25} </td>
            <td><a href='deleteAutorByLibros/{$libros->id_libros}' type='button' class='btn btn-danger'>Borrar</a></td>
            <td><a href='form/{$libros->id_libros}' type='button' class='btn btn-info'>Editar</a></td>
        </tr>
    {/foreach}
    </tr>
</table>


<p class="mt-3"><small>Mostrando {$count} autores y sus libros</small></p>

{include file="footer.tpl"}