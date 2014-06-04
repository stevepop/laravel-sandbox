@if (Session::has('flash.notification'))
    @if (Session::has('flash.notification.overlay'))
        @include('partials/_modal', ['modalClass' => 'flash-modal', 'title' => 'Notice', 'body' => Session::get('flash.notification.message')])
    @else
        <div class="alert alert-{{ Session::get('flash.notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>{{ Session::get('flash.notification.message') }}</h4>
        </div>
    @endif
@endif