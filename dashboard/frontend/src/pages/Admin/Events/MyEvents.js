import EventCard from "components/Events/AllEvents/EventCard";
import React, { useEffect, useState } from "react";
import { CardHeader, CardBody, Container, Row, ButtonGroup, Button } from "reactstrap";
import eventsData from "../../../components/Events/AllEvents/AllEventData";

export default function MyEvents() {
  const [status, setStatus] = useState(""),
  [data, setData] = useState(eventsData);

  useEffect(() => {
    if(!status){
      setData(eventsData);
    }else{
      setData(eventsData.filter(event => event.status === status));
    }
  }, [status])

  return (
    <Container className="p-0" fluid>
      <CardHeader>
        <Row>
          <ButtonGroup className="w-full">
            <Button outline color="primary" active={status === ""} onClick={() => setStatus("")}>All Events</Button>
            <Button outline color="primary" active={status === "upcoming"} onClick={() => setStatus("upcoming")}>Upcoming Events</Button>
            <Button outline color="primary" active={status === "past"} onClick={() => setStatus("past")}>Past Events</Button>
          </ButtonGroup>          
        </Row>        
      </CardHeader>
      <CardBody className="bg-white">
        <Row xs={1} md={2} lg={2} xl={3}>
          {data.map((event) => (
            <EventCard key={event.eventId} event={event} detailsLink={`/profile`} />
          ))}
        </Row>
      </CardBody>
    </Container>
  );
}
