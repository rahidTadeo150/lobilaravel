const ImageUpload = document.querySelector('#FotoInput')
const ImageBox = document.querySelector('#ImagePreview')
const DescriptionFileSize = document.querySelector('#DescSize')


ImageUpload.addEventListener('change', function ()
{
    const foto = this.files[0]
    console.log(foto);
    const readImage = new FileReader();
    readImage.onload = () => {
        const imageUrl = readImage.result;
        ImageBox.src = imageUrl;
        ImageBox.classList.remove('hidden');
        var FileSizeOnKB = parseFloat(foto.size);
        var FileSizeOnMB = FileSizeOnKB/1000000;
        DescriptionFileSize.innerHTML = FileSizeOnMB.toFixed(1);

    }
    readImage.readAsDataURL(foto);
})






