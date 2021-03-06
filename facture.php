<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Facture monde du parfum</title>
        <meta charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
        <link rel="stylesheet" href="styles-facture/style.css">
        <link rel="stylesheet" href="styles-facture/print.css" media="print">
    </head>
    <body>
        <div class="wrapper">
            <select class="switch hide-printing" id="switch">
                <option value="Facture n°">Facture</option>
                <option value="Devis n°">Devis</option>
            </select>
            <div class="row">
                <div class="col bordered">
                    <input class="company-name" type="text" placeholder="Vendeur">
                    <textarea class="from" placeholder="1 RUE
12345 VILLE
01 02 03 04 05
contact@vendeur.fr"></textarea>
                    <input  class="siret" type="text" placeholder="SIRET 123 456 789 012 34">
                    <div class="info">Dispensé d'immatriculation au registre du commerce et des sociétés (RCS) et au répertoire des métiers (RM)</div>
                </div>
                <div class="col bordered">
                    <input type="text" placeholder="Acheteur" class="client-name">
                    <textarea class="to" placeholder="1 RUE
12345 VILLE
01 02 03 04 05
contact@acheteur.fr"></textarea>
                </div>
            </div>

            <div class="row row--second">
                <div class="col bordered">
                    <div class="invoice-number"><span id="selected">Facture n°</span><span id="invoice-number"></span></div>
                </div>
                <div class="col bordered">
                    <div id="date"></div>
                </div>
            </div>

            <table class="invoice-items" id="invoice-items">
                <thead>
                    <tr>
                        <th scope="col" class="invoice-items__desc">Désignation du produit ou de la prestation</th>
                        <th scope="col" class="invoice-items__quantity">Quantité</th>
                        <th scope="col" class="invoice-items__unit">Prix unitaire HT</th>
                        <th scope="col" class="invoice-items__total">Total HT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hide-printing">
                        <td colspan="4">
                            <a href="#" class="btn btn--green" id="add">Ajouter</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col"><!-- empty --></div>
                <div class="col bordered">
                    <div class="total-row">
                        <div class="total-row__label">Remise</div>
                        <div class="total-row__amount">
                            <input type="text" min="0" step="5" placeholder="0" class="discount" id="discount"> &#37;
                        </div>
                    </div>
                    <div class="total-row">
                        <div class="total-row__label">Total HT</div>
                        <div class="total-row__amount"><span id="total">0</span> &euro;</div>
                    </div>
                    <p>TVA non applicable, art. 293 B du CGI</p>
                </div>
            </div>

            <div class="terms">
                <textarea>Modalités de paiement</textarea>
            </div>

            <a href="#" class="btn btn--blue hide-printing" id="print">Imprimer</a>
            <a href="homme.php">Retourner à la boutique</a>
        </div>

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/moment/min/moment.min.js"></script>
        <script src="js-facture/script.js"></script>
    </body>
</html>