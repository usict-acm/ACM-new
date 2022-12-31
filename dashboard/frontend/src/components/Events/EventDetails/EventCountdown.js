import React, { useState, useEffect } from "react";
import moment from "moment";
import ReactHtmlParser from "react-html-parser";

const EventCountdown = ({ event }) => {
  const [, rerender] = useState(false),
    [statusText, setStatusText] = useState("<h1>Loading Event...</h1>"),
    [targetTime, setTargetTime] = useState(null),
    timeBetween = moment.duration(targetTime?.diff());

  useEffect(() => {
    if (event) {
      if (new Date(event?.startDate) > new Date()) {
        setStatusText("<h3>STARTS IN :</h3>");
        setTargetTime(moment(event?.startDate));
      } else {
        if (new Date(event?.endDate) > new Date()) {
          setStatusText("<h3>ENDS IN :</h3>");
          setTargetTime(moment(event?.endDate));
        } else {
          setStatusText("<h1>REGISTRATION CLOSED</h1>");
          setTargetTime(null);
        }
      }
    }
    return () => {
      setStatusText("");
      setTargetTime(null);
    };
  }, [event]);

  useEffect(() => {
    const interval = setInterval(() => {
      if (
        timeBetween.days() <= 0 &&
        timeBetween.hours() <= 0 &&
        timeBetween.minutes() <= 0 &&
        timeBetween.seconds() <= 0
      ) {
        if (
          new Date(event?.endDate) > new Date(event?.startDate) &&
          statusText === "<h3>STARTS IN :</h3>"
        ) {
          setStatusText("<h3>ENDS IN :</h3>");
          setTargetTime(moment(event?.endDate));
        } else {
          clearInterval(interval);
        }
      } else {
        rerender((p) => !p);
      }
    }, 1000);

    return () => clearInterval(interval);
  }, [statusText, timeBetween, event]);

  return (
    <>
      {ReactHtmlParser(statusText)}
      {event && targetTime && (
        <div className="countdown">
          <div className="countsContainer">
            <h1>{timeBetween.days()} </h1>
            <h4>Days</h4>
          </div>
          <div className="countsContainer">
            <h1>{timeBetween.hours()}</h1>
            <h4>Hours</h4>
          </div>
          <div className="countsContainer">
            <h1>{timeBetween.minutes()}</h1>
            <h4>Min</h4>
          </div>
          <div className="countsContainer">
            <h1>{moment.duration(targetTime.diff(moment.now())).seconds()}</h1>
            <h4>Sec</h4>
          </div>
        </div>
      )}
    </>
  );
};

export default EventCountdown;
