
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Icon Group</title>
    <style type ="text/css">
    #kontenti {
        display: flex ;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: 'Segoe UI light', Tahoma;
        width: 500px;
        margin:0 auto;
    }
    #kontenti img {
        max-width: 700px;
        height: 400px;
    }
    button{
        border-radius: 100%;
        border-style: inherit;
        width: 40px;
        height: 40px;
        font: 10pt;
    }
    button:hover{
        background-color: rgb(189, 186, 186);
    }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div id="kontenti">
        <header>
        <h2>Tipet e Apartamenteve tona!</h2>
        <img id="slideshow" />
        </header>
        <button onclick="changeImg()">Next</button>
    </div>

    <?php include 'footer.php';?>

    <script>
        let i = 0;
        let imgArray = ['foto/tipet/tipi a.png','foto/tipet/tipi b.png','foto/tipet/tipi c.png','foto/tipet/tipi d.png','foto/tipet/tipi E.png','foto/tipet/tipi e2.png','foto/tipet/tipi f.png','foto/tipet/tipi h.png'];

        function changeImg(){
            document.getElementById('slideshow').src = imgArray[i];

            if(i< imgArray.length -1){
                i++;
            }
            else{
                i=0;
            }
        }
        document.addEventListener(onload, changeImg());
    </script>
</body>
</html>
