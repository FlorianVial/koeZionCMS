<thead>
	<tr>
		<th><?php if(!$displayAll) { ?><a href="<?php echo Router::url('backoffice/'.$params['controllerFileName'].'/index.html?displayall=1', ''); ?>"><img src="<?php echo BASE_URL; ?>/img/backoffice/activ_sortable.png" alt="Activer le rang" /></a><?php } ?></th>
		<th>#</th>
		<th><?php echo _("Statut"); ?></th>
		<th><?php echo _("Titre"); ?></th>
		<th><?php echo _("Actions"); ?></th>
		<th><input type="checkbox" class="checkall" /></th>
	</tr>
</thead>