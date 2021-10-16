import React from "react";
import Header from "../../components/Dashboard/Winner";
import RecentBlog from "../../components/Dashboard/RecentBlog";
import "../../assets/css/dashboard/dashboard.css";
import { Container, Row, Col } from "reactstrap";
function Dashboard() {
  return (
    <>
      <div className="bkg header bg-gradient-info pl-6 pt-5">
        <span className="winhead">WINNERS</span>
      </div>
      <Container fluid>
        <div className="content">
          <Header />
          {/* Winner Section */}

          <Row className="p-5">
            <Col xl="6">
              <h2 className="pb-3">RECENT BLOGS</h2>
              <RecentBlog
              type={true}
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio numquam laboriosam quae voluptate deserunt quam earum qui voluptatibus, ad vel.

              "
              />
              <RecentBlog
              type={true}
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio numquam laboriosam quae voluptate deserunt quam earum qui voluptatibus, ad vel.

              "
              />
              <RecentBlog
              type={true}
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio numquam laboriosam quae voluptate deserunt quam earum qui voluptatibus, ad vel.

              "
              />
              <RecentBlog
              type={true}
                text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio numquam laboriosam quae voluptate deserunt quam earum qui voluptatibus, ad vel.

              "
              />
            </Col>
            <Col xl="6">
              <h2 className="pb-3">UPCOMING EVENTS</h2>
              <RecentBlog type={false}/>
              <RecentBlog type={false}/>
              <RecentBlog type={false}/>
            </Col>
          </Row>
        </div>
      </Container>
    </>
  );
}

export default Dashboard;
