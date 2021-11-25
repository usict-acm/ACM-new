import React from 'react'
import "../assets/css/error404.css"

const Error404 = () => {
    return (
        <div className="Error_404">
              {/* <!-- Content Wrapper --> */}
    <div id="wrapper">
      <div className="container">
        {/* <!-- brick of wall --> */}
        <div className="brick"></div>
        {/* <!-- end brick of wall --> */}

        {/* <!-- Number --> */}
        <div className="number">
          <div className="four"></div>
          <div className="zero">
            <div className="nail"></div>
          </div>
          <div className="four"></div>
        </div>
        {/* <!-- end Number --> */}

        {/* <!-- Info --> */}
        <div className="info">
          <h2>Something is wrong</h2>
          <p>
            The page you are looking for was moved, removed, renamed or might
            never existed.
          </p>
          <a href="./" className="btn btn-home">Go Home</a>
        </div>
        {/* <!-- end Info --> */}
      </div>
      {/* <!-- end container --> */}
    </div>
    {/* <!-- end Content Wrapper --> */}

    <div id="foot-img">
      <div className="container">
        {/* <!-- Worker --> */}
        <div className="worker"></div>
      </div>
      {/* <!-- end container --> */}
    </div>

        </div>
    )
}

export default Error404;
