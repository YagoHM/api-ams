<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <script>
        const nome = "Fernando"
        var sobrenome = "Graciano"
        let idade = 35

        let lista = ["Um","Dois","Três"]
        for (let i = 0 ; i <lista.length ; i++)
        {
            document.write(lista[i]+"<br>");
        }

        let marcelo = {
            "Nome" : "Marcelo",
            "Idade" : "17",
            "Peso" : "62",
            "Altura" : "1.61",
        }

        let marcelo2 = {
            "Nome" : "Marcelo2",
            "Idade" : "117",
            "Peso" : "622",
            "Altura" : "1.61",
        }

        let marcelo3 = {
            "Nome" : "Marcelo3",
            "Idade" : "172",
            "Peso" : "622",
            "Altura" : "1.2",
        }

        meninos = [marcelo, marcelo2, marcelo3]

        for(let i = 0 ; i< meninos.length; i++)
        {
            document.write(meninos[i].Nome+"<br>")
        }
    </script>
</body>
</html>