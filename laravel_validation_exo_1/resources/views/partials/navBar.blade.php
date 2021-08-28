<ul class="nav d-flex justify-content-center bg-info text-light mb-5">
    <li class="nav-item"><a  href="{{route('book')}}" class="nav-link text-light @if(request()->routeIs('book')) active @else '' @endif">Book</a></li>
    <li class="nav-item"><a  href="{{route('newBook')}}" class="nav-link text-light @if(request()->routeIs('newBook')) active @else '' @endif">New Book</a></li>

</ul>