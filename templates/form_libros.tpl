<!-- formulario de alta de productos -->
<form action="addAutorByLibros" method="POST" class="my-4">
    <div class="row">
    <div class="col-5">
        <div class="form-group">
            <label>Autores</label>
            <select name="id_libros" type="number" class="form-control">
                <option> -- Seleccione -- </option>
                <option value = "1">Sebastian Fitzek </option>
                <option value = "2">Alex Mirez</option>
                <option value = "3">Gabriel García Márquez</option>
                <option value = "4">J.K Rowling</option>
                <option value = "5">Rick Riordan</option>
                <option value = "26">Agatha Christie</option>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label>Titulo</label>
            <textarea name="titulo" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
        <label>Categoría</label>
            <select name="categoria" class="form-control">
                <option> -- Seleccione -- </option>
                <option value = "Thriller/Suspense">Thriller/Suspense</option>
                <option value = "Literatura Juvenil">Literatura Juvenil</option>
                <option value = "Ficcion Urbana">Ficcion Urbana</option>
                <option value = "Ficcion Infantil">Ficcion Infantil</option>
            </select>
        </div>
        <div class="form-group">
            <label>Fecha</label>
            <input name="fecha" type="number" class="form-control">
        </div>
        </div>
        <div class="form-group">
            <label>Precio</label>
            <textarea name="precio" class="form-control" rows="3"></textarea>
        </div>      
    
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    

</form>








{*<form action="addAutorByLibros" method="POST" class="my-4">
    <div class="row">
    <div class="col-5">
        <div class="form-group">
            <label>Autores</label>
            <select name="autores" type="number" class="form-control">
                <option> -- Seleccione -- </option>
                <option value = "2">Alex Mirez</option>
                <option value = "3">Gabriel García Márquez</option>
                <option value = "4">J.K Rowling</option>
                <option value = "5">Rick Riordan</option>
                <option value = "7">Agatha Christie</option>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label>Titulo</label>
            <textarea name="titulo" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Fecha</label>
            <input name="fecha" type="number" class="form-control">
        </div>
        </div>
        <div class="form-group">
            <label>Precio</label>
            <textarea name="precio" class="form-control" rows="3"></textarea>
        </div>      
    <div class="form-group">
        <label>Categoría</label>
            <select name="categoria" class="form-control">
                <option> -- Seleccione -- </option>
                <option value = "Thriller/Suspense">Thriller/Suspense</option>
                <option value = "Literatura Juvenil">Literatura Juvenil</option>
                <option value = "Ficcion Urbana">Ficcion Urbana</option>
                <option value = "Ficcion Infantil">Ficcion Infantil</option>
            </select>
    </div>
    <div class="form-group">
            <label>id_autor</label>
            <input name="id_autor" type="number" class="form-control">
        </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    

</form>*}