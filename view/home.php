<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap">
        <title>The Darling Expose</title>
        <link href="/darling_expose/css/stylesheet.css" rel="stylesheet" type="text/css" media="screen"/>

    </head>
    <body>
    <div id="wrapper">
        <div id="logo-account">
            <header>
                <?php require $_SERVER['DOCUMENT_ROOT'].'/darling_expose/snippets/header.php'; ?>             
            </header>
        </div>
        <div id="navigation">
            <nav>
                <?php require $_SERVER['DOCUMENT_ROOT'].'/darling_expose/snippets/navigation.php';
                //echo $navList; ?>  
            </nav>
        </div>

        <main>
            <div id="home-intro">
                <div class="wrapper-column">
                    <p class="intro-par" id="intro-par-1">Here you can access all of the different topics I write about here at The Darling Exposé (previously known as …and More)!
                    As a writer, I strive to push myself and express thoughts and feelings that will relate to anyone and everyone.</p>
                <figure>
                    <img src="/darling_expose/images/diyana_profiles/20210209_192207.jpg" id="profile-image-1" class="intro-image" alt="Diyana Profile Image" >
                </figure>
                </div>

                <div class="wrapper-column">
                <!--<figure>
                    <img src="/darling_expose/images/diyana_profiles/img_20210502_221227_382.jpg" id="profile-image-2" class="intro-image" alt="Diyana Profile Image" >
                </figure>-->
                    <p class="intro-par" id="intro-par-2">I try to post twice a week- Mondays and Saturdays. I may decide to post about one topic for one week and another the next. If you want to keep up feel free to subscribe to my emails!</p>
                </div>
            </div>    

            <div id="subscribe-form">
                <form id="register-client">
                    <input type="text" name="submit" id="register-client-input" placeholder="Enter your email address">
                    <button type="submit" name="submit" value="Register" id="register-client-btn">Subscribe</button>
                </form>
            </div>
        </main>
        <aside></aside>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/darling_expose/snippets/footer.php'; ?>
        </footer>
    </div>
    </body>
</html>