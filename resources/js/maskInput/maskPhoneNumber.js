
var phonesInput = document.querySelector('.phones_input');
var phoneInput = phonesInput.lastElementChild;

var maskForPhoneNumber = [
        {  mask: '0 (000) 000-00-00', startsWith: '8' },
        {  mask: '+0 (000) 000-00-00', startsWith: '7' },
        {  mask: '*0 (000) 000-00-00', startsWith: '+' },
        {  mask: '(000) 000-00-00', startsWith: '12345690'},
]
function funcSelectMask(appended, dynamicMasked) {

    var number = (dynamicMasked.value + appended).replace(/\s/g,'');
    console.log(number)
    return dynamicMasked.compiledMasks.find(function (m) {
        for (let rule of m.startsWith) {
            
            if(number.indexOf(rule) === 0) return true
            console.log(number.indexOf(rule), rule)
        }
        return false;

    });
}
phoneInput.mask = IMask(phoneInput, {
    mask: maskForPhoneNumber,
    // dispatch: funcSelectMask
})


function createInput(){
    if(this.value !== '' && this.value !== '('){
        this.removeEventListener('input', createInput);

        var inputId = 'phone_id' + Date.now();

        var newInputPhone = document.createElement('input')
        newInputPhone.name = inputId;
        newInputPhone.placeholder = 'Номер телефона';
        newInputPhone.type = 'phone';
        newInputPhone.classList.add("form-control");
        newInputPhone.classList.add("mb-3");

        newInputPhone.mask = IMask(newInputPhone, {
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
