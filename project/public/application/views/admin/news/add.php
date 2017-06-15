<div class="content-wrapper">
    <section class="content-header">
      <h1>
        ข่าว
        <small>จัดการข่าว</small>
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
          <?php echo form_open_multipart('admin/news/do_save');?>
          <div class="box-body">
            <div class="form-group">
              <label for="title">ชื่อข่าว</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="หัวข้อ">
            </div>
            <div class="form-group">
              <label for="except">รายละเอียดย่อ</label>
              <textarea class="form-control" name="except" rows="5" id="except"></textarea>
            </div>

            <div class="form-group">
              <label for="description">รายละเอียด</label>
              <textarea class="form-control textarea" name="description" id="description"></textarea>
            </div>


            <div class="form-group">
              <label for="exampleInputFile">ภาพประกอบ</label>
              <input type="file" id="exampleInputFile" name="image_path">

              <p class="help-block">ขนาดที่แนะนำ 620 x 459</p>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="active" value="1"> แสดงผล
              </label>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info" name="save">บันทึก</button>
            <a href="<?php echo site_url('admin/news');?>" class='btn btn-default'>ยกเลิก</a>
          </div>
          <?php echo form_close();?>
        </div>
    </section>
 </div>