<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>&copy; <?php echo date('Y'); ?> <a href="/UangKasSite/" style="text-decoration: none;">NobiEel</a>. All Right Reserved.</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kamu yakin ingin logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Pilih tombol "Logout" jika kamu ingin mengakhiri sesi ini.
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">
                    Cancel
                </button>
                <a class="btn btn-primary" href="app/auth/logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>
<script src="vendor/chart.js/Chart.min.js"></script>


<script>
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    var ctx = document.getElementById("myChart");
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Pemasukan", "Pengeluaran"],
            datasets: [{
                data: [<?php echo getData('http://localhost:8080/riwayat/pemasukan/')['total_pemasukan'] . "," . getData('http://localhost:8080/riwayat/pengeluaran/')['total_pengeluaran']; ?>],
                backgroundColor: ['#1cc88a', '#e74a3b'],
                hoverBackgroundColor: ['#1cc88a', '#e74a3b'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/js/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Page level plugins -->
<script src="assets/datatables/jquery.dataTables.min.js"></script>
<script src="assets/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/table.js"></script>

</body>

</html>