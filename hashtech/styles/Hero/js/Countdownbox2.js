const countdownTimer = () => {
    const [remainingTime, setRemainingTime] = useState({
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0,
    });
  
    useEffect(() => {
      const targetDate = new Date('2023-05-15T16:28:00');
  
      const interval = setInterval(() => {
        const now = new Date();
        const difference = targetDate.getTime() - now.getTime();
  
        if (difference > 0) {
          const days = Math.floor(difference / (1000 * 60 * 60 * 24));
          const hours = Math.floor((difference / (1000 * 60 * 60)) % 24);
          const minutes = Math.floor((difference / 1000 / 60) % 60);
          const seconds = Math.floor((difference / 1000) % 60);
  
          setRemainingTime({
            days,
            hours,
            minutes,
            seconds,
          });
        } else {
          clearInterval(interval);
        }
      }, 1000);
  
      return () => clearInterval(interval);
    }, []);
  
    const { days, hours, minutes, seconds } = remainingTime;
  
    const timerDiv = document.createElement('div');
    timerDiv.classList.add('timer');
  
    const daysDiv = document.createElement('div');
    const daysTitle = document.createElement('p');
    const daysValue = document.createElement('h2');
    daysTitle.textContent = 'Days';
    daysValue.classList.add('neon');
    daysValue.textContent = days;
    daysDiv.appendChild(daysTitle);
    daysDiv.appendChild(daysValue);
    timerDiv.appendChild(daysDiv);
  
    const hoursDiv = document.createElement('div');
    const hoursTitle = document.createElement('p');
    const hoursValue = document.createElement('h2');
    hoursTitle.textContent = 'Hours';
    hoursValue.classList.add('neon');
    hoursValue.textContent = hours;
    hoursDiv.appendChild(hoursTitle);
    hoursDiv.appendChild(hoursValue);
    timerDiv.appendChild(hoursDiv);
  
    const minutesDiv = document.createElement('div');
    const minutesTitle = document.createElement('p');
    const minutesValue = document.createElement('h2');
    minutesTitle.textContent = 'Min';
    minutesValue.classList.add('neon');
    minutesValue.textContent = minutes;
    minutesDiv.appendChild(minutesTitle);
    minutesDiv.appendChild(minutesValue);
    timerDiv.appendChild(minutesDiv);
  
    const secondsDiv = document.createElement('div');
    const secondsTitle = document.createElement('p');
    const secondsValue = document.createElement('h2');
    secondsTitle.textContent = 'Sec';
    secondsValue.classList.add('neon');
    secondsValue.textContent = seconds;
    secondsDiv.appendChild(secondsTitle);
    secondsDiv.appendChild(secondsValue);
    timerDiv.appendChild(secondsDiv);
  
    return timerDiv;
  };
  