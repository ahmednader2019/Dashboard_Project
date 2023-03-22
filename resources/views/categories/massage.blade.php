
@if (session()->has('Add'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading"> {{session()->get('Add')}}</h4>
  </div>
@endif

@if (session()->has('Edit'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading"> {{session()->get('Edit')}}</h4>
  </div>
@endif

@if (session()->has('Delete'))
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading"> {{session()->get('Delete')}}</h4>
  </div>
@endif


