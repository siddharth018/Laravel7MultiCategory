<ul>

    @foreach($childs as $child)

        <li>

            <a href="#">{{ $child->title }}</a>

            @if(count($child->childs))

                @include('category.manageChild',['childs' => $child->childs])

            @endif

        </li>

    @endforeach

</ul>