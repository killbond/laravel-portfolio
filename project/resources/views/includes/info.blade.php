@if (Request::matchIp())
    <span class="edit" data-type="info" data-id="{{ $entry->id }}">
        {{ $entry->info }}
    </span>
@else
    <span class="protect">{{ strrev($entry->info) }}</span>
@endif