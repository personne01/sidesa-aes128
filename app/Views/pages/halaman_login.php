<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>

<body>
    <section class="h-full w-full border-box transition-all duration-500 linear" style="background-color: #232130">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-3-6 .input {
                border: 1px solid #292738;
                background-color: #252332;
                color: #d8d7df;
                transition: 0.3s;
            }

            .content-3-6 .input:focus-within {
                border: 1px solid #2ec49c;
                color: #d8d7df;
                transition: 0.3s;
            }

            .content-3-6 .input input::placeholder {
                color: #4e4b62;
                transition: 0.3s;
            }

            .content-3-6 .input:focus-within input::placeholder {
                color: #d8d7df;
                outline: none;
                transition: 0.3s;
            }

            .content-3-6 .input:focus-within .icon path {
                transition: 0.3;
                fill: #2ec49c;
                transition: 0.3s;
            }

            .content-3-6 .input .icon-toggle path {
                transition: 0.3;
                fill: #2ec49c;
                transition: 0.3s;
            }

            .content-3-6 .centered {
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .content-3-6 .width-left {
                width: 0%;
            }

            .content-3-6 .width-right {
                width: 100%;
            }

            .content-3-6 .forgot-password {
                color: #737182;
                transition: 0.3s;
            }

            .content-3-6 .forgot-password:hover {
                color: #d8d7df;
            }

            .content-3-6 .btn-fill {
                background-image: linear-gradient(rgba(91, 203, 173, 1),
                        rgba(39, 194, 153, 1));
            }

            .content-3-6 .btn-fill:hover {
                background-image: linear-gradient(#2ec49c, #2ec49c);
            }

            .content-3-6 .bg-medium-black-1 {
                background-color: #211f2d;
            }

            .content-3-6 .bg-medium-black-2 {
                background-color: #252332;
            }

            .content-3-6 .text-gray {
                color: #737182;
            }

            .content-3-6 .text-green {
                color: #2ec49c;
            }

            .content-3-6 .text-medium-white {
                color: #d8d7df;
            }

            @media (min-width: 1024px) {
                .content-3-6 .width-left {
                    width: 48%;
                }

                .content-3-6 .width-right {
                    width: 52%;
                }
            }
        </style>
        <div class="content-3-6" style="font-family: 'Poppins', sans-serif">
            <div class="flex flex-col items-center h-full lg:flex-row">
                <div class="relative hidden lg:block h-full width-left">
                    <img class="absolute object-fill centered" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-6.png" alt="" />
                </div>
                <div class="flex w-full h-full px-8 width-right sm:px-16 py-32 lg:mx-0 mx-auto items-left justify-left bg-medium-black-1">
                    <div class="w-full sm:w-7/12 md:w-8/12 lg:w-9/12 xl:w-7/12 mx-auto lg:mx-0">
                        <div class="items-center justify-center lg:hidden flex">
                            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-6.png" alt="" />
                        </div>
                        <h3 class="text-3xl font-semibold mb-3 text-medium-white">
                            Log In to continue
                        </h3>
                        <p class="leading-7 text-sm text-gray">
                            Please log in using that account has<br />
                            registered on the website.
                        </p>
                        <form class="mt-6" action="#" method="POST" x-data="{ show: false }">
                            <div class="mb-7">
                                <label class="block text-lg font-medium text-medium-white">Email Address</label>
                                <div class="flex w-full px-5 py-4 mt-3 text-base font-light rounded-xl input">
                                    <svg class="mr-4 icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z" fill="#4E4B62" />
                                    </svg>
                                    <input type="email" name="" id="" placeholder="Your Email Address" class="w-full focus:outline-none text-base font-light bg-medium-black-2" autocomplete required />
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="block text-lg font-medium text-medium-white">Password</label>
                                <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input">
                                    <svg class="mr-4 icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z" fill="#4E4B62" />
                                    </svg>
                                    <input type="password" name="" id="password-content-3-6" placeholder="Your Password" minlength="6" class="w-full focus:outline-none text-base font-light bg-medium-black-2" required />
                                    <div onclick="togglePassword()" @click="show = !show">
                                        <svg :class="{'icon-toggle': show}" class="ml-3 cursor-pointer" width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z" fill="#4E4B62" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-right">
                                <a href="#" class="forgot-password text-sm italic">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn-fill block w-full px-4 py-3 mt-9 font-medium text-xl text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                                Log In To My Account
                            </button>
                        </form>
                        <p class="mt-8 text-center text-sm text-gray">
                            Don't have an account yet?
                            <a href="#" class="font-medium hover:underline text-green">Register Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Password toggle -->
        <script>
            function togglePassword() {
                var x = document.getElementById("password-content-3-6");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </section>
    <div class="header-2-2" style="font-family: 'Poppins', sans-serif">


        <section class="h-full pt-20 pb-12 lg:px-24 md:px-16 sm:px-8 px-4 transition-all duration-500 linear" style="background-color: #000000">

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

                .footer-2-4 .list-footer li a {
                    color: #999999;
                }

                .footer-2-4 .list-footer li a:hover {
                    color: #FFFFFF;
                    cursor: pointer;
                }

                .footer-2-4 .border-color {
                    color: #999999;
                }

                .footer-2-4 .footer-link:hover {
                    color: #FFFFFF;
                    cursor: pointer;
                }

                .footer-2-4 .social-media-c:hover circle,
                .footer-2-4 .social-media-p:hover path {
                    fill: #FFFFFF;
                    cursor: pointer;
                }
            </style>
            <footer class="footer-2-4" style="font-family: 'Poppins', sans-serif;">


                <div class="border-color mx-auto">
                    <div class="">
                        <hr style="border-color: #303030;">
                    </div>
                    <div class="container mx-auto flex  pt-12 flex-col lg:flex-row items-center space-y-5 lg:space-y-0">
                        <div class="flex title-font font-medium items-center text-gray-900 mb-4 lg:mb-0 md:mb-0 space-x-5" style="cursor: pointer;">
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#999999" />
                                <g clip-path="url(#clip0)">
                                    <path d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667Z" fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#999999" />
                                <g clip-path="url(#clip0)">
                                    <path d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z" fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z" fill="#999999" />
                                <path d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z" fill="#999999" />
                                <path d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511Z" fill="#999999" />
                            </svg>
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#999999" />
                                <g clip-path="url(#clip0)">
                                    <path d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733Z" fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <nav class="mx-auto flex flex-wrap items-center text-base justify-center space-x-5">
                            <a href="" class="footer-link">Terms of Service</a>
                            <span>|</span>
                            <a href="" class="footer-link">Privacy Policy</a>
                            <span>|</span>
                            <a href="" class="footer-link">Licenses</a>
                        </nav>
                        <nav class="flex lg:flex-row flex-col items-center text-base justify-center">
                            <p>Copyright ?? 2021 Analystic Max</p>
                        </nav>
                    </div>
                </div>
            </footer>
        </section>
</body>

</html>