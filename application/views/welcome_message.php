<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
  <link href="<?php  echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php  echo base_url(); ?>/css/main.css">
        <link href="<?php  echo base_url(); ?>/fonts/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>

<div id="container">
	  <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Navegacion -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">H2H</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Nuestros héroes</a>
                    </li>
                     <li class="page-scroll">
                        <a href="#beHero">Sé un héroe</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contactanos</a>
                    </li>
                    
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php  echo base_url(); ?>/images/superRabbid.png" alt="Rabbid Hero to home">
                    <div class="intro-text">
                        <span class="name">Consigue un héroe</span>
                        <hr class="star-light">
                        <span class="skills">Infórmaticos - Detectives - Cuidadores</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <!-- About Section -->
    <section   id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sobre los héroes</h2>
                    <hr class="star-light">
                </div>
            </div>
        <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Nuestro héroes son personas como tú y como yo, pero que son algo especiales, tienen superpoderes y quieren compartirlos.</p>
                </div>
                <div class="col-lg-4">
                    <p>Echa un vistazo en la galería de heroes y encuentra al que pueda ayudarte!, Están deseando que les llames!</p>
                </div>
                    <!--<div class="col-lg-6 col-lg-offset-3">
                     <video src="video/BurritoVan.mp4" controls class="img img-responsive" width="640" height="360"></video> 
                </div>-->
               
        </div>
               
        </div>
    </section>
     <!--Be a hero Section-->
    <section id="beHero" >
	    <div class="container">
            <div class="row">
		<div class="col-lg-4 col-lg-offset-2 text-center">
			<hr class="star-primary" >
			<h3>Sé un héroe</h3>
			<h5>¡Entra en nuestra liga de superhéroes!</h5>
			<img align="center" width="200px" src="<?php  echo base_url(); ?>/images/profile.png" class="img-responsive" alt="stitch">
		</div>
                <div class="col-lg-4 text-center">
			<hr class="star-primary">
			<h3>Encuentra tú Héroe</h3>
			<h5>Vísita nuestra galería de héroes</h5>
			
		</div>

            </div>
            
            <!--<div class="row">
             
                <form name="registroHeroe" id="heroForm">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Apodo</label>
                                <input type="text" class="form-control" placeholder="Apodo" id="apodo" required data-validation-required-message="Por favor introduce un Apodo.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>SuperPoder</label>
                                <input type="text" class="form-control" placeholder="Poder" id="Poder" required data-validation-required-message="Por favor introduce un SuperPoder.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefono</label>
                                <input type="text" class="form-control" placeholder="Telefono" id="phone2" required data-validation-required-message="Por favor introduzca su numero de telefono.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="Email" id="email2" required data-validation-required-message="Por favor introduzca su email.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                       
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
	    </form>-->
            </div>
        </div>
    </section>
    <!-- Contact Section -->
   <!-- <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contactanos</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. 
                    <form name="sentMessage" id="contactForm" >
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Por favor introduce tu nombre.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefono</label>
                                <input type="number" class="form-control" placeholder="Telefono" id="phone" required data-validation-required-message="Por favor introduzca su numero de telefono.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Por favor introduzca su email.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Pedido</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="mensaje" required data-validation-required-message="Por favor introduzca un mensaje."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Footer -->
    

    <footer class="text-center">
	
	