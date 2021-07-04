<?php $this->load->view('do/common/header'); ?>
<?php !isset($oc_no_entered) ? $oc_no_entered = '' : $oc_no_entered; ?>
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


    <div class="modal fade" id="punishments">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 250px;" role="document">
            <div class="modal-content bg-custom3" style="width:1200px;">
                <div class="modal-header" style="width:1200px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">Punishments Record</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Project_Officer/insert_project">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <h3 id="cadet_name_heading"></h3>
                                            </div>
                                            <div class="col-sm-4">
                                                <h3 id="cadet_oc_no"></h3>
                                            </div>
                                            <div class="col-sm-4">
                                                <h3 id="cadet_term"></h3>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div id="table_div">
                                                <table id="datatable" class="table table-striped" style="color:black">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Term</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Offence</th>
                                                            <th scope="col">Punishment</th>
                                                            <th scope="col">Start Date</th>
                                                            <th scope="col">End Date</th>
                                                            <th scope="col">Days</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_punishment">
                                                        <tr>
                                                        </tr>
                                                    </tbody>
                                                </table>
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


    <div class="modal fade" id="excuses">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 250px;" role="document">
            <div class="modal-content bg-custom3" style="width:1200px;">
                <div class="modal-header" style="width:1200px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">Excuses Record</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Project_Officer/insert_project">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <h3 id="cadet_name_heading_ex"></h3>
                                            </div>
                                            <div class="col-sm-4">
                                                <h3 id="cadet_oc_no_ex"></h3>
                                            </div>
                                            <div class="col-sm-4">
                                                <h3 id="cadet_term_ex"></h3>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div id="table_div">
                                                <table id="datatable" class="table table-striped" style="color:black">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Term</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Disease</th>
                                                            <th scope="col">Excuse</th>
                                                            <th scope="col">Start Date</th>
                                                            <th scope="col">End Date</th>
                                                            <th scope="col">Days</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_excuses">
                                                        <tr>
                                                        </tr>
                                                    </tbody>
                                                </table>
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

    <!-- Observation-->
    <div class="modal fade" id="observations">
        <!-- <div class="row"> -->
        <div class="modal-dialog modal-dialog-centered " style="margin-left: 250px;" role="document">
            <div class="modal-content bg-custom3" style="width:1200px;">
                <div class="modal-header" style="width:1200px;">
                </div>
                <div class="card-body bg-custom3">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header bg-custom1">
                                    <h1 class="h4">Observation Record</h1>
                                </div>

                                <div class="card-body bg-custom3">
                                    <form class="user" role="form" method="post" id="add_form" action="<?= base_url(); ?>Project_Officer/insert_project">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <h3 id="cadet_name_heading_ob"></h3>
                                            </div>
                                            <div class="col-sm-4">
                                                <h3 id="cadet_oc_no_ob"></h3>
                                            </div>
                                            <div class="col-sm-4">
                                                <h3 id="cadet_term_ob"></h3>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div id="table_div">
                                                <table id="datatable" class="table table-striped" style="color:black">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Term</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">observation</th>
                                                            <th scope="col">Created Date</th>
                                                            <!-- <th scope="col">End Date</th> -->
                                                            <!--  <th scope="col">Days</th>
                                                            <th scope="col">Status</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_rows_observations">
                                                        <tr>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
                <h1 style="text-align:center"><strong>CADET'S DOSSIER</strong></h1>
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
                                <div class="col-sm-2 mb-1">
                                    <button type="button" class="btn btn-primary btn-user btn-block" id="show_all_btn">
                                        Show ALL Cadets
                                    </button>
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

        <?php if (count($pn_data) > 0) { ?>
            <div id="cadet_dossier" class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header bg-custom1">
                            <h1 class="h4">Dossiser Record</h1>
                        </div>


                        <div class="card-body">
                            <div id="table_div">

                                <table id="datatable" class="table table-striped" style="color:black">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Cadet Name</th>
                                            <th scope="col">OC No.</th>
                                            <th scope="col">Term</th>
                                            <th scope="col">Divsion</th>
                                            <th scope="col" style="text-align:center">Punishments</th>
                                            <th scope="col" style="text-align:center">Excuses</th>
                                            <th scope="col" style="text-align:center">Observations</th>
                                            <th scope="col" style="text-align:center">Clubs</th>
                                            <th scope="col" style="text-align:center">Branches</th>

                                        </tr>
                                    </thead>
                                    <tbody id="table_rows">
                                        <?php $count = 0;
                                        foreach ($pn_data as $data) { ?>
                                            <tr>

                                                <td scope="row"><?= ++$count; ?></td>
                                                <td scope="row"><?= $data['name']; ?></td>
                                                <td scope="row"><?= $data['oc_no']; ?></td>
                                                <td scope="row"><?= $data['term']; ?></td>
                                                <td scope="row"><?= $data['divison_name']; ?></td>
                                                <td scope="row" style="text-align:center"><button type="button" onclick="view_punishments(<?= $data['p_id'] ?>)" class="btn btn-primary btn-user rounded-pill" data-toggle="modal" data-target="#punishments">Punishments</button></td>
                                                <td scope="row" style="text-align:center"><button type="button" onclick="view_excuses(<?= $data['p_id'] ?>)" class="btn btn-primary btn-user rounded-pill" data-toggle="modal" data-target="#excuses">Excuses</button></td>
                                                <td scope="row" style="text-align:center"><button type="button" onclick="view_observations(<?= $data['p_id'] ?>)" class="btn btn-primary btn-user rounded-pill" data-toggle="modal" data-target="#observations">Observations</button></td>
                                                <td scope="row" style="text-align:center"><button type="button" class="btn btn-primary btn-user rounded-pill">Clubs</button></td>
                                                <td scope="row" style="text-align:center"><button type="button" class="btn btn-primary btn-user rounded-pill">Branches</button></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <!-- <a> No Data found </a> -->

                            </div>
                        </div>


                    </div>

                </div>
            </div>

        <?php } ?>

    </div>

</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script>
    function view_punishments(id) {
        // alert('cadet id: ' + id);
        $.ajax({
            url: '<?= base_url(); ?>D_O/view_punishments_in_dossier',
            method: 'POST',
            data: {
                'id': id
            },
            success: function(data) {
                var result = jQuery.parseJSON(data);
                var len = result.length;

                $("#table_rows_punishment").empty();
                for (var i = 0; i < len; i++) {
                    var date1 = new Date(result[i]['start_date']);
                    var date2 = new Date(result[i]['end_date']);
                    var diff = (Math.abs(date1 - date2)) / (1000 * 60 * 60 * 24);

                    var today_date = new Date();
                    var status = '';
                    if ((today_date >= date1) && (today_date <= date2)) {
                        status = 'Active';
                    } else {
                        status = 'Ended'
                    }
                    $("#table_rows_punishment").append(`<tr>
                                                        <td>${i+1}</td>
                                                        <td>${result[i]['term']}</td>
                                                        <td>${result[i]['date']}</td>
                                                        <td>${result[i]['offence']}</td>
                                                        <td>${result[i]['punishment_awarded']}</td>
                                                        <td>${result[i]['start_date']}</td>
                                                        <td>${result[i]['end_date']}</td>
                                                        <td>${diff}</td>
                                                        <td>${status}</td>
                                                    </tr>`);
                }
            },
            async: true
        });
    }

    function view_excuses(id) {
        // alert('cadet id: ' + id);
        $.ajax({
            url: '<?= base_url(); ?>D_O/view_excuses_in_dossier',
            method: 'POST',
            data: {
                'id': id
            },
            success: function(data) {
                var result = jQuery.parseJSON(data);
                var len = result.length;

                $("#table_rows_excuses").empty();
                for (var i = 0; i < len; i++) {
                    // $diff = date_diff(result[i]['start_date'], result[i]['end_date']);
                    const date1 = new Date(result[i]['start_date']);
                    const date2 = new Date(result[i]['end_date']);
                    var diff = (Math.abs(date1 - date2)) / (1000 * 60 * 60 * 24);

                    var today_date = new Date();
                    var status = '';
                    if ((today_date >= date1) && (today_date <= date2)) {
                        status = 'Active';
                    } else {
                        status = 'Ended'
                    }
                    $("#table_rows_excuses").append(`<tr>
                                                        <td>${i+1}</td>
                                                        <td>${result[i]['term']}</td>
                                                        <td>${result[i]['date']}</td>
                                                        <td>${result[i]['disease']}</td>
                                                        <td>${result[i]['mo_remarks']}</td>
                                                        <td>${result[i]['start_date']}</td>
                                                        <td>${result[i]['end_date']}</td>
                                                        <td>${diff}</td>
                                                        <td>${status}</td>
                                                    </tr>`);
                }
            },
            async: true
        });
    }

    function view_observations(id) {
        // alert('cadet id: ' + id);
        $.ajax({
            url: '<?= base_url(); ?>D_O/view_observation_in_dossier',
            method: 'POST',
            data: {
                'id': id
            },
            success: function(data) {
                var result = jQuery.parseJSON(data);
                var len = result.length;

                $("#table_rows_observations").empty();
                for (var i = 0; i < len; i++) {

                    var today_date = new Date();
                    var status = '';
                    $("#table_rows_observations").append(`<tr>
                                                        <td>${i+1}</td>
                                                        <td>${result[i]['term']}</td>
                                                        <td>${result[i]['date']}</td>
                                                        <td>${result[i]['observation']}</td>
                                                        <td>${result[i]['created_at']}</td>
                                                        <td>${status}</td>
                                                    </tr>`);
                }
            },
            async: true
        });
    }

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
                        $('#cadet_dossier').show();
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
        $('#cadet_oc_no').html('<strong> OC No: ' + $columns[2].innerHTML + '</strong>');
        $('#cadet_term').html('<strong> Term: ' + $columns[3].innerHTML + '</strong>');
        $('#cadet_name_heading_ex').html('<strong> Cadet Name: ' + $columns[1].innerHTML + '</strong>');
        $('#cadet_oc_no_ex').html('<strong> OC No: ' + $columns[2].innerHTML + '</strong>');
        $('#cadet_term_ex').html('<strong> Term: ' + $columns[3].innerHTML + '</strong>');
        $('#cadet_name_heading_ob').html('<strong> Cadet Name: ' + $columns[1].innerHTML + '</strong>');
        $('#cadet_oc_no_ob').html('<strong> OC No: ' + $columns[2].innerHTML + '</strong>');
        $('#cadet_term_ob').html('<strong> Term: ' + $columns[3].innerHTML + '</strong>');
        $('#punish').val($columns[5].innerHTML);
        $('#start_date').val($columns[6].innerHTML);
        $('#end_date').val($columns[7].innerHTML);
        $('#days').val((Date.parse($columns[7].innerHTML) - Date.parse($columns[6].innerHTML)) / 1000 / 60 / 60 / 24);

    });

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
                url: '<?= base_url(); ?>D_O/search_cadet_for_dossier',
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

    $('#show_all_btn').on('click', function() {
        var validate = 0;

        if (validate == 0) {
            $('#error_search').hide();
            $.ajax({
                url: '<?= base_url(); ?>D_O/search_all_cadets_for_dossier',
                method: 'POST',
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
</script>