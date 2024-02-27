nom = None
prenom = None
nom = str(input("Entrez votre nom : "))
prenom = str(input("Entrez votre prenom : "))

def table_multi(table):
    global nom
    global prenom
    print(f"Table de multiplication de {table}:")
    for i in range(1, 10 + 1):
        print(f"{table} x {i} = {table * i}")

table =int(input("Bonjour " + nom + " " + prenom + " veuillez entrez le nombre pour la table de multiplication :"))        
if table <= 0:
    print("Veuillez entrer des valeurs valides")
else:
    table_multi(table)  
  








