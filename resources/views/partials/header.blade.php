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

            <a href="{{ route('homepage') }}">

                <img src="{{ asset('img/dc-logo.png') }}" alt="">

            </a>

        </div>

        <div class="links">

            <ul>
                @foreach ($links as $link)
                    <li>
                        <a class="{{ (request()->is($link)) ? 'active' : '' }}" href="{{ route($link) }}">
                            {{$link}}
                        </a>
                    </li>
                @endforeach
            </ul>

        </div>

        <div class="search">

            <div class="search-box">

                <div class="search-field">

                    <input placeholder="Search..." class="input" type="text">

                    <div class="search-box-icon">

                        <button class="btn-icon-content">

                            <i class="search-icon">

                                <svg xmlns="://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" fill="#black"></path></svg>

                            </i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</nav>



<div class="jumbotron">

    <div class="container">

        <h2>CURRENT SERIES</h2>

    </div>

</div>