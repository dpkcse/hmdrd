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

<div class="content-wrapper">
    <!-- /.content-header -->
    <section class="content invoiceDesin">
        <form action="<?php echo base_url('Home/save_sales'); ?>" method="POST">
            <div class="container-fluid" style="background-color: #FFF">
                <div class="box">
                    <div class="box-header with-border" style="display:none">
                        <div class="invoice_header">
                            <h2 class="main_title">হামদর্দ ল্যাবরেটরিজ (ওয়াক্ফ) বাংলাদেশ</h2>
                            <p class="small_title">রুপায়ন ট্রেড সেন্টার (১৩-১৪), ১৪৪ কাজী নজরুল ইসলাম এভিনিউ, বাংলামটর, ঢাকা-১০০০, ফোনঃ ০২-৪৮৩১১৩০১-৬</p>
                            <!-- <p class="mid_tittle">পরিবেশক ঃ মেসার্স আজাদ এন্টারপ্রাইজ </p> -->
                            <p class="small_title">কারখানাঃ মেঘনাঘাট, সোনারগাঁ, নারায়ণগঞ্জ ।</p>
                            <!-- <p class="small_title">মোবাইল ঃ ০১৭৪৯৯৭৭৬০৬ </p> -->
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="row">
                        <div class="box-body col-md-6 col-lg-6" style="margin:35px 0">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>                                
                                        <td style="width: 12%">ইনভয়েস নং ঃ</td>
                                        <td style="width: 30%">
                                            <input type="text" class="form-control" name="invoiceid" id="" value="<?php $uniqidD = mt_rand(100000, 999999); echo '#invoice_'.$uniqidD ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>তারিখ ঃ</td>
                                        <td><input class="form-control" type="date" name="salesDate" id="dateId"></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 12%"> কোড নং ঃ </td>
                                        <td style="width: 30%">
                                            <select class="form-control inpSelect" name="customerCode" onchange="changevalue(this)" id="CodeNumber">
                                                <option value="" disabled selected>Select One</option>
                                                <?php foreach ($allCustomers as $data){ ?>
                                                    <option value="<?php echo $data->id; ?>"><?php echo $data->cus_code; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>নাম ঃ</td>
                                        <td>
                                            <select class="form-control inpSelect" name="customerName" id="pharmacyName">
                                                <option value="" selected disabled>Select One</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ঠিকানা ঃ</td>
                                        <td>
                                            <select class="form-control inpSelect" name="customerAddress" id="pharmacyAddress">
                                                <option value="" selected disabled>Select One</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>প্রতিনিধির নাম ঃ</td>
                                        <td>
                                            <select class="form-control inpSelect" name="stuffid" id="salesMan">
                                                <option value="" selected disabled>Select One</option>
                                                <?php foreach ($allEmployees as $data){ ?>
                                                    <option value="<?php echo $data->person_id; ?>"><?php echo $data->first_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="box-body col-md-6 col-lg-6" style="margin:35px 0">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>                                
                                        <td style="width: 12%">মোট টাকা ঃ</td>
                                        <td style="width: 30%">
                                            <input type="text" class="form-control" name="totaltk" id="totaltk">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>কমিশন ঃ</td>
                                        <td><input type="text" class="form-control" name="discount" id=""></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 12%">প্রদান ঃ </td>
                                        <td style="width: 30%">
                                            <input type="text" class="form-control" name="paid" id="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>পাত্তনা ঃ</td>
                                        <td>
                                            <input type="text" class="form-control" name="due" id="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-body" style="position:relative">
                        <button type="submit" class="btn btn-info btn-sm save-btn">Save</i></button>
                        <!-- <button class="btn btn-info btn-sm print-btn">Print & Save</i></button> -->
                        <span class="btn btn-info btn-sm append_row" onclick="appendNewRow(this)"><i class="fa fa-plus-circle"></i></span>
                        <table class="table table-bordered">
                            <tbody id="invBody">
                                <tr>
                                    <th style="width: 12%;background-color: gray;color:#FFF">কোড নং</th>
                                    <th style="width: 20%;background-color: gray;color:#FFF">ঔষধের নাম</th>
                                    <th style="width: 10%;background-color: gray;color:#FFF">পরিবেশনা </th>
                                    <th style="width: 12%;background-color: gray;color:#FFF">পরিমান</th>
                                    <th style="width: 10%;background-color: gray;color:#FFF">পন্যের দাম </th>
                                    <th style="width: 20%;background-color: gray;color:#FFF">টাকা</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </form>
    </section>
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>

<script>
var productsDetails = [];

<?php foreach($allproducts as $val){ ?>
    productsDetails.push({'name':'<?php echo $val->pro_name; ?>','code':'<?php echo $val->code_no; ?>'});
<?php } ?>

// $('.inpSelect').select2();


function changevalue(elm) {
    var cus_code = $(elm).val();
    $.ajax({
       type: 'POST',
       url: '<?php echo base_url(); ?>home/getCustomerBy_code',
       data: {cus_code: cus_code},
       success: function (res) {
           if (res) {
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


function appendNewRow(elm) {
    var _uniqueRow_id = $('#invBody tr').length;
    var html = '<tr class="eachRow">'+
                '    <td class="code_no">'+
                '       <select class="form-control inpSelect code_select" id="code_no_'+_uniqueRow_id+'" name="productcode[]" style="width:100%;" onchange="getProductDetailsByCode(this)">'+
                '           <option value="" selected disabled>Select One</option>'+
                '       </select>'+
                '    </td>'+
                '    <td class="pro_name">'+
                '    </td>'+
                '    <td class="amount"></td>'+
                '    <td class="qty"><input type="text" onkeyup="multiplyQty(event)" name="qty[]" class="form-control pro_qty" disabled></td>'+
                '    <td class="sale_price"></td><input type="hidden" class="sale_priceinput" name="salePrice[]">'+
                '    <td class="total_price"></td>'+
               '</tr>';
        $('#invBody').append(html);

        jQuery.each(productsDetails, function (k,v) {
            $('#col_id'+_uniqueRow_id).append('<option value="'+v.name+'">'+v.name+'</option>');
            $('#code_no_'+_uniqueRow_id).append('<option value="'+v.code+'">'+converEn2Bn(v.code)+'</option>');
        });
        select22();
}

function select22(){
    $('.inpSelect').select2({
        placeholder: "সিলেক্ট করুন"
    });
}
select22();

function getProductDetailsByCode(elm) {
    var _prnt = $(elm).parents('.eachRow');

    var code_no = $(elm).val();
    $.ajax({
       type: 'POST',
       url: '<?php echo base_url(); ?>home/getProductDetailsByCode',
       data: {code_no: code_no},
       success: function (res) {
           if (res) {
            $(_prnt).find('.qty .pro_qty').removeAttr('disabled').focus();
            $.each( JSON.parse(res), function (k,v) {
                $(_prnt).find('.pro_name').text(v.pro_name);
                $(_prnt).find('.amount').text(v.amount);
                $(_prnt).find('.sale_price').text(v.sale_price).attr('tk',bn2en(v.sale_price));
                $(_prnt).find('.sale_priceinput').val(bn2en(v.sale_price));
            });
            var totalAmount = 0;
            $.each($('.sale_price'), function (k,v) {
                totalAmount = parseInt(totalAmount)+ parseInt($(v).attr('tk'));
            });

            $("#totaltk").val(converEn2Bn(totalAmount));

        }           
       }
    });
}

function bn2en(number) {
    var bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
    var en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

    var a = number.split('');
    var bnToEn = [];
    $.each(a,function(k,v){
        var i = bn.indexOf(v);
        var text = en[i];
        bnToEn.push(text);
    });
    return bnToEn.join("");
}


function multiplyQty(e) {
    var code = event.which || event.keyCode;
    if (code == 13) {
        if ($(e.target).val() != '') {
            var tk = $(e.target).parents('.eachRow').find('.sale_price').attr('tk');
            var qty = bn2en($(e.target).val());
            var total_tk = parseInt(tk) * parseInt(qty);
            var cnvtValue = converEn2Bn(total_tk);
            $(e.target).parents('.eachRow').find('.total_price').text(cnvtValue);
            $('.append_row').trigger('click');
        }
    }
}


function converBn2En(amount) {
    var englishDigits = {'০': '0', '১': '1', '২': '2', '৩': '3', '৪': '4', '৫': '5', '৬': '6', '৭': '7', '৮': '8', '৯': '9' };
    var banglaDigits = {'0': '০', '1': '১', '2': '২', '3': '৩', '4': '৪', '5': '৫', '6': '৬', '7': '৭', '8': '৮', '9': '৯' };
    var amount_en = amount.replace(/[০১২৩৪৫৬৭৮৯]/g, function(s) {
        return englishDigits[s];
    });  
    return amount_en;
}


function converEn2Bn(amount) {
    var englishDigits = {'০': '0', '১': '1', '২': '2', '৩': '3', '৪': '4', '৫': '5', '৬': '6', '৭': '7', '৮': '8', '৯': '9' };
    var banglaDigits = {'0': '০', '1': '১', '2': '২', '3': '৩', '4': '৪', '5': '৫', '6': '৬', '7': '৭', '8': '৮', '9': '৯' };
    var amount_np = amount.toString().replace(/[0123456789]/g, function(s) {
        return banglaDigits[s];
    });
    return amount_np;
}

</script>