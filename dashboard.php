<?php
// Initialize the session
@session_start();
// include('connect.php');

// Check if the user is logged in, if not then redirect him to login page
// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: log.php");
//     exit;
// }
//include('session.php');
 $user = $_SESSION['user'];
 $pass = $_SESSION['pass'];
//  $par = $_SESSION['par']+1 ;
?>
<?php 
//     if($par == 1){
//     header("location:logout.php");
// }


?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    </link>
    <title> موقف الشبكة</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- لجعل الصفحة ملائمة لحجم الشاشة -->
    <style>
        h1 {
            text-align: center;
            font-family: Cairo;
            font-size: 18px;
        }

        h2 {
            text-align: center;
            font-family: Cairo;
            font-size: 18px;
        }

        h3 {
            text-align: center;
            font-family: Cairo;
            font-size: 18px;
        }

        img {
            display: block;
            margin: auto;
            /* توسيط الصورة */
            max-width: 100%;
            /* تحديد عرض الصورة كحد أقصى */
            height: auto;
            /* تعديل الارتفاع تلقائيًا وفقًا للعرض */
        }
    </style>
</head>

<body>
    <a href="logout.php">LogOut</a>
    <h1>قسم السيطرة والتشغيل و الاتصالات الرئيسي</h1>
    <h2>موقف توليد الشبكة الوطنية</h2>
    

    <img id="myImage" src="https://drive.google.com/uc?id=10DNugVjXA36AzDFc_tfLggqdVVb87EUC" alt="صورة">
    <script>
        function updateImage() {
            var img = document.getElementById("myImage");
            img.src = "https://drive.google.com/uc?id=10DNugVjXA36AzDFc_tfLggqdVVb87EUC" + "&timestamp=" + new Date()
                .getTime();
            // إضافة التوقيت الحالي كمعرّف للصورة لتجنب الاحتفاظ بالنسخة المخزنة في الذاكرة المؤقتة للمتصفح
        }
        setInterval(updateImage, 10); // تحديث الصورة كل 10 ثوانٍ
    </script>
</body>

</html>