import React, { useEffect } from "react";
import "../assets/css/error404.css";

const Error404 = () => {
	const getRedirectPath = () => {
		const pathArr = window.location.pathname.split("/");
		if (pathArr[1] === "test_acm") {
			if (pathArr.length >= 4 && pathArr[3] === "user-portal") {
				return "/dashboard/user-portal/home";
			} else {
				return "/";
			}
		} else {
			if (pathArr.length >= 3 && pathArr[2] === "user-portal") {
				return "/dashboard/user-portal/home";
			} else {
				return "/";
			}
		}
	};
  useEffect(() => {
    document.title = "USICT ACM";
  }, [])
	return (
		<div className="Error_404">
			{/* <!-- Content Wrapper --> */}
			<div className="Error_404__wrapper">
				<div className="container Error_404__container">
					{/* <!-- brick of wall --> */}
					<div className="Error_404__brick"></div>
					{/* <!-- end brick of wall --> */}

					{/* <!-- Number --> */}
					<div className="Error_404__number">
						<div className="Error_404__four"></div>
						<div className="Error_404__zero">
							<div className="Error_404__nail"></div>
						</div>
						<div className="Error_404__four"></div>
					</div>
					{/* <!-- end Number --> */}

					{/* <!-- Info --> */}
					<div className="Error_404__info">
						<h2 className="Error_404__info-h2">Something is wrong</h2>
						<p className="Error_404__info-p">
							The page you are looking for was moved, removed, renamed or might never existed.
						</p>
						<a
							href={getRedirectPath()}
							className="btn Error_404__info-btn Error_404__info--a"
						>
							Go Home
						</a>
					</div>
					{/* <!-- end Info --> */}
				</div>
				{/* <!-- end container --> */}
			</div>
			{/* <!-- end Content Wrapper --> */}

			<div className="Error_404__foot-img">
				<div className="container Error_404__container">
					{/* <!-- Worker --> */}
					<div className="Error_404__worker"></div>
				</div>
				{/* <!-- end container --> */}
			</div>
		</div>
	);
};

export default Error404;
