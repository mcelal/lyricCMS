<?php
//	$this->set_css($this->default_theme_path.'/flexigrid/css/flexigrid.css');
	$this->set_js_lib($this->default_javascript_path.'/'.grocery_CRUD::JQUERY);

	$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/jquery.noty.js');
	$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/config/jquery.noty.config.js');
	$this->set_js_lib($this->default_javascript_path.'/common/lazyload-min.js');

	if (!$this->is_IE7()) {
		$this->set_js_lib($this->default_javascript_path.'/common/list.js');
	}

	$this->set_js($this->default_theme_path.'/flexigrid/js/cookies.js');
	$this->set_js($this->default_theme_path.'/flexigrid/js/flexigrid.js');

    $this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.form.min.js');

	$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.numeric.min.js');
	$this->set_js($this->default_theme_path.'/flexigrid/js/jquery.printElement.min.js');

	/** Fancybox */
	$this->set_css($this->default_css_path.'/jquery_plugins/fancybox/jquery.fancybox.css');
	$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.fancybox-1.3.4.js');
	$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.easing-1.3.pack.js');

	/** Jquery UI */
	$this->load_js_jqueryui();

?>
<script type='text/javascript'>
	var base_url = '<?php echo base_url();?>';

	var subject = '<?php echo addslashes($subject); ?>';
	var ajax_list_info_url = '<?php echo $ajax_list_info_url; ?>';
	var unique_hash = '<?php echo $unique_hash; ?>';

	var message_alert_delete = "<?php echo $this->l('alert_delete'); ?>";

</script>
<div id='list-report-error' class='report-div error'></div>
<div id='list-report-success' class='report-div success report-list' <?php if($success_message !== null){?>style="display:block"<?php }?>><?php
if($success_message !== null){?>
	<p><?php echo $success_message; ?></p>
<?php }
?></div>


<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Monthly Recap Report</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<div class="btn-group">
				<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-wrench"></i></button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</div>
			<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body table-responsive no-padding">
		<?php echo $list_view?>
	</div>	<!-- ./box-body -->
	<div class="box-footer" style="display: block;">
		<div class="row">
			<div class="col-sm-3 col-xs-6">
				<div class="description-block border-right">
					<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
					<h5 class="description-header">$35,210.43</h5>
					<span class="description-text">TOTAL REVENUE</span>
				</div>
				<!-- /.description-block -->
			</div>
			<!-- /.col -->
			<div class="col-sm-3 col-xs-6">
				<div class="description-block border-right">
					<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
					<h5 class="description-header">$10,390.90</h5>
					<span class="description-text">TOTAL COST</span>
				</div>
				<!-- /.description-block -->
			</div>
			<!-- /.col -->
			<div class="col-sm-3 col-xs-6">
				<div class="description-block border-right">
					<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
					<h5 class="description-header">$24,813.53</h5>
					<span class="description-text">TOTAL PROFIT</span>
				</div>
				<!-- /.description-block -->
			</div>
			<!-- /.col -->
			<div class="col-sm-3 col-xs-6">
				<div class="description-block">
					<span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
					<h5 class="description-header">1200</h5>
					<span class="description-text">GOAL COMPLETIONS</span>
				</div>
				<!-- /.description-block -->
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.box-footer -->
</div>