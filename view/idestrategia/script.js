// Función genérica para actualizar los totales de cualquier tabla
function actualizarTotales(prefix, prefix2) {
    const total = document.getElementById(prefix); // Total general de la tabla
    let sumaTotal = 0;

    // Recorremos las columnas (FO1, FO2, FO3, FO4) de manera dinámica
    for (let i = 1; i <= 4; i++) {
        const columna = `${prefix}${i}`;
        const inputs = document.getElementsByName(`${columna}[]`);
        let sumaColumna = 0;

        // Sumar los valores de los inputs de la columna
        for (let j = 0; j < inputs.length; j++) {
            if (inputs[j].value !== "") {
                sumaColumna += parseInt(inputs[j].value);
            }
        }

        // Actualizamos el total de la columna
        document.getElementById(columna).innerText = sumaColumna;
        sumaTotal += sumaColumna; // Añadir al total general
    }

    // Actualizamos el total general
    total.innerText = sumaTotal;
    document.getElementById(prefix2).innerText = sumaTotal;
}

function actualizarFO() {
    actualizarTotales("FO","FOtotal");
}
function actualizarAF() {
    actualizarTotales("AF","AFtotal");
}
function actualizarFD() {
    actualizarTotales("FD","FDtotal");
}
function actualizarOD() {
    actualizarTotales("OD","ODtotal");
}
