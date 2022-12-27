<?php
    if( isset($_SESSION['cadastro_ok']) ){ 
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo $_SESSION['cadastro_ok']?></strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
<?php 
if ( isset($_SESSION['cadastro_erro']) ){ 
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><?php echo $_SESSION['cadastro_erro']?></strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>

