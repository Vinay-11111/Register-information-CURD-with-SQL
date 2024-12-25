function validateForm() {
    var x=document.forms["myForm"]["username"].value;
    if (x==null || x=="")
    {
        alert("User Name must be filled out");
        return false;
    }
    var a=document.forms["myForm"]["mobilenumber"].value;
    if (a==null || a=="")
    {
        alert("Mobile Number must be filled out");
        return false;
    }
    var b=document.forms["myForm"]["email"].value;
    if (b==null || b=="")
    {
        alert("Email must be filled out");
        return false;
    }
    var y=document.forms["myForm"]["password"].value;
    if (y==null || y=="") {
        alert("Password name must be filled out");
        return false;
    }
    }



// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2023 22:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();

// Find the distance between now and the count down date
var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Output the result in an element with id="demo"
document.getElementById("demo").innerHTML = hours + "h "
+ minutes + "m " + seconds + "s ";

// If the count down is over, write some text 
if (distance < 0) {
clearInterval(x);
document.getElementById("demo").innerHTML = "EXPIRED";
}
}, 1000);


