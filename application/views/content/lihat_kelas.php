<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Kelas
        </div>
        
        <div class="panel-body">
            
            <table class="table table-striped table-hovered">
                <thead>
                    <tr>
                        <td class="danger">#</td>
                        <td class="danger">Nama</td>
                        <td class="danger"></td>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $i=1;foreach($seluruh as $row){?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row->nama ?></td>
                            <td>
                                <a href="<?= site_url('delete/kelas/'.$row->id_kelas) ?>"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    
    </div>
    
    
</div>