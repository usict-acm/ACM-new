// Collapsible
var coll = document.getElementsByClassName("#collapsible");



for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });
}

function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}

//Gets the first message
function firstBotMessage() {
    let firstMessage = "Hi there! Welcome to the ACM website. How can I help you today?"
    document.getElementById("botStarterMessage") = '<p class="botText"><span>' + firstMessage + '</span></p>';

    const time=getTime();

    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);
}

firstBotMessage();

// Retrieves the response
function getHardResponse(userText) {
    let botResponse = getBotResponse(userText);
    let botHtml = '<p class="botText"><span>' + botResponse + '</span><span class="timestamp small-text">' + getTime() + '</span></p>'
    $("#chatbox").append(botHtml);

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}


//Gets the  text from the input box and processes it
function getResponse() {
    let userText = $("#textInput").val();

    if (userText == "") {
        userText = "I love ACM!";
    }
   
    let userHtml = '<p class="userText"><span>' + userText + '</span><span class="timestamp get-text">' + getTime() + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

// Handles sending text via button clicks
// function buttonSendText(sampleText) {
//     let userHtml = '<p class="userText"><span>' + sampleText + "I am unable to answer your query at the moment as I am currently under the learning phase. Sorry for the inconvenience caused. Please email us your query at :<a href=https://acm@ipu.ac.in'>Gmail</a>  "  +'</span></p>'+getTime();

//     $("#textInput").val("");
//     $("#chatbox").append(userHtml);
//     document.getElementById("chat-bar-bottom").scrollIntoView(true);

//     //Uncomment this if you want the bot to respond to this buttonSendText event
//     setTimeout(() => {
//         getHardResponse(sampleText);
//     }, 1000)
// }

function sendButton() {
    getResponse();
}

// function heartButton() {
//     buttonSendText("ACM is love")
// }

// Press enter to send a message
$("#textInput").keypress(function(e) {
    if (e.which == 13) {
        getResponse();
    }
});