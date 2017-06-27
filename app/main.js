// Get elements as variables 
var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");
var startButton = document.getElementById('startbtn');






startButton.addEventListener("click", function(){ 
 	var totalSeconds = 0;
setInterval(setTime, 1000);

function setTime()
{
    ++totalSeconds;
    secondsLabel.innerHTML = pad(totalSeconds%60);
    minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
}

function pad(val)
{
    var valString = val + "";
    if(valString.length < 2)
    {
        return "0" + valString;
    }
    else
    {
        return valString;
    }
}


console.log('hello from startreset'); 
})






//timer function
// var totalSeconds = 0;
// // setInterval(setTime, 1000);

// function setTime()
// {
//     ++totalSeconds;
//     secondsLabel.innerHTML = pad(totalSeconds%60);
//     minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
// }

// function pad(val)
// {
//     var valString = val + "";
//     if(valString.length < 2)
//     {
//         return "0" + valString;
//     }
//     else
//     {
//         return valString;
//     }
// }