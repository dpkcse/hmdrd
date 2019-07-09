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
    width: 25px;
    height: 25px;
    border-radius: 25px;
    position: absolute;
    right: 2px;
    top: -30px;
    cursor: pointer;
    color: #FFF;
}
.append_row .fa{
    font-size: 30px;
    color: gray;
}
.select2{
    width:100% !important;
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
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content invoiceDesin">
        <div class="container" style="background-color: #FFF">
            <div class="box">
                <div class="box-header with-border">
                    <div class="invoice_header">
                        <h2 class="main_title">হামদর্দ ল্যাবরেটরিজ (ওয়াকফ) বাংলাদেশ</h2>
                        <p class="small_title">হামদর্দ ভবন, ৯৯ বীর উত্তম সি. আর দত্ত সড়ক, ধানমন্ডি,ঢাকা-১২০৫ </p>
                        <p class="mid_tittle">পরিবেশক ঃ মেসার্স আজাদ এন্টারপ্রাইজ </p>
                        <p class="small_title">তালতলি বাজার, সন্দীপ, চর্ট্রগ্রাম ।</p>
                        <p class="small_title">মোবাইল ঃ ০১৭৪৯৯৭৭৬০৬ </p>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="margin-bottom:35px">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 12%"> কোড নং ঃ </th>
                                <th style="width: 30%">
                                    <select class="form-control" name="" onchange="changevalue(this)" id="CodeNumber">
                                        <option value="" disabled selected>Select One</option>
                                        <?php foreach ($allCustomers as $data){ ?>
                                                <option value="<?php echo $data->cus_code; ?>"><?php echo $data->cus_code; ?></option>
                                        <?php } ?>
                                    </select>
                                </th>
                                <th style="width: 12%">ইনভয়েস নং ঃ</th>
                                <th style="width: 30%">১</th>
                            </tr>
                            <tr>
                                <td>নাম ঃ</td>
                                <td>
                                    <select class="form-control" name="" id="pharmacyName">
                                        <option value="" selected disabled>Select One</option>
                                    </select>
                                </td>
                                <td>তারিখ ঃ</td>
                                <td><input class="form-control" type="date" name="" id="dateId"></td>
                            </tr>
                            <tr>
                                <td>ঠিকানা ঃ</td>
                                <td>
                                    <select class="form-control" name="" id="pharmacyAddress">
                                        <option value="" selected disabled>Select One</option>
                                    </select>
                                </td>
                                <td>প্রতিনিধির নাম ঃ</td>
                                <td>
                                    <select class="form-control" id="salesMan">
                                        <option value="" selected disabled>Select One</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-body" style="position:relative">
                <div class="append_row" onclick="appendNewRow(this)"><i class="fa fa-plus-circle"></i></div>
                    <table class="table table-bordered">
                        <tbody id="invBody">
                            <tr>
                                <th style="width: 12%;background-color: gray;color:#FFF">কোড নং</th>
                                <th style="width: 20%;background-color: gray;color:#FFF">ঔষধের নাম</th>
                                <th style="width: 10%;background-color: gray;color:#FFF">মিঃ লিঃ </th>
                                <th style="width: 12%;background-color: gray;color:#FFF">পরিমান</th>
                                <th style="width: 10%;background-color: gray;color:#FFF">পন্যের দাম </th>
                                <th style="width: 20%;background-color: gray;color:#FFF">মোট টাকা</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <select class="form-control medicinename " id="medicinename" style="width:82%;" onchange="selectandClr(this.value)">
                                    <?php $customers   = $this->db->get('products')->result_array(); ?>
                                    <?php foreach ($customers as $row2){ ?>
                                    <option><?php echo $row2['pro_name']."(".$row2['amount'].") "; ?></option>
                                    <?php } ?>
                                </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>

<script>
function appendNewRow(elm) {
    var html = '<tr>'+
                '    <td></td>'+
                '    <td><select class="form-control medicinename " id="medicinename" style="width:82%;" onchange="selectandClr(this.value)"></select></td>'+
                '    <td></td>'+
                '    <td></td>'+
                '    <td></td>'+
                '    <td></td>'+
               '</tr>';
        $('#invBody').append(html);
        select22();
}



function changevalue(elm) {
    var cus_code = $(elm).val();
    $.ajax({
       type: 'POST',
       url: '<?php echo base_url(); ?>home/getCustomerBy_code',
       data: {cus_code: cus_code},
       success: function (res) {
           if (res) {
            console.log(11, res)
            $('#pharmacyName').html('');
            $('#pharmacyAddress').html('');
            jQuery.each( JSON.parse(res), function (k,v) {
                $('#pharmacyName').append('<option value="'+v.cus_name+'">'+v.cus_name+'</option>');
                $('#pharmacyAddress').append('<option value="'+v.cus_address+'">'+v.cus_address+'</option>');
            });
        }           
       }
    });
}
function select22(){
    $('.medicinename').select2({
        maximumSelectionLength: 1,
        placeholder: "ঔষধের নাম সিলেক্ট করে এন্টার চাপুন"
    });
}
select22()
var selectandClr = (value) =>{
    console.log(value);
   $(".select2-selection__choice__remove").click();
   $(".select2").click();
};
</script>