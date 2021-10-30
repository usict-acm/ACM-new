import React, { useEffect, useState } from "react";
import { Card, CardBody } from "reactstrap";
import { fetchAllEvents } from "api/event";
import { Link } from "react-router-dom";
import "../../assets/css/dashboard/recentblog.css";
import moment from "moment";

const UpcomingEvents = () => {
	const [data, setData] = useState([]);

	useEffect(() => {
		const fetchData = async () => {
			const allEvents = await fetchAllEvents();
			if (allEvents) {
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
						<Card className="dashboardCard shadow-lg mb-4">
							<CardBody className="dashboardCard__container">
								<div className="dashboardCard__date">
									<h2>{moment(event?.startDate).format("DD MMM, YY")}</h2>
								</div>
								<div className="dashboardCard__contents">
									<h2 id="bold">
										<span>{event.eventName}</span>
									</h2>
								</div>
							</CardBody>
						</Card>
					</Link>
				))
				.slice(0, 3)}
		</>
	);
};

export default UpcomingEvents;
