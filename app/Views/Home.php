<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeMatch</title>
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>

    <main> 
        <div class = "content">
            <div class = "forms"> 
                <h1> Planeje sua celebração<br> com algumas informações...</h1>
                <form class="groupform" action="/wematch/app/creategroup" method="post">
                    <div class="visible-form" id="firstform">
                        <h2> Primeiro, um pouco sobre seu grupo </h2>
                        <label for="hostname"> Anfitrião </label>
                            <input type="text" name="hostname" id="hostname" placeholder="Digite o nome do anfitrião">
                        <label for="groupname"> Nome do grupo </label>
                            <input type="text" name="groupname" id="groupname" placeholder="Algo como.. Amigo secreto da família?">
                        <label for="descgroup"> Descrição </label>
                            <textarea maxlength="255" name="descgroup" id="descgroup" placeholder="Uma breve descrição sobre o grupo, informe oque você acha relevante. (255 caracteres)"></textarea>
                        <button type="button" onclick="changeDiv(1, 2); sendHost();"> Continuar.. </button>
                    </div>

                    <div class="hidden-form" id="scndform" > 
                        <h2> Agora, algumas informações adicionais </h2>
                        <label for="celebrationdate"> Quando será a celebração? </label>
                            <input type="date" name="celebrationdate" id="celebrationdate">
                        <label for="budget"> Os presentes tem valor definido? </label>
                            <h3> Até R$ </h3>
                            <input type="number" name="budget" id="budget" placeholder="0">
                        
                        <div class="formbtns">
                            <button type="button" onclick="changeDiv(2,1)"> Voltar.. </button>
                            <button type="button" onclick="changeDiv(2,3)"> Continuar.. </button>
                        </div>
                    </div>

                    <div class="hidden-form" id="thirdform"> 
                        <h2> Para finalizar, adicione o nome dos participantes </h2>

                        <div class="memberlist" id="memberlist">
                            <input type="text" name="host" id="host" disabled="disabled">
                            <input type="text" name="member1" id="member2" placeholder="Nome do membro 2">
                            <input type="text" name="member2" id="member3" placeholder="Nome do membro 3">
                        </div>
                        <button type="button" onclick="createInput()"> + </button>

                        <div class="formbtns">
                            <button type="button" onclick="changeDiv(3, 2)"> Voltar.. </button>
                            <button type="submit" > Enviar </button>
                        </div>
                    </div>
                    
                </form>
            </div>

            <div class = "introduction">
                <h1> WeMatch </h1>
                <p> Organize seu Amigo Secreto utilizando WeMatch, é simples e rápido! </p>
                <img src="Assets/Images/gift-img.png" alt="#" style="width: 35vw;">
            </div>  
        </div>
    </main>
    <footer>
      <img src="Assets/Images/footer-gifts.png">
      <img src="Assets/Images/footer-gifts.png">
    </footer>
</body>
</html>