
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