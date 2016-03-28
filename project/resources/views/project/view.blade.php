<div class="row project{{ (Request::matchIp()) ? ' bordered' : '' }}">
    <div class="col-lg-6">
        <h3 c><u><span class="name">{{ $entry->name }}</span></u></h3>

        <h4>Description:</h4>
        <p class="description">{{ $entry->description }}</p>

        <h4>Technologies:</h4>
        <p class="technology">{{ $entry->technology }}</p>

        <h4>My role in project:</h4>
        <p class="role">{{ $entry->role }}</p>
    </div>
    <div class="col-lg-6 text-center image">
        <a href="{{ $entry->img }}" class="image-link">
            <img src="{{ url($entry->img) }}" alt="{{ $entry->name }}" height="300" class="well">
        </a>
    </div>
    @if(Request::matchIp())
        <a href="{{ route('project.update', ['id' => $entry->id]) }}" class="project-update"></a>
    @endif
</div>