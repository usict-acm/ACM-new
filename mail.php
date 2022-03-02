<?php
    function welcomeMail ($userEmail, $userName) {
        $subject = "Welcome to USICT ACM Student Chapter";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From:usict.acm.org";

        $body = "
            <html>
                <head><title>Welcome to USICT ACM Student Chapter</title></head>
                <body>
                    <p>Dear $userName</p>
                    <br />
                    <p>We welcome you to the world of computing and a community made for everybody. We hope that you will have a great time being a part of this community.</p>
                    <br />
                    <p>For more community events, join our discord by clicking <a href='https://usict.acm.org/discord'>here</a>.</p>
                    <br />
                    <p>Regards</p>
                    <p>USICT ACM Student Chapter</p>
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
                    <p>USICT ACM Student Chapter</p>
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
                    <p>USICT ACM Student Chapter</p>
                </body>
            </html>
        ";        
    };
?>