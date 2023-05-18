@for($i = 1; $i <= 5; $i++)
    <i class="@if($elon->averageRating==$i ||
 $elon->averageRating>$i )  fas @else far @endif
 @if(  $elon->averageRating==($i-0.5) || $elon->averageRating >($i-0.5) && $elon->averageRating < $i)
 fa-star-half-alt @else
 fa-star
 @endif"></i>
@endfor
