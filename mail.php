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
        // var_dump($email);

                
        // Email subject 
        $subject = 'PHP Email with Attachment by CodexWorld';  
        
        // Attachment file 
        $file = "admin/adminPanel/faqadmin/invite/invitations/$Sno.png"; 
        
        // Email body content 
        $htmlContent = ' 
            <h3>PHP Email with Attachment by CodexWorld</h3> 
        '; 
        
        // Boundary  
        $semi_rand = md5(time());  
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
       
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'Content-Type: multipart/mixed;' . "\r\n";
        $headers .= "boundary=\"{$mime_boundary}\"" . "\r\n";
        $headers .= "From:usict.acm.org"; 

        
        // Multipart boundary  
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
        
        // Preparing attachment 
        if(!empty($file) > 0){ 
            if(is_file($file)){ 
                $message .= "--{$mime_boundary}\n"; 
                $fp =    @fopen($file,"rb"); 
                $data =  @fread($fp,filesize($file)); 
        
                @fclose($fp); 
                $data = chunk_split(base64_encode($data)); 
                $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
                "Content-Description: ".basename($file)."\n" . 
                "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
            } 
        } 
        $message .= "--{$mime_boundary}--"; 
        $returnpath = "-f" . "usict.acm.org"; 
        
      
        return mail($email, $subject, $message, $headers, $returnpath);
    };
?>