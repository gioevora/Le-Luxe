@component('mail::message')
{{-- Logo --}}
<img src="https://drive.google.com/uc?id=1CgyMn3V-UB_sIm_YAgYjTI7c3dfV1nL_" alt="Logo" style="display: block; margin: 0 auto;" width="150px;">



# Contact Inquiries

@if(isset($message))
{!! $message !!}
@endif

---

**Yours Truly,**<br>
*Le Luxe Clinic*

@endcomponent
