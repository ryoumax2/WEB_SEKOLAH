<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Murid-pages</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/about.css">
    <!-- swiper css -->
</head>

<body>



    <nav class="bg-gray-800 w-full" style="position: fixed; z-index: 999999999;">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src="img/logocisat-removebg-preview.png" alt="Your Company">
                        <p class="text-white ml-6">Smk PK 1 Cibitung</p>
                    </div>
                    <div class=" navbar hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#about" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page" style="margin-left:160%;">About</a>
                            <a href="#Tenaga.K" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tenaga.K</a>
                            <a href="#fasilitas" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Fasilitas</a>
                            <a href="#eskul" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Esktrakulikuler</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">



                    <!-- Profile dropdown -->
                    <!-- <div class="relative ml-3">
                        <div>
                            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div> -->
                    <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->

                </div>
            </div>
        </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->

    </nav>



    <!-- aboute -->

    <section id="about" class="about bg-dark dark:bg-gray-900">
        <div data-aos="fade-up" class="image gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden" src="img/cisat2.jpeg" alt="dashboard image" style="overflow-y: hidden;">

            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl  tracking-tight font-extrabold text-gray-900 dark:text-white" style="color: white;">
                    SMK Cibitung 1: Menyiapkan Generasi Unggul di Bidang Keahlian</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400" style="color: white;">SMK Cibitung 1, yang terletak di Cibitung, Bekasi, merupakan salah satu sekolah menengah kejuruan yang berfokus pada pengembangan keterampilan siswa di berbagai bidang. Didirikan dengan tujuan untuk mempersiapkan generasi muda yang siap bersaing di dunia kerja, SMK Cibitung 1 menawarkan berbagai program keahlian yang relevan dengan kebutuhan industri.</p>
            </div>
        </div>
    </section>
    <!-- aboute - selesai-->


    <!-- fitur -->

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
    </div>

    </section>

    <!-- fitur-selesai -->




    <!-- tenaga kerja -->

    <section class="team" id="Tenaga.K">
        <div class="team-heading" data-aos="fade-up">
            <h3>Tenaga Kerja</h3>
            <p class="text-white d-flex m-auto text-center" style="width: 650px; font-size: 16px; font-weight:400;">Di SMK PK Cibitung 1, kami memiliki tenaga kerja guru yang bukan hanya mengajarkan ilmu, tetapi juga menginspirasi generasi masa depan. Dengan dedikasi dan semangat yang tinggi, mereka membimbing siswa untuk mengembangkan potensi diri dan siap menghadapi tantangan dunia kerja.</p>
        </div>

        <div #swiperRef="" class="swiper mySwiper mt-8" data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="team-box">
                        <div class="t-b-img">
                            <img src="img/P Andika.jpeg" alt="" style="background-position: top; width: 250px; height: 320px; background-color: transparent; margin: -30px auto; padding: 20px;">
                        </div>
                        <div class="t-b-text">
                            <strong>Pa Andika</strong>
                            <p>Kepala Jurusan </p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="team-box">
                        <div class="t-b-img">
                            <img src="img/B Rindy.jpeg" alt="" style="background-position: top; width: 250px; height: 320px; background-color: transparent; margin: -30px auto; padding: 20px;">
                        </div>
                        <div class="t-b-text">
                            <strong>Pengajar</strong>
                            <p>Bu Rindy</p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="team-box">
                        <div class="t-b-img">
                            <img src="img/B Sarah.jpeg" alt="" style="background-position: top; width: 250px; height: 320px; background-color: transparent; margin: -30px auto; padding: 20px;">
                        </div>
                        <div class="t-b-text">
                            <strong>Pengajar : </strong>
                            <p>Bu Sarah</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <button class="eskul-btn" type="submit" name="submit.T" data-aos="fade-down">

            <span>
                <a href="tenagakerja.php">
                    View All...
                </a>
            </span>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 74 74"
                height="34"
                width="34">
                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                <path
                    fill="black"
                    d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
            </svg>
        </button>

        </div>
    </section>
    <!-- tenaga kerja - fitur-selesai -->


    <!-- fasilitas -->

    <section id="fasilitas" class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6  ">
            <div class="text-fasilitas text-center m-auto max-w-screen-md mb-8 lg:mb-16 ">
                <h2 class=" mb-4 text-4xl tracking-tight  font-extrabold text-gray-900 dark:text-white">FASILITAS</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">SMK Cibitung 1 dilengkapi dengan fasilitas modern, seperti laboratorium komputer, ruang praktik Perbankan Syariah, dan ruang kelas yang nyaman. Fasilitas ini mendukung proses belajar mengajar yang efektif dan mempersiapkan siswa untuk menghadapi tantangan di dunia kerja.</p>
            </div>
            <div class=" space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div class="border p-5 bg-gray-300" style=" border-radius:10px;" data-aos="fade-right">
                    <div class="flex justify-center items-center  mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>
                    </div>
                    <h3 class="mb-2  text-xl font-bold dark:text-white">Ruangan Kelas</h3>
                    <p class="text-gray-800 dark:text-gray-400">Semua Ruangan Kelas DI SMk PK Cibiitung 1 Mempunyai Ac dan kipas Sebagai Pendingin ruangan memiliki beberapa fasilitas yang cukup nyaman Seperti: Meja, Kursi, proyektor / TV </p>
                </div>
                <div class="border p-5 bg-gray-400" style=" border-radius:10px;" data-aos="flip-left">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9l0 28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5l0-24.6c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Jurusan</h3>
                    <p class="text-gray-800 dark:text-gray-400">JIka kamu menjadi Siswa/i kamu berhak untuk memilih salah satu Jurusan yang kamu minati. DI SMK PK 1 Cibitung memiliki beberapa jurusan yaitu : <strong>TMI</strong> , <strong>SIJA</strong>, <strong>MENLOG</strong>, <strong>PBS</strong> </p>
                </div>
                <div class="border p-5 bg-gray-400" style=" border-radius:10px;" data-aos="fade-left">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M416 0C400 0 288 32 288 176l0 112c0 35.3 28.7 64 64 64l32 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-128 0-112 0-208c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7L80 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224.4c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16l0 134.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8L64 16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Kantin</h3>
                    <p class="text-gray-800 dark:text-gray-400">SMK PK CIBITUNG 1 mempunyai kantin yang cukup lengkap untuk mengatasi kelaparan saat belajar, jika sudah waktunya istirahat kamu bisa ke kantin untuk membeli jajanan atau makanan yang kamu inginkan</p>
                </div>
                <div class="border p-5 bg-gray-400" style=" border-radius:10px;" data-aos="fade-right">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M400 0c5 0 9.8 2.4 12.8 6.4c34.7 46.3 78.1 74.9 133.5 111.5c0 0 0 0 0 0s0 0 0 0c5.2 3.4 10.5 7 16 10.6c28.9 19.2 45.7 51.7 45.7 86.1c0 28.6-11.3 54.5-29.8 73.4l-356.4 0c-18.4-19-29.8-44.9-29.8-73.4c0-34.4 16.7-66.9 45.7-86.1c5.4-3.6 10.8-7.1 16-10.6c0 0 0 0 0 0s0 0 0 0C309.1 81.3 352.5 52.7 387.2 6.4c3-4 7.8-6.4 12.8-6.4zM288 512l0-72c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 72-48 0c-17.7 0-32-14.3-32-32l0-128c0-17.7 14.3-32 32-32l416 0c17.7 0 32 14.3 32 32l0 128c0 17.7-14.3 32-32 32l-48 0 0-72c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 72-64 0 0-58c0-19-8.4-37-23-49.2L400 384l-25 20.8C360.4 417 352 435 352 454l0 58-64 0zM70.4 5.2c5.7-4.3 13.5-4.3 19.2 0l16 12C139.8 42.9 160 83.2 160 126l0 2L0 128l0-2C0 83.2 20.2 42.9 54.4 17.2l16-12zM0 160l160 0 0 136.6c-19.1 11.1-32 31.7-32 55.4l0 128c0 9.6 2.1 18.6 5.8 26.8c-6.6 3.4-14 5.2-21.8 5.2l-64 0c-26.5 0-48-21.5-48-48L0 176l0-16z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Musholla</h3>
                    <p class="text-gray-800 dark:text-gray-400">SMK PK 1 Cibitung men Mewajibkan Siswa/i untuk beribadah ke pada Tuhan yang maha esa, </p>
                </div>
                <div class="border p-5 bg-gray-400" style=" border-radius:10px;" data-aos="flip-left">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zm80 256l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16L80 384c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Absensi Digital</h3>
                    <p class="text-gray-800 dark:text-gray-400">Jika kamu sudah jadi bagian Siswa/i SMK PK 1 Cibitung, kamu akan diberikan kartu untuk Ngetap di sensor Absen yang tersedia di lorong dekat tangga</p>
                </div>
                <div class="border p-5 bg-gray-400" style=" border-radius:10px;" data-aos="fade-left">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM192 256l48 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-48 0 0 64zm48 64l-48 0 0 32c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64 0-120c0-22.1 17.9-40 40-40l72 0c53 0 96 43 96 96s-43 96-96 96z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Parkir</h3>
                    <p class="text-gray-800 dark:text-gray-400">Siswa/i dan Guru men dapatkan halaman parkiran yang luas dan aman tampa di pungut biaya</p>
                </div>
            </div>
        </div>
    </section>

    <!-- fasilitas -- selesai -->

    <!-- eskul -->
    <section class="team" id="eskul" style="margin-top: 10%;" data-aos="fade-left">
        <div id="eskul" class="team-heading">
            <h3>Eskul</h3>
            <p class="text-white d-flex m-auto text-center" style="width: 500px;">SMK Cibitung 1 juga menyediakan berbagai kegiatan ekstrakurikuler, seperti olahraga, seni, dan organisasi siswa. Kegiatan ini bertujuan untuk mengembangkan soft skills siswa, seperti kepemimpinan, kerja sama, dan kreativitas.</p>
        </div>

        <div #swiperRef="" class="swiper mySwiper" style="margin-top: 5%;" data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <div class="team-box">
                        <div class="t-b-img">
                            <img src="img/futsal2.jpeg" alt="">
                        </div>
                        <div class="t-b-text">
                            <strong>Futsal</strong>
                            <a href="">Link ig</a>
                            <div class="team-social ">
                                <a href="#">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="team-box">
                        <div class="t-b-img">
                            <img src="img/paskib.jpeg" alt="">
                        </div>
                        <div class="t-b-text">
                            <strong>Paskibra</strong>
                            <a href="">Link ig</a>
                            <div class="team-social ">
                                <a href="#">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="team-box">
                        <div class="t-b-img">
                            <img src="img/pancaksilat.jpeg" alt="">
                        </div>
                        <div class="t-b-text">
                            <strong>IKS.PI Kera sakti</strong>
                            <a href="">Link ig</a>
                            <div class="team-social ">
                                <a href="#">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
        </div>
        </div>


        </div>
        <div class="swiper-pagination"></div>
        </div>
        <button class="eskul-btn" data-aos="fade-down">
            <span>
                <a href="eksul.php">

                    View All...
                </a>
            </span>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 74 74"
                height="34"
                width="34">
                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                <path
                    fill="black"
                    d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"></path>
            </svg>
        </button>
    </section>.

    <br>
    <br>
    <br>
    <section class="location" data-aos="flip-left">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1728061788763!6m8!1m7!1svFVE7vQkSu4TglNYqFXpNA!2m2!1d-6.244819062367664!2d107.0950530666041!3f105.87793147932273!4f-14.280378341914414!5f0.5790707710881773" width="1600px" height="450" style="margin-top:50px; box-shadow: 5px 4px 5px grey; border-radius: 20px; margin: 50px auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer>
        <div class="logo" data-aos="fade-up">
            <img src="img/logocisat-removebg-preview.png" alt="">

            <!-- icons -->
            <div class="icon flex items-center justify-center h-full m-auto mt-10" data-aos="fade-right">
                <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                    <a href="https://www.facebook.com/cibitung1smk?locale=id_ID">Facebook</a>
                </button>
                <button class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                    <a href="https://www.youtube.com/@smkcibitung1484">Youtube</a>
                </button>
                <button class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-400/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                    <a href="https://x.com/smkcibitung1">Twitter</a>
                </button>
                <button class="text-white bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                    <a href="https://instagram.com/smkcibitung1">Instagram</a>
                </button>
            </div>

            <!-- icon ke 2 -->
            <div class="icon2 d-flex" style="display: flex; justify-content: space-around; margin-top: 10%;">
                <ul style="list-style: none; padding: 0; display: flex; gap: 20px;">
                    <li>
                        <div class="location" data-aos="fade-up">
                            <i class="fa-solid fa-location-dot" style="font-size:60px;"></i>
                            <br>
                            <br>
                            <h4>Jl. Kesemek</h4>

                            <p>Kab. Bekasi, Jawa Barat</p>
                        </div>
                    </li>
                    <li>
                        <div class="phone" data-aos="fade-up">
                            <i class="fa-solid fa-phone" style="font-size:60px;"></i>
                            <br><br>
                            <h4>Contact</h4>
                            <p>+62 123-4567</p>
                        </div>
                    </li>
                    <li>
                        <div class="email" data-aos="fade-up">
                            <i class="fa-solid fa-envelope" style="font-size:60px;"></i>
                            <br>
                            <br>
                            <h4>Email Us</h4>
                            <p>info@example.com</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="pembuat">
                <p>

                    <a href="https://instagram.com/smkcibitung1">Hak Cipta @smkcibitung1</a>
                </p>
            </div>
        </div>
    </footer>



    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script src="https://kit.fontawesome.com/9cad32c48e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="about.js"></script>
</body>

</html>