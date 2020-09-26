
<ul>

    @foreach($childs as $child)

        <li>

            
            <input type="radio"  id="{{ $child->id }}" name="parent_id" value="{{ $child->id }}">
        <label for="vehicle1"> {{ $child->title }}</label><br>

            @if(count($child->childs))

                @include('category.manageChildCheckbox',['childs' => $child->childs])

            @endif

        </li>

    @endforeach

</ul>