(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;

    
    const countDown = new Date("may 29,  2023 00:00:00").getTime(),
        x = setInterval(function() {    
  
          const now = new Date().getTime(),
                distance = countDown - now;
  
            document.getElementById("days").innerText = Math.floor(distance / (day)) ,
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
  
            if (distance < 0) {
              document.getElementById("days").innerText = "00",
              document.getElementById("hours").innerText = "00",
              document.getElementById("minutes").innerText = "00",
              document.getElementById("seconds").innerText = "00";
              clearInterval(x);
            }
        }, 0)
    }());