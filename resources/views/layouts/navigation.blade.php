<div class="navbar mb-2 shadow-lg text-ble-content rounded-box">
    <div class="flex-none px-2 mx-2">
        <img
            class="img-responsive w-10"
            src="{{asset('img/logo.png')}}"
        />
    </div>
    <div class="flex-1 px-2 mx-2">
{{--        <div class="items-stretch hidden lg:flex">--}}
{{--            <a class="btn btn-ghost btn-sm rounded-btn" href="{{url('/post')}}"> Post</a>--}}
{{--        </div>--}}
{{--        <div class="items-stretch hidden lg:flex">--}}
{{--            <a class="btn btn-ghost btn-sm rounded-btn" href="{{route('')}}"> Contact </a>--}}
{{--        </div>--}}
    </div>
{{--    <div class="flex-none xl:invisible">--}}
{{--        <button class="btn btn-square btn-ghost">--}}
{{--            <svg--}}
{{--                class="h-6 w-6"--}}
{{--                width="24"--}}
{{--                height="24"--}}
{{--                viewBox="0 0 24 24"--}}
{{--                stroke-width="2"--}}
{{--                stroke="currentColor"--}}
{{--                fill="none"--}}
{{--                stroke-linecap="round"--}}
{{--                stroke-linejoin="round"--}}
{{--            >--}}
{{--                <path stroke="none" d="M0 0h24v24H0z"/>--}}
{{--                <line x1="4" y1="6" x2="20" y2="6"/>--}}
{{--                <line x1="4" y1="12" x2="20" y2="12"/>--}}
{{--                <line x1="4" y1="18" x2="20" y2="18"/>--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--    </div>--}}
    @if(session()->has('KataKunci'))
    <div class="flex-none">
        <button class="btn btn-square btn-ghost">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="3"/>
                <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
            </svg>
        </button>
    </div>
    <div class="flex-none">
        <a href="{{url('/logout')}}" class="btn btn-square btn-ghost">
            <svg
                class="h-6 w-6"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path stroke="none" d="M0 0h24v24H0z"/>
                <path
                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                />
                <path d="M7 12h14l-3 -3m0 6l3 -3"/>
            </svg>
        </a>
    </div>
    @endif
</div>
