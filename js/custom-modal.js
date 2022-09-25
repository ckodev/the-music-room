
// Add uk-video attribute to iframe. Stops video when modal closes. 
const modalContainers = document.getElementsByClassName('embed-container');
for (let i = 0; i < modalContainers.length; i++) {
    modalContainers[i].children[0].setAttribute('uk-video', '');
} 

const collection = document.getElementsByClassName("uk-flex-top");
const player = document.getElementsByClassName('player');
    for (i = 0; i < collection.length; i++) {
        UIkit.util.on(collection[i], 'hide', function () {
            console.log('success');
            for (k = 0; k < player.length; k++) {
                player[k].pause();
            }
        });
    }

console.log('hello world');