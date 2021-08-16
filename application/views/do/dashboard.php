<?php $this->load->view('do/common/header'); ?>


<div class="container-fluid my-4">

    <div class="row">
        <div class="col-lg-6">
            <h1 class="h3 mb-0 text-black-800"><strong>Welcome Division Officer</strong></h1>
        </div>
        <div class="col-lg-6" style="text-align:right">
            <h1 class="h3 mb-0 text-black-800"><strong><?= $this->session->userdata('division'); ?></strong></h1>
        </div>
    </div>

</div>

</div>

<?php $this->load->view('common/footer'); ?>
<script>
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