@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

* {
    margin: 0; 
    padding: 0; 
    box-sizing: border-box;
}

body {
    background-color: rgb(51, 51, 51);
}

/* TIPOGRAFIAS */
.ubuntu {font-family: 'Ubuntu', sans-serif;}

.fw300 {
    font-weight: 300;
}

.fw700 {
    font-weight: 700;
}

header {
    background-color: yellow;
    height: 80px;
    width: 100%;
    margin: auto; /* centro un elemento que no ocupe el 100% del ancho */
    padding: 0 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.social a {
    text-decoration: none;
    margin: 0 5px;
    color: black;
}

.social a:hover {
    color: red;
    text-shadow: 0 0 5px blue;
}

.wrapper {
    display: flex;/* habilita flexbox al contenido de mi selector */
    gap: 50px;/* similar a margin */
    flex-direction: row;
    padding-left: 5%;
    padding-right: 5%;
    padding-top: 25px;
    overflow: hidden;
    width: 100%;
    height: 100%;
    display: flex;
    flex-wrap: wrap;
}

.card {
    position: relative;
    flex: 0 0 300px;
/*  flex-grow: 1;
    flex-shrink: 0;
    flex-basis: 100px;
    width: 30%; */
    height: 500px;
    background-color: white;
    padding: 20px;
    border-radius: 16px;
}

.card .imagen {
    width: 100%;
    height: 50%;
    background-color: grey;
    margin-bottom: 10px;
    display: flex;
    justify-content: center;
}

.card .titulo {
    font-size: 18pt;
}

.card .boton {
    position: absolute;
    top: 446px;
    right: 20px;
    border-radius: 10px;
    background-color: gray;
    padding: 10px 30px;
    color: white;
    text-decoration: none;
    font-size: 12pt;
    /* font-family: sans-serif; */

}

header .marca {
    font-size: 20pt;
}

header .social {
    font-size: 17pt;
    padding: 0.5em;
}

/* .marca{
    background-color: red;
} */

footer {
    background-color: #444;
    height: 60px;
    width: 100%;
    position: fixed;
    bottom: 0;
    color: white;
    line-height: 60px;  
    text-align: center;
    padding: 0 0 0 0;
}

.contenido {
    height: 100vw;
    width: 100%;
    margin: auto;
    background-color:80093E9;
    background-image: linear-gradient(160deg, #0093E9 0%, #84fff1 100%);
    padding-bottom: 20px;
    /* margin-bottom: 60px; */
}