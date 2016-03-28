@if (Request::matchIp())
    <span class="edit" data-type="info" data-id="{{ $entry->id }}">
        {{ $entry->info }}
    </span>
@else
    {{ $entry->info }}
@endif