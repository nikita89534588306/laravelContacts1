@extends('templates.main')
@section('content')
    <div class="control-menu row mt-3">
        <a href="{{route('contact.index')}}"><svg viewBox="0 0 32 32" width="50px" height="50px" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M13,26a1,1,0,0,1-.71-.29l-9-9a1,1,0,0,1,0-1.42l9-9a1,1,0,1,1,1.42,1.42L5.41,16l8.3,8.29a1,1,0,0,1,0,1.42A1,1,0,0,1,13,26Z"/><path d="M28,17H4a1,1,0,0,1,0-2H28a1,1,0,0,1,0,2Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg></a>
    </div>
    <div class="contactDetail-header row justify-content-center ">
        <div style="width:200px; height:200px; background-color: aqua;" class="img-contact rounded-circle border border-3">
            <img src="" alt="no-img">
        </div>
        <div class="contactDetail-helperPhoto text-center mt-3">
            Установить фотографию
        </div>  

        <form action='{{route("contact.store")}}' method='post' class="row justify-content-center mt-4">
            @csrf
            <div class="row mb-3">
                <div class="col-1">
                <?xml version="1.0" encoding="iso-8859-1"?><!-- Generator: Adobe Illustrator 18.1.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  --><svg version="1.1" with='32.00' height='32.00'id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 78 78" style="enable-background:new 0 0 78 78;" xml:space="preserve"><g id="_x37_7_Essential_Icons_70_">	<path id="User" d="M48.3,41.2C54.8,37.2,59,29.3,59,22c0-10.4-8.5-22-20-22S19,11.6,19,22c0,7.3,4.2,15.2,10.7,19.2		C14.3,45.3,3,59.4,3,76c0,1.1,0.9,2,2,2h68c1.1,0,2-0.9,2-2C75,59.4,63.7,45.3,48.3,41.2z M23,22c0-10.3,8.5-18,16-18s16,7.7,16,18		s-8.5,18-16,18S23,32.3,23,22z M7.1,74c1-16.7,15-30,31.9-30s30.9,13.3,31.9,30H7.1z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                </div>
                <div class="col-11">
                    <input type="text" class="form-control mb-3" placeholder="Имя" name="name" >
                    <input type="text" class="form-control mb-3" placeholder="Фамилия" name="surname" >     
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-1">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 with='32.00' height='32.00' viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g>	<path d="M256,32c123.5,0,224,100.5,224,224S379.5,480,256,480S32,379.5,32,256S132.5,32,256,32 M256,0C114.625,0,0,114.625,0,256		s114.625,256,256,256s256-114.625,256-256S397.375,0,256,0L256,0z M398.719,341.594l-1.438-4.375		c-3.375-10.062-14.5-20.562-24.75-23.375L334.688,303.5c-10.25-2.781-24.875,0.969-32.405,8.5l-13.688,13.688		c-49.75-13.469-88.781-52.5-102.219-102.25l13.688-13.688c7.5-7.5,11.25-22.125,8.469-32.406L198.219,139.5		c-2.781-10.25-13.344-21.375-23.406-24.75l-4.313-1.438c-10.094-3.375-24.5,0.031-32,7.563l-20.5,20.5		c-3.656,3.625-6,14.031-6,14.063c-0.688,65.063,24.813,127.719,70.813,173.75c45.875,45.875,108.313,71.345,173.156,70.781		c0.344,0,11.063-2.281,14.719-5.938l20.5-20.5C398.688,366.062,402.062,351.656,398.719,341.594z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                </div>
                <div class="col-11 phones_input">
                    <input type="phone" name="phone_1" id='phone_1' class="form-control mb-3 phone_input" placeholder="Номер телефона">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
    </div>
@endsection

@section('sctipts')
<script src="/js/test.js"></script>
<script>
    var phonesInput = document.querySelector('.phones_input');
    var phoneInput = phonesInput.lastElementChild;

    var maskForPhoneNumber = [
            {  mask: '0 (000) 000-00-00', startsWith: '8' },
            {  mask: '+0 (000) 000-00-00', startsWith: '7' },
            {  mask: '*0 (000) 000-00-00', startsWith: '+' },
            {  mask: '(000) 000-00-00', startsWith: '' },
    ]
    function funcSelectMask(appended, dynamicMasked) {
        var number = (dynamicMasked.value + appended).replace(/\s/g,'');

        return dynamicMasked.compiledMasks.find(function (m) {
            return number.indexOf(m.startsWith) === 0;
        });
    }
    phonesInput.mask = IMask(phoneInput, {
        mask: maskForPhoneNumber,
        dispatch: funcSelectMask
    })


    function createInput(){
        if(this.value !== ''){
            this.removeEventListener('input', createInput);

            var inputId = 'phone_id' + Date.now();

            newInputPhone = document.createElement('input')
            newInputPhone.name = inputId;
            newInputPhone.placeholder = 'Номер телефона';
            newInputPhone.type = 'phone';
            newInputPhone.classList.add("form-control");
            newInputPhone.classList.add("mb-3");

            newInputPhone.newMask = IMask(newInputPhone, {
                mask: maskForPhoneNumber,
                dispatch: funcSelectMask
            })


            
            phonesInput.appendChild(newInputPhone);
            
            newInputPhone.addEventListener('input', createInput)
            this.addEventListener('input', deleteInput)

        }    
    }
    function deleteInput(){ if(this.value === '') { this.mask.destroy(); this.remove()};}

    phoneInput.addEventListener('input', createInput)


</script>
@endsection