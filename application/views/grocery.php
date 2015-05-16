<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">MyIgniter</h3>
		<div class="box-tools pull-right">
		    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div><!-- /.box-tools -->
	</div><!-- /.box-header -->
	<div class="box-body">
		<p>myIgniter is a custom PHP framework for web developer. Combined between Codeigniter 3.0.0 with AdminLTE, Bootstrap and fontawesome User Interface, include auto PHP GroceryCRUD for create table with Create-Read-Update-Delete and Ion authentication system. </p>
		<p>
			<a href="https://github.com/asrul10/myIgniter/releases" class="btn btn-primary btn-lg"><i class="fa fa-download"></i> Download myIgniter</a>&nbsp;
			<a href="https://github.com/asrul10/myIgniter" class="btn btn-info btn-lg"><i class="fa fa-github"></i> View project on GitHub</a>
		</p>
	</div><!-- /.box-body -->
</div>
<script>
	function datatablesOptions()
	{
		<?php if (isset($data['script_datatables'])) { echo $data['script_datatables']; }; ?>	
	}
</script>
<div class="row">
	<div class="col-lg-12">
		<div><?php echo $output; ?></div>
	</div>
</div>
<script>
	function afterDatatables()
	{
	    site = '<?= site_url(); ?>';
	    ur_class = '<?= $this->uri->segment(1); ?>';
	    url_function = '<?= $this->uri->segment(2); ?>';
		<?php if (isset($data['script_grocery'])) { echo $data['script_grocery']; }; ?>	
	}
</script>