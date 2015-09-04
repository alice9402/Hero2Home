<div class="container">
		<?php echo form_open(base_url().'heroes/UploadHero');?>
<div class="row">      
<form name="registroHeroe" id="heroForm">
<?php foreach ($query as $row){ ?>

				<div class="row control-group">
				<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nick</label>
                                <input type="text" class="form-control" placeholder="<?php echo $row->nick; ?>" name="Name" id="apodo" required data-validation-required-message="Por favor introduce un Apodo.">
                                <p class="help-block text-danger"></p>
				</div>
				</div>
				<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Superpower</label>
                                <input type="text" class="form-control" placeholder="<?php echo $row->superpower;?>" name="Power" id="Poder" required data-validation-required-message="Por favor introduce un SuperPoder.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
				<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone number</label>
                                <input type="text" class="form-control" placeholder="<?php echo $row->phone;?>" name="Phone" id="phone2" required data-validation-required-message="Por favor introduzca su numero de telefono.">
                                <p class="help-block text-danger"></p>
                            </div>
			    </div>
				 <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mail</label>
                                <input type="email" class="form-control" placeholder="<?php echo $row->mail;}?>" name="Email" id="email2" required data-validation-required-message="Por favor introduzca su email.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
			
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                            </div>
                        </div>
                        <div class="row">
                            <a href="<?php echo base_url(); ?>/heroe/Delete/<?php echo $row->mail;?>" class="btn btn-danger btn-lg" role="button">Borrar</a>
                        </div>
</form>
</div>
<?php echo form_close();?>
</div>