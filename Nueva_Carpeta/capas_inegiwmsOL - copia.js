// Variables globales para el mapa y las capas
var map = null;
var lyr = null;      // Capa estatal (ejemplo)
var lyr2 = null;     // Capa municipal (ejemplo)
var lyrEstado = null; // Capa para resaltar el Estado (nuevo)
var materials = [];  // Datos de materiales (simulados)

// Función para inicializar el mapa de OpenLayers
function inicializa() {
    map = new ol.Map({
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        target: 'map',
        view: new ol.View({
            center: ol.proj.transform([-102.552784, 23.634501], 'EPSG:4326', 'EPSG:3857'),
            zoom: 5
        })
    });

    var olView = map.getView();
    olView.on('propertychange', olViewPropertyChange);
}

// Manejo de cambios de propiedad en la vista (por ejemplo, zoom)
function olViewPropertyChange(e) {
    if (e.key === 'resolution') {
        olViewResolutionChange(e);
    }
}

function olViewResolutionChange(e) {
    var objzoom = document.getElementById('zoom');
    var zoom = map.getView().getZoom();
    objzoom.innerText = zoom;
    console.log("Zoom actual:", zoom);
}

// Función para activar/desactivar capas de INEGI (por ejemplo, estatal o municipal)
function ActivaCapa(obj) {
    if (obj.id === "chkEstatal") {
        if (document.getElementById('chkEstatal').checked) {
            var url = "https://mapas.inegi.org.mx/geoserver/wms?";
            var ws = "Sitio_Inegi";
            var gslyrname = "Estatal";
            var name = "1_1_1";
            var stylename = "estatal";
            var zoom = 5;
            var visible = true;
            var zIndex = 163;
            var lyrs = (ws !== '' ? ws + ':' + gslyrname : gslyrname);

            lyr = new ol.layer.Tile({
                name: name,
                visible: visible,
                source: new ol.source.TileWMS({
                    preload: Infinity,
                    crossOrigin: 'anonymous',
                    url: url,
                    params: {
                        'LAYERS': lyrs,
                        'TILED': 'true',
                        'FORMAT': 'image/png8',
                        'STYLES': stylename,
                        'SLD': undefined
                    }
                })
            });
            lyr.setZIndex(zIndex);
            map.addLayer(lyr);
            console.log("Capa Estatal activada, Zoom:", map.getView().getZoom());
        } else {
            map.removeLayer(lyr);
            lyr = null;
        }
    } else if (obj.id === "chkMunicipal") {
        if (document.getElementById('chkMunicipal').checked) {
            var url = "https://mapas.inegi.org.mx/geoserver/wms?";
            var ws = "Sitio_Inegi";
            var gslyrname = "mg_Municipal";
            var name = "1_1_2";
            var stylename = "mg_municipal";
            var zoom = 9;
            var visible = true;
            var zIndex = 163;
            var lyrs = (ws !== '' ? ws + ':' + gslyrname : gslyrname);

            lyr2 = new ol.layer.Tile({
                name: name,
                visible: visible,
                source: new ol.source.TileWMS({
                    preload: Infinity,
                    crossOrigin: 'anonymous',
                    url: url,
                    params: {
                        'LAYERS': lyrs,
                        'TILED': 'true',
                        'FORMAT': 'image/png8',
                        'STYLES': stylename,
                        'SLD': undefined
                    }
                })
            });
            lyr2.setZIndex(zIndex);
            map.addLayer(lyr2);
        } else {
            map.removeLayer(lyr2);
            lyr2 = null;
        }
    }
}

// Función para activar una capa que resalte el Estado
function activaCapaEstado(estado) {
    // Si ya existe una capa para resaltar, la remueve
    if (lyrEstado) {
        map.removeLayer(lyrEstado);
        lyrEstado = null;
    }
    var urlEstado = "https://mapas.inegi.org.mx/geoserver/wms?";
    var ws = "Sitio_Inegi";
    var gslyrname = "Estados"; // Capa que contiene la delimitación de estados
    var lyrs = ws + ':' + gslyrname;

    // Definir el SLD para resaltar el estado (por ejemplo, Guanajuato)
    var sld = `<?xml version="1.0" encoding="UTF-8"?>
    <sld:StyledLayerDescriptor xmlns:sld="http://www.opengis.net/sld"
                               xmlns:ogc="http://www.opengis.net/ogc"
                               xmlns="http://www.opengis.net/se" version="1.0.0">
      <sld:NamedLayer>
        <sld:Name>${gslyrname}</sld:Name>
        <sld:UserStyle>
          <sld:Title>Resaltar ${estado}</sld:Title>
          <sld:FeatureTypeStyle>
            <sld:Rule>
              <sld:Name>Resaltar ${estado}</sld:Name>
              <ogc:Filter>
                <ogc:PropertyIsEqualTo>
                  <ogc:PropertyName>Estado</ogc:PropertyName>
                  <ogc:Literal>${estado}</ogc:Literal>
                </ogc:PropertyIsEqualTo>
              </ogc:Filter>
              <sld:PolygonSymbolizer>
                <sld:Fill>
                  <sld:CssParameter name="fill">#0000FF</sld:CssParameter>
                  <sld:CssParameter name="fill-opacity">0.1</sld:CssParameter>
                </sld:Fill>
                <sld:Stroke>
                  <sld:CssParameter name="stroke">#0000FF</sld:CssParameter>
                  <sld:CssParameter name="stroke-width">3</sld:CssParameter>
                </sld:Stroke>
              </sld:PolygonSymbolizer>
            </sld:Rule>
          </sld:FeatureTypeStyle>
        </sld:UserStyle>
      </sld:NamedLayer>
    </sld:StyledLayerDescriptor>`;
    var sldBody = encodeURIComponent(sld);

    lyrEstado = new ol.layer.Tile({
        name: "ResaltarEstado",
        visible: true,
        source: new ol.source.TileWMS({
            preload: Infinity,
            crossOrigin: 'anonymous',
            url: urlEstado,
            params: {
                'LAYERS': lyrs,
                'TILED': 'true',
                'FORMAT': 'image/png8',
                'SLD_BODY': sldBody
            }
        })
    });
    lyrEstado.setZIndex(170);
    map.addLayer(lyrEstado);
}

// Función para cargar los materiales (datos de prueba)
function fetchMaterialData() {
    materials = [
        { id: "1", nombre: "Material A", cantidad: 100, uso: "Uso de Material A", estado: "Guanajuato", fecha: "2025-01-01" },
        { id: "2", nombre: "Material B", cantidad: 200, uso: "Uso de Material B", estado: "Jalisco", fecha: "2025-02-15" },
        { id: "3", nombre: "Material C", cantidad: 50, uso: "Uso de Material C", estado: "Nuevo Leon", fecha: "2025-03-10" }
    ];
    var materialDropdown = document.getElementById('materialDropdown');
    materialDropdown.innerHTML = '<option value="">Selecciona un material...</option>';
    materials.forEach(function(material) {
        var option = document.createElement('option');
        option.value = material.id;
        option.textContent = material.id + " - " + material.nombre;
        materialDropdown.appendChild(option);
    });
}

// Función para mostrar los detalles del material seleccionado y activar la capa de estado
function displaySelectedMaterial() {
    var materialDropdown = document.getElementById('materialDropdown');
    var selectedId = materialDropdown.value;
    if (selectedId) {
        var selectedMaterial = materials.find(function(mat) {
            return mat.id == selectedId;
        });
        if (selectedMaterial) {
            // Rellenar la tabla con los detalles del material, incluyendo el campo "Estado"
            var tableBody = document.querySelector("#materialTable tbody");
            tableBody.innerHTML = `
                <tr>
                    <td>${selectedMaterial.id}</td>
                    <td>${selectedMaterial.nombre}</td>
                    <td>${selectedMaterial.cantidad}</td>
                    <td>${selectedMaterial.uso}</td>
                    <td>${selectedMaterial.estado}</td>
                    <td>${selectedMaterial.fecha}</td>
                </tr>
            `;
            document.getElementById('selectedMaterialContainer').style.display = 'block';
            document.getElementById('reservationForm').style.display = 'block';
            // Si el material tiene un estado definido, activa la capa para resaltar ese estado
            if (selectedMaterial.estado) {
                activaCapaEstado(selectedMaterial.estado);
            }
        }
    } else {
        document.querySelector("#materialTable tbody").innerHTML = '';
        document.getElementById('selectedMaterialContainer').style.display = 'none';
        document.getElementById('reservationForm').style.display = 'none';
        if (lyrEstado) {
            map.removeLayer(lyrEstado);
            lyrEstado = null;
        }
    }
}

// Función para simular el envío de la reserva
function submitReservation(event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
    var quantity = document.getElementById("quantity").value;
    var email = document.getElementById("email").value;
    var reservationDate = document.getElementById("reservationDate").value;
    var materialDropdown = document.getElementById("materialDropdown");
    var selectedMaterialName = materialDropdown.options[materialDropdown.selectedIndex].text;
    if (!materialDropdown.value) {
        alert("Por favor selecciona un material.");
        return;
    }
    fetch("reserva.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            name: name,
            quantity: quantity,
            email: email,
            material: selectedMaterialName,
            reservationDate: reservationDate
        })
    })
    .then(function(response) {
        return response.json();
    })
    .then(function(result) {
        if (result.success) {
            alert("¡Reserva realizada exitosamente!");
            document.getElementById("reservationForm").reset();
        }
    })
    .catch(function(error) {
        console.error("Error al realizar la reserva:", error);
    });
}

// Función onload para inicializar el mapa y cargar los materiales
window.onload = function() {
    fetchMaterialData();
    inicializa();
};
        