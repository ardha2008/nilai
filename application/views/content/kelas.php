<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Kelas
        </div>
        
        <div class="panel-body">
            
    
        <?= form_open('proses',array('class'=>'form-horizontal')) ?>
          
          <div class="form-group">
            <label class="col-sm-2 control-label">Kelas </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" autofocus="" name="nama" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="kelas" class="btn btn-default"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            </div>
          </div>
        
            
        <?= form_close() ?>
        
        </div>
    
    </div>
    
    <table class="table table-striped table-hovered">
        <thead>
            <tr>
                <td class="danger">#</td>
                <td class="danger">Kelas</td>
                <td class="danger"></td>
            </tr>
        </thead>
        
        <tbody>
            <?php $i=1;foreach($seluruh->result() as $row){?>
                <tr>
                    <td><?= $i ?></td>
                    <td><a href="<?= site_url('lihat/kelas/'.$row->id_kelas) ?>"><?= $row->nama ?></a></td>
                    <td>
                        <a href="<?= site_url('delete/kelas/'.$row->id_kelas) ?>"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>