<html>
<head>
    <link rel="stylesheet" href="contact.css" />
    <script type="text/javascript" src="contact.js"></script>
</head>
<body>
<div id="box">
    <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
        <h3>Formulaire de contact</h3>
        <label>Nom: <span>*</span></label>
        <input type="text" id="name" name="name" placeholder="Nom"/>
        <label>Email: <span>*</span></label><span id="info" class="info"></span>
        <input type="email" id="email" name="email" placeholder="Email"/>
        <label>Sujet: <span>*</span></label>
        <input type="text" id="subject" name="subject" placeholder="Demande de renseignement"/>
        <label>Message:</label>
        <textarea id="message" name="message" placeholder="Message..."></textarea>
        <input type="submit" name="send" value="Envoyer le message"/>
    </form>
</div>
</body>
</html>


<style>

    body
    {
        background: linear-gradient(#e66465, #9198e5); ;
    }
    #box {
        width: 955px;
        margin: 20px auto;
        padding-top: 20px;
        font-family: serif;
        text-align: center;
    }
    #form {
        margin: 20px auto 0 auto;
        border-radius: 2px;
        padding: 20px 30px;
        box-shadow: 0 0 15px;
        font-size: 14px;
        font-weight: bold;
        width: 350px;
        float: none;
    }
    h3{
        text-align:center;
        font-size:20px;
    }
    input{
        width:100%;
        height:35px;
        margin-top:5px;
        margin-bottom: 20px;
        border:1px solid #999;
        border-radius:3px;
        padding:5px;
    }
    input[type=submit]{
        background:linear-gradient(#e66465, #9198e5); ;
        border:1px solid white;
        font-family: serif;
        font-Weight:bold;
        font-size:18px;
        color:white;
    }
    textarea{
        width:100%;
        height:80px;
        margin-top:5px;
        border-radius:3px;
        padding:5px;
        resize:none;
    }
    span{
        color:red
    }
    .successMessage{
        background-color: #7acc7d;
        border: #2b5a2d 1px solid;
        padding: 5px 9px;
        color: #262b26;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.9em;
    }
    .errorMessage{
        background-color: #e64141;
        border: #da1414 1px solid;
        padding: 5px 10px;
        color: #fdf7f7;
        border-radius: 4px;
    }
    .info{
        font-size: 0.9em;
        color: #d67262;
        letter-spacing: 2px;
        padding-left: 5px;
    }
</style>