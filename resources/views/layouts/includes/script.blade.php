<!-- Required Js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

@if (Session::has('success'))
    <script script type="text/javascript">
        Toastify({
            text: "{{ \Session::get('success') }}",
            duration: 5000,
            // destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            gravity: "bottom", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #a7c957, #7cb518)",
            },
            onClick: function() {} // Callback after click
        }).showToast();
    </script>
@endif
@if (Session::has('error'))
    <script type="text/javascript">
        Toastify({
            text: "{{ \Session::get('error') }}",
            duration: 5000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            gravity: "bottom", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #c1121f, #780000)",
            },
            onClick: function() {} // Callback after click
        }).showToast();
    </script>
@endif

<script>
    layout_change('light');
</script>
<script>
    layout_sidebar_change('light');
</script>
<script>
    change_box_container('false');
</script>
<script>
    layout_caption_change('true');
</script>
<script>
    layout_rtl_change('false');
</script>
<script>
    preset_change("preset-1");
</script>
