@if(!empty($src) && is_file(public_path('files/'.$src)))
    <img
        src="{{ url('files/'.$src) }}"
        alt="{{ (!empty($alt))?$alt:'' }}"
        class="{{ (!empty($class))?$class:'' }}"
    />
@endif

