function actualizarTbPrivisionVentas() {
    const ventas = document.getElementsByName("ventas");
    const porcentajes = document.getElementsByName("porcentaje");
    const producto = document.getElementsByName("producto");
    const nameproducto = document.getElementsByName("nameproducto");
    const ventasproduc = document.getElementsByName("ventasproduc");
    let bcgventas = document.getElementsByName("bcgventas");

    let totalVentas = 0;

    for (let i = 0; i < ventas.length; i++) {
        totalVentas += parseFloat(ventas[i].value) || 0;
        ventasproduc[i].innerText = ventas[i].value;
    }
    for (let i = 0; i < producto.length; i++) {
        nameproducto[i].innerText = producto[i].value;
        nameproducto[i+5].innerText = producto[i].value;
        nameproducto[i+10].innerText = producto[i].value;
        nameproducto[i+15].innerText = producto[i].value;
    }

    document.getElementById("totalVentas").innerText = totalVentas.toFixed(0);

    for (let i = 0; i < ventas.length; i++) {
        let venta = parseFloat(ventas[i].value) || 0;
        let porcentaje = totalVentas ? (venta / totalVentas) * 100 : 0;
        
        porcentajes[i].innerText = porcentaje.toFixed(2) + "%";
        bcgventas[i].innerText = porcentaje.toFixed(0) + "%";
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


function simboloPorcentaje(){
    for (let i = 1; i <= 5; i++) {
        let anoproducto = "anoproducto" + i;
        anoproducto = document.getElementsByName(anoproducto);
        for (let j = 0; j < anoproducto.length; j++) {
            if(anoproducto[j].value != ""){
                const soloNumeros = anoproducto[j].value.replace(/[^0-9.]/g, '');
                console.log(soloNumeros);
                anoproducto[j].value = soloNumeros ? soloNumeros + "%" : "";
            }
        }
    }
}

function maxVentaCp(){
    let max;
    let prm = document.getElementsByName("prm");
    const ventas = document.getElementsByName("ventas");
    console.log("VENTAS");
    console.log(ventas[0].value);

    for (let i = 1; i <= 5; i++) {
        let cpproducto = "cpproducto" + i;
        let mayorcpproducto = "mayorcpproducto" + i;
        max = 0;
        cpproducto = document.getElementsByName(cpproducto);
        mayorcpproducto = document.getElementsByName(mayorcpproducto);
        for (let j = 0; j < cpproducto.length; j++) {
            cpventas = parseFloat(cpproducto[j].value);
            if(cpventas != ""){
                (cpventas > max) ? max = cpventas : "";
            }
        }
        mayorcpproducto[0].innerText = max;

        ventasNum = parseFloat(ventas[i-1].value);
        console.log("VENTAS NUMERO");
        console.log(ventasNum);

        if(mayorcpproducto[0].innerText != '0'){
            if(ventasNum / max > 2){
                prm[i-1].innerText = 2
            }else prm[i-1].innerText = (ventasNum / max).toFixed(2);
        } else prm[i-1].innerText = 0.00;
    }
}