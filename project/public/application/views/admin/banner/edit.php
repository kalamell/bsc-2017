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
          <?php echo form_open_multipart('admin/banner/update');?>
          <input type="hidden" name="id" value="<?php echo $r->id;?>">
          <div class="box-body">
            <div class="form-group">
              <label for="name">หัวข้อ Banner</label>
              <input type="text" class="form-control" name="name" id="name" value="<?php echo $r->name;?>" placeholder="หัวข้อ">
            </div>
            <div class="form-group">
              <label for="url">Link URL</label>
              <input type="text" class="form-control" name="link" value="<?php echo $r->link;?>" id="url" placeholder="Link URL">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">ภาพ Banner</label>
              <input type="file" id="exampleInputFile" name="path">
              <p class="help-block">ขนาดที่แนะนำ 1800 x 800</p>
              <?php if ($r->path!=''):?>
                <img src="<?php echo base_url();?>upload/<?php echo $r->path;?>" class='img-responsive' style="max-width: 300px;" alt="">
              <?php endif;?>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="active" value="1" <?php echo $r->active=='1'?'checked':'';?>> แสดงผล
              </label>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info" name="save">บันทึก</button>
            <a href="<?php echo site_url('admin/banner');?>" class='btn btn-default'>ยกเลิก</a>
          </div>
          <?php echo form_close();?>
        </div>
    </section>
 </div>