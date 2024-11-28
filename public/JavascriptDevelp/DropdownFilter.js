const ButtonFilter = document.querySelector('#ButtonFilter')
const FilterWindow = document.querySelector('#DropdownFilter')
const FilterRequest = document.querySelector('#FilterRequest')
const FilterOption = document.querySelectorAll('#FilterOption')

function ShowDropdown() {
    ButtonFilter.addEventListener('click', () => {
        if (FilterWindow.classList.contains('hidden')) {
            FilterWindow.classList.remove('hidden');
        } else {
            FilterWindow.classList.toggle('hidden');
        }
    })
}

FilterOption.forEach (FilterOption => {
    FilterOption.addEventListener('click', () => {
        FilterWindow.classList.toggle('hidden');
        FilterRequest.value = FilterOption.innerText;
        console.log(FilterRequest.value);
    })
})
