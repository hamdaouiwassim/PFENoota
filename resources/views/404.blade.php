<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <title> للأسف لقد حصل خطأ 404</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        a {
            text-decoration: none;
        }
        body {
            font-weight: 600;
            color: #343434;
        }
        .error_section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-image: linear-gradient(-225deg, #1A1A1A, #343434);
        }
        .error_section_subtitle {
            color: #25F193;
            text-transform: uppercase;
            letter-spacing: 5pt;
            font-weight: 500;
            font-size: 0.8rem;
            margin-bottom: -5em;
        }
        .error_section .error_title {
            --x-shadow: 0;
            --y-shadow: 0;
            --x:50%;
            --y:50%;
            font-size: 15rem;
            transition: all 0.2s ease;
            position: relative;
            padding: 2rem;
        }
        .error_section .error_title:hover {
            transition: all 0.2s ease;
            text-shadow: var(--x-shadow) var(--y-shadow) 10px #1A1A1A;
        }
        .error_section .error_title p {
            position: absolute;
            top: 2rem;
            left: 2rem;
            background-image: radial-gradient(circle closest-side, rgba(255, 255, 255, 0.05), transparent);
            background-position: var(--x) var(--y);
            background-repeat: no-repeat;
            text-shadow: none;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: all 0.1s ease;
        }

        .btn {
            padding: 0.8em 1.5em;
            border-radius: 99999px;
            background-image: linear-gradient(to top, #03A9F4, #00BCD4);
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.2), inset 0px -2px 5px 0px rgba(0, 0, 0, 0.2);
            border: none;
            cursor: pointer;
            text-shadow: 0px 1px #343434;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1.5pt;
            font-size: 1.8rem;
            font-weight: 700;
            transition: ease-out 0.2s all;
        }
        .btn:hover {
            text-shadow: 0px 1px 1px #ffffff;
            transform: translateY(-5px);
            box-shadow: 0px 4px 15px 2px rgba(0, 0, 0, 0.1), inset 0px -3px 7px 0px rgba(0, 0, 0, 0.2);
            transition: ease-out 0.2s all;
        }
    </style>
</head>
<body class="error_section">
    <p class="error_section_subtitle" style="color: #fff;font-size: 36px;letter-spacing: 1pt;text-align: center">للأسف لم نجد الصفحة التي تبحث عنها 404 !! </p>
    <br><br/><br/><br/>
    <br><br/><br/><br/>
    <h1 class="error_title">
        <p style="color: #eee">404</p>
        404
    </h1>
    <a href="/" class="btn">صفحة البداية</a><br>
    <a href="/login" class="btn">صفحتي الشخصية</a>
<script>
    const title = document.querySelector('.error_title')
    //////// Light //////////
    document.onmousemove = function(e) {
        let x = e.pageX - window.innerWidth/2;
        let y = e.pageY - window.innerHeight/2;
        title.style.setProperty('--x', x + 'px')
        title.style.setProperty('--y', y + 'px')
    }
    ////////////// Shadow ///////////////////
    title.onmousemove = function(e) {
        let x = e.pageX - window.innerWidth/2;
        let y = e.pageY - window.innerHeight/2;
        let rad = Math.atan2(y, x).toFixed(2);
        let length = Math.round(Math.sqrt((Math.pow(x,2))+(Math.pow(y,2)))/10);
        let x_shadow = Math.round(length * Math.cos(rad));
        let y_shadow = Math.round(length * Math.sin(rad));
        title.style.setProperty('--x-shadow', - x_shadow + 'px')
        title.style.setProperty('--y-shadow', - y_shadow + 'px')

    }
</script>
</body>

</html>
