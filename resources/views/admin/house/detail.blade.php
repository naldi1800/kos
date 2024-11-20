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
            @endforeach
        </div>
</x-main>
