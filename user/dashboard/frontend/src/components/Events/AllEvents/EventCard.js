import React from "react";
import { Button, Card, CardHeader, Col, CardImg, CardText } from "reactstrap";
import "assets/css/events/allEvents.css";
import { Link } from "react-router-dom";

export default function EventCard({ event, detailsLink }) {
  return (
    <Col className="p-2">
      <Card className="eventCard">
        <CardImg className="banner" src={event.banner}></CardImg>
        <CardHeader className="py-2 eventContent">
          <h3 className="eventHeading py-3">{event.heading}</h3>
          <CardText className="pt-3 eventText">
            <span>
              <i className="bx bx-calendar"></i> Starts On : {event.date}
            </span>
            <br />
            <span>
              <i className="bx bxs-timer"></i> Time : {event.time}
            </span>
            <br />
            <span>
              <i className="bx bxs-location-plus"></i> Venue : {event.venue}
            </span>
            <br />
          </CardText>
        </CardHeader>
        <div className="text-right eventDetails p-2 ">
          <Link to={detailsLink} className="btn btn-secondary eventBtn m-1">
            Details
          </Link>
          {event.scoreable && <Button className="eventBtn m-1">Results</Button>}
        </div>
      </Card>
    </Col>
  );
}
