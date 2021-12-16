<?php $this->load->view('cao_sec/common/header'); ?>


<div class="container-fluid my-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="col-lg-6">
            <h1 class="h3 mb-0 text-black-800"><strong>Welcome CAO Secretary!</strong></h1>
        </div>
        
        <?php if($this->session->userdata('unit_id') == 1) { ?>
            <div class="col-lg-6" style="text-align:right">
            <h1 class="h3 mb-0 text-black-800"><strong>PAKISTAN NAVAL ACADEMY</strong></h1>
            </div>
        <?php } else { ?>
            <div class="col-lg-6" style="text-align:right">
                <h1 class="h3 mb-0 text-black-800"><strong><?= $this->session->userdata('unit_name') ?></strong></h1>
            </div>
        <?php } ?>
    </div>
    <!-- Content Row -->
    <div class="row">

      
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