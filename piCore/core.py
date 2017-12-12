'''
Core.py

'''

import pymysql, datetime, random, serial, time, _thread, re
from time import sleep
from subprocess import call

#declare an array for all 16 GPIOs
GPIOs_array=[11,12,13,15,16.18,19,21,22,23,24,26,31,32,33,35]
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False) #disable annoying warning messages

#set aside 16 gpio for 16 relays
gpio_list[11,12,13,15,16.18.19.21,22,23,24,26,31,32,33,35]
for gpio in range(15):
	GPIO.setup(gpio_list[gpio],GPIO.OUT)

#initialize all 16 GPIOs for relays to all off
for gpio in range(15):
	GPIO.output(gpio_list[gpio],GPIO.LOW)

#datatime(time stamp) for database
dt=datetime.datetime.now()

#make a serial cnnertion from Arduino
ser = serial.Serial('/dev/ttyUSB0', 9600)

#make a connection to mysql database
conn = pymysql.connect(
    host='localhost',
    user='pi',
    passwd='mamamia',
    db='agstatus_db',
    autocommit=True
)
cur = conn.cursor()

# Define 16 background threads for relays
#Once hardware is ready this will be grouped into a class
def relay_control_1(threadName, delay):
    #relay intervals
    on_time_1=1 #fetch from db
    off_time_1=1

    while True:
        relay_on(11)
        time.sleep(on_time_1)
        relay_off(11)
        time.sleep(off_time_1)

def relay_control_2(threadName, delay):
    #relay intervals
    on_time_2=1
    off_time_2=1
    print('thread started')

    while True:
        relay_on(12)
        time.sleep(on_time_2)
        relay_off(12)
        time.sleep(off_time_2)

def relay_control_3(threadName, delay):
    #relay intervals
    on_time_3=1
    off_time_3=1
    print('thread started')

    while True:
        relay_on(13)
        time.sleep(on_time_3)
        relay_off(13)
        time.sleep(off_time_3)

def relay_control_4(threadName, delay):
    #relay intervals
    on_time_4=1
    off_time_4=1
    print('thread started')

    while True:
        relay_on(15)
        time.sleep(on_time_4)
        relay_off(15)
        time.sleep(off_time_4)
        
def relay_control_5(threadName, delay):
    #relay intervals
    on_time_5=1 #fetch from db
    off_time_5=1

    while True:
        relay_on(16)
        time.sleep(on_time_5)
        relay_off(16)
        time.sleep(off_time_5)

def relay_control_6(threadName, delay):
    #relay intervals
    on_time_6=1 #fetch from db
    off_time_6=1

    while True:
        relay_on(18)
        time.sleep(on_time_6)
        relay_off(18)
        time.sleep(off_time_6)

def relay_control_7(threadName, delay):
    #relay intervals
    on_time_7=1 #fetch from db
    off_time_7=1

    while True:
        relay_on(19)
        time.sleep(on_time_7)
        relay_off(19)
        time.sleep(off_time_7)

def relay_control_8(threadName, delay):
    #relay intervals
    on_time_8=1 #fetch from db
    off_time_8=1

    while True:
        relay_on(21)
        time.sleep(on_time_8)
        relay_off(21)
        time.sleep(off_time_8)

def relay_control_9(threadName, delay):
    #relay intervals
    on_time_9=1 #fetch from db
    off_time_9=1

    while True:
        relay_on(22)
        time.sleep(on_time_9)
        relay_off(22)
        time.sleep(off_time_9)

def relay_control_10(threadName, delay):
    #relay intervals
    on_time_10=1 #fetch from db
    off_time_10=1

    while True:
        relay_on(23)
        time.sleep(on_time_10)
        relay_off(23)
        time.sleep(off_time_10)

def relay_control_11(threadName, delay):
    #relay intervals
    on_time_11=1 #fetch from db
    off_time_11=1

    while True:
        relay_on(24)
        time.sleep(on_time_11)
        relay_off(24)
        time.sleep(off_time_11)

def relay_control_12(threadName, delay):
    #relay intervals
    on_time_12=1 #fetch from db
    off_time_12=1

    while True:
        relay_on(26)
        time.sleep(on_time_12)
        relay_off(26)
        time.sleep(off_time_12)

def relay_control_13(threadName, delay):
    #relay intervals
    on_time_13=1 #fetch from db
    off_time_13=1

    while True:
        relay_on(31)
        time.sleep(on_time_13)
        relay_off(31)
        time.sleep(off_time_13)

def relay_control_14(threadName, delay):
    #relay intervals
    on_time_14=1 #fetch from db
    off_time_14=1

    while True:
        relay_on(32)
        time.sleep(on_time_14)
        relay_off(32)
        time.sleep(off_time_14)

def relay_control_15(threadName, delay):
    #relay intervals
    on_time_15=1 #fetch from db
    off_time_15=1

    while True:
        relay_on(33)
        time.sleep(on_time_15)
        relay_off(33)
        time.sleep(off_time_15)

def relay_control_16(threadName, delay):
    #relay intervals
    on_time_16=1 #fetch from db
    off_time_16=1

    while True:
        relay_on(35)
        time.sleep(on_time_16)
        relay_off(35)
        time.sleep(off_time_16)

#use the usbwebcam
def timelapse_cam(threadName, delay):
    print('thrtimelapse_camead started')
    while True:
        call(["fswebcam", "-d","/dev/video0", "-r", "256x128", "--no-banner", "/var/www/html/images/app_image.jpg"])
        sleep(5)
        
#relay functions
def relay_on(gpio):
	GPIO.output(gpio,GPIO.HIGH)
	
def relay_off(gpio):
	GPIO.output(gpio,GPIO.LOW)

def relay_ctl(sensor, gpio):
    if(device==sensor):
            relay_on(gpio)
    else:
        relay_off(gpio)
	
# Define read_data functions
def read_data():
    #data = "Random number {}".format(random.randint(1, 99)) #Test dummy data
    data = ser.readline()
    return data

def insert_to_db():
    cur.execute("INSERT INTO index_tb(data, dt) VALUES (%s, %s)", (data, dt))



# Create threads
'''
_thread.start_new_thread(relay_control_1, ("Thread_1", 1, ) )
_thread.start_new_thread(relay_control_2, ("Thread_2", 1, ) )
_thread.start_new_thread(relay_control_3, ("Thread_3", 1, ) )
_thread.start_new_thread(relay_control_4, ("Thread_4", 1, ) )

_thread.start_new_thread(relay_control_5, ("Thread_5", 1, ) )
_thread.start_new_thread(relay_control_6, ("Thread_6", 1, ) )
_thread.start_new_thread(relay_control_7, ("Thread_7", 1, ) )
_thread.start_new_thread(relay_control_8, ("Thread_8", 1, ) )

_thread.start_new_thread(relay_control_9, ("Thread_9", 1, ) )
_thread.start_new_thread(relay_control_10, ("Thread_10", 1, ) )
_thread.start_new_thread(relay_control_11, ("Thread_11", 1, ) )
_thread.start_new_thread(relay_control_12, ("Thread_12", 1, ) )

_thread.start_new_thread(relay_control_13, ("Thread_13", 1, ) )
_thread.start_new_thread(relay_control_14, ("Thread_14", 1, ) )
_thread.start_new_thread(relay_control_15, ("Thread_15", 1, ) )
_thread.start_new_thread(relay_control_16, ("Thread_16", 1, ) )
'''

_thread.start_new_thread(timelapse_cam, ("camera_thread", 1, ) )


while(True): # python keeps read data from Arduino continuously
    data = read_data()
    data = data.decode('utf-8')
    print(data)
    # into db
    insert_to_db()
    #find the last row
    sleep(4)
    sql="SELECT row_id FROM index_tb ORDER BY row_id DESC LIMIT 1"
    cur.execute(sql)
    last_id=cur.fetchone()
    for lastID in last_id:
        last_row=lastID
        print(last_row)

    #read data from last row of database
    sql=("SELECT data FROM index_tb WHERE row_id=%d" % last_row)
    cur.execute(sql)
    row_data_ser=cur.fetchone()
    for row_data in row_data_ser:        
        raw_data=row_data
        print(raw_data)
        device=raw_data[0:2]
        print('****')
        print(device)
        value=raw_data[3:7]
        
        value=float(value)
        print(value)
        print('----')



            
        
        

