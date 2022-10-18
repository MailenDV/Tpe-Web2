{include file="header.tpl"}
{include file="form_alta.tpl"}

<ul class="list-group">
    {foreach from=$libro item=$autor}
        <li class='
                list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$autor->autores}</b> - {$autor->nacionalidad|truncate:25}</span>
            <div class="ml-auto">
                <a href='form/{$autor->id}' type='button' class='btn btn-info'>Editar</a>
                <a href='delete/{$autor->id}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>


<p class="mt-3"><small>Mostrando {$count} autores</small></p>

{include file="footer.tpl"}












