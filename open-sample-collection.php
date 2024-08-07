<?php 
require_once './classes/function.php';
$obj= new web();

if(empty($_SESSION['Baroque_EmployeeID'])) {
  header("Location:login.php");
  exit(0);
}

if(isset($_REQUEST['action']) && $_REQUEST['action'] =='list')
{
    $getAllData=$obj->get_OTFSI_Data($SAMPLECOLLECTION_API);
    // echo '<pre>';
    // print_r($getAllData);
    // die();
    $count=count($getAllData);

    $adjacents = 1;

    $records_per_page =20;
    $page = (int) (isset($_POST['page_id']) ? $_POST['page_id'] : 1);

    // =========================================================================================
        if($page=='1'){
            $r_start='0';   // 0
            $r_end=$records_per_page;    // 20
        }else{
            $r_start=($page*$records_per_page)-($records_per_page);   // 20
            $r_end=($records_per_page*$page);   // 40
        }
    // =========================================================================================

    $page = ($page == 0 ? 1 : $page);
    $start = ($page-1) * $records_per_page;
    $i = (($page * $records_per_page) - ($records_per_page - 1)); // used for serial number.
    
    $next = $page + 1;    
    $prev = $page - 1;
    $last_page = ceil($count/$records_per_page);
    $second_last = $last_page - 1; 
    $pagination = "";

    if($last_page > 1)
    {
            $pagination .= "<div class='pagination' style='float: right;'>";

        if($page > 1)
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a>";
        else
            $pagination.= "<spn class='disabled'>&laquo; Previous&nbsp;&nbsp;</spn>";   

        if($last_page < 7 + ($adjacents * 2))
        {   
        for ($counter = 1; $counter <= $last_page; $counter++)
            {
            if ($counter == $page)
                $pagination.= "<spn class='current'>$counter</spn>";
            else
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($counter).");'>$counter</a>";     
            }
        }
        elseif($last_page > 5 + ($adjacents * 2))
        {
            if($page < 1 + ($adjacents * 2))
                {
                for($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                    {
                    if($counter == $page)
                        $pagination.= "<spn class='current'>$counter</spn>";
                    else
                        $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($counter).");'>$counter</a>";     
                    }
                    $pagination.= "...";
                    $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($second_last).");'> $second_last</a>";
                    $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($last_page).");'>$last_page</a>";   

                }
            elseif($last_page - ($adjacents * 2) > $page && $page > ($adjacents * 2))
            {
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(1);'>1</a>";
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(2);'>2</a>";
                $pagination.= "...";
                for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                    {
                    if($counter == $page)
                           $pagination.= "<spn class='current'>$counter</spn>";
                   else
                           $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($counter).");'>$counter</a>";     
                    }

                $pagination.= "..";
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($second_last).");'>$second_last</a>";
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($last_page).");'>$last_page</a>";   
            }
            else
            {
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(1);'>1</a>";
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(2);'>2</a>";
                $pagination.= "..";

                for($counter = $last_page - (2 + ($adjacents * 2)); $counter <= $last_page; $counter++)
                {
                    if($counter == $page)
                        $pagination.= "<spn class='current'>$counter</spn>";
                    else
                        $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($counter).");'>$counter</a>";     
                }
            }

        }

        if($page < $counter - 1)
            $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($next).");'>Next &raquo;</a>";
        else

            $pagination.= "<spn class='disabled'>Next &raquo;</spn>";
            $pagination.= "</div>";       
    }

    $option.= '<table id="tblItemRecord" class="table sample-table-responsive table-bordered" style="">
                <thead class="fixedHeader1">
                    <tr>
                        <th>Sr.No </th>
                        <th>Item View</th>
                        <th>Doc Date</th>
                        <th>Type of Material</th>
                        <th>GRPO No</th>
                        <th>GRPO DocEntry</th>
                        <th>Supplier Code</th>
                        <th>Supplier Name</th>
                        <th>Bp Ref No</th>
                        <th>LineNum</th>
                        <th>Item Code</th> 
                        <th>Item Name</th> 
                        <th>Pharmacopeias Standard</th>
                        <th>Material Type</th>
                        <th>Unit</th>
                        <th>GRPO Qty</th>
                        <th>Batch No</th>
                        <th>Batch Qty</th>
                        <th>Mfg Date</th>
                        <th>Expiry Date</th>
                        <th>Sample Intimation</th>
                        <th>Location</th>
                        <th>SIDocEntry</th>
                        <th>Branch Name</th>
                        <th>MakeBy</th>
                    </tr>
                </thead>
                <tbody>';

                if(count($getAllData)!='0'){
                    for ($i=$r_start; $i <$r_end ; $i++) { 
                        if(!empty($getAllData[$i]->SrNo)){   //  this condition save to extra blank loop

                            // --------------- Convert String code Start Here ---------------------------
                                if(empty($getAllData[$i]->MfgDate)){
                                    $MfgDate='';
                                }else{
                                    $MfgDate=date("d-m-Y", strtotime($getAllData[$i]->MfgDate));
                                }

                                if(empty($getAllData[$i]->ExpiryDate)){
                                    $ExpiryDate='';
                                }else{
                                    $ExpiryDate=date("d-m-Y", strtotime($getAllData[$i]->ExpiryDate));
                                }
                            // --------------- Convert String code End Here-- ---------------------------

                            $option.='
                                <tr>
                                    <td class="desabled" style="text-align: center;">'.$getAllData[$i]->SrNo.'.</td>

                                    <td style="width: 100px;vertical-align: middle; text-align: center;">
                                        <a href="" class="" data-bs-toggle="modal" data-bs-target=".open-sample-collection" onclick="OT_PoPup_SampleCollection(\''.$getAllData[$i]->GRPODocEntry.'\',\''.$getAllData[$i]->BatchNo.'\',\''.$getAllData[$i]->ItemCode.'\',\''.$getAllData[$i]->LineNum.'\')">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    
                                    <td class="desabled">'.(!empty($getAllData[$i]->DocDate)? date("d-m-Y", strtotime($getAllData[$i]->DocDate)) : '').'</td>
                                    <td class="desabled">'.$getAllData[$i]->TypeofMaterial.'</td>
                                    <td class="desabled">'.$getAllData[$i]->GRPONo.'</td>
                                    <td class="desabled">'.$getAllData[$i]->GRPODocEntry.'</td>
                                    <td class="desabled">'.$getAllData[$i]->SupplierCode.'</td>
                                    <td class="desabled">'.$getAllData[$i]->SupplierName.'</td>
                                    <td class="desabled">'.$getAllData[$i]->BpRefNo.'</td>
                                    <td class="desabled">'.$getAllData[$i]->LineNum.'</td>
                                    <td class="desabled">'.$getAllData[$i]->ItemCode.'</td>
                                    <td class="desabled">'.$getAllData[$i]->ItemName.'</td>
                                    <td class="desabled">'.$getAllData[$i]->PharmacopeiasStandard.'</td>
                                    <td class="desabled">'.$getAllData[$i]->MaterialType.'</td>
                                    <td class="desabled">'.$getAllData[$i]->Unit.'</td>
                                    <td class="desabled">'.$getAllData[$i]->GRNQty.'</td>
                                    <td class="desabled">'.$getAllData[$i]->BatchNo.'</td>
                                    <td class="desabled">'.$getAllData[$i]->BatchQty.'</td>
                                    <td class="desabled">'.$MfgDate.'</td>
                                    <td class="desabled">'.$ExpiryDate.'</td>
                                    <td class="desabled">'.$getAllData[$i]->SampleIntimationNo.'</td>
                                    <td class="desabled">'.$getAllData[$i]->Location.'</td>
                                    <td class="desabled">'.$getAllData[$i]->SIDocEntry.'</td>
                                    <td class="desabled">'.$getAllData[$i]->BranchName.'</td>
                                    <td class="desabled">'.$getAllData[$i]->MakeBy.'</td>
                                </tr>';
                        }
                    }
                }else{
                    $option.='<tr><td colspan="18" style="color:red;text-align:center;font-weight: bold;">No record</td></tr>';
                }
        $option.='</tbody> 
    </table>'; 

    $option.=$pagination;        
    echo $option;
    exit(0);
}
?>
<?php include 'include/header.php' ?>
<?php include 'models/sample-collection-model.php' ?>

    <!-- gridjs css -->
    <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    
   <style type="text/css">
        body[data-layout=horizontal] .page-content {padding: 20px 0 0 0;padding: 40px 0 60px 0;}
   </style>
<!-- ---------- loader start here---------------------- -->
    <div class="loader-top" style="height: 100%;width: 100%;background: #cccccc73;">
        <div class="loader123" style="text-align: center;z-index: 10000;position: fixed;top: 0; left: 0;bottom: 0;right: 0;background: #cccccc73;">
            <img src="loader/loader2.gif" style="width: 5%;padding-top: 288px !important;">
        </div>
    </div>
<!-- ---------- loader end here---------------------- -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Sample Collection</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Sample Collection</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header justify-content-between d-flex align-items-center">
                                <h4 class="card-title mb-0">Open Transaction For Sample Collection</h4> 
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="table-responsive" id="list-append">
                                    <!-- // page record appned here -->
                                </div> 
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <br>
   <?php include 'include/footer.php' ?>

<script type="text/javascript">
    $(".loader123").hide(); // loader default hide script

    $(document).ready(function()
    {
        var dataString ='action=list';
        
        $.ajax({  
            type: "POST",  
            url: window.location.href,  
            data: dataString,  
            beforeSend: function(){
                $(".loader123").show();
            },
            success: function(result)
            {  
                $('#list-append').html(result);
            },
            complete:function(data){
                $(".loader123").hide();
            }
       });
    });

    function change_page(page_id)
    { 
        var dataString ='page_id='+page_id+'&action=list';

        $.ajax({
            type: "POST",
             url: window.location.href,  
            data: dataString,
            cache: false,
            beforeSend: function(){
                $(".loader123").show();
            },
            success: function(result)
            {
                $('#list-append').html(result);
            },
            complete:function(data){
                $(".loader123").hide();
            }
        });
    }

    function OT_PoPup_SampleCollection(DocEntry,BatchNo,ItemCode,LineNum){
        $.ajax({ 
            type: "POST",
            url: 'ajax/common-ajax.php',
            data:{'DocEntry':DocEntry,'BatchNo':BatchNo,'ItemCode':ItemCode,'LineNum':LineNum,'action':"OT_Sample_Collection_popup"},

            beforeSend: function(){
                $(".loader123").show();
            },
            success: function(result)
            {
                var JSONObject = JSON.parse(result);
                // console.log(JSONObject);

                $(`#OTSCP_SupplierCode`).val(JSONObject[0]['SupplierCode']);
                $(`#OTSCP_SupplierName`).val(JSONObject[0]['SupplierName']);

                $(`#OTSCP_IngredientsType`).val(JSONObject[0]['IngType']);
                $(`#OTSCP_LineNum`).val(JSONObject[0]['LineNum']);
                $(`#OTSCP_GRPONo`).val(JSONObject[0]['GRPONo']);
                $(`#OTSCP_GRPODocEntry`).val(JSONObject[0]['GRPODocEntry']);
                $(`#OTSCP_Location`).val(JSONObject[0]['Location']);
                $(`#OTSCP_SQtyUOM`).val(JSONObject[0]['Unit']);
                $(`#OTSCP_SQty`).val(JSONObject[0]['SQty']);
                $(`#OTSCP_BranchName`).val(JSONObject[0]['BranchName']);
                $(`#OTSCP_ItemCode`).val(JSONObject[0]['ItemCode']);
                $(`#OTSCP_ItemName`).val(JSONObject[0]['ItemName']);
                $(`#OTSCP_BatchNo`).val(JSONObject[0]['BatchNo']);
                $(`#OTSCP_IntimatedBy`).val(JSONObject[0]['IntimationBy']);
                $(`#OTSCP_ARNo`).val(JSONObject[0]['ARNo']);
                $(`#OTSCP_TRNo`).val(JSONObject[0]['TRNo']);
                $(`#OTSCP_BatchQty`).val(JSONObject[0]['BatchQty']);
                $(`#OTSCP_NoOfCont`).val(JSONObject[0]['NoofContainer']);
                $(`#OTSCP_RQtyUom`).val(JSONObject[0]['SQtyUOM']);
                $(`#OTSCP_RetainQty`).val(JSONObject[0]['RetainQty']);
                $(`#OTSCP_ContNo1`).val(JSONObject[0]['Container1']);
                $(`#OTSCP_ContNo2`).val(JSONObject[0]['Container2']);
                $(`#OTSCP_ContNo3`).val(JSONObject[0]['Container3']);
                $(`#OTSCP_QtyLab`).val(JSONObject[0]['QtyforLabel']);
                $(`#OTSCP_DRev`).val(JSONObject[0]['DateofReversal']);
                $(`#OTSCP_UTNo`).val(JSONObject[0]['UnderTestTransferNo']);
                $(`#OTSCP_BPLId`).val(JSONObject[0]['BPLId']);
                $(`#OTSCP_LocCode`).val(JSONObject[0]['LocCode']);


                $(`#OTSCP_MaterialType`).val(JSONObject[0]['TypeofMaterial']);
                $(`#OTSCP_MakeBy`).val(JSONObject[0]['MakeBy']);

                
                // <!-- ----------- Intimat Date Start Here ----------------------- -->
                    var intimatdateOG = JSONObject[0]['Intimatdate'];
                    if(intimatdateOG!=''){
                        intimatdate = intimatdateOG.split(' ')[0];
                        $(`#OTSCP_IntimatedDate`).val(intimatdate);
                    }
                // <!-- ----------- Intimat Date End Here ------------------------- -->
            },
            complete:function(data){
                // IngrediantTypeDropdown() // Ingrediant Type API to Get Dropdown
                TR_ByDropdown() //TR By API to Get Dropdown
            }
        }); 
    }

    // function IngrediantTypeDropdown(){
    //     $.ajax({ 
    //         type: "POST",
    //         url: 'ajax/common-ajax.php',
    //         data:{'action':"IngrediantTypeDropdown_ajax"},

    //         beforeSend: function(){
    //         },
    //         success: function(result)
    //         {
    //             $('#OTSCP_IngredientsType').html(result);
    //         },
    //         complete:function(data){
                
    //             TR_ByDropdown() //TR By API to Get Dropdown
    //         }
    //     }); 
    // }

    function TR_ByDropdown()
    {
        $.ajax({ 
            type: "POST",
            url: 'ajax/common-ajax.php',
            data:{'action':"TR_ByDropdown_ajax"},

            beforeSend: function(){
            },
            success: function(result)
            {
                var SampleTypeDrop = JSON.parse(result);
                $('#OTSCP_SampleCollectBy').html(SampleTypeDrop);
            },
            complete:function(data){
                getSeriesDropdown() // DocName By using API to get dropdown 
            }
        }); 
    }

    function getSeriesDropdown(){
        var TrDate= $('#OTSCP_DocDate').val();
        var dataString ='TrDate='+TrDate+'&ObjectCode=SCS_SCOL&action=getSeriesDropdown_ajax';

        $.ajax({
            type: "POST",
            url: 'ajax/common-ajax.php',
            data: dataString,
            cache: false,

            beforeSend: function(){
            },
            success: function(result)
            {
                var SeriesDropdown = JSON.parse(result);
                $('#OTSCP_DocNoName').html(SeriesDropdown);
               
            },
            complete:function(data){
                selectedSeries(); // call Selected Series Single data function
            }
        }); 
    }

    function selectedSeries(){
        var TrDate= $('#OTSCP_DocDate').val();
        var Series=document.getElementById('OTSCP_DocNoName').value;
        var dataString ='TrDate='+TrDate+'&Series='+Series+'&ObjectCode=SCS_SCOL&action=getSeriesSingleData_ajax';

        $.ajax({
            type: "POST",
            url: 'ajax/common-ajax.php',
            data: dataString,
            cache: false,

            beforeSend: function(){
            },
            success: function(result)
            {
                var JSONObject = JSON.parse(result);

                var NextNumber=JSONObject[0]['NextNumber'];
                var Series=JSONObject[0]['Series'];

                $('#OTSCP_DocNo').val(Series);
                $('#OTSCP_NextNumber').val(NextNumber);
            },
            complete:function(data){

                $(".loader123").hide();
            }
        }); 
    }


    function OTSCP_Submit(){

        var formData = new FormData($('#OTSCP_Form')[0]);  // Form Id
        formData.append("OTSCP_Btn",'OTSCP_Btn');  // Button Id
        var error = true;

        $.ajax({
            url: 'ajax/common-ajax.php',
            type: "POST",
            data:formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                $(".loader123").show();
            },
            success: function(result)
            {
                var JSONObject = JSON.parse(result);

                var status = JSONObject['status'];
                var message = JSONObject['message'];
                var DocEntry = JSONObject['DocEntry'];
                if(status=='True'){
                    swal({
                      title: `${message}`,
                      text: `${DocEntry}`,
                      icon: "success",
                      buttons: true,
                      dangerMode: false,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            location.replace(window.location.href); //ok btn
                        }else{
                            location.replace(window.location.href); // cancel btn
                        }
                    });
                }else{
                    swal("Oops!", `${message}`, "error");
                }
            },complete:function(data){
                $(".loader123").hide();
            }
        });
    }
</script>