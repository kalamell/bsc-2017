<div class="content-wrapper">
    <section class="content-header">
      <h1>
        ข่าว
        <small>จัดการข้อมูลข่าว</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">ข่าว</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">ข่าว</h3>

            <div class="box-tools pull-right">
              <a href="<?php echo site_url('admin/news/add');?>" class="btn btn-info btn-sm">เพิ่มข้อมูล</a>
            </div>
          </div>
          <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="80">Active</th>
                        <th>ภาพ</th>
                        <th>ชื่อข่าว</th>
                        <th>วันที่</th>
                        <th width="120">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (count($rs)==0): ?>
                    <tr><td colspan="5">- - - - ไม่มีข้อมูล - - - -</td></tr>
                <?php else:?>
                    <?php foreach($rs as $r):?>
                    <tr>
                        <td align="center"><?php echo $r->active==1?'<font class="label label-success">Y</font>':'N';?></td>
                        <td><img src="<?php echo base_url();?>upload/news/<?php echo $r->image_path;?>"  class="img-responsive" style="max-width: 300px;" alt="">
                        </td>
                        <td><?php echo $r->title;?></td>
                        <td><?php echo date('d/m/Y', strtotime($r->ondate));?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <a class="btn btn-default btn-sm" href="<?php echo site_url('admin/news/edit/'.$r->id);?>">แก้ไข</a>
                              <a class="btn btn-default btn-sm" href="<?php echo site_url('admin/news/delete/'.$r->id);?>" onclick="javascript: return confirm('ต้องการลบหรือไม่ ?');"><i class='fa fa-trash'></i></a>
                            </div>

                        </td>
                    </tr>
                    <?php endforeach;?>
                <?php endif;?>
                </tbody>
            </table>
          </div>
          <!-- /.box-body -->
          <!-- <div class="box-footer">
            Footer
          </div> -->
        </div>
    </section>
 </div>