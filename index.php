<html>
<link rel="stylesheet" type="text/css" href="istyle.css">
<script src="simpleimage.js"></script>
<title>Jatin's Fantasy League</title>
<head>
    <h1 id="headd">IPL T20 2020</h1>
</head>

<img src="ipl_v1.png" id="imglogo">

<body>
    <h1 id="demo"></h1>

    <script>
        var d = new Date();
        if(d.getDate()>=17 && d.getDate()<=19)
        {
            document.getElementById("demo").innerHTML = "MI vs CSK";
        }
        else if(d.getDate==20)
        {
            document.getElementById("demo").innerHTML = "DC vs KXIP";
        }
        else if(d.getDate==21)
        {
            document.getElementById("demo").innerHTML = "RCB vs SRH";
        }
    </script>

    <p style="position: absolute;left: 25px;">Choose your team.</p>

    <div id="test">
        <h2 id="jatinsxi">Jatin's XI</h2>
        <p id="playerselected">.</p>
        <script>
            function wowow()
            {
                /*document.getElementById("playerselected").innerHTML = document.getElementByValue();*/
                var x = document.getElementsByName("fname")[0].value;
                document.getElementById("playerselected").innerHTML = x;
            }
        </script>
        <p id="playerselected"></p>
        
    </div>

    <input type="button" value="MS Dhoni" name="fname" id="playerselectcsk" onclick="wowow()"><br><br>
    <input type="button" value="Imran Tahir" name="fname" id="playerselectcsk" onclick="wowow()"><br><br>
    <input type="button" value="Dwayne Bravo" id="playerselectcsk"><br><br>
    <input type="button" value="R Jadeja" id="playerselectcsk"><br><br>
    <input type="button" value="Deepak Chahar" id="playerselectcsk"><br><br>
    <input type="button" value="J Bumrah" id="playerselect"><br><br>
    <input type="button" value="K Pandya" id="playerselect"><br><br>
    <input type="button" value="K Pollard" id="playerselect"><br><br>
    <input type="button" value="Shreyas Iyer" id="playerselectdd"><br><br>
    <input type="button" value="Kagiso Rabada" id="playerselectdd"><br><br>
    <input type="button" value="AB de Villiers" id="playerselectrcb"><br><br>
    <input type="button" value="Y Chahal" id="playerselectrcb"><br><br>
    <input type="button" value="P Patel" id="playerselectrcb"><br><br>
    <input type="button" value="Navdeep Saini" id="playerselectrcb"><br><br>
    <input type="button" value="MS Dhoni" id="playerselect"><br><br>
    <input type="button" value="MS Dhoni" id="playerselect"><br><br>
    <input type="button" value="MS Dhoni" id="playerselect"><br><br>
    <input type="button" value="MS Dhoni" id="playerselect"><br><br>
    <input type="button" value="MS Dhoni" id="playerselect"><br><br>
    <input type="button" value="MS Dhoni" id="playerselect"><br><br>
    <input type="button" value="MS Dhoni" id="playerselect"><br><br>
    <input type="button" value="MS Dhoni" id="playerselect"><br><br>
</body>
<script>
    function()
    {
        document.getElementById("playerselected").innerHTML = "MS Dhoni";
    }
</script>
</html>