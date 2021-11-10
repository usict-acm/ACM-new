import React, { useState, useEffect } from "react";
import moment from "moment";

const EventCountdown = ({ event }) => {
	const startTime = moment(event?.startDate);
	const endTime = moment(event?.endDate);
	const [currentTime, setCurrentTime] = useState(moment());
	const [isEventOver, setIsEventOver] = useState(currentTime >= endTime);
	const [eventStatus, setEventStatus] = useState({
		text:
			startTime > currentTime
				? "STARTS IN :"
				: endTime > currentTime
				? "ENDS IN :"
				: "EVENT IS OVER",
		targetTime:
			startTime > currentTime
				? startTime
				: endTime > currentTime
				? endTime
				: null,
	});

	const timeBetween = moment.duration(
		eventStatus?.targetTime?.diff(currentTime)
	);

	useEffect(() => {
		const interval = setInterval(() => {
			if (
				timeBetween.days() <= 0 &&
				timeBetween.hours() <= 0 &&
				timeBetween.minutes() <= 0 &&
				timeBetween.seconds() <= 0
			) {
				if (endTime > startTime && eventStatus?.text === "STARTS IN :") {
					setEventStatus({
						text: "ENDS IN :",
						targetTime: endTime,
					});
				} else {
					setIsEventOver(true);
					clearInterval(interval);
				}
			} else {
				setCurrentTime(moment());
			}
		}, 1000);

		return () => clearInterval(interval);
	}, [eventStatus, timeBetween, startTime, endTime]);

	return isEventOver ? (
		<h1>EVENT IS OVER</h1>
	) : (
		<>
			<h3> {eventStatus?.text} </h3>
			<div className="countdown">
				<div className="countsContainer">
					<h1>{timeBetween.days()} </h1>
					<h4>Days</h4>
				</div>
				<div className="countsContainer">
					<h1>{timeBetween.hours()}</h1>
					<h4>Hours</h4>
				</div>
				<div className="countsContainer">
					<h1>{timeBetween.minutes()}</h1>
					<h4>min</h4>
				</div>
				<div className="countsContainer">
					<h1>{timeBetween.seconds()}</h1>
					<h4>sec</h4>
				</div>
			</div>
		</>
	);
};

export default EventCountdown;
