<?php $this->load->view('Admin/common/header'); ?>
<style>
    .red-border {
        border: 1px solid red !important;
    }
</style>

<div class="container">

    <div class="card o-hidden my-4 sborder-0 shadow-lg">
        <div class="card-body bg-custom3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header bg-custom1">
                            <h1 class="h4 text-white">Create New User</h1>
                        </div>

                        <div class="card-body bg-custom3">
                            <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Admin/add_user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;Username:</h6>
                                    </div>
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;Password:</h6>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="username*">
                                    </div>
                                    <div class="col-sm-6 mb-1">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="password*">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;Login Account Type:</h6>
                                    </div>
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;Division:</h6>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <select class="form-control rounded-pill" name="status" id="status" data-placeholder="Select Controller" style="font-size: 0.8rem; height:50px;">\
                                            <option class="form-control form-control-user" value="">Select Role Type</option>
                                            <option value="do">DO</option>
                                            <option value="joto">JOTO</option>
                                            <option value="ct">Captain Training</option>
                                            <option value="co">Commanding Officer</option>
                                            <option value="exo">EXO</option>
                                            <option value="sqc">Squadron Commander</option>
                                            <option value="cao">CAO</option>
                                            <option value="cao_sec">CAO SEC</option>
                                            <option value="smo">SMO</option>

                                        </select>
                                    </div>

                                    <div class="col-sm-6 mb-1">
                                        <select class="form-control rounded-pill" name="div" id="div" data-placeholder="Select ship" style="font-size: 0.8rem; height:50px;">
                                            <option class="form-control form-control-user" value="">Select Division</option>
                                            <?php foreach ($divisions as $data) { ?>
                                                <option class="form-control form-control-user" value="<?= $data['division_name'] ?>"><?= $data['division_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>


                                </div>

                               <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;Branch:</h6>
                                    </div>
                                    <div class="col-sm-6 mb-1">
                                        <h6>&nbsp;Unit:</h6>
                                    </div>
                                </div>
                                           <div class="form-group row">
                                    <div class="col-sm-6 mb-1">
                                        <select class="form-control rounded-pill" name="branch" id="branch" data-placeholder="Select Controller" style="font-size: 0.8rem; height:50px;">
                                             <option class="form-control form-control-user" value="">Select Branch</option>
                                    <?php foreach ($branches as $data) { ?>
                                                <option class="form-control form-control-user" value="<?= $data['branch_name'] ?>"><?= $data['branch_name'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>

                                    <div class="col-sm-6 mb-1">
                                        <select class="form-control rounded-pill" name="unit" id="unit" data-placeholder="Select ship" style="font-size: 0.8rem; height:50px;">
                                            <option class="form-control form-control-user" value="">Select Unit</option>
                                            <?php foreach ($units as $data) { ?>
                                                <option class="form-control form-control-user" value="<?= $data['unit_name'] ?>"><?= $data['unit_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>


                                </div>

                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary btn-user btn-block" id="add_btni">
                                            <!-- <i class="fab fa-google fa-fw"></i>  -->
                                            Submit Data
                                        </button>
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

</div>
<?php $this->load->view('common/footer'); ?>
<script>
    $('#status').on('focusout', function() {
        var status = $('#status').val();

        if (status != "do") {
            $("#div").prop("disabled", true);
        } else {
            $("#div").prop("disabled", false);
        }
    });

    $('#add_btni').on('click', function() {
        //alert('javascript working');
        $('#add_btn').attr('disabled', true);
        var validate = 0;

        var username = $('#username').val();
        var password = $('#password').val();
        var status = $('#status').val();
        var div = $('#div').val();



        if (username == '') {
            validate = 1;
            $('#username').addClass('red-border');
        }
        if (password == '') {
            validate = 1;
            $('#password').addClass('red-border');
        }
        if (status == '') {
            validate = 1;
            $('#status').addClass('red-border');
        }
        if (div == '' && status == 'do') {
            validate = 1;
            $('#div').addClass('red-border');
        }

        if (validate == 0) {
            $('#add_form')[0].submit();
        } else {
            $('#add_btni').removeAttr('disabled');
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
        // alert('notification clicked');
        $.ajax({
            url: '<?= base_url(); ?>ChatController/activity_seen',
            success: function(data) {
                $('#notifications').html(data);
            },
            async: true
        });
    });
</script>