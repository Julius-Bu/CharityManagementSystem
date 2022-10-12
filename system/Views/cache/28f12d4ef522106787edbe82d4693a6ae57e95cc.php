<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>SANYU BABIES HOME</title>
  </head>
  <body>

    <div class="container mt-5">
        <h3 style="color: #800080" class="text-center">
            SANYU BABIES HOME DONATION REPORT FOR YEAR ENDING <?php echo e(date('Y')); ?> <small><a href="javascript:;" onclick="printReport(this)">Print Report</a></small>
        </h3>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <canvas id="foodCanvas" class="shadow mt-3"></canvas>
            </div>
            <div class="col-lg-6">
                <canvas id="clothesCanvas" class="shadow mt-3"></canvas>
            </div>
            <div class="col-lg-6">
                <canvas id="shoesCanvas" class="shadow mt-3"></canvas>
            </div>
            <div class="col-lg-6">
                <canvas id="fundsCanvas" class="shadow mt-3"></canvas>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <span>Generated on <?php echo e(date("D d M Y", strtotime(date('Y-m-d')))); ?></span>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-visualization.js')); ?>"></script>
    <script> function printReport(el){el.style.display = 'none'; window.print();}</script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\charity\app\views/admin/donations/report.blade.php ENDPATH**/ ?>