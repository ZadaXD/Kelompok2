@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        {{-- Kartu Jumlah Kode Ruang --}}
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalRuang }}</h3>
                    <p>Jumlah Kode Ruang</p>
                </div>
                <div class="icon">
                    <i class="fas fa-door-open"></i>
                </div>
            </div>
        </div>

        {{-- Kartu Jumlah Kode Barang --}}
        <div class="col-md-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalBarang }}</h3>
                    <p>Jumlah Kode Barang</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    {{-- Chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('kondisiChart').getContext('2d');
        const kondisiChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($barangByKondisi->keys()) !!},
                datasets: [{
                    label: 'Jumlah Barang',
                    data: {!! json_encode($barangByKondisi->values()) !!},
                    backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545', '#6c757d'],
                    borderColor: '#222',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>
@endsection
