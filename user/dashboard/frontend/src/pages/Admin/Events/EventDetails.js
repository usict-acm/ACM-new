import React from "react";
import { Container, Row, Col } from "reactstrap";
import { useParams } from "react-router";
import DetailSidebar from "components/Events/EventDetails/DetailSideBar";
import data from "../../../components/Events/AllEvents/AllEventData";
import "../../../assets/css/events/eventDetails.css";

export default function EventDetails() {
  const { eventId } = useParams();
  const event = data.find((item) => item.eventId === eventId);

  return (
    <>
      <Container className="px-5 mt-4 content" fluid="xs">
        <Container fluid="xs">
          <Row className="m-0">
            <Col lg="6" className="px-0 imageCol bg-white shadow">
              <img
                className="eventImage"
                src={event?.banner}
                alt="event_image"
              />
            </Col>
            <Col lg="6" className="p-0 bg-white shadow  ">
              <DetailSidebar event={event} />
            </Col>
          </Row>
        </Container>

        <h2 className="mt-5 ">Description</h2>
        <hr />
        <p>{event?.description}</p>
      </Container>
    </>
  );
}
