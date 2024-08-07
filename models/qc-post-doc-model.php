<style type="text/css">
    .mt-6{margin-top: -6px !important;}
    .FreightInput {width: 100px;border: transparent;}
    .FreightInput:focus {border: transparent;outline: none;}
</style>
 <!--start qc check model-->


<div class="modal fade retest-qc-check" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">QC Post Document (QC Check)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form role="form" class="form-horizontal" id="qcPostDocumentForm_open_trans" method="post" enctype="multipart/form-data">
                    <div class="page-content">
                        <div class="container-fluid">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- ----------------------- hidden field start here ------------------------- -->
                                            <input type="hidden" id="LineNum" name="LineNum">
                                            <input type="hidden" id="U_BPLId" name="U_BPLId">
                                            <input type="hidden" id="U_LocCode" name="U_LocCode">
                                            <input type="hidden" id="U_GRPODEnt" name="U_GRPODEnt">
                                            <input type="hidden" id="U_GDEntry" name="U_GDEntry">
                                            <input type="hidden" id="U_CompBy" name="U_CompBy">
                                            <input type="hidden" id="U_GRQty" name="U_GRQty">
                                            <input type="hidden" id="U_RelDt" name="U_RelDt">
                                            <input type="hidden" id="U_RetstDt" name="U_RetstDt">
                                            <input type="hidden" id="U_Loc" name="U_Loc">
                                            <input type="hidden" id="U_RMQC" name="U_RMQC" value="No">
                                            <input type="hidden" id="NextNumber" name="NextNumber">
                                            <input type="hidden" id="ShelfLife" name="ShelfLife">
                                            <input type="hidden" id="Assaypotencyreq" name="Assaypotencyreq">
                                        <!-- ----------------------- hidden field end here --------------------------- -->

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">GRPO No</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control desabled" type="text" id="GRPONo" name="GRPONo" readonly>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input class="form-control desabled" type="text" id="GRPODocEntry" name="GRPODocEntry" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Supplier Code</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="supplierCode" name="supplierCode" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Supplier Name</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="supplierName" name="supplierName" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Item Code</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="ItemCode" name="ItemCode" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Item Name</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="ItemName" name="ItemName" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Generic Name</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="GenericName" name="GenericName" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Label Cliam</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="LabelClaim" name="LabelClaim" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Label Claim UOM</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="LabelClaimUOM" name="LabelClaimUOM" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Recieved Qty</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="GRNQty" name="GRNQty" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Mfg By</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="MfgBy" name="MfgBy" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Ref No</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="text" id="RefNo" name="RefNo">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Batch No</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="BatchNo" name="BatchNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Batch Size</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="BatchQty" name="BatchQty" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Mfg Date</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="MfgDate" name="MfgDate" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Exp. Date</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="ExpiryDate" name="ExpiryDate" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Sample Int. No</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SampleIntimationNo" name="SampleIntimationNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Sample Coll. No</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SampleCollectionNo" name="SampleCollectionNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Sample Qty</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="number" id="SampleQty" name="SampleQty" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Pack Size</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="PackSize" name="PackSize" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Sample Type</label>
                                                <div class="col-lg-8">
                                                    <select class="form-select" id="SampleType" name="SampleType"></select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Material Type</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="MaterialType" name="MaterialType" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Specification No</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="SpecfNo" name="SpecfNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Doc. No</label>
                                                <div class="col-lg-6">
                                                    <select class="form-select" id="DocNoName" name="DocNoName" onchange="selectedSeries()"></select>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input class="form-control desabled" type="text" id="DocNo" name="DocNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Posting Date</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="PostingDate" name="PostingDate" value="<?php echo date('Y-m-d') ?>" onchange="getSeriesDropdown()">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Analysis Date</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="AnalysisDate" name="AnalysisDate" value="<?php echo date("Y-m-d");?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">No. Container</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="TNCont" name="TNCont" readonly >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">QC Test Type</label>
                                                <div class="col-lg-8">
                                                    <select class="form-select" id="QCTestType" name="QCTestType"></select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Branch</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="BranchName" name="BranchName" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6" style="display: none;">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Valid Up To</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="validUpTo" name="validUpTo" value="<?php echo date("Y-m-d");?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">A/R No.</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="ARNo" name="ARNo" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Gate Entry No</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="gate_entry_no" name="gate_entry_no" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Location</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="Location" name="Location" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Retain Qty</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="RetainQty" name="RetainQty" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Release Date</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="ReleaseDate" name="ReleaseDate" value="<?php echo date("Y-m-d");?>" onchange="OnChangeReleaseDate()" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Retest Date</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="RetestDate" name="RetestDate">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Make By</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="MakeBy" name="MakeBy" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-5 col-form-label mt-6" for="val-skill">Type of Material</label>
                                                <div class="col-lg-7">
                                                    <input class="form-control desabled" type="text" id="TypeofMaterial" name="TypeofMaterial" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                                <label class="col-lg-7 col-form-label mt-6" for="val-skill">Release Material Without QC</label>
                                                <div class="col-lg-5">
                                                    <select class="form-select" id="RelMaterialWithoutQC" name="RelMaterialWithoutQC">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No" Selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">                                
                                        <div class="card-body">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#general_data" role="tab">
                                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                        <span class="d-none d-sm-block">General Data</span>    
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#qc_status" role="tab">
                                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                        <span class="d-none d-sm-block">QC Status</span>    
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#attatchment" role="tab">
                                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                        <span class="d-none d-sm-block">Attatchment</span>    
                                                    </a>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content p-3 text-muted">
                                                <div class="tab-pane active" id="general_data" role="tabpanel">
                                                    <div class="table-responsive qc_list_table table_item_padding" id="list1">
                                                        <table id="tblItemRecord1" class="table sample-table-responsive table-bordered">
                                                            <thead class="fixedHeader1">
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                    <th>Parameter Code</th>
                                                                    <th>Parameter Name</th>
                                                                    <th>Specification</th>
                                                                    <th>Result OutPut</th>
                                                                    <th>Comparison Result</th>
                                                                    <th>Result Output By QC Dept.</th>
                                                                    <th>Parameter Data Type</th>
                                                                    <th>Logical</th>
                                                                    <th>Lower Min</th>
                                                                    <th>Upper Max</th>
                                                                    <th>Mean</th>
                                                                    <th>QC Status by Analyst</th>
                                                                    <th>Test Method</th>
                                                                    <th>Material Type</th>
                                                                    <th>Pharmacopoeial Standard</th>
                                                                    <th>UOM</th>
                                                                    <th>Retest</th>
                                                                    <th>External Sample</th>
                                                                    <th>Analysis By</th>
                                                                    <th>Analyst Remarks</th>
                                                                    <th>Lower Max</th>
                                                                    <th>Release</th>
                                                                    <th>Descriptive Details</th>
                                                                    <th>Upper Min</th>
                                                                    <th>Lower Min - Result</th>
                                                                    <th>Upper Min - Result</th>
                                                                    <th>Upper Max - Result</th>
                                                                    <th>Mean - Result</th>
                                                                    <th>User Text-1</th>
                                                                    <th>User Text-2</th>
                                                                    <th>User Text-3</th>
                                                                    <th>User Text-4</th>
                                                                    <th>User Text-5</th>
                                                                    <th>QC Setup Remark</th>
                                                                    <th>Stability</th>
                                                                    <th>Applicable for Assay</th>
                                                                    <th>Applicable for LOD</th>
                                                                    <th>Instrument Code</th>
                                                                    <th>Instrument Name</th>
                                                                    <th>Start Date</th>
                                                                    <th>Start Time</th>
                                                                    <th>End Date</th>
                                                                    <th>End Time</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="generateDataTable-list"></tbody>
                                                        </table>
                                                    </div>
                                                </div> <!-- tab_pane samp details end -->

                                                <div class="tab-pane" id="qc_status" role="tabpanel">
                                                    <div class="table-responsive" id="list2">
                                                        <input type="hidden" id="tr-count" value="1">
                                                        <table id="tblItemRecord2" class="table sample-table-responsive table-bordered">
                                                            <thead class="fixedHeader1">
                                                                <tr>
                                                                    <th>Sr. No</th>
                                                                    <th style="width:150px;display: block;">Status</th>
                                                                    <th>Quantity</th>
                                                                    <th>Release Date</th>
                                                                    <th>Release Time</th>
                                                                    <th>IT No</th>
                                                                    <th style="width:150px;display: block;">Done By</th>
                                                                    <th>Attachment 1</th>
                                                                    <th>Attachment 2</th>
                                                                    <th>Attachment 3</th>
                                                                    <th>Deviation Date</th>
                                                                    <th>Deviation No</th>
                                                                    <th>Deviation Reason</th>
                                                                    <th>Remarks</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="qc-status-list-append"></tbody> 
                                                        </table>
                                                    </div><!--table responsive end-->
                                                    <hr>
                                                    <!--row end-->
                                                </div> <!-- tab_pane qc status end -->

                                                <div class="tab-pane" id="attatchment" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="table-responsive" id="list3">
                                                                <table id="tblItemRecord3" class="table table-bordered" style="">
                                                                    <thead class="fixedHeader1">
                                                                        <tr>
                                                                            <th>Sr. No</th>
                                                                            <th>Target Path</th>
                                                                            <th>File Name</th>
                                                                            <th>Attatchment Date</th>
                                                                            <th>Free Text</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="qcAttach-list-append"></tbody> 
                                                                </table>
                                                            </div><!--table responsive end-->
                                                        </div><!--col closed-->

                                                        <div class="col-md-2">
                                                            <div class="gap-2">
                                                                <label class="btn btn-primary active  mb-2">
                                                                    Browse <input type="file" name="uploadFile" id="browse-file" hidden>
                                                                </label>
                                                                <br>
                                                            </div>
                                                        </div><!--col closed-->
                                                    </div><!--row closed-->
                                                </div> <!-- tab_pane attatchment end -->

                                                <!-- tfoot start -->
                                                    <div class="general_data_footer">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                    <label class="col-lg-5 col-form-label mt-6" for="val-skill">Assay Potency %</label>
                                                                    <div class="col-lg-7">
                                                                        <input class="form-control" type="number" id="AssayPotency" name="AssayPotency" value="0.000000" onfocusout="CalculatePotency()">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                    <label class="col-lg-4 col-form-label mt-6" for="val-skill">LOD/Water %</label>
                                                                    <div class="col-lg-8">
                                                                        <input class="form-control" type="number" id="LoD_Water" name="LoD_Water" value="0.000000" onfocusout="CalculatePotency()">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                    <label class="col-lg-7 col-form-label mt-6" for="val-skill">Assay Calculation Based On</label>
                                                                    <div class="col-lg-5">
                                                                        <select class="form-select" id="assay-append" name="assay_append"></select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                <label class="col-lg-4 col-form-label mt-6" for="val-skill">Potency</label>
                                                                    <div class="col-lg-8">
                                                                        <input class="form-control desabled" type="text" id="Potency" name="Potency" value="0.000000" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                    <label class="col-lg-4 col-form-label mt-6" for="val-skill">Factor</label>
                                                                    <div class="col-lg-8">
                                                                    <input class="form-control" type="number" id="factor" name="factor">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                    <label class="col-lg-4 col-form-label mt-6" for="val-skill">Checked By</label>
                                                                    <div class="col-lg-8">
                                                                        <select class="form-select" id="checked_by" name="checked_by"></select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                    <label class="col-lg-4 col-form-label mt-6" for="val-skill">No Of Container</label>
                                                                    <div class="col-lg-4">
                                                                        <input class="form-control" type="number" id="noOfCont1" name="noOfCont1">
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <input class="form-control" type="number" id="noOfCont2" name="noOfCont2" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                    <label class="col-lg-4 col-form-label mt-6" for="val-skill">Approved By</label>
                                                                    <div class="col-lg-8">
                                                                        <select class="form-select" id="ApprovedBy" name="ApprovedBy"></select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                    <label class="col-lg-4 col-form-label mt-6" for="val-skill">Analysis By</label>
                                                                    <div class="col-lg-8">
                                                                        <select class="form-select" id="analysis_by" name="analysis_by"></select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-md-6">
                                                                <div class="form-group row mb-2">
                                                                    <label class="col-lg-2 col-form-label mt-6" for="val-skill">Remarks</label>
                                                                    <div class="col-lg-10">
                                                                        <textarea class="form-control" id="qc_remarks" name="qc_remarks" rows="1"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </div>  <!--general data footer end-->
                                                    
                                                    <!-- -------footer button---- -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="d-flex flex-wrap gap-2">
                                                                    <!-- Toggle States Button -->
                                                                    <button type="button" class="btn btn-primary" id="addQcPostDocumentBtn_open_trans" name="addQcPostDocumentBtn_open_trans" onclick="add_qc_post_document_open_trans();">Add</button>

                                                                    <button type="button" class="btn btn-danger active" data-bs-dismiss="modal" aria-label="Close">Cancel</button>

                                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".inventory_transfer" data-bs-toggle="button" autocomplete="off" disabled>Inventory Transfer</button>
                                                                </div>
                                                            </div>
                                                        </div><!--row end-->
                                                    <!-- ------footer button end---- -->
                                                <!-- tfoot end -->
                                            </div> <!-- tab content end -->
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </form>
                                                        
                        </div><!-- end row-->
                        </div><!--container-fluid-->
                    </div><!--page-content-->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<!--end qc check model-->

    <!-- ---------instrument modal------------- -->
        <div class="modal fade instrument_modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Instrument List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="table-responsive table_item_padding" id="append_instrument_table"></div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    <!-- ---------instrument modal end------------- -->     


     <!-- --------inventory transfer------------ -->

<div class="modal fade inventory_transfer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Inventory Transfer </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                
                 <form>
                                     <div class="row">

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Supplier Code</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Series</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Supplier Name</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Branch</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base DocType</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Posting Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="" name="">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Document Date</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control" type="date" id="" name="">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-xl-3 col-md-6">
                                            <div class="form-group row mb-2">
                                               <label class="col-lg-4 col-form-label mt-6" for="val-skill">Base DocNum</label>
                                                 <div class="col-lg-8">
                                                    <input class="form-control desabled" type="text" id="" name="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                    </form>
              


                            

                                    <div class="table-responsive" id="list">
                                                    <table id="tblItemRecord4" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <th>select</th>
                                                                <th>Sr. No </th>  
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Quality</th>
                                                                <th>From Whs</th>
                                                                <th>To Whs</th>
                                                                <th>From Bin</th>
                                                                <th>To Bin</th> 
                                                                <th>Location</th>
                                                                <th>UOM</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody>
                                                        <tr>
                                                             <td style="text-align: center;">
                                                                 <input class="form-check-input" type="radio" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td>1</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                          <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="radio" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td>1</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                          <tr>
                                                           <td style="text-align: center;">
                                                                 <input class="form-check-input" type="radio" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td>1</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                         
                                                     </tbody> 
                                                   </table>
                                               </div>
                           
                   <h5 class="modal-title" id="myLargeModalLabel">Container Selection</h5>
                    <div class="table-responsive mt-2" id="list">
                                                    <table id="tblItemRecord5" class="table sample-table-responsive table-bordered" style="">
                                                        <thead class="fixedHeader1">
                                                            <tr>
                                                                <th>Select</th>
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Container No</th>
                                                                <th>Batch</th>
                                                                <th>Batch Qty</th>
                                                                <th>Select Qty</th>
                                                                <th>Mfg Date</th> 
                                                                <th>Expiry Date</th>
                                                            </tr>
                                                        </thead>
                                                     <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td class="desabled">R00010</td>
                                                            <td class="desabled">CITARIO ITEM</td>
                                                            <td class="desabled">CENTRAL/1/20068778</td>
                                                            <td class="desabled">879999</td>
                                                            <td class="desabled">25</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                         <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td class="desabled">R00010</td>
                                                            <td class="desabled">CITARIO ITEM</td>
                                                            <td class="desabled">CENTRAL/1/20068778</td>
                                                            <td class="desabled">879999</td>
                                                            <td class="desabled">25</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                         <tr>
                                                            <td style="text-align: center;">
                                                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 17px;height: 17px;">
                                                            </td>
                                                            <td class="desabled">R00010</td>
                                                            <td class="desabled">CITARIO ITEM</td>
                                                            <td class="desabled">CENTRAL/1/20068778</td>
                                                            <td class="desabled">879999</td>
                                                            <td class="desabled">25</td>
                                                            <td><input class="border_hide" type="text" id="" name="" class="form-control" value="FG_DR_97"></td>
                                                            <td class="desabled"></td>
                                                            <td class="desabled"></td>
                                                         </tr>

                                                          <tr>
                                                            <td colspan="6"></td>
                                                            <td class="desabled">788</td>
                                                            <td colspan="2"></td>
                                                         </tr>
                                           
                                           
                                                         
                                                     </tbody> 
                                                   </table>
                                               </div>
                                               <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Add</button>
                                               <button type="button" class="btn active btn-primary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                
      </div>
    </div>
  </div>
</div>



    <!-- --------------inventory transfer-------------- -->

     <style type="text/css">
    .modal-body{padding: 1 !important;}
     </style>


    
   <script type="text/javascript">
(function ($) {

  $.fn.enableCellNavigation = function () {

    var arrow = {
      left: 37,
      up: 38,
      right: 39,
      down: 40
    };

    // select all on focus
    // works for input elements, and will put focus into
    // adjacent input or textarea. once in a textarea,
    // however, it will not attempt to break out because
    // that just seems too messy imho.
    this.find('input').keydown(function (e) {

      // shortcut for key other than arrow keys
      if ($.inArray(e.which, [arrow.left, arrow.up, arrow.right, arrow.down]) < 0) {
        return;
      }

      var input = e.target;
      var td = $(e.target).closest('td');
      var moveTo = null;

      switch (e.which) {

        case arrow.left:
          {
            if (input.selectionStart == 0) {
              moveTo = td.prev('td:has(input,textarea)');
            }
            break;
          }
        case arrow.right:
          {
            if (input.selectionEnd == input.value.length) {
              moveTo = td.next('td:has(input,textarea)');
            }
            break;
          }

        case arrow.up:
        case arrow.down:
          {

            var tr = td.closest('tr');
            var pos = td[0].cellIndex;

            var moveToRow = null;
            if (e.which == arrow.down) {
              moveToRow = tr.next('tr');
            } else if (e.which == arrow.up) {
              moveToRow = tr.prev('tr');
            }

            if (moveToRow.length) {
              moveTo = $(moveToRow[0].cells[pos]);
            }

            break;
          }

      }

      if (moveTo && moveTo.length) {

        e.preventDefault();

        moveTo.find('input,textarea').each(function (i, input) {
          input.focus();
          input.select();
        });

      }

    });

  };

})(jQuery);


// use the plugin
$(function () {
  $('#list').enableCellNavigation();
});


</script>

<!-- line 1383 end -->