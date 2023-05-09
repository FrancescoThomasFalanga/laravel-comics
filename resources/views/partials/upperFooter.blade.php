<div class="upperFooter">

    <div class="container link-img">

        <div class="footer-link">

            
            <div class="flex">

                <div class="sections">
    
                    <strong>DC COMICS</strong>
    
                    <div class="single-section">
    
                        <ul>
    
                            @foreach ($dcComicsLinks as $item)
                            <li>
                                {{ $item }}
                            </li>
                            @endforeach
    
                        </ul>
    
                    </div>
    
                </div>
    
                <div class="sections">
    
                    <strong>SHOP</strong>
    
                    <div class="single-section">
    
                        <ul>
    
                            @foreach ($shopLinks as $item)
                            <li>
                                {{ $item }}
                            </li>
                            @endforeach
    
                        </ul>
    
                    </div>
    
                </div>

            </div>

            <div class="sections">

                <strong>DC</strong>

                <div class="single-section">

                    <ul>

                        @foreach ($dcLinks as $item)
                        <li>
                            {{ $item }}
                        </li>
                        @endforeach

                    </ul>

                </div>

            </div>

            <div class="sections">

                <strong>SITES</strong>

                <div class="single-section">

                    <ul>

                        @foreach ($sitesLinks as $item)
                        <li>
                            {{ $item }}
                        </li>
                        @endforeach

                    </ul>

                </div>

            </div>

        </div>


        <div class="dc-image">

            <img src="img/dc-logo-bg.png" alt="">

        </div>

    </div>

    <div class="container cookies">

        <span>All Site Content TM and @ 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. All right reserved.</span>
        <a class="d-block pb-5" href="">Cookies Settings</a>

    </div>



</div>