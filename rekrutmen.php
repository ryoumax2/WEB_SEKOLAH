<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Rekrutmen Ekstrakurikuler</title>
    <link rel="stylesheet" href="rekrutmen.css">
</head>

<body>
    <nav class="bg-gray-800 w-full" style="position: fixed; z-index: 999999999;">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="img/logocisat-removebg-preview.png" alt="Your Company">
                    <p class="text-white ml-5">Rekrutmen Ekstrakurikuler</p>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-gray-100 pt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-center mb-6" data-aos="fade-up">Rekrutmen Ekstrakurikuler</h1>
            <p class="text-center mb-8" data-aos="fade-up">Bergabunglah dengan berbagai ekstrakurikuler di sekolah kami! Isi formulir di bawah ini untuk mendaftar.</p>

            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md" data-aos="flip-right">
                <h2 class="text-xl font-semibold mb-4">Formulir Pendaftaran</h2>
                <form class="space-y-4">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                        <select id="kelas" name="kelas" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="">Pilih Kelas</option>
                            <option value="7">Kelas X</option>
                            <option value="8">Kelas XI</option>
                            <option value="9">Kelas XII</option>
                        </select>
                    </div>
                    <div>
                        <label for="ekstrakurikuler" class="block text-sm font-medium text-gray-700">Ekstrakurikuler yang Diminati</label>
                        <select id="ekstrakurikuler" name="ekstrakurikuler" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="">Pilih Ekstrakurikuler</option>
                            <option value="futsal">Futsal</option>
                            <option value="silat">Pancak Silat</option>
                            <option value="handball">Handball</option>
                            <option value="basketball">Basketball</option>
                            <option value="volleyball">Volleyball</option>
                            <option value="paskibraka">Paskibraka</option>
                            <option value="rohis">Rohis</option>
                            <option value="pmr">PMR</option>
                            <option value="tari">Tari</option>
                        </select>
                    </div>
                    <div>
                        <label for="alasan" class="block text-sm font-medium text-gray-700">Alasan Bergabung</label>
                        <textarea id="alasan" name="alasan" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                    </div>
                    <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-500">Daftar</button>
                    <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg" style="background-color:red;"><a href="eksul.php">Batal</a></button>
                </form>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Hak Cipta Sekolah Kami. Semua hak dilindungi.</p>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>