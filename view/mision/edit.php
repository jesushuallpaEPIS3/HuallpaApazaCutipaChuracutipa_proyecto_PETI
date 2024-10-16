<?php
    require_once("../head/header.php");
    require_once("../../controller/misionController.php");
    $obj = new misionController();
    $date = $obj->show($_SESSION['user_id']);
?>

<form action="update.php" method="POST">
    <h2>Modificando la Mision de la Empresa</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $date['id']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Mision</label>
        <div class="col-sm-10">
        <input type="text" name="mision" class="form-control" value="<?= $date['mision']?>">
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Actualizar">
    <a href="show.php?id=<?= $date['id']?>" class="btn btn-danger">Cancelar</a>
</form>

<?php
    require_once("../head/footer.php");
?>