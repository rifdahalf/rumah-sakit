@extends('dashboard.layouts.main')

@section('content')
    <div >
        <livewire:dashboard.daftar-poli.dashboard-poli-kandungan>
    </div>
@endsection

@section('script')
    <script>
        window.addEventListener('closeModal', event => {
            $('#panggilAntrian').modal('hide')
        })
    </script>
@endsection