<?
	$all_azs = [
		[
			"adress" => "50 лет октября 124б",
			"geo" => [51.75950488148242,36.1264498220901],
			"img" =>  wp_get_attachment_image_src(carbon_get_post_meta(21, "zap_img_1"), 'full')[0],
			"services" => explode(',', carbon_get_post_meta(21, "zap_services_1")),
			"toplivo" => explode(',', carbon_get_post_meta(21, "zap_toplivo_1")),
			"lnk" => get_permalink(24)
		],

		[
			"adress" => "с. Беседино",
			"geo" => [51.70449733129399,36.491601158874495],
			"img" =>  wp_get_attachment_image_src(carbon_get_post_meta(21, "zap_img_2"), 'full')[0],
			"services" => explode(',', carbon_get_post_meta(21, "zap_services_2")),
			"toplivo" => explode(',', carbon_get_post_meta(21, "zap_toplivo_2")),
			"lnk" => get_permalink(26)
		],

		[
			"adress" => "Курск обл, д.Катырина д.74",
			"geo" => [51.657612542767154,35.78915970301054],
			"img" =>  wp_get_attachment_image_src(carbon_get_post_meta(21, "zap_img_3"), 'full')[0],
			"services" => explode(',', carbon_get_post_meta(21, "zap_services_3")),
			"toplivo" => explode(',', carbon_get_post_meta(21, "zap_toplivo_3")),
			"lnk" => get_permalink(28)
		],

		[
			"adress" => "ул.Аропортовская д25",
			"geo" => [51.747753545949095,36.28037236441801],
			"img" =>  wp_get_attachment_image_src(carbon_get_post_meta(21, "zap_img_4"), 'full')[0],
			"services" => explode(',', carbon_get_post_meta(21, "zap_services_4")),
			"toplivo" => explode(',', carbon_get_post_meta(21, "zap_toplivo_4")),
			"lnk" => get_permalink(30)
		],

		[
			"adress" => "Белгородская область, Яковлевский район, 633км",
			"geo" => [50.874896513262314,36.411121499999915],
			"img" =>  wp_get_attachment_image_src(carbon_get_post_meta(21, "zap_img_5"), 'full')[0],
			"services" => explode(',', carbon_get_post_meta(21, "zap_services_5")),
			"toplivo" => explode(',', carbon_get_post_meta(21, "zap_toplivo_5")),
			"lnk" => get_permalink(32)
		],

		[
			"adress" => "д. Курица",
			"geo" => [51.895887055330455,36.03093938084305],
			"img" =>  wp_get_attachment_image_src(carbon_get_post_meta(21, "zap_img_6"), 'full')[0],
			"services" => explode(',', carbon_get_post_meta(21, "zap_services_6")),
			"toplivo" => explode(',', carbon_get_post_meta(21, "zap_toplivo_6")),
			"lnk" => get_permalink(34)
		],

	];
?>
<section id="addresses" class="addresses section">
	<div class="_container">

		<div class="addresses__wrap d-flex">

			<div class="addresses__column addresses__column_left">
				<div class="addresses__block">

				<?
					foreach($all_azs as $element) {
						$services = "";

						for ($i = 0; $i < count($element["services"]);  $i++)
						{
							$services .= "<span class='all_azs_element service_sp' data-services='".$element["services"][$i]."'>".$element["services"][$i]."</span>";
						}
						  
						$toplivo = "";

						for ($i = 0; $i < count($element["toplivo"]);  $i++)
						{
							$toplivo .= "<span class='all_azs_element toplivo_sp' data-toplivo='".$element["toplivo"][$i]."'>".$element["toplivo"][$i]."</span>";
						}
				?>
					<div  class="addresses__block-item" data-adress="<?echo $element["adress"] ?>" data-koordinat="<?echo $element["geo"][0].", ".$element["geo"][1]; ?>">
						<h5 class="addresses__block-item-title"><?echo $element["adress"]; ?></h5>
						<div class = "usl_wrap">
							<? echo $services;?>
							<br/>
							<? echo $toplivo;?>
						</div>
						<a class="to_azs_lnk" href="<?echo $element["lnk"]; ?>">На страницу АЗС &rarr;</a>
					</div>
				<?		
					}
				?>


				</div>
			</div>

			<div class="addresses__column addresses__column_right">
				<div id="map" class="addresses__map"></div>
				<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> 

<script>

let myMap;
let selectedElement = undefined;

function selectElement(element) {
  if (selectedElement !== undefined)
      selectedElement.classList.remove("active")
  element.classList.add("active")
  selectedElement = element
}

function generateBoolonContent (element) {
          
		let services = "";

        for (let i = 0; i < element.services.length;  i++)
        {
            services += element.services[i]
			if (i != element.services.length-1 ) services += ", "
        }
          
		let toplivo = "";

        for (let i = 0; i < element.toplivo.length;  i++)
        {
            toplivo += element.toplivo[i]
			if (i != element.toplivo.length-1 ) toplivo += ", "
        }

		let be = "<div class = 'blWriper'>"
            be += "<div class = 'infoBlk'>"
                
                be += "<div class = 'img'>"
                    be += "<img src = '"+element.img+"' >"
                be += "</div>"

                be += "<div class = 'inform'>"
                    be += "<h2>"+element.adress+"</h2>"
                    be += "<strong>Топливл: </strong> "+toplivo+"<br/>"
                    be += "<strong>Услуги: </strong> "+services+"<br/>"
                be += "</div>"

            be += "</div>"

            
            be += "</div>"
          be += "</div>"
          return be;
}

	ymaps.ready(init); 

	function init () {
		 let all_azs = <? echo json_encode($all_azs);?>;
		console.log(all_azs)

		myMap = new ymaps.Map("map", {
		// Координаты центра карты
		center:[51.44547824674944,36.53584421919245],
		// Масштаб карты
		zoom: 7,
		// Выключаем все управление картой
		controls: []
	}); 

	var myGeoObjects = [];

	for (let i =0; i<all_azs.length; i++) {
            let coord = all_azs[i].geo

            myPlacemark = new ymaps.Placemark(coord, {
                balloonContent: generateBoolonContent(all_azs[i]),
				adress: all_azs[i].adress
            }, {
                iconLayout: 'default#image',
                iconImageHref: '<?php bloginfo("template_url"); ?>/img/icons/map-azs.svg',
                iconImageSize: [25, 38],
				iconImageOffset: [-12, -38]
            });


            myPlacemark.events.add('click' , function(e){
											
				var adr = e.get("target").properties.get("adress");
				console.log(adr);
                let element = document.querySelector(".addresses__block-item[data-adress='"+adr+"']")
                selectElement(element)
                element.scrollIntoView({block: "center", behavior: "smooth"})
			
											
			});

            myGeoObjects[i] = myPlacemark 

        }
		

var clusterer = new ymaps.Clusterer({
	clusterDisableClickZoom: true,
	clusterOpenBalloonOnClick: false,
	clusterIconColor:"#d9000d",
});

clusterer.add(myGeoObjects);
myMap.geoObjects.add(clusterer);
// Отключим zoom
// myMap.behaviors.disable('scrollZoom');


}

document.addEventListener("DOMContentLoaded", () => { 

  const blkBtn = document.querySelectorAll(".addresses__block-item")
  
  blkBtn.forEach(element => { 
      element.onclick = (e) => { 
          selectElement(element)
          let coord = element.dataset.koordinat.split(",")
          myMap.setCenter(coord)
          myMap.setZoom(17)  
          myMap.geoObjects.each(function (geoObject) {
              let go = geoObject.getGeoObjects() 
              
              for (let i =0; i< go.length; i++)
              {
                  if (go[i].properties.get('adress') == element.dataset.adress) {
                      
                      if (!go[i].balloon.isOpen())
                          go[i].balloon.open();
                  
                      break;
                  }
              }
          }); 
          
           
      }
      
  });
});

</script>

			</div>

		</div>

	</div>
</section>