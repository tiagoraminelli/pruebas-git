<?php
echo "pruebas tecnicas para la utilizacion del versionado de git"."<br>";
echo "parte 2";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>git test</title>
</head>
<body>
    <h1>prueba de git</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quos, iure accusantium nemo a nostrum provident ratione perferendis explicabo deserunt! Tempora, dignissimos debitis dolor quaerat corrupti itaque architecto? Ad, perferendis?
    <h2>test</h2>
    git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/tiagoraminelli/pruebas-git.git
git push -u origin main
</body>
</html>