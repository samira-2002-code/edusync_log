<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusync</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Créer un compte
        </h2>

        <form action="/EduSync-backend/scripts/authprocess.php" method="POST" class="space-y-4">

            <div>
                <label class="block text-gray-700">Nom</label>
                <input type="text" name="nom"
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Votre nom" >
            </div>

            <div>
                <label class="block text-gray-700">Prénom</label>
                <input type="text" name="prenom"
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Votre prénom">
            </div>

            <div>
                <label class="block text-gray-700">Email</label>
                <input type="text" name="email"
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    >
            </div>

            <div>
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" name="password"
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="********" >
            </div>

            <button type="submit" name="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                S'inscrire
            </button>

        </form>
    </div>

</body>
</html>