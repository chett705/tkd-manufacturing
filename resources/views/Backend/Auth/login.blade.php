@extends('backend.layout.app')
<div class="min-h-screen flex items-center justify-center bg-gray-50 p-4">
    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-xl border-t-4 border-[#003366]">

        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold text-[#003366]">TK<span class="text-[#CC0000]">&</span>D</h1>
            <p class="text-xs text-gray-400 uppercase tracking-widest font-semibold mt-1">Supplier (Cambodia) Co., Ltd.</p>
        </div>

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address / Username</label>
                    <input type="text"
                        name="username"
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-1 focus:ring-[#ED1C24] focus:border-transparent outline-none transition-all"
                        placeholder="Enter email or username"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-1 focus:ring-[#ED1C24] focus:border-transparent outline-none transition-all">
                </div>
            </div>

            <button type="submit" class="w-full mt-6 bg-[#003366] text-white py-3 rounded-lg font-bold hover:bg-[#002244] active:scale-[0.98] transition-all">
                SIGN IN
            </button>
        </form>
    </div>
</div>