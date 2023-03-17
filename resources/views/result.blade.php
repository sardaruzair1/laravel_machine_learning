{{-- @if (is_array($result) && count($result) > 0)
    <p>The predicted label is: {{ $result[0] }}</p>
@else
    <p>No prediction was made.</p>
@endif --}}

<p>The predicted label is: {{ $result }}</p>
