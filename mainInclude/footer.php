<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2024 || Designed by Deepak || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a></small>
</footer>
<!-- End Footer -->


<!-- Start Student Registration Modal -->
<?php include("studentRegistration.php"); ?>
<!-- End Student Registration Modal -->


<!-- Start Student Login Modal -->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Start Login Form body -->
                <form id="stuLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="stuLogemail" class="pe-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="stuLogpass" class="pe-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                    </div>
                </form>
                <!-- End Login Form -->
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
            </div>
        </div>
    </div>
</div>
<!-- End Student Login Modal -->


<!-- Start Admin Login Modal -->
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Start Admin Login Form body -->
                <form id="adminLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="adminLogemail" class="pe-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="adminLogpass" class="pe-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
                    </div>
                </form>
                <!-- End Admin Login Form -->
            </div>
            <div class="modal-footer">
                <small id="statusAdminLogMsg"></small>
                <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
            </div>
        </div>
    </div>
</div>
<!-- End Admin Login Modal -->

<!-- Javascript of Jquery and Bootstrap  -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slider.js"></script>
<!-- Font Awesome JS  -->
<script src="js/all.min.js"></script>

<!-- Student Ajax Call JavaScript  -->
<script src="js/ajaxrequest.js"></script>

<!-- Admin Ajax Call JavaScript  -->
<script src="js/adminajaxrequest.js"></script>

</body>

</html>