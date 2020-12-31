@if(Request::get('status') == 'success')
    <div class="alert alert-success" role="alert">
    {{ Request::get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif
@if(Request::get('status') == 'error')
    <div class="alert alert-danger" role="alert">
    {{ Request::get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif
