<x-main>
    <x-slot name="header">
        <h2 class="ms-5 p-3">
            {{ __('Kos kosan') }}
        </h2>
    </x-slot>
    <div class="row">
        <div class="col-4 mb-3">
        </div>

        <div class="row col-12">
            @foreach ($datas as $d)
                @php
                    $image_404 = 'images/404.png';
                    $filename = "$d->id";

                    // Daftar kemungkinan ekstensi
                    $extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
                    $fileFound = null;

                    foreach ($extensions as $ext) {
                        $filePath = "images/house/{$filename}.{$ext}"; // Path relatif dari disk
                        if (Storage::disk('public')->exists($filePath)) {
                            $fileFound = $filePath;
                            break; // Berhenti jika file ditemukan
                        }
                    }

                    if ($fileFound) {
                        $image = $fileFound; // Gunakan file yang ditemukan
                    } else {
                        $image = $image_404; // Gunakan default image
                    }


                @endphp
                <div class="col-3 p-2">
                    <a class="card btn bgs_palettes h-100" href="{{ route('house.detail', ['id' => $d->id]) }}">
                        <img src="{{ Storage::url($image) }}" class="card-img-top " alt="...">
                        <div class="card-img-overlay text-start">
                            <h5 class="card-title text-center">
                                {{ $d->name }}
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                {{ $d->address }}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleVisibility(elementId) {
            var element = document.getElementById(elementId);
            if (element.style.display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }
    </script>
</x-main>
