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
.invoice_header{
    width: 100%;
    display: block;
}
.main_title{
    display: flex;
    justify-content: center;
    align-items:center;
    color: red;
}
.small_title{
    display: flex;
    justify-content: center;
    align-items:center;
}
.mid_tittle{
    display: flex;
    justify-content: center;
    align-items:center;
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

    <section class="content invoiceDesin">
        <div class="container">
            <div class="invoice">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="invoice-container invoiceBody">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice_header">
                                    <h2 class="main_title">হামদর্দ ল্যাবরেটরিজ (ওয়াকফ) বাংলাদেশ</h2>
                                    <p class="small_title">হামদর্দ ভবন, ৯৯ বীর উত্তম সি. আর দত্ত সড়ক, ধানমন্ডি,ঢাকা-১২০৫ </p>
                                    <p class="mid_tittle">পরিবেশক ঃ মেসার্স আজাদ এন্টারপ্রাইজ </p>
                                    <p class="small_title">তালতলি বাজার, সন্দীপ, চর্ট্রগ্রাম ।</p>
                                    <p class="small_title">মোবাইল ঃ ০১৭৪৯৯৭৭৬০৬ </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div>
            
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>