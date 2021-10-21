import React, { useEffect, useState } from "react";
import { Card, CardBody } from "reactstrap";
import { fetchAllEvents } from "api/event";
import { Link } from "react-router-dom";
import { dateMonth } from "utils/commonFunctions";
import "../../assets/css/dashboard/recentblog.css";

const UpcomingEvents = () => {
  const [data, setData] = useState([]);
  console.log(data);

  useEffect(() => {
    const fetchData = async () => {
      const allEvents = await fetchAllEvents();
      if (allEvents) {
        console.log(allEvents);
        setData(allEvents);
      }
    };
    fetchData();
  }, []);

  return (
    <>
      {data
      .map((event) => (
          <Link to={`/event/${event.eventId}`} key={event.eventId}>
          
          <Card className="blogcard shadow-lg mb-4" >
            <CardBody className="parent">
              <div className="date ">
                <h2>{dateMonth(event.startDate)}</h2>
              </div>
              <div className="contents">
                <h2 id="bold">
                  <span>{event.eventName}</span>
                </h2>
              </div>
            </CardBody>
          </Card>
          </Link>
        )
        ).slice(0, 3)}
    </>
  );
}

export default UpcomingEvents;
