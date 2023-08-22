<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="/src/styles/index.css" />
    <title>login</title>
</head>

<body class="bg-gray-100">

    <?php
    //HEADER COMPONENT
    require_once './frontend/components/header.php';
    require_once './frontend/components/notification.php';
    ?>

    <div class="flex items-center justify-center px-6 py-8 h-full min-h-[700px]">
        <div class="w-full rounded-md border sm:max-w-md bg-gray-800 border-gray-700">
            <div class="p-6 space-y-6 sm:p-8">
                <h1 class="text-xl font-medium leading-tight tracking-tight text-gray-300 md:text-2xl">
                    Sign in to your account
                </h1>

                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-400">Your email or username</label>
                        <input type="email" id="usernameOrEmail" class="outline-none ring-1 ring-gray-600 bg-gray-700 p-2.5 text-sm text-gray-400 rounded-md w-full hover:ring-gray-500 focus:ring-gray-500" placeholder="Email/Username" required="">
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-400">Password</label>
                        <input type="password" id="password" placeholder="Password" class="outline-none ring-1 ring-gray-600 bg-gray-700 p-2.5 text-sm text-gray-400 rounded-md w-full hover:ring-gray-500 focus:ring-gray-500" required="">
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="keepLoggedIn" type="checkbox" class="w-4 h-4 accent-white ring-1 ring-gray-600 rounded-md" required="">
                            </div>
                            <div class="ms-3 text-sm">
                                <label for="keepLoggedIn" class="text-gray-400">Remember me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm font-medium text-gray-600 hover:underline hover:text-gray-500">Forgot password?</a>
                    </div>
                    <button type="button" id="loginButton" onclick="(submitUserData())" class="w-full bg-green-700 hover:bg-green-600 font-medium rounded-md h-[40px] text-center">
                        <svg id="buttonLoading" hidden xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 animate-spin text-white mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                        <span id="buttonReady" class="text-gray-200 text-sm">Login</span>
                    </button>
                    <hr class="border-b-2 border-gray-700" />
                    <p class="text-sm font-light text-gray-400">
                        Don’t have an account yet? <a href="/register" class="text-sm font-semibold hover:underline text-primary-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="/src/js/login.js"></script>
</body>

</html>