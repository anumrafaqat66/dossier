<?php $this->load->view('ct/common/header'); ?>
<style>
    .red-border {
        border: 1px solid red !important;
    }

    .modal {
        display: none;
        position: fixed;
        padding-top: 100px;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        overflow: auto;
        z-index: 9999;
    }
</style>

<div class="container-fluid my-2">

    <div class="form-group row justify-content-center">
        <div class="col-lg-1">
            <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height: 130px; width:100px;">
        </div>
        <div class="col-lg-11">
            <h1 style="text-align:center; padding:40px"><strong>ADD GENERAL REMARKS</strong></h1>
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
                                <div class="col-sm-4">
                                    <h6>&nbsp;Enter OC No:</h6>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="oc_no" id="oc_no" placeholder="OC No.">
                                </div>

                                <div class="col-sm-2 mb-1">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="add_btn">
                                        <!-- <i class="fab fa-google fa-fw"></i>   -->
                                        Search
                                    </button>
                                    <span id="show_error_new" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;Please check errors*</span>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="search_cadet" class="row my-2" style="display:none">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">Add General Remarks</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" enctype="multipart/form-data" id="save_form" action="<?= base_url(); ?>CT/save_general_remarks">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <h6>&nbsp;Name:</h6>
                                </div>

                                <div class="col-sm-4">
                                    <h6>&nbsp;Term:</h6>
                                </div>

                                <div class="col-sm-4">
                                    <h6>&nbsp;Division:</h6>
                                </div>

                            </div>
                            <div class="form-group row">

                                <div class="col-sm-4 mb-1" style="display:none">
                                    <input type="text" class="" name="oc_num" id="oc_num">
                                </div>
                                <div class="col-sm-4 mb-1" style="display:none">
                                    <input type="text" class="" name="id" id="id">
                                </div>

                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="name" id="name" style="font-weight: bold; font-size:large" placeholder="Name" readonly>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="term" id="term" style="font-weight: bold; font-size:large" placeholder="Term" readonly>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <input type="text" class="form-control form-control-user" name="division" id="division" style="font-weight: bold; font-size:large" placeholder="Division" readonly>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h6>&nbsp;Select Assessment:</h6>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-1">
                                    <select class="form-control rounded-pill" name="assess_type" id="assess_type" data-placeholder="Warning Type" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">Select Assessment</option>
                                        <option class="form-control form-control-user" value="Mid Term Assessment">Mid Term Assessment</option>
                                        <option class="form-control form-control-user" value="Terminal Assessment">Terminal Assessment</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h6>&nbsp;Remarks:</h6>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-1">
                                    <textarea class="form-control form-control-user" name="remarks" id="remarks" style="border-radius:10px" placeholder="Add Remarks"></textarea>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="save_btn_remarks">
                                        save
                                    </button>
                                    <span id="show_error_save" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;Please check errors*</span>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>

        <div id="no_data" class="row my-2" style="display:none">
            <div class="col-lg-12 my-5">

                <h4 style="color:red">No Cadet Found. Please check the OC No. entered</h4>

            </div>
        </div>
    </div>

</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script>
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
        // alert('notification clicked');
        $.ajax({
            url: '<?= base_url(); ?>ChatController/activity_seen',
            success: function(data) {
                $('#notifications').html(data);
            },
            async: true
        });
    });


    $('#add_btn').on('click', function() {
        var validate = 0;
        var oc_no = $('#oc_no').val();

        if (oc_no == '') {
            validate = 1;
            $('#oc_no').addClass('red-border');
        }

        if (validate == 0) {
            // $('#add_form')[0].submit();
            $('#show_error_new').hide();

            $.ajax({
                url: '<?= base_url(); ?>CT/search_cadet',
                method: 'POST',
                data: {
                    'oc_no': oc_no
                },
                success: function(data) {
                    var result = jQuery.parseJSON(data);

                    if (result != undefined) {
                        $('#search_cadet').show();
                        $('#no_data').hide();

                        $('#name').val(result['name']);
                        $('#term').val(result['term']);
                        $('#division').val(result['divison_name']);
                        $('#oc_num').val(result['oc_no']);
                        $('#id').val(result['p_id']);
                    } else {
                        $('#no_data').show();
                        $('#search_cadet').hide();

                    }

                },
                async: true
            });
        } else {
            $('#add_btn').removeAttr('disabled');
            $('#show_error_new').show();
        }
    });

    $('#end_date').on('focusout', function() {
        var start_date = new Date($('#start_date').val());
        var end_date = new Date($('#end_date').val());
        var validate = 0;

        if (end_date < start_date) {
            $('#error_end_date').show();
            $('#end_date').addClass('red-border');
            $('#end_date').focus();
            $('#save_btn').attr('disabled', true);
        } else {
            $('#error_end_date').hide();
            $('#save_btn').removeAttr('disabled');
            $('#end_date').removeClass('red-border');

        }

        $('#days').val(Math.abs(end_date - start_date) / 1000 / 60 / 60 / 24);
    });


    $('#save_btn_remarks').on('click', function() {
        $('#save_btn_remarks').attr('disabled', true);
        var validate = 0;
        var assess_type = $('#assess_type').val();
        var remarks = $('#remarks').val();
        

        if (assess_type == '') {
            validate = 1;
            $('#assess_type').addClass('red-border');
        }
        if (remarks == '') {
            validate = 1;
            $('#remarks').addClass('red-border');
        }

        if (validate == 0) {
            $('#save_form')[0].submit();
            $('#show_error_save').hide();

        } else {
            $('#save_btn_remarks').removeAttr('disabled');
            $('#show_error_save').show();
        }
    });
</script>