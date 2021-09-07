<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query form</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="query.css">
</head>
<body>
    <div class="container">
        <h1>GET IN TOUCH</h1>
        <p>Have any questions regarding your mental or physical health? Drop a message</p>
        <form action="queryback.php" method="POST">
            <div class="row">
                <div class="column">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Your name here" name="name">
                </div>
                <div class="column">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Your email here" name="email">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="Your subject here" name="sub">
                </div>
            <div class="row">
                <div class="column">
                    <label for="issue">Describe your issue</label>
                    <textarea id="issue" placeholder="Describe your issue in detail here" rows="3" name="issue"></textarea>
                </div>
            </div>
            <button name="queryset">Submit </button>
        </form>
    </div>
</body>
</html>
