jQuery(document).ready(function() {
    // Initial setup
    $('#global-bpm').text(Tone.Transport.bpm.value);

    // Event handlers
    $('#transport-play-button').click(function() {
        Tone.Transport.start();
    });
    
    $('#transport-stop-button').click(function() {
         Tone.Transport.stop();
    });
    
    $('#transport-back-button').click(function() {
    });
    
    $('#transport-forward-button').click(function() {
    });

    // Utility functions
    function updateTime(){
        requestAnimationFrame(updateTime)
        document.querySelector('#transport-time').textContent = Tone.Transport.position;
    }
    
    // Kick off functions
    updateTime();
});
