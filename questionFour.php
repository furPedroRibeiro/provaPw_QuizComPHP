<link rel="stylesheet" href="styleQuest.css">
    <title>Questão 4</title>
    <div class="content">
        <form action="" method="post">
            <div class="divLabel">
            <label for="select">Qual a nacionalidade de Napoleão?</label>
            </div>
            <div class="divSelect">
            <select name="select" id="questFour">
                <option value="França">França</option>
                <option value="Bélgica">Bélgica</option>
                <option value="Inglaterra">Inglaterra</option>
                <option value="Finlândia">Finlândia</option>
                <option value="Escócia">Escócia</option>
            </select>
            </div>
            <div class="btnDiv">
                <button class="btnDefault">Enviar</button>
            </div>        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questFour'] = $_POST['select'];
            header('location: questionFive.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>