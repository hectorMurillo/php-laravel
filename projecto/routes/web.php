<?php 
//www.misitio.com = Route::get('/');
//www.misitio.com/contacto  = Route::get('contacto',function(){}); **EL SEGUNDO PARMETRO ES UNA FUNCION ANONIMA O CLOSURE

Route::get('/', function(){
	return view('home');
	// echo "<a href=".route('contactos').">Contacto</a><br>";
	// echo "<a href=".route('contactos').">Contacto</a><br>";
	// echo "<a href=".route('contactos').">Contacto</a><br>";
	// echo "<a href=".route('contactos').">Contacto</a><br>";	
	// return "hola desde la pagina de inicio";
});

//NOMBRE DE RUTAS...
Route::get('Contactame',['as'=>'contactos',function(){
	return "<h3>CONTACTO</h3>";
}]);

//PARAMETRO OBLIGATORIO
// Route::get('saludos/{nombre}',function($nombre){
// 	return "Saludos $nombre";
// });

// //PARAMETRO NO OBLIGATORIO

// Route::get('saludos/{nombre?}',function($nombre = "Invitado"){
// 	return "Saludos $nombre";
// });

//PARAMETRO Validado [Se agrega el where con el parametro y la expresion regular].

// Route::get('saludos/{nombre?}',function($nombre = "Invitado"){
// 	return "Saludos $nombre";
// })->where('nombre',"[A-Za-z]+");

//REGRESANDO UNA VISTA CON PARAMETROS
Route::get('saludos/{nombre?}',function($nombre = "Invitado"){
	// return view("saludos",['nombre'=> $nombre]);
	// return view('saludos')->with(['nombre'=>$nombre]);
	return view ('saludos',compact('nombre'));
})->where('nombre',"[A-Za-z]+");