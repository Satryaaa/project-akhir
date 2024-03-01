function previewImage(input) {
    const file = input.files[0];
    const label = input.parentElement;
    const originalContainer = document.getElementById('preview-container');
    const originalContent = document.getElementById('original-content');
    label.style.height = 'auto';
    label.style.width = 'auto';

    if(file){
        const reader = new FileReader();
        reader.onload = function (e){
            originalContainer.classList.remove('hidden');
            originalContent.classList.add('hidden');
            const previewImage = document.getElementById('priview-image');
            previewImage.src = e.target.result;

            const maxWidth = 300;
            const maxHeight = 400;

            const image = new image();
            image.src = e.target.result;
            image.onload = function() {
                const aspectRatio = image.width / image.height;
                if (aspectRatio > 1 ){
                    previewImage.width = maxWidth;
                    previewImage.height = maxWidth / aspectRatio;
                } else {
                    previewImage.height = maxHeight;
                    previewImage.width = maxHeight / aspectRatio;

                }
            };
        };
        reader.readAsDataURL(file);
    } else {
        label.style.height = 'auto';
        label.style.width = 'auto';
        originalContainer.classList.add('hidden');
        originalContainer.classList.remove('hidden');

    }

}

