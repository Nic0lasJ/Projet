from sense_hat import SenseHat

sense = SenseHat()
sense.clear()

tmax = 64
tmin = tmax - 8


while True:
    temp = sense.get_temperature()
    print(temp)
    temp = int(temp) - tmin
    for x in range(0, 8):
        for y in range(0, temp):
            sense.set_pixel(x, y, [255, 0, 0])
        for y in range(temp, 8):
            sense.set_pixel(x, y, [0, 0, 0])
            if tmax <= 1
            return sense.set_pixel(0,0 [255, 0, 0])
            if tmax <= 2
            return sense.set_pixel(0,1 [255, 0, 0])
            if tmax <= 3
            return sense.set_pixel(0,2 [255, 0, 0])
            if tmax <= 4
            return sense.set_pixel(0,3 [255, 0, 0])
            if tmax <= 5
            return sense.set_pixel(0,4 [255, 0, 0])
            if tmax <= 6
            return sense.set_pixel(0,5 [255, 0, 0])
            if tmax <= 7
            return sense.set_pixel(0,6 [255, 0, 0])
            if tmax <= 8
            return sense.set_pixel(0,7 [255, 0, 0])
            if tmax <= 9
            return sense.set_pixel(1,0 [255, 0, 0])
            if tmax <= 10
            return sense.set_pixel(1,1 [255, 0, 0])
            if tmax <= 11
            return sense.set_pixel(1,2 [255, 0, 0])
            if tmax <= 12
            return sense.set_pixel(1,3 [255, 0, 0])
            if tmax <= 13
            return sense.set_pixel(1,4 [255, 0, 0])
            if tmax <= 14
            return sense.set_pixel(1,5 [255, 0, 0])
            if tmax <= 15
            return sense.set_pixel(1,6 [255, 0, 0])
            if tmax <= 16
            return sense.set_pixel(1,7 [255, 0, 0])
            if tmax <= 17
            return sense.set_pixel(2,0 [255, 0, 0])
            if tmax <= 18
            return sense.set_pixel(2,1 [255, 0, 0])
            if tmax <= 19
            return sense.set_pixel(2,2 [255, 0, 0])
            if tmax <= 20
            return sense.set_pixel(2,3 [255, 0, 0])
            if tmax <= 21
            return sense.set_pixel(2,4 [255, 0, 0])
            if tmax <= 22
            return sense.set_pixel(2,5 [255, 0, 0])
            if tmax <= 23
            return sense.set_pixel(2,6 [255, 0, 0])
            if tmax <= 24
            return sense.set_pixel(2,7 [255, 0, 0])
            if tmax <= 25
            return sense.set_pixel(3,0 [255, 0, 0])
            if tmax <= 26
            return sense.set_pixel(3,1 [255, 0, 0])
            if tmax <= 27
            return sense.set_pixel(3,2 [255, 0, 0])
            if tmax <= 28
            return sense.set_pixel(3,3 [255, 0, 0])
            if tmax <= 29
            return sense.set_pixel(3,4 [255, 0, 0])
            if tmax <= 30
            return sense.set_pixel(3,5 [255, 0, 0])
            if tmax <= 31
            return sense.set_pixel(3,6 [255, 0, 0])
            if tmax <= 32
            return sense.set_pixel(3,7 [255, 0, 0])
            if tmax <= 33
            return sense.set_pixel(4,0 [255, 0, 0])
            if tmax <= 34
            return sense.set_pixel(4,1 [255, 0, 0])
            if tmax <= 33
            return sense.set_pixel(4,2 [255, 0, 0])
            if tmax <= 34
            return sense.set_pixel(4,3 [255, 0, 0])
            if tmax <= 35
            return sense.set_pixel(4,4 [255, 0, 0])
sense.show_message(tmax)
