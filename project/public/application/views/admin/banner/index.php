<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Banner
        <small>จัดการแบนเนอร์</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Banner</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">แบนเนอร์</h3>

            <div class="box-tools pull-right">
              <a href="<?php echo site_url('admin/banner/add');?>" class="btn btn-info btn-sm">เพิ่มข้อมูล</a>
            </div>
          </div>
          <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="80">Active</th>
                        <th>ภาพ</th>
                        <th>ชื่อ</th>
                        <th width="120">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (count($rs)==0): ?>
                    <tr><td colspan="3">- - - - ไม่มีข้อมูล - - - -</td></tr>
                <?php else:?>
                    <?php foreach($rs as $r):?>
                    <tr>
                        <td align="center"><?php echo $r->active==1?'<font class="label label-success">Y</font>':'N';?></td>
                        <td><img src="<?php echo base_url();?>upload/<?php echo $r->path;?>"  class="img-responsive" style="max-width: 300px;" alt="">
                        </td>
                        <td><?php echo $r->name;?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <a class="btn btn-default btn-sm" href="<?php echo site_url('admin/banner/edit/'.$r->id);?>">แก้ไข</a>
                              <a class="btn btn-default btn-sm" href="<?php echo site_url('admin/banner/delete/'.$r->id);?>" onclick="javascript: return confirm('ต้องการลบหรือไม่ ?');"><i class='fa fa-trash'></i></a>
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