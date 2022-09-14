
// Add uk-video attribute to iframe. Stops video when modal closes. 
const modalContainers = document.getElementsByClassName('embed-container');
for (let i = 0; i < modalContainers.length; i++) {
    modalContainers[i].children[0].setAttribute('uk-video', '');
} 