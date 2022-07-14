<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pengajuan Surat Pengantar RT/RW</title>

    <!--style css-->
    <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet" />

    <!--bootstrap-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- jquery -->
    <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>

    <!-- DATA TABLES -->
    <script src="<?php echo base_url('assets/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': true
            })
        })
    </script>

</head>