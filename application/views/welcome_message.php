 <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php  echo base_url(); ?>/images/mossroyer.png" alt="Rabbid Hero to home">
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
                    <h2>Infórmate sobre nuestros héroes</h2>
                    <hr class="star-light">
                </div>
            </div>
        <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p>Nuestro héroes son personas como tú y como yo, pero que son algo especiales, tienen superpoderes y quieren compartirlos.</p>
                    <p>Echa un vistazo en la galería de heroes y encuentra al que pueda ayudarte! Están deseando que les llames!</p>
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
			<h3>Regístrate como héroe</h3>
			<h5>¡Entra en nuestra liga de héroes!</h5>
			<a href="http://localhost:8888/Hero2Home/index.php/form"><img align="center"  style="margin-left: 17%"width="230px" src="<?php  echo base_url(); ?>/images/bigbang.png" class="img-responsive"  alt="stitch">
			</a>
		</div>
                <div class="col-lg-4 text-center">
			<hr class="star-primary">
			<h3>Directorio de héroes</h3>
			<h5>Entra en la galería y escoge a tu héroe</h5>
			
			<a href="http://localhost:8888/Hero2Home/index.php/Gallery" ><img align="center" style="margin-left: 20%" width="200px" src="<?php  echo base_url(); ?>images/gallery.png" class="img-responsive"  alt="gallery"></a>
</a>
		</div>
	    <form action="index.php" method="POST" enctype="multipart/form-data">
		<input name="archivo" id="archivo" type="file"/>
		<input type="submit" name="subir" value="Subir imagen"/>
		<label class="control-label">Select File</label>
		<input id="input-1" type="file" class="file">
		</form>

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
	
	