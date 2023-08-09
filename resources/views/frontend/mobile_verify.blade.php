@include('frontend.includes.header')
    <body>
        @include('frontend.includes.nav')
<form id="frm-mobile-verification">
    <div class="form-heading">Mobile Number Verification</div>

    <div class="form-row">
        <input type="number" id="mobile" class="form-input"
            placeholder="Enter the 10 digit mobile">
    </div>

    <input type="button" class="btnSubmit" value="Send OTP"
         id="sendOTP">
</form>
@include('frontend.includes.footer')
    @include('frontend.includes.footer_script')
