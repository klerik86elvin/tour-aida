<!doctype html>
<html>
@include('layouts.head')
<body>
@include('layouts.header')
<section class="tour main px-6 xl:px-0 my-4">
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
{{--    <div class="text-center text-[#36C2D3] flex justify-center mt-8">--}}
{{--        <a class="more-button" href="">--}}
{{--            <span>{{__('More İnfo')}}</span>--}}
{{--        </a>--}}
{{--    </div>--}}
</section>

@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
