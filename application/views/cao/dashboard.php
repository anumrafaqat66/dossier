<?php $this->load->view('cao/common/header'); ?>


<div class="container-fluid my-4">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-black-800"><strong>Welcome Cheif Admin Officer!</strong></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#all_projects"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- Content Row -->
    <div class="card-body bg-custom3">
        <div class="form-group row" style="margin-top:50px;">
            <div class="col-sm-6">
                <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
            </div>
            <div class="col-sm-6">
                <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>

    <?php
    $dataPoints1 = array(
        array("label" => "Kashmir division", "y" => $kashmir_count['count']),
        array("label" => "Tariq division", "y" => $tariq_count['count']),
        array("label" => "Shamsheer division", "y" => $shamsheer_count['count']),
        array("label" => "Hamza division", "y" => $hamza_count['count']),
        array("label" => "Nasr division", "y" => $nasr_count['count']),
        array("label" => "Khaibar division", "y" => $khaibar_count['count']),
        array("label" => "Saad division", "y" => $saad_count['count']),
        array("label" => "Aslat division", "y" => $aslat_count['count']),
        array("label" => "Zulfiqar division", "y" => $zulfiqar_count['count']),
        array("label" => "Yarmook division", "y" => $yarmook_count['count']),
        array("label" => "Alamgir division", "y" => $alamgir_count['count']),
        array("label" => "Tabuk division", "y" => $tabuk_count['count']),
        array("label" => "Saif division", "y" => $saif_count['count']),
        array("label" => "Khalid division", "y" => $khalid_count['count']),
        array("label" => "Moawin division", "y" => $moawin_count['count'])
    );

    $dataPoints2 = array(
        array("label" => "Qualified", "y" => 45.00),
        array("label" => "Not Qualified", "y" => 55.00)
    );
    ?>
</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script>
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            title: {
                text: "Total Cadets"
            },
            subtitles: [{
                text: "Pakistan Navy Academy"
            }],
            data: [{
                type: "pie",
                yValueFormatString: "#,##0.00\"%\"",
                indexLabel: "{label} ({y})",
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

        var chart = new CanvasJS.Chart("chartContainer2", {
	    animationEnabled: true,
	    theme: "light2", // "light1", "light2", "dark1", "dark2"
	    title:{
		    text: "Cadet Results"
	    },
        subtitles: [{
                text: "Pakistan Navy Academy"
            }],
	    axisY: {
		    title: "Aggregate"
	    },
	    data: [{        
		    type: "column",  
		    showInLegend: true, 
		    legendMarkerColor: "grey",
		    legendText: "Total Aggregate",
		    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	    }]
    });
    chart.render();
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