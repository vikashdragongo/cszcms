<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i><span class="glyphicon glyphicon-share"></span></i> <?= $this->lang->line('social_header') ?>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="h2 sub-header"><?= $this->lang->line('social_header') ?></div>
        <?= $this->lang->line('social_message') ?>
        <?php echo form_open(BASE_URL . '/admin/social/update'); ?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="20%"><?php echo $this->lang->line('social_table_title'); ?></th>
                    <th width="70%"><?php echo $this->lang->line('social_table_link'); ?></th>
                    <th width="10%" class="text-center"><?php echo $this->lang->line('social_table_active'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($social as $s) { ?>
                    <tr>
                        <td><?php echo $this->lang->line('social_' . $s->social_name); ?></td>
                        <td><?php
                            $data = array(
                                'name' => $s->social_name,
                                'id' => $s->social_name,
                                'class' => 'form-control ',
                                'value' => set_value($s->social_name, $s->social_url, FALSE)
                            );
                            echo form_input($data);
                            ?></td>
                        <td class="text-center"><input type="checkbox" value="1" name="checkbox<?php echo $s->social_name; ?>" <?php if ($s->active == 1) { echo " checked "; } ?>></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php 	$data = array(
		'name'        => 'submit',
		'id'          => 'submit',
		'class'       => 'btn btn-primary',
		'value'		=> $this->lang->line('btn_save'),
		);
	echo form_submit($data); ?>
        <?php echo form_close(); ?>
        <!-- /widget-content --> 
    </div>
</div>
