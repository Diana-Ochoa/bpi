<?php include_once("inc.core.php"); ?>
<?php include(_includes_."inc.head.php"); ?>
<?php include(_includes_."inc.top.php"); ?>
<?php include(_includes_."inc.slidercontactanos.php"); ?>

<section id="cuerpo_bpi">
	<div id="bpi-wrap">
		
		<div class="c_puntos" data-aos="fade-down">
				<h1 class="azul1">Puntos de atención</h1>
		</div>

		<div class="c_mapstext" data-aos="fade-down">
			<div class="c_texta">
				<div class="fase background_gris1 azul2 fontweight500">
					<a href="https://bit.ly/Invierte_Habita" target="_blank">
						<i class="fab fa-whatsapp"></i>
						Whatsapp
					</a>
				</div>
				<div class="fase background_gris1 azul2 fontweight500">
					<a href="tel:+013911473" target="_blank">
						<i class="far fa-phone-rotary"></i>
						01  3911 473
					</a>
				</div>
				<div class="fase background_gris1 azul2 fontweight500">
					<a href="mailto:comercial@bpi.com.pe" target="_blank">
						<i class="fal fa-envelope-open-text"></i>
						comercial@bpi.com.pe
					</a>
				</div>
				
			</div>

			<div id="map"></div>
			<link rel='stylesheet' href='https://unpkg.com/leaflet@1.4.0/dist/leaflet.css'>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js'></script>

<?php
/** ____________________________________________________________________________________________________________________________________________________________________________________ **/
function isMobileDevicemaps() {
  return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

  if(isMobileDevicemaps()){
/** ____________________________________________________________________________________________________________________________________________________________________________________ **/
?>
			<script id="rendered-js">
			var markers = [
			  ["Oficina principal<br/>Dirección: Av. Javier Prado 476 Piso 21<br/>San Isidro", -12.0918985, -77.0306681],
			  ["Dirección: Av. El Derby 250 Piso 12<br/>Santiago de Surco<br/><span style='color:#FF0000;'>Previa cita</span>", -12.0979414, -76.974642],
			  ["Dirección Av. Paseo de la República 5985 Piso 10<br/>Miraflores<br/><span style='color:#FF0000;'>Previa cita</span>", -12.1268129, -77.0255281]
			];
			var zoom = 12;

			var map = L.map('map').setView([-12.1047658, -77.0018126], zoom);

			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);

			for (var i = 0; i < markers.length; i++) {
			  marker = new L.marker([markers[i][1],markers[i][2]])
			    .bindPopup(markers[i][0])
			    .addTo(map);
			}

			map.scrollWheelZoom.disable();
			map.on('focus', () => { map.scrollWheelZoom.enable(); });
			map.on('blur', () => { map.scrollWheelZoom.disable(); });	
			</script>
<?php
/** ____________________________________________________________________________________________________________________________________________________________________________________ **/
  } else {
/** ____________________________________________________________________________________________________________________________________________________________________________________ **/
?>
			<script id="rendered-js">
			var markers = [
			  ["Oficina principal<br/>Dirección: Av. Javier Prado 476 Piso 21<br/>San Isidro", -12.0918985, -77.0306681],
			  ["Dirección: Av. El Derby 250 Piso 12<br/>Santiago de Surco<br/><span style='color:#FF0000;'>Previa cita</span>", -12.0979414, -76.974642],
			  ["Dirección Av. Paseo de la República 5985 Piso 10<br/>Miraflores<br/><span style='color:#FF0000;'>Previa cita</span>", -12.1268129, -77.0255281]
			];
			var zoom = 13;

			var map = L.map('map').setView([-12.1047658, -77.0018126], zoom);

			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);

			for (var i = 0; i < markers.length; i++) {
			  marker = new L.marker([markers[i][1],markers[i][2]])
			    .bindPopup(markers[i][0])
			    .addTo(map);
			}

			map.scrollWheelZoom.disable();
			map.on('focus', () => { map.scrollWheelZoom.enable(); });
			map.on('blur', () => { map.scrollWheelZoom.disable(); });	
			</script>
<?php
/** ____________________________________________________________________________________________________________________________________________________________________________________ **/
  }
/** ____________________________________________________________________________________________________________________________________________________________________________________ **/
?>

		</div>
	</div>
</section>


<section id="cuerpo_bpi" class="background_gris1">
	<div id="bpi-wrap">

		<div class="c_puntos" data-aos="fade-down">
				<h1 class="azul1">Redes sociales</h1>
		</div>

		<div class="c_redes">
			





		<div class="n2-section-smartslider " role="region" aria-label="Slider"><style>div#n2-ss-10{width:730px;float:left;margin:0px 0px 0px 0px;}.x-rtl div#n2-ss-10{float:right;}div#n2-ss-10 .n2-ss-slider-1{position:relative;height:170px;}div#n2-ss-10 .n2-ss-slider-2{position:relative;height:300px;overflow:hidden;border-style:solid;border-width:0px;border-color:#3e3e3e;border-color:RGBA(62,62,62,1);border-radius:0px;background-clip:padding-box;background-repeat:repeat;background-position:50% 50%;background-size:cover;background-attachment:scroll;background-color:transparent;background-color:transparent;z-index:1;}div#n2-ss-10 .n-particles-js-canvas-el{position:absolute;left:0;top:0;width:100%;height:100%;z-index:12;}div#n2-ss-10 .n2-ss-slider-3{position:relative;width:100%;height:100%;overflow:hidden;z-index:20;}div#n2-ss-10 .n2-ss-slider-pane{position:relative;width:100%;height:100%;overflow:hidden;}div#n2-ss-10 .n2-ss-slider-pane-single{position:relative;width:100%;overflow:hidden;}div#n2-ss-10 .n2-ss-slider-pane-single:after{content:"";display:block;clear:both;}div#n2-ss-10 .n2-ss-slider-pipeline{height:100%;width:100000%;float:left;position:relative !important;transform-style:preserve-3d;}[dir="rtl"] div#n2-ss-10 .n2-ss-slider-pipeline{float:right;}.x-msie div#n2-ss-10 .n2-ss-slider-pipeline{perspective:1000px;backface-visibility:visible;transform-origin:50% 50% 0;}div#n2-ss-10 .n2-ss-slide-group{position:absolute;left:0;top:0;width:100%;height:100%;}div#n2-ss-10 .n2-ss-slide{position:relative;width:225px;height:300px;float:left;display:block;border-radius:0px;background-clip:padding-box;background-color:#fff;background-color:RGBA(255,255,255,1);z-index:1;}[dir="rtl"] div#n2-ss-10 .n2-ss-slide{float:right;}div#n2-ss-10 .n2-ss-layers-container{position:relative;width:225px;height:300px;}div#n2-ss-10 .n2-ss-slide{perspective:1000px;}div#n2-ss-10[data-ie] .n2-ss-slide{perspective:none;transform:perspective(1000px);}div#n2-ss-10 .n2-ss-slide-active{z-index:3;display:block;}div#n2-ss-10 .n2-ss-layer{-webkit-backface-visibility:hidden;}div#n2-ss-10 .n2-ss-control-bullet{visibility:hidden;text-align:center;justify-content:center;}div#n2-ss-10 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize{width:100%;}div#n2-ss-10 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize{height:100%;flex-flow:column;}div#n2-ss-10 .nextend-bullet-bar{display:inline-flex;visibility:visible;align-items:center;flex-wrap:wrap;}div#n2-ss-10 .n2-bar-justify-content-left{justify-content:flex-start;}div#n2-ss-10 .n2-bar-justify-content-center{justify-content:center;}div#n2-ss-10 .n2-bar-justify-content-right{justify-content:flex-end;}div#n2-ss-10 .n2-ss-control-bullet-vertical > .nextend-bullet-bar{flex-flow:column;}div#n2-ss-10 .n2-ss-control-bullet-fullsize > .nextend-bullet-bar{display:flex;}div#n2-ss-10 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize > .nextend-bullet-bar{flex:1 1 auto;}div#n2-ss-10 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize > .nextend-bullet-bar{height:100%;}div#n2-ss-10 .nextend-bullet-bar .n2-bullet{cursor:pointer;transition:background-color 0.4s;}div#n2-ss-10 .nextend-bullet-bar .n2-bullet.n2-active{cursor:default;}div#n2-ss-10 div.n2-ss-bullet-thumbnail-container{position:absolute;opacity:0;z-index:10000000;}div#n2-ss-10 .n2-ss-bullet-thumbnail-container .n2-ss-bullet-thumbnail{background-size:cover;background-repeat:no-repeat;background-position:center;}div#n2-ss-10 .n2-font-e83a92dcd704a8fbadf5758109bb967d-hover{font-family: 'Rubik','sans-serif';color: #043178;font-size:150%;text-shadow: none;line-height: 1.5;font-weight: normal;font-style: normal;text-decoration: none;text-align: center;letter-spacing: normal;word-spacing: normal;text-transform: none;font-weight: 400;}div#n2-ss-10 .n2-font-6ed4ccd0c0b64292e9a0d49f76e4fc0c-paragraph{font-family: 'Roboto','sans-serif';color: #282828;font-size:87.5%;text-shadow: none;line-height: 1;font-weight: normal;font-style: normal;text-decoration: none;text-align: center;letter-spacing: normal;word-spacing: normal;text-transform: none;font-weight: 400;}div#n2-ss-10 .n2-font-6ed4ccd0c0b64292e9a0d49f76e4fc0c-paragraph a, div#n2-ss-10 .n2-font-6ed4ccd0c0b64292e9a0d49f76e4fc0c-paragraph a:FOCUS{font-family: 'Roboto','sans-serif';color: #1890d7;font-size:100%;text-shadow: none;line-height: 1;font-weight: normal;font-style: normal;text-decoration: none;text-align: center;letter-spacing: normal;word-spacing: normal;text-transform: none;font-weight: 400;}div#n2-ss-10 .n2-font-6ed4ccd0c0b64292e9a0d49f76e4fc0c-paragraph a:HOVER, div#n2-ss-10 .n2-font-6ed4ccd0c0b64292e9a0d49f76e4fc0c-paragraph a:ACTIVE{font-family: 'Roboto','sans-serif';color: #1890d7;font-size:100%;text-shadow: none;line-height: 1;font-weight: normal;font-style: normal;text-decoration: none;text-align: center;letter-spacing: normal;word-spacing: normal;text-transform: none;font-weight: 400;}div#n2-ss-10 .n2-style-2a0a200d6a6e1fade27fb9c90af83812-dot{background: #000000;background: RGBA(0,0,0,0.67);opacity:1;padding:5px 5px 5px 5px ;box-shadow: none;border-width: 0px;border-style: solid;border-color: #000000; border-color: RGBA(0,0,0,1);border-radius:50px;margin: 4px;}div#n2-ss-10 .n2-style-2a0a200d6a6e1fade27fb9c90af83812-dot.n2-active, div#n2-ss-10 .n2-style-2a0a200d6a6e1fade27fb9c90af83812-dot:HOVER, div#n2-ss-10 .n2-style-2a0a200d6a6e1fade27fb9c90af83812-dot:FOCUS{background: #043178;}</style><div id="n2-ss-10-align" class="n2-ss-align"><div class="n2-padding"><div id="n2-ss-10" data-creator="Smart Slider 3" class="n2-ss-slider n2-ow n2-has-hover n2notransition  n2-ss-load-fade " data-minFontSizedesktopPortrait="1" data-minFontSizedesktopLandscape="1" data-minFontSizetabletPortrait="1" data-minFontSizetabletLandscape="1" data-minFontSizemobilePortrait="1" data-minFontSizemobileLandscape="1" style="font-size: 1rem;" data-fontsize="16">        <div class="n2-ss-slider-1 n2-ss-swipe-element n2-ow">
    <div class="n2-ss-slider-2 n2-ow" style="">
    <div class="n2-ss-slider-3 n2-ow">
            <div class="n2-ss-slider-pane n2-ow">
<div class="n2-ss-slide-group n2-ow "><div data-first="1" data-slide-duration="0" data-id="21" data-title="Compromiso" style="" class=" n2-ss-slide  n2-ss-slide-21 n2-ss-canvas n2-ow"><div class="n2-ss-slide-background n2-ow" data-mode="fill"><div class="n2-ss-slide-background-color" style="background-color: #f4f4f4;"></div></div><div class="n2-ss-layers-container n2-ow" data-csstextalign="center" style=""><div class="n2-ss-layer n2-ow" style="left:0px;top:-66px;width:168px;height:auto;overflow:visible;" data-pm="absolute" data-responsiveposition="1" data-desktopportraitleft="0" data-desktopportraittop="-66" data-responsivesize="1" data-desktopportraitwidth="168" data-desktopportraitheight="auto" data-desktopportraitalign="center" data-desktopportraitvalign="middle" data-parentid="" data-desktopportraitparentalign="center" data-desktopportraitparentvalign="middle" data-sstype="layer" data-rotation="0" data-animv2="{&quot;basic&quot;:{&quot;in&quot;:{&quot;type&quot;:&quot;basic&quot;,&quot;name&quot;:&quot;Top&quot;,&quot;keyFrames&quot;:[{&quot;y&quot;:400}]}}}" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><a href="https://www.facebook.com/bpitodosganan/" target="_blank"><div class=" n2-ss-img-wrapper n2-ss-item-content n2-ow" style="overflow:hidden;"><img src="<?=_sliderimages_?>c_face.png" id="n2-ss-10item2" alt="" style="display: inline-block; max-width: 100%; width: 100%;height: auto;" class=" n2-ow" data-no-lazy="1" data-hack="data-lazy-src" /></div></a></div></div></div></div><div class="n2-ss-slide-group n2-ow "><div data-slide-duration="0" data-id="24" data-title="Estabilidad" style="" class=" n2-ss-slide  n2-ss-slide-24 n2-ss-canvas n2-ow"><div class="n2-ss-slide-background n2-ow" data-mode="fill"><div class="n2-ss-slide-background-color" style="background-color: #f4f4f4;"></div></div><div class="n2-ss-layers-container n2-ow" data-csstextalign="center" style=""><div class="n2-ss-layer n2-ow" style="left:0px;top:-66px;width:168px;height:auto;overflow:visible;" data-pm="absolute" data-responsiveposition="1" data-desktopportraitleft="0" data-desktopportraittop="-66" data-responsivesize="1" data-desktopportraitwidth="168" data-desktopportraitheight="auto" data-desktopportraitalign="center" data-desktopportraitvalign="middle" data-parentid="" data-desktopportraitparentalign="center" data-desktopportraitparentvalign="middle" data-sstype="layer" data-rotation="0" data-animv2="{&quot;basic&quot;:{&quot;in&quot;:{&quot;type&quot;:&quot;basic&quot;,&quot;name&quot;:&quot;Top&quot;,&quot;keyFrames&quot;:[{&quot;y&quot;:400}]}}}" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><a href="https://www.linkedin.com/company/bpi-banco-peruano-de-inversiones" target="_blank"><div class=" n2-ss-img-wrapper n2-ss-item-content n2-ow" style="overflow:hidden;"><img src="<?=_sliderimages_?>c_in.png" id="n2-ss-10item8" alt="" style="display: inline-block; max-width: 100%; width: 100%;height: auto;" class=" n2-ow" data-no-lazy="1" data-hack="data-lazy-src" /></div></a></div></div></div></div><div class="n2-ss-slide-group n2-ow "><div data-slide-duration="0" data-id="25" data-title="Transparencia" style="" class=" n2-ss-slide  n2-ss-slide-25 n2-ss-canvas n2-ow"><div class="n2-ss-slide-background n2-ow" data-mode="fill"><div class="n2-ss-slide-background-color" style="background-color: #f4f4f4;"></div></div><div class="n2-ss-layers-container n2-ow" data-csstextalign="center" style=""><div class="n2-ss-layer n2-ow" style="left:0px;top:-66px;width:168px;height:auto;overflow:visible;" data-pm="absolute" data-responsiveposition="1" data-desktopportraitleft="0" data-desktopportraittop="-66" data-responsivesize="1" data-desktopportraitwidth="168" data-desktopportraitheight="auto" data-desktopportraitalign="center" data-desktopportraitvalign="middle" data-parentid="" data-desktopportraitparentalign="center" data-desktopportraitparentvalign="middle" data-sstype="layer" data-rotation="0" data-animv2="{&quot;basic&quot;:{&quot;in&quot;:{&quot;type&quot;:&quot;basic&quot;,&quot;name&quot;:&quot;Top&quot;,&quot;keyFrames&quot;:[{&quot;y&quot;:400}]}}}" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-plugin="rendered"><a href="https://instagram.com/bpi_todosganan?igshid=12aq6qsq7rrx8" target="_blank"><div class=" n2-ss-img-wrapper n2-ss-item-content n2-ow" style="overflow:hidden;"><img src="<?=_sliderimages_?>c_insta.png" id="n2-ss-10item11" alt="" style="display: inline-block; max-width: 100%; width: 100%;height: auto;" class=" n2-ow" data-no-lazy="1" data-hack="data-lazy-src" /></div></a></div></div></div></div>                    </div>
                </div>
                </div>
                </div>
<div data-position="below" data-offset="10" class="n2-ss-widget n2-ss-widget-display-desktop n2-ss-widget-display-tablet n2-ss-widget-display-mobile  n2-flex n2-ss-control-bullet n2-ss-control-bullet-horizontal" style="margin-top:10px;"><div class=" nextend-bullet-bar n2-ow n2-bar-justify-content-center"></div></div>
</div><div class="n2-clear"></div><div id="n2-ss-10-spinner" style="display: none;"><div><div class="n2-ss-spinner-simple-white-container"><div class="n2-ss-spinner-simple-white"></div></div></div></div></div></div><div id="n2-ss-10-placeholder" style="position: relative;z-index:2;background-color:RGBA(0,0,0,0);max-height:300px; background-color:RGBA(255,255,255,0);"><img style="width: 100%; max-width:730px; display: block;opacity:0;margin:0px;" class="n2-ow" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMCIgd2lkdGg9IjEwMTAiIGhlaWdodD0iMzAwIiA+PC9zdmc+" alt="Slider" /></div></div>



		</div>

	</div>
</section>


<?php include(_includes_."inc.footer.php"); ?>