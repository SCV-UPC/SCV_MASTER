import os
import time

os.system("python /home/pi/SCV/REMOTEOBJECTS/comandesLocals.py &")
os.system("python /home/pi/SCV/REMOTEOBJECTS/diferentsMicrofons.py &")
os.system("python /home/pi/SCV/REMOTEOBJECTS/executaComandes.py &")
os.system("python /home/pi/SCV/REMOTEOBJECTS/comprovaConnexio.py &")
os.system("python /home/pi/SCV/REMOTEOBJECTS/buffer.py &")
os.system("python /home/pi/SCV/REMOTEOBJECTS/fitxer.py &")
os.system("python /home/pi/SCV/CONFIGURATION/config.py &")

time.sleep(30)
os.system("python /home/pi/SCV/REMOTEOBJECTS/temporitzador1.py &")
os.system("python /home/pi/SCV/CONFIGURATION/temporitzador5.py &")
os.system("python /home/pi/SCV/MASTER/cercaRaspberrys.py &")

time.sleep(60)
os.system("python /home/pi/SCV/MASTER/comandesGlobals.py &")

time.sleep(30)
os.system("python /home/pi/SCV/MASTER/temporitzador0.py &")
os.system("python /home/pi/SCV/MASTER/temporitzador2.py &")
os.system("python /home/pi/SCV/MASTER/temporitzador3.py &")
os.system("python /home/pi/SCV/MASTER/temporitzador6.py &")
os.system("python /home/pi/SCV/WEBPAGE/temporitzador4.py &")
os.system("python /home/pi/SCV/MASTER/simulador.py &")
os.system("python /home/pi/SCV/JASPER2/Jasper2_remot.py &")

time.sleep(20)
os.system("python /home/pi/SCV/JASPER2/Jasper2.py")







