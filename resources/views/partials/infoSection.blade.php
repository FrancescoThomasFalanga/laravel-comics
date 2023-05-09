<div class="bg-blue-secondary">

    <div class="container">

        <div class="row">

            @foreach ($infoSection as $info)

            <div class="col-2">

                <div class="img">

                    <img src="{{ asset($info['img']) }}" alt="">

                </div>

                <div class="title">

                    {{ $info['title'] }}

                </div>

            </div>

            @endforeach

        </div>

    </div>

</div>