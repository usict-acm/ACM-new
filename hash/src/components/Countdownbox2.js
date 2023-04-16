import React, { useState, useEffect } from 'react';

const CountdownTimer = () => {
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

  return (
    <div className='timer'>
    <div><p>Days</p> <h2 className='neon'>{days}</h2></div>   
    <div><p>Hours</p> <h2  className='neon'>{hours}</h2></div>
    <div><p>Min</p> <h2  className='neon'>{minutes}</h2></div>
    <div><p>Sec</p> <h2  className='neon'>{seconds}</h2></div>
    </div>
  );
};


export default CountdownTimer;
