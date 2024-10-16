<?php
    require_once("../head/header.php");
    require_once("../../controller/visionController.php");
    $obj = new visionController();
    $date = $obj->show($_SESSION['user_id']);
?>

<form action="update.php" method="POST">
    <h2>Modificando la vision de la Empresa</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $date['id']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">vision</label>
        <div class="col-sm-10">
        <input type="text" name="vision" class="form-control" value="<?= $date['vision']?>">
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Actualizar">
    <a href="show.php?id=<?= $date['id']?>" class="btn btn-danger">Cancelar</a>
</form>

<?php
    require_once("../head/footer.php");
?>