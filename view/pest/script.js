var myBarChart; 

function actualizarGrafico(datos) {
    if (myBarChart) {
        myBarChart.destroy();
    }

    var colores = [
        'rgba(54, 162, 235, 0.6)',  
        'rgba(255, 99, 132, 0.6)',  
        'rgba(255, 159, 64, 0.6)',  
        'rgba(75, 192, 192, 0.6)',  
        'rgba(153, 102, 255, 0.6)' 
    ];

    var ctx = document.getElementById('myBarChart').getContext('2d');

    myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['FACTORES SOCIALES Y DEMOGRÁFICOS', 'FACTORES POLÍTICOS', 'FACTORES ECONÓMICOS', 'FACTORES TECNOLÓGICOS', 'FACTORES MEDIO AMBIENTALES'],
            datasets: [{
                label: 'Puntuaciones',
                data: datos,
                backgroundColor: colores, 
                borderColor: colores,   
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Tipología de factores generales externos'  
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Nivel de Impacto de factores generales externos' 
                    },
                    beginAtZero: true 
                }
            },
            plugins: {
                datalabels: {
                    anchor: 'end', 
                    align: 'top',   
                    color: 'black', 
                    font: {
                        weight: 'bold',
                        size: 14
                    },
                    formatter: function(value) {
                        return value; 
                    }
                }
            }
        },
        plugins: [ChartDataLabels]  
    });
}

function generarConclusiones() {
    const puntos = document.querySelectorAll('input[name^="puntos["]');
    const conclusion = document.getElementsByName("conclu");
    console.log("---");

    let sumaGrupo1 = 0;
    let sumaGrupo2 = 0;
    let sumaGrupo3 = 0;
    let sumaGrupo4 = 0;
    let sumaGrupo5 = 0;

    puntos.forEach((radio) => {
        if (radio.checked) {
            const enunciadoIndex = parseInt(radio.name.match(/\d+/)[0]); 
            const valor = parseInt(radio.value);
            if (enunciadoIndex <= 5) {
                sumaGrupo1 += valor;
            } else if (enunciadoIndex <= 10) {
                sumaGrupo2 += valor;
            } else if (enunciadoIndex <= 15) {
                sumaGrupo3 += valor;
            } else if (enunciadoIndex <= 20) {
                sumaGrupo4 += valor;
            } else {
                sumaGrupo5 += valor;
            }
        }
    });
    grupo1 = parseInt((sumaGrupo1/20)*100);
    grupo2 = parseInt((sumaGrupo2/20)*100);
    grupo3 = parseInt((sumaGrupo3/20)*100);
    grupo4 = parseInt((sumaGrupo4/20)*100);
    grupo5 = parseInt((sumaGrupo5/20)*100);

    console.log(`Suma del grupo 1: ${sumaGrupo1}`);
    console.log(`Suma del grupo 2: ${sumaGrupo2}`);
    console.log(`Suma del grupo 3: ${sumaGrupo3}`);
    console.log(`Suma del grupo 4: ${sumaGrupo4}`);
    console.log(`Suma del grupo 5: ${sumaGrupo5}`);

    console.log("---");

    (grupo1>=70) ? conclusion[0].innerText = "HAY UN NOTABLE IMPACTO DE FACTORES SOCIALES Y DEMOGRÁFICOS EN EL FUNCIONAMIENTO DE LA EMPRESA" : conclusion[0].innerText = "NO HAY UN NOTABLE IMPACTO DE FACTORES SOCIALES Y DEMOGRÁFICOS EN EL FUNCIONAMIENTO DE LA EMPRESA";

    (grupo2>=70) ? conclusion[1].innerText = "HAY UN NOTABLE IMPACTO DE FACTORES POLÍTICOS EN EL FUNCIONAMIENTO DE LA EMPRESA" : conclusion[1].innerText = "NO HAY UN NOTABLE IMPACTO DE FACTORES POLÍTICOS EN EL FUNCIONAMIENTO DE LA EMPRESA";

    (grupo3>=70) ? conclusion[2].innerText = "HAY UN NOTABLE IMPACTO DE FACTORES ECONÓMICOS EN EL FUNCIONAMIENTO DE LA EMPRESA" : conclusion[2].innerText = "NO HAY UN NOTABLE IMPACTO DE FACTORES ECONÓMICOS EN EL FUNCIONAMIENTO DE LA EMPRESA";

    (grupo4>=70) ? conclusion[3].innerText = "HAY UN NOTABLE IMPACTO DE FACTORES TECNOLÓGICOS EN EL FUNCIONAMIENTO DE LA EMPRESA" : conclusion[3].innerText = "NO HAY UN NOTABLE IMPACTO DE FACTORES TECNOLÓGICOS EN EL FUNCIONAMIENTO DE LA EMPRESA";

    (grupo5>=70) ? conclusion[4].innerText = "HAY UN NOTABLE IMPACTO DEL FACTOR MEDIO AMBIENTAL EN EL FUNCIONAMIENTO DE LA EMPRESA" : conclusion[4].innerText = "NO HAY UN NOTABLE IMPACTO DEL FACTOR MEDIO AMBIENTAL EN EL FUNCIONAMIENTO DE LA EMPRESA";
    actualizarGrafico([grupo1,grupo2,grupo3,grupo4,grupo5]);
}

function cargarPagina() {
    generarConclusiones();
}

window.onload = cargarPagina;