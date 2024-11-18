<x-main>
    <x-slot name="header">
        <h2 class="ms-5 p-3">
            {{ __('Map') }}
        </h2>
    </x-slot>
    <div class="row">
        <div class="col-4 mb-3">
            <a class="btn btn-info" href="{{ back()->getTargetUrl() }}">Kembali</a>
        </div>

        <div id="map" style="height: 450px; width:500;"></div>
        @if (!is_null($data))
            <script>
                var latitude = {{ $data->latitude ?? 0 }};
                var longitude = {{ $data->longitude ?? 0 }};
                var mapElementId = 'map';
                if (document.getElementById(mapElementId)) {
                    var map = L.map(mapElementId).setView([latitude, longitude], 13);
                    map.zoomControl.remove();

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    var marker = L.marker([latitude, longitude]).addTo(map)
                        .bindPopup(
                            `<b>{{ $data->name }}</b><br />{{ $data->type }} <br> <a href="https://www.google.com/maps?q=${latitude},${longitude}" target="_blank">buka maps</a>`
                            )
                        .openPopup()
                        .on('click', function() {
                            window.open(`https://www.google.com/maps?q=${latitude},${longitude}`, '_blank');
                        });
                }
            </script>
        @endif
    </div>
</x-main>
