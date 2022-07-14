<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#nik').on('input', function() {

                                var nik = $(this).val();
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url('index.php/dashboard/get_penduduk') ?>",
                                    dataType: "JSON",
                                    data: {
                                        nik: nik
                                    },
                                    cache: false,
                                    success: function(data) {
                                        $.each(data, function(nik, nama_penduduk) {
                                            $('[name="nama_penduduk"]').val(data.nama_penduduk);

                                        });

                                    }
                                });
                                return false;
                            });

                        });
                    </script>