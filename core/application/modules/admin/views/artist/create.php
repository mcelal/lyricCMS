<?php if( validation_errors() ): ?>
<div class="alert alert-danger" role="alert">
    <?php echo validation_errors(); ?>
</div>
<?php endif; ?>


<?php if( $this->session->flashdata('success') ): ?>
<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<?=$this->system_message->render();?>
<div class="row">

	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Şarkı Bilgileri</h3>
			</div>
			<div class="box-body">
				<?php echo form_open_multipart(); ?>

                    <div class="form-group">
                        <label for="name">Şarkıcı Adı</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Şarkıcı adını giriniz">
                    </div>
                    <div class="form-group">
                        <label for="biography">Biyografi</label>
                        <textarea name="biography" cols="40" rows="10" id="biography" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="photo">Sanatçı Fotoğrafı</label>
                        <input type="file" id="photo" name="photo">
                    </div>

                    <button type="submit" class="btn btn-primary">Gönder</button>

                <?php echo form_close(); ?>
			</div>
		</div>
	</div>
	
</div>