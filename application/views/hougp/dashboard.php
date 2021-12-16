<?php $this->load->view('hougp/common/header'); ?>


<div class="container-fluid my-4">

    <div class="row">
        <div class="col-lg-6">
            <h1 class="h3 mb-0 text-black-800"><strong>Welcome House Group Officer!</strong></h1>
        </div>
        <?php if($this->session->userdata('unit_id') == 1) { ?>
            <div class="col-lg-6" style="text-align:right">
                <h1 class="h3 mb-0 text-black-800"><strong><?= $this->session->userdata('division') ?></strong></h1>
            </div>
        <?php } else { ?>
            <div class="col-lg-6" style="text-align:right">
                <h1 class="h3 mb-0 text-black-800"><strong><?= $this->session->userdata('unit_name') ?></strong></h1>
            </div>
        <?php } ?>
    </div>

<div  style="margin-top:50px;margin-bottom: 50px;">
<div class="row col-md-12">
  <div class="col-md-6">
    <img src="<?= base_url(); ?>assets/img/3.jpg" alt="Snow" style="width:100%; height:100%">
  </div>
  <div class="col-md-6">
    <img src="<?= base_url(); ?>assets/img/Russian1.jpg" alt="Forest" style="width:100%;height:100%">
  </div>

 
</div>
<div class="row col-md-12" style="margin-top:10px;">

 <div class="col-md-6">
    <img src="<?= base_url(); ?>assets/img/compak1.jpg" alt="Mountains" style="width:100%;height:100%">
  </div>
   <div class="col-md-6">
    <img src="<?= base_url(); ?>assets/img/compak2.jpg" alt="Mountains" style="width:100%;height:100%">
  </div>
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
 <script src="<?= base_url('assets/js/chat/chat.js'); ?>"></script> 