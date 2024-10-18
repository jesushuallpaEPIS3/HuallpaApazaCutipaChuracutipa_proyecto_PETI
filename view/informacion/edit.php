<?php
    require_once("../head/header.php");
    require_once("../../controller/infoController.php");
    $obj = new infoController();
    $date = $obj->show($_SESSION['user_id']);
?>

<form action="update.php" method="POST">
    <h2>Modificando Empresa</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $date['id']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" value="<?= $date['nombre']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Descripción</label>
        <div class="col-sm-10">
        <input type="text" name="descripcion" class="form-control" value="<?= $date['descripcion']?>">
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Actualizar">
    <a href="show.php?id=<?= $date['id']?>" class="btn btn-danger">Cancelar</a>
</form>

<?php
    require_once("../head/footer.php");
?>