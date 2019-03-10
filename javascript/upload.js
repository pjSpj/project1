function setup(){
    var dropzone = select('#dropzone')
    dropzone.dragOver(highlight);
}

function highlight(){
    dropzone.style('background-color','grey');

}