const SubmitTrue = document.querySelector('#SubmitCheckbox');
const SubmitButton = document.querySelector('#SubmitButton');

function SubmitEnabled() {
    console.log('masuk')
    if (SubmitTrue.checked) {
        console.log('masuk Submit True')
        SubmitButton.disabled = false;
        if (SubmitButton.classList.contains('disabled-submit-button')) {
        console.log('masuk Contain')
            SubmitButton.classList.replace('disabled-submit-button', 'enabled-submit-button');
        } else {
            console.log('masuk Else')
            SubmitButton.classList.toggle('enabled-submit-button');
        }
    } else {
        console.log('masuk Submit False')
        SubmitButton.disabled = true;
        if (SubmitButton.classList.contains('enabled-submit-button')) {
            SubmitButton.classList.replace('enabled-submit-button', 'disabled-submit-button');
        } else {
            SubmitButton.classList.toggle('enabled-submit-button');
        }
    }
}
