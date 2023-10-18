<form class="hidden" id="send-email-form" action="{{route('send-email-form')}}" method="POST">
    <div class="py-4">
        <p class="text-[#0C517F] text-center font-semibold xl:text-4xl">{{__('Send E-mail')}}</p>
        <p class="text-[#2A3D52] text-center">{{__('Fill in the table of the letter and we will answer you with a price offer')}}</p>
    </div>
    @csrf
    <input class="py-3 w-full outline-none border-[#3DBCD3] rounded-full" type="text" name="name" placeholder="{{__('Head of Letter')}}">
    <input class="py-3 mt-3 mb-5 w-full outline-none border-[#3DBCD3] rounded-full" type="text" name="email" placeholder="{{__('Your E-mail')}}">
    <textarea class="py-3 mt-3 mb-5 w-full outline-none border-[#3DBCD3] rounded-2xl" name="text" rows="4" placeholder="{{__('Write your Letter here')}}"></textarea>
</form>
