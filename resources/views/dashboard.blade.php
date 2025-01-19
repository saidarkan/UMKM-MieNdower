<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <div class="bg-white py-12">
        <div class="flex h-screen bg-white"> <!-- Perubahan di sini: ubah bg-gray-50 menjadi bg-white -->
            <!-- Main Content Area -->
            <div class="flex-1 p-8 bg-white"> <!-- Perubahan di sini: pastikan ini bg-white -->
                <!-- Header -->
                <div class="flex justify-between items-center mb-6 animate__animated animate__fadeIn">
                    <h1 class="text-4xl font-extrabold text-gray-800 animate__animated animate__fadeIn">
                        Selamat Datang, <span class="text-red-600">{{ Auth::user()->name }}</span>!
                    </h1>
                    <button
                        class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 focus:ring-2 focus:ring-red-400 focus:outline-none animate__animated animate__fadeIn animate__delay-1s">
                        <i class="fas fa-bell mr-2"></i> Notifikasi Baru
                    </button>
                </div>

                <!-- Overview Cards -->
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8 animate__animated animate__fadeIn animate__delay-2s">
                    <!-- Card 1 -->
                    <div
                        class="bg-gradient-to-br from-red-500 to-red-800 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition animate__animated animate__zoomIn animate__delay-2s">
                        <h3 class="text-lg font-semibold">Total Menu</h3>
                        <p class="text-4xl font-bold mt-4">{{ $totalMenu ?? '0' }}</p>
                        <p class="text-sm text-gray-200 mt-2">Jumlah menu yang tersedia saat ini</p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-gradient-to-br from-red-500 to-red-800 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition animate__animated animate__zoomIn animate__delay-3s">
                        <h3 class="text-lg font-semibold">Total Review</h3>
                        <p class="text-4xl font-bold mt-4">{{ $totalReview ?? '0' }}</p>
                        <p class="text-sm text-gray-200 mt-2">Jumlah ulasan dari pelanggan</p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-gradient-to-br from-red-500 to-red-800 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition animate__animated animate__zoomIn animate__delay-4s">
                        <h3 class="text-lg font-semibold">Total Promo</h3>
                        <p class="text-4xl font-bold mt-4">{{ $totalPromo ?? '0' }}</p>
                        <p class="text-sm text-gray-200 mt-2">Jumlah promo aktif saat ini</p>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 animate__animated animate__fadeIn animate__delay-5s">
                    <!-- Pie Chart -->
                    <div class="bg-white p-6 rounded-lg shadow-lg animate__animated animate__fadeInUp">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Rating Pelanggan</h3>
                        <canvas id="ratingPieChart" class="w-48 h-48"></canvas>
                    </div>

                    <script>
                        var ctx = document.getElementById('ratingPieChart').getContext('2d');
                        var ratingPieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['1 Bintang', '2 Bintang', '3 Bintang', '4 Bintang', '5 Bintang'],
                                datasets: [{
                                    data: [{{ $ratingsData[1] }}, {{ $ratingsData[2] }}, {{ $ratingsData[3] }},
                                        {{ $ratingsData[4] }}, {{ $ratingsData[5] }}
                                    ],
                                    backgroundColor: [ '#FFB6C1',
                                        '#FF6A6A',
                                        '#FF4D4D',
                                        '#FF1A1A',
                                        '#8B0000' ],
                                    hoverOffset: 4
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        position: 'top',
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return tooltipItem.label + ': ' + tooltipItem.raw + ' Rating';
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    </script>

                    <!-- Bar Chart -->
                    <div class="bg-white p-6 rounded-lg shadow-lg animate__animated animate__fadeInUp">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Jumlah Rating per Bintang</h3>
                        <canvas id="ratingChart" class="h-48 md:h-64"></canvas>
                    </div>

                    <script>
                        var ctx = document.getElementById('ratingChart').getContext('2d');
                        var ratingChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['1 Bintang', '2 Bintang', '3 Bintang', '4 Bintang', '5 Bintang'],
                                datasets: [{
                                    label: 'Jumlah Rating',
                                    data: [{{ $ratingsData[1] }}, {{ $ratingsData[2] }}, {{ $ratingsData[3] }},
                                        {{ $ratingsData[4] }}, {{ $ratingsData[5] }}
                                    ],
                                    backgroundColor: [
                                        '#FFB6C1',
                                        '#FF6A6A',
                                        '#FF4D4D',
                                        '#FF1A1A',
                                        '#8B0000'
                                    ],
                                    borderColor: '#fff',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            stepSize: 20
                                        }
                                    }
                                },
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
