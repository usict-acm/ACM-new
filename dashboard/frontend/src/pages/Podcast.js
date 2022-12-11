import React from "react";
import PodcastLogo from "../assets/img/PODCAST.png";
import "../assets/css/navbar.css";

function Podcast() {
  window.open("https://usict.acm.org/link/ussacmpodcast");
  return (
    <>
      <img src={PodcastLogo} alt="USS ACM Aawaz" className="PodcastLogoCss" />
    </>
  );
}

export default Podcast;
