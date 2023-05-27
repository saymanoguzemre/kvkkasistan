<form style="margin-bottom: 3px;" class="d-inline-block action-button" action="{{ $action }}" method="POST" enctype="multipart/form-data" tabindex="0" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ $hoverText }}">
    @method($method)
    @csrf
    {{ $slot }}
    <button type="{{ $buttonType }}" class="btn btn-{{ $color }}">{!! $btnText !!}</button>
</form>

