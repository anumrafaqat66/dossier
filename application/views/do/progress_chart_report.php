<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<style>
  .img-logo {
    background: url('<?= base_url() ?>assets/img/navy_logo.png');
    background-size: cover;
    height: 50px;
    width: 39px;
  }

  table,
  th,
  td {
    border-left: 1px solid black;
    height:2px !important;
    width:120px !important;
  }
</style>

<link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

<div class="container my-3">
  <div style="text-align:center">
    <h4 style="text-decoration:underline"><strong>PROGRESS CHART</strong></h4>
  </div>
</div>

<div id="table_div">
  <table style="color:black">

    <tbody id="table_rows_cont" style="border-top:1px solid black;">
      <tr>
        <td scope="" style="border-bottom:1px solid black;width:120px;font-size:x-small">90</td>
        <td scope="" style="border-bottom:1px solid black;width:120px;"></td>
        <td scope="" style="border-bottom:1px solid black;width:120px;"></td>
        <td scope="" style="border-bottom:1px solid black;width:120px;"></td>
        <td scope="" style="border-bottom:1px solid black;width:120px;"></td>
        <td scope="" style="border-bottom:1px solid black;width:120px;border-right:1px solid black;"></td>
      </tr>
      <?php
      for ($count = 89; $count >= 30; $count--) { ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;width:120px;font-size:x-small"><?= $count; ?></td>
          <td scope="" style="border-bottom:1px solid black;width:120px;"></td>
          <td scope="" style="border-bottom:1px solid black;width:120px;"></td>
          <td scope="" style="border-bottom:1px solid black;width:120px;"></td>
          <td scope="" style="border-bottom:1px solid black;width:120px;"></td>
          <td scope="" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
        </tr>
      <?php } ?>
      <!-- <tr>
        <td scope="" style="border-bottom:1px solid black;"></td>
        <td scope="" style="border-bottom:1px solid black;"></td>
        <td scope="" style="border-bottom:1px solid black;"></td>
        <td scope="" style="border-bottom:1px solid black;"></td>
        <td scope="" style="border-bottom:1px solid black;"></td>
        <td scope="" style="border-bottom:1px solid black;"></td>
      </tr> -->
    </tbody>
  </table>

</div>



<div class="clearfix"></div>
<div class="clearfix"></div>

</html>