<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @php
                    $rute = request()->route()->uri();
                    $rute = explode("/", $rute);
                @endphp
                <x-nav.link active="{{request()->routeIs('home')}}" label="Home"  href="{{route('home')}}"/>
                    <x-nav.link active="{{(request()->routeIs('house') || in_array('house', $rute))}}"
                        label="Kos Kosan" href="{{route('house')}}" />
                <x-nav.link active="{{(request()->routeIs('facility') || in_array('facility', $rute))}}"
                    label="Fasilitas Umum" href="{{route('facility')}}" />
            </ul>
        </div>
    </div>
</nav>
