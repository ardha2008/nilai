<?php  
$a=rand(1,20);
$b=rand(1,20);
$c=$a+$b;
?>

<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
        Login
    </div>
    
    <div class="panel-body">
        

    <?= form_open('auth',array('class'=>'form-horizontal')) ?>
      
      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <?php if($this->session->userdata('message')=='login_failed'){?>
                <p style="color:#FF0101;">Login failed</p>
            <?php } ?>
          <?php echo validation_errors(); ?>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-2 control-label">ID Guru</label>
        <div class="col-sm-10">
          <input type="text" name="id" value="00001" class="form-control" placeholder=""/>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" value="ardhaherdianto" name="password" />
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-2 control-label"><?= $a.'+'.$b.' =' ?></label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="capt" />
        </div>
      </div>
      
      <input type="hidden" name="capt2" value="<?= $c ?>" />
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-log-in"></i> Login</button>
        </div>
      </div>
    
        
    <?= form_close() ?>
    
    </div>

</div>
</div>