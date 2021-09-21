<?php
include 'navbar.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="favicon.ico">
	<title>BitClub | Galgje</title>
    <link rel="stylesheet" type="text/css" href="stylea.css">
</head>

<body>
<?php
                    if (isset($_SESSION['username'])) {
                        loggednavbar($connect);
        ?>

    <div id="tag"></div>
        <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>

    <div id="small-box"><div id="gamea"><?php


        
        $woordenarray = array("javascript", "loop", "array", "variable", "database", "frontend", "backend");
         
        
        if(!isset($_SESSION['woord']))
        {
            $rand= rand(0,count($woordenarray)-1);
            $woord=$woordenarray[$rand];
            $_SESSION["woord"] = strtoupper(trim($woord));
        }
         
        $form = true;
        
        if(isset($_POST['submit']) && isset($_POST['submit']))
        {
            if (stripos($_SESSION['woord'], $_POST['submit'][0]) === false)
            {
                array_push($_SESSION['foute_letters'], $_POST['submit'][0]);
            }
            else
            {
                array_push($_SESSION['juiste_letters'], $_POST['submit'][0]); 
            }
        }
         
        
        if(!isset($_SESSION['foute_letters']))
        {
            $_SESSION['foute_letters'] = array();
        }
        if(!isset($_SESSION['juiste_letters']))
        {
            $_SESSION['juiste_letters'] = array();
        }
         
         
         
        
        $show = '';
        for($i = 0; $i < strlen($_SESSION['woord']); $i++)
        {
            $show .= in_array(substr($_SESSION['woord'], $i, 1), $_SESSION['juiste_letters']) ? substr($_SESSION['woord'], $i, 1) : "*";
        }
         
        echo $show; 
         
        
        if(count($_SESSION['foute_letters']) >= 7)
        {
            echo '<h1 style="text-decoration:blink">Game over</h1> Het woord was '.$_SESSION['woord'].'<br />Het spel wordt binnen 5 seconden opnieuw gestart';
            $form = false;
            session_destroy();
            header("Refresh: 5;./games.php ");
            exit;
        }
        
        if($show == $_SESSION['woord'] && $form == true)
        {
            echo '<h1 style="text-decoration:blink">! Gefeliciteerd !</h1>Spel wordt binnen 5 secs opnieuw gestart';
            $form = false;
            session_destroy();
            header("Refresh: 5;./games.php ");   
            exit;
        }
        ?>
         
         
         
        <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
        <?php
        
        if($form == true)
        {
            $letters = range("A","Z",);
            
            foreach($letters as $letter)
            {
                if(!in_array($letter,$_SESSION['juiste_letters']) && !in_array($letter, $_SESSION['foute_letters']))
                {
                ?>
                <input name="submit[]" id="<?php echo $letter?>" type="submit" value="<?php echo $letter?>" />
                <?php
                }
            }
        ?>
        <?php
        }
        ?>
            <input name="reset" type="submit" value="terug" />
        </form>
         
        <?php
        
         $f[7] = '
            _____
            |/    |
            |     0
            |    /|\
            |    / \
            |
              ______
        ';
        $f[6] = '
            _____
            |/    |
            |     0
            |    /|\
            |    / \
            |
              ______
        ';
        $f[5] = '
            _____
            |/    |
            |     0
            |    /|\
            | 
            |
              ______
        ';
        $f[4] = '
            _____
            |/    |
            |     0
            | 
            |  
            |
              ______
        ';
        $f[3] = '
            _____
            |/    |
            | 
            |
            |
            |
              ______
        ';
        $f[2]= '
            _____
            |
            |
            |
            |
            |
              ______
        ';
        $f[1]= '
         
         
         
         
         
         
              ______
        ';
        $f[0]='';
         
        echo '<pre>'.$f[count($_SESSION['foute_letters'])].'</pre>';
        echo'</div></div>

    <div id="logos"></div>
        <a href="https://www.instagram.com/bit_academy_/">
        <img id="insta" src="instagram.png" alt="Insta Logo">
        </a>
        <a href="https://www.linkedin.com/school/bit-academy-nl/?originalSubdomain=nl">
        <img id="linkedin" src="Linkedin.png" alt="LinkedIn Logo">
        </a>
        <a href="https://www.facebook.com/wearebitacademy/">
        <img id="facebook" src="Facebook.png" alt="facebook Logo">
        </a>
        <img id="pc1" src="pc1.png" alt="Een Pc">

        <button id="bt1">Meer Info!</button>
        
</body>
</html>';
?>
<?php
                    } else {
                        navbarr();
                        ?>
                            <div id="tag"></div>
        <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>

    <div id="small-box"><div id="gamea"><?php


         
        if(isset($_POST['reset']))
        {
            session_destroy();
            header("location: ".$_SERVER['REQUEST_URI']);
            exit;
        }
        
        $woordenarray = array("javascript", "loop", "array", "variable", "database", "frontend", "backend");
         
        
        if(!isset($_SESSION['woord']))
        {
            $rand= rand(0,count($woordenarray)-1);
            $woord=$woordenarray[$rand];
            $_SESSION["woord"] = strtoupper(trim($woord));
        }
         
        $form = true;
        
        if(isset($_POST['submit']) && isset($_POST['submit']))
        {
            if (stripos($_SESSION['woord'], $_POST['submit'][0]) === false)
            {
                array_push($_SESSION['foute_letters'], $_POST['submit'][0]);
            }
            else
            {
                array_push($_SESSION['juiste_letters'], $_POST['submit'][0]); 
            }
        }
         
        
        if(!isset($_SESSION['foute_letters']))
        {
            $_SESSION['foute_letters'] = array();
        }
        if(!isset($_SESSION['juiste_letters']))
        {
            $_SESSION['juiste_letters'] = array();
        }
         
         
         
        
        $show = '';
        for($i = 0; $i < strlen($_SESSION['woord']); $i++)
        {
            $show .= in_array(substr($_SESSION['woord'], $i, 1), $_SESSION['juiste_letters']) ? substr($_SESSION['woord'], $i, 1) : "*";
        }
         
        echo $show; 
         
        
        if(count($_SESSION['foute_letters']) >= 7)
        {
            echo '<h1 style="text-decoration:blink">Game over</h1> Het woord was '.$_SESSION['woord'].'<br />Het spel wordt binnen 5 seconden opnieuw gestart';
            $form = false;
            session_destroy();
            header("Refresh: 5;/games.php ");
            exit;
        }
        
        if($show == $_SESSION['woord'] && $form == true)
        {
            echo '<h1 style="text-decoration:blink">! Gefeliciteerd !</h1>Spel wordt binnen 5 secs opnieuw gestart';
            $form = false;
            session_destroy();
            header("Refresh: 5;/games.php ");   
            exit;
        }
        ?>
         
         
         
        <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
        <?php
        
        if($form == true)
        {
            $letters = range("A","Z",);
            
            foreach($letters as $letter)
            {
                if(!in_array($letter,$_SESSION['juiste_letters']) && !in_array($letter, $_SESSION['foute_letters']))
                {
                ?>
                <input name="submit[]" id="<?php echo $letter?>" type="submit" value="<?php echo $letter?>" />
                <?php
                }
            }
        ?>
        <?php
        }
        ?>
            <input name="reset" type="submit" value="terug" />
        </form>
         
        <?php
        
         $f[7] = '
            _____
            |/    |
            |     0
            |    /|\
            |    / \
            |
              ______
        ';
        $f[6] = '
            _____
            |/    |
            |     0
            |    /|\
            |    / \
            |
              ______
        ';
        $f[5] = '
            _____
            |/    |
            |     0
            |    /|\
            | 
            |
              ______
        ';
        $f[4] = '
            _____
            |/    |
            |     0
            | 
            |  
            |
              ______
        ';
        $f[3] = '
            _____
            |/    |
            | 
            |
            |
            |
              ______
        ';
        $f[2]= '
            _____
            |
            |
            |
            |
            |
              ______
        ';
        $f[1]= '
         
         
         
         
         
         
              ______
        ';
        $f[0]='';
         
        echo '<pre>'.$f[count($_SESSION['foute_letters'])].'</pre>';
        echo'</div></div>

    <div id="logos"></div>
        <a href="https://www.instagram.com/bit_academy_/">
        <img id="insta" src="instagram.png" alt="Insta Logo">
        </a>
        <a href="https://www.linkedin.com/school/bit-academy-nl/?originalSubdomain=nl">
        <img id="linkedin" src="Linkedin.png" alt="LinkedIn Logo">
        </a>
        <a href="https://www.facebook.com/wearebitacademy/">
        <img id="facebook" src="Facebook.png" alt="facebook Logo">
        </a>
        <img id="pc1" src="pc1.png" alt="Een Pc">

        <button id="bt1">Meer Info!</button>
        
</body>
</html>';
?>
<?php
                    }
                    ?>

