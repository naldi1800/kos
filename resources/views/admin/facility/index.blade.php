<x-main>
    <x-slot name="header">
        <h2 class="ms-5 p-3">
            {{ __('Fasilitas Umum') }}
        </h2>
    </x-slot>
    <div class="row">
        <div class="col-4 mb-3">
            <a href="{{route('facility.create')}}" class="btn btn-outline-success">Tambah Fasilitas</a>
        </div>
        <div class="col-12">
            <table class="table-responsive table table-bordered border-dark">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th scope="col" style="width: 5%;">#</th>
                        <th scope="col">Nama Fasilitas</th>
                        <th scope="col" style="width: 20%;">Kategori</th>
                        <th scope="col" style="width: 20%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (empty($datas))
                        <tr class="text-center">
                            <th scope="col" colspan="3">Tidak ada data</th>
                        </tr>
                    @else
                        @foreach ($datas as $d)
                            <tr class="text-center">
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td class="text-start">{{ $d->facility_name }}</td>
                                <td class="text-center">{{ $d->category }}</td>
                                <td class="d-flex justify-content-evenly">
                                    <a href="{{ route('facility.update', ['id' => $d->id]) }}" class="btn btn-outline-info">Update</a>
                                    <form action="{{route('facility.delete', ['id' => $d->id])}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
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
