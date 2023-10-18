<!doctype html>
<html>
@include('layouts.head')
<body>
@include('layouts.header')
<section class="top-body main mb-4 flex flex-col items-center justify-center">
    <img class="relative z-10" src="{{asset('assets/img/faq.svg')}}" alt="">
    <p class="relative z-10 w-5/6 text-3xl text-white text-center xl:text-5xl ">{{__('Frequently Answered Questions  (FAQ)')}}</p>
    <div></div>
</section>
<section class="faq main min-h-screen px-6 xl:px-0">
    <div id="accordion-collapse" data-accordion="collapse">
        @foreach($faq as $f)
            <h2 id="accordion-collapse-heading-{{$f->id}}">
                <button type="button" class="flex gap-x-4 py-2 border-b-2 py-4 solid border-[#D3EEF3] w-full" data-accordion-target="#accordion-collapse-body-{{$f->id}}" aria-expanded="false" aria-controls="accordion-collapse-body-{{$f->id}}">
                    <div class="icon"></div>
                    <span>{{$f->question}}</span>
                    {{--                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
                </button>
            </h2>
            <div id="accordion-collapse-body-{{$f->id}}" class="hidden" aria-labelledby="accordion-collapse-heading-{{$f->id}}">
                <div class="ml-12 border-l-2 solid my-2">
                    <p class="pl-4 text-[#2A3D52]">{{$f->answer}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="buttons font-semibold flex items-center flex-col gap-y-6 xl:flex xl:flex-row mt-16 mb-8 xl:justify-center xl:gap-x-6">
        <a href="/">{{__('Back')}}</a>
        <a href="{{route('contact')}}">{{__('New questin')}}</a>
    </div>
</section>
@include('layouts.footer')
@include('layouts.scripts')
<script>
    // $('#accordion-collapse button').click((e) => {
    //     e.target.classList.remove('bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white')
    // })
    const accordionItems = [];
    const options = {
        alwaysOpen: true,
        activeClasses: 'open',
        inactiveClasses: 'flex',
        onOpen: (item) => {
        }
    };
    $('#accordion-collapse h2').each((key, value) => {
        const a = {
            id: $(value).attr('id'),
            triggerEl: value,
            targetEl: $(`[aria-labelledby = ${$(value).attr('id')}]`)[0]
        }
        accordionItems.push(a);
    })
    console.log(accordionItems)
    const accordion = new Accordion(accordionItems,options);


</script>
</body>
</html>
