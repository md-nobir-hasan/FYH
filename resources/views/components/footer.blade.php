<footer>
    {{-- there is no footer, Create footer here  --}}
</footer>
{{-- @vite(['public/js/jquery.js','public/js/toastr.js']) --}}
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/toastr.js')}}"></script>
<script>
    toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>
