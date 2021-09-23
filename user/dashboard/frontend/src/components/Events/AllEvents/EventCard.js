import React from "react";
import {
  Button,
  Card,
  CardHeader,
  Row,
  Col,
  CardImg,
  CardText,
} from "reactstrap";
import "assets/css/events/allEvents.css";

const data = [
  {
    id: "1",
    heading: "session on react native",
    date: "12th sep, 2021",
    time: "1:00 PM",
    venue: "online",
    upcoming: "true",
    description:
      "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis ipsum unde voluptatibus, ad quod sint ut velit nesciunt odio quae quibusdam, odit labore qui, pariatur a omnis vitae doloribus similique",
    banner: "https://pbs.twimg.com/media/ExpuvwSVEAkLDi1.jpg:large",
  },
  {
    id: "2",
    heading: "session on ML",
    date: "13th sep, 2021",
    time: "3:00 PM",
    venue: "USICT",
    upcoming: "false",
    description:
      "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis ipsum unde voluptatibus, ad quod sint ut velit nesciunt odio quae quibusdam, odit labore qui, pariatur a omnis vitae doloribus similique",
    banner: "https://pbs.twimg.com/media/ExpuvwSVEAkLDi1.jpg:large",
  },
  {
    id: "3",
    heading: "Valorant",
    date: "14th sep, 2021",
    time: "2:00 PM",
    venue: "online",
    upcoming: "true",
    description:
      "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis ipsum unde voluptatibus, ad quod sint ut velit nesciunt odio quae quibusdam, odit labore qui, pariatur a omnis vitae doloribus similique",
    banner:
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCRFX4LQjx6ai5yK_N4n9SDaX5vWEsPlAIFA&usqp=CAU",
  },
  {
    id: "4",
    heading: "Write It Loud",
    date: "15th sep, 2021",
    time: "2:00 PM",
    venue: "online",
    upcoming: "true",
    description:
      "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis ipsum unde voluptatibus, ad quod sint ut velit nesciunt odio quae quibusdam, odit labore qui, pariatur a omnis vitae doloribus similique",
    banner:
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOfllp5xxzEmAacjgQ8KoSjXdAZy6NyiBDsQ&usqp=CAU",
  },
];
console.log(data);

export default function EventCard(props) {
  return (
    <div>
      <Row xs={1} md={2} lg={2} xl={3}>
        {data.map((event, i) => {
          return (
            <Col className="p-2">
              <Card className="eventCard" key={i}>
                <CardImg className="banner" src={event.banner}></CardImg>
                <CardHeader className="py-2 eventContent">
                  <h3 className="eventHeading py-3">{event.heading}</h3>
                  <CardText className="pt-3 eventText">
                    <span>
                      <i className="bx bx-calendar"></i> Starts On :{" "}
                      {event.date}
                    </span>
                    <br />
                    <span>
                      <i className="bx bxs-timer"></i> Time : {event.time}
                    </span>{" "}
                    <br />
                    <span>
                      <i className="bx bxs-location-plus"></i> Venue :{" "}
                      {event.venue}
                    </span>
                    <br />
                  </CardText>
                </CardHeader>
                <div className="text-right eventDetails p-4 ">
                  <Button className="eventBtn">Details</Button>
                </div>
              </Card>
            </Col>
          );
        })}
      </Row>
    </div>
  );
}
