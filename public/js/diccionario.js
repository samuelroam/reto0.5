var translator = $('body').translate({lang: "es", t: dict});
	var dict={
		
		"horario": {
			es: "Abierto de Lunes a Sábado de 10:00 a 22:00",
			en: "Open from Monday to Saturday from 10:00 to 22:00",
		},
		"inicio": {
			es: "Inicio",
			en: "Home",
		},
		"plano": {
			es: "Plano",
			en: "Map",
		},
		"tiendas": {
			es: "Tiendas",
			en: "Shops",
		},
		"tienda": {
			es: "Tienda",
			en: "Shop",
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
		"footer1": {
			es: "Página Web realizada por Samuel R., Xabier L. y Xabier J.",
			en: "Web Page done by Samuel R., Xabier L. and Xabier J.",
		},
		"footer2": {
			es: "Grupo Garbera",
			en: "Garbera Team",
		},
		"footer3": {
			es: "Reto 0.5",
			en: "0.5 Challenge",
		},
		"legend": {
			es: "¿En que tienda trabajas?",
			en: "In which shop do you work ?",
		},
		"nombre": {
			es: "Nombre:",
			en: "Name:",
		},
		"descripcion": {
			es: "Descripción:",
			en: "Description:",
		},
		"imagen": {
			es: "Imagen:",
			en: "Image:",
		},
		"enlace": {
			es: "Enlace:",
			en: "Link:",
		},
		"ver": {
			es: "Ver Productos",
			en: "View Products",
		},
		"añadir": {
			es: "Añadir Producto",
			en: "Add Product",
		},
		"enviar": {
			es: "Enviar",
			en: "Send",
		},
		"bienvenida": {
			es: "Bienvenido a",
			en: "Welcome to",
		},
		"eliminar": {
			es: "Eliminar",
			en: "Delete",
		},
		"cambiar": {
			es: "Cambiar Stock",
			en: "Change Stock",
		},
		"nombre": {
			es: "Nombre:",
			en: "Name:",
		},
		"descripcion":{
			es: "Descripcion:",
			en: "Description:",
		},
		"enlace":{
			es: "Enlace:",
			en: "Link:",
		},
		"idioma": {
			es: "Idiomas",
			en: "Language",
		},
		"direccion": {
			es: "Dirección: Cruce Garbera 1, Donostia-San Sebastián",
			en: "Address: Garbera Crossing 1, Donostia-San Sebastian",
		},
		"confirmacion": {
			es: "Pulsa el siguiente botón si estas seguro de que quieres eliminar el producto.",
			en: "Press the following button if you are sure that you want to delete the product.",
		},

		"": {
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