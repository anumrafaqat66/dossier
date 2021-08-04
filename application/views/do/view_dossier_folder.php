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
            <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height: 130px; width:100px;">
            <div class="card-body">
                <h1 style="text-align:center"><strong>VIEW CADET'S DOSSIER FOLDER</strong></h1>
            </div>
        </div>
    </div>

    <div class="card-body bg-custom3">
        <!-- Nested Row within Card Body -->

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">Search Cadet</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" id="add_form" action="">
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

                            <?php if (count($pn_data) > 0) { ?>
                                <div id="cadet_dossier" class="row">
                                    <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                        <ul class="list-group">
                                            <a href="#" style="color:black" id="gen">
                                                <li class="list-group-item bg-custom3 custom_list">General</li>
                                            </a>
                                            <a href="#" style="color:black" id="disp">
                                                <li class="list-group-item bg-custom3 custom_list">Discipline</li>
                                            </a>
                                            <a href="#" style="color:black" id="warn">
                                                <li class="list-group-item bg-custom3 custom_list">Warnings</li>
                                            </a>
                                            <a href="#" style="color:black" id="phy">
                                                <li class="list-group-item bg-custom3 custom_list">Physical Efficiency</li>
                                            </a>
                                            <a href="#" style="color:black" id="acad">
                                                <li class="list-group-item bg-custom3 custom_list">Academic Record</li>
                                            </a>
                                            <a href="#" style="color:black" id="olq">
                                                <li class="list-group-item bg-custom3 custom_list">Officer Like Qualities</li>
                                            </a>
                                            <a href="#" style="color:black" id="assess">
                                                <li class="list-group-item bg-custom3 custom_list">Assessment</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>

                            <div id="gen_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Inspection Record</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Divisional Officers</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Personal Data</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Cadet’s Auto-Biography</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Psychologist’s Report</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="disp_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Observations Term-I</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Punishment Term-I</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Observations Term-II</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Punishment Term-II</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Observations Term-III</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Punishment Term-III</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Observations Slips</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="warn_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Warnings</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Warnings (Inserted)</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="phy_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Saluting and Swimming</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record Physical Efficiency</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Proficiency in Games</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Medical Record</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="acad_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Result (Term I )</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Sea Training Report – Term II</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Result (Term II)</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Result (Term III)</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>

                            <div id="olq_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Officer Like Qualities</li>
                                        </a>

                                    </ul>
                                </div>
                            </div>

                            <div id="assess_list" class="row" style="display:none ;">
                                <div class="col-lg-7" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">General Remarks (Term I to III)</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Progress Chart</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Distinctions Achieved</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Record of Seniority</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3 custom_list">Allocation of Branch/Specialisation </li>
                                        </a>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <button type="button" class="btn btn-primary btn-user btn-block my-3" id="back_btn" style="display:none">
                                    Back
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