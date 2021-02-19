<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <div class="container">
        <div class="form-container">
            <form action="#" id="form">
                <input name="firstname" type="text" placeholder="Nom" class="form-input">
                <input name="lastname" type="text" placeholder="Prenoms" class="form-input">
                <input name="phone" type="tel" placeholder="Numéro de telephone" class="form-input">
                <select name="sexe" id="sexe" class="form-select">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
                <button type="submit" name="submit" class="form-btn form-btn__primary">Envoyer</button>
            </form>
        </div>
        <div class="tab-container">
            <div class="tab-content__radius">
                <div class="tab-head">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Phone</th>
                                <th>Sexe</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tab-body">
                    <table>
                        <tbody id="tab_person">
                            <tr>
                                <td>1</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>+225 (05) 778 77 999</td>
                                <td>Homme</td>
                                <td>
                                    <form class="action-form"></form>
                                    <button class="form-btn form-btn__danger"><img src="css/delete_forever-white.svg" alt="trash icon"></button>
                                    <button class="form-btn form-btn__success"><img src="css/edit-white.svg" alt="edit icon"></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kady</td>
                                <td>Dja</td>
                                <td>+225 (07) 788 70 999</td>
                                <td>Femme</td>
                                <td>
                                    <button class="form-btn form-btn__danger"><img src="css/delete_forever-white.svg" alt="trash icon"></button>
                                    <button class="form-btn form-btn__success"><img src="css/edit-white.svg" alt=""></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ruth</td>
                                <td>Tooo</td>
                                <td>+225 (25) 178 77 999</td>
                                <td>Femme</td>
                                <td>

                                    <button class="form-btn form-btn__danger"><img src="css/delete_forever-white.svg" alt="trash icon"></button>
                                    <button class="form-btn form-btn__success"><img src="css/edit-white.svg" alt="edit icon"></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="js/index.js" type="module"></script>
</body>

</html>