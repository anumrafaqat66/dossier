<?php $this->load->view('do/common/header'); ?>
<?php !isset($oc_no_entered) ? $oc_no_entered = '' : $oc_no_entered; ?>
<style>
    .red-border {
        border: 1px solid red !important;
    }

    a:hover {
        color: white !important;
    }

    .list-group-item:hover {
        background-color: #000154 !important;
        border-radius: 20px;
    }

    .custom_list {
        /* height: 45px; */
        /* padding: 8px; */
        /* border: none !important; */
        border-radius: 10rem !important;
    }

    th,
    td {
        border-left: 0.5px solid black;
    }

    .box {
        border:1px solid black;
        height:200px;
        width: 20px;
        text-align:center;
    }
</style>

<div class="container-fluid my-2">

    <!-- Page Heading -->
    <div class="card-body" style="padding:10px">
        <div class="row my-2">
            <div class="card-body" style="margin-left:30px; <?php if (!isset($pn_data['name'])) { ?> padding: 0px; height: 40px; <?php } ?>">
                <h2 style="text-align:center; text-decoration:underline; margin-bottom:20px"><strong>VIEW CADET'S DOSSIER FOLDER</strong></h2>

                <div class="row">
                    <div class="col-lg-1">
                        <?php if (isset($pn_data['name'])) { ?>
                            <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height:130px;">
                        <?php } ?>
                    </div>
                    <div class="col-lg-9 my-2">
                        <div class="col-lg-6 ">
                            <h4><strong><?php if (isset($pn_data['name'])) {
                                            echo $pn_data['name'];
                                        } ?></strong></h4>
                        </div>

                        <div class="col-lg-6">
                            <h4><?php if (isset($pn_data['term'])) {
                                    echo $pn_data['term'];
                                } ?></h4>
                        </div>

                        <div class="col-lg-6">
                            <h4><?php if (isset($pn_data['oc_no'])) {
                                    echo $pn_data['oc_no'];
                                } ?></h4>
                        </div>

                        <div class="col-lg-6">
                            <h4><?php if (isset($pn_data['divison_name'])) {
                                    echo $pn_data['divison_name'];
                                } ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <?php if (isset($pn_data['name'])) { ?>
                            <img src='<?= base_url() ?>assets/img/navy_logo-new1.png' style="height:130px; width:100px; border:1px solid black;">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body bg-custom3" id="main-container">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-custom1" id="header_title">
                        <?php if (isset($pn_data['name'])) { ?>
                            <h1 class="h4">CONTENTS</h1>
                        <?php } else { ?>
                            <h1 class="h4">Search Cadet</h1>
                        <?php } ?>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" id="add_form" action="">
                            <?php if (!isset($pn_data['name'])) { ?>
                                <div class="form-group row">
                                    <div class="col-sm-1" style="margin-top:15px">
                                        <h6>&nbsp;OC No:</h6>
                                    </div>

                                    <div class="col-sm-3 mb-1">
                                        <input type="text" class="form-control form-control-user" name="oc_no" id="oc_no" placeholder="Enter OC No." value="<?= $oc_no_entered ?>">
                                        <span id="error_search" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;Please enter OC No.</span>
                                    </div>

                                    <div class="col-sm-2 mb-1">
                                        <button type="button" class="btn btn-primary btn-user btn-block" id="search_btn">
                                            Search
                                        </button>
                                    </div>
                                </div>

                            <?php } ?>


                            <?php if ($pn_data != null) { ?>
                                <div id="cadet_dossier" class="row">
                                    <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                        <ul class="list-group">
                                            <a href="#" style="color:black" id="gen">
                                                <li class="list-group-item bg-custom3 custom_list">GENERAL</li>
                                            </a>
                                            <a href="#" style="color:black" id="disp">
                                                <li class="list-group-item bg-custom3 custom_list">DISCIPLINE</li>
                                            </a>
                                            <a href="#" style="color:black" id="warn">
                                                <li class="list-group-item bg-custom3 custom_list">WARNINGS</li>
                                            </a>
                                            <a href="#" style="color:black" id="phy">
                                                <li class="list-group-item bg-custom3 custom_list">PHYSICAL EFFICIENCY</li>
                                            </a>
                                            <a href="#" style="color:black" id="acad">
                                                <li class="list-group-item bg-custom3 custom_list">ACADEMIC RECORD</li>
                                            </a>
                                            <a href="#" style="color:black" id="olq">
                                                <li class="list-group-item bg-custom3 custom_list">OFFICER LIKE QUALITIES</li>
                                            </a>
                                            <a href="#" style="color:black" id="assess">
                                                <li class="list-group-item bg-custom3 custom_list">ASSESSMENT</li>
                                            </a>
                                        </ul>
                                    </div>

                                </div>
                            <?php } ?>

                            <div id="gen_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_inspection_record">
                                            <li class="list-group-item bg-custom3 custom_list">INSPECTION RECORD</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF DIVISIONAL OFFICERS</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_personal_record">
                                            <li class="list-group-item bg-custom3 custom_list">PERSONAL DATA</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">CADET'S AUTO-BIOGRAPHY</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">PSYCHOLOGIST'S REPORT</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="disp_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="obs_record">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF OBSERVATIONS</li>
                                        </a>
                                        <a href="#" style="color:black" id="punish_record">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF PUNISHMENT</li>
                                        </a>
                                    </ul>
                                </div>
                                <div id="terms_list_punish" class="col-lg-2" style="text-align:left;font-weight: bold;display:none">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_punish_term1">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-I</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_punish_term2">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-II</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_punish_term3">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-III</li>
                                        </a>
                                    </ul>
                                </div>
                                <div id="terms_list_obs" class="col-lg-2" style="text-align:left;font-weight: bold;display:none">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_obs_term1">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-I</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_obs_term2">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-II</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_obs_term3">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-III</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="warn_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_warning">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF WARNINGS</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_warning_attach">
                                            <li class="list-group-item bg-custom3 custom_list">WARNINGS (INSERTED)</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="phy_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_saluting_swimming_record">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF SALUTING AND SWIMMING</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_physical_record">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD PHYSICAL EFFICIENCY</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">PROFICIENCY IN GAMES</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_medical_record">
                                            <li class="list-group-item bg-custom3 custom_list">MEDICAL RECORD</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="acad_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RSEULT (TERM-I)</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">SEA TRAINING REPORT (TERM-II)</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RESULT (TERM-II)</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RESULT (TERM III)</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="olq_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" ID="btn_olq_record">
                                            <li class="list-group-item bg-custom3 custom_list">OFFICER LIKE QUALITIES</li>
                                        </a>

                                    </ul>
                                </div>
                                <div id="terms_olq_record" class="col-lg-2" style="text-align:left;font-weight: bold;display:none">
                                    <ul class="list-group">
                                        <a href="#" style="color:black" id="btn_olq_term1">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-I</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_olq_term2">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-II</li>
                                        </a>
                                        <a href="#" style="color:black" id="btn_olq_term3">
                                            <li class="list-group-item bg-custom3 custom_list">TERM-III</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="assess_list" class="row" style="display:none ;">
                                <div class="col-lg-4" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">GENERAL REMARKS (Term I to III)</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">PROGRESS CHART</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF DISTINCTIONS ACHIEVED</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF SENIORITY</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">ALLOCAITON OF BRANCH/SPECIALISATION </li>
                                        </a>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-primary btn-user btn-block my-3" id="back_btn" style="display:none">
                                    BACK
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="no_data" class="row my-2" style="display:none">
            <div class="col-lg-12 my-5">
                <h4 style="color:red">No Cadet Found. Please check the OC No.</h4>
            </div>
        </div>


    </div>


    <div class="card-body bg-custom3" id="container-2">
        <?php if (!isset($pn_data['name'])) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header bg-custom1">
                            <h1 class="h4">GENERAL INSTRUCTIONS</h1>
                        </div>

                        <div class="card-body bg-custom1" style="font-size:small;text-align: justify;">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <p>1. PN Form-I is a phase-wise record of the performance given by an under training officer during the entire period of his training. It comprises two sections: Section-I pertaining to common training of trainees as Cadet and Section-II pertaining to branch specific training as Midshipman/Sub Lieutenant.</p>
                                    <p>2. PN Form-I is to be started for every under training officer on the day he joins the Service as a Cadet and is to be completed for each stage of his training.</p>
                                    <p>3. Name and other particulars of the officer recorded clearly in black permanent ink/marker in the specified space on the front outer cover of PN Form-I.</p>
                                    <p>4. PN Form-I is to be kept in the personal custody of the Divisional/Course Officer of the under training officers. He is to religiously complete the relevant portions of the Form and cross out and sign/stamp all pages not required to be completed, e.g. additional pages provided for completion in case of the trainees relegation etc. He is also to record the additional pages, if instead, on the relevant page(s) provided for the purpose. The Commanding Officers/Commandants are to ensure its timely completion and onward dispatch.</p>
                                    <p>5. PNA, after completion of Section-I, is to insert/add to it Section-II according to the branch allocated to each trainee and forward the same to the relevant PN ship.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p>6. PN Form-1 is to be transferred from unit/ship to unit/ship in conformity with the transfers of the under training officer. Commanding Officers/Commandants are to ensure that the Form is sent to the Commanding Officer/Commandant of the next unit/ship within 20 days of the under training officer’s transfer.</p>
                                    <p>7. A unit/ship receiving PN Form-I is to thoroughly check all entries/signatures/remarks etc in the previous portions and, in case of any deficiency, incomplete or unsigned entries, is to return the Form to the concerned unit/ship within one week for completion/removal of deficiencies detected. Units/Ships accepting an incomplete/unsigned PN Form-I will be responsible for the deficiencies along with the ships/units sending such incomplete Form.</p>
                                    <p>8. OLQs marks will be awarded in accordance with the relevant article(s) of the PBR 697 (1)-C.</p>
                                    <p>9. Gain/loss of seniority will be calculated in accordance with the relevant article(s) of PBR 697 (1)-C.</p>
                                    <p>10. Commanding Officer PNS BAHADUR, Commandant PNS JAUHAR and Officer Incharge School of Logistics & Management are to ensure timely dispatch of the Forms in respect of GL (Ops), GL (ME) and GL (Log) officers, respectively to Naval Headquarters (Trg Dte) through HQ COMKAR within one month of completion of the training.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>

        <div id="no_data" class="row my-2" style="display:none;">
            <div class="col-lg-12">
                <h4 style="color:red;">No Cadet Found. Please check the OC No.</h4>
            </div>
        </div>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="punish_term1">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/punishment_records_report/<?= $pn_data['oc_no'] ?>/Term-I'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>RECORD OF PUNISHMENT</strong></h4>
                                <h4 style="text-decoration:underline"><strong>TERM-I</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_punish_data) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="">DATE</th>
                                            <td scope="" style="width:350px">OFFENCE</th>
                                            <td scope="">PUNISHMENT AWARDED</th>
                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">AWARDED BY</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_punish_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="white-space:nowrap;"><?= $data['date']; ?></td>
                                                <td scope="" style="height:80px"><?= $data['offence']; ?></td>
                                                <td scope=""><?= $data['punishment_awarded']; ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['awarded_by']; ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_punish_term1">
                        Back
                    </button>
                </div>
            </div>
        </form>

        <div id="no_data" class="row my-2" style="display:none;">
            <div class="col-lg-12">
                <h4 style="color:red;">No Cadet Found. Please check the OC No.</h4>
            </div>
        </div>

    </div>
    <div class="card-body bg-custom3" style="display:none" id="punish_term2">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/punishment_records_report/<?= $pn_data['oc_no'] ?>/Term-II'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>RECORD OF PUNISHMENT</strong></h4>
                                <h4 style="text-decoration:underline"><strong>TERM-II</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_punish_data_term2) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="">DATE</th>
                                            <td scope="" style="width:350px">OFFENCE</th>
                                            <td scope="">PUNISHMENT AWARDED</th>
                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">AWARDED BY</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_punish_data_term2 as $data) { ?>
                                            <tr>
                                                <td scope="" style="white-space:nowrap;"><?= $data['date']; ?></td>
                                                <td scope="" style="height:80px"><?= $data['offence']; ?></td>
                                                <td scope=""><?= $data['punishment_awarded']; ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['awarded_by']; ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_punish_term2">
                        Back
                    </button>
                </div>
            </div>
        </form>

        <div id="no_data" class="row my-2" style="display:none;">
            <div class="col-lg-12">
                <h4 style="color:red;">No Cadet Found. Please check the OC No.</h4>
            </div>
        </div>

    </div>
    <div class="card-body bg-custom3" style="display:none" id="punish_term3">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/punishment_records_report/<?= $pn_data['oc_no'] ?>/Term-III'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>RECORD OF PUNISHMENT</strong></h4>
                                <h4 style="text-decoration:underline"><strong>TERM-III</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_punish_data_term3) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="">DATE</th>
                                            <td scope="" style="width:350px">OFFENCE</th>
                                            <td scope="">PUNISHMENT AWARDED</th>
                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">AWARDED BY</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_punish_data_term3 as $data) { ?>
                                            <tr>
                                                <td scope="" style="white-space:nowrap;"><?= $data['date']; ?></td>
                                                <td scope="" style="height:80px"><?= $data['offence']; ?></td>
                                                <td scope=""><?= $data['punishment_awarded']; ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['awarded_by']; ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_punish_term3">
                        Back
                    </button>
                </div>
            </div>
        </form>

        <div id="no_data" class="row my-2" style="display:none;">
            <div class="col-lg-12">
                <h4 style="color:red;">No Cadet Found. Please check the OC No.</h4>
            </div>
        </div>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="obs_term1">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/observation_records_report/<?= $pn_data['oc_no'] ?>/Term-I'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>RECORD OF OBSERVATION</strong></h4>
                                <h4 style="text-decoration:underline"><strong>TERM-I</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_obs_data_term1) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="">DATE</th>
                                            <td scope="" style="width:350px">OBSERVATION</th>
                                            <td scope="">OBSERVED/CHECKED BY</th>
                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">REMARKS/ ACTION BY</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_obs_data_term1 as $data) { ?>
                                            <tr>
                                                <td scope="" style="white-space:nowrap;"><?= $data['date']; ?></td>
                                                <td scope="" style="height:80px"><?= $data['observation']; ?></td>
                                                <td scope=""><?= $data['observed_by']; ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['action_taken']; ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_obs_term1">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>
    <div class="card-body bg-custom3" style="display:none" id="obs_term2">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/observation_records_report/<?= $pn_data['oc_no'] ?>/Term-II'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>RECORD OF OBSERVATION</strong></h4>
                                <h4 style="text-decoration:underline"><strong>TERM-II</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_obs_data_term2) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="">DATE</th>
                                            <td scope="" style="width:350px">OBSERVATION</th>
                                            <td scope="">OBSERVED/CHECKED BY</th>
                                            <td scope="" style="border-right:1px solid black; white-space:nowrap">REMARKS/ ACTION BY</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_obs_data_term2 as $data) { ?>
                                            <tr>
                                                <td scope="" style="white-space:nowrap;"><?= $data['date']; ?></td>
                                                <td scope="" style="height:80px"><?= $data['observation']; ?></td>
                                                <td scope=""><?= $data['observed_by']; ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['action_taken']; ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_obs_term2">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>
    <div class="card-body bg-custom3" style="display:none" id="obs_term3">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/observation_records_report/<?= $pn_data['oc_no'] ?>/Term-III'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>RECORD OF OBSERVATION</strong></h4>
                                <h4 style="text-decoration:underline"><strong>TERM-III</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_obs_data_term3) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="" style="width:70px">DATE</th>
                                            <td scope="" style="width:300px">OBSERVATION</th>
                                            <td scope="" style="width:70px !important">OBSERVED/ CHECKED BY</th>
                                            <td scope="" style="border-right:1px solid black;width:100px !important">REMARKS/ ACTION TAKEN</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_obs_data_term1 as $data) { ?>
                                            <tr>
                                                <td scope=""><?= $data['date']; ?></td>
                                                <td scope="" style="height:80px"><?= $data['observation']; ?></td>
                                                <td scope=""><?= $data['observed_by']; ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['action_taken']; ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_obs_term3">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="warning_record">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/warning_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>RECORD OF WARNING</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_warning_data) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="" style="width:70px">S NO</th>
                                            <td scope="" style="width:70px">DATE</th>
                                            <td scope="" style="width:70px">ISSUED BY</th>
                                            <td scope="" style="width:70px !important">REASONS</th>
                                            <td scope="" style="border-right:1px solid black;width:100px !important">DO'S SIGNATURE</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_warning_data as $data) { ?>
                                            <tr>
                                                <td scope=""><?= ++$count; ?></td>
                                                <td scope=""><?= $data['date']; ?></td>
                                                <td scope="" style="height:80px"><?= $data['issued_by']; ?></td>
                                                <td scope=""><?= $data['reasons']; ?></td>
                                                <td scope="" style="border-right:1px solid black;"></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_warning">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="inspection_record">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/inspection_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>INSPECTION RECORD</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_inspection_data) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="" style="width:70px">DATE</th>
                                            <td scope="" style="width:70px">REMARKS</th>
                                            <td scope="" style="border-right:1px solid black;width:100px !important">INSPECTION OFFICER'S SIGNATURE</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_inspection_data as $data) { ?>
                                            <tr>
                                                <td scope=""><?= $data['date']; ?></td>
                                                <td scope="" style="height:80px"><?= $data['remarks']; ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['inspecting_officer_name']; ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_inspection">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="medical_record">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/medical_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>MEDICAL RECORD</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_medical_data) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="" style="width:70px">DATE</td>
                                            <td scope="" style="width:70px">TERM</td>
                                            <td scope="" style="width:70px">DISEASE</td>
                                            <td scope="" style="width:70px">ADMITTED NAME OF SICK BAY/HOSPITALS</td>
                                            <td scope="" style="width:70px">MO'S/SMO'S REMARKS</td>
                                            <td scope="" style="width:70px">SPECIALISTS OPINION</td>
                                            <td scope="" style="width:70px">INSTRUCTIONAL LOSS (PERIODS/DAYS)</td>
                                            <td scope="" style="border-right:1px solid black;width:100px !important">REMARKS BY DIVISIONAL OFFICER</td>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_medical_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="white-space:nowrap"><?= date('Y-m-d', strtotime($data['date'])); ?></td>
                                                <td scope="" style="height:80px"><?= $data['term']; ?></td>
                                                <td scope=""><?= $data['disease']; ?></td>
                                                <td scope=""><?= $data['admitted']; ?></td>
                                                <td scope=""><?= $data['mo_remarks']; ?></td>
                                                <td scope=""><?= $data['specialist_opinion']; ?></td>
                                                <td scope=""><?= $data['instructional_loss']; ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['do_remarks']; ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_medical">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="saluting_swimming_record">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/saluting_swimming_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>RECORD OF SALUTING AND SWIMMING</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_physical_tests_data) > 0) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="" style="width:10px">S NO</td>
                                            <td scope="" style="width:70px">TESTS</td>
                                            <td scope="" style="width:70px">DATE</td>
                                            <td scope="" style="border-right:1px solid black;width:100px !important">RESULT & REMARKS</td>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0;
                                        foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">SALUTING</td>
                                                <td scope="" style="white-space:nowrap"><?= date('Y-m-d', strtotime($data['date_added'])); ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['saluting_result']; ?> - ATTEMPT: <?= $data['saluting_attempt']; ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">PRELIMINARY SWIMMING TEST</td>
                                                <td scope="" style="white-space:nowrap"><?= date('Y-m-d', strtotime($data['date_added'])); ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['PST_result']; ?> - ATTEMPT: <?= $data['PST_attempt']; ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">STANDARD SWIMMING TEST</td>
                                                <td scope="" style="white-space:nowrap"><?= date('Y-m-d', strtotime($data['date_added'])); ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?= $data['SST_result']; ?> - ATTEMPT: <?= $data['SST_attempt']; ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_saluting_swimming">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="physical_efficiency_record">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/physical_efficiency_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>RECORD OF PHYSICAL EFFICIENCY</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (count($pn_physical_tests_data) > 0) { ?>
                                <table style="color:black; width:100% !important;">

                                    <!-- <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important"> -->
                                    <?php $count = 0;
                                    foreach ($pn_physical_tests_data as $data) { ?>
                                        <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
                                            <tr>
                                                <td scope="" Style="width:50px">S NO</td>
                                                <td scope="" Style="width:180px">EVENT</td>
                                                <td scope="" colspan="4">TERM-P</td>
                                                <td scope="" colspan="4">TERM-I</td>
                                                <td scope="" colspan="4">TERM-II</td>
                                                <td scope="" style="border-right:1px solid black;" colspan="4">TERM-III</td>
                                            </tr>
                                        </thead>
                                        <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">MILE TIME</td>
                                                <td scope=""><?php if (isset($pn_pet1_data_tp['mile_time'])) {
                                                                    echo $pn_pet1_data_tp['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_tp['mile_time'])) {
                                                                    echo $pn_pet1_data_tp['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_tp['mile_time'])) {
                                                                    echo $pn_pet2_data_tp['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_tp['mile_time'])) {
                                                                    echo $pn_pet2_data_tp['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t1['mile_time'])) {
                                                                    echo $pn_pet1_data_t1['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t1['mile_time'])) {
                                                                    echo $pn_pet1_data_t1['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t1['mile_time'])) {
                                                                    echo $pn_pet1_data_t1['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t1['mile_time'])) {
                                                                    echo $pn_pet2_data_t1['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t2['mile_time'])) {
                                                                    echo $pn_pet1_data_t2['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t2['mile_time'])) {
                                                                    echo $pn_pet1_data_t2['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t2['mile_time'])) {
                                                                    echo $pn_pet2_data_t2['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t2['mile_time'])) {
                                                                    echo $pn_pet2_data_t2['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t3['mile_time'])) {
                                                                    echo $pn_pet1_data_t4['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t3['mile_time'])) {
                                                                    echo $pn_pet1_data_t4['mile_time'];
                                                                } ?></td>
                                                <td scope=""><?php if (isset($pn_pet1_data_t3['mile_time'])) {
                                                                    echo $pn_pet2_data_t4['mile_time'];
                                                                } ?></td>
                                                <td scope="" style="border-right:1px solid black;"><?php if (isset($pn_pet1_data_t3['mile_time'])) {
                                                                                                        echo $pn_pet2_data_t3['mile_time'];
                                                                                                    } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <thead style="font-weight:bold;padding:5px; text-align:center">
                                                <tr>
                                                    <th scope=""></th>
                                                    <th scope=""></th>
                                                    <th scope="" colspan="2"></th>
                                                    <th scope="" colspan="2"></th>
                                                    <th scope="" colspan="2"></th>
                                                    <th scope="" colspan="2"></th>
                                                    <th scope="" colspan="2"></th>
                                                    <th scope="" colspan="2"></th>
                                                    <th scope="" style="border-right:1px solid black;" colspan="2"></th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">ROPE CLASS</td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_tp['rope'])) {
                                                                                echo $pn_pet1_data_tp['rope'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_tp['rope'])) {
                                                                                echo $pn_pet2_data_tp['rope'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t1['rope'])) {
                                                                                echo $pn_pet1_data_t1['rope'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t1['rope'])) {
                                                                                echo $pn_pet2_data_t1['rope'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t2['rope'])) {
                                                                                echo $pn_pet1_data_t2['rope'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t2['rope'])) {
                                                                                echo $pn_pet2_data_t2['rope'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t3['rope'])) {
                                                                                echo $pn_pet1_data_t3['rope'];
                                                                            } ?></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_pet2_data_t3['rope'])) {
                                                                                                                    echo $pn_pet2_data_t3['rope'];
                                                                                                                } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">BEAM WORK</td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_tp['chinups'])) {
                                                                                echo $pn_pet1_data_tp['chinups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_tp['chinups'])) {
                                                                                echo $pn_pet2_data_tp['chinups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t1['chinups'])) {
                                                                                echo $pn_pet1_data_t1['chinups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t1['chinups'])) {
                                                                                echo $pn_pet2_data_t1['chinups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t2['chinups'])) {
                                                                                echo $pn_pet1_data_t2['chinups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t2['chinups'])) {
                                                                                echo $pn_pet2_data_t2['chinups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t3['chinups'])) {
                                                                                echo $pn_pet1_data_t3['chinups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_pet2_data_t3['chinups'])) {
                                                                                                                    echo $pn_pet2_data_t3['chinups'];
                                                                                                                } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">PUSH UPS</td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_tp['pushups'])) {
                                                                                echo $pn_pet1_data_tp['pushups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_tp['pushups'])) {
                                                                                echo $pn_pet2_data_tp['pushups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t1['pushups'])) {
                                                                                echo $pn_pet1_data_t1['pushups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t1['pushups'])) {
                                                                                echo $pn_pet2_data_t1['pushups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t2['pushups'])) {
                                                                                echo $pn_pet1_data_t2['pushups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet2_data_t2['pushups'])) {
                                                                                echo $pn_pet2_data_t2['pushups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_pet1_data_t3['pushups'])) {
                                                                                echo $pn_pet1_data_t3['pushups'];
                                                                            } ?></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_pet2_data_t3['pushups'])) {
                                                                                                                    echo $pn_pet2_data_t3['pushups'];
                                                                                                                } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">100M SPRINT TIME</td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">TOTAL PET SCORE</td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2"></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">MINI CROSS COUNTRY ____ KM</td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['mini_cross_result'])) {
                                                                                echo $pn_physical_tests_data_tp['mini_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['mini_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_tp['mini_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['mini_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t1['mini_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['mini_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_t1['mini_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['mini_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t2['mini_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['mini_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_t2['mini_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t3['mini_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t3['mini_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_physical_tests_data_t3['mini_cross_card_number'])) {
                                                                                                                    echo $pn_physical_tests_data_t3['mini_cross_card_number'];
                                                                                                                } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">CROSS COUNTRY _______KM</td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['long_cross_result'])) {
                                                                                echo $pn_physical_tests_data_tp['long_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['long_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_tp['long_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['long_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t1['long_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['long_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_t1['long_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['long_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t2['long_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['long_cross_card_number'])) {
                                                                                echo $pn_physical_tests_data_t2['long_cross_card_number'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t3['long_cross_result'])) {
                                                                                echo $pn_physical_tests_data_t3['long_cross_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_physical_tests_data_t3['long_cross_card_number'])) {
                                                                                                                    echo $pn_physical_tests_data_t3['long_cross_card_number'];
                                                                                                                } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        <?php foreach ($pn_physical_tests_data as $data) { ?>
                                            <tr>
                                                <td scope="" style="height:80px"><?= ++$count; ?></td>
                                                <td scope="">ASSAULT COURSES TIME</td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['assault_result'])) {
                                                                                echo $pn_physical_tests_data_tp['assault_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_tp['assault_attempt'])) {
                                                                                echo $pn_physical_tests_data_tp['assault_attempt'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['assault_result'])) {
                                                                                echo $pn_physical_tests_data_t1['assault_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t1['assault_attempt'])) {
                                                                                echo $pn_physical_tests_data_t1['assault_attempt'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['assault_result'])) {
                                                                                echo $pn_physical_tests_data_t2['assault_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t2['assault_attempt'])) {
                                                                                echo $pn_physical_tests_data_t2['assault_attempt'];
                                                                            } ?></td>
                                                <td scope="" colspan="2"><?php if (isset($pn_physical_tests_data_t3['assault_result'])) {
                                                                                echo $pn_physical_tests_data_t3['assault_result'];
                                                                            } ?></td>
                                                <td scope="" colspan="2" style="border-right:1px solid black;"><?php if (isset($pn_physical_tests_data_t3['assault_attempt'])) {
                                                                                                                    echo $pn_physical_tests_data_t3['assault_attempt'];
                                                                                                                } ?></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
                                        </tr>
                                        </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_physical_efficiency">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="officer_qualities_record_term1">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/officer_qualities_records_report/<?= $pn_data['oc_no'] ?>/Term-I'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>OFFICER LIKE QUALITIES</strong></h4>
                                <h4 style="text-decoration:underline"><strong>TERM-I</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (isset($pn_officer_qualities_data_t1['term'])) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="" style="width:10px;border-top:none !important;border-left:none !important"></td>
                                            <td scope="" style="width:70px;border-top:none !important;border-left:none !important"></td>
                                            <td scope="" style="width:70px;border-top:1px solid black;">MAX MARKS</td>
                                            <td scope="" style="width:70px;border-top:1px solid black;">MID TERM</td>
                                            <td scope="" style="border-right:1px solid black;width:100px !important;border-top:1px solid black;">TERMINAL</td>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0; ?>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Truthfulness</td>
                                            <td scope="" style="text-align:center">20</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['truthfulness_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['truthfulness_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Integrity</td>
                                            <td scope="" style="text-align:center">25</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['integrity_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['integrity_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Sense of Pride</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['pride_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['pride_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Moral Courage</td>
                                            <td scope="" style="text-align:center">15</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['courage_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['courage_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Confidence and Behaviour Under Stress</td>
                                            <td scope="" style="text-align:center">15</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['confidence_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['confidence_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Initiative</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['initiative_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['inititative_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Ability to Command, Control and Assert</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['command_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['command_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Self and General Discipline</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['discipline_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['discipline_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Sense of Duty</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['duty_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['duty_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Reliability</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['reliability_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['reliability_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">General Appearance & Bearing</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['appearance_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['appearance_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Physical Fittness</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['fitness_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['fitness_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Manners and Social Conduct</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['conduct_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['conduct_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Intelligence and Common Sense</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['cs_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['cs_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Cooperation Adaptability and Team Work</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['teamwork_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['teamwork_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Power of Expression (Oral & Written)</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['expression_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['expression_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"></td>
                                            <td scope=""> <strong>Grand Total: </strong> </td>
                                            <td scope="" style="text-align:center">200</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['total_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['total_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="" style="border-right:1px solid black;"> MARKS FOR TERM </td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['mid_marks']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['terminal_marks']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="" style="border-right:1px solid black;"> DATE OF ASSESSMENT</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t1['mid_marks_date']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t1['terminal_marks_date']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="3" style="border-right:1px solid black;"> DIVISIONAL OFFICER'S SIGNATURE </td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="3" style="border-right:1px solid black;"> CAPTAIN TRAINNING'S SIGNATURE </td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="3" style="border-right:1px solid black;"> CO/COMMANDANT'S SIGNATURE </td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_olq_term1">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="officer_qualities_record_term2">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/officer_qualities_records_report/<?= $pn_data['oc_no'] ?>/Term-II'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>OFFICER LIKE QUALITIES</strong></h4>
                                <h4 style="text-decoration:underline"><strong>TERM-II</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (isset($pn_officer_qualities_data_t2['term'])) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="" style="width:10px;border-top:none !important;border-left:none !important"></td>
                                            <td scope="" style="width:70px;border-top:none !important;border-left:none !important"></td>
                                            <td scope="" style="width:70px;border-top:1px solid black;">MAX MARKS</td>
                                            <td scope="" style="width:70px;border-top:1px solid black;">MID TERM</td>
                                            <td scope="" style="border-right:1px solid black;width:100px !important;border-top:1px solid black;">TERMINAL</td>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0; ?>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Truthfulness</td>
                                            <td scope="" style="text-align:center">20</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['truthfulness_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['truthfulness_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Integrity</td>
                                            <td scope="" style="text-align:center">25</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['integrity_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['integrity_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Sense of Pride</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['pride_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['pride_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Moral Courage</td>
                                            <td scope="" style="text-align:center">15</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['courage_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['courage_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Confidence and Behaviour Under Stress</td>
                                            <td scope="" style="text-align:center">15</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['confidence_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['confidence_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Initiative</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['initiative_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['inititative_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Ability to Command, Control and Assert</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['command_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['command_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Self and General Discipline</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['discipline_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['discipline_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Sense of Duty</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['duty_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['duty_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Reliability</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['reliability_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['reliability_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">General Appearance & Bearing</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['appearance_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['appearance_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Physical Fittness</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['fitness_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['fitness_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Manners and Social Conduct</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['conduct_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['conduct_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Intelligence and Common Sense</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['cs_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['cs_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Cooperation Adaptability and Team Work</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['teamwork_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['teamwork_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Power of Expression (Oral & Written)</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['expression_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['expression_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"></td>
                                            <td scope=""> <strong>Grand Total: </strong> </td>
                                            <td scope="" style="text-align:center">200</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['total_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['total_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="" style="border-right:1px solid black;"> MARKS FOR TERM </td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['mid_marks']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['terminal_marks']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="" style="border-right:1px solid black;"> DATE OF ASSESSMENT</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t2['mid_marks_date']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t2['terminal_marks_date']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="3" style="border-right:1px solid black;"> DIVISIONAL OFFICER'S SIGNATURE </td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="3" style="border-right:1px solid black;"> CAPTAIN TRAINNING'S SIGNATURE </td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="3" style="border-right:1px solid black;"> CO/COMMANDANT'S SIGNATURE </td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_olq_term2">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="officer_qualities_record_term3">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/officer_qualities_records_report/<?= $pn_data['oc_no'] ?>/Term-III'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>OFFICER LIKE QUALITIES</strong></h4>
                                <h4 style="text-decoration:underline"><strong>TERM-III</strong></h4>
                            </div>
                        </div>

                        <div id="table_div" style=" padding:20px !important">
                            <?php if (isset($pn_officer_qualities_data_t3['term'])) { ?>
                                <table style="color:black; width:100% !important;">
                                    <thead style="font-weight:bold;padding:5px; text-align:center">
                                        <tr>
                                            <td scope="" style="width:10px;border-top:none !important;border-left:none !important"></td>
                                            <td scope="" style="width:70px;border-top:none !important;border-left:none !important"></td>
                                            <td scope="" style="width:70px;border-top:1px solid black;">MAX MARKS</td>
                                            <td scope="" style="width:70px;border-top:1px solid black;">MID TERM</td>
                                            <td scope="" style="border-right:1px solid black;width:100px !important;border-top:1px solid black;">TERMINAL</td>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
                                        <?php $count = 0; ?>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Truthfulness</td>
                                            <td scope="" style="text-align:center">20</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['truthfulness_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['truthfulness_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Integrity</td>
                                            <td scope="" style="text-align:center">25</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['integrity_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['integrity_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Sense of Pride</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['pride_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['pride_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Moral Courage</td>
                                            <td scope="" style="text-align:center">15</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['courage_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['courage_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Confidence and Behaviour Under Stress</td>
                                            <td scope="" style="text-align:center">15</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['confidence_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['confidence_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Initiative</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['initiative_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['inititative_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Ability to Command, Control and Assert</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['command_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['command_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Self and General Discipline</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['discipline_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['discipline_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Sense of Duty</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['duty_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['duty_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Reliability</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['reliability_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['reliability_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">General Appearance & Bearing</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['appearance_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['appearance_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Physical Fittness</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['fitness_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['fitness_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Manners and Social Conduct</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['conduct_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['conduct_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Intelligence and Common Sense</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['cs_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['cs_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Cooperation Adaptability and Team Work</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['teamwork_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['teamwork_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"><?= ++$count; ?></td>
                                            <td scope="">Power of Expression (Oral & Written)</td>
                                            <td scope="" style="text-align:center">10</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['expression_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['expression_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="height:80px"></td>
                                            <td scope=""> <strong>Grand Total: </strong> </td>
                                            <td scope="" style="text-align:center">200</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['total_mid']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['total_terminal']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="" style="border-right:1px solid black;"> MARKS FOR TERM </td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['mid_marks']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['terminal_marks']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="" style="border-right:1px solid black;"> DATE OF ASSESSMENT</td>
                                            <td scope="" style="text-align:center"><?= $pn_officer_qualities_data_t3['mid_marks_date']; ?></td>
                                            <td scope="" style="border-right:1px solid black;text-align:center"><?= $pn_officer_qualities_data_t3['terminal_marks_date']; ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-left:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="3" style="border-right:1px solid black;"> DIVISIONAL OFFICER'S SIGNATURE </td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="3" style="border-right:1px solid black;"> CAPTAIN TRAINNING'S SIGNATURE </td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                        <tr style="border-left: none;">
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" style="height:80px; border-left:none"></td>
                                            <td scope="" colspan="3" style="border-right:1px solid black;"> CO/COMMANDANT'S SIGNATURE </td>
                                        </tr>
                                        <tr>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-left:none"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;"></td>
                                            <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data Available yet </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_olq_term3">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="card-body bg-custom3" style="display:none" id="personal_data_record">
        <?php if (isset($pn_data['name'])) { ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4 my-2">
                <h1 class="h3 mb-0 text-black-800"><strong> DOSSIER FOLDER </strong></h1>
                <a onclick="location.href='<?php echo base_url() ?>/D_O/personal_data_records_report/<?= $pn_data['oc_no'] ?>'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-print text-white-50"></i> Print Page</a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="form-group row my-5">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2 box">
                                <h5 style="margin-top:90px; text-decoration:underline"><strong>&nbsp;TERM-III</strong></h5>
                            </div>
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-2 box">
                                <h5 style="margin-top:90px; text-decoration:underline"><strong>&nbsp;TERM-II</strong></h5>
                            </div>
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-2 box">
                                <h5 style="margin-top:90px; text-decoration:underline"><strong>&nbsp;TERM-I</strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>PERSONAL DATA</strong></h4>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-1">
                                <h5><strong>1.&nbsp;&nbsp;&nbsp;P NO:</strong></h5>
                            </div>
                            <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['p_no']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                                <h5><strong>2.&nbsp;&nbsp;&nbsp;CLASS:</strong></h5>
                            </div>
                            <div class="col-sm-5" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['class']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>3.&nbsp;&nbsp;&nbsp;NAME IN FULL:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>4.&nbsp;&nbsp;&nbsp;RELIGION:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['religion']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>5.&nbsp;&nbsp;&nbsp;EMERGENCY CONTACT:</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['emergency_contact']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>6.&nbsp;&nbsp;&nbsp;TELEPHONE NO:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['telephone_no']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>7.&nbsp;&nbsp;&nbsp;EX-ARMY NAVY OR PAF:</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['ex_army']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>&nbsp;&nbsp;&nbsp;&nbsp;SERVERED FROM:</strong></h5>
                            </div>
                            <div class="col-sm-4" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['ex_army_from']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                                <h5><strong>&nbsp;&nbsp;&nbsp;&nbsp;TO:</strong></h5>
                            </div>
                            <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['ex_army_to']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>8.&nbsp;&nbsp;&nbsp;FATHER'S NAME:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>9.&nbsp;&nbsp;&nbsp;FATHER'S OCCUPATION:</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_occupation']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>10.&nbsp;&nbsp;&nbsp;NEXT OF KIN AND ADDRESS:</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['next_of_kin']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-10" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-4">
                                <h5><strong>11.&nbsp;&nbsp;&nbsp;NAMES OF BROTHERS AND SISTERS:</strong></h5>
                            </div>
                            <div class="col-sm-6" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['next_of_kin']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-10">
                                <h5><strong>12.&nbsp;&nbsp;&nbsp;NEAR RELATIVES IN DEFENCE SERVICES (TO INCLUDE ONLY 	PARENTS/BROTHERS/SISTERS/REAL UNCLES):</strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5 style="text-decoration:underline"><strong>RANK:</strong></h5>
                            </div>
                            <div class="col-sm-4">
                                <h5 style="text-decoration:underline"><strong>NAME</strong></h5>
                            </div>
                            <div class="col-sm-2">
                                <h5 style="text-decoration:underline"><strong>RELATIONSHIP</strong></h5>
                            </div>
                            <div class="col-sm-2">
                                <h5 style="text-decoration:underline"><strong>UNIT</strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>13.&nbsp;&nbsp;&nbsp;IDENTIFICATION MARK:</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>14.&nbsp;&nbsp;&nbsp;HEIGHT:</strong></h5>
                            </div>
                            <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['p_no']?></strong></h5>
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>15.&nbsp;&nbsp;&nbsp;WEIGHT:</strong></h5>
                            </div>
                            <div class="col-sm-3" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['class']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>


                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>PART-II</strong></h4>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>16.&nbsp;&nbsp;&nbsp;DATE OF JOINING NAVY:</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>17.&nbsp;&nbsp;&nbsp;MODE OF ENTRY:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>18.&nbsp;&nbsp;&nbsp;SERVICE IDENTITY CARD NO:</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>19.&nbsp;&nbsp;&nbsp;NATIONAL IDENTITY CARD NO:</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>20.&nbsp;&nbsp;&nbsp;BLOOD GROUP:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>21.&nbsp;&nbsp;&nbsp;ADDRESS:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-4">
                                <h5><strong>22.&nbsp;&nbsp;&nbsp;KARACHI ADDRESS IF ANY WITH TELE NO:</strong></h5>
                            </div>
                            <div class="col-sm-6" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>

                        <div class="container my-3">
                            <div style="text-align:center">
                                <h4 style="text-decoration:underline"><strong>PART-III</strong></h4>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>23.&nbsp;&nbsp;&nbsp;MATRIC: SCHOOL</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>24.&nbsp;&nbsp;&nbsp;DIVISION/GRADE:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>25.&nbsp;&nbsp;&nbsp;SUBJECTS:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>26.&nbsp;&nbsp;&nbsp;INTERMEDIATE: COLLEGE:</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <h5><strong>27.&nbsp;&nbsp;&nbsp;DIVISION/GRADE:</strong></h5>
                            </div>
                            <div class="col-sm-8" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>28.&nbsp;&nbsp;&nbsp;HET/DIPLOMA (IF APPLICABLE):</strong></h5>
                            </div>
                            <div class="col-sm-7" style="border-bottom: 2px solid black; text-align:center">
                                <h5><strong><?= $pn_personal_data['father_name']?></strong></h5>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>
                        

                        
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="user" role="form" method="" id="" action="">
            <div class="form-group row justify-content-center my-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-user btn-block" id="back_btn_personal_record">
                        Back
                    </button>
                </div>
            </div>
        </form>

    </div>


</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script>
    $('#search_btn').on('click', function() {
        var validate = 0;
        var oc_no = $('#oc_no').val();

        if (oc_no == '') {
            validate = 1;
            $('#oc_no').addClass('red-border');
        }

        if (validate == 0) {
            $('#error_search').hide();

            $.ajax({
                url: '<?= base_url(); ?>D_O/search_cadet_for_dossier_folder',
                method: 'POST',
                data: {
                    'oc_no': oc_no
                },
                success: function(data) {
                    if (data != '0') {
                        var newDoc = document.open("text/html", "replace");
                        newDoc.write(data);
                        newDoc.close();
                    } else {
                        $('#no_data').show();
                        $('#cadet_dossier').hide();
                    }
                },
                async: true
            });

        } else {
            $('#error_search').show();
        }

    });


    function seen(data) {
        $.ajax({
            url: '<?= base_url(); ?>ChatController/seen',
            method: 'POST',
            data: {
                'id': data
            },
            success: function(data) {
                $('#notification').html(data);
            },
            async: true
        });
    }

    $('#notifications').focusout(function() {
        $.ajax({
            url: '<?= base_url(); ?>ChatController/activity_seen',
            success: function(data) {
                $('#notifications').html(data);
            },
            async: true
        });
    });

    $('#gen').on('click', function() {
        $('#cadet_dossier').hide();
        $('#gen_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>GENERAL</h4>');
    });

    $('#disp').on('click', function() {
        $('#cadet_dossier').hide();
        $('#disp_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>DISCIPLINE</h4>');
    });

    $('#warn').on('click', function() {
        $('#cadet_dossier').hide();
        $('#warn_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>WARNING</h4>');
    });

    $('#phy').on('click', function() {
        $('#cadet_dossier').hide();
        $('#phy_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>PHYSICAL EFFICIENCY</h4>');
    });

    $('#acad').on('click', function() {
        $('#cadet_dossier').hide();
        $('#acad_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>ACADEMIC RECORDS</h4>');
    });

    $('#olq').on('click', function() {
        $('#cadet_dossier').hide();
        $('#olq_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>OFFICER LIKE QUALITIES</h4>');
    });

    $('#assess').on('click', function() {
        $('#cadet_dossier').hide();
        $('#assess_list').show();
        $('#back_btn').show();
        $('#header_title').html('<h4>ASSESSMENT</h4>');
    });

    $('#back_btn').on('click', function() {
        $('#cadet_dossier').show();
        $('#gen_list').hide();
        $('#phy_list').hide();
        $('#warn_list').hide();
        $('#acad_list').hide();
        $('#olq_list').hide();
        $('#disp_list').hide();
        $('#assess_list').hide();
        $('#back_btn').hide();
        $('#header_title').html('<h4>CONTENTS</h4>');
    });

    $('#btn_punish_term1').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#punish_term1').show();
        $('#punish_term2').hide();
        $('#punish_term3').hide();
        $('#back_btn_punish').show();
    });

    $('#btn_punish_term2').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#punish_term2').show();
        $('#punish_term1').hide();
        $('#punish_term3').hide();
        $('#back_btn_punish').show();
    });

    $('#btn_punish_term3').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#punish_term3').show();
        $('#punish_term1').hide();
        $('#punish_term2').hide();
        $('#back_btn_punish').show();
    });

    $('#btn_obs_term1').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#obs_term1').show();
        $('#obs_term2').hide();
        $('#obs_term3').hide();
        $('#back_btn_punish').show();
    });
    $('#btn_obs_term2').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#obs_term2').show();
        $('#obs_term1').hide();
        $('#obs_term3').hide();
        $('#back_btn_punish').show();
    });
    $('#btn_obs_term3').on('click', function() {
        $('#main-container').hide();
        $('#container-2').hide();
        $('#obs_term3').show();
        $('#obs_term1').hide();
        $('#obs_term2').hide();
        $('#back_btn_punish').show();
    });

    $('#back_btn_punish_term1, #back_btn_punish_term2, #back_btn_punish_term3').on('click', function() {
        $('#main-container').show();
        $('#punish_term1').hide();
        $('#punish_term2').hide();
        $('#punish_term3').hide();
        $('#terms_list_punish').hide();
        $('#terms_list_obs').hide();
    });

    $('#back_btn_obs_term1, #back_btn_obs_term2, #back_btn_obs_term3, #back_btn_warning, #back_btn_inspection, #back_btn_medical, #back_btn_saluting_swimming, #back_btn_physical_efficiency, #back_btn_olq_term1, #back_btn_olq_term2, #back_btn_olq_term3').on('click', function() {
        $('#main-container').show();
        $('#obs_term1').hide();
        $('#obs_term2').hide();
        $('#obs_term3').hide();
        $('#terms_list_punish').hide();
        $('#terms_list_obs').hide();
        $('#warning_record').hide();
        $('#inspection_record').hide();
        $('#medical_record').hide();
        $('#saluting_swimming_record').hide();
        $('#officer_qualities_record_term1').hide();
        $('#officer_qualities_record_term2').hide();
        $('#officer_qualities_record_term3').hide();
    });

    $('#obs_record').on('click', function() {
        $('#terms_list_punish').hide();
        $('#terms_list_obs').show();
    });

    $('#punish_record').on('click', function() {
        $('#terms_list_obs').hide();
        $('#terms_list_punish').show();
    });
    $('#btn_olq_record').on('click', function() {
        $('#terms_olq_record').show();
    });

    $('#btn_warning').on('click', function() {
        $('#warning_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_inspection_record').on('click', function() {
        $('#inspection_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_medical_record').on('click', function() {
        $('#medical_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_saluting_swimming_record').on('click', function() {
        $('#saluting_swimming_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_physical_record').on('click', function() {
        $('#physical_efficiency_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_olq_term1').on('click', function() {
        $('#officer_qualities_record_term1').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_olq_term2').on('click', function() {
        $('#officer_qualities_record_term2').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_olq_term3').on('click', function() {
        $('#officer_qualities_record_term3').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });

    $('#btn_personal_record').on('click', function() {
        $('#personal_data_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });
</script>