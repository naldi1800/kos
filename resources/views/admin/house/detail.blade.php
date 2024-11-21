@php
    use App\Helpers\Fungsi;
@endphp

<x-main>
    <x-slot name="header">
        <h2 class="ms-5 p-3">
            {{ __('Kos kosan') }}
        </h2>
    </x-slot>
    <div class="row">
        <div class="col-4 mb-3">

        </div>
        <div class="row col-12 card fg_palettes text-white">
            @php
                $d = $datas;

                $image = Fungsi::image($d->id);

            @endphp
            <div class="card-body">
                <h5 class="card-title mb-3">{{ $d->name }}</h5>
                <img src="{{ Storage::url($image) }}" class="my-4" alt="Image not load" width="300">

                <div class="card-text">
                    <!-- Row for address -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ Fungsi::icon('marker') }}" alt="Icon" class="me-3" width="24">
                        <span>{{ $d->address }}</span>
                    </div>
                    <!-- Row for facility -->
                    <div class="d-flex align-items-center">
                        <img src="{{ Fungsi::icon('sofa') }}" alt="Icon" class="me-3" width="24">
                        <span>Fasilitas Umum</span>
                    </div>
                    <ol class="mb-3 ">
                        @foreach ($d->facilities as $f)
                            <li>{{ $f->facility->facility_name }}</li>
                        @endforeach
                    </ol>

                    <!-- Row for room -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ Fungsi::icon('room') }}" alt="Icon" class="me-3" width="24">
                        <span>Kamar</span>
                    </div>
                    <div class="mb-3 list-group list-group-flush col-4">
                        @foreach ($d->rooms as $r)
                            <button type="button" class="list-group-item  list-group-item-action"
                                data-bs-toggle="modal" data-bs-target="#room{{ $r->id }}">
                                {{ $loop->index + 1 . '. Nama: ' . $r->room_number . ' | Ukuran ' . $r->size }}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade text-dark" id="room{{ $r->id }}" tabindex="-1"
                                aria-labelledby="room{{ $r->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="room{{ $r->id }}Label">
                                                {{ "Nama: $r->room_number" }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ Fungsi::icon('sofa') }}" alt="Icon" class="me-3"
                                                    width="24">
                                                <span>Fasilitas Kamar</span>
                                            </div>
                                            <ol class="mb-3 ">
                                                @foreach ($r->facilities as $f)
                                                    <li>{{ $f->facility->facility_name }}</li>
                                                @endforeach
                                            </ol>

                                            <div class="d-flex align-items-center">
                                                <img src="{{ Fungsi::icon('rupiah') }}" alt="Icon" class="me-3"
                                                    width="24">
                                                <span>{{ Fungsi::rupiah($r->price) . '/ bln' }}</span>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <img src="{{ Fungsi::icon('exclamation-question') }}" alt="Icon" class="me-3"
                                                    width="24">
                                                <span>{{ ($r->available)? 'Tersedia' : 'Tidak Tersedia' }}</span>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Row for description -->
                    <div class="d-flex align-items-start">
                        <img src="{{ Fungsi::icon('rules') }}" alt="Icon" class="me-3" width="24">
                        <span>
                            Peraturan : <br>
                            {{ $d->rules }}
                        </span>
                    </div>

                    <!-- Row for description -->
                    <div class="d-flex align-items-start">
                        <img src="{{ Fungsi::icon('info') }}" alt="Icon" class="me-3" width="24">
                        <span> Keterangan : <br>
                            {{ $d->description }}</span>
                    </div>
                </div>
            </div>
        </div>
</x-main>
