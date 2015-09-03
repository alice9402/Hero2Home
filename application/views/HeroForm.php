<br/>
    <br/>
        <br/>
            <br/>
                <br/>
                    <br/>
                        <br/>
<div class="container">
		<?php echo form_open(base_url() . 'heroes/InsertHero');?>
<div class="row">
             
                <form name="registroHeroe" id="heroForm">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nick</label>
                                <input type="text" class="form-control" placeholder="Nick" name="Name" id="apodo" required data-validation-required-message="Por favor introduce un Apodo.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Superpower</label>
                                <input type="text" class="form-control" placeholder="Superpower" name="Power" id="Poder" required data-validation-required-message="Por favor introduce un SuperPoder.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" name="Phone" id="phone2" required data-validation-required-message="Por favor introduzca su numero de telefono.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mail</label>
                                <input type="email" class="form-control" placeholder="Email" name="Email" id="email2" required data-validation-required-message="Por favor introduzca su email.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
			<?php
			echo form_label('Categorías: '),form_dropdown('Category', $arrCategories);
                        ?>
			<br>
				
                       
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
	    </form>
            </div>
<?php echo form_close();?>
</div>