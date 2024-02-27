const readline = require('readline');

const interface = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function table_multi(nom, prenom, table) {
    console.log(`Bonjour ${nom} ${prenom} ,`);
    console.log(`Voici la table de multiplication pour ${table}:`);
    for (let i = 1; i <= 10; i++) {
        console.log(`${table} x ${i} = ${table * i}`);
    }
}

interface.question("Entrez votre nom : ", function(nom) {
    interface.question("Entrez votre prenom : ", function(prenom) {
        interface.question("Choisissez une table de multiplication : ", function(table) {
            table = parseInt(table);
            if (!isNaN(table) && table > 0) {
                table_multi(nom, prenom, table);
            } else {
                console.log("Veuillez entrer des valeurs valides.");
            }
            interface.close();
        });
    });
});
