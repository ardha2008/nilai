<div class="col-md-6">

    <?php if($this->session->userdata('message')=='update'){?>
        <div class="alert alert-success">
            <strong>Data diperbarui</strong>
        </div>
    <?php $this->session->unset_userdata('message'); } ?>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            Siswa
        </div>
        
        <div class="panel-body">
            
    
        <?= form_open('proses',array('class'=>'form-horizontal')) ?>
          
          <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
              <?php echo validation_errors(); ?>
            </div>
          </div>
          <?= form_hidden('id',$id) ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" autofocus="" value="<?= $seluruh[0]->nama ?>" class="form-control" name="nama" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?= $seluruh[0]->alamat ?>" name="alamat" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="update_siswa" class="btn btn-default"><i class="glyphicon glyphicon-ok"></i> Update</button>
            </div>
          </div>
        
            
        <?= form_close() ?>
        
        </div>
    
    </div>
    
    
</div>

<div class="clearfix"></div>
