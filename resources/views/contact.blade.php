<!doctype html>
<html lang="{{app()->getLocale()}}">
@include('layouts.head')
<body>
@include('layouts.header')
<section class="top-body flex flex-col items-center justify-center">
    <img class="relative z-10" src="{{asset('assets/img/req.svg')}}" alt="">
    <p class="relative z-10 w-5/6 text-3xl text-white text-center xl:text-5xl ">{{__('Request Form')}}</p>
    <div></div>
</section>
<section class="form px-6 pb-8 bg-[#EBFCFF] xl:px-0">
    <div class="xl:w-[45rem] xl:mx-auto">
        <div class="buttons form-type font-semibold flex items-center flex-col gap-y-6 xl:flex xl:flex-row pt-10 xl:justify-center xl:gap-x-6">
            <a class="active" id="request-form-button" href="/">{{__('Request Form')}}</a>
            <a class="" id="send-email-form-button" href="{{route('contact')}}">{{__('Send E-mail')}}</a>
        </div>
        <div class="form">
        @include('components.forms.send-email-form')
        @include('components.forms.request-form')
        </div>
        <div class="buttons font-semibold flex items-center flex-col gap-y-6 xl:flex xl:flex-row mt-10 xl:justify-center xl:gap-x-6">
            <a href="/">{{__('Back')}}</a>
            <a id="send-button" href="{{route('contact')}}">{{__('Send')}}</a>
        </div>
    </div>
</section>
@include('layouts.footer')
@include('layouts.scripts')
<script>
    const lang = document.querySelector('html').getAttribute('lang');
    const years = [
        new Date().getFullYear(),
        new Date().getFullYear() + 1,
        new Date().getFullYear() + 2,
    ]
    const months = [
        {
            id:1,
            name: {
                az: 'Yanvar',
                en: 'January',
                ru: 'Январь'
            }
        },
        {
            id:2,
            name: {
                az: 'Fevral',
                en: 'February',
                ru: 'Февраль'
            }
        },
        {
            id:3,
            name: {
                az: 'Mart',
                en: 'March',
                ru: 'Март'
            }
        },
        {
            id:4,
            name: {
                az: 'Aprel',
                en: 'April',
                ru: 'Апрель'
            }
        },
        {
            id:5,
            name: {
                az: 'May',
                en: 'May',
                ru: 'Май'
            }
        },
        {
            id:6,
            name: {
                az: 'Iyun',
                en: 'June',
                ru: 'Июнь'
            }
        },
        {
            id:7,
            name: {
                az: 'Iyul',
                en: 'Jule',
                ru: 'Июль'
            }
        },
        {
            id:8,
            name: {
                az: 'Avqust',
                en: 'August',
                ru: 'Август'
            }
        },
        {
            id:9,
            name: {
                az: 'Sentyabr',
                en: 'September',
                ru: 'Сентябрь'
            }
        },
        {
            id:10,
            name: {
                az: 'Oktyabr',
                en: 'October',
                ru: 'Октябрь'
            }
        },
        {
            id:11,
            name: {
                az: 'Noyabr',
                en: 'November',
                ru: 'Ноябрь'
            }
        },
        {
            id:12,
            name: {
                az: 'Dekabr',
                en: 'December',
                ru: 'Декабрь'
            }
        },
    ]
    const daySelect = document.querySelector('select[name="day"]');
    const monthSelect = document.querySelector('select[name="month"]');
    const yearSelect = document.querySelector('select[name="year"]');
    setDays(31);
    setMonths();
    setYears();
    function setDays(monthIndex){
        for(let i=1;i <= monthIndex; i++){
            daySelect.innerHTML += `<option value="${i}">${i}</option>`
        }
    }
    function setMonths(){
        for(let i= 0; i < months.length; i++){
            monthSelect.innerHTML += `<option value="${months[i].id}">${months[i].name[lang]}</option>`
        }
    }
    function setYears(){
        for(let i = 0; i<years.length; i++){
            yearSelect.innerHTML += `<option value="${years[i]}">${years[i]}</option>`
        }
    }
    document.querySelector('#send-button').addEventListener('click', (e) => {
        e.preventDefault();
        const form = document.querySelector('form:not(.hidden)');
        form.submit();
    })
    let requestFormButton = document.querySelector('#request-form-button');
    let senEmailButton = document.querySelector('#send-email-form-button');
    requestFormButton.addEventListener('click' ,(e)=> {
        e.preventDefault();
        if(!e.target.classList.contains('active')){
            e.target.classList.add('active')
            senEmailButton.classList.remove('active')
            document.querySelector('#send-email-form').classList.add('hidden')
            document.querySelector('#request-form').classList.remove('hidden')
        }
    })
    senEmailButton.addEventListener('click', (e)=>{
        e.preventDefault();
        if(!e.target.classList.contains('active')){
            e.target.classList.add('active')
            requestFormButton.classList.remove('active')
            document.querySelector('#send-email-form').classList.remove('hidden')
            document.querySelector('#request-form').classList.add('hidden')
        }

    })
</script>

</body>
</html>
