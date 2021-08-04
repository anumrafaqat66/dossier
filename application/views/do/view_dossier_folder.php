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
                                    <div class="col-lg-6" style="text-align:left;font-weight: bold;">
                                        <ul class="list-group">
                                            <a href="#" style="color:black" id="gen">
                                                <li class="list-group-item bg-custom3">General</li>
                                            </a>
                                            <a href="#" style="color:black" id="disp">
                                                <li class="list-group-item bg-custom3">Discipline</li>
                                            </a>
                                            <a href="#" style="color:black" id="war">
                                                <li class="list-group-item bg-custom3">Warnings</li>
                                            </a>
                                            <a href="#" style="color:black" id="phy">
                                                <li class="list-group-item bg-custom3">Physical Efficiency</li>
                                            </a>
                                            <a href="#" style="color:black" id="aca">
                                                <li class="list-group-item bg-custom3">Academic Record</li>
                                            </a>
                                            <a href="#" style="color:black" id="olq">
                                                <li class="list-group-item bg-custom3">Officer Like Qualities</li>
                                            </a>
                                            <a href="#" style="color:black" id="assess">
                                                <li class="list-group-item bg-custom3">Assessment</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>

                            <div id="general_list" class="row" style="display:none ;">
                                <div class="col-lg-6" style="text-align:left;font-weight: bold;">
                                    <ul class="list-group">
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3" >Inspection Record</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3">Record of Divisional Officers</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3">Personal Data</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3">Cadet’s Auto-Biography</li>
                                        </a>
                                        <a href="" style="color:black">
                                            <li class="list-group-item bg-custom3">Psychologist’s Report</li>
                                        </a>
                                    </ul>
                                </div>
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
        // alert('in');
        // alert(data);
        // var receiver_id=$(this).attr('id');
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
        $('#general_list').show();

    });
</script>