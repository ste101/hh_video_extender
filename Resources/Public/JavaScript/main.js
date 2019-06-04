// NodeList forEach Implementation
if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = Array.prototype.forEach;
}

// Video Defer Loading
window.addEventListener("load", function(e) {
    var vidsContainer = document.querySelectorAll(".video-embed");

    vidsContainer.forEach(function(vidC) {
        var vid = vidC.querySelector(".video-defer");

        if(vid){
            vid.src = vid.dataset.src;
            vidC.classList.add("loaded");
        }
    });
});
