@if(Request::hasSession() && (Request::session()->has('success') || Request::session()->has('info')
    || Request::session()->has('warning') || Request::session()->has('danger')))
    <div class="flex-center position-ref">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                @foreach(['success', 'info', 'warning', 'danger'] as $type)
                    @if(Request::session()->has($type))
                        <div class="alert alert-{{ $type }}">
                            {!! Request::session()->get($type) !!}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif