<?php
    require_once("../head/header.php");
    require_once("../../controller/infoController.php");
    $obj = new infoController();
    $empresa = $obj->show($_GET['id']);
?>

<form action="update.php" method="POST">
    <h2>Modificando Empresa</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $empresa['id']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" value="<?= $empresa['nombre']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Descripción</label>
        <div class="col-sm-10">
        <input type="text" name="descripcion" class="form-control" value="<?= $empresa['descripcion']?>">
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Actualizar">
    <a href="show.php?id=<?= $empresa['id']?>" class="btn btn-danger">Cancelar</a>
</form>

<?php
    require_once("../head/footer.php");
?>