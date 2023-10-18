<form class="" id="request-form" action="{{route('request-form')}}" method="POST">
    <div class="py-4">
        <p class="text-[#0C517F] text-center font-semibold xl:text-4xl">{{__('Request Form')}}</p>
        <p class="text-[#2A3D52] text-center">{{__('Fill in the table of the letter and we will answer you with a price offer')}}</p>
    </div>
    @csrf
    <input type="hidden" name="form-title" value="">

    <div class="form-title-list bg-white mb-2 border border-[#3DBCD3] solid">
        <div class="form-title-select border px-4 mb-4">
            <p class="underline">{{__('Request (choose below)')}}</p>
{{--            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <path d="M11 1L5.99972 6L1 1" stroke="#3DBCD3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--            </svg>--}}
        </div>
        <div class="px-4 title-list">
            <div class="form-title">
                <span>{{__('Tourist guide')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Tour consultancy')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Airport transfer')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Special delivery')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Accommodation')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Restaurant reservations')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Event organization')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Half-day city tour Baku')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Full-day tour Baku')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Absheron tour')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Gobustan&mud volcanoes')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Day trip to other regions')}}</span>
            </div>
            <div class="form-title">
                <span>{{__('Long-trip in Azerbaijan')}}</span>
            </div>
            <div class="form-title xl:col-span-2">
                <span>{{__('Full service (including all above)')}}</span>
            </div>
        </div>
    </div>
    <input class="py-3  w-full outline-none border-[#3DBCD3] rounded-full" type="text" name="email" placeholder="{{__('Your E-mail')}}">
    <input class="py-3 w-full mt-3 mb-5 outline-none border-[#3DBCD3] rounded-full" type="text" name="mobile" placeholder="{{__('Mobile Number (Whatsapp)')}}">
    <div class="xl:p-6 p-3 border border-[#3DBCD3] bg-white solid rounded-2xl">
        <div>
            <p class="text-sm font-bold mb-1 text-[#2A3D52] font-semibold">{{__('Total number of visitors/participants:')}}</p>
            <div class=" grid grid-cols-2 my-4 gap-x-6 gap-y-4 xl:grid-cols-3 xl:w-3/5">
                <select class="rounded-full border-slate-300 text-slate-400" name="adult" id="">
                    <option value="">Adult</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <select class="rounded-full border-slate-300 text-slate-400" name="child" id="">
                    <option value="">Child</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <div class="ml-4 flex justify-center items-center gap-x-2">
                    <span class="font-bold text-sm">{{__('Total:')}}</span>
                    <input class=" text-center rounded-full border-slate-300 w-24 focus:outline-none" type="text" name="total">
                </div>
            </div>
            <p class="text-sm font-bold mb-1 text-[#2A3D52] font-semibold">{{__('Expected date for service delivery')}}</p>
            <div class="flex gap-x-0.5 my-4 xl:gap-x-6 justify-between xl:justify-start">
                <select class="rounded-full border-slate-300 text-slate-400" name="day" id="">
                    <option value="0">{{__('Day')}}</option>
                </select>
                <select class="rounded-full border-slate-300 text-slate-400" name="month" id="">
                    <option value="0">{{__('Month')}}</option>
                </select>
                <select class="rounded-full border-slate-300 text-slate-400" name="year" id="">
                    <option value="0">{{__('Year')}}</option>
                </select>
            </div>

            <div>
                <p class="text-sm font-bold mb-1 text-[#2A3D52] font-semibold">{{__('Expected date for service delivery')}}</p>
                <div class="grid grid-cols-2 xl:flex xl:gap-x-6">
                    <div class="">
                        <input class="border border-[#7EEBFF] checked:bg-[#7EEBFF]" type="radio" name="class" value="{{__('Budget')}}">
                        <span class="text-sm">{{__('Budget')}}</span>
                    </div>
                    <div class="">
                        <input class="border border-[#7EEBFF]  checked:bg-[#7EEBFF]" type="radio" name="class" value="{{__('Comfort')}}">
                        <span class="text-sm">{{__('Comfort')}}</span>
                    </div>
                    <div class="">
                        <input class="border border-[#7EEBFF]  checked:bg-[#7EEBFF]" type="radio" name="class" value="{{__('Luxury')}}">
                        <span class="text-sm">{{__('Luxury')}}</span>
                    </div>
                    <div class="">
                        <input class="border border-[#7EEBFF]  checked:bg-[#7EEBFF]" type="radio" name="class" value="{{__('Individual')}}">
                        <span class="text-sm">{{__('Individual')}}</span>
                    </div>
                    <div class="col-span-2">
                        <input class="border border-[#7EEBFF]  checked:bg-[#7EEBFF]" type="radio" name="class" value="{{__('Group (ready to join others)')}}">
                        <span class="text-sm">{{__('Group (ready to join others)')}}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
<script>
    const titleSelect = document.querySelector('.form-title-select');
    const titleList = document.querySelector('.form-title-list');

    // titleSelect.addEventListener('click', (e) => {
    //     titleList.classList.toggle('hidden');
    //     titleSelect.classList.toggle('open');
    // })
    document.querySelectorAll('.form-title').forEach((value,key) => {
        value.addEventListener('click', () => {
              document.querySelectorAll('.form-title.active').forEach(async (i,j)=> {
               await i.classList.remove('active')
            })
            value.classList.add('active');
            titleSelect.querySelector('p').innerText = value.querySelector('span').textContent;
            document.querySelector('input[name="form-title"]').value = value.querySelector('span').textContent;
        })
    })
</script>
