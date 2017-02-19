@if (Session::has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>
      <i class="fa fa-check-circle fa-lg fa-fw"></i> Message.  
    </strong>
    {{ Session::get('message') }}
  </div>
@endif