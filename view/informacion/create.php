<?php
    require_once("../head/header.php");
?>

<link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>REGISTRAR EMPRESA</h1>
        
        <p>El Plan Estratégico de Tecnologías de la Información – PETI, busca que la Entidad administre de manera eficiente los recursos de tecnología, los sistemas de información y la información, necesarios para la gestión de la organización.</p>
        
        <form action="store.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre de la empresa</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion de la empresa</label>
                <input type="text" class="form-control" name="descripcion" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="../../index.php" >Cancelar</a>
        </form>
    </div>

<?php
    require_once("../head/footer.php");
?>
