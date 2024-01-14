<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB -->
<script src="{{ asset('js/mdb.min.js') }}"></script>
<!-- validation -->
<script src="{{ asset('validation/parsley.js') }}"></script>


{{--
<script>
    var site_url = 'https://esifarish.tilottamamun.gov.np';
</script> --}}
<script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('plugins/datepicker/nepali-datepicker/js/nepali.datepicker.v3.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datepicker/english-datepicker/english-datepicker.min.js') }}" s>
</script>
<script src="{{ asset('plugins/select2/select2.full.js') }}"></script>
<script src="{{ asset('js/convert_unicode.js') }}"></script>
<script src="{{ asset('validation/register.js') }}"></script>
@if (session()->has('is_minor') || session()->has('is_taxpayer'))
    <script>
        $(document).ready(function() {
            // Check if the session variable exists
            var isMinorSession = "{{ session()->has('is_minor') }}";

            var isTaxpayerSession = "{{ session()->has('is_taxpayer') }}";


            // If the session variable exists, check the checkbox
            if (isMinorSession) {
                $('#is_minor').prop('checked', true);
                $("#dob_reg_info").show();
                $("#ctzn_info").hide();
                $("#TaxInfo").hide();
            }
            if (isTaxpayerSession) {
                $('#is_taxpayer').prop('checked', true);
                $("#dob_reg_info").hide();
                $("#ctzn_info").show();
                $("#TaxInfo").show();
            }
        });
    </script>
@endif
