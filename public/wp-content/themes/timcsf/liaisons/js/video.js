let vid = document.getElementById("myVideo");
let count=0;
function control()
{
    count++;
    if(count%2==1)
        pauseVid();
    esle
    playVid();
}
function playVid() {
    vid.play();
}
function pauseVid() {
    vid.pause();
}
vid.autoplay = true;
vid.load();