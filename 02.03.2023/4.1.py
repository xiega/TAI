file1 = open(r"C:\Users\student\Desktop\liczby_przyklad.txt", "r")
#for line in file1:
#    print(line)

def czy_pierwsza(n):
    if n == 2:
        return True
    if n % 2 == 0 or n <= 1:
        return False

    pierw = int(n**0.5) + 1
    for dzielnik in range(3, pierw, 2):
        if n % dzielnik == 0:
            return False
    return True
