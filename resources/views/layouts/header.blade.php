<header class="">
    <div class="main mx-auto solid p-6 flex justify-between">
        <a href="/">
            <img src="{{asset('assets/img/logo.svg')}}" alt="">
        </a>
        <div class="flex items-center">
            <div class="lang mr-6 relative">
                <div class="flex active-lang">
                    <img src="{{asset('assets/img/lang/'.app()->getLocale().'.svg')}}" alt="">
                    <span class="mx-1 uppercase">{{app()->getLocale()}}</span>
                    <img src="{{asset('assets/img/lang/arrow.svg')}}" alt="">
                </div>
                <div class="lang-list">
                    <div class="w-full flex active-lang {{app()->getLocale() == 'az' ? 'hidden' : ''}}">
                        <a class="w-full flex justify-center" href="lang/az">
                            <img src="{{asset('assets/img/lang/az.svg')}}" alt="">
                            <span class="mx-1 uppercase">az</span>
                        </a>
                    </div>
                    <div class="w-full flex active-lang {{app()->getLocale() == 'en' ? 'hidden' : ''}}">
                        <a class="w-full flex justify-center" href="lang/en">
                            <img src="{{asset('assets/img/lang/en.svg')}}" alt="">
                            <span class="mx-1 uppercase">en</span>
                        </a>
                    </div>
                    <div class="w-full flex active-lang {{app()->getLocale() == 'ru' ? 'hidden' : ''}}">
                        <a href="lang/ru" class="w-full flex justify-center">
                            <img src="{{asset('assets/img/lang/ru.svg')}}" alt="">
                            <span class="mx-1 uppercase">ru</span>
                        </a>
                    </div>
                </div>
            </div>
            <a class="xl:hidden" href="">
                <img src="{{asset('assets/img/chat.svg')}}" alt="">
            </a>
        </div>
    </div>
</header>
