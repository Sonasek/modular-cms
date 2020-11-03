@php
    $class = (isset($panel->getCode()['class']))?$panel->getCode()['class']:'';
    $title = (isset($panel->getCode()['title']))?$panel->getCode()['title']:'';
    $subtitle = (isset($panel->getCode()['subtitle']))?$panel->getCode()['subtitle']:'';
    $text = (isset($panel->getCode()['text']))?$panel->getCode()['text']:'';
    $parentClass = (isset($panel->getCode()['parentClass']))?$panel->getCode()['parentClass']:'';
@endphp
@if(!$panel->hasChild())
    <div class="tile is-parent {{ $parentClass }}">
        <article class="tile is-child {{ $class }}">
            <p class="title">{{ (!empty($title))?$title:'' }}</p>
            <p class="subttitle">{{ (!empty($subtitle))?$subtitle:'' }}</p>
            <p class="text">{{ (!empty($text))?$text:'' }}</p>
        </article>
    </div>
@else
    @foreach($panel->getChildItems() as $child)
        <div class="tile {{ $class }}">
            @include($panel->getView(), ['panel' => $child])
        </div>
    @endforeach
@endif
