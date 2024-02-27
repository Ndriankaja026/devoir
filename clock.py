import tkinter as tk
from time import strftime

# Fonction pour mettre à jour l'heure
def update_time():
    current_time = strftime('%H:%M:%S %p') # Format de l'heure
    label.config(text=current_time) # Met à jour le texte de l'étiquette avec l'heure actuelle
    label.after(1000, update_time) # Répète la mise à jour toutes les 1000ms (1 seconde)

# Création de la fenêtre
root = tk.Tk()
root.title("Montre")

# Création d'une étiquette pour afficher l'heure
label = tk.Label(root, font=('calibri', 40, 'bold'), background='black', foreground='white')
label.pack(anchor='center')

# Appeler la fonction pour mettre à jour l'heure
update_time()

# Exécution de la boucle principale de l'interface graphique
root.mainloop()
