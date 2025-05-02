@extends('layouts.index')
@section('content')
    <div class="bg-[#5AA0D7] w-full p-4">
        <div class="flex flex-col justify-center items-center space-y-2">
            <span class="font-poppins text-white text-center">Balance</span>
            <span class="font-poppins text-white text-center">Balance</span>
            <span class="font-poppins text-white text-center">Balance</span>
        </div>
    </div>

    <!-- Content Section with scrollable content -->
    <div class="flex-1 overflow-y-auto p-[6px]">
        <h1 class="text-3xl font-bold underline font-poppins text-center">
            Hello world!
        </h1>
        <div class="h-full w-full relative shadow-xl rounded-xl text-[10px]">
            <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
                <div class="bg-gray-200 px-4 py-3 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-gray-600 font-medium">10 Agustus</span>
                    </div>
                    <div class="flex gap-6">
                        <span class="text-gray-600 font-medium">Out Come: Rp. 7K</span>
                        <span class="text-gray-600 font-medium">In Come: Rp. 80K</span>
                    </div>
                </div>
    
                <div class="divide-y divide-gray-200">
                    <div class="px-4 py-4 flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="bg-red-600 rounded-full p-2 w-10 h-10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-gray-800 text-[14px]">Jajan</span>
                        </div>
                        <span class="text-gray-800 text-[14px] font-medium">Rp. 3000</span>
                    </div>
                    <div class="px-4 py-4 flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="bg-red-600 rounded-full p-2 w-10 h-10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-gray-800 text-[14px]">Jajan</span>
                        </div>
                        <span class="text-gray-800 text-[14px] font-medium">Rp. 3000</span>
                    </div>
                    <div class="px-4 py-4 flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="bg-red-600 rounded-full p-2 w-10 h-10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-gray-800 text-[14px]">Jajan</span>
                        </div>
                        <span class="text-gray-800 text-[14px] font-medium">Rp. 3000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
