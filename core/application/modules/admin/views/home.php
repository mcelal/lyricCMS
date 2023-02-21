<div class="row">

	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/box_open', 'Kısayollar'); ?>
			<?php echo modules::run('adminlte/widget/app_btn', 'fa fa-user', 'Profil', 'panel/account'); ?>
			<?php echo modules::run('adminlte/widget/app_btn', 'fa fa-sign-out', 'Çıkış', 'panel/logout'); ?>
		<?php echo modules::run('adminlte/widget/box_close'); ?>
	</div>

	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/info_box', 'yellow', $count['users'], 'Users', 'fa fa-users', 'user'); ?>
		<?php echo modules::run('adminlte/widget/info_box', 'red', $count['artists'], 'Artists', 'fa fa-users', 'artist'); ?>
		<?php echo modules::run('adminlte/widget/info_box', 'blue', $count['lyrics'], 'lyrics', 'fa fa-users', 'lyrics'); ?>
	</div>
	
</div>