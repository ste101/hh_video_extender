// NodeList forEach Implementation
if (window.NodeList && !NodeList.prototype.forEach){
    NodeList.prototype.forEach = Array.prototype.forEach;
}

// Video Defer Loading
window.addEventListener("load", function(e){
    var vids = document.querySelectorAll(".video-defer");

    vids.forEach(function(el){
        el.src = el.dataset.src;
    });
});
