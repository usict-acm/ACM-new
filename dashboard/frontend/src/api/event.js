export const fetchAllEvents = async () => {
	return await fetch(process.env.REACT_APP_BASE_URL + "/api.php?q=allEvents", {
		method: "GET",
	})
		.then((res) => res.json())
		.then((res) => {
			if (res.message === "success") {
				return res.events;
			} else {
				console.log(res.error || "process failed");
                return false;
			}
		})
		.catch((err) => {
            console.log(err.message || "process failed")
            return false;
        });
};

export const fetchSingleEvent = async (eventId) => {
	return await fetch(process.env.REACT_APP_BASE_URL + "/api.php?q=singleEvent", {
		method: "POST",
        body: JSON.stringify({eventId}),
	})
		.then((res) => res.json())
		.then((res) => {
			if (res.message === "success") {
				return res.event;
			} else {
				console.log(res.error || "process failed");
                return false;
			}
		})
		.catch((err) => {
            console.log(err.message || "process failed")
            return false;
        });
};
