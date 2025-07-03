<body align="center">
    <h3>Send Mail</h3>
    <form action="mail.php" method="post" enctype="multipart/form-data">
        <p><input type="text" name="name" placeholder="Enter Your Name"></p>
        <p><input type="text" name="email" placeholder="Enter Your email"></p>
        <p><input type="text" name="subject" placeholder="Enter Your subject"></p>
        <p><input type="text" name="message" placeholder="Enter Your message"></p>
        <p><input type="file" name="attachement"></p>
        <p><input type="submit" value="Send" name="send"></p>
    </form>
</body>