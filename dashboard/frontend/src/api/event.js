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
      console.log(err.message || "process failed");
      return false;
    });
};

export const fetchSingleEvent = async (eventId) => {
  return await fetch(
    process.env.REACT_APP_BASE_URL + "/api.php?q=singleEvent",
    {
      method: "POST",
      body: JSON.stringify({ eventId }),
    }
  )
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
      console.log(err.message || "process failed");
      return false;
    });
};

export const registeredStudentDetails = async (body) => {
  console.log(body.eventId);
  return await fetch(
    process.env.REACT_APP_BASE_URL +
      "/api.php?q=postDetailDashboard&eventId=" +
      [body.eventId] +
      "&userId=" +
      [body.id],
    {
      method: "POST",
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      console.log(res.message);
      if (res.message === "success") {
        return true;
      } else {
        console.log(res.error || "process failed");
        return false;
      }
    })
    .catch((err) => {
      console.log(err.message || "process failed");
      return false;
    });
};

export const fetchRegisteredStatus = async (body) => {
  return await fetch(
    process.env.REACT_APP_BASE_URL +
      "/api.php?q=checkRegisteredStudents&eventId=" +
      [body.eventId] +
      "&userId=" +
      [body.id],
    {
      method: "POST",
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      console.log(res.message);

      if (res.message === "success") {
        return true;
      } else {
        console.log(res.error || "process failed");
        return false;
      }
    })
    .catch((err) => {
      console.log(err.message || "process failed");
      return false;
    });
};
