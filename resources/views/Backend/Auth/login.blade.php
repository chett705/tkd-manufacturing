<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TKD Supplier</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-slate-50">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
            <h1 class="text-4xl font-black text-[#0B0B54]">TK<span class="text-[#ED1C24]">&</span>D</h1>
            <p class="mt-2 text-sm text-slate-500">Sign in to Admin Panel</p>
        </div>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white px-4 py-10 shadow-sm border border-slate-200 rounded-xl">
                <form method="POST" action="{{ route('login.post') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-slate-700">Email address</label>
                        <input type="text" name="username" required class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 focus:border-[#ED1C24] focus:ring-1 focus:ring-[#ED1C24] outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700">Password</label>
                        <input type="password" name="password" required class="mt-2 block w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 focus:border-[#ED1C24] focus:ring-1 focus:ring-[#ED1C24] outline-none">
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                        <label class="ml-2 block text-sm text-slate-600">Remember me</label>
                    </div>

                    <button type="submit" class="w-full flex justify-center rounded-lg bg-[#0B0B54] px-3 py-3 text-sm font-semibold text-white hover:bg-[#ED1C24] transition">
                        Sign in
                    </button>
                </form>
            </div>
            
            <p class="mt-8 text-center text-xs text-slate-400">
                TKD Supplier © 2026 — Admin Panel
            </p>
        </div>
    </div>
</body>
</html>