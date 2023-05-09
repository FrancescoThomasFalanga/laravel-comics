<div class="bg-blue">

    <div class="container sub">

        <div>
            <span>dc power visa®</span>
        </div>
        <div>
            <span>additional dc sites</span>
        </div>

    </div>

</div>



<nav>

    <div class="container sub">

        <div class="logo">

            <img src="{{ asset('img/dc-logo.png') }}" alt="">

        </div>

        <div class="links">

            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="">
                            {{$link}}
                        </a>
                    </li>
                @endforeach
            </ul>

        </div>

        <div class="search">

        </div>

    </div>

</nav>



<div class="jumbotron">

    <div class="container">

        <h2>CURRENT SERIES</h2>

    </div>

</div>