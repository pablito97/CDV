name = input("Podaj imie: ")
surname = input("Podaj nazwisko: ")

age = input("Podaj wiek: ", end="")

print(not isinstance(age, int))

while not isinstance(age, int):
    pass 
    age = input("Podaj wiek: ")

age = str(age)

print(name + surname + "- " + age + " lat")
