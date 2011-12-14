<html>
            <head>
                <title>HTML5 Worldmap :: by @janim007 v0.1</title>
                <script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript" src="js/kinetic-v2.1.1.js"></script>
                <script type="text/javascript" src="js/country_codes.js"></script>
                <script type="text/javascript" src="js/worldmap.js"></script>                               
                <style type="text/css">
                    body{position: relative}
                    .tooltip{width:auto; height:auto; background:#fff; display:none; position:absolute; z-index: 11111; border: 1px solid #07273E; border-radius:7px}
                    .tooltip .title{background: #154a70; color:#fff; padding:5px; font-size:14px}
                    .tooltip .content{ padding:5px; font-size:12px; color:#07273E;}
                </style>
            </head>
            <body  onmousedown="return false;">
                <div id="countriesHolder">                    
                    
                    <div id="worldmap" width="1000" height="400"></div>
                </div>
                <div class="tooltip">
                    <div class="title">Null</div>
                    <div class="content">Null content</div>
                </div>
                <script type="text/javascript">
                    html5WorldMap.WorldMap({
                        id: "worldmap",
                        bgcolor: "#c1e6f7",
                        fgcolor: "#ededed",
                        bordercolor: "#d2d3d4",
                        borderwidth: 1,
                        padding: 20,
                        <?php if ($_GET['zoomTo'] == '') { echo 'zoom:"",'; } else { echo 'zoom:"' . $_GET['zoomTo'] . '",zoomed:true,'; } ?>detail: { "us": "#0c5c7d"}
                    });
                </script>
            </body>
        </html>