<?php 

function bn2en($number) {
    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    return str_replace($bn, $en, $number);
}

function en2bn($number) {
    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    return str_replace($en, $bn, $number);
}

?>
<?php include('partials/head.php'); ?>
<style>
.form-group {
    margin-top: 1rem;
}

.center-block {
    float:none;
}

.form-group {
    margin-top: 1rem;
}
.content-header{
    padding: 5px .5rem;
}
.center-block {
    float:none;
}
.invoice_header{
    width: 100%;
    display: block;
    padding: 20px;
}
.main_title{
    display: flex;
    justify-content: center;
    align-items:center;
    color: red;
    background-image: url(<?php echo base_url(); ?>Assets/dist/img/logo.png);
    background-repeat: no-repeat;   
    background-size: 65px;
    background-position-x: calc(50% - 310px);
}
.small_title{
    display: flex;
    justify-content: center;
    align-items:center;
    margin-bottom: 5px;
}
.mid_tittle{
    display: flex;
    justify-content: center;
    align-items:center;
    margin-bottom: 5px;
}
.append_row{
    position: absolute;
    right: 2px;
    top: -36px;
    cursor: pointer;
    color: #FFF;
}
.append_row .fa{
    font-size: 16px;
    color: #FFF;
}
.save-btn{
    position: absolute;
    right: 143px;
    top: -36px;
}
.print-btn{
    position: absolute;
    top: -36px;
    right: 40px;
}
.select2{
    width:100% !important;
}
.select2-container .select2-selection--single{
    height: 38px !important;
}
.invoiceDesin .table tr td, .invoiceDesin .table tr th {
    line-height: 20px;
    padding: 5px 15px;
}
select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem - 2px);
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin-left: 0px;">
    <!-- Main content -->
    <section class="content invoiceDesin">
        <div class="row">
            <div class="invoice">
                <div class="box-header with-border" style="display:block">
                    <div class="invoice_header">
                        <h2 class="main_title">হামদর্দ ল্যাবরেটরিজ (ওয়াক্ফ) বাংলাদেশ</h2>
                        <p class="small_title">রুপায়ন ট্রেড সেন্টার (১৩-১৪), ১৪৪ কাজী নজরুল ইসলাম এভিনিউ, বাংলামটর, ঢাকা-১০০০, ফোনঃ ০২-৪৮৩১১৩০১-৬</p>
                        <p class="small_title">কারখানাঃ মেঘনাঘাট, সোনারগাঁ, নারায়ণগঞ্জ ।</p>
                    </div>
                </div>
                <div class="invoice-container invoice-container-highlight">
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-address">
                                        <h5>পরিবেশকঃ মেসার্স আজাদ এন্টারপ্রাইজ</h5>
                                        <p>তালতলি বাজার, সন্দ্বীপ, চট্টগ্রাম<br>ফোন: ০১৭৪৯৯৭৭৬০৬</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-address text-right">
                                        <h5><?php echo $this->admin_model->get_type_name_by_id('customers',$invoicedata[0]['customer_id'],'cus_name') ;?></h5>
                                        <p><?php echo $this->admin_model->get_type_name_by_id('customers',$invoicedata[0]['customer_id'],'cus_address') ;?> <br>ফোন: <?php echo $this->admin_model->get_type_name_by_id('customers',$invoicedata[0]['customer_id'],'cus_mobile') ;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-container invoiceBody">
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-2">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th >ঔষধের নাম</th>
                                            <th class="text-center">পরিবেশনা</th>
                                            <th class="text-center" width="150">পরিমান</th>
                                            <th class="text-center" width="150">দর</th>
                                            <th class="text-center" width="150">টাকা &#2547;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-thin tblProductBody">
                                    <?php
                                        $total = 0;
                                        foreach ( $invoiceitemdata as $row):
                                    ?>
                                        <tr>
                                            <td width="40" class="text-center">১</td>
                                            <td class="" ><?php echo $this->admin_model->get_type_name_by_id('products',$row['item_id'],'pro_name') ;?></td>
                                            <td class="text-center"><?php echo $this->admin_model->get_type_name_by_id('products',$row['item_id'],'amount') ;?></td>
                                            <td class="text-center"><?php echo en2bn($row['quantity_purchased']); ?></td>
                                            <td class="text-center"><?php echo en2bn($row['item_unit_price']); ?></td>
                                            <td class="text-center"><?php echo en2bn(bn2en($row['quantity_purchased'])*bn2en($row['item_unit_price'])); ?></td>
                                        </tr>
                                    <?php
                                        $total = $total + bn2en($row['quantity_purchased'])*bn2en($row['item_unit_price']);
                                        endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <table class="table table-bordered invoice-table-total">
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-muted text-thin"><strong>মোট</strong></td>
                                                <td width="150" class="text-center text-muted"><?php echo en2bn($total) ?> &#2547;</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted text-thin"><strong>জমা</strong></td>
                                                <td width="150" class="text-center text-muted"><?php echo en2bn($invoicedata[0]['sales_paid']); ?>  &#2547;</td>
                                            </tr>
                                            <tr class="invoice-table-highlight">
                                                <td class="text-center text-bold"><strong>বাকী</strong></td>
                                                <td width="150" class="text-center text-bold"><?php echo en2bn($total-$invoicedata[0]['sales_paid']) ?> &#2547;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-thanks">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- <div class="title">ধন্যবাদান্তে:</div>
                                        <p>মেসার্স আজাদ এন্টারপ্রাইজ</p> -->
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <!-- <p><img src="http://boooya.aqvatarius.com/assets/images/signature.png" alt="signature"></p>          -->
                                        <div class="title borderUP">বিক্রয় প্রতিনিধি: <?php echo $this->admin_model->get_people_name_by_id('hmdrd_people',$invoicedata[0]['employee_id'],'first_name') ;?></div>
                                        <p class="text-italic">মেসার্স আজাদ এন্টারপ্রাইজ</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('partials/foot.php'); ?>