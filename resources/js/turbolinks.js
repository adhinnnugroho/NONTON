var Turbolinks = require("turbolinks")
Turbolinks.start()

document.addEventListener("turbolinks:load", function(event) {
    Livewire.rescan()
});

$(document).on('turbo:render', function(){
    if(window.myChart instanceof Chart)
    {
    window.myChart.clear();
    }
    UnobtrusiveFlash.showFlashFromCookies()
})
