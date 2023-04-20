<script src="{{ asset('CMS/assets/plugins/global/plugins.bundle.js') }}">
</script>

<script src="{{ asset('CMS/assets/js/scripts.bundle.js') }}"></script>

<script
    src="{{ asset('CMS/assets/plugins/custom/datatables/datatables.bundle.js') }}">
</script>

<script
    src="{{ asset('CMS/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}">
</script>

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js">
</script>


<script src="{{ asset('CMS/assets/ckeditor/ckeditor.js') }}"></script>


<script src="{{ asset('CMS/assets/ckeditor/adapters/jquery.js') }}"></script>

<script>
    $(document).ready(function() {
        $('textarea').ckeditor(function(textarea) {
            // Callback function code.
        });
    });
</script>


@include('c_not.not')
<script src="{{ asset('CMS/js/custom.js') }}"></script>
<script src="{{ asset('CMS/js/main.js') }}"></script>


@if (isset($rem))
    <script>
        $(function() {
            setInterval(function() {
                @foreach ($rem as $val)
                    // console.log(".x_{{ $val }}");
                    $(".x_{{ $val }}").remove();
                @endforeach
            }, 5000);



        });
    </script>
@endif



<script>
    document.addEventListener('DOMContentLoaded', function() {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    });
</script>
</body>


</html>
