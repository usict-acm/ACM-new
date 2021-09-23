import React from "react";
import {
  Button,
  Card,
  CardHeader,
  Row,
  Col,
  CardImg,
  CardText,
} from "reactstrap";
import "assets/css/events/allEvents.css";
import { useHistory } from "react-router";
import data from "./AllEventData";

console.log(data);

export default function EventCard(props) {
const history = useHistory()

  return (
    <div>
      <Row xs={1} md={2} lg={2} xl={3}>
        {data.map((event, i) => {
          return (
            <Col className="p-2">
              <Card className="eventCard" key={i}>
                <CardImg className="banner" src={event.banner}></CardImg>
                <CardHeader className="py-2 eventContent">
                  <h3 className="eventHeading py-3">{event.heading}</h3>
                  <CardText className="pt-3 eventText">
                    <span>
                      <i className="bx bx-calendar"></i> Starts On :{" "}
                      {event.date}
                    </span>
                    <br />
                    <span>
                      <i className="bx bxs-timer"></i> Time : {event.time}
                    </span>{" "}
                    <br />
                    <span>
                      <i className="bx bxs-location-plus"></i> Venue :{" "}
                      {event.venue}
                    </span>
                    <br />
                  </CardText>
                </CardHeader>
                <div className="text-right eventDetails p-4 ">
                  <Button
                  className="eventBtn"
                  onClick={()=> history.push(`/event/${event.eventId}`)}
                  >Details
                  </Button>
                </div>
              </Card>
            </Col>
          );
        })}
      </Row>
    </div>
  );
}
