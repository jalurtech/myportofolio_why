<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .profile-frame {
            border: 10px solid #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .profile-frame:hover {
            transform: scale(1.02);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }

        .nav-link {
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #4F46E5;
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .nav-link:hover:after {
            width: 100%;
        }


        /* Animasi putar untuk efek lingkaran */
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow linear infinite;
        }

        /* Efek hover untuk foto */
        .rounded-full:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        /* Tambahkan di bagian style */
        .profile-photo {
            border: 8px solid white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .profile-photo:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow linear infinite;
            z-index: 1;
        }

        .photo-container {
            position: relative;
            display: inline-block;
        }

        .photo-frame {
            position: relative;
            z-index: 2;
        }




        /* Tambahkan ini untuk header sticky */
        .sticky-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-link {
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #4F46E5;
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .nav-link:hover:after,
        .nav-link.active:after {
            width: 100%;
        }

        .nav-link.active {
            color: #4F46E5;
            font-weight: 600;
        }


        /* Experience Section */
        .experience-section {
            background-color: #f8f9fa;
        }

        .accordion-button {
            font-weight: 600;
            padding: 1.25rem 1.5rem;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(13, 110, 253, 0.1);
            color: #0d6efd;
        }

        /* Timeline Style */
        .timeline {
            position: relative;
            padding-left: 50px;
        }

        .timeline:before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #dee2e6;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-date {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .timeline-content {
            padding: 15px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .timeline-item:before {
            content: '';
            position: absolute;
            left: 6px;
            top: 10px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #0d6efd;
            border: 4px solid white;
        }
    </style>
</head>

<body class="font-sans bg-gray-50">
    <!-- Header Section -->
    <header class="bg-white shadow-sm py-4 sticky-header">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <!-- Logo dan Nama -->
            <div class="flex items-center">
                <!--div
                    class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                    WH
                </div -->
                <img src="{{ $imageProjectUrls['logo'] }}" alt="Logo" class="w-10 h-10 rounded-full mr-3">
                <h1 class="text-xl font-bold text-gray-800">Wahyu Hidayatullah</h1>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="#about" class="nav-link text-gray-600 hover:text-indigo-600">Tentang Saya</a>
                <a href="#experience" class="nav-link text-gray-600 hover:text-indigo-600">Pengalaman</a>
                <a href="#projects" class="nav-link text-gray-600 hover:text-indigo-600">Project</a>
                <a href="#skills" class="nav-link text-gray-600 hover:text-indigo-600">Skills</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-600 focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu (hidden by default) -->
        <div class="md:hidden hidden bg-white w-full py-2" id="mobile-menu">
            <a href="#about" class="block px-4 py-2 text-gray-600 hover:bg-indigo-50 nav-link">Tentang Saya</a>
            <a href="#experience" class="block px-4 py-2 text-gray-600 hover:bg-indigo-50 nav-link">Pengalaman</a>
            <a href="#projects" class="block px-4 py-2 text-gray-600 hover:bg-indigo-50 nav-link">Project</a>
            <a href="#skills" class="block px-4 py-2 text-gray-600 hover:bg-indigo-50 nav-link">Skills</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="about" class="py-12 md:py-20 bg-gradient-to-r from-indigo-50 to-purple-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <!-- Foto Profil -->
                <!-- Ganti bagian foto profil di Hero Section dengan ini -->
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10 flex justify-center">
                    <div class="relative">
                        <div
                            class="w-64 h-64 rounded-full overflow-hidden border-4 border-white shadow-2xl relative z-10">
                            {{-- @isset($fotoUrl) --}}
                            <img src="{{ $imageUrl }}" alt="Wahyu Hidayatullah" class="w-full h-full object-cover">
                            {{-- @else --}}
                            {{-- <p>Error: Gambar tidak dapat dimuat</p> --}}
                            {{-- @endisset --}}
                        </div>
                        <!-- Efek lingkaran dekoratif -->
                        <div class="absolute -top-3 -left-3 w-72 h-72 rounded-full border-4 border-indigo-300 opacity-70 animate-spin-slow"
                            style="animation-duration: 15s;"></div>
                        <div class="absolute -bottom-3 -right-3 w-72 h-72 rounded-full border-4 border-indigo-200 opacity-70 animate-spin-slow"
                            style="animation-duration: 20s; animation-direction: reverse;"></div>
                    </div>
                </div>

                <!-- Bio -->
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Halo, Saya Wahyu Hidayatullah</h2>
                    <h3 class="text-xl text-indigo-600 mb-6">IT Programmer & Support</h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Sebagai profesional yang berdedikasi, saya memiliki etos kerja yang kuat, adaptasi, keterampilan
                        analisa dan kepemimpinan tim yang teruji. Keahlian saya dalam berkomunikasi dan kolaborasi, baik
                        dalam kerangka kerja tim maupun dalam inisiatif individu, memungkinkan saya untuk memberikan
                        kontribusi yang signifikan dalam setiap lingkungan kerja.
                    </p>

                    <div class="flex space-x-4">
                        <a href="#contact"
                            class="px-6 py-2 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition">
                            Hubungi Saya
                        </a>
                        <a href="#projects"
                            class="px-6 py-2 border border-indigo-600 text-indigo-600 rounded-lg font-medium hover:bg-indigo-50 transition">
                            Lihat Project
                        </a>
                    </div>

                    <div class="mt-8 flex space-x-4">
                        <a href="https://www.linkedin.com/in/wahyu-hidayatullah-539a652a7" target="_blank"
                            rel="noopener noreferrer" class="text-gray-600 hover:text-indigo-600">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                        <a href="https://github.com/jalurtech" target="_blank" rel="noopener noreferrer"
                            class="text-gray-600 hover:text-indigo-600">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                        <a href="https://wa.me/6285791274070?text=Halo%20Wahyu%2C%20saya%20ingin%20menghubungi%20Anda%20mengenai..."
                            target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-indigo-600">
                            <i class="fab fa-whatsapp text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pengalaman Section -->
    <section id="experience" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Pengalaman</h2>
            <div class="max-w-6xl mx-auto">
                <!-- Pendidikan -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-graduation-cap text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Pendidikan</h3>
                    </div>

                    <div class="space-y-6">
                        <!-- Pendidikan 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                                <div class="mb-4 md:mb-0">
                                    <h4 class="text-xl font-semibold text-gray-800">Universitas Yudharta Pasuruan</h4>
                                    <p class="text-gray-600">Sarjana Komputer - Teknik Informatika</p>
                                </div>
                                <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">
                                    2009 - 2013
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600">
                                IPK: 3.18. Fokus pada pengembangan perangkat lunak dan sistem informasi.
                            </p>
                        </div>

                        <!-- Pendidikan 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                                <div class="mb-4 md:mb-0">
                                    <h4 class="text-xl font-semibold text-gray-800">SMK Negeri 1 Purwosari</h4>
                                    <p class="text-gray-600">Jurusan - Teknik Komputer Jaringan</p>
                                </div>
                                <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">
                                    2006 - 2009
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600">
                                Teknologi komputer dan jaringan, termasuk komponen hardware, software, sistem operasi,
                                jaringan komputer, dan keamanan sistem
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pekerjaan -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-briefcase text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Pekerjaan</h3>
                    </div>

                    <div class="space-y-6">
                        <!-- Pekerjaan 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                                <div class="mb-4 md:mb-0">
                                    <h4 class="text-xl font-semibold text-gray-800">Kopkar PT.Karyamitra Budisentosa
                                    </h4>
                                    <p class="text-gray-600">Manager Operasional</p>
                                </div>
                                <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                                    2022 - 2024
                                </div>
                            </div>
                            <ul class="mt-3 list-disc list-inside text-gray-600 space-y-1">
                                <li>Mengembangkan kebijakan pengendalian internal untuk meningkatkan kepatuhan keuangan
                                </li>
                                <li>Mengawasi tim operasional guna memastikan efisiensi proses</li>
                                <li>Menerapkan analisis biaya yang berhasil meningkatkan margin keuntungan sebesar 15%
                                </li>
                                <li>Membuat dan memantau SOP untuk memperlancar operasional</li>
                                <li>Meningkatkan hubungan pelanggan, sehingga kepuasan meningkat sebesar 20%</li>
                                <li>Mengelola arus kas dan menyajikan laporan keuangan bulanan (Rugi Laba, Neraca).</li>
                                <li>Bekerja sama dengan tim hukum dan SDM untuk memperbarui kontrak dan kebijakan.</li>
                                <li>Menjadi perwakilan perusahaan dalam berbagai kegiatan eksternal dan kerja sama</li>
                            </ul>
                        </div>

                        <!-- Pekerjaan 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                                <div class="mb-4 md:mb-0">
                                    <h4 class="text-xl font-semibold text-gray-800">Kopkar PT.Karyamitra Budisentosa
                                    </h4>
                                    <p class="text-gray-600">IT Programmer & Support</p>
                                </div>
                                <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                                    2012 - 2022
                                </div>
                            </div>
                            <ul class="mt-3 list-disc list-inside text-gray-600 space-y-1">
                                <li>Membangun dan memelihara aplikasi bisnis serta sistem internal perusahaan</li>
                                <li>Melakukan pengujian perangkat lunak, debugging, dan dokumentasi teknis</li>
                                <li>Mengelola server perusahaan, jaringan, serta inventaris perangkat keras</li>
                                <li>Bertanggungjawab atas proses peningkatan sistem dan pemeliharaan infrastruktur TI
                                </li>
                                <li>Memberikan dukungan pemecahan masalah terkait perangkat keras, perangkat lunak, dan
                                    jaringan</li>
                                <li>MMeningkatkan produktivitas melalui optimalisasi kinerja dan keandalan perangkat
                                    lunak</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Organisasi -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-users text-purple-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Organisasi</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Organisasi 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-500">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Badan Eksekutif Mahasiswa (BEM)</h4>
                            <div class="flex items-center mb-3">
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm mr-3">
                                    2011 - 2012
                                </span>
                                <span class="text-gray-600">Metri Komunikasi & Informasi</span>
                            </div>
                            <p class="text-gray-600">
                                Mengelola komunikasi dan informasi internal maupun eksternal meliputi penyebaran
                                informasi, publikasi kegiatan, pengelolaan media sosial, dan menjaga hubungan baik
                                dengan pihak eksternal.
                            </p>
                        </div>

                        <!-- Organisasi 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-500">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Badan Eksekutif Mahasiswa (BEM)</h4>
                            <div class="flex items-center mb-3">
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm mr-3">
                                    2012 - 2013
                                </span>
                                <span class="text-gray-600">Wakil Presiden Mahasiswa</span>
                            </div>
                            <p class="text-gray-600">
                                bertindak sebagai second leader yang membantu dan membackup tugas Presiden Mahasiswa
                                (PresMa)
                            </p>
                        </div>

                        <!-- Organisasi 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-500">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Pergerakan Mahasiswa Islam Indonesi
                                (PMII)</h4>
                            <div class="flex items-center mb-3">
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm mr-3">
                                    2013 - 2014
                                </span>
                                <span class="text-gray-600">Co Pengkaderan & Pengembangan Wacana</span>
                            </div>
                            <p class="text-gray-600">
                                memastikan program pengkaderan berjalan efektif dan sesuai dengan visi organisasi.
                                Meliputi perencanaan, pelaksanaan, monitoring, dan evaluasi kegiatan
                                pengkaderan, serta pengembangan wacana dan pemikiran baru dalam organisasi.
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Pendidikan Non Formal -->
                <div class="mb-12">
                    <div class="flex items-center mb-6">
                        <div class="bg-orange-100 p-3 rounded-full mr-4">
                            <i class="fas fa-certificate text-orange-600 text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Pendidikan Non Formal</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Kursus 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-orange-500">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">HSE & ISO</h4>
                            <div class="flex items-center mb-3">
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm mr-3">
                                    2025
                                </span>
                                <span class="text-gray-600">PT Centra Artha Prima Indonesia</span>
                            </div>
                            <p class="text-gray-600">
                            <p>Awareness System ISO 9001 2015 The Quality Management System</p>
                            <p>Awareness ISO 31000 2018 Risk Management - Guidelines</p>
                            <p>Awareness Chemical Management</p>
                            <p>Accident Investigation TrainingSeminar</p>
                            </p>
                        </div>

                        <!-- Kursus 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-orange-500">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Seminar Akuntansi SAK-EP</h4>
                            <div class="flex items-center mb-3">
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm mr-3">
                                    2024
                                </span>
                                <span class="text-gray-600">PKM Institute dan SSN Consulting</span>
                            </div>
                            <p class="text-gray-600">
                                Persiapan & Transisi Standar Akuntansi Keuangan Entitas Privat (SAK-EP)
                            </p>
                        </div>

                        <!-- Kursus 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-orange-500">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Pelatihan Perpajakan</h4>
                            <div class="flex items-center mb-3">
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm mr-3">
                                    2019
                                </span>
                                <span class="text-gray-600">Lembaga Kajian Manajemen (LKM)</span>
                            </div>
                            <p class="text-gray-600">
                                Bimtek Perpajakan oleh Dr. H. Fatkhur Rokhman, MM, Ak,CA, CIFE
                            </p>
                        </div>

                        <!-- Kursus 4 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-orange-500">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Perlatihan Pengelolaan Koperasi</h4>
                            <div class="flex items-center mb-3">
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm mr-3">
                                    2016
                                </span>
                                <span class="text-gray-600">Dinas Koperasi Prov Jawa Timur</span>
                            </div>
                            <p class="text-gray-600">
                                Aspek Organisasi dan Manajemen, Yuridis, Pemasaran dan Keuangan
                            </p>
                        </div>

                        <!-- Kursus 5 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-orange-500">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Penilaian Kesehatan Koperasi</h4>
                            <div class="flex items-center mb-3">
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm mr-3">
                                    2014
                                </span>
                                <span class="text-gray-600">Dinas Koperasi Kab Pasuruan</span>
                            </div>
                            <p class="text-gray-600">
                                Bimtek Penilaian Kesehatan Koperasi Bagi Pembina danPengelola Koperasi
                            </p>
                        </div>

                        <!-- Kursus 6 -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-orange-500">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Uji Kompetensi</h4>
                            <div class="flex items-center mb-3">
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm mr-3">
                                    2009
                                </span>
                                <span class="text-gray-600">PT Jawa Media Komputama</span>
                            </div>
                            <p class="text-gray-600">
                                Kompetensi Keahlian Teknik Komputer Jaringan Nomor100/01/Komputek/2009
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Project Section -->
    <section id="projects" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Project Saya</h2>

            <div class="max-w-6xl mx-auto">
                <!-- Project Desktop -->
                <div class="mb-16">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-6">🖥️ Project Desktop</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Aplikasi Koperasi -->
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition">
                            <img src="{{ $imageProjectUrls['koperasi'] }}" alt="Aplikasi Koperasi"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Aplikasi Koperasi</h4>
                                <p class="text-gray-600 mb-4">Mengelola Simpan Pinjam, dan Anggota Koperasi.</p>
                                <div class="flex items-center gap-4 mt-4">
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Visual
                                        Basic</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">MySql</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">ODBC</span>
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Crystal
                                        Report</span>
                                </div>
                            </div>
                        </div>

                        <!-- Aplikasi Akuntansi -->
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition">
                            <img src="{{ $imageProjectUrls['akuntansi'] }}" alt="Aplikasi Akuntansi"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Aplikasi Akuntansi</h4>
                                <p class="text-gray-600 mb-4">Aplikasi keuangan, Jurnal, Rugi laba, Neraca Koperasi
                                    dengan sistem laporan otomatis.</p>
                                <div class="flex items-center gap-4 mt-4">
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Visual
                                        Basic</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">MySql</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">ODBC</span>
                                </div>
                            </div>
                        </div>

                        <!-- Aplikasi Simpan Pinjam -->
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition">
                            <img src="{{ $imageProjectUrls['retail'] }}" alt="Aplikasi Retail"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Aplikasi Simpan Pinjam</h4>
                                <p class="text-gray-600 mb-4">Pengelolaan Piutang Anggota.</p>
                                <div class="flex items-center gap-4 mt-4">
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Visual
                                        Basic</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">MySql</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">ODBC</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Backend -->
                <div class="mb-16">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-6">🛠️ Project BackEnd</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- API MobileKop -->
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition">
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-800 mb-2">API-Mobile Koperasi</h4>
                                <p class="text-gray-600 mb-4">Backend API untuk aplikasi koperasi mobile.</p>
                                <a href="https://github.com/username/api-mobilekop" target="_blank"
                                    class="text-blue-600 hover:underline text-sm">GitHub Repo</a>
                                <div class="mt-2">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">REST
                                        API</span>
                                </div>
                            </div>
                        </div>

                        <!-- API RARW -->
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition">
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-800 mb-2">API-RT RW</h4>
                                <p class="text-gray-600 mb-4">API untuk sistem laporan RT/RW dan Jimpitan.</p>
                                <a href="https://github.com/username/api-rarw" target="_blank"
                                    class="text-blue-600 hover:underline text-sm">GitHub Repo</a>
                                <div class="mt-2">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">REST
                                        API</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project FrontEnd -->
                <div>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-6">🎨 Project FrontEnd</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Website Portofolio -->
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition">
                            <img src="{{ $imageProjectUrls['portofolio'] }}" alt="Website Portofolio"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Website Portofolio</h4>
                                <p class="text-gray-600 mb-4">Personal website untuk menampilkan project dan CV saya.
                                </p>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">HTML</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">PHP</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Java</span>
                            </div>
                        </div>

                        <!-- Website Jimpitan -->
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition">
                            <img src="{{ $imageProjectUrls['jimpitan'] }}" alt="Website Jimpitan"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Website Jimpitan</h4>
                                <p class="text-gray-600 mb-4">Aplikasi web pelaporan dan rekap jimpitan warga.</p>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">HTML</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">PHP</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Java</span>
                            </div>
                        </div>

                        <!-- Website RT/RW -->
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition">
                            <img src="{{ $imageProjectUrls['rtrw'] }}" alt="Website RT/RW"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-800 mb-2">Website Running Text</h4>
                                <p class="text-gray-600 mb-4">Web manajemen iklan running text.</p>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">HTML</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">PHP</span>
                                <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Java</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Skills Section -->
    <section id="skills" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Skills & Expertise</h2>

            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Technical Skills -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-md border border-gray-100 transform hover:scale-105 transition duration-300">
                        <div class="flex items-center mb-4">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i class="fas fa-code text-indigo-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Technical Skills</h3>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-indigo-700 mb-2 flex items-center">
                                    <i class="fas fa-terminal text-sm mr-2"></i> Programming
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">Visual
                                        Basic</span>
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">Android
                                        Studio</span>
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">Laravel</span>
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">PHP</span>
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">Java</span>
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">HTML</span>
                                </div>
                            </div>

                            <div>
                                <h4 class="font-semibold text-indigo-700 mb-2 flex items-center">
                                    <i class="fas fa-database text-sm mr-2"></i> Databases
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">MySQL</span>
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">MS
                                        Access</span>
                                </div>
                            </div>

                            <div>
                                <h4 class="font-semibold text-indigo-700 mb-2 flex items-center">
                                    <i class="fas fa-network-wired text-sm mr-2"></i> Networks
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">Mikrotik</span>
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">LAN/WAN</span>
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">Router</span>
                                    <span
                                        class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-sm border border-indigo-100">CCTV</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Financial & Analysis -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-md border border-gray-100 transform hover:scale-105 transition duration-300">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-100 p-3 rounded-full mr-4">
                                <i class="fas fa-chart-line text-green-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Financial & Analysis</h3>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-green-700 mb-2 flex items-center">
                                    <i class="fas fa-file-invoice-dollar text-sm mr-2"></i> Financial
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm border border-green-100">Laporan
                                        Keuangan</span>
                                    <span
                                        class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm border border-green-100">Laporan
                                        Akuntansi</span>
                                    <span
                                        class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm border border-green-100">Auditing</span>
                                </div>
                            </div>

                            <div>
                                <h4 class="font-semibold text-green-700 mb-2 flex items-center">
                                    <i class="fas fa-shield-alt text-sm mr-2"></i> Data Analysis & Security
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm border border-green-100">Excel</span>
                                    <span
                                        class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm border border-green-100">Data
                                        Validation</span>
                                    <span
                                        class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm border border-green-100">CrystalReport</span>
                                    <span
                                        class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm border border-green-100">ODBC/OLEDB</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Soft Skills & Tools -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-md border border-gray-100 transform hover:scale-105 transition duration-300">
                        <div class="flex items-center mb-4">
                            <div class="bg-purple-100 p-3 rounded-full mr-4">
                                <i class="fas fa-users text-purple-600 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Soft Skills & Tools</h3>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-purple-700 mb-2 flex items-center">
                                    <i class="fas fa-comments text-sm mr-2"></i> Soft Skills
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Komunikasi</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Kepemimpinan</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Pemecahan
                                        Masalah</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Berpikir
                                        Analitis</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Kolaborasi
                                        Tim</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Kreativitas</span>
                                </div>
                            </div>

                            <div>
                                <h4 class="font-semibold text-purple-700 mb-2 flex items-center">
                                    <i class="fas fa-tools text-sm mr-2"></i> Software Tools
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Microsoft
                                        Office</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Google
                                        Workspace</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Adobe
                                        Photoshop</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Zoom
                                        Meeting</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">OBS
                                        Studio</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Canva</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Postman</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Visual
                                        Studio Code</span>
                                    <span
                                        class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-sm border border-purple-100">Navicat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Hubungi Saya</h2>

            <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg p-8 md:p-12">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Info Kontak -->
                    <div>
                        <h3 class="text-xl font-bold text-indigo-600 mb-4">Informasi Kontak</h3>
                        <div class="space-y-5 text-gray-700">
                            <div class="flex items-start">
                                <i class="fas fa-envelope mt-1 mr-3 text-indigo-600"></i>
                                <div>
                                    <h4 class="font-medium">Email</h4>
                                    <p>wahyu00hd@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone-alt mt-1 mr-3 text-indigo-600"></i>
                                <div>
                                    <h4 class="font-medium">Telepon</h4>
                                    <p>0857-9127-4070</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt mt-1 mr-3 text-indigo-600"></i>
                                <div>
                                    <h4 class="font-medium">Lokasi</h4>
                                    <p>Pasuruan, Jawa Timur, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sosial Media -->
                    <div>
                        <h3 class="text-xl font-bold text-indigo-600 mb-4">Sosial Media</h3>
                        <p class="text-gray-700 mb-6">Silakan kunjungi profil saya melalui tautan di bawah ini:</p>
                        <div class="flex space-x-4">
                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/in/wahyu-hidayatullah-539a652a7" target="_blank"
                                rel="noopener noreferrer"
                                class="w-10 h-10 rounded-full bg-indigo-700 flex items-center justify-center hover:bg-indigo-800 transition text-white">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <!-- GitHub -->
                            <a href="https://github.com/jalurtech" target="_blank" rel="noopener noreferrer"
                                class="w-10 h-10 rounded-full bg-indigo-700 flex items-center justify-center hover:bg-indigo-800 transition text-white">
                                <i class="fab fa-github"></i>
                            </a>
                            <!-- WhatsApp -->
                            <a href="https://wa.me/6285791274070?text=Halo%20Wahyu%2C%20saya%20ingin%20menghubungi%20Anda%20mengenai..."
                                target="_blank" rel="noopener noreferrer"
                                class="w-10 h-10 rounded-full bg-indigo-700 flex items-center justify-center hover:bg-indigo-800 transition text-white">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <!-- email -->
                            <a href="mailto:wahyu00hd@gmail.com" target="_blank" rel="noopener noreferrer"
                                class="w-10 h-10 rounded-full bg-indigo-700 flex items-center justify-center hover:bg-indigo-800 transition text-white">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 Wahyu HD. All rights reserved.</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" id="back-to-top"
        class="fixed bottom-6 right-6 w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center text-white shadow-lg hover:bg-indigo-700 transition opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script>
        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Animate skill bars on scroll
        const skillBars = document.querySelectorAll('.bg-indigo-600');

        const animateSkillBars = () => {
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 300);
            });
        };

        const skillsSection = document.getElementById('skills');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateSkillBars();
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        observer.observe(skillsSection);
    </script>

    {{-- untuk tetap menampilkan header --}}
    <script>
        // Smooth scroll dan update active nav link
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                // Update active class
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');

                // Smooth scroll
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // 80px offset untuk header
                        behavior: 'smooth'
                    });
                }

                // Tutup mobile menu jika terbuka
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // Toggle mobile menu
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Update active nav link saat scroll
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY + 100;

            document.querySelectorAll('section').forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });

        // Header shadow saat scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.sticky-header');
            if (window.scrollY > 10) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });
    </script>


</body>

</html>
