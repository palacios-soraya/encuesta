//GRAFICO DE NOMBRES
const config_nombre = {
    type: "bar",
    css: "dhx_widget--bg_white dhx_widget--bordered",
    scales: {
        "bottom": {
            text: "nombre"
        },
        "left": {
            maxTicks: 10,
            max: 30,
            min: 0
        }
    },
    series: [
        {
            id:"total",
            type: "area",
            fill: "lightgreen",
            color: "green",
            value:"total"
        },
        {
            id: "nombre",
            value: "cantidad",
            color: "#81C4E8",
            fill: "#81C4E8"
        },
        
    ],
    legend: {
        series: ["nombre","total"],
        halign: "right",
        valign: "top"
    }
};


const chart_nombre = new dhx.Chart("chart_nombre", config_nombre);
$.ajax({
    type: "POST",
    url: "backend/funciones.php",
    dataType: 'json',
    data: {tipo: 'grafico_nombre'}
})
.then(function (event) {   
    chart_nombre.data.parse(event);
});   

//GRAFICO DE GENEROS
const config_genero = {
    type: "pie",
    css: "dhx_widget--bg_white dhx_widget--bordered",
    series: [
        {
            value: "value",
            color: "color",
            text: "genero",
            stroke: "#FFFFFF",
            strokeWidth: 2
        }
    ],
    legend: {
        values: {
            id: "value",
            text: "id",
            color: "color"
        },
        halign: "right",
        valign: "top"
    }
};

const chart_genero = new dhx.Chart("chart_genero", config_genero);
$.ajax({
    type: "POST",
    url: "backend/funciones.php",
    dataType: 'json',
    data: {tipo: 'grafico_genero'}
})
.then(function (event) {   
    chart_genero.data.parse(event);
});   

//GRAFICO DE HOBBY
const config_hobby = {
    type: "donut",
    css: "dhx_widget--bg_white dhx_widget--bordered",
    series: [
        {
            value: "value",
            color: "color",
            text: "hobby"
        }
    ],
    legend: {
        values: {
            id: "value",
            text: "id",
            color: "color"
        },
        halign: "right",
        valign: "top"
    }
};

const chart_hobby = new dhx.Chart("chart_hobby", config_hobby);
$.ajax({
    type: "POST",
    url: "backend/funciones.php",
    dataType: 'json',
    data: {tipo: 'grafico_hobby'}
})
.then(function (event) {   
    chart_hobby.data.parse(event);
});   

//GRAFICO DE TIEMPO DEDICADO
const config_tiempo_dedicado = {
    type: "spline",
    css: "dhx_widget--bg_white dhx_widget--bordered",
    scales: {
        "bottom": {
            text: "tiempo"
        },
        "left": {
            maxTicks: 10,
            max: 30,
            min: 0
        }
    },
    series: [
        {
            id:"promedio",
            type: "area",
            fill: "lightgreen",
            color: "green",
            value:"promedio"
        },
        {
            id: "tiempo",
            value: "tiempo",
            color: "#81C4E8",
            fill: "#81C4E8",
        },
        
    ],
    legend: {
        series: ["tiempo","promedio"],
        form: "circle",
        halign: "right",
        valign: "top"
    }
};


const chart_tiempo_dedicado = new dhx.Chart("chart_tiempo_dedicado", config_tiempo_dedicado);
$.ajax({
    type: "POST",
    url: "backend/funciones.php",
    dataType: 'json',
    data: {tipo: 'grafico_tiempo_dedicado'}
})
.then(function (event) {   
    chart_tiempo_dedicado.data.parse(event);
});   