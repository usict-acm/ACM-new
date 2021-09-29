import EventCard from "components/Events/AllEvents/EventCard";
import React, { useEffect, useState } from "react";
import { CardHeader, CardBody, Container, Row, Col } from "reactstrap";
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
        <Row sm={3} md={3}>
        <Col type="button" onClick={() => setStatus("")} sm="auto" md="auto">
            All Events
          </Col>
          <Col type="button" onClick={() => setStatus("upcoming")} sm="auto" md="auto">
            Upcoming Events
          </Col>
          <Col type="button" onClick={() => setStatus("past")} sm="auto" md="auto">
            Past Events
          </Col>
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
