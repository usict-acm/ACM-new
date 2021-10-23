import React from "react";
import Winner from "../../components/Dashboard/Winner";
import winner from "../../components/Dashboard/AllWinner";
import RecentBlog from "../../components/Dashboard/RecentBlog";
import UpcomingEvents from "../../components/Dashboard/UpcomingEvents";
import "../../assets/css/dashboard/dashboard.css";
import { Container, Row, Col } from "reactstrap";
function Dashboard() {
  return (
    <>
      <div className="bkg header bg-gradient-info pl-5 pt-5">
        <span className="winhead">WINNERS</span>
      </div>
      <Container fluid className="AllContent">
        <div className="content">
          <Winner winners={winner} />
          {/* Winner Section */}

          <Row className="pt-5">
            <Col xl="6">
              <h2 className="pb-3">PUBLISHED RECENTLY</h2>
              <RecentBlog />
            </Col>
            <Col xl="6">
              <h2 className="pb-3">UPCOMING EVENTS</h2>
              <UpcomingEvents />
            </Col>
          </Row>
        </div>
      </Container>
    </>
  );
}

export default Dashboard;
