<?php 
$menu=array(
1=>'Dashboard','Siswa','Guru','Mapel','Kelas','Nilai','Logout'
);
 
?>
<div class="clearfix"></div>
    <div class="col-lg-4 column">
        <div class="panel panel-default">
            <div class="panel-heading">
                Menu
            </div>
            
            <div class="panel-body">
                <ul>
                    <li><a href="<?= site_url('input') ?>">Input Nilai</a></li>
                </ul>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                Data
            </div>
            
            <div class="panel-body">
                <ul>
                    <?php for($i=1;$i<=count($menu);$i++){?>
                        <li><a href="<?= site_url(strtolower($menu[$i])) ?>"><?= $menu[$i]; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>


