<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Guru
        </div>
        
        <div class="panel-body">
            
    
        <?= form_open('proses',array('class'=>'form-horizontal')) ?>
          
        <div class="form-group">
            <label class="col-sm-2 control-label">NIG</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="id" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="alamat"></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="guru" class="btn btn-default"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            </div>
          </div>
        
            
        <?= form_close() ?>
        
        </div>
    
    </div>
    
    <table class="table table-striped table-hovered">
        <thead>
            <tr>
                <td class="danger">#</td>
                <td class="danger">Nama</td>
                <td class="danger">Alamat</td>
            </tr>
        </thead>
        
        <tbody>
            <?php $i=1;foreach($seluruh->result() as $row){?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->alamat ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>