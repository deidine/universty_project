var wms_layers = [];


        var lyr_OpenStreetMap_0 = new ol.layer.Tile({
            'title': 'OpenStreetMap',
            'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png'
            })
        });
var format_atar_marche_1 = new ol.format.GeoJSON();
var features_atar_marche_1 = format_atar_marche_1.readFeatures(json_atar_marche_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_atar_marche_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_atar_marche_1.addFeatures(features_atar_marche_1);
var lyr_atar_marche_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_atar_marche_1, 
                style: style_atar_marche_1,
                interactive: true,
                title: '<img src="styles/legend/atar_marche_1.png" /> atar_ marche'
            });
var format_maison_2 = new ol.format.GeoJSON();
var features_maison_2 = format_maison_2.readFeatures(json_maison_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_maison_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_maison_2.addFeatures(features_maison_2);
var lyr_maison_2 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_maison_2, 
                style: style_maison_2,
                interactive: true,
                title: '<img src="styles/legend/maison_2.png" /> maison'
            });
var format_airport_3 = new ol.format.GeoJSON();
var features_airport_3 = format_airport_3.readFeatures(json_airport_3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_airport_3 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_airport_3.addFeatures(features_airport_3);
var lyr_airport_3 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_airport_3, 
                style: style_airport_3,
                interactive: true,
                title: '<img src="styles/legend/airport_3.png" /> airport'
            });
var format_bborder_4 = new ol.format.GeoJSON();
var features_bborder_4 = format_bborder_4.readFeatures(json_bborder_4, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_bborder_4 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_bborder_4.addFeatures(features_bborder_4);
var lyr_bborder_4 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_bborder_4, 
                style: style_bborder_4,
                interactive: true,
                title: '<img src="styles/legend/bborder_4.png" /> bborder'
            });
var format_atarroute_5 = new ol.format.GeoJSON();
var features_atarroute_5 = format_atarroute_5.readFeatures(json_atarroute_5, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_atarroute_5 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_atarroute_5.addFeatures(features_atarroute_5);
var lyr_atarroute_5 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_atarroute_5, 
                style: style_atarroute_5,
                interactive: true,
                title: '<img src="styles/legend/atarroute_5.png" /> atar route'
            });
var format_ecole_6 = new ol.format.GeoJSON();
var features_ecole_6 = format_ecole_6.readFeatures(json_ecole_6, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_ecole_6 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_ecole_6.addFeatures(features_ecole_6);
var lyr_ecole_6 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_ecole_6, 
                style: style_ecole_6,
                interactive: true,
                title: '<img src="styles/legend/ecole_6.png" /> ecole'
            });
var format_hotele_7 = new ol.format.GeoJSON();
var features_hotele_7 = format_hotele_7.readFeatures(json_hotele_7, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_hotele_7 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_hotele_7.addFeatures(features_hotele_7);
var lyr_hotele_7 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_hotele_7, 
                style: style_hotele_7,
                interactive: true,
                title: '<img src="styles/legend/hotele_7.png" /> hotele'
            });
var format_route_8 = new ol.format.GeoJSON();
var features_route_8 = format_route_8.readFeatures(json_route_8, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_route_8 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_route_8.addFeatures(features_route_8);
var lyr_route_8 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_route_8, 
                style: style_route_8,
                interactive: true,
                title: '<img src="styles/legend/route_8.png" /> route'
            });
var format_atar__marche_9 = new ol.format.GeoJSON();
var features_atar__marche_9 = format_atar__marche_9.readFeatures(json_atar__marche_9, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_atar__marche_9 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_atar__marche_9.addFeatures(features_atar__marche_9);
var lyr_atar__marche_9 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_atar__marche_9, 
                style: style_atar__marche_9,
                interactive: true,
                title: '<img src="styles/legend/atar__marche_9.png" /> atar__marche'
            });

lyr_OpenStreetMap_0.setVisible(true);lyr_atar_marche_1.setVisible(true);lyr_maison_2.setVisible(true);lyr_airport_3.setVisible(true);lyr_bborder_4.setVisible(true);lyr_atarroute_5.setVisible(true);lyr_ecole_6.setVisible(true);lyr_hotele_7.setVisible(true);lyr_route_8.setVisible(true);lyr_atar__marche_9.setVisible(true);
var layersList = [lyr_OpenStreetMap_0,lyr_atar_marche_1,lyr_maison_2,lyr_airport_3,lyr_bborder_4,lyr_atarroute_5,lyr_ecole_6,lyr_hotele_7,lyr_route_8,lyr_atar__marche_9];
lyr_atar_marche_1.set('fieldAliases', {'nom': 'nom', 'location': 'location', });
lyr_maison_2.set('fieldAliases', {'nom': 'nom', });
lyr_airport_3.set('fieldAliases', {'id': 'id', 'nom': 'nom', });
lyr_bborder_4.set('fieldAliases', {'nom': 'nom', });
lyr_atarroute_5.set('fieldAliases', {'nom': 'nom', });
lyr_ecole_6.set('fieldAliases', {'id': 'id', 'nom': 'nom', 'location': 'location', });
lyr_hotele_7.set('fieldAliases', {'id': 'id', 'nom': 'nom', 'rating': 'rating', });
lyr_route_8.set('fieldAliases', {'id': 'id', 'nom': 'nom', 'location': 'location', });
lyr_atar__marche_9.set('fieldAliases', {'qc_id': 'qc_id', 'nom': 'nom', 'location': 'location', });
lyr_atar_marche_1.set('fieldImages', {'nom': '', 'location': '', });
lyr_maison_2.set('fieldImages', {'nom': '', });
lyr_airport_3.set('fieldImages', {'id': '', 'nom': '', });
lyr_bborder_4.set('fieldImages', {'nom': 'TextEdit', });
lyr_atarroute_5.set('fieldImages', {'nom': 'TextEdit', });
lyr_ecole_6.set('fieldImages', {'id': '', 'nom': '', 'location': '', });
lyr_hotele_7.set('fieldImages', {'id': '', 'nom': '', 'rating': '', });
lyr_route_8.set('fieldImages', {'id': 'TextEdit', 'nom': 'TextEdit', 'location': 'TextEdit', });
lyr_atar__marche_9.set('fieldImages', {'qc_id': '', 'nom': '', 'location': '', });
lyr_atar_marche_1.set('fieldLabels', {'nom': 'no label', 'location': 'no label', });
lyr_maison_2.set('fieldLabels', {'nom': 'no label', });
lyr_airport_3.set('fieldLabels', {'id': 'no label', 'nom': 'no label', });
lyr_bborder_4.set('fieldLabels', {'nom': 'no label', });
lyr_atarroute_5.set('fieldLabels', {'nom': 'no label', });
lyr_ecole_6.set('fieldLabels', {'id': 'no label', 'nom': 'no label', 'location': 'no label', });
lyr_hotele_7.set('fieldLabels', {'id': 'no label', 'nom': 'no label', 'rating': 'no label', });
lyr_route_8.set('fieldLabels', {'id': 'no label', 'nom': 'no label', 'location': 'no label', });
lyr_atar__marche_9.set('fieldLabels', {'qc_id': 'no label', 'nom': 'no label', 'location': 'no label', });
lyr_atar__marche_9.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});