@if (session('massage'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5 class="mt-2"><i class="icon fas fa-check"></i>{{ session('massage') }}</h5>
    </div>  
@endif