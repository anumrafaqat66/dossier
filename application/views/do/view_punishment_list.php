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
        <div class="row my-2">
            <img src='<?= base_url() ?>assets/img/navy_logo-new.png' style="height: 130px; width:100px;">
            <div class="card-body">
                <h1 style="text-align:center"><strong>PUNISHMENT LIST</strong></h1>
            </div>
        </div>
    </div>

    <div class="card-body bg-custom3">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4">Punishment List</h1>
                    </div>


                    <div class="card-body">
                        <div id="table_div">
                            <?php if (count($punishment_records) > 0) { ?>
                                <table id="datatable" class="table table-striped" style="color:black">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Cadet Name</th>
                                            <th scope="col">Term</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Offense</th>
                                            <th scope="col">Punishment</th>
                                            <!-- <th scope="col">View Details</th> -->

                                        </tr>
                                    </thead>
                                    <tbody id="table_rows">
                                        <?php $count = 0;
                                        foreach ($punishment_records as $data) { ?>
                                            <tr>
                                                <td scope="row"><?= $data['id']; ?></td>
                                                <td scope="row"><?= $data['name']; ?></td>
                                                <td scope="row"><?= $data['term']; ?></td>
                                                <td scope="row"><?= $data['date']; ?></td>
                                                <td scope="row"><?= $data['offence']; ?></td>
                                                <td scope="row"><?= $data['punishment_awarded']; ?></td>
                                                <td scope="row"><button type="button" class="btn btn-primary btn-user rounded-pill" style="font-size:12px; background-color:green">Reduce Punishment</button></td>
                                                <td scope="row"><button type="button" class="btn btn-primary btn-user rounded-pill" style="font-size:12px; background-color:red">Increase Punishment</button></td>
                                                <!-- <td type="button" id="edit<?= $data['ID']; ?>" class="edit" scope="row" data-toggle="modal" data-target="#edit_material"><i style="margin-left: 70px;" class="fas fa-edit"></i></td> -->
                                                <!-- <td id="view" class="view" scope="row"><a href="<?= base_url(); ?>SO_STORE/view_inventory_detail/<?= $data['ID']; ?>" style="color:black"><i style="margin-left: 40px;" class="fas fa-eye"></i></a></td> -->

                                            </tr>
                                        <?php } ?>
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

    $('#end_date').on('focusout', function() {
        var start_date = new Date($('#start_date').val());
        var end_date = new Date($('#end_date').val());
        $('#days').val(Math.abs(end_date - start_date) / 1000 / 60 / 60 / 24);
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
</script>