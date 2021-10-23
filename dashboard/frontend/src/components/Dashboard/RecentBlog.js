import React from 'react'
import {Card, CardBody} from "reactstrap";
import { Link } from "react-router-dom";

import "../../assets/css/dashboard/recentblog.css"

const RecentBlog = (props)=>{
    return(
      <>
        <Card className="blogcard shadow-lg mb-4">
          <CardBody className="parent">
                <div className="date ">
                    <h2>Nov 14</h2>
                </div>
                <div className="contents">
                  <h2>{props.type?"BLOG TITLE":"EVENT TITLE"}</h2>
                  <p className="text-muted">
                      {props.text?.length > 180 ?
                      (
                        <>
                        {props.text?.slice(0, 180)}
                        <span> ...<Link>read more</Link> </span>
                        </>
                      )
                     : props.text}
                  </p>
                </div>
            </CardBody>
        </Card>
      </>
    )
  }

export default RecentBlog
