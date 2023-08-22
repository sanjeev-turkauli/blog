<div>
    <footer>
        <div class="container">
            <div class="row">
                <!-- copyright -->
                <div class="col-md-4 col-sm-4">
                    copyright &copy; 2015 <a href="#" style="margin-left: 4px;">Your website Link</a>
                    <br>
                    Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                </div>

                <!-- footer share button -->
                <div class="col-md-4 col-sm-4">
                    <ul class="social-share text-center">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul> <!-- /.social-share -->
                </div>

                <!-- footer-nav -->
                <div class="col-md-4 col-sm-4">
                    <ul class="footer-nav">
                        <li><a href="about.html">About</a></li>
                        <li><a href="privacy.html">Privacy</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul> <!-- /.footer-nav -->
                </div>
            </div>
        </div>
    </footer>

    <!--  Necessary scripts  -->

    <script type="text/javascript" src="{{url('assets/frontend/js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/frontend/js/jQuery.scrollSpeed.js')}}"></script>

    <!-- smooth-scroll -->

    <!-- <script>
        $(function() {
            jQuery.scrollSpeed(100, 1000);
        });
    </script> -->

    <script>
        window.addEventListener("showAlertMessage", (data) => {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: `${data.detail.type}`,
                title: `${data.detail.title}`
            })

        });
    </script>
</div>