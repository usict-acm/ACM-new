<?php
    function welcomeMail ($userEmail, $userName) {
        $subject = "Welcome to GGSIP University USS ACM Student Chapter";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From:usict.acm.org";

        $body = "
            <html>
                <head><title>Welcome to GGSIP University USS ACM Student Chapter</title></head>
                <body>
                    <p>Dear $userName</p>
                    <br />
                    <p>We welcome you to the world of computing and a community made for everybody. We hope that you will have a great time being a part of this community.</p>
                    <br />
                    <p>For more community events, join our discord by clicking <a href='https://usict.acm.org/discord'>here</a>.</p>
                    <br />
                    <p>Regards</p>
                    <p>GGSIP University USS ACM Student Chapter</p>
                </body>
            </html>
        ";
        return mail($userEmail, $subject, $body, $headers);
    };
    function blogApprovedMail ($userEmail, $blogTitle, $blogId) {
        $blogUrl = "https://usict.acm.org/dashboard/user-portal/blog/$blogId";
        $subject = "Your blog has been approved";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From:usict.acm.org";

        $body = "
            <html>
                <head><title>Your blog has been approved</title></head>
                <body>
                    <p>Congratulations writer!</p>
                    <br />
                    <p>Your recent blog titled $blogTitle is approved by the team and is published <a herf='$blogUrl'>here</a>.</p>
                    <br />
                    <p>Share the word to your friends and keep writing.</p>
                    <br />
                    <p>Regards</p>
                    <p>GGSIP University USS ACM Student Chapter</p>
                </body>
            </html>
        ";        
    };
    function blogRejectedMail ($userEmail, $blogTitle, $blogId) {
        $blogUrl = "https://usict.acm.org/dashboard/user-portal/blog/$blogId";
        $subject = "Your blog has been rejected";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From:usict.acm.org";

        $body = "
            <html>
                <head><title>Your blog has been approved</title></head>
                <body>
                    <p>Attention writer!</p>
                    <br />
                    <p>Your recent blog titled $blogTitle has been rejected by the team and now added to your drafts. Please try publishing again. Find your blog <a herf='$blogUrl'>here</a>.</p>
                    <br />
                    <p>Keep writing.</p>
                    <br />
                    <p>Regards</p>
                    <p>GGSIP University USS ACM Student Chapter</p>
                </body>
            </html>
        ";        
    };
    function certificateMail ($Sno, $nameParticipant, $email, $event, $date) {
        $id_num = substr($Sno, -4);
        $subject = "Certificate for the event $event";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From:usict.acm.org";

        $body = "
            <html>
                <head><title>Your certificate for the event- $event</title></head>
                <body>
                    <p>Dear $nameParticipant <br> Greetings from the GGSIP University USS ACM Student Chapter!</p>
                    <p>Thank you for participating in <b>$event</b> organized by GGSIP University USS ACM Student Chapter on $date. We are elated by your participation and hope that you had a great time. Here's your certificate as a token of appreciation from our side.
                    <br />
                    You can download it using <a href='https://usict.acm.org/test_acm/verify?id=$id_num'>this link</a>.</p>
                    <p>We hope to see you at more events and have more fun.
                    <br />
                    Happy learning and Happy computing!</p>
                    <br />
                    <p style='margin-bottom:2px;'>Regards</p>
                    <p style='margin-bottom:2px;'><b>GGSIP University USS ACM Student Chapter</b></p>
                    <p><b><a href='https://usict.acm.org/linkedin' target='_blank'>Linkedin</a> | <a href='https://usict.acm.org/facebook' target='_blank'>Facebook</a> | <a href='https://usict.acm.org/instagram' target='_blank'>Instagram</a> | <a href='https://usict.acm.org/discord' target='_blank'>Discord</a></b></p>
                </body>
            </html>
        ";
        return mail($email, $subject, $body, $headers);
    };
    function inviteMail ($Sno, $nameParticipant, $email) {
        $subject = "Welcome, 2026 batch !!";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From:usict.acm.org";
        $one = "https://usict.acm.org/admin/adminPanel/faqadmin/invite/invitations/";
        $two = $Sno;
        $three = ".png";
        
        $four = $one.$two.$three;
        $nameParticipant  = strtok($nameParticipant, " ");
        $body = "
            <html>
                <head><title>Welcome, 2026 batch !!</title></head>
                <body>
                    <img src='$four' alt='' width='500' height='600'>
                    <p> Dear $nameParticipant 
                        <br><br>
                        Greetings for the day !! 
                        <br><br>
                        GGSIP University USS ACM Student Chapter welcomes you to a new and fulfilling college life. We hope that you will make the best use of it.
                        <br >
                        Happy Learning and Happy Computing!
                    </p>
               
                    <p style='margin-bottom:1px;'>Regards</p>
                    <p style='margin-bottom:2px;'><b>GGSIP University USS ACM Student Chapter</b></p>
                    <p><b><a href='https://usict.acm.org/linkedin' target='_blank'>Linkedin</a> | <a href='https://usict.acm.org/facebook' target='_blank'>Facebook</a> | <a href='https://usict.acm.org/instagram' target='_blank'>Instagram</a> | <a href='https://usict.acm.org/discord' target='_blank'>Discord</a></b></p>
                </body>
            </html>
        ";
        return mail($email, $subject, $body, $headers);
    };
?>