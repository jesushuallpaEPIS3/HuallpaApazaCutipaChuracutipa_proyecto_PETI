function actualizarPorcentajes() {
    // Obtener todos los elementos de ventas y porcentajes por su atributo 'name'
    const ventas = document.getElementsByName("ventas");
    const porcentajes = document.getElementsByName("porcentaje");
    const producto = document.getElementsByName("producto");
    const nameproducto = document.getElementsByName("nameproducto");

    let totalVentas = 0;

    // Calcular el total de ventas
    for (let i = 0; i < ventas.length; i++) {
        totalVentas += parseFloat(ventas[i].value) || 0;
    }
    // Cambiar nombres a productos
    for (let i = 0; i < producto.length; i++) {
        console.log("print");
        nameproducto[i].innerText = producto[i].value;
        nameproducto[i+5].innerText = producto[i].value;
        nameproducto[i+10].innerText = producto[i].value;
        nameproducto[i+15].innerText = producto[i].value;
    }

    // Mostrar el total de ventas en la celda correspondiente
    document.getElementById("totalVentas").innerText = totalVentas.toFixed(2);

    // Calcular y actualizar el porcentaje de cada producto
    for (let i = 0; i < ventas.length; i++) {
        let venta = parseFloat(ventas[i].value) || 0;
        let porcentaje = totalVentas ? (venta / totalVentas) * 100 : 0;
        
        // Actualizar la celda de porcentaje correspondiente
        porcentajes[i].innerText = porcentaje.toFixed(2) + "%";
    }
}

function mostarSimboloPorcentaje(){
    const tcm = document.getElementsByName("tcm");
    let suma;
    for (let i = 1; i <= 5; i++) {
        suma = 0;
        let producto = "producto" + i;
        producto = document.getElementsByName(producto);
        for (let j = 0; j < producto.length; j++) {
            if(producto[j].value != ""){
                suma += parseFloat(producto[j].value.replace('%', ''));
                const soloNumeros = producto[j].value.replace(/[^0-9.]/g, '');
                producto[j].value = soloNumeros ? soloNumeros + "%" : "";
            }
            console.log(producto[j].value.replace('%', ''));
        }

        tcm[i-1].innerText = (suma/5 < 20) ? suma/5 + "%" : "20%";
    }
}

function TCM(){
    tcm = document.getElementsByName=("tcm");
    for(let i = 0; i<tcm.length; i++){

    }
}