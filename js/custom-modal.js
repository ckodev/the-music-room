
function openYoutube(event) {

    if (event.target.classList.contains('play-example-container')) {
    
        if (document.querySelector('#client-list div.open') !== null) {
            document.querySelector('#client-list div.open').classList.remove('open');

        } else {
            event.target.classList.add('open');
        } 
    } 
}
const youtubeOpen = document.getElementById("client-list");
youtubeOpen.addEventListener("click", openYoutube, false);


// Add uk-video attribute to iframe. Stops video when modal closes. 
const modalContainers = document.getElementsByClassName('embed-container');
for (let i = 0; i < modalContainers.length; i++) {
    modalContainers[i].children[0].setAttribute('uk-video', '');
  }