$(document).live("ready", function(){if (roll=="Jefe") {}if (roll=="Asesor Demandas") { 	//Desactivarbottom de registro de usurio 		$("#registro").addClass("disabled");	//Demandas	 	//ProhibirRegistrarDemandas		$(".registrardemandas").addClass("disabled");		$(".registrardemandas a").removeAttr( 'id','none' );	//Tutelas		//ProhibirRegistrarTutelas		$(".registrartutelas").addClass("disabled");		$(".registrartutelas a").removeAttr( 'id','none' );	//Conciliaciones		//ProhibirRegistrarColciliaciones		$(".registrarconciliaciones").addClass("disabled");		$(".registrarconciliaciones a").removeAttr( 'id','none' );	//DerechosPeticion		//ProhibirRegistrarDerechos		$(".registrarderechos").addClass("disabled");		$(".registrarderechos a").removeAttr( 'id','none' );	//Avances		//ProhibirRegistrarAvances		$(".registraravances").addClass("disabled");		$(".registraravances a").removeAttr( 'id','none' );	//Polizas		//ProhibirRegistrarPolizas		$(".registrarpolizas").addClass("disabled");		$(".registrarpolizas a").removeAttr( 'id','none' );	//Generador		//Prohibir Generar Plantilla Conciliacion		$(".verplanconciliaciones").addClass("disabled");		$(".verplanconciliaciones a").removeAttr( 'href','none' );		//Prohibir Generar Plantilla Resolucion		$(".verplanresolucion").addClass("disabled");		$(".verplanresolucion a").removeAttr( 'href','none' );         //Prohibir Generar Plantilla Apelacion         $(".verplanapelacion").addClass("disabled");         $(".verplanapelacion a").removeAttr( 'href','none' );	//Informes        $("button.descargar").addClass("disabled");		$("button.descargar a").removeAttr( 'href','none' );         //Modulo Usuarios         $(".configuracion").addClass("disabled");         $(".configuracion a").removeAttr( 'id','none' );    //PrivilegiosDemanda Eliminar Actualizar Verdetalles.		$("head").append("<link>");	css = $("head").children(":last");		css.attr({ rel: "stylesheet", type: "text/css",	href: "../css/privilegios_demanda.css" });}if (roll=="Asesor Tutelas") {	 	//Desactivarbottom de registro de usurio 		$("#registro").addClass("disabled");	//Demandas	 	//ProhibirRegistrarDemandas		$(".registrardemandas").addClass("disabled");		$(".registrardemandas a").removeAttr( 'id','none' );	//Tutelas		//ProhibirRegistrarTutelas		$(".registrartutelas").addClass("disabled");		$(".registrartutelas a").removeAttr( 'id','none' );	//Conciliaciones		//ProhibirRegistrarColciliaciones		$(".registrarconciliaciones").addClass("disabled");		$(".registrarconciliaciones a").removeAttr( 'id','none' );	//DerechosPeticion		//ProhibirRegistrarDerechos		$(".registrarderechos").addClass("disabled");		$(".registrarderechos a").removeAttr( 'id','none' );	//Avances		//ProhibirRegistrarAvances		$(".registraravances").addClass("disabled");		$(".registraravances a").removeAttr( 'id','none' );	//Polizas		//ProhibirRegistrarPolizas		$(".registrarpolizas").addClass("disabled");		$(".registrarpolizas a").removeAttr( 'id','none' );	//Generador		//Prohibir Generar Plantilla Conciliacion		$(".verplanconciliaciones").addClass("disabled");		$(".verplanconciliaciones a").removeAttr( 'href','none' );		//Prohibir Generar Plantilla Resolucion		$(".verplanresolucion").addClass("disabled");		$(".verplanresolucion a").removeAttr( 'href','none' );        //Prohibir Generar Plantilla Apelacion        $(".verplanapelacion").addClass("disabled");        $(".verplanapelacion a").removeAttr( 'href','none' );	//Informes        $("button.descargar").addClass("disabled");		$("button.descargar a").removeAttr( 'href','none' );        //Modulo Usuarios        $(".configuracion").addClass("disabled");        $(".configuracion a").removeAttr( 'id','none' );    //PrivilegiosTutelas Eliminar Actualizar Verdetalles.		$("head").append("<link>");	css = $("head").children(":last");		css.attr({ rel: "stylesheet", type: "text/css",	href: "../css/privilegios_tutelas.css" });  }if (roll=="Asesor Conciliaciones") {	 	//Desactivarbottom de registro de usurio 		$("#registro").addClass("disabled");	//Demandas	 	//ProhibirRegistrarDemandas		$(".registrardemandas").addClass("disabled");		$(".registrardemandas a").removeAttr( 'id','none' );	//Tutelas		//ProhibirRegistrarTutelas		$(".registrartutelas").addClass("disabled");		$(".registrartutelas a").removeAttr( 'id','none' );	//Conciliaciones		//ProhibirRegistrarColciliaciones		$(".registrarconciliaciones").addClass("disabled");		$(".registrarconciliaciones a").removeAttr( 'id','none' );	//DerechosPeticion		//ProhibirRegistrarDerechos		$(".registrarderechos").addClass("disabled");		$(".registrarderechos a").removeAttr( 'id','none' );	//Avances		//ProhibirRegistrarAvances		$(".registraravances").addClass("disabled");		$(".registraravances a").removeAttr( 'id','none' );	//Polizas		//ProhibirRegistrarPolizas		$(".registrarpolizas").addClass("disabled");		$(".registrarpolizas a").removeAttr( 'id','none' );	//Generador		//Prohibir Generar Plantilla Conciliacion		$(".verplanconciliaciones").addClass("disabled");		$(".verplanconciliaciones a").removeAttr( 'href','none' );		//Prohibir Generar Plantilla Resolucion		$(".verplanresolucion").addClass("disabled");		$(".verplanresolucion a").removeAttr( 'href','none' );        //Prohibir Generar Plantilla Apelacion        $(".verplanapelacion").addClass("disabled");        $(".verplanapelacion a").removeAttr( 'href','none' );	//Informes        $("button.descargar").addClass("disabled");		$("button.descargar a").removeAttr( 'href','none' );        //Modulo Usuarios        $(".configuracion").addClass("disabled");        $(".configuracion a").removeAttr( 'id','none' );    //PrivilegiosConciliaciones Eliminar Actualizar Verdetalles.		$("head").append("<link>");	css = $("head").children(":last");		css.attr({ rel: "stylesheet", type: "text/css",	href: "../css/privilegios_conciliaciones.css" });  }if (roll=="Asesor Derechos") {	 	//Desactivarbottom de registro de usurio 		$("#registro").addClass("disabled");	//Demandas	 	//ProhibirRegistrarDemandas		$(".registrardemandas").addClass("disabled");		$(".registrardemandas a").removeAttr( 'id','none' );	//Tutelas		//ProhibirRegistrarTutelas		$(".registrartutelas").addClass("disabled");		$(".registrartutelas a").removeAttr( 'id','none' );	//Conciliaciones		//ProhibirRegistrarColciliaciones		$(".registrarconciliaciones").addClass("disabled");		$(".registrarconciliaciones a").removeAttr( 'id','none' );	//DerechosPeticion		//ProhibirRegistrarDerechos		$(".registrarderechos").addClass("disabled");		$(".registrarderechos a").removeAttr( 'id','none' );	//Avances		//ProhibirRegistrarAvances		$(".registraravances").addClass("disabled");		$(".registraravances a").removeAttr( 'id','none' );	//Polizas		//ProhibirRegistrarPolizas		$(".registrarpolizas").addClass("disabled");		$(".registrarpolizas a").removeAttr( 'id','none' );	//Generador		//Prohibir Generar Plantilla Conciliacion		$(".verplanconciliaciones").addClass("disabled");		$(".verplanconciliaciones a").removeAttr( 'href','none' );		//Prohibir Generar Plantilla Resolucion		$(".verplanresolucion").addClass("disabled");		$(".verplanresolucion a").removeAttr( 'href','none' );        //Prohibir Generar Plantilla Apelacion        $(".verplanapelacion").addClass("disabled");        $(".verplanapelacion a").removeAttr( 'href','none' );	//Informes        $("button.descargar").addClass("disabled");		$("button.descargar a").removeAttr( 'href','none' );        //Modulo Usuarios        $(".configuracion").addClass("disabled");        $(".configuracion a").removeAttr( 'id','none' );    //PrivilegiosDerechos Eliminar Actualizar Verdetalles.		$("head").append("<link>");	css = $("head").children(":last");		css.attr({ rel: "stylesheet", type: "text/css",	href: "../css/privilegios_derechos.css" });}if (roll=="Secretaria") {        //Modulo Usuarios        $(".configuracion").addClass("disabled");        $(".configuracion a").removeAttr( 'id','none' );	 	//Desactivarbottom de registro de usurio 		$("#registro").addClass("disabled");    //Privilegios Eliminar Actualizar Verdetalles.		$("head").append("<link>");	css = $("head").children(":last");		css.attr({ rel: "stylesheet", type: "text/css",	href: "../css/privilegios_demanda.css" });}});