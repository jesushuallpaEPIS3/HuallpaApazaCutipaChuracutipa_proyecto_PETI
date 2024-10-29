<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Empresa</title>
    <style>
        :root {
            --primary-color: #2563eb;
            --success-color: #22c55e;
            --danger-color: #ef4444;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-700: #374151;
            --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        }

        .container {
            width: 100%;
            max-width: 32rem;
            margin: 0 auto;
        }

        .card {
            background-color: white;
            border-radius: 1rem;
            box-shadow: var(--shadow);
            padding: 2rem;
        }

        .card-header {
            margin-bottom: 2rem;
            text-align: center;
        }

        .card-title {
            color: var(--gray-700);
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            color: var(--gray-700);
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--gray-200);
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.15s ease-in-out;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-control[readonly] {
            background-color: var(--gray-100);
            cursor: not-allowed;
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            flex: 1;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.15s ease-in-out;
        }

        .btn-primary {
            background-color: var(--success-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #16a34a;
        }

        .btn-danger {
            background-color: var(--danger-color);
            color: white;
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }
    </style>
</head>
<body>
    <?php require_once("../head/header.php"); ?>
    <?php
        require_once("../../controller/infoController.php");
        $obj = new infoController();
        $date = $obj->show($_SESSION['user_id']);
    ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Modificar Empresa</h1>
            </div>
            
            <form action="update.php" method="POST">
                <div class="form-group">
                    <label class="form-label" for="id">ID</label>
                    <input class="form-control" type="text" name="id" readonly id="id" value="<?= $date['id'] ?>">
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="inputNombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="inputNombre" value="<?= $date['nombre'] ?>">
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="inputDescripcion">Descripción</label>
                    <input class="form-control" type="text" name="descripcion" id="inputDescripcion" value="<?= $date['descripcion'] ?>">
                </div>
                
                <div class="button-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="show.php?id=<?= $date['id']?>" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <?php require_once("../head/footer.php"); ?>
</body>
</html>
