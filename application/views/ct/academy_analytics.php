<?php $this->load->view('ct/common/header'); ?>


<div class="container-fluid my-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-black-800"><strong>ACADEMY ANALYTICS</strong></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#all_projects"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- Content Row -->
    <div class="row" style="height:20px">
    </div>

    <div class="row">
        <div class="col-sm-4 mb-1">
            <a id="overall" href="#" class="btn btn-md btn-primary shadow-md" style="border-radius:20px;width:100%; height:100%"><i class="fas fa-globe fa-md text-white-60"></i> Overall Analytics</a>
        </div>
        <div class="col-sm-4 mb-1">
            <a id="termwise" href="#" class="btn btn-md btn-primary shadow-md" style="border-radius:20px;width:100%;height:100%"><i class="fas fa-align-justify fa-md text-white-60"></i> Termwise Analytics</a>
        </div>
        <div class="col-sm-4 mb-1">
            <a href="#" class="btn btn-md btn-primary shadow-md" style="border-radius:20px;width:100%;height:100%"><i class="fas fa-layer-group fa-md text-white-60"></i> Divisionwise Analytics</a>
        </div>
    </div>

    <div class="card-body bg-custom3" id="overall_graph" style="display:none">
        <div class="form-group row" style="margin-top:50px;">
            <div class="col-sm-12">
                <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>

    <div class="card-body bg-custom3" id="termwise_graph" style="display:none">
        <div class="form-group row" style="margin-top:50px;">
            <div class="col-sm-4">
                <div id="chartContainer_t1" style="height: 370px; width: 100%;"></div>
            </div>
            <div class="col-sm-4">
                <div id="chartContainer_t2" style="height: 370px; width: 100%;"></div>
            </div>
            <div class="col-sm-4">
                <div id="chartContainer_t3" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>

    <?php


    $dataPoints2 = array(
        array("label" => "PST Qualified", "y" => $PST_result['count']),
        array("label" => "SST Qualified", "y" => $SST_result['count']),
        array("label" => "PET-I Qualified", "y" => $PET_I_result['count']),
        array("label" => "PET-II Qualified", "y" => $PET_II_result['count']),
        array("label" => "Assault Qualified", "y" => $assault_result['count']),
        array("label" => "Saluting Qualified", "y" => $saluting_result['count']),
        array("label" => "PLX Qualified", "y" => $PLX_result['count']),
        array("label" => "Long Cross Qualified", "y" => $long_cross_result['count']),
        array("label" => "Mini Cross Qualified", "y" => $mini_cross_result['count']),
    );

    $dataPoints_t1 = array(
        array("label" => "PST", "y" => $PST_result_t1['count']),
        array("label" => "SST", "y" => $SST_result_t1['count']),
        array("label" => "PET-I", "y" => $PET_I_result_t1['count']),
        array("label" => "PET-II", "y" => $PET_II_result_t1['count']),
        array("label" => "Assault", "y" => $assault_result_t1['count']),
        array("label" => "Saluting", "y" => $saluting_result_t1['count']),
        array("label" => "PLX", "y" => $PLX_result_t1['count']),
        array("label" => "Long Cross", "y" => $long_cross_result_t1['count']),
        array("label" => "Mini Cross", "y" => $mini_cross_result_t1['count']),
    );
    $dataPoints_t2 = array(
        array("label" => "PST", "y" => $PST_result_t2['count']),
        array("label" => "SST", "y" => $SST_result_t2['count']),
        array("label" => "PET-I", "y" => $PET_I_result_t2['count']),
        array("label" => "PET-II", "y" => $PET_II_result_t2['count']),
        array("label" => "Assault", "y" => $assault_result_t2['count']),
        array("label" => "Saluting", "y" => $saluting_result_t2['count']),
        array("label" => "PLX", "y" => $PLX_result_t2['count']),
        array("label" => "Long Cross", "y" => $long_cross_result_t2['count']),
        array("label" => "Mini Cross", "y" => $mini_cross_result_t2['count']),
    );
    $dataPoints_t3 = array(
        array("label" => "PST", "y" => $PST_result_t3['count']),
        array("label" => "SST", "y" => $SST_result_t3['count']),
        array("label" => "PET-I", "y" => $PET_I_result_t3['count']),
        array("label" => "PET-II", "y" => $PET_II_result_t3['count']),
        array("label" => "Assault", "y" => $assault_result_t3['count']),
        array("label" => "Saluting", "y" => $saluting_result_t3['count']),
        array("label" => "PLX", "y" => $PLX_result_t3['count']),
        array("label" => "Long Cross", "y" => $long_cross_result_t3['count']),
        array("label" => "Mini Cross", "y" => $mini_cross_result_t3['count']),
    );
    ?>
</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script>
    window.onload = function() {





    }

    $('#overall').on('click', function() {

        setTimeout(function() {

            var chart1 = new CanvasJS.Chart("chartContainer2", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Overall Cadets Physical Milestone Analytics"
                },
                subtitles: [{
                    text: "Percentage (%)"
                }],
                axisY: {
                    title: "Aggregate",
                    maximum: 20,
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    legendMarkerColor: "grey",
                    legendText: "Total Aggregate",
                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart1.render();

        }, 1000);


        $('#overall_graph').show();
        $('#termwise_graph').hide();
    });
    $('#termwise').on('click', function() {

        setTimeout(function() {
            var chart2 = new CanvasJS.Chart("chartContainer_t1", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Term-I"
                },
                subtitles: [{
                    text: "Percentage (%)"
                }],
                axisY: {
                    title: "Aggregate",
                    maximum: 20,
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    legendMarkerColor: "grey",
                    legendText: "Total Aggregate",
                    dataPoints: <?php echo json_encode($dataPoints_t1, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart2.render();

            var chart3 = new CanvasJS.Chart("chartContainer_t2", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Term-II"
                },
                subtitles: [{
                    text: "Percentage (%)"
                }],
                axisY: {
                    title: "Aggregate",
                    maximum: 20,
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    legendMarkerColor: "grey",
                    legendText: "Total Aggregate",
                    dataPoints: <?php echo json_encode($dataPoints_t2, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart3.render();

            var chart4 = new CanvasJS.Chart("chartContainer_t3", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Term-III"
                },
                subtitles: [{
                    text: "Percentage (%)"
                }],
                axisY: {
                    title: "Aggregate",
                    maximum: 20,
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    legendMarkerColor: "grey",
                    legendText: "Total Aggregate",
                    dataPoints: <?php echo json_encode($dataPoints_t3, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart4.render();
        }, 1000);

        $('#termwise_graph').show();
        $('#overall_graph').hide();
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