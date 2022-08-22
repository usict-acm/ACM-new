import React, { useState, useEffect } from "react";
import { Button } from "reactstrap";
import "../../../assets/css/events/eventDetails.css";
import { formatDate } from "utils/commonFunctions";
import EventCountdown from "./EventCountdown";
import { registeredStudentDetails } from "api/event";

export default function DetailSidebar({ event }) {
  const [registerText, setRegisterText] = useState("Register Now");
  console.log(event?.sno);

  const handleClick = async () => {
    setRegisterText("Registered");
    var UserFetch = JSON.parse(localStorage.getItem("user")); /// fetching the whole user from localStorage
    var UserIdFetch = UserFetch.userId; /// fetching userId from the user object
    console.log(UserIdFetch);

    var event_Id = event?.eventId;

    console.log(event_Id);

    const userData = {
      id: UserIdFetch,
      eventId: event_Id,
    };

    const storeData = await registeredStudentDetails(userData);
    storeData();
  };
  return (
    <div className="detailSideBar">
      <div>
        <h2>{event?.eventName} </h2>
        <hr />
      </div>
      <div className="detailContainer">
        <div className="countdown_container">
          <EventCountdown event={event} />
        </div>

        <div className="dateAndTime ">
          <p>
            <i className="ni ni-calendar-grid-58 "></i>
            <span>
              Starts : {event?.startDate && formatDate(event?.startDate)}{" "}
            </span>
          </p>
          <p>
            <i className="ni ni-calendar-grid-58 "></i>
            <span>Ends : {event?.endDate && formatDate(event?.endDate)} </span>
          </p>
          {event?.time && (
            <p>
              <i className="bx bx-time "></i>
              <span>Time : {event?.time} </span>
            </p>
          )}
        </div>

        <div className="buttons ">
          {event?.regLink && (
            // <a href={event?.regLink} target="_blank" rel="noopener noreferrer">
            <Button
              className={"eventBtn" + event?.viewResource ? "mr-3" : ""}
              color="info"
              onClick={handleClick}
            >
              {registerText}
            </Button>
            // </a>
          )}
          {event?.viewResource && (
            <a
              href={event?.viewResource}
              target="_blank"
              rel="noopener noreferrer"
            >
              <Button className="eventBtn" color="info">
                Watch video
              </Button>
            </a>
          )}
        </div>
      </div>
    </div>
  );
}
