<header>
    <img class="logo" src="{{asset('img/marchio-sito-test.png')}}" alt="La Molisana">
    <nav class="header-nav">
        <ul class="main-menu">
            <li class="{{(url()->current() == route('home')) ? 'active' : ''}}">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="{{(url()->current() == route('products')) ? 'active' : ''}}">
                <a href="{{route('products')}}">Products</a>
            </li>
            <li class="{{(url()->current() == route('news')) ? 'active' : ''}}">
                <a href="{{route('news')}}">News</a>
            </li>
        </ul>
    </nav>
</header>
