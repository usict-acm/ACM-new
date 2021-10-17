import React from "react";
import { Button } from "reactstrap";
import "../../../assets/css/events/eventDetails.css";

export default function DetailSidebar({ event }) {
	return (
		<>
			<div className="detailSideBar">
				<h1>{event?.eventName} </h1>
				<hr />
				<div className="detailContainer">
					<p className="detailContainer__description">
						{event?.eventDescription}
					</p>
					<div className="dateAndTime ">
						<p>
							<i className="ni ni-calendar-grid-58 "></i>
							<span>Starts : {event?.startDate} </span>
						</p>
						<p>
							<i className="ni ni-calendar-grid-58 "></i>
							<span>Ends : {event?.endDate} </span>
						</p>
						{event?.time && (
							<p>
								<i className="bx bx-time "></i>
								<span>Time : {event?.time} </span>
							</p>
						)}
					</div>

					<div className="buttons text-right">
						{event?.regLink && (
							<a
								href={event?.regLink}
								target="_blank"
								rel="noopener noreferrer"
							>
								<Button color="info">Register Now</Button>
							</a>
						)}
					</div>
				</div>
			</div>
		</>
	);
}
