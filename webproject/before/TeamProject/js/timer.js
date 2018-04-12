
// Set the date we're counting down to
var countDownDate = new Date("Sep 5, 2200 21:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    if (hours<10){
                    hours="0"+hours;
                }
    if (minutes<10){
                    minutes="0"+minutes;
                }
    if (seconds<10){
                    seconds="0"+seconds;
                }
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + " : " + minutes + " : " + seconds
    
    // If the count down is over, write some text 
     if(hours>9){
                    document.getElementsByClassName("clock")[0].innerHTML = "끝";
                }else{
                document.getElementsByClassName("clock")[0].innerHTML = hours + " : " +
                    minutes + " : " + seconds}
    if(minutes>9){
                    document.getElementsByClassName("clock")[0].innerHTML = "끝";
                }else{
                document.getElementsByClassName("clock")[0].innerHTML = hours + " : " +
                    minutes + " : " + seconds}
    if(seconds>9){
                    document.getElementsByClassName("clock")[0].innerHTML = "끝";
                }else{
                document.getElementsByClassName("clock")[0].innerHTML = hours + " : " +
                    minutes + " : " + seconds}
}, 1000);
