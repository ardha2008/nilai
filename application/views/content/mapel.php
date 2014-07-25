<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Mata Pelajaran
        </div>
        
        <div class="panel-body">
            
    
        <?= form_open('proses',array('class'=>'form-horizontal')) ?>
          
          <div class="form-group">
            <label class="col-sm-2 control-label">Mata Pelajaran</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="mapel" class="btn btn-default"><i class="glyphicon glyphicon-ok"></i> Submit</button>
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
                <td class="danger"></td>
            </tr>
        </thead>
        
        <tbody>
            <?php $i=1;foreach($seluruh->result() as $row){?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row->nama ?></td>
                    <td>
                        <a href="<?= site_url('delete/mapel/'.$row->id_mapel) ?>"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>