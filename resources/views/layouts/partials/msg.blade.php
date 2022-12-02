    <!-- Start alert -->
    @if(session('msg'))
    <div class="msg__alert container-fluid bg-white pt-3">
        <div class="alert alert-success" role="alert">
            {{ session('msg') }}
        </div>
    </div>
    @endif
    <!-- End alert -->