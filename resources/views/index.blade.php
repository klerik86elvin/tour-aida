<!doctype html>
<html>
@include('layouts.head')
<body>
@include('layouts.header')
<section class="xl:h-[31rem] xl:py-8 py-2 h-28 relative" style="background-image: url({{asset('assets/img/index.jpg')}}); background-size: cover; background-repeat: no-repeat">
    <div class="">
        <p class="text-center text-white text-2xl xl:text-6xl">{{__('Everything for tourism')}}</p>
        <p class="text-center text-white text-xs text-[#0C517F] xl:text-4xl">{{__('enjoy your holiday')}}</p>
    </div>
    <div class="hidden relative z-10 flex justify-between index-buttons xl:flex xl:mt-32 xl:justify-center xl:gap-x-6">
        <a href="{{route('faq')}}" class="banner-button faq transition flex items-center justify-center w-44"><span>{{__('FAQ')}}</span></a>
        <a href="{{route('contact')}}" class="banner-button request transition flex items-center justify-center font-semibold bg-white/30 w-44"><span>{{__('Request our services')}}</span></a>
    </div>
    <div class="gradient"></div>
</section>
<section class="py-4 px-6 xl:hidden bg-white">
    <div class="flex justify-between index-buttons xl:justify-center xl:gap-x-6">
        <a href="{{route('faq')}}" class="flex text-sm items-center justify-center w-36"><span>{{__('FAQ')}}</span></a>
        <a href="{{route('contact')}}" class="flex text-sm items-center justify-center w-36  font-semibold bg-white/50"><span>{{__('Request our services')}}</span></a>
    </div>
</section>
<section class="top-service py-4 px-6">
    <div class="hidden xl:flex  justify-between main">
        @include('components.index.to-service', ['img' =>'1.svg', 'title' => __('Guided tours'), 'body'=> __('Lorem Ipsum is simply dummy text of the typesetting industry.')])
        @include('components.index.to-service', ['img' =>'2.svg', 'title' => __('Transport services'), 'body'=> __('Lorem Ipsum is simply dummy text of the typesetting industry.')])
        @include('components.index.to-service', ['img' =>'3.svg', 'title' => __('Accommodation'), 'body'=> __('Lorem Ipsum is simply dummy text of the typesetting industry.')])
        @include('components.index.to-service', ['img' =>'4.svg', 'title' => __('Events'), 'body'=> __('Lorem Ipsum is simply dummy text of the typesetting industry.')])
    </div>
</section>
<section class="about-us bg-white">
    <div class=" main py-4 px-6 xl:px-0">
        <p class="text-center text-2xl xl:text-6xl">{{__('Why Book With Us')}}</p>
        <p class="text-center  xl:text-xl mt-2">{{__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.')}}</p>
    </div>
</section>
<section class="bg-[#213551]">
    <div class="main overflow-hidden px-6 xl:px-0">
        <div class="slick-slider">
            @foreach($services as $s)
            <div class="">
                <div class="flex items-center gap-x-2">
                    <img src="{{\TCG\Voyager\Facades\Voyager::image($s->img)}}" alt="">
                    <p class="text-white text-sm">{{$s->name}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="tour main px-6 xl:px-0">
    <div class="tour-list grid gap-y-4 grid-cols-1 xl:grid-cols-3 xl:gap-x-6">
        @foreach($tours as $t)
            <div class="tour-item flex flex-col gap-y-4 xl:even:flex-col-reverse">
                <div class="title px-6 py-3 flex items-end" style="background-image: url({{\TCG\Voyager\Facades\Voyager::image($t->img)}})">
                    <div class="w-full">
                        <p class="font-bold mb-4 text-2xl text-white text-center uppercase">{{$t->name}}</p>
                        <div class="flex">
                            <div class="flex gap-x-2 w-1/3">
                                <img src="{{asset('assets/img/time.svg')}}" alt="">
                                <p class="text-white">{{Carbon\Carbon::parse($t->date)->format('Y-m-d') }}</p>
                            </div>
                            <div class="flex justify-center gap-1  w-1/3">
                                <img src="{{\TCG\Voyager\Facades\Voyager::image($t->type->img)}}" alt="" style="width: 18px; height: 18px">
                                <p class=" text-white text-center">{{$t->type->name}}</p>
                            </div>
                            <div class="flex gap-2 w-1/3 justify-end">
                                @foreach($t->services as $s)
                                    <img src="{{\TCG\Voyager\Facades\Voyager::image($s->img)}}" alt="" style="width: 20px; height: 20px">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body px-6 py-3 flex items-center">
                    <p class="text-center text-white">
                        {{$t->text}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center text-[#36C2D3] flex justify-center mt-8">
        <a class="more-button" href="{{route('tour')}}">
            <span>{{__('More İnfo')}}</span>
        </a>
    </div>
</section>

<section class="products-services my-10 main px-6 xl:px-0">
    <div class="grid grid-cols-1 gap-y-4 xl:grid-cols-2 xl:gap-x-6">
        <div class="products">
            <div class="top flex flex-col justify-end pb-6 gap-y-3">
                <img src="{{asset('assets/img/p-icon.svg')}}" alt="" style="height: 60px;">
                <p class="underline underline-offset-8 text-white text-center text-3xl xl:text-4xl ">{{__('Products')}}</p>
{{--                <a class=" underline text-white text-center" href="">{{__('View all')}}</a>--}}
            </div>
            <div class="list px-4 flex flex-col pt-4">
                @foreach($products as $p)

                    <div class="flex items-center justify-between py-2 {{$loop->iteration > 1 ? "border-t solid border-[#CDCCCC]" : ""}}">
                        <p class="w-full text-2xl font-medium text-center text-[#213551] xl:text-3xl">{{$p->name}}</p>
                        <a href="/storage/{{json_decode($p->file)[0]->download_link ?? ""}}" target="_blank">
                            <img src="{{asset('assets/img/download.svg')}}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="scroll-button"></div>
        </div>
        <div class="services">
            <div class="top flex flex-col justify-end pb-6 gap-y-3 text-[#213551]">
                <img src="{{asset('assets/img/s-icon.svg')}}" alt="" style="height: 60px;">
                <p class="underline underline-offset-8 text-center text-3xl xl:text-4xl ">{{__('Servises')}}</p>
{{--                <a class=" underline text-center" href="">{{__('View all')}}</a>--}}
            </div>
            <div class="list px-4">
                @foreach($productServices as $p)
                    <div class="flex items-center justify-between py-2 {{$loop->iteration > 1 ? "border-t solid border-[#CDCCCC]" : ""}}">
                        <p class="w-full text-2xl font-medium text-center text-[#213551] xl:text-3xl">{{$p->name}}</p>
                        <a href="{{json_decode($p->file)[0]->download_link ?? ""}}" target="_blank">
                            <img src="{{asset('assets/img/download.svg')}}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="scroll-button w-full"></div>
        </div>
    </div>
</section>
<section class="relative my-4">
    <div class="tour-gradient absolute h-full w-full"></div>
    <div class="main  px-6 xl:px-0">
        <p class="text-center text-2xl font-semibold text-[#0C517F] mb-4 xl:text-4xl">{{__('Coming soon')}}</p>
        <div class="tour-list grid gap-y-4 grid-cols-1 xl:grid-cols-3 xl:gap-x-6">
            @foreach($comingSoonTours as $t)
                <div class="tour-item flex flex-col gap-y-4 xl:even:flex-col-reverse">
                    <div class="title px-6 py-3 flex items-end" style="background-image: url({{\TCG\Voyager\Facades\Voyager::image($t->img)}})">
                        <div class="w-full">
                            <p class="font-bold mb-4 text-2xl text-white text-center uppercase">{{$t->name}}</p>
                            <div class="flex">
                                <div class="flex gap-x-2 w-1/3">
                                    <img src="{{asset('assets/img/time.svg')}}" alt="">
                                    <p class="text-white">{{Carbon\Carbon::parse($t->date)->format('Y-m-d') }}</p>
                                </div>
                                <div class="flex justify-center gap-1  w-1/3">
                                    <img src="{{\TCG\Voyager\Facades\Voyager::image($t->type->img)}}" alt="" style="width: 18px; height: 18px">
                                    <p class=" text-white text-center">{{$t->type->name}}</p>
                                </div>
                                <div class="flex gap-2 w-1/3 justify-end">
                                    @foreach($t->services as $s)
                                        <img src="{{\TCG\Voyager\Facades\Voyager::image($s->img)}}" alt="" style="width: 20px; height: 20px">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body px-6 py-3 flex items-center">
                        <p class="text-center text-white">
                            {{$t->text}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')
@include('layouts.scripts')

<script>
    $('.slick-slider').slick({
        infinite: true,
        centerMode: true,
        focusOnSelect: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        prevArrow: "<button type=\"button\" class=\"slick-prev\"></button>",
        nextArrow: "<button type=\"button\" class=\"slick-next\"></button>",
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
</body>
</html>
