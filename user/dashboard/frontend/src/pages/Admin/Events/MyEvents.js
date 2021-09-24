import EventCard from 'components/Events/AllEvents/EventCard';
import React, { useState } from 'react'
import {
    CardHeader,
    CardBody,
    Container,
    Row,
    Col,
  } from "reactstrap";

export default function MyEvents() {
    const [past,setPast]=useState("");
    console.log(past);
    
    return (
        <>
            <Container className="p-0" fluid>
                <CardHeader>
                    <Row sm={3} md={3} >
                        <Col type="button" sm="auto" md="auto">My Events</Col>
                        <Col type="button" onClick={()=>setPast(false)} sm="auto" md="auto">Upcoming Events</Col>
                        <Col type="button" onClick={()=>setPast(true)} sm="auto" md="auto">Past Events</Col>
                    </Row>
                </CardHeader>
                <CardBody className="bg-white" >
                    <EventCard eventType={past}/>
                </CardBody>
            </Container>
        </>
    )
}
