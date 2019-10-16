var translator = $('body').translate({lang: "es", t: dict});
	var dict={
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
