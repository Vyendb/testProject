<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'; ?>
<link rel="stylesheet" href="css/contact.css"/>
<body>
<?php include 'include/navbar.php'; ?>
<div class="contactBody shadow">

    <h1 class="text-center">&bull; Contact EcoBadge &bull;</h1>
    <div class="supportIcon d-flex justify-content-center">
        <img src="img/tiers/platinum@4x.png" width="82" height="85.6" alt="treeIcon"/>
    </div>

    <form action="#" method="post" id="contact_form">
        <div class="name">
            <label for="name_input"></label><input type="text" placeholder="Name" name="name" id="name_input" required>
        </div>
        <div class="email">
            <label for="email_input"></label><input type="email" placeholder="E-mail" name="email" id="email_input" required>
        </div>
        <div class="subject">
            <label for="subject_input"></label><select name="subject" id="subject_input" required>
                <option>Subject</option>
                <option>Account issue</option>
                <option>Membership question</option>
                <option>Partnership question</option>
                <option>Technical question</option>
                <option>Make a proposal</option>
                <option>Other</option>
            </select>
        </div>
        <div class="message">
            <label for="message"></label>
            <label for="message_input"></label><textarea name="message" placeholder="Message" id="message_input" cols="30" rows="5" required></textarea>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="tosInput">
            <label class="form-check-label" for="tosInput">I agree to the <a class="tos" href="#"><i>Terms and Conditions</i></a> and <a class="policy" href="#"><i>Policy</i></a>,
                and give consent to the use of my details and information for the purpose of responding to my message.</label>
        </div>
        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="policyInput">
            <label class="form-check-label" for="policyInput">I consent to my email address being used for marketing and
                promotional reasons, and subscribe to the EcoBadge mailing list.</label>
        </div>
        <div class="submit d-flex justify-content-center">
            <input type="submit" value="Send Message" id="sendButton"/>
        </div>
    </form>
</div>

<?php include 'include/footer.php'; ?>
</body>
</html>