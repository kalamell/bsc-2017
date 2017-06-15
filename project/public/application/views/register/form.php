<div class="container">
    <div class="form-register">
        <div data-element="univer/title-univer-creotive.htm" class="title">
            <div class="azen azen1 azen2 azen3">
                <div class="azen-univer-title c8e48d3c" data-group="title univer" style="">
                    <h2 class="az-inline ca259853" style="">ลงทะเบียน</h2>
                    <p>กรุณากรอกข้อมูลในส่วนที่มีเครื่องหมาย * ให้ครบถ้วน</p>
                </div>
            </div>
        </div>

        <?php echo form_open('register/do_save', array( 'id' => 'register', 'class' => 'azen-univer-form-container', 'data-cloneable' => '', 'data-group' => 'form', 'data-white' => 'true'));?>
            <h3>ข้อมูลสำคัญ</h3>
            <div data-element="">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <input name="email" id="email" type="email" value="" placeholder="อีเมล์*">
                    </div>
                </div>
            </div>
            <div data-element="univer/forms/input-field.htm">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <input name="password_first"  type="password" id="password_first" value="" placeholder="รหัสผ่าน*">
                    </div>
                </div>
            </div>
            <div data-element="univer/forms/input-field.htm">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <input name="password_confirm"  type="password" id="password_confirm" value="" placeholder="ยืนยันรหัสผ่าน*">
                    </div>
                </div>
            </div>
            <span class="remark">โดยรหัสจะต้องประกอบด้วยตัวเลขและตัวอักษรจำนวนมากกว่า 8 อักษร โดยมีข้อกำหนดดังต่อไปนี้ ตัวเลข 0-9, ตัวพิมพ์เล็ก a-z และ ตัวพิมพ์ใหญ่ A-Z</span>
            <h3>ข้อมูลส่วนตัว</h3>
            <div class="radio">
                <label>เพศ*</label>
                <input type="radio" name="gender" value="male" checked id="gender">
                <label for="male">ชาย</label>
                <input type="radio" name="gender" value="female" id="gender">
                <label for="female">หญิง</label>
            </div>
             <div data-element="univer/forms/input-field.htm">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <input name="name" id="name" type="text" value="" placeholder="ชื่อ (ภาษาไทย)*">
                    </div>
                </div>
            </div>
            <span>(ไม่ต้องระบุคำนำหน้า นาย/นางสาว)</span>
             <div data-element="univer/forms/input-field.htm">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <input name="surname" id="surname" type="text" value="" placeholder="นามสกุล*">
                    </div>
                </div>
            </div>

            <div class="birthday">
                 <label>วันเกิด*</label>
                 <!-- Birthday, date -->
                <select name="day" id="day">
                    <option value="" selected disabled>วัน</option>
                    <?php for($i=1; $i<=31; $i++):?>
                        <option value="<?php echo sprintf('%02d', $i);?>"><?php echo $i;?></option>
                    <?php endfor;?>
                </select>
                <!-- Birthday, month -->
                <select name="month" id="month">
                    <option value="" selected disabled>เดือน</option>
                    <option value="01">มกราคม</option>
                    <option value="02">กุมภาพันธ์</option>
                    <option value="03">มีนาคม</option>
                    <option value="04">เมษายน</option>
                    <option value="05">พฤษภาคม</option>
                    <option value="06">มิถุนายน</option>
                    <option value="07">กรกฏาคม</option>
                    <option value="08">สิงหาคม</option>
                    <option value="09">กันยายน</option>
                    <option value="10">ตุลาคม</option>
                    <option value="11">พฤศจิกายน</option>
                    <option value="12">ธันวาคม</option>
                </select>
                <!-- Birthday, year -->
                <select name="year" id="year">
                    <option value="" selected disabled>ปี</option>
                    <?php for($i=1989; $i<=2017; $i++):?>
                        <option value="<?php echo $i;?>"><?php $count_i = $i+543; echo $count_i;?></option>
                    <?php endfor;?>
                </select>
            </div>

             <div data-element="univer/forms/input-field.htm">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <input name="idcard" id="idcard" type="text" maxlength="13" value="" placeholder="เลขประจำตัวประชาชน*">
                    </div>
                </div>
            </div>
             <div data-element="univer/forms/input-field.htm">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <input name="mobile" id="mobile" type="text" maxlength="10" minlenght="10" value="" placeholder="เบอร์โทรศัพท์*">
                    </div>
                </div>
            </div>
             <div data-element="univer/forms/input-field.htm">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <input name="school" id="school" type="text" value="" placeholder="โรงเรียน*">
                    </div>
                </div>
            </div>
            <div class="province">
                  <select name="province_id" id="province_id">
                    <option value="" selected disabled>จังหวัด</option>
                    <?php foreach($province as $p):?>
                        <option value="<?php echo $p->province_id;?>"><?php echo $p->province_name;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div data-element="univer/forms/big-text-field.htm">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <textarea name="message" cols="45" rows="8">
                        ข้อกำหนดในการสมัครสมาชิก

                        นโยบายข้อมูลส่วนบุคคล
                        แบรนด์ซัมเมอร์แคมป์ตระหนักถึงความรับผิดชอบในการเก็บรักษาข้อมูลส่วนตัวของท่านซึ่งเป็นข้อมูลที่ท่านได้กรุณา
                        ให้ไว้แก่เราด้วยความสมัครใจซึ่งเราจะจัดเก็บใช้และเปิดเผยข้อมูลที่ท่านได้ให้ไว้นี้ตามนโยบายข้อมูลส่วนบุคคลหาก
                        ท่านไม่ประสงค์ที่จะเราจัดเก็บใช้และเปิดเผยข้อมูลตามวิธีการและเงื่อนไขภายใต้นโยบายข้อมูลส่วนบุคคลฉบับนี้ขอ
                        ให้ท่านระงับการให้ข้อมูลส่วนตัวของท่านแก่เรา

                        ข้อมูลที่เราจัดเก็บจากท่านอาจรวมถึงชื่อที่อยู่อีเมลเบอร์โทรศัพท์เพศอายุข้อมูลสุขภาพและความพึงพอใจต่างๆในกรณี
                        ที่เป็นข้อมูลเกี่ยวกับการสั่งซื้อสินค้าเราจะจัดเก็บข้อมูลการจ่ายเงินของท่านด้วยเช่นข้อมูลบัตรเครดิต (กรณีที่ท่าน
                        ชำระเงินด้วยบัตรเครดิต)

                        เราจะจัดเก็บข้อมูลของท่านในรูปแบบเอกสารและเก็บในฐานข้อมูลทางอิเล็คทรอนิคส์

                        วัตถุประสงค์ในการจัดเก็บใช้และเปิดเผยข้อมูลของท่านได้แก่:
                        1.เพื่อให้บริการข้อมูลข่าวสารด้านสุขภาพและข้อมูลข่าวสารเกี่ยวกับสินค้าและบริการ

                        </textarea>
                    </div>
                </div>
            </div>
            <div class="accept">
                <input type="checkbox" name="accept" value="Y" id="accept">
                <label for="accept">ยืนยันเงื่อนไขและข้อตกลง</label>
            </div>
            <div data-element="general/spacer.htm">
                <div data-group="spacer" style="" class="c0c78fd1"></div>
            </div>
            <div data-element="univer/forms/submit-button.htm">
                <div class="azen azen1 azen2 azen3">
                    <div class="azen-univer-form-field">
                        <div id="submit-button">
                            <button class="ok" type="submit">ยอมรับ</button>
                            <button type="button" onclick="javascript:top.location.href='<?php echo site_url();?>'">ไม่ยอมรับ</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php echo form_close();?>

    </div>
</div>
<div class="register-popup" style="display: none;">
    <div class="popup-inner">
        <a class="btn-close" href=""><img src="<?php echo base_url();?>assets/images/isobar-dev/thankyou.png" alt=""></a>
    </div>
</div>