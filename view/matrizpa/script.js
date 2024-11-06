function actualizarTbPrivisionVentas() {
    const ventas = document.getElementsByName("ventas[]");
    const porcentajes = document.getElementsByName("porcentaje");
    const producto = document.getElementsByName("producto[]");
    const nameproducto = document.getElementsByName("nameproducto");
    const ventasproduc = document.getElementsByName("ventasproduc");
    let bcgventas = document.getElementsByName("bcgventas");

    let totalVentas = 0;

    for (let i = 0; i < ventas.length; i++) {
        console.log(ventas[i].value);
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
        let producto = "producto" + i + "[]";
        producto = document.getElementsByName(producto);
        for (let j = 0; j < producto.length; j++) {
            if(producto[j].value != ""){
                suma += parseFloat(producto[j].value.replace('%', ''));
                // console.log("---");
                // console.log(producto[j].value.replace('%', ''));
                // console.log("---");
                const soloNumeros = producto[j].value.replace(/[^0-9.]/g, '');
                producto[j].value = soloNumeros ? soloNumeros + "%" : "";
            }
            // console.log(producto[j].value.replace('%', ''));
        }

        tcm[i-1].innerText = (suma/5 < 20) ? suma/5 + "%" : "20%";
    }
}


function simboloPorcentaje(){
    for (let i = 1; i <= 5; i++) {
        let anoproducto = "anoproducto" + i + "[]";
        anoproducto = document.getElementsByName(anoproducto);
        for (let j = 0; j < anoproducto.length; j++) {
            if(anoproducto[j].value != ""){
                const soloNumeros = anoproducto[j].value.replace(/[^0-9.]/g, '');
                //console.log(soloNumeros);
                anoproducto[j].value = soloNumeros ? soloNumeros + "%" : "";
            }
        }
    }
}

function maxVentaCp(){
    let max;
    let prm = document.getElementsByName("prm");
    const ventas = document.getElementsByName("ventas[]");
    // console.log("VENTAS");
    // console.log(ventas[0].value);

    for (let i = 1; i <= 5; i++) {
        let cpproducto = "cpproducto" + i + "[]";
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
        // console.log("VENTAS NUMERO");
        // console.log(ventasNum);

        if(mayorcpproducto[0].innerText != '0'){
            if(ventasNum / max > 2){
                prm[i-1].innerText = 2
            }else prm[i-1].innerText = (ventasNum / max).toFixed(2);
        } else prm[i-1].innerText = 0.00;
    }
}
function generarMatrizBCG() {
    function obtenerDatosTabla() {
      const productos = [];
      
      const nombres = document.querySelectorAll("[name='producto[]']");
      
      const tcmValores = document.querySelectorAll("[name='tcm']");
      const prmValores = document.querySelectorAll("[name='prm']");
      
      nombres.forEach((nombre, i) => {
        const tcm = parseFloat(tcmValores[i].innerText.replace('%', ''));
        
        const prm = parseFloat(prmValores[i].innerText);
        
        productos.push({
          nombre: nombre.value,
          tcm: tcm,
          prm: prm
        });
      });
      
      return productos;
    }
  
    const width = 600;
    const height = 600;
    const halfWidth = width / 2;
    const halfHeight = height / 2;
    const bolitaSize = 90;
  
    document.querySelectorAll(".product").forEach((bolita) => bolita.remove());
  
    const colores = ["#FF6B6B", "#4ECDC4", "#FFD93D", "#1A535C", "#FF6F61"];
  
    const productos = obtenerDatosTabla();
    
    productos.forEach((producto, index) => {
      const bolita = document.createElement("div");
      bolita.className = "product";
      bolita.title = producto.nombre;
      bolita.textContent = producto.nombre;
  
      bolita.style.width = `${bolitaSize}px`;
      bolita.style.height = `${bolitaSize}px`;
      bolita.style.fontSize = "0.9rem";
      bolita.style.lineHeight = "1.2rem";
      bolita.style.display = "flex";
      bolita.style.alignItems = "center";
      bolita.style.justifyContent = "center";
  
      bolita.style.backgroundColor = colores[index % colores.length];
  
      let x = (producto.prm / 2) * halfWidth;
      let y = (1 - (producto.tcm / 20)) * halfHeight;
  
      x = Math.min(Math.max(x, bolitaSize / 2), halfWidth - bolitaSize / 2); 
      y = Math.min(Math.max(y, bolitaSize / 2), halfHeight - bolitaSize / 2); 
  
      if (producto.tcm > 10 && producto.prm > 1) {
        bolita.style.left = `${halfWidth + x - bolitaSize / 2}px`;
        bolita.style.top = `${y - bolitaSize / 2}px`;
      } else if (producto.tcm > 10 && producto.prm <= 1) {
        bolita.style.left = `${x - bolitaSize / 2}px`;
        bolita.style.top = `${y - bolitaSize / 2}px`;
      } else if (producto.tcm <= 10 && producto.prm > 1) {
        bolita.style.left = `${halfWidth + x - bolitaSize / 2}px`;
        bolita.style.top = `${halfHeight + y - bolitaSize / 2}px`;
      } else {
        bolita.style.left = `${x - bolitaSize / 2}px`;
        bolita.style.top = `${halfHeight + y - bolitaSize / 2}px`;
      }
  
      document.querySelector(".bcg-container").appendChild(bolita);
    });
  }

function cargarPagina() {
     actualizarTbPrivisionVentas();
     mostarSimboloPorcentaje();
     simboloPorcentaje();
     maxVentaCp();
     generarMatrizBCG();
 }

window.onload = cargarPagina;

// window.onload = function() {
// actualizarTbPrivisionVentas();
// mostrarSimboloPorcentaje();
// simboloPorcentaje();
// maxVentaCp();
// generarMatrizBCG();
// };
