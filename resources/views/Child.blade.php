<ul>
        @foreach($childs as $child)
                <li>
                        {{ $child->title }}
                        @if(count($child->childs))
                                @include('Child',['childs' => $child->childs])
                        @endif
                </li>
        @endforeach
</ul>