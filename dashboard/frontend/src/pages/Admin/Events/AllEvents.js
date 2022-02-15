import React, { useEffect, useState } from "react";
import { fetchAllEvents } from "api/event";
import EventCard from "components/Events/AllEvents/EventCard";
import { useDispatch } from "react-redux";
import { CardHeader, CardBody, Container, Row, Button, ButtonGroup } from "reactstrap";
import Loader from "components/Loader";

export default function AllEvents() {
	const dispatch = useDispatch(),
		[status, setStatus] = useState(""),
		[eventsData, setEventsData] = useState([]),
		[data, setData] = useState([]),
		[loading, setLoading] = useState(true);

	useEffect(() => {
		const fetchData = async () => {
			setLoading(true);
			const allEvents = await fetchAllEvents();
			if (allEvents) {
				setEventsData(allEvents);
				setData(allEvents);
				setLoading(false);
			} else {
				setLoading(false);
			}
		};
		fetchData();
	}, [dispatch]);

	useEffect(() => {
		let newEvents = [];
		switch (status) {
			case "":
				newEvents = eventsData;
				break;
			case "upcoming":
				newEvents = eventsData.filter((event) => new Date() < new Date(event.startDate));
				break;
			case "past":
				newEvents = eventsData.filter((event) => new Date() >= new Date(event.endDate));
				break;
			default:
				break;
		}
		setData(newEvents.sort((a, b) => (a?.startDate > b?.startDate ? -1 : 1)));
	}, [status, eventsData]);

	return loading ? (
		<Loader />
	) : (
		<Container className="p-0" fluid>
			<CardHeader>
				<Row>
					<ButtonGroup className="w-full">
						<Button outline color="primary" active={status === ""} onClick={() => setStatus("")}>
							All Events
						</Button>
						<Button
							outline
							color="primary"
							active={status === "upcoming"}
							onClick={() => setStatus("upcoming")}
						>
							Upcoming Events
						</Button>
						<Button outline color="primary" active={status === "past"} onClick={() => setStatus("past")}>
							Past Events
						</Button>
					</ButtonGroup>
				</Row>
			</CardHeader>
			<CardBody className="bg-white">
				<Row xs={1} md={2} lg={2} xl={3}>
					{data.length === 0 ? (
						<div>No {status} events at the moment !!</div>
					) : (
						data.map((event, i) => (
							<EventCard
								index={i}
								key={event.eventId}
								event={event}
								detailsLink={`/event/${event.eventId}`}
							/>
						))
					)}
				</Row>
			</CardBody>
		</Container>
	);
}
