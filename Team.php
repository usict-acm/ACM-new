<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include("head.php")
    ?>
    <title>USICT ACM</title>
    <link href="assets/CSS/team.css" rel="stylesheet" />
    <link href="assets/CSS/glider.css" rel="stylesheet" />
    <link href="assets/CSS/header.css" rel="stylesheet" />
    <link href="assets/CSS/footer.css" rel="stylesheet" />

  </head>

  <body>
    <!-- ************************************************Navbar******************************************************************************-->
    <?php
      $currentPage = 'team';
      include('header.php');
    ?>

    <!-- ****************************************************Header Image****************************************** -->

    <div
      style="
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 3%;
        margin-bottom: 0%;
      "
    >
      <section id="header">
        <div
          class="pt-card row"
          style="background-image: url('assets/images/team-banner.png')"
        >
          <div class="heading col-xl-9 col-lg-9 col-md-9">
            <h3><span class="uheading">Our Team</span></h3>
          </div>
        </div>
      </section>
    </div>

    <!--  ******************************************Faculty************************************************************* -->

    <section id="collab" style="margin-top: 3%">
      <div class="container">
        <h1 class="highlight collab-main-heading">Faculty:</h1>

        <div class="row d-flex justify-content-center">
          <div class="flip-card-without-hover">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/deanSir.jpeg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Prof. Pravin Chandra</h4>
                <p class="card-name">Dean, USICT</p>
              </div>
              <!--<div class="flip-card-back">
                <h2>Prof. Pravin Chandra</h2>
                <p>Dean, USICT</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=pravin@ipu.ac.in" target="_blank"><i class="fas fab fa-envelope"></i></a>
              </div>-->
            </div>
          </div>

          <div class="flip-card-without-hover">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/rahulsir.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Dr. Rahul Johari</h4>
                <p class="card-name">Branch Head, ACM USICT</p>
              </div>
              <!--<div class="flip-card-back">
                <h2>Dr. Rahul Johari</h2>
                <p>Branch Head, ACM USICT</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=rahul@ipu.ac.in" target="_blank"><i class="fas fab fa-envelope"></i></a>
              </div>-->
            </div>
          </div>
        </div>
      </div>

      <!-- *********************************** Office Bearers *******************************************************-->
      <div class="container">
        <h1 class="collab-main-heading">
          Office<span class="highlight"> Bearers</span>:
        </h1>
        <div class="row d-flex justify-content-center">
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Gaurav.png"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Gaurav Jain</h4>
                <p class="card-name">Chair</p>
              </div>
              <div class="flip-card-back">
                <!--<br>
                <h2>Gaurav Jain</h2>
                <p>Chair</p>-->
                <br />
                <p class="bio">
                  A Machine Learning & Data Science Enthusiast, Gaurav is
                  pursuing B.Tech in Computer Science. He is always ready to
                  take up new challenges and tries to positively impact people's
                  lives with his work.
                </p>
                <a href="https://www.linkedin.com/in/gauravj22/" target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <!--<a href="#" target="_blank"><i class="fab fa-github"></i></a>-->
                <a href="https://www.instagram.com/gauravj22/" target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>

          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/vardaan.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Vardaan Grover</h4>
                <p class="card-name">Vice-Chair</p>
              </div>
              <div class="flip-card-back">
                <br />
                <h2>Vardaan<br />Grover</h2>
                <p>Vice-Chair</p>
                <br />
                <!-- <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>-->
                <a
                  href="https://www.linkedin.com/in/vardaan-grover-8a64141a0/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <!--<a href="#" target="_blank"><i class="fab fa-github"></i></a>-->
                <a href="https://www.instagram.com/_vg_03/" target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Akshad.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Akshad Bhandula</h4>
                <p class="card-name">Secretary</p>
              </div>
              <div class="flip-card-back">
                <br />
                <h2>Akshad Bhandula</h2>
                <p>Secretary</p>
                <br />
                <!-- <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>-->
                <a
                  href="https://www.linkedin.com/in/akshad-bhandula-073202113/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <!--<a href="#" target="_blank"><i class="fab fa-github"></i></a>-->
                <a
                  href="https://www.instagram.com/musicalsoul107/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Divyansh.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Divyansh Rastogi</h4>
                <p class="card-name">Joint Secretary</p>
              </div>
              <div class="flip-card-back">
                <br />
                <h2>Divyansh Rastogi</h2>
                <p>Joint Secretary</p>
                <br />
                <!-- <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>-->
                <a
                  href="https://www.linkedin.com/in/divyansh-rastogi-08a44a171/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <!--<a href="#" target="_blank"><i class="fab fa-github"></i></a>-->
                <a
                  href="https://www.instagram.com/divyansh.rastogi.3000/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/chaitanDev.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Chaitan Dev</h4>
                <p class="card-name">Treasurer</p>
              </div>
              <div class="flip-card-back">
                <!--<br>
                <h2>Chaitan Dev</h2>
                <p>Treasurer</p>-->
                <br />
                <p class="bio">
                  Chaitan Dev is pursuing B.TECH IT and holds some certificates
                  of participation from Jamia hamdard, ymca Faridabad and coding
                  ninjas. He knows basics stuff about C and C++ and he loves to
                  know more about AI AND ML.
                </p>
                <a
                  href="https://www.linkedin.com/in/chaitan-dev/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <!--<a href="#" target="_blank"><i class="fab fa-github"></i></a>-->
                <a
                  href="https://www.instagram.com/devchaitan01/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/profile_pic_anmol.webp"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Anmol Goel</h4>
                <p class="card-name">Web Chair</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Anmol Goel</h1>
                <p>Web Chair</p>-->
                <br />
                <p class="bio" style="font-size: 13px">
                  Experienced Back End Developer with a demonstrated history of
                  working in the E-commerce industry. Skilled in PHP, C++,
                  Android, Databases, and Data Science. Strong engineering
                  professional with a Master of Computer Applications - MCA
                  focused in Web/Multimedia Management and Webmaster from Guru
                  Gobind Singh Indraprastha University.
                </p>
                <a
                  href="https://www.linkedin.com/in/anmol-goel-13b447178/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/anmolgoel12" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a href="#"
                  ><i
                    class="team-social-icon fab fa-instagram-square"
                    target="_blank"
                  ></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--***************************************** Executive Members **********************************************-->
      <div class="container">
        <h1 class="collab-main-heading">
          Executive<span class="highlight"> Members</span>:
        </h1>

        <div class="row d-flex justify-content-center">
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/sushantHaluwai.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Sushant Haluwai</h4>
                <p class="card-name">Executive Member</p>
              </div>
              <div class="flip-card-back">
                <!--<br>
                <h2>Sushant Haluwai</h2>
                <p>Executive Member</p>-->
                <br />
                <p class="bio">
                  My name is Sushant Haluwai , student of B.Tech IT ,currently
                  studying in 3rd sem. My strength is I'm self learner , self
                  motivated, hard worker and always carries a positive attitude.
                </p>
                <br />
                <a
                  href="https://www.linkedin.com/in/sushant-haluwai-8997171b5/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <!--<a href="#" target="_blank"><i class="fab fa-github"></i></a>-->
                <a href="#" target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/harshGoyal.png"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Harsh Goyal</h4>
                <p class="card-name">Executive Member</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Harsh Goyal</h1>
                <p>Executive Member</p>-->
                <br />
                <p class="bio">
                  A MERN stack developer and a competitive coder, Harsh Goyal is
                  student of B.Tech(CSE). Also interested in content writing, he
                  is a published writer in 3 anthologies. He is confident guy,
                  ready to take challenges.
                </p>
                <a
                  href="https://www.linkedin.com/in/harsh-goyal-195255b9/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/harshgoyal7065" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a
                  href="https://www.instagram.com/harsh.student99/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Manoj.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Manoj Kumar</h4>
                <p class="card-name">Executive Member</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Manoj Kumar</h1>
                <p>Executive Member</p>-->
                <br />
                <p class="bio">
                  An enthusiastic learner who is curious about cyber security,
                  web development and way to solve daily life problems.
                </p>
                <br /><br /><br />
                <a
                  href="https://www.linkedin.com/in/manoj-kumar-a4a215195/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/manoj-kuma" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a
                  href="https://www.instagram.com/manoj_kr_maurya/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Anuj.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Anuj Talwar</h4>
                <p class="card-name">Executive Member</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Anuj Talwar</h1>
                <p>Executive Member</p>-->
                <br />
                <p class="bio" style="font-size: 14px">
                  Anuj Talwar is an executive member of ACM USICT Student
                  Chapter, proficient in MERN Stack web development and keen
                  interest in Robotics and MUNs. Currently working on a forest
                  fire prevention system using drones, mail for collaboration
                  for any robotics project.
                </p>
                <a
                  href="https://www.linkedin.com/in/anuj-talwar/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/alooperalta" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a
                  href="https://www.instagram.com/aloo_peralta_/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Tarun.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Tarun</h4>
                <p class="card-name">Executive Member</p>
              </div>
              <div class="flip-card-back">
                <!--<br>
                <h2>Tarun</h2>
                <p>Executive Member</p>-->
                <br />
                <p class="bio">
                  Tarun is an executive member of ACM USICT student chapter, a
                  MERN stack developer. He is hard working and eager to learn
                  new technologies and tremendously enjoy what he does.
                </p>
                <br />
                <a
                  href="https://www.linkedin.com/in/tarun-shekhawat-037091194/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/tarawat" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a href="https://www.instagram.com/tarawat15/" target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/vishesh.jpeg"
                  class="flip-img"
                  alt="Avatar"
                  style="object-fit: cover"
                />
                <h4 class="card-name">Vishesh Gupta</h4>
                <p class="card-name">Executive Member</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Vishesh Gupta</h1>
                <p>Executive Member</p>-->
                <br />
                <p class="bio">
                  Vishesh Gupta, Graphic Designer is an Executive Member at ACM
                  USICT Student Chapter, is profound in Adobe Photoshop. He is a
                  hardworking guy, ready to complete any task given to him.
                </p>
                <br />
                <a
                  href="https://www.linkedin.com/in/vishesh-gupta-404955206/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/Vishesh02" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a href="https://www.instagram.com/visheshh02" target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--***************************************** Web Team **********************************************-->
      <div class="container">
        <h1 class="collab-main-heading">
          Web<span class="highlight"> Team</span>:
        </h1>

        <div class="row d-flex justify-content-center">
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/profile_pic_anmol.webp"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Anmol Goel</h4>
                <p class="card-name">Web Chair</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Anmol Goel</h1>
                <p>Web Chair</p>-->
                <br />
                <p class="bio" style="font-size: 13px">
                  Experienced Back End Developer with a demonstrated history of
                  working in the E-commerce industry. Skilled in PHP, C++,
                  Android, Databases, and Data Science. Strong engineering
                  professional with a Master of Computer Applications - MCA
                  focused in Web/Multimedia Management and Webmaster from Guru
                  Gobind Singh Indraprastha University.
                </p>
                <a
                  href="https://www.linkedin.com/in/anmol-goel-13b447178/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/anmolgoel12" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a href="#" target="_blank"
                  ><i
                    class="team-social-icon fab fa-instagram-square"
                    target="_blank"
                  ></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/pranavjain.jpeg"
                  class="flip-img"
                  alt="Avatar"
                  style="object-fit: cover"
                />
                <h4 class="card-name">Pranav Jain</h4>
                <p class="card-name">Full Stack Developer</p>
              </div>
              <div class="flip-card-back">
                <!--<br>
                <h2>Pranav Jain</h2>
                <p>Full Stack Developer</p>-->
                <br />
                <p class="bio">
                  An Experienced Full Stack Web & Application Developer, Pranav
                  Jain is pursuing B.Tech in Computer Science. He is always
                  ready to take up new challenges and tries to positively impact
                  people's lives with his work.
                </p>
                <a
                  href="https://www.linkedin.com/in/pranav-jain-9414a71a0/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/Pranavjain23" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a href="https://www.instagram.com/ipranavjain/" target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Anuj.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Anuj Talwar</h4>
                <p class="card-name">Full Stack Developer</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Anuj Talwar</h1>
                <p>Full Stack Developer</p>-->
                <br />
                <p class="bio" style="font-size: 14px">
                  Anuj Talwar is an executive member of ACM USICT Student
                  Chapter, proficient in MERN Stack web development and keen
                  interest in Robotics and MUNs. Currently working on a forest
                  fire prevention system using drones, mail for collaboration
                  for any robotics project.
                </p>
                <a
                  href="https://www.linkedin.com/in/anuj-talwar/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/alooperalta" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a
                  href="https://www.instagram.com/aloo_peralta_/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/harshGoyal.png"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Harsh Goyal</h4>
                <p class="card-name">Full Stack Developer</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Harsh Goyal</h1>
                <p>Full Stack Developer</p>-->
                <br />
                <p class="bio">
                  A MERN stack developer and a competitive coder, Harsh Goyal is
                  student of B.Tech(CSE). Also interested in content writing, he
                  is a published writer in 3 anthologies. He is confident guy,
                  ready to take challenges.
                </p>
                <a
                  href="https://www.linkedin.com/in/harsh-goyal-195255b9/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/harshgoyal7065" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a
                  href="https://www.instagram.com/harsh.student99/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Tarun.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Tarun</h4>
                <p class="card-name">Front End Developer</p>
              </div>
              <div class="flip-card-back">
                <!--<br>
                <h2>Tarun</h2>
                <p>Front End Developer</p>-->
                <br />
                <p class="bio">
                  Tarun is an executive member of ACM USICT student chapter, a
                  MERN stack developer. He is hard working and eager to learn
                  new technologies and tremendously enjoy what he does.
                </p>
                <br />
                <a
                  href="https://www.linkedin.com/in/tarun-shekhawat-037091194/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/tarawat" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a href="https://www.instagram.com/tarawat15/" target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Moulik.jpg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Moulik Agrawal</h4>
                <p class="card-name">UI/ Photoshop</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Moulik Agrawal</h1>
                <p>UI/ Photoshop</p>-->
                <br />
                <p class="bio">
                  An observant and keen learner currently pursuing B.Tech in CSE
                  and looking out for opportunities in Full Stack Web
                  Developement.
                </p>
                <br /><br /><br />
                <a
                  href="https://www.linkedin.com/in/moulik-agrawal/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/moulikagrawal" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a
                  href="https://www.instagram.com/agrawal_moulik/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/Karan.jpeg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Karandeep Singh</h4>
                <p class="card-name">Front End Developer</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Karandeep Singh</h1>
                <p>Front End Developer</p>-->
                <br />
                <p class="bio">
                  An enthusiastic learner who is excited to be in the
                  development phase of starting his career as a full stack Web
                  developer.
                </p>
                <br /><br /><br />
                <a
                  href="https://www.linkedin.com/in/karan-mann-175a01195/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/kar-cloud" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a href="https://www.instagram.com/_karan_mann/" target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <hr class="blue-hr" />
              <div class="flip-card-front">
                <img
                  src="./assets/images/team/unnat.jpeg"
                  class="flip-img"
                  alt="Avatar"
                />
                <h4 class="card-name">Unnat Malkoti</h4>
                <p class="card-name">UI/ UX</p>
              </div>
              <div class="flip-card-back">
                <!--<h1>Unnat Malkoti</h1>
                <p>UI/ UX</p>-->
                <br />
                <p class="bio">
                  Full stack developer skilled in django, react+redux and
                  firebase. Working in human resources industry and persuing
                  Bachelor in technology from Guru Gobind Indraprastha
                  University.
                </p>
                <br />
                <a
                  href="https://www.linkedin.com/in/unnat-malkoti-a93431164/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-linkedin"></i
                ></a>
                <a href="https://github.com/unnatmalkoti" target="_blank"
                  ><i class="team-social-icon fab fa-github"></i
                ></a>
                <a
                  href="https://www.instagram.com/unnatmalkoti/"
                  target="_blank"
                  ><i class="team-social-icon fab fa-instagram-square"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- ***********************************************Footer************************************************************************ -->
    <?php
      include('footer.php');
    ?>
  
    <!-- <script src="assets/JS/glider.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
