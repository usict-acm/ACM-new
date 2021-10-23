import React from "react";
import { Button, Card, CardHeader, Col, CardImg, CardText } from "reactstrap";
import { Link } from "react-router-dom";
import "assets/css/events/allEvents.css";

export default function EventCard({ event, detailsLink, index }) {
	return (
		<Col className="p-2">
			<Card className="eventCard">
				<CardImg
					className="banner"
					src={"https://usict.acm.org" + event?.poster?.slice(1)}
				/>
				<CardHeader className="py-2 eventContent">
					<h3 className="eventHeading py-3">{event?.eventName}</h3>
					<CardText className="pt-3 eventText">
						<span>
							<i className="bx bx-calendar"></i> STARTS : {event?.startDate}
						</span>
						<br />
						<span>
							<i className="bx bx-calendar"></i> ENDS : {event?.endDate}
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
