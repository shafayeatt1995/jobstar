<!-- Template JS Files -->
<script src="{{ asset('public/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('public/js/jquery-ui.js') }}"></script>
<script src="{{ asset('public/js/popper.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('public/js/isotope-3.0.6.min.js') }}"></script>
<script src="{{ asset('public/js/select2.min.js') }}"></script>
<script src="{{ asset('public/js/moment.min.js') }}"></script>
<script src="{{ asset('public/js/daterangepicker.js') }}"></script>
<script src="{{ asset('public/js/purecounter.js') }}"></script>
<script src="{{ asset('public/js/jquery.filer.min.js') }}"></script>
<script src="{{ asset('public/js/smooth-scrolling.js') }}"></script>
<script src="{{ asset('public/js/progresscircle.js') }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>
<script src="{{ asset('public/js/sweet-aleart.js') }}"></script>

<script type="text/javascript">
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    @if($errors->any())
    @foreach($errors->all()  as $error)
    Toast.fire({
        icon: 'error',
        title: '{{$error}}'
    });

    @endforeach
    @endif
    @if (session('success'))
    Toast.fire({
        icon: 'success',
        title: '{{ session('success') }}',
    });

    @endif
    @if (session('error'))
    Toast.fire({
        icon: 'error',
        title: '{{ session('error') }}',
    });
    @endif
</script>
