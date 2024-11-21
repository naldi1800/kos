<x-main>
    <x-slot name="header">
        <h2 class="ms-5 p-3">
            {{ __('Kos kosan') }}
        </h2>
    </x-slot>
    <div class="row col-12">
        <div class="col-4 mb-3">
        </div>

        <div class="row col-12">
            @foreach ($datas as $d)
                @php

                    $image = "$d->id";
                    $image =  App\Helpers\Fungsi::image($image);

                @endphp
                <div class="col-3 p-2">
                    <a class="card btn bgs_palettes h-100" href="{{ route('house.detail', ['id' => $d->id]) }}">
                        <img src="{{ Storage::url($image) }}" class="card-img-bottom " alt="Image not load">
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
        {{-- <div class="col-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
        </div> --}}
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
