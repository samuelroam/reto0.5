var translator = $('body').translate({lang: "es", t: dict});
	var dict={
		"plano": {
			es: "Plano",
			en: "Map",
		},
		"tiendas": {
			es: "Tiendas",
			en: "Shops",
		},
		"mediamarkt_landing": {
			es: "Tienda para compra de aparatos electronicos y tecnologias",
			en: "Shop to buy electronic and technology stuff",
		},
		"zara_landing": {
			es: "Tienda para comprar ropajes y vestimentas",
			en: "Shop to buy clothes and clothing",

		},
		"eroski_landing": {
			es: "Hipermercado para comprar alimentacion y cosas del hogar",
			en: "Hipermarket to buy food and some stuff for home",

		},
		"forum_landing": {
			es: "Tienda de deportes y equipamiento deportivo",
			en: "Sports and sports equipment shop",
		},
		"mc_landing": {
			es: "Restaurante familiar de comida rápida y hamburguesas",
			en: "Fast food family restaurant and hamburguers",
		},
		"hm_landing": {
			es: "Tienda de ropa y artículos de moda",
			en: "Clothing and fashion store",
		},
		"vans_landing": {
			es: "Tienda de zapatos y calzados",
			en: "Shoe and footwear store",
		},
		" ": {
			es: "",
			en: "",
		}

	}
	function cambiarIng(){
		var translator = $('body').translate({lang: "es", t: dict});
		translator.lang("en");
	}
	function cambiarEsp(){
		var translator = $('body').translate({lang: "en", t: dict});
		translator.lang("es");
	}
