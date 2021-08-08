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
    border-left: 0.5px solid black;
  }

  .clearfix {
    height: 50px;
  }
</style>

<link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">


<div class="container my-3">
  <div style="text-align:center">
    <h4 style="text-decoration:underline"><strong>RECORD OF SALUTING AND SWIMMING</strong></h4>
  </div>
</div>

<div id="table_div">
  <?php if (count($test_records) > 0) { ?>
    <table style="color:black; width:100% !important;">

      <!-- <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important"> -->
      <?php $count = 0;
      foreach ($test_records as $data) { ?>
        <thead style="border-top:1px solid black; font-weight:bold;padding:5px; text-align:center">
          <tr>
            <td scope="" Style="width:50px">S NO</td>
            <td scope="" Style="width:180px">EVENT</td>
            <td scope="" colspan="4">TERM-P</td>
            <td scope="" colspan="4">TERM______</td>
            <td scope="" colspan="4">TERM______</td>
            <td scope="" style="border-right:1px solid black;" colspan="4">TERM______</td>
          </tr>
        </thead>
        <tbody id="table_rows_cont" style="border-top:1px solid black; padding:5px;width:100% !important">
          <tr>
            <td scope=""><?= ++$count; ?></td>
            <td scope="">MILE TIME</td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope=""></td>
            <td scope="" style="border-right:1px solid black;"></td>
          </tr>
        <?php } ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:2px solid red;"></td>
          <td scope="" style="border-bottom:2px solid red;"></td>
        </tr>
        <?php foreach ($test_records as $data) { ?>
          <thead style="font-weight:bold;padding:5px; text-align:center">
            <tr>
              <th scope=""></th>
              <th scope=""></th>
              <th scope="" colspan="2"></th>
              <th scope="" colspan="2"></th>
              <th scope="" colspan="2"></th>
              <th scope="" colspan="2"></th>
              <th scope="" colspan="2"></th>
              <th scope="" colspan="2"></th>
              <th scope="" style="border-right:1px solid black;" colspan="2"></th>
            </tr>
          </thead>
          <tr>
            <td scope=""><?= ++$count; ?></td>
            <td scope="">ROPE CLASS</td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2" style="border-right:1px solid black;"></td>
          </tr>
        <?php } ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
        </tr>
        <?php foreach ($test_records as $data) { ?>
          <tr>
            <td scope=""><?= ++$count; ?></td>
            <td scope="">BEAM WORK</td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2" style="border-right:1px solid black;"></td>
          </tr>
        <?php } ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
        </tr>
        <?php foreach ($test_records as $data) { ?>
          <tr>
            <td scope=""><?= ++$count; ?></td>
            <td scope="">PUSH UPS</td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2" style="border-right:1px solid black;"></td>
          </tr>
        <?php } ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
        </tr>
        <?php foreach ($test_records as $data) { ?>
          <tr>
            <td scope=""><?= ++$count; ?></td>
            <td scope="">100M SPRINT TIME</td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2" style="border-right:1px solid black;"></td>
          </tr>
        <?php } ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
        </tr>
        <?php foreach ($test_records as $data) { ?>
          <tr>
            <td scope=""><?= ++$count; ?></td>
            <td scope="">TOTAL PET SCORE</td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2" style="border-right:1px solid black;"></td>
          </tr>
        <?php } ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
        </tr>
        <?php foreach ($test_records as $data) { ?>
          <tr>
            <td scope=""><?= ++$count; ?></td>
            <td scope="">MINI CROSS COUNTRY ____ KM</td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2" style="border-right:1px solid black;"></td>
          </tr>
        <?php } ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
        </tr>
        <?php foreach ($test_records as $data) { ?>
          <tr>
            <td scope=""><?= ++$count; ?></td>
            <td scope="">CROSS COUNTRY _______KM</td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2" style="border-right:1px solid black;"></td>
          </tr>
        <?php } ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
        </tr>
        <?php foreach ($test_records as $data) { ?>
          <tr>
            <td scope=""><?= ++$count; ?></td>
            <td scope="">ASSAULT COURSES TIME</td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2"></td>
            <td scope="" colspan="2" style="border-right:1px solid black;"></td>
          </tr>
        <?php } ?>
        <tr>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black;border-left:1px !important;"></td>
          <td scope="" style="border-bottom:1px solid black;"></td>
          <td scope="" style="border-bottom:1px solid black; border-left:1px; border-right:1px solid black;"></td>
        </tr>
        </tbody>
    </table>
  <?php } else { ?>
    <a> No Data Available yet </a>
  <?php } ?>
</div>


<div class="clearfix"></div>

<div class='footer'> <strong> PHYSICAL EFFECIENCY INDEX </strong> </div>


</html>