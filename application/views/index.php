<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_tab ?></title>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href=<?= base_url("assets/assets/css/bootstrap.css") ?>>

    <link rel="stylesheet" href=<?= base_url("assets/assets/vendors/chartjs/Chart.min.css") ?>>

    <link rel=" stylesheet" href=<?= base_url("assets/assets/vendors/perfect-scrollbar/perfect-scrollbar.css") ?>>
    <link rel="stylesheet" href=<?= base_url("assets/assets/css/app.css") ?>>
    <link rel="shortcut icon" href=<?= base_url("assets/assets/images/favicon.svg") ?> type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src=<?= base_url("/assets/assets/images/logo.png") ?> alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <?php $this->load->view($sidebar) ?>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <?php $this->load->view($navbar) ?>


            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3><?= $title_budge ?></h3>
                    <!-- <p class="text-subtitle text-muted">Hello Muhammad Suryono, anda login sebagai super admin</p> -->
                </div>

                <?php $this->load->view($content) ?>

            </div>

            <?php $this->load->view($modal); ?>
            <?php $this->load->view($footer) ?>

        </div>
    </div>
    <script src=<?= base_url("/assets/assets/js/feather-icons/feather.min.js") ?>></script>
    <script src=<?= base_url("/assets/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js") ?>></script>
    <script src=<?= base_url("/assets/assets/js/app.js") ?>></script>

    <script src=<?= base_url("/assets/assets/vendors/chartjs/Chart.min.js") ?>></script>
    <script src=<?= base_url("/assets/assets/vendors/apexcharts/apexcharts.min.js") ?>></script>
    <script src=<?= base_url("/assets/assets/js/pages/dashboard.js") ?>></script>

    <script src=<?= base_url("/assets/assets/js/main.js") ?>></script>

    <!-- bootstrap and jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- sweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- custom javascript -->
    <script src=<?= base_url("/assets/assets/js/custom.js") ?>></script>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: "http://localhost:8090/tes",
                success: function(data){
                    getdata = JSON.parse(data)
                    console.log(getdata);
                }
            })
        })
    </script>
</body>

</html>