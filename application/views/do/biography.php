<?php $this->load->view('do/common/header'); ?>
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
    <!-- Page Heading -->
    <div class="card-body" style="padding:10px">
        <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height: 130px; width:100px;">
        <div class="card-body" style="margin-bottom:20px;float:right; padding:30px; margin-right:450px">
            <h1 style="text-align:center"><strong>CADET'S AUTO-BIOGRAPHY</strong></h1>
        </div>
    </div>

    <div class="card-body bg-custom3">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">Biography</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Project_Officer/insert_project">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h6>&nbsp;Officer Name:</h6>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-12 mb-1">
                                    <select class="form-control rounded-pill" name="officer_name" id="officer_name" data-placeholder="Select Contractor" style="font-size: 0.8rem; height:50px;">
                                        <option class="form-control form-control-user" value="">Select Officer Name</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h6>&nbsp;Upload Documents:</h6>
                                </div>
                            </div>

                            <div class="form-group row custom-file-upload">
                                <div class="col-sm-12 mb-1">
                                    <input type="file" style="height: 50px; padding:10px !important;" class="form-control form-control-user" placeholder="Upload Document" x-model="fileName">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="add_btn">
                                        <!-- <i class="fab fa-google fa-fw"></i>  -->
                                        Submit
                                    </button>
                                    <span id="show_error_new" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;Please check errors*</span>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>


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
        //alert('javascript working');
        $('#add_btn').attr('disabled', true);
        var validate = 0;

        var oc_no = $('#oc_no').val();
        var pno = $('#pno').val();
        var name = $('#name').val();
        var class_ = $('#class').val();
        var batch_no = $('#batch_no').val();
        var status = $('#status').val();
        var div_name = $('#div_name').val();
        var status = $('#status').val();

        if (oc_no == '') {
            validate = 1;
            $('#oc_no').addClass('red-border');
        }
        if (pno == '') {
            validate = 1;
            $('#pno').addClass('red-border');
        }
        if (name == '') {
            validate = 1;
            $('#name').addClass('red-border');
        }
        if (class_ == '') {
            validate = 1;
            $('#class').addClass('red-border');
        }

        if (batch_no == '') {
            validate = 1;
            $('#batch_no').addClass('red-border');
        }
        if (status == '') {
            validate = 1;
            $('#status').addClass('red-border');
        }
        if (div_name == '') {
            validate = 1;
            $('#div_name').addClass('red-border');
        }

        if (validate == 0) {
            $('#add_form')[0].submit();
            $('#show_error_new').hide();
        } else {
            $('#add_btn').removeAttr('disabled');
            $('#show_error_new').show();
        }
    });
</script>