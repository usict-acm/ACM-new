
function getBotResponse(input) {
    
    // greetings

    if (input.toLowerCase().includes("hello")) {
        return "Hello! How can I help you today?";
    } else if (input.toLowerCase().includes("hi")) {
        return "Hi! How can I assist you?";
    } else if (input.toLowerCase().includes("hey")) {
        return "Hey! What can I do for you?";
    } else if (input.toLowerCase().includes("good morning")) {
        return "Good morning! How can I help you today?";
    } else if (input.toLowerCase().includes("good afternoon")) {
        return "Good afternoon! How can I help you today?";
    } else if (input.toLowerCase().includes("good evening")) {
        return "Good evening! How can I help you today?";
    }
    // basic questions
    else if (input.toLowerCase().includes("who can apply for membership")) {
        return "Membership in ACM is open to individuals and organizations in the computing field, including computer science professionals, educators, and students.";
    } else if (input.toLowerCase().includes("mission ")) {
        return "The mission of ACM is to advance the art, science, engineering, and application of information technology, particularly in the field of computer science. It promotes the open exchange of information and ideas among its members and the wider computing community, and works to improve the public's understanding of computing and its impact on society.";
    } else if (input.toLowerCase().includes("acm full form")) {
        return "The full form of ACM is the Association for Computing Machinery.";
    } else if (input.toLowerCase().includes("what is acm")) {
        return "ACM stands for the Association for Computing Machinery. It is an international professional organization for computer scientists and engineers. ACM was founded in 1947, and is the largest educational and scientific computing society in the world.";
    } else if (input.toLowerCase().includes("help")) {
        return "I'm here to help you! What do you need assistance with?";
    } else if (input.toLowerCase().includes("query")) {
        return "Sure, I'd be happy to help you with your query. What do you need to know?";
    } else if (input.toLowerCase().includes("how to join")) {
        return "To join, please visit our website and fill out the membership application form.";
    } else if (input.toLowerCase().includes("acm clubs")) {
        return "In ACM we have Dev surce,RobIOtics,Lens,Canvas,enGame,InnovateAI,Cyberchain,ICPC,Research Cell"
    } else if (input.toLowerCase().includes("webchair")) {
        return "Apoorva Aron is web chair of USS ACM STUDENT CHAPTER";
    } else if (input.toLowerCase().includes("apoorva")) {
        return "he is web chair of uss acm ,if you want to know more about him follow him on social media";
    } else if (input.toLowerCase().includes("team")) {
        return "You can meet the team in our website office bearer section";
    } else if (input.toLowerCase().includes("can i join")) {
        return "Yes , you can fill the application form in our website";
    } else if (input.toLowerCase().includes("your name")) {
        return "I don't have any name yet ";
    } else if (input.toLowerCase().includes("purpose")) {
        return "ACM is a global scientific and educational organization dedicated to advancing the art, science, engineering, and application of computing, serving both professional and public interests by fostering the open exchange of information and by promoting the highest professional and ethical standards.";
    } else if (input.toLowerCase().includes("who made chatbot")) {
        return "I(chatbot) was made by Ritika rana , Ritesh kumar divedi and Prateek bisht";
    } else if (input.toLowerCase().includes("rules")) {
        return "1 Contribute to society and to human well-being, acknowledging that all people are stakeholders in computing.  2 Avoid harm. 3 Be honest and trustworthy. 4 Be fair and take action not to discriminate. 5 Respect the work required to produce new ideas, inventions, creative works, and computing artifacts.";
    } else if (input.toLowerCase().includes("how can i join")) {
        return "If you want to join then fill the application form in our website";
    } else if (input.toLowerCase().includes("benefits")) {
        return " It Enhance your professional career or academic life with ACM member benefits that include a free subscription to ACM's flagship publication Communications of the ACM; online books, courses, videos, and webinars through the ACM Learning Center; opportunities to participate in Local Chapters, Special Interest Groups, and a lot more";
    } else if (input.toLowerCase().includes("why join acm clubs")) {
        return "In different clubs you can interact with different and new technology and choose among them to get your preferrred environment and like minded people ";
    } else if (input.toLowerCase().includes("what is icpc")) {
        return "ICPC stands for International Collegiate Programming Contest, it is an annual competitive programming competition for college students organized by the Association for Computing Machinery (ACM). It's considered one of the most prestigious programming competitions in the world where teams of students solve algorithmic problems using a programming language of their choice.";
    } else if (input.toLowerCase().includes("what is cyberchain")) {
        return "Cyberchain refers to the use of blockchain technology to secure and manage digital transactions and data in the field of cybersecurity. It can be used to enhance the security of networks and devices, protect against cyber attacks and ensure the integrity of data.";
    } else if (input.toLowerCase().includes("what is devsource")) {
        return "DevSource - The Development Group is a community of students highly enthusiastic about OpenSource, app, and Web Development.";
    } else if (input.toLowerCase().includes("what is robiotics")) {
        return "RobIOTics - The Robotics, IoT Group is the Electronic Club of USICT ACM. It covers 3 major technical fields which are Robotics, the Internet of Things, and Robotic Process Automation.";
    } else if (input.toLowerCase().includes("what is engame")) {
        return "enGame - The Gaming Group the Gaming group of USICT is a student-run group that aims to promote competitive gaming culture in the campus and beyond. "
    } else if (input.toLowerCase().includes("what is innovate ai")) {
        return "Innovate AI Is The Artificial Intelligence , Machine learning and Data science club of the USS ACM Student Chapter."
    } else if (input.toLowerCase().includes("devsource")) {
        return "You can check more about this club in our club section of USS ACM website";
    } else if (input.toLowerCase().includes("canvas")) {
        return "You can check more about this club in our club section of USS ACM website";
    } else if (input.toLowerCase().includes("robiotics")) {
        return "You can check more about this club in our club section of USS ACM website";
    } else if (input.toLowerCase().includes("lens")) {
        return "You can check more about this club in our club section of USS ACM website";
    } else if (input.toLowerCase().includes("engame")) {
        return "You can check more about this club in our club section of USS ACM website";
    } else if (input.toLowerCase().includes("innovate ai")) {
        return "You can check more about this club in our club section of USS ACM website";
    } else if (input.toLowerCase().includes("cyberchain")) {
        return "You can check more about this club in our club section of USS ACM website";
    } else if (input.toLowerCase().includes("icpc")) {
        return "You can check more about this club in our club section of USS ACM website";
    } else if (input.toLowerCase().includes("research cell")) {
        return "You can check more about this club in our club section of USS ACM website";
    } else if (input.toLowerCase().includes("what is acm student chapter")) {
        return "An ACM Student Chapter is a student-run organization that is affiliated with the Association for Computing Machinery (ACM). The goal of an ACM Student Chapter is to provide students with an opportunity to learn about the latest developments in the field of computer science, as well as to connect with other students and professionals in the field."
    } else if (input.toLowerCase().includes("who can apply in acm student chapter")) {
        return "ACM Student Chapters are typically located at universities and colleges and are open to all students who are interested in computer science. The chapter is typically run by a group of student officers and faculty advisors who plan and organize events and activities for the members."
    } else if (input.toLowerCase().includes("what activities acm student chapter organize")) {
        return "Guest lectures from industry professionals and researchers,Technical workshops and tutorials, Hackathons and coding competitions, Field trips to tech companies and research labs,Professional development workshops and networking events "
    } else if (input.toLowerCase().includes(" activities acm ")) {
        return "Guest lectures from industry professionals and researchers,Technical workshops and tutorials, Hackathons and coding competitions, Field trips to tech companies and research labs,Professional development workshops and networking events "
    } else if (input.toLowerCase().includes(" acm membership fee")) {
        return "Membership in an ACM Student Chapter is typically free or low-cost, and is open to all students who are interested in computer science "
    } else if (input.toLowerCase().includes(" acm membership free")) {
        return "Membership in an ACM Student Chapter is typically free or low-cost, and is open to all students who are interested in computer science "
    } else if (input.toLowerCase().includes("free")) {
        return "Membership in an ACM Student Chapter is typically free or low-cost, and is open to all students who are interested in computer science "
    } else if (input.toLowerCase().includes("fee")) {
        return "Membership in an ACM Student Chapter is typically free or low-cost, and is open to all students who are interested in computer science "
    } else if (input.toLowerCase().includes("chair")) {
        return "Anurag parashar is currently chair of USS ACM STUDENT CHAPTER "
    } else if (input.toLowerCase().includes("office")) {
        return "you can check about all members in home page of USS ACM website"
    } else if (input.toLowerCase().includes("event")) {
        return "Our website has information on upcoming events, conferences, and workshops. Would you like me to find more information on a specific event for you?";
    }
    else{
        return "I am unable to answer your query at the moment as I am currently under the learning phase. Sorry for the inconvenience caused. Please email us your query at :<a href=https://acm@ipu.ac.in>Gmail</a>";
    }
}