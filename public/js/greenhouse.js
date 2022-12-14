import { map } from './mapbox.js'
import * as utils from './utils.js';

var name;

utils.fitView();

map.on('load', () => {
    $('#idGreenhouse').each(function () {
        $(this).find('td').each(function (i) {
            var arr;
            var coordinates = [];

            if ($(this)[0].id === "coordinates") {
                arr = $(this)[0].innerText.split(',').map(i => parseFloat(i));

                for (let i = 0; i < arr.length; i++) {
                    coordinates.push([arr[i], arr[i + 1]]);
                    i++;
                }
            }

            if ($(this)[0].id === "name") {
                name = $(this)[0].innerText;
            }

            // Add a data source containing GeoJSON data.
            map.addSource(`greenhouse${i}`, {
                'type': 'geojson',
                'data': {
                    'type': 'Feature',
                    'properties': {
                        'name': `${name}`
                    },
                    'geometry': {
                        'type': 'Polygon',
                        // These coordinates outline Maine.
                        'coordinates': [coordinates]
                    }
                }
            });

            // Add a new layer to visualize the polygon.
            map.addLayer({
                'id': `greenhouse${i}`,
                'type': 'fill',
                'source': `greenhouse${i}`, // reference the data source
                'layout': {},
                'paint': {
                    'fill-color': '#FE813B',
                    'fill-opacity': 0.3
                }
            });

            // Add an outline around the polygon.
            map.addLayer({
                'id': `outlineGreenhouse${i}`,
                'type': 'line',
                'source': `greenhouse${i}`,
                'layout': {},
                'paint': {
                    'line-color': '#FE813B',
                    'line-width': 3,
                },
            });
        })
    });
});

/* Filter greenhouse features */
map.on('load', () => {
    const filterEl = document.getElementById('inputSearch');
    var features, uniqueFeatures;

    map.on('mousemove', () => {
        features = map.queryRenderedFeatures();
        if (features) {
            uniqueFeatures = utils.getUniqueFeatures(features);
        }
    });

    filterEl.addEventListener('keyup', (e) => {
        utils.filterFeatures(e, uniqueFeatures, []);
    });
});