<link rel="stylesheet" href="styleQuest.css">
    <title>Questão 2</title>
    <div class="content">
        <form action="" method="post">
            <div class="divLabel">
            <label for="select">Quantos albuns o sex pistols tem?</label>
            </div>
            <div class="divSelect">
            <select name="select" id="questTwo">
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="1">1</option>
                <option value="4">4</option>
                <option value="8">8</option>
            </select>
            </div>
            <div class="btnDiv">
                <button class="btnDefault">Enviar</button>
            </div>        </form>
    </div>
    <?php
        session_start();

        if($_POST){
            $_SESSION['questTwo'] = $_POST['select'];
            header('location: questionThree.php');
        } else{
            echo "Formulário não preenchido ainda :p";
        }
    ?>