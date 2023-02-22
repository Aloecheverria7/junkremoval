<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$namepage="Home";}
elseif ($page_name=='about.php') {$namepage="About";}
elseif ($page_name=='services.php') {$namepage="Services";}
elseif ($page_name=='reviews.php') {$namepage="Reviews";}
elseif ($page_name=='projects.php') {$namepage="Projects";}
elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
elseif ($page_name=='404.php') {$namepage="Not Found";}
elseif ($page_name=='contact.php') {$namepage="Contact Us";}
//Info
	$Company="junkremoval and demolition";
	$Domain='Cafejinotegano.foxartmedia.com';//No dejar pleca al final del dominio
	$Address='CHICAGO, IL';
	$location='CHICAGO, IL';

	$PhoneName="Telefono";
	$Phone='(312) 937-8277';
	$Phone2=' +000-111-2222';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='diazdemolitionjunkremoval@gmail.com';$MailRef="mailto:".$Mail;
	$Services="Venta de cafe y Productos Derivados";
	$Estimates="Cotizaciones o Adquisiciones al Por Mayor";
	$Payment="Efectivo, Cheques, Tarjetas de Credito o Debito y Transferencias";
	$Experience="";
	$Schedule="Lunes a Viernes: 8:00am - 5:00pm";	
	$Cover="";

	$Manta="https://www.manta.com/c/m1rpv55/diaz-demolition-and-junk-removal";
	$Facebook="https://www.facebook.com/profile.php?id=100089983905943";
	$Instagram="https://www.instagram.com/diazdemolition_junkremoval08/";
	$Yelp="https://www.yelp.com/biz/diaz-demoliton-and-junk-removal-chicago/";
	$Angi="https://www.angi.com/";
	$Thum="https://www.thumbtack.com/";
	$gl = "https://google.com/";
	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3523.7787987673037!2d-82.7457134!3d27.970059900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2f1cd63376c3f%3A0xb553e3ef54a72bfb!2s2207%20Terrace%20Dr%20N%2C%20Clearwater%2C%20FL%2033765%2C%20EE.%20UU.!5e0!3m2!1ses!2sni!4v1660600086249!5m2!1ses!2sni" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>';
	
//Phrases
	$Description= array(
		"Nearby to you for the best services.",
		"CHICAGO",
		"For the comfort of our customers",
		"Our team is comprised of "

	);



	$tittle_2 = array(
		"60 MILES",
		"AROUND ILLINOIS",
		"MONDAY TO SUNDAY",
		"7:00 AM TO 7:00 PM",
		"Cash, Check & Zelle",
		"The best payment options",
		"highly skilled professionals."
		
	);

	$lorem[0] = 'We add a demolition and waste transportation services company <br> We travel 60/50 miles and we have highly specialized personnel to cover any service.';

 	$Phrase = array(
		"Nuestra reputacion ha sido construida por nuestro producto de calidad.",
		"Cultivo Organico y excelentes resultados.",
		"Orgullo en lo que hacemos y en nuestro equipo de cultivo.",
		"Promoviendo el cafe organico para cuidar de nuestra salud.",
		"Get your free consultant",
		"we are a company that offers desing and build services for you from initial sketches to the final construcction.",
		"Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent uptatum zzril delenit augue duis dolore te feugait nulla facilisi.",
		"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.",
	);


	//Home  etc.
	$Home = array(		 
		"En Cafe Jinotegano las Praderas, Muchos de nuestros clientes Vienen a nosotros por nuestros productos naturales 100% organicos asi como tambien por nuestra experiencia en cuanto a cafe respecta.",
		"Asi que durante el tiempo que toma en que ellos nos encuentren, Pueden sentirse aliviados, sabiendo que encontraron la mejor solucion para las mañanas en sus casas. En Cafe Jinotegano Las Praderas, no nos excedemos en nuestro en cuanto al precio, Ofrecemos diferentes tipos de cafe de calidad que te daran esa energia que buscas para salir de tu casa con energias siempre y en las mejores condiciones.",
		"por varios años, nos hemos dedicado en dar lo mejor de lo mejor en todo lo que hacemos y como lo hacemos en cuanto a nuestros cultivos y cosechas de cafe para brindarle a todos nuestros queridos clientes lo mejor de lo mejor. Desde nuestra Fundacion en Jinotega, Cafe Las Praderas ha logrado mantener siempre una sonrisa en el rostro de nuestros clientes, y podemos estar seguros de que usted no sera la excepcion.",		
		);
	
	// ABOUT
	$About = array(
		"About Us",
		"Everything You Need to Know About Junk Removal Services and How They Help You Get Rid of Clutter",
		"The benefits obtained by hiring a professional demolition and garbage removal company are the security of professional and efficient work.",
		"Demolition and remodeling projects are a complex process and require specialized tools and techniques. If done wrong, it can cause serious property damage, financial loss, and even health problems for you and your family.",
		"Get peace of mind knowing that your demolition and remodeling projects are in good hands with our experienced team of professionals. We specialize in getting the job done right the first time while offering competitive rates so you can save money. Get started with our demolition and remodeling services today!",
		);
	$AL[0]="Who we are";
	$AD[0]="We are a demolition and construction company with more than 8 years of experience in the field.";
	$AL[1]="Biography";
	$AD[1]="lorem1";
	$AL[2]="Our mission";
	$AD[2]="As a professional company we try to ensure that our work is as safe as possible and that it meets the demands of the client.";
	$AL[3]="Awards";
	$AD[3]="";
	

	//Services
	$SN[0]="Service";
	$SD[0]="The best services, for our clients.";

	$SN[1]="Demolitions";
	$SD[1]="we provide top notch demolition services to help you create the space you need for your business or home.";

	$SN[2]="Junk Remove";
	$SD[2]="We offer a reliable and efficient service for a hassle-free junk removal experience at an unbeatable price.";

	$SN[3]="Delivery of materials";
	$SD[3]="Experience faster, more reliable delivery, plus unmatched customer service with delivery materials.";

	$SN[4]="Dump Trailers Rental";
	$SD[4]="Renting tipper trailers makes transporting your heavy loads a breeze		.";

	$SN[5]="Bopcat Rental";
	$SD[5]="We provide a reliable BOPCAT RENTAL service with quick and easy returns.";

	$SN[6]="gutter clean Up";
	$SD[6]="It allows to have an adequate cleaning avoiding water leaks.";

	$SN[7]="pressure washing";
	$SD[7]="Our professional-grade pressure cleaning services are designed to take care of all your needs quickly, efficiently.";

	$SN[8]="mulching";
	$SD[8]="We offer services that quickly remove all the clutter from your lawn.";

	$SN[9]="yard maintenence";
	$SD[9]="we have the experience, tools and time to keep your lawn looking fresh";

	$SN[]="house cleaning";
	$SD[]="We'll make sure your home shines, without any effort on your part..";




	// Carrousell
	$CL[0]="works";
	$CD[0]="Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.";
	$CL[1]="wood making";
	$CD[1]="Pre Work";

	// team
	$TL[0]="Team";
	$TD[0]="Claritas est etiam processus dynamicus, qui sequitur ";
	$TL[1]="3 Years of experiences";
	$TD[1]="age: 24 years";
	$TL[2]="";
	$TD[2]="";
	$TL[3]="";
	$TD[3]="";

	$Name = array(		 
		"Espresso",
		"Lounge ",
		"Home",		
		"Montero",	
		"Roast",
		"Zurekin",
		"Arratsaldean",
		"Egun on",
	);

	

	// works
	$WL[0]="DUMP TRAILERS RENTAL";
	$WD[0]="Pre Work";
	$WL[1]="wood making";
	$WD[1]="";
	$WL[2]="Roofing works";
	$WD[2]="";
	$WL[3]="YARD MAINTENENCE";
	$WD[3]="";
	$WL[4]="DEMOLITIONS";
	$WD[4]="";
	$WL[5]="JUNK REMOVAL";
	$WD[5]="";
	$WL[6]="RENOVATION";
	$WD[6]="";
	$WL[7]="JUNK REMOVAL";
	$WD[7]="";

	$works = array(
		"Budget: $10,000",
		"Duration: 2 months",
	);

	/*Productos Descripcion*/
	$Detail = array(		 
	"Saborea un café Nicaraguense con sabor atrevido pero suave y con notas dulces y vibrantes.",

	"Sírvete un delicioso café ligeramente tostado, delicado y sabroso, con una agradable suavidad.  ",

	"Este café  está lleno de sabor, con equilibradas notas de frutos secos y cacao y un delicado toque dulce que proviene del tueste.",	

	"El dulce tueste con notas de cacao intenso de esta mezcla hacen que esta taza de café sea equilibrada y deliciosa.",

	"Deleitate con el tueste de este café unico, delicioso con sabor y bastantes sensaciones con el tueste especial.",

	"Disfruta del mejor café acompañandote siempre en todo lo que hagas, como su nombre, siempre contigo.",

	"Debusta tu tarde con el café con el tueste indicado para brindar esas sensaciones del nostalgico atardecer que reconforta con solo verlo. ",

	"Nada como empezar tu día con el café que te da las energías, te brinda emociones y sensaciones solo con su increíble sabor acompañandote desde.",


	);

	$project = array(
		"project Goal: ",
		"Staying in an outdated home can be dangerous, waste energy, and make it hard to keep up with trends. And if you try to do the remodel yourself, it could end up costing you more time and money in the long run.",
		"Project description:",
		"Remodelletion makes renovation projects easier and more affordable. With our comprehensive project description tool, getting started on your remodel is quick and stress-free! Get access to trusted contractors, pre-negotiated material prices, and detailed information about what your project will cost, all from one convenient platform. Stop worrying about remodeling costs and start building your dream home with Remodelletion",
		"Planning a renovation project is overwhelming. From finding the right contractor and materials to making sure you stay on budget, you can easily feel lost in the process.",
		
	);


$Small = array(		 
	"10",
	"10",
	"15",
	"10",
	"11",
	"10",
	"15",
	"10",		
	);


$large = array(		 
	"20",
	"20",
	"30",
	"20",
	"22",
	"20",
	"30",
	"20"		
	);


	$clientes = array(
		"james martin",
		"banker",
		"I recently hired DEMOLITION AND JUNKREMOVAL for my home renovation project and was pleasantly surprised. They were very professional and thorough in their work, completing the job on time and within budget.",
		
		"jenny duren",
		"housewife",
		"I recently hired DEMOLITION AND JUNKREMOVAL for a home renovation project and I'm so glad I did. The job was done quickly and professionally and the materials used were top notch.",
		
		"jennifer smith",
		"housewife",
		"I recently hired DEMOLITION AND JUNKREMOVAL to demolish a building on my property and I couldn't be happier with the service they provided. He was professional, punctual, and completed the job quickly and efficiently.",
	
	);

	$clientes_2 = array(
		"ROBERT GARCIA",
		"banker",
		"I recently had the pleasure of working with DEMOLITION AND JUNKREMOVAL for a large demolition project. They were able to handle all the work from start to finish with ease. Your team was knowledgeable and worked hard to ensure everything was done correctly and on time.",
	);


//Excerpt
	// if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	// if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	// if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	// if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	// if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	// if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};

?>
