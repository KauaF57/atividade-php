<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
</head>

<body>

    <h1>Informações dos usuários</h1>

    <h2>Instrutor</h2>

    <?php if ($resultadoInstrutor !== null): ?>

        <p>ID: <?= $resultadoInstrutor->id ?></p>

        <p>Nome: <?= $resultadoInstrutor->nome ?></p>

        <p>Email: <?= $resultadoInstrutor->email ?></p>

        <p>Tipo: <?= $resultadoInstrutor->tipo ?></p>

        <p>
            Login: realizado com sucesso
        </p>

        <p>
            <?= $resultadoInstrutor->saudacao() ?>
        </p>

    <?php else: ?>

        <p>Login do instrutor inválido.</p>

    <?php endif; ?>


    <h2>Aluno</h2>

    <?php if ($resultadoAluno !== null): ?>

        <p>ID: <?= $resultadoAluno->id ?></p>

        <p>Nome: <?= $resultadoAluno->nome ?></p>

        <p>Email: <?= $resultadoAluno->email ?></p>

        <p>Tipo: <?= $resultadoAluno->tipo ?></p>

        <p>
            Login: realizado com sucesso
        </p>

        <p>
            <?= $resultadoAluno->saudacao() ?>
        </p>

    <?php else: ?>

        <p>Login do aluno inválido.</p>

    <?php endif; ?>

</body>

</html>

