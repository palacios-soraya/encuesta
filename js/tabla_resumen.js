$.ajax({
    type: "POST",
    url: "backend/funciones.php",
    dataType: 'json',
    data: {tipo: 'tabla_resumen'}
})
.then(function (event) {   
    grid = new dhx.Grid("grid", {
        columns: [
            { id: "nombre", header: [{ text: "Nombre" }] },
            { id: "genero", header: [{ text: "Genero" }] },
            { id: "hobby", header: [{ text: "Hobby" }] },
            { id: "tiempo_mensual_dedicado", header: [{ text: "Tiempo Mensual Dedicado (Hs)" }] },
        ],
        headerRowHeight: 50,
        data: event,
        adjust: true
    });
});   


function exportXlsx() {
    grid.export.xlsx({
        url: "//export.dhtmlx.com/excel"
    });
};

function exportCsv() {
    grid.export.csv();
}