<?php
$titulo = 'Alta de Productos';
include '_header.php';
?>

<form class="row g-3" action="validar.php" method="post" enctype="multipart/form-data">
    <!-- ENCTYPE es necesario cuando se envian archivos-->
    <div class="col-md-6 col-xxl-4">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" autofocus minlength="3" maxlength="40" autocomplete="off"> <!-- EN VEZ DE USAR pattern="" PARA DELIMITAR CANTIDAD DE CARACTERES, EL minlength="" EXPLICA EL ERROR EN LA VALIDACION, Y EL MAX NO DEJA PASARSE DEL LIMITE -->
    </div>
    <div class="col-md-3 col-sm-6 col-xxl-1">
        <label for="precio" class="form-label">Precio:</label>
        <input type="number" step="0.01" min="0" class="form-control" id="precio" name="precio" autocomplete="off"> <!-- step="0.01" SIRVE PARA DELIMITAR LA CANTIDAD DE DECIMALES -->
    </div>
    <div class="col-md-3 col-sm-6 col-xxl-1">
        <label for="stock" class="form-label">Stock:</label>
        <input type="number" step="1" class="form-control" id="stock" name="stock" autocomplete="off"> <!-- EN ESTE CASO EL step="1" NO DEJA USAR DECIMALES-->
    </div>
    <div class="col-md-6 col-xxl-3">
        <label for="categoria" class="form-label">Categoría:</label>
        <select class="form-select" id="categoria" name="categoria">
            <option selected value="">Seleccionar</option>
            <option value=2>Consola</option>
            <option value=5>Heladera</option>
            <option value=4>Notebook</option>
            <option value=3>Tablet</option>
            <option value=1>TV</option>
        </select>
    </div>
    <div class="col-md-6 col-xxl-3">
        <label for="marca" class="form-label">Marca:</label>
        <select class="form-select" id="marca" name="marca">
            <option selected value="">Seleccionar</option>
            <option value="3">DJI</option>
            <option value="1">LG</option>
            <option value="4">Microsoft</option>
            <option value="5">Philips</option>
            <option value="2">Samsung</option>
            <option value="6">Sony</option>
        </select>
    </div>

    <fieldset class="col-md-6">
        <legend class="col-form-label col-sm-2 pt-0">Garantía:</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="6meses" name="garantia" value="6">
                <label for="6meses" class="form-check-label">6 Meses</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="12meses" name="garantia" value="12">
                <label for="12meses" class="form-check-label">12 Meses</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="18meses" name="garantia" value="18">
                <label for="18meses" class="form-check-label">18 Meses</label>
            </div>
        </div>
    </fieldset>

    <div class="col-md-6">
        <label for="envio" class="form-label">Envio sin cargo:</label>
        <input type="checkbox" class="form-check-input" id="envio" name="envio" value="Si">
    </div>
    <div class="col-md-6">
        <label for="foto" class="form-label">Fotos:</label>
        <input type="file" class="form-control" id="foto" name="foto" multiple>
    </div>
    <div class="col-md-6">
        <label for="descripcion" class="form-label">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" minlength="10" maxlength="500" autocomplete="off" placeholder="abc"></textarea>
    </div>

    <input type="submit" class="btn btn-primary mb-3" value="Dar de alta">
    <input type="reset" class="btn btn-warning mb-3">
</form>

<?php
include '_footer.php';
?>