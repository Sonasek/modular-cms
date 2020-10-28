<footer class="footer is-fixed-bottom">
    <div class="content has-text-centered">
        @if(0 !== count($footer))
            <div class="columns">
                @foreach($footer as $footerItem)
                    <div class="column">
                        {!! $footerItem->getCode() !!}
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</footer>
