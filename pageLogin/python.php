print("Veuillez passer votre badge sur la borne")
nb = float(input())

liste = ["flavien", "nicolas", "enzo", "baptiste"]

if nb < 1:
    print("Bonjour "+liste[0])
    print("Vous n'êtes pas autorisé à utiliser cet équipement")
elif nb > 1:
    print("Bonjour "+liste[1])
    print("Vous avez besoin d'un fabmanagerpour utiliser cet équipement")
else:
    print("Bonjour "+liste[2])
    print("Vous êtes habilité pour utiliser cet équipement")
