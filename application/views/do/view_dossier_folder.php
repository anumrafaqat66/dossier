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
</style>

<div class="container-fluid my-2">

    <!-- Page Heading -->
    <div class="card-body" style="padding:10px">
        <div class="row my-2">


            <div class="card-body" style="margin-left:30px">
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

    <div class="card-body bg-custom3">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-custom1">
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
                                    <div class="col-sm-2" style="margin-top:15px">
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
                                    <div class="col-lg-7" style="text-align:left;font-weight: bold;">
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
                                    <div class="col-lg-5">
                                        <div class="card-header bg-custom1">
                                            <h1 class="h4">PN Form-I</h1>
                                        </div>

                                        <div class="card-body bg-custom1">
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <h6 style="text-decoration:underline"><strong>Name:</strong></h6>
                                                </div>

                                                <div class="col-sm-4">
                                                <h6 style="text-decoration:underline"><strong>OC No</h6></strong></h6>
                                                </div>

                                                <div class="col-sm-4">
                                                <h6 style="text-decoration:underline"><strong>P.NO</h6></strong></h6>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-4 ">
                                                    <h6><?php if (isset($pn_data['name'])) {
                                                            echo $pn_data['name'];
                                                        } ?></h6>
                                                </div>

                                                <div class="col-lg-4 ">
                                                    <h6><?php if (isset($pn_data['oc_no'])) {
                                                            echo $pn_data['oc_no'];
                                                        } ?></h6>
                                                </div>

                                                <div class="col-lg-4 ">
                                                    <h6><?php if (isset($pn_data['p_no'])) {
                                                            echo $pn_data['p_no'];
                                                        } ?></h6>
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                <h6 style="text-decoration:underline"><strong>ISSB Batch No</strong></h6>
                                                </div>
                                                <div class="col-sm-4">
                                                <h6 style="text-decoration:underline"><strong>Category</strong></h6>
                                                </div>
                                                <div class="col-sm-4">
                                                <h6 style="text-decoration:underline"><strong>Division Name</strong></h6>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-4 ">
                                                    <h6><?php if (isset($pn_data['issb_batch'])) {
                                                            echo $pn_data['issb_batch'];
                                                        } ?></h6>
                                                </div>

                                                <div class="col-lg-4 ">
                                                    <h6><?php if (isset($pn_data['category'])) {
                                                            echo $pn_data['category'];
                                                        } ?></h6>
                                                </div>

                                                <div class="col-lg-4 ">
                                                    <h6><?php if (isset($pn_data['divison_name'])) {
                                                            echo $pn_data['divison_name'];
                                                        } ?></h6>
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                <h6 style="text-decoration:underline"><strong>Class</strong></h6>
                                                </div>
                                                <div class="col-sm-4">
                                                <h6 style="text-decoration:underline"><strong>Term</strong></h6>
                                                </div>
                                                <div class="col-sm-4">
                                                <h6 style="text-decoration:underline"><strong>Club</strong></h6>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-4 ">
                                                    <h6><?php if (isset($pn_data['class'])) {
                                                            echo $pn_data['class'];
                                                        } ?></h6>
                                                </div>

                                                <div class="col-lg-4 ">
                                                    <h6><?php if (isset($pn_data['term'])) {
                                                            echo $pn_data['term'];
                                                        } ?></h6>
                                                </div>

                                                <div class="col-lg-4 ">
                                                    <h6><?php if (isset($pn_data['club'])) {
                                                            echo $pn_data['club'];
                                                        } ?></h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <div id="gen_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
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
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF OBSERVATIONS TERM-I</li>
                                        </a>
                                        <a href="<?php echo base_url() ?>/D_O/punishment_records_report" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF PUNISHMENT TERM-I</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF OBSERVATIONS TERM-II</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF PUNISHMENT TERM-II</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF OBSERVATIONS TERM-III</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF PUNISHMENT TERM-III</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">OBSERVATIONS SLIPS</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="warn_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF WARNINGS</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">WARNINGS (INSERTED)</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="phy_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF SALUTING AND SWIMMING</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD PHYSICAL EFFICIENCY</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">PROFICIENCY IN GAMES</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">MEDICAL RECORD</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="acad_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RSEULT (TERM-I)</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">SEA TRAINING REPORT (TERM-II)</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RESULT (TERM-II)</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RESULT (TERM III)</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="olq_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">OFFICER LIKE QUALITIES</li>
                                        </a>

                                    </ul>
                                </div>
                            </div>

                            <div id="assess_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">GENERAL REMARKS (Term I to III)</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">PROGRESS CHART</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF DISTINCTIONS ACHIEVED</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">RECORD OF SENIORITY</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">ALLOCAITON OF BRANCH/SPECIALISATION </li>
                                        </a>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
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
    });

    $('#disp').on('click', function() {
        $('#cadet_dossier').hide();
        $('#disp_list').show();
        $('#back_btn').show();
    });

    $('#warn').on('click', function() {
        $('#cadet_dossier').hide();
        $('#warn_list').show();
        $('#back_btn').show();
    });

    $('#phy').on('click', function() {
        $('#cadet_dossier').hide();
        $('#phy_list').show();
        $('#back_btn').show();
    });

    $('#acad').on('click', function() {
        $('#cadet_dossier').hide();
        $('#acad_list').show();
        $('#back_btn').show();
    });

    $('#olq').on('click', function() {
        $('#cadet_dossier').hide();
        $('#olq_list').show();
        $('#back_btn').show();
    });

    $('#assess').on('click', function() {
        $('#cadet_dossier').hide();
        $('#assess_list').show();
        $('#back_btn').show();
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
    });
</script>