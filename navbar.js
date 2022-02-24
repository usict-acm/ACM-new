console.log("hello world!!");

function unactive(){
    document.getElementById("home").style.color = "green";
    document.getElementById("blogs").style.color = "green";
    document.getElementById("events").style.color = "green";
    document.getElementById("why_join_us").style.color = "green";
    document.getElementById("clubs").style.color = "green";
    document.getElementById("sponsors").style.color = "green";
}

document.getElementById("home").onclick = function (e) {
    // e.preventDefault();
    unactive();
    document.getElementById("home").style.color = "#0397FE";
};

document.getElementById("blogs").onclick = function (e) {
    // e.preventDefault();
    unactive();
    document.getElementById("blogs").style.color = "#0397FE";
};

document.getElementById("events").onclick = function (e) {
    // e.preventDefault();
    unactive();
    document.getElementById("events").style.color = "#0397FE";
};

document.getElementById("why_join_us").onclick = function (e) {
    // e.preventDefault();
    unactive();
    document.getElementById("why_join_us").style.color = "#0397FE";
};

document.getElementById("clubs").onclick = function (e) {
    // e.preventDefault();
    unactive();
    document.getElementById("clubs").style.color = "#0397FE";
};

document.getElementById("sponsors").onclick = function (e) {
    // e.preventDefault();
    unactive();
    document.getElementById("sponsors").style.color = "#0397FE";
};