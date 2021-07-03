<?php $this->load->view('do/common/header'); ?>

<style>
    .red-border {
        border: 1px solid red !important;
    }

    /* .modal {
        display: none;
        position: fixed;
        padding-top: 100px;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        overflow: auto;
        z-index: 9999;
    } */
</style>

<div class="container-fluid my-2">


    <div class="modal fade" id="reduce_punishment">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 370px;" role="document">
            <div class="modal-content bg-custom3" style="width:1000px;">
                <div class="modal-header" style="width:1000px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">Reduce Punishment</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Project_Officer/insert_project">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <h3 id="cadet_name_heading"></h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <h6>&nbsp;Punish Detail:</h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6>&nbsp;Start Date:</h6>
                                            </div>

                                            <div class="col-sm-3">
                                                <h6>&nbsp;End Date:</h6>
                                            </div>

                                            <div class="col-sm-3">
                                                <h6>&nbsp;Days:</h6>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="punish" id="punish">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="date" class="form-control form-control-user" name="start_date" id="start_date">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="date" class="form-control form-control-user" name="end_date" id="end_date">
                                                <span id="error_end_date" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;End Date cannot be less than start date</span>
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="days" id="days" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row justify-content-center">
                                            <div class="col-sm-4">
                                                <button type="button" class="btn btn-primary btn-user btn-block" id="add_btn">
                                                    <!-- <i class="fab fa-google fa-fw"></i>  -->
                                                    Update
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
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary rounded-pill" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <div class="card-body" style="padding:10px">
        <div class="row my-2">
            <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height: 130px; width:100px;">
            <div class="card-body">
                <h1 style="text-align:center"><strong>OBSERVATION LIST</strong></h1>
            </div>
        </div>
    </div>

    <div class="card-body bg-custom3">
        <!-- Nested Row within Card Body -->

        <!-- <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">Search Punishment by Date</h1>
                    </div>

                    <div class="card-body bg-custom3">
                        <form class="user" role="form" method="post" id="add_form" action="">
                            <div class="form-group row">
                                <div class="col-sm-2" style="margin-top:15px">
                                    <h6>&nbsp;Enter Date:</h6>
                                </div>

                                <div class="col-sm-3 mb-1">
                                    <input type="date" class="form-control form-control-user" name="search_date" id="search_date" placeholder="Select Date" value="<?= $search_date; ?>">
                                    <span id="error_search" style="font-size:10px; color:red; display:none">&nbsp;&nbsp;Please select date</span>
                                </div>

                                <div class="col-sm-2 mb-1">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="search_btn">
                                        Search
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div> -->

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">Observation List</h1>
                    </div>

                    <div class="card-body">
                        <div id="table_div">
                            <?php if (count($observation_records) > 0) { ?>
                                <table id="datatable" class="table table-striped" style="color:black">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Cadet Name</th>
                                            <th scope="col">Term</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Observation</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows">
                                        <?php $count = 0;
                                        foreach ($observation_records as $data) { ?>
                                            <tr>
                                                <td scope="row"><?= $data['id']; ?></td>
                                                <td scope="row"><?= $data['name']; ?></td>
                                                <td scope="row"><?= $data['term']; ?></td>
                                                <td scope="row"><?= $data['date']; ?></td>
                                                <td scope="row"><?= $data['observation']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <a> No Data found </a>
                            <?php } ?>
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