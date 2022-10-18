{include file="header.tpl"}


<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Autores</th>
        <th>Titulo</th>
        <th>Categoria</th>
        <th>Fecha</th>
        <th>Precio</th>
        
    </thead>     

        {foreach from=$libros item=$libro}
    <tr>
        <td> 
            <span> 
                <td>{$libro->autores|truncate:25}</td> 
                <td>{$libro->titulo|truncate:25}</td> 
                <td>{$libro->categoria|truncate:25}</td>
                <td>{$libro->fecha|truncate:25}</td>
                <td>{$libro->precio|truncate:25}</td>
                
            </span> 
        </td>
                
    </tr>
{/foreach}

</table>

<p class="mt-3"><small>Mostrando {$count} libros</small></p>

{include file="form_libros.tpl"}
{include file="footer.tpl"}