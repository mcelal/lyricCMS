<?php 

	$column_width = (int)(80/count($columns));
	
	if(!empty($list)){
?>
		<table class="table table-hover">

            <thead>
                <tr role="row">
                    <?php foreach($columns as $column){?>
                        <th width='<?php echo $column_width?>%' class="sorting">
                            <div class="text-left field-sorting <?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?><?php echo $order_by[1]?><?php }?>"
                                 rel='<?php echo $column->field_name?>'>
                                <?php echo $column->display_as?>
                            </div>
                        </th>
                    <?php }?>
                    <?php if(!$unset_delete || !$unset_edit || !$unset_read || !empty($actions)){?>
                        <th abbr="tools" axis="col1" class="" width='20%'>
                            <?php echo $this->l('list_actions'); ?>
                        </th>
                    <?php }?>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>

                </tr>
            </thead>


			<tbody>

			<tr>

			</tr>


<?php foreach($list as $num_row => $row){ ?>        
		<tr  <?php if($num_row % 2 == 1){?>class="erow"<?php }?>>
			<?php foreach($columns as $column){?>
			<td width='<?php echo $column_width?>%' class='<?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?>sorted<?php }?>'>
				<div class='text-left'><?php echo $row->{$column->field_name} != '' ? $row->{$column->field_name} : '&nbsp;' ; ?></div>
			</td>
			<?php }?>
			<?php if(!$unset_delete || !$unset_edit || !$unset_read || !empty($actions)){?>
			<td align="left" width='20%'>
                <div class="btn-group">

                <?php
                if(!empty($row->action_urls)){
                    foreach($row->action_urls as $action_unique_id => $action_url){
                        $action = $actions[$action_unique_id];
                        ?>
                        <a href="<?php echo $action_url; ?>" class="btn btn-default" role="button">
                            <span class="ui-button-icon-primary ui-icon <?php echo $action->css_class; ?> <?php echo $action_unique_id;?>"></span><span class="ui-button-text">&nbsp;<?php echo $action->label?></span>
                        </a>
                    <?php }
                }
                ?>

                <?php if(!$unset_read){?>
                    <a href="<?php echo $row->read_url?>" class="btn btn-default" role="button"><?php echo $this->l('list_view'); ?></a>
                <?php }?>

                <?php if(!$unset_edit){?>
                    <a href="<?php echo $row->edit_url?>" class="btn btn-default" role="button"><?php echo $this->l('list_edit'); ?></a>
                <?php }?>

                <?php if(!$unset_delete){?>
                    <a onclick = "javascript: return delete_row('<?php echo $row->delete_url?>', '<?php echo $num_row?>')"
                       href="javascript:void(0)" class="btn btn-default" role="button"><?php echo $this->l('list_delete'); ?>
                    </a>
                <?php }?>
                </div>
            </td>
			<?php }?>
		</tr>
<?php } ?>        
		</tbody>
		</table>

<?php }else{?>
	<br/>
	&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $this->l('list_no_items'); ?>
	<br/>
	<br/>
<?php }?>	
