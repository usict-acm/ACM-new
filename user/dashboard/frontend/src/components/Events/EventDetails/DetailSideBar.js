import React from "react"
import { Button } from "reactstrap";
  import "../../../assets/css/events/eventDetails.css"

  export default function DetailSidebar({event}){
      return(
          <>
          <div className="detailSideBar ">
                       <h1>{event?.heading} </h1>
                       <hr/>
                        <div className="detailContainer">
                            <div className="dateAndTime ">
                                        <p>
                                        <i className="ni ni-calendar-grid-58 "></i><span>Starts on : {event?.date} </span>
                                        </p>

                                        <p>
                                        <i className="bx bx-time "></i><span>Time : {event?.time} </span>
                                        </p>

                                        <p>
                                        <i className="bx bxs-map "></i><span>Venue : {event?.venue}</span>
                                        </p>
                                </div>

                                <div className="text-right ">
                                <Button color="info">Register Now</Button>
                                </div>
                        </div>
          </div>
          </>
      )
  }
