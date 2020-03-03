h = float(6.62607015*(10**(-34)))
c = float(299792458)
R = float(10973731.6)

print(h)
print(c)
print(R)

for i in range(6):
    j = 0
    i = 0
    while j >= i:
        res = -h*c*R*(1/((i+2)**2)-1/((j+1)**2))
        print(res)
        j = j+1
        i = i+1
