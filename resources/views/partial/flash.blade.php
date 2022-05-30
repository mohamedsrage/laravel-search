@if(session('massage'))
<div class="row">
<div class="col-md-12">
<div class="alert alert-dismissible alert-{{ seesion('alert-type') }}" id="seesion-alert">
<button type="button" class="close" data-dismiss="alert"></button>
{{ session('message') }}

</div>

</div>

</div>
                      
@endif