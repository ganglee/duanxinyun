<?php
use common\models\SystemComponents;

?>

<?php if($id == '1'){?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<?= SystemComponents::backUserOperateMessage($_GET['item']) ?>.
	</div>
<?php }elseif($id == '0'){ ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<strong>!</strong>
        <?= SystemComponents::backUserOperateMessage($_GET['item']) ?>.
	</div>
<?php } ?>