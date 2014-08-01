<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Kelas
        </div>
        
        <div class="panel-body">
            <a href="<?= site_url('kelas'); ?>" class="btn btn-primary">Daftar Kelas</a>
            <hr />
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
                                
                            </td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    
    </div>
    
    
</div>