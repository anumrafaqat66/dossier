<?php $this->load->view('do/common/header'); ?>
<?php !isset($search_date) ? $search_date = '' : $search_date; ?>
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

    <div class="modal fade" id="view_details">
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
                                    <h1 class="h4">Physical Milestone Details</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form" action="">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <h4 id="cadet_name_heading"></h4>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <h5><strong>Test Name</strong></h5>
                                            </div>
                                            <div class="col-sm-2">
                                                <h5>&nbsp;<strong>Result</strong></h5>
                                            </div>
                                            <div class="col-sm-2">
                                                <h5>&nbsp;<strong>Attempt</strong></h5>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <h6>&nbsp;<strong>PST:</strong></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="pst_result"></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="pst_attempt"></h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <h6>&nbsp;<strong>SST:</strong></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="sst_result"></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="sst_attempt"></h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <h6>&nbsp;<strong>PET-I:</strong></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="pet1_result"></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="pet1_attempt"></h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <h6>&nbsp;<strong>PET-II:</strong></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="pet2_result"></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="pet2_attempt"></h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <h6>&nbsp;<strong>Assault:</strong></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="assault_result"></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="assault_attempt"></h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <h6>&nbsp;<strong>Saluting:</strong></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="saluting_result"></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="saluting_attempt"></h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <h6>&nbsp;<strong>PLX:</strong></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="plx_result"></h6>
                                            </div>
                                            <div class="col-sm-2">
                                                <h6 id="plx_attempt"></h6>
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


    <div class="modal fade" id="PET_I">
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
                                    <h1 class="h4">PET-I Details</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Project_Officer/insert_project">
                                        <!--   <div class="form-group row">
                                            <div class="col-sm-12">
                                                <h3 id="cadet_name_heading"></h3>
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <h3 id="">Mile Time</h3>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 id="">Chinups</h3>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 id="">Pushups</h3>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 id="">Rope</h3>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="oc_num2" id="oc_num2">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="id2" id="id2">
                                            </div>

                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="mile_time_I" id="mile_time_I" placeholder="mile time">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Chinups_I" id="Chinups_I" placeholder="Chinups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Pushups_I" id="Pushups_I" placeholder="Pushups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <select class="form-control rounded-pill" name="Rope_II" id="Rope_I" data-placeholder="Select Grade" style="font-size: 0.8rem; height:50px;">
                                                    <option class="form-control form-control-user" value="">Select Grade</option>
                                                    <option class="form-control form-control-user" value="Alpha">Alpha</option>
                                                    <option class="form-control form-control-user" value="Bravo">Bravo</option>
                                                    <option class="form-control form-control-user" value="Charlie">Charlie</option>
                                                </select>
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

    <div class="modal fade" id="PET_II">
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
                                    <h1 class="h4">PET-II Details</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Project_Officer/insert_project">
                                        <!--  <div class="form-group row">
                                            <div class="col-sm-12">
                                                <h3 id="cadet_name_heading"></h3>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <h3 id="">Mile Time</h3>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 id="">Chinups</h3>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 id="">Pushups</h3>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 id="">Rope</h3>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="oc_num2" id="oc_num2">
                                            </div>
                                            <div class="col-sm-4 mb-1" style="display:none">
                                                <input type="text" class="" name="id2" id="id2">
                                            </div>

                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="mile_time_II" id="mile_time_II" placeholder="mile time">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Chinups_II" id="Chinups_II" placeholder="Chinups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <input type="text" class="form-control form-control-user" name="Pushups_II" id="Pushups_II" placeholder="Pushups">
                                            </div>
                                            <div class="col-sm-3 mb-1">
                                                <select class="form-control rounded-pill" name="Rope_II" id="Rope_II" data-placeholder="Select Grade" style="font-size: 0.8rem; height:50px;">
                                                    <option class="form-control form-control-user" value="">Select Grade</option>
                                                    <option class="form-control form-control-user" value="Alpha">Alpha</option>
                                                    <option class="form-control form-control-user" value="Bravo">Bravo</option>
                                                    <option class="form-control form-control-user" value="Charlie">Charlie</option>
                                                </select>
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
                <h1 style="text-align:center"><strong>VIEW PHYSICAL MILESTONE LIST</strong></h1>
            </div>
        </div>
    </div>

    <div class="card-body bg-custom3">
        <!-- Nested Row within Card Body -->

        <div class="row">
            <div class="col-lg-12">

                <!--       <div class="card">
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
                </div> -->

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">Physical Milestone List</h1>
                    </div>


                    <div class="card-body">
                        <!-- <div class="form-group row">
                            <div class="col-sm-3">
                                <h3 id="cadet_name_heading"><b>Name: </b> <?= $milestone_records['name']; ?></h3>
                            </div>
                            <div class="col-sm-4">
                                <h3 id="term"> <b>Term: </b><?= $milestone_records['term']; ?></h3>
                            </div>
                        </div> -->
                        <div id="table_div">
                            <?php if (count($milestone_records) > 0) { ?>
                                <table id="datatable" class="table table-striped" style="color:black; width:auto !important;table-layout:auto !important;">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Term</th>
                                            <!-- <th scope="col">PST Result</th>
                                            <th scope="col">PST Attempt</th>
                                            <th scope="col">SST Attempt</th>
                                            <th scope="col">SST Result</th>
                                            <th scope="col">PET-I Attempt</th>
                                            <th scope="col">PET-I Result</th>
                                            <th scope="col">PET-II Attempt</th>
                                            <th scope="col">PET-II Result</th>
                                            <th scope="col">Assault Attempt</th>
                                            <th scope="col">Assault Result</th>
                                            <th scope="col">Saluting Attempt</th>
                                            <th scope="col">Saluting Result</th>
                                            <th scope="col">PLX Attempt</th>
                                            <th scope="col">PLX Result</th> -->
                                            <!-- <th scope="col">Acions</th> -->
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_rows">
                                        <?php $count = 0; ?>
                                        <td scope="row" style="padding:20px"><?= $milestone_records['id']; ?></td>
                                        <td scope="row" style="padding:20px"><?= $milestone_records['name']; ?></td>
                                        <td scope="row" style="padding:20px"><?= $milestone_records['term']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['PST_result']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['PST_attempt']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['SST_result']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['SST_attempt']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['PET_I_result']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['PET_I_attempt']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['PET_II_result']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['PET_II_attempt']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['assault_result']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['assault_attempt']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['saluting_result']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['saluting_attempt']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['PLX_result']; ?></td>
                                        <td scope="row" style="display:none"><?= $milestone_records['PLX_attempt']; ?></td>

                                        <!-- <td scope="row"><button type="button" class="btn btn-primary btn-user " onclick="view_PET_I(<?= $milestone_records['p_id'] ?>)" style="font-size:12px; background-color:green" data-toggle="modal" data-target="#PET_I"> PET-I Details</button></td> -->
                                        <!-- <td scope="row"><button type="button" onclick="view_PET_II(<?= $milestone_records['p_id'] ?>)" class="btn btn-primary btn-user " data-toggle="modal" data-target="#PET_II" style="font-size:12px; background-color:green"> PET-II Details</button></td> -->
                                        <td scope="row"><button type="button" onclick="view_detail(<?= $milestone_records['p_id'] ?>)" class="btn btn-primary btn-user rounded-pill" data-toggle="modal" data-target="#view_details"> View Details</button></td>


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
        // $('#add_btn').attr('disabled', true);
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
                url: '<?= base_url(); ?>D_O/search_cadet',
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

    $('#table_rows').find('tr').click(function(e) {
        var $columns = $(this).find('td');

        $('#cadet_name_heading').html('<strong> Cadet Name: ' + $columns[1].innerHTML + '</strong>');
        
        if ($columns[3].innerHTML == 'qualified') {
            $('#pst_result').html('<span style="color:green">Qualified</span>');
        } else if ($columns[3].innerHTML == 'disqualified') {
            $('#pst_result').html('<span style="color:red">Disqualified</span>');
        }
        $('#pst_attempt').html($columns[4].innerHTML);
        
        if ($columns[5].innerHTML == 'qualified') {
            $('#sst_result').html('<span style="color:green">Qualified</span>');
        } else if ($columns[5].innerHTML == 'disqualified') {
            $('#sst_result').html('<span style="color:red">Disqualified</span>');
        }
        $('#sst_attempt').html($columns[6].innerHTML);
        
        
        if ($columns[7].innerHTML == 'qualified') {
            $('#pet1_result').html('<span style="color:green">Qualified</span>');
        } else if ($columns[7].innerHTML == 'disqualified') {
            $('#pet1_result').html('<span style="color:red">Disqualified</span>');
        }
        $('#pet1_attempt').html($columns[8].innerHTML);
        
        
        if ($columns[9].innerHTML == 'qualified') {
            $('#pet2_result').html('<span style="color:green">Qualified</span>');
        } else if ($columns[9].innerHTML == 'disqualified') {
            $('#pet2_result').html('<span style="color:red">Disqualified</span>');
        }
        $('#pet2_attempt').html($columns[10].innerHTML);

        
        if ($columns[11].innerHTML == 'qualified') {
            $('#assault_result').html('<span style="color:green">Qualified</span>');
        } else if ($columns[11].innerHTML == 'disqualified') {
            $('#assault_result').html('<span style="color:red">Disqualified</span>');
        }
        $('#assault_attempt').html($columns[12].innerHTML);

        
        if ($columns[13].innerHTML == 'qualified') {
            $('#saluting_result').html('<span style="color:green">Qualified</span>');
        } else if ($columns[13].innerHTML == 'disqualified') {
            $('#saluting_result').html('<span style="color:red">Disqualified</span>');
        }
        $('#saluting_attempt').html($columns[14].innerHTML);

        
        if ($columns[15].innerHTML == 'qualified') {
            $('#plx_result').html('<span style="color:green">Qualified</span>');
        } else if ($columns[15].innerHTML == 'disqualified') {
            $('#plx_result').html('<span style="color:red">Disqualified</span>');
        }
        $('#plx_attempt').html($columns[16].innerHTML);

    });

    $('#search_btn').on('click', function() {
        // $('#add_btn').attr('disabled', true);
        var validate = 0;
        var search_date = $('#search_date').val();

        if (search_date == '') {
            validate = 1;
            $('#search_date').addClass('red-border');
        }

        if (validate == 0) {
            $('#error_search').hide();

            $.ajax({
                url: '<?= base_url(); ?>D_O/search_punish_by_date',
                method: 'POST',
                data: {
                    'search_date': search_date
                },
                success: function(data) {
                    var newDoc = document.open("text/html", "replace");
                    newDoc.write(data);
                    newDoc.close();
                },
                async: true
            });

        } else {
            $('#error_search').show();
        }

    });


    $('#save_btn').on('click', function() {
        $('#save_btn').attr('disabled', true);
        var validate = 0;
        var punish = $('#punish').val();
        var offense = $('#offense').val();
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();

        if (punish == '') {
            validate = 1;
            $('#punish').addClass('red-border');
        }
        if (offense == '') {
            validate = 1;
            $('#offense').addClass('red-border');
        }
        if (start_date == '') {
            validate = 1;
            $('#start_date').addClass('red-border');
        }
        if (end_date == '') {
            validate = 1;
            $('#end_date').addClass('red-border');
        }

        if (validate == 0) {
            $('#save_form')[0].submit();
            $('#show_error_save').hide();

        } else {
            $('#save_btn').removeAttr('disabled');
            $('#show_error_save').show();
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
            $('#add_btn').attr('disabled', true);
        } else {
            $('#error_end_date').hide();
            $('#add_btn').removeAttr('disabled');
            $('#end_date').removeClass('red-border');

        }

        $('#days').val(Math.abs(end_date - start_date) / 1000 / 60 / 60 / 24);
    });

    function view_PET_I(id) {
        // alert('cadet id: ' + id);
        $.ajax({
            url: '<?= base_url(); ?>D_O/view_PET_I',
            method: 'POST',
            data: {
                'id': id
            },
            success: function(data) {
                var result = jQuery.parseJSON(data);
                var len = result.length;
                $('#mile_time_I').val(result['mile_time']);
                $('#Pushups_I').val(result['chinups']);
                $('#Chinups_I').val(result['pushups']);
                $('#Rope_I').val(result['rope']);
            },
            async: true
        });
    }

    function view_PET_II(id) {
        // alert('cadet id: ' + id);
        $.ajax({
            url: '<?= base_url(); ?>D_O/view_PET_II',
            method: 'POST',
            data: {
                'id': id
            },
            success: function(data) {
                var result = jQuery.parseJSON(data);
                var len = result.length;
                $('#mile_time_II').val(result['mile_time']);
                $('#Pushups_II').val(result['chinups']);
                $('#Chinups_II').val(result['pushups']);
                $('#Rope_II').val(result['rope']);


                // }
            },
            async: true
        });
    }
</script>