@include('layouts.header')

<div class="container-fluid" style="background: #0047bb">
    @include('layouts.menu')
    <div class="content-work" style="margin-top:150px">
        <h1>Work</h1>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-xs-6">
                <a href="{{ route('work.show') }}">
                    <div class="work-image-item">
                        <img src="/images/i1.jpeg" alt="">
                        <h6 class="mt-2">MTN</h6>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-4 col-xs-6">
                <a href="{{ route('work.show') }}">
                    <div class="work-image-item">
                        <img src="/images/i3.jpeg" alt="">
                        <h6 class="mt-2">Unilever</h6>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-4 col-xs-6">
                <a href="{{ route('work.show') }}">
                    <div class="work-image-item">
                        <img src="/images/i1.jpeg" alt="">
                        <h6 class="mt-2">Canal+</h6>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-4 col-xs-6">
                <a href="{{ route('work.show') }}">
                    <div class="work-image-item">
                        <img src="/images/i1.jpeg" alt="">
                        <h6 class="mt-2">MTN</h6>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-4 col-xs-6">
                <a href="{{ route('work.show') }}">
                    <div class="work-image-item">
                        <img src="/images/i3.jpeg" alt="">
                        <h6 class="mt-2">Unilever</h6>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-4 col-xs-6">
                <a href="{{ route('work.show') }}">
                    <div class="work-image-item">
                        <img src="/images/i1.jpeg" alt="">
                        <h6 class="mt-2">Canal+</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')