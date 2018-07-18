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
<?php include('partials/uppernav.php'); ?>
<?php include('partials/sidebar.php'); ?>
<style>
    .form-group {
        margin-top: 1rem;
    }

    .center-block {
        float:none;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">ইনভয়েস</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
                </ol> -->
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<<<<<<< HEAD
    <section class="content invoiceDesin">
        <div class="container">
            <div class="invoice">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="invoice-container invoiceBody">
                        <div class="row">
                            <div class="col-lg-11 col-lg-offset-2">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Minimal</label>
                                    <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">কাষ্টমার সিলেক্ট করুন</option>
                                    <?php $customers   = $this->db->get('customers')->result_array(); ?>
                                    <?php foreach ($customers as $row2){ ?>
                                    <option><?php echo en2bn($row2['cus_name']); ?></option>
                                    <?php } ?>
                                    
                                    </select>
                                </div>
                                </div>
                                <div class="col-lg-6"></div>
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
                                            <tr>
                                                <td width="40" class="text-center">১</td>
                                                <td class="" >সিরাপ সিনকারা</td>
                                                <td class="text-center">৪৫০ মিলি</td>
                                                <td class="text-center">৫</td>
                                                <td class="text-center">১৫০</td>
                                                <td class="text-center">৭৫০</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-8">
                                        <table class="table table-bordered invoice-table-total">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center text-muted text-thin"><strong>মোট</strong></td>
                                                    <td width="150" class="text-center text-muted">১৫০০ &#2547;</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center text-muted text-thin"><strong>জমা</strong></td>
                                                    <td width="150" class="text-center text-muted">৫০০ &#2547;</td>
                                                </tr>
                                                <tr class="invoice-table-highlight">
                                                    <td class="text-center text-bold"><strong>বাকী</strong></td>
                                                    <td width="150" class="text-center text-bold">১০০০ &#2547;</td>
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
                                            <p><img src="http://boooya.aqvatarius.com/assets/images/signature.png" alt="signature"></p>         
                                            <div class="title borderUP">বিক্রয় প্রতিনিধি: মাক্সুদুর রাহমান</div>
                                            <p class="text-italic">মেসার্স আজাদ এন্টারপ্রাইজ</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
=======
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                 <!-- right column -->
                <div class="col-md-12">
                    
                    <!-- /.box -->
                    <div class="invoice-container invoiceBody">

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="box-body">
                                        <div class="form-group">
                                        <label for="inputEmail3" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্ট নামঃ </label>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="প্রোডাক্টের নাম এইখানে লিখুন">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputPassword3" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের বিবরণঃ  </label>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="প্রোডাক্টের বিবরণ এইখানে লিখুন">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের ধরনঃ</label>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">সিরাপ</option>
                                                    <option>ট্যাবলেট</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-12 col-md-12 col-sm-12 control-label">পরিমানঃ</label>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <input type="text" class="form-control" id="inputPassword3" placeholder="উদাঃ ৪৫০ মিঃ লিঃ/ ২ পাতা">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="inputPassword3" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের ক্রয়মূল্যঃ  </label>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="number" class="form-control" id="inputPassword3" placeholder="প্রোডাক্টের ক্রয়মূল্য এইখানে লিখুন">
                                        </div>
                                        <div class="form-group">
                                        <label for="inputPassword3" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের বিক্রয়মূল্যঃ  </label>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="প্রোডাক্টের বিক্রয়মূল্য এইখানে লিখুন">
                                        </div>
                                        <div class="form-group">
                                        <label for="inputPassword3" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের এম আর পি (MRP):   </label>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="রোডাক্টের এম আর পি (MRP) এইখানে লিখুন">
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer text-center">
                                        <button type="submit" class="btn btn-defaul" style="margin-right: 1%;">বাতিল</button>
                                        <button type="submit" class="btn btn-info">সেইভ করুন</button>
                                    </div>
                                <!-- /.box-footer -->
                                </form>
                            </div>
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
                                            <tr>
                                                <td width="40" class="text-center">১</td>
                                                <td class="" >সিরাপ সিনকারা</td>
                                                <td class="text-center">৪৫০ মিলি</td>
                                                <td class="text-center">৫</td>
                                                <td class="text-center">১৫০</td>
                                                <td class="text-center">৭৫০</td>
                                            </tr>
                                            <tr>
                                                <td width="40" class="text-center">১</td>
                                                <td class="" >সিরাপ কারমিনা</td>
                                                <td class="text-center">২৫০ মিলি</td>
                                                <td class="text-center">৩</td>
                                                <td class="text-center">৫০</td>
                                                <td class="text-center">১৫০</td>
                                            </tr>
                                            <tr>
                                                <td width="40" class="text-center">১</td>
                                                <td class="" >সিরাপ ছাফী</td>
                                                <td class="text-center">১০০ মিলি</td>
                                                <td class="text-center">১</td>
                                                <td class="text-center">১০০</td>
                                                <td class="text-center">১০০</td>
                                            </tr>
                                            <tr>
                                                <td width="40" class="text-center">১</td>
                                                <td class="" >আরক ফাওলিন</td>
                                                <td class="text-center">৪৫০ মিলি</td>
                                                <td class="text-center">২</td>
                                                <td class="text-center">২৫০</td>
                                                <td class="text-center">৫০০</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-8">
                                        <table class="table table-bordered invoice-table-total">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center text-muted text-thin"><strong>মোট</strong></td>
                                                    <td width="150" class="text-center text-muted">১৫০০ &#2547;</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center text-muted text-thin"><strong>জমা</strong></td>
                                                    <td width="150" class="text-center text-muted">৫০০ &#2547;</td>
                                                </tr>
                                                <tr class="invoice-table-highlight">
                                                    <td class="text-center text-bold"><strong>বাকী</strong></td>
                                                    <td width="150" class="text-center text-bold">১০০০ &#2547;</td>
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
                                            <p><img src="http://boooya.aqvatarius.com/assets/images/signature.png" alt="signature"></p>         
                                            <div class="title borderUP">বিক্রয় প্রতিনিধি: মাক্সুদুর রাহমান</div>
                                            <p class="text-italic">মেসার্স আজাদ এন্টারপ্রাইজ</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
>>>>>>> 5832d759bd35da940c90880bc6afb1f819acc29d
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div>
            
        </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>