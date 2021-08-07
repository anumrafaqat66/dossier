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

    table,
    th,
    td {
        border-left: 1px solid black;
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
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">INSPECTION RECORD</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF DIVISIONAL OFFICERS</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">PERSONAL DATA</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">CADET'S AUTO-BIOGRAPHY</li>
                                        </a>
                                        <a href="" style="color:black">
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
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF SALUTING AND SWIMMING</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD PHYSICAL EFFICIENCY</li>
                                        </a>
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">PROFICIENCY IN GAMES</li>
                                        </a>
                                        <a href="#" style="color:black">
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
                                        <a href="#" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">OFFICER LIKE QUALITIES</li>
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

                        <div class="card-body bg-custom1" style="font-size:small">
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

    $('#back_btn_obs_term1, #back_btn_obs_term2, #back_btn_obs_term3, #back_btn_warning' ).on('click', function() {
        $('#main-container').show();
        $('#obs_term1').hide();
        $('#obs_term2').hide();
        $('#obs_term3').hide();
        $('#terms_list_punish').hide();
        $('#terms_list_obs').hide();
        $('#warning_record').hide();
    });

    $('#obs_record').on('click', function() {
        $('#terms_list_punish').hide();
        $('#terms_list_obs').show();
    });

    $('#punish_record').on('click', function() {
        $('#terms_list_obs').hide();
        $('#terms_list_punish').show();
    });

    $('#btn_warning').on('click', function() {
        $('#warning_record').show();
        $('#main-container').hide();
        $('#container-2').hide();
    });
</script>