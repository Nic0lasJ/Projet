
from sense_hat import SenseHat
from time import sleep
sense = SenseHat()

def balle():
  sense.set_pixel(4,4,255,245,0)

y = 3

def raquette():
   sense.set_pixel(0, y, 0, 255, 0)
   sense.set_pixel(0, y+1, 0, 255, 0)
   sense.set_pixel(0, y-1, 0, 255, 0)

def mouvement_haut(event):
   global y
   if y > 1 and event.action=='pressed':
       y -= 1
   print(event)

def mouvement_bas(event):
   global y
   if y < 6 and event.action=='pressed':
       y += 1
   print(event)

sense.stick.direction_up = mouvement_haut
sense.stick.direction_down = mouvement_bas

while True:
   sense.clear(0, 0, 0)
   raquette()
   balle()
   sleep(0.0)


sense = SenseHat()
