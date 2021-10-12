<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman tidak ditemukan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>

<body>
    <section class="h-full w-full border-box sm:pt-20 pt-16 sm:pb-16 pb-8 lg:px-24 md:px-16 sm:px-8 px-8 transition-all duration-500 linear" style="background-color: #000000;">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            .empty-2-4 .btn-back:hover {
                --tw-shadow: inset 0 0px 18px 0 rgba(0, 0, 0, 0.7);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .empty-2-4 .caption-text {
                color: #999999;
            }

            .empty-2-4 .btn-back {
                background-image: linear-gradient(rgba(208, 254, 123, 1), rgba(163, 252, 158, 1));
            }

            @media(min-width: 425px) {
                .empty-2-4 .title-text {
                    font-size: 40px;
                }
            }
        </style>

        <div class="empty-2-4" style="font-family: 'Poppins', sans-serif;">
            <div class="container mx-auto flex items-center justify-center flex-col">
                <img class="sm:w-auto w-5/6 sm:mb-16 mb-12 object-cover object-center" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState2/Empty-2-4.png" alt="">
                <div class="text-center w-full">
                    <h1 class="title-text text-3xl mb-5 font-semibold text-white">
                        Opss! Something Missing
                    </h1>
                    <p class="caption-text mb-16 tracking-wide leading-7">
                        Halaman yang anda cari tidak ditemukan. Kami<br class="sm:block hidden"> Sarankan untuk kembali ke halaman home.
                    </p>
                    <div class="flex justify-center">
                        <a href="/halaman_home">
                            <button class="btn-back inline-flex font-semibold text-black text-lg leading-7 py-4 px-6 rounded-xl focus:outline-none box-shadow">
                                Kembali ke Halaman Home
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>