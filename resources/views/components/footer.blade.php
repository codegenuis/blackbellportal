<footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('js/waves.js')}}"></script>
<!--Counter js -->
<script src="{{asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
<!-- chartist chart -->
<script src="{{asset('plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
<script src="{{asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/dashboard1.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
       $(document).ready(function(){
  $('#statusModal').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        $('#userid').val(id);
        console.log(id);
    })
setInterval(function(){
  $('#food').load('food-orders')
},1500)
})

 $('#changeStatus').submit(function (e) {
        e.preventDefault();
        $('.preloader').show();
        var formData = new FormData(this)
        axios({
            method: 'post',
            url: $(this).attr('action'),
            data: formData,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        })
            .then(response => {
                 $('.preloader').hide();
                if (response.data = "success") {
                    $.toast({
                        heading: 'Success',
                        text: 'Status Changed',
                        showHideTransition: 'slide',
                        icon: 'success'
                    })
                    window.location.reload(true);
                }
                else {
                    $.toast({
                        heading: 'Error',
                        text: 'Something seems to be wrong, Please try again',
                        showHideTransition: 'fade',
                        icon: 'error'
                    })
                }
            })
            .catch(err => {
                 $('.preloader').hide();
                $.toast({
                    heading: 'Error',
                    text: 'Something seems to be wrong, Please try again',
                    showHideTransition: 'fade',
                    icon: 'error'
                })
            })
    })
</script>